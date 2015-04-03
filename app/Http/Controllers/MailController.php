<?php namespace App\Http\Controllers;

use App\Http\Requests\MailFormRequest;

class MailController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

	/**
	 * Send the e-mail.
	 *
	 * @param  Request  $request
	 * @return Response
	 */
	public function sendMail(MailFormRequest $request){

		\Mail::send('emails.welcome',
			array(
				'name' => $request->get('name'),
				'email' => $request->get('email'),
				'message' => $request->get('message')
				), function($message)
			{
				$message->from('simongheeraert@hotmail.com');
				$message->to('simongheeraert@hotmail.com', 'Admin')->subject('Contact Request');
			});

		return \Redirect::route('thanks');

	}

}