<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Absensi;
use App\Models\Guru;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class AbsensiController extends Controller
{
    public function index(){
        $absen=Absensi::get();
        return view('absensi.index',['absen'=>$absen]);
    }
    public function create(){
        $guru=Guru::get();
        $waktu = Carbon::now();
        return view('absensi.input',['gr'=>$guru, 'waktu'=>$waktu]);
    }
    public function store(Request $request){
        {
            $request->validate([
                'nama_guru' => 'required',
                'waktu' => 'required',
                'keterangan' =>'required',
            ]);
    
    
            Absensi::create([
                'nama_guru' => $request->nama_guru,
                'waktu'=> $request->waktu,
                'keterangan'=> $request->keterangan,
            ]);
        return redirect ('/absensi/create');
        }
    }
}
