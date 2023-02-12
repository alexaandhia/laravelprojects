<?php

namespace App\Http\Controllers;

use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;
use PhpParser\Node\Stmt\Return_;
use PDF;

class UserController extends Controller
{
    public function landpage(){
        return view('landpage.index');
    }
    public function index()
    {
        $response = Http::get('https://akmalweb.my.id/api/daftar_smp.php');
        $data = $response->json();
        // dd($data);
        
        return view('register.register', compact('data'));
    }

    public function store(Request $request)
    {
        // dd($request->all()); 
        $select = $request->asal_sekolah;

        if($select == "sekolah_lainnya" ){
            $ambil = $request->asal_sekolah_lainnya;
        }else{
            $ambil = $request->asal_sekolah;
        }
       
        $request->validate([
            'nisn' => 'required',
            'jk' => 'required',
            'nama_lengkap' => 'required',
            'asal_sekolah' => 'required',
            'email'=> 'required|unique:users',
            'no_hp' => 'required',
            'no_hp_ayah' => 'required',
            'no_hp_ibu' => 'required'
          
        ]);

             User::create([            
                'nisn' => $request->nisn,
                'jk' => $request->jk,
                'nama_lengkap' => $request->nama_lengkap,
                'asal_sekolah' => $ambil,
                'email'=> $request->email,
                'no_hp' => $request->no_hp,
                'no_hp_ayah' => $request->no_hp_ayah,
                'no_hp_ibu' =>$request->no_hp_ibu,
                'password' =>  Hash::make($request->nisn),
                'role' => 'user',
             ]);

        $item = User::latest()->first();
        return view('register.output', compact('item'));

       


    
    }
    
}
