<?php

namespace App\Http\Controllers;

use App\Transformers\UserTransformer;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use JWTAuth;
use League\Fractal\Manager;
use League\Fractal\Resource\Collection;
use Tymon\JWTAuth\Exceptions\JWTException;
use App\User;

class AuthenticateController extends ApiController
{

    public function __construct()
    {
        $this->middleware('jwt.auth', ['except' => ['authenticate']]);
    }

    public function index()
    {

        $users = User::all();

        return $users;
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->only('email', 'password');

        try {
            // verify the credentials and create a token for the user
            if (! $token = JWTAuth::attempt($credentials)) {
                return response()->json(['error' => 'invalid_credentials'], 401);
            }
        } catch (JWTException $e) {
            // something went wrong
            return response()->json(['error' => 'could_not_create_token'], 500);
        }

        // if no errors are encountered we can return a JWT
        return response()->json(compact('token'));
    }

    public function getAuthenticatedUser(Manager $fractal, UserTransformer $userTransformer)
    {
        try {
            if (! $user = JWTAuth::parseToken()->authenticate()) {
                return response()->json(['user_not_found'], 404);
            }
        } catch (Tymon\JWTAuth\Exceptions\TokenExpiredException $e) {
            return response()->json(['token_expired'], $e->getStatusCode());
        } catch (Tymon\JWTAuth\Exceptions\TokenInvalidException $e) {
            return response()->json(['token_invalid'], $e->getStatusCode());
        } catch (Tymon\JWTAuth\Exceptions\JWTException $e) {
            return response()->json(['token_absent'], $e->getStatusCode());
        }

        // the token is valid and we have found the user via the sub claim ... now we get related user data and return full user object
        $fullUser = $user->load('locations', 'notifications', 'optimizerviewoptions', 'viewfilters', 'viewoptions')->where('id', $user->id)->get();
        $collection = new Collection($fullUser, $userTransformer);
        $data = $fractal->createData($collection)->toArray();
        return $this->respond($data);
    }
}