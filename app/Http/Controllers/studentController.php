<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\student;


class studentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        print_r($request->input);
       $student = new student;
       
       $student->stuname = $request->input('stuname');
       $student->email = $request->input('email');
       $student->std = $request->input('std');
       $student->phoneno = $request->input('phone');
       $student->age = $request->input('age');
       $student->state = $request->input('state');
       $student->city = $request->input('city');
       $student->address = $request->input('address');
       $student->pincode = $request->input('pincode');
       $student->image = $request->file('image');
       return $request->image->store('public');
       $request->file('image');
       $student->save();
       

       return redirect('/dashboard')->with('info', 'Student add Successfully!');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store123(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
