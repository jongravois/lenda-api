<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Transformers\UserTransformer;
use League\Fractal\Manager;
use League\Fractal\Resource\Collection;
use League\Fractal\Resource\Item;

class UsersController extends ApiController
{
    protected $users;

    public function __construct(User $users)
    {
        $this->users = $users;
    }


    public function index(Manager $fractal, UserTransformer $userTransformer)
    {
        $users = User::all();
        $collection = new Collection($users, $userTransformer);
        $data = $fractal->createData($collection)->toArray();
        return $this->respond($data);
    }

    public function create()
    {
        //
    }

    public function store()
    {
        //
    }

    public function show($id, Manager $fractal, UserTransformer $userTransformer)
    {
        $user = $this->user->findOrFail($id);
        $item = new Item($user, $userTransformer);
        $data = $fractal->createData($item)->toArray();
        return $this->respond($data);
    }

    public function edit($id)
    {
        //
    }

    public function update($id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
