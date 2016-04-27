<?php

namespace Ctrlasis\Http\Controllers;

use Illuminate\Http\Request;

use Ctrlasis\Http\Requests;
use Ctrlasis\Http\Controllers\Controller;

class AdmiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('index');
    }

}
