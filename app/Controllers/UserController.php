<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class UserController extends BaseController
{
    public function index()
    {
        //
    }
    
    public function profile($nama="", $kelas="", $npm="")
    {
        $data = [
            'nama' => 'Ika Rahma Alia',
            'kelas' => 'C',
            'npm' =>  '2117051016'
        ];
        return view('profile', $data);
    }

    public function create(){
        // $kelas = [
        //     [
        //         'id'=>1,
        //         'nama_kelas'=>'A'
        //     ],
        //     [
        //         'id'=>2,
        //         'nama_kelas'=>'B'
        //     ],
        //     [
        //         'id'=>3,
        //         'nama_kelas'=>'C'
        //     ],
        //     [
        //         'id'=>4,
        //         'nama_kelas'=>'D'
        //     ],
        // ];

        return view('create_user');
    }

     public function store()
    {
        $data = [
            'nama' => $this -> request->getVar('nama'),
            'kelas' => $this -> request->getVar('kelas'),
            'npm' => $this -> request->getVar('npm'),
            
        ];
        return view('profile', $data);

    }

}
