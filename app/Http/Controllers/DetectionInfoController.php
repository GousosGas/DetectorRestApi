<?php

namespace App\Http\Controllers;

use App\DetectionInfo;
use Illuminate\Http\Request;

class DetectionInfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $deviceInfo = DetectionInfo::all();
        return response()->json(['data' => $deviceInfo], 200);
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
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

      /*  $rules=[
            'user_ip'=>'required',
            'device'=>'required',
            'operating_system'=>'required',
        ];


        $this->validate($request,$rules);*/

        $randomPublicId=str_random(10);
        $data= $request->all();
        $data['public_id']=$randomPublicId;

        $store = DetectionInfo::create($data);
        return response()->json($store, 201);


    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($public_id)
    {
        $deviceInfo = DetectionInfo::where('public_id', $public_id)->firstOrFail();
        return response()->json(['data' => $deviceInfo], 200);


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $public_id)
    {
        $deviceInfo = DetectionInfo::where('public_id', $public_id)->firstOrFail();


        if($request->has('user_ip')){
            $deviceInfo->user_ip=$request->user_ip;
        }
        if($request->has('device')){
            $deviceInfo->device=$request->device;
        }
        if($request->has('operating_system')){
            $deviceInfo->operating_system=$request->operating_system;
        }

        if(!$deviceInfo->isDirty()){
            return response()->json(['error' => 'You need to update the values'], 422);
        }

        $deviceInfo->save();
        return response()->json($deviceInfo, 200);


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($public_id)
    {
        $deviceInfo = DetectionInfo::where('public_id', $public_id)->firstOrFail();

        $deviceInfo->delete();
        return response()->json(null, 204);

    }
}
