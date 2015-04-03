<?php namespace App\Http\Controllers;

class WelcomeController extends Controller { 

	/*
	|--------------------------------------------------------------------------
	| Welcome Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders the "marketing page" for the application and
	| is configured to only allow guests. Like most of the other sample
	| controllers, you are free to modify or remove it as you desire.
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('guest');
	}

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('portfolio.builtbysimon');
	}

	/**
	 *
	 * @return Response
	 */
	public function showSkills()
	{
		return view('portfolio.skills');
	}

	/**
	 *
	 * @return Response
	 */
	public function showWork()
	{
		return view('portfolio.work');
	}

	/**
	 *
	 * @return Response
	 */
	public function showAbout()
	{
		return view('portfolio.about');
	}

	/**
	 *
	 * @return Response
	 */
	public function showThanks()
	{
		return view('portfolio.thankyou');
	}



}
