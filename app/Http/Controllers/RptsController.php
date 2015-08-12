<?php

namespace App\Http\Controllers;

use App\Loan;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class RptsController extends Controller
{
    public function index()
    {
        return view('reports');
    }

    public function cropmix()
    {
        $loans = Loan::with('location.regions')->get();
        //return $loans;
        return view('reports.cropmix', compact('loans'));
    }
}
