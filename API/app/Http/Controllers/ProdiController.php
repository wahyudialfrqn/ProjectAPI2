<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Prodi;
use Illuminate\Http\Response;
class ProdiController extends Controller
{
    public function index(){
        $prodis = Prodi:: with('falkutas')->get();
        $data ['message'] = "success";
        $data ['status'] = 200;
        $data ['data']=$prodis;
        return response()->json($data,Response::HTTP_OK);
    }

    public function store(Request $request){
        $validation = $request->validate([
            'name'=>'required|unique:prodis',
            'falkutas'=>'required',
        ]);

        $prodis = Prodi::create ($validation);
        if($prodis){
            $data ['massage'] = 'succes';
            $data ['status'] = 200;
            $data['data']=$prodis;
            return response()->json($data,Response::HTTP_CREATED);
        };
    }

    public function update(Request $request, $prodi){
        $validation = $request->validate([
            'name'=>'required|unique:prodis',
            'falkutas'=>'required',
        ]);
        
        $prodi = Prodi :: where ('id',$prodi)->update($validation);
        if($prodi){
            $data ['massage'] = 'Data Berhasil Diupdate';
            $data ['status'] = 200;
            $data['data']=$prodi;
            return response()->json($data,Response::HTTP_OK);
        };
    }

    public function destroy($prodi){
        $prodi = Prodi :: where ('id',$prodi)->delete();
        if($prodi){
            $data ['massage'] = 'Data Prodi Berhasil Dihapus';
            $data ['status'] = 200;
            $data['data']=$prodi;
            return response()->json($data,Response::HTTP_OK);
        };
    }
}
