<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Guru;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

class GuruController extends Controller
{
    public function index(){
        $guru = Guru::get();
        return view('dataGuru.index',['guru'=>$guru]);
    }
    public function create(){
        return view('dataGuru.input');
    }
    public function store(Request $request){
        $request->validate([
            'nip'=>'required',
            'nama_guru'=>'required',
            'alamat'=>'required',
            'no_hp'=>'required',
        ]);;
        Guru::create([
            'nip'=>$request->nip,
            'nama_guru'=>$request->nama_guru,
            'alamat'=>$request->alamat,
            'no_hp'=>$request->no_hp,
        ]);
        return redirect('/dataGuru')->with('success', 'Data guru berhasil disimpan.');
    }
    public function edit($id){
        $dataGuru=Guru::all();
        $dataGuru=Guru::findorfail($id);
        return view('dataGuru.edit',compact('dataGuru'),['dataGuru'=>$dataGuru]);
    }
    public function update(Request $request, $id) {
        $request->validate([
            'nip'=>'required',
            'nama_guru'=>'required',
            'alamat'=>'required',
            'no_hp'=>'required',
        ]);
        $guru = Guru::findOrFail($id); 

    $guru->nip = $request->nip;
    $guru->nama_guru = $request->nama_guru;
    $guru->alamat = $request->alamat;
    $guru->no_hp = $request->no_hp;
    $guru->save(); // Simpan perubahan

    return redirect('/dataGuru')->with('success', 'Data guru berhasil diperbarui.');
    }
    public function destroy($id){
        $guru=Guru::findorfail($id);
        $guru->delete();
        return redirect('/dataGuru')->with(['success' => 'Data Guru Berhasil Dihapus!']);
    }
}
