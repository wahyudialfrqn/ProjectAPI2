<?php

namespace App\Http\Controllers;

use App\Models\Falkutas;
use Illuminate\Http\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class FalkutasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $falkutas = Falkutas::all();
        $data ['message'] = "success";
        $data['status'] = 200;
        $data['data'] = $falkutas;
        return response()->json($data,Response::HTTP_OK);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $val = $request->validate([
            'name' => 'required|unique:falkutas',
        ]);

        $result = Falkutas::create($val);
        if($result){
            $data ['message'] = "success";
            $data ['status'] =200;
            $data ['data']=$result;
            return response()->json($data,Response::HTTP_CREATED);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Falkutas $falkutas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Falkutas $falkutas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $val = $request->validate([
            'name'=>'required|',
        ]);
        
        $result = Falkutas :: where ('id', $id)->update($val);

        if($result){
            $data ['message'] = "success";
            $data ['status'] = 200;
            $data ['data']=$result;
        return response()->json($data,Response::HTTP_OK);
        }

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $falkutas)
    {
        $result = Falkutas :: where ('id', $falkutas)->delete();
        if($result){
            $data ['message'] = "Berhasil Dihapus Data Falkutas";
            $data ['status'] = 200;
            $data ['data']=$result;
        return response()->json($data,Response::HTTP_OK);
        }
    }
}
