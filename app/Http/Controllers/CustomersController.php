<?php

namespace App\Http\Controllers;

use App\Customers;
use Illuminate\Http\Request;

class CustomersController extends Controller
{
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
		$customers = Customers::paginate(10);
		return view('customer_view',compact('customers'));
		
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create()
	{
		 return view('customer');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request)
	{
		//dd($request->all());

		 $this->validate($request, [
            'name' => 'required',
            'email' => 'required'
        ]);

		$customers = new Customers;

		$customers->name = $request->input('name');
		$customers->email = $request->input('email');
		$customers->phno = $request->input('phno');
		$customers->save();

		return response(array('status'=>'Success...'));

		return redirect()->route('customer.view');

	}

	/**
	 * Display the specified resource.
	 *
	 * @param  \App\Customers  $customers
	 * @return \Illuminate\Http\Response
	 */
	public function show(Customers $customers)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  \App\Customers  $customers
	 * @return \Illuminate\Http\Response
	 */
	public function edit(Customers $customers)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \App\Customers  $customers
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, Customers $customers)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  \App\Customers  $customers
	 * @return \Illuminate\Http\Response
	 */
	public function destroy(Customers $customers)
	{
		//
	}
}
