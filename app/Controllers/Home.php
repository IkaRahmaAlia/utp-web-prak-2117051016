<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('welcome_message');
    }

    public function profile(){
        $data =[
            'nama' => 'Ika Rahma Alia',
            'kelas' => 'C',
            'npm' => '2117051016'
        ];
        return view ('profile', $data);
    }

    // public function profile($nama="", $kelas="", $npm="")
    // {
    //     $data = [
    //         'nama' => 'Ika Rahma Alia',
    //         'kelas' => 'C',
    //         'npm' =>  '2117051016'
    //     ];
    //     return view('profile', $data);
    // }
}
