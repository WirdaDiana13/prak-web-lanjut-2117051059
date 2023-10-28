<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;
use App\Models\KelasModel;

class KelasController extends BaseController
{
    public $userModel;
    public $kelasModel;

    public function __construct()
    {
        $this->userModel = new UserModel();
        $this->kelasModel = new KelasModel();
    }

    public function index(){
        $data = [
            'title' => 'List Kelas',
            'users' => $this->kelasModel->getKelas(),
        ];
        return view ('list_kelas', $data);
    }

    public function kelas($kelas = ''){
        // session();
         $data = [
             'kelas' => $kelas,
         ];
         return view('kelas', $data);
     }

    public function create(){
    
        $data = [
            'title' => 'Create Kelas',
            
        ];
        return view('create_kelas', $data);
    }

    public function store(){
        
       $this->kelasModel->saveKelas([
        'nama_kelas' => $this->request->getVar('nama_kelas'),
       ]);
   
    
        return redirect()->to('/kelas');

    }

    public function show($id){
        $user = $this->kelasModel->getKelas($id);

        $data = [
            'title'  => 'Kelas',
            'user'      => $user,
        ];

        return view('kelas', $data);
    }

    public function edit($id){
        $kelas = $this->kelasModel->getKelas($id);

        $data = [
            'title' => 'Edit Kelas',
            'kelas' => $kelas,
        ];
        return view('edit_kelas', $data);
    }

    public function update($id){
        
        $data = [
            'nama_kelas' => $this->request->getVar('nama_kelas'),
            
        ];

        $result = $this->kelasModel->updateKelas($data, $id);

        if(!$result){
            return redirect()->back()->withInput()
            ->with('error', 'Gagal Menyimpan Data');
        }
        return redirect()->to('/kelas');
    }

    public function destroy($id){
        $result = $this->kelasModel->deleteKelas($id);
        
        if(!$result){
            return redirect()->with('error', 'Gagal menghapus data');
        }
        return redirect()->to(base_url('/kelas'))
        ->with('succes', 'Berhasil menghapus data');
    }
}