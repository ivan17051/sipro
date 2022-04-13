<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Validator;
use Datatables;
use App\Pegawai;
use App\Barang;
use App\Stok;
use App\Transaksi;

class DataMasterController extends Controller
{
    public function pegawai(){
        $pegawai = Pegawai::all();
        return view('masterData.pegawai', ['pegawai'=>$pegawai]);
    }
    public function barang(){
        $barang = Barang::all();
        return view('masterData.barang', ['barang'=>$barang]);
    }
    public function stok(){
        
    }


    public function storeUpdatePegawai(Request $request){
        $userId = Auth::id();
        
        $input = array_map('trim', $request->all());
        $validator = Validator::make($input, [
            'id' => 'nullable|exists:mpegawai,id',
            'nik' => 'string',
            'nip' => 'required|string',
            'nama' => 'required|string',
            'nokartu' => 'required|string',
            'tempatlahir' => 'required|string',
            'tanggallahir' => 'required|string',
            'jeniskelamin' => 'required|string',
            'alamat' => 'string',
            'nohp' => 'string',
            'status' => 'integer',
        ]);
        
        if ($validator->fails()) return back()->with('error','Gagal Menyimpan');
        try {
            $input = $validator->valid();
            if(isset($input['id'])){
                $model = Pegawai::firstOrNew([
                    'id' => $input['id']
                ]);
            }else{
                $model = new Pegawai();
            }
            $model->fill($input);    
        } catch (\Exception $e) {
            return back()->with('error', $e->getMessage());
        }
        
        $model->save();
        return back()->with('success','Berhasil Menyimpan');
    }
    public function deletePegawai(Request $request){
        try {
            $model=Pegawai::find($request->input('id'));
            $penilaian=Penilaian::select('id','idpegawai')->where('idpegawai', $request->input('id'))->first();
            if(isset($penilaian)){
                return back()->with('error','Pegawai Memiliki Histori Penilaian');
            }
            $model->delete();
            return back()->with('success','Berhasil menghapus');
        } catch (\Throwable $th) {
            return back()->with('error','Gagal menghapus');
        }
    }
    public function storeUpdateBarang(Request $request){
        $userId = Auth::id();
        
        $input = array_map('trim', $request->all());
        $validator = Validator::make($input, [
            'id' => 'nullable|exists:mpendidikan,id',
            'nama' => 'required|string',
        ]);
        if ($validator->fails()) return back()->with('error','Gagal Menyimpan');
        try {
            $input = $validator->valid();
            if(isset($input['id'])){
                $model = Pendidikan::firstOrNew([
                    'id' => $input['id']
                ]);
            }else{
                $model = new Pendidikan();
            }
            $model->fill($input);    
        } catch (\Exception $e) {
            return back()->with('error', $e->getMessage());
        }
        
        $model->save();
        return back()->with('success','Berhasil Menyimpan');
    }
    
}
