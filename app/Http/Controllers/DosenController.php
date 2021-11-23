<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DosenModel;
class DosenController extends Controller
{
    public function index(){
        $dosen = DosenModel::all();
        return view('dosen',compact('dosen'));
    }
    public function create(){
        return view('doseninput');
    }
    public function inputdata(Request $request){
        DosenModel::create([
        'nip' => $request->nip,
        'nama' => $request->nama,
        'telp' => $request->telp,
        'email' => $request->email,
        ]);
        return redirect('dosen');
    }
    public function edit($id){
        $dosen=DosenModel::find($id);
        return view('edit_dosen',['dosen'=>$dosen]);
    }
    public function update(Request $request, $id){
        $dosen=DosenModel::find($id);
        $dosen->update($request->all());
        return redirect('dosen')->with('Berhasil','data telah di edit');
    }
    public function destroy($id){
        $dosen=DosenModel::find($id);
        $dosen->delete();
        return redirect('dosen')->with('Berhasil','Data Telah Dihapus');
    }
}
