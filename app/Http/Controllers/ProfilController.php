<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use App\Models\Profil;
use App\Models\Portofolio;

use Symfony\Component\HttpKernel\Profiler\Profile;

class ProfilController extends Controller
{
    //
    function profil(){
        $data ['profil'] = Profil::first();
        return view('profil', $data);
    }

    function show(){
        $data ['profil'] = Profil::all();
        $data ['portofolio'] = Portofolio::all();

        return view('tampilan', $data); 
    }

    function add(){
        $data = [
            'action' => url('profil/create'),
            'profil' => (object)[
                'nama' => '',
                // 'alamat' => '',
                // 'jeniskelamin' => '',
                // 'tempatlahir' => '',
                // 'tanggallahir' => '',
                'about' => '',
                'foto' => '',
            ],
        ];
    }

    function create(Request $req){
        $this -> validate($req, [
            'nama' => 'required|string',
           

           
        ]);
        Profil::create([
            'nama' =>$req->nama,
            //  'alamat' =>$req->alamat,
            //  'jeniskelamin' =>$req->jeniskelamin,
            //  'tempatlahir' =>$req->tempatlahir,
            //  'tanggallahir' =>$req->tanggallahir,
             'about' =>$req->about,
             'foto'  =>$req->file('foto')->store('foto'),
        ]);

        return redirect('profil');
    }
    

    function edit($id){
        $data['profil']=Profil::find($id);
        $data['action']= url('profil/update').'/'.$data['profil']->id;
        $data['tombol']= 'update';
        return view('profil',$data);
    }

    function update(request $req){


        if($req->file('foto')){
            $file = $req->file('foto')->store('foto');
        }else{
            $file= DB:: row('foto');
        }
        
        Profil::where('id',$req->id)->update([
            'nama'=>$req->nama,
            // 'alamat'=>$req->alamat,
            // 'jeniskelamin'=>$req->jeniskelamin,
            // 'tempatlahir'=>$req->tempatlahir,
            // 'tanggallahir'=>$req->tanggallahir,
            'about'=>$req->about,
            'foto'=>$file,
        ]);

       
        return redirect('profil');
    }
}           
