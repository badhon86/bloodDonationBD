<?php

namespace App\Http\Controllers;
use App\Models\donarform;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('donar');
    }

    public function donarList()
    {
        return view('donarlist');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $donarforms=new donarforms;
        $donarforms->fist_name=$request->get('fist_name');
        $donarforms->last_name=$request->get('last_name');
        $donarforms->gender=$request->get('gender');
        $donarforms->birth_date=$request->get('birth_date');
        $donarforms->blood_group=$request->get('blood_group');
        $donarforms->address=$request->get('address');
        $donarforms->division=$request->get('division');
        $donarforms->district=$request->get('district');
        $donarforms->upozilla=$request->get('upozilla');
        $donarforms->nationality=$request->get('nationality');
        $donarforms->email=$request->get('email');
        $donarforms->phone=$request->get('phone');
        $donarforms->lastdonate=$request->get('lastdonate');
        $donarforms->save();

        echo "<h1>Data add successfully.....</h1>";

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
