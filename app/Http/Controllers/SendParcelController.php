<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SendParcel;

class SendParcelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('parcel_send');
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
        $data = $request->validate([
            'sender_name' => 'required',
            'sender_email' => 'required',
            'sender_phone' => 'required',
            'sender_address' => 'required',
            'receiver_name' => 'required',
            'receiver_email' => 'required',
            'receiver_phone' => 'required',
            'receiver_address' => 'required',
            'parcel' => 'required',
            'weight' => 'nullable',
            
        ]);

        $data['fee'] = '5.05';
        $data['track_no'] = $this->track_no();
        SendParcel::create($data);
        return redirect()->back();
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

    private function track_no(){
        $code = rand(10000000,999999999);
        $check = SendParcel::where('track_no',$code)->count();
        if($check == 0){
            return $code;
        }
        else{
            return $this->track_no();
        }
    }
}
