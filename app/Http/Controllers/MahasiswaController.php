<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Http;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mahasiswas = Mahasiswa::with('prodi')->get();
        $data ['message'] = "success";
        $data['status'] = 200;
        $data['data'] = $mahasiswas;
        return response()->json($data,Response::HTTP_OK);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = Http ::get('https://fakestoreapi.com/users')->json();
        return view('user',compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $val = $request->validate([
            'npm' => 'required',
            'name'=>'required|',
            'tanggallahir'=>'required',
            'tempat_lahir'=>'required',
            'alamat'=>'required',
            'prodis'=>'required',
        ]);

        $mahasiswas = Mahasiswa::create($val);
        if($mahasiswas){
            $data ['message'] = "success";
            $data ['status'] =200;
            $data ['data']=$mahasiswas;
            return response()->json($data,Response::HTTP_CREATED);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Mahasiswa $mahasiswa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Mahasiswa $mahasiswa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $mahasiswa)
    {
   
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $mahasiswa)
    {
        $result = Mahasiswa :: where ('id', $mahasiswa)->delete();
            if($result){
                $data ['message'] = "Data Mahasiswa Berhasil Dihapus";
                $data ['status'] = 200;
                $data ['data']=$result;
                return response()->json($data,Response::HTTP_OK);
            }
    }
}
