<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApplicantHomeController extends Controller
{
	public function __construct()
	{
		$this->middleware('applicant.user');
	}

	public function index()
	{
		return view("applicant-home");
	}
}
