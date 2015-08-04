<?php

namespace App\Http\Controllers;

use App\Matrix;
use App\Rescat;
use App\Responsibility;
use App\ResponsibilityRole;
use App\Transformers\MatrixTransformer;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use League\Fractal\Manager;
use League\Fractal\Resource\Collection;
use League\Fractal\Resource\Item;

class MatrixController extends ApiController
{
    protected $records;

    public function __construct(Matrix $records)
    {
        $this->records = $records;
    }

    public function index()
    {
        // show all
        $data = ResponsibilityRole::with('responsibilities.category','role')->get();
        return $this->respond($data);
    }
}
