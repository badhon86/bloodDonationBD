<?php

namespace App\Http\Controllers;
use session;
use Illuminate\Support\Facades\DB;
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
        $gdData = DB::table('donarforms')->get();
        return view('donarlist',compact('gdData'));
        // return view('donarlist');
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
//   dd($request->all());

        $this->validate($request, [
            'fist_name' => 'required',
            'last_name' =>'required',
            'gender' =>'required',
            'birth_date' => 'required',
            'blood_group' => 'required',
            'address' =>'required',
            'division' =>'required',
            'district' => 'required',
            'upozilla' => 'required',
            'nationality' =>'required',
            'email' =>'required',
            'phone' => 'required',
            'lastdonate' => 'required',
        ]);
        donarform::create([
            'fist_name' => $request->fist_name,
            'last_name' =>$request->last_name,
            'gender' =>$request->gender,
            'birth_date' => $request->birth_date,
            'blood_group' =>$request->blood_group,
            'address' =>$request->address,
            'division' =>$request->division,
            'district' => $request->district,
            'upozilla' => $request->upozilla,
            'nationality' =>$request->nationality,
            'email' =>$request->email,
            'phone' => $request->phone,
            'lastdonate' => $request->lastdonate,
        ]);
        $request->session()->flash('success', 'donar registered successfully');
        return redirect()->back();
// dd('$donarforms');
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
