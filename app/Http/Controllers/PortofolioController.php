<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

use App\Models\Portofolio;

class PortofolioController extends Controller
{
    //
    function show(){
        $data['portofolio'] = Portofolio::all();
        
        return view('portofolio',$data);

    }

    function add(){
        $data = [
            'action' => url('portofolio/create'),
            'portofolio' => (object)[
                'tittle' => '',
                'kategori' => '',
                'deskripsi' => '',
                'foto_porto' => '',
            ],
        ];
        return view('formportofolio',$data);
    }

    function create(Request $req){
        $this->validate($req,[
            // 'tittle'=> 'required',
            // 'kategori'=> 'required',
            // 'deskripsi'=> 'required',
            // 'foto_porto'=> 'required',
        ]);
        Portofolio::create([
            'tittle' => $req->tittle,
            'kategori' => $req->kategori,
            'deskripsi' => $req->deskripsi,
            'foto_porto'=> $req->file('foto_porto')->store('foto_porto')
        ]);
        return redirect('portofolio');
    }

    function delete($id){
        $portofolio = Portofolio::where('id',$id)->first();
        $portofolio->delete();
        Storage::delete($portofolio->foto_porto);
        return redirect('portofolio');
      }

      function edit($id){
        $data['portofolio'] = Portofolio::find($id);
        $data['action'] = url('portofolio/update').'/'.$data['portofolio']->id;
        $data['tombol'] = 'update';
        return view('formportofolio',$data);
      }

      function update(request $req){
        // $this->validate($req,[
        //     'tittle'=> 'required|numeric',
        // ]);
        if($req->file('foto_porto')){
            $file = $req->file('foto_porto')->store('foto_porto');
        }else{
            $file= DB:: row('foto_porto');
        }
        Portofolio::where('id',$req->id)->update([
            'tittle' =>$req->tittle,
            'kategori' => $req->kategori,
            'deskripsi' => $req->deskripsi,
            'foto_porto' => $file,

        ]);
        return redirect('portofolio');
      }
    
}
