<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class CourtController extends Controller
{
    /**
     * Display list of court
     *
     * @return Response
     */
    public function index()
    {
        return view('court.index');
    }

}
