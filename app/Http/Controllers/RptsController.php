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

    public function activedetail()
    {
        $loans = Loan::with('location.regions')->get();
        //return $loans;
//        dd($loans);
        return view('reports.activedetail', compact('loans'));
    }

    public function cropmix()
    {
        $loans = Loan::with('location.regions')->get();
        //return $loans;
//        dd($loans);
        return view('reports.cropmix', compact('loans'));
    }

    public function dump()
    {
        $loans = Loan::with('location.regions')->get();
        return $loans;
    }
}
