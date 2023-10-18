<?php

namespace App\Database\Seeds;

use App\Models\KelasModel;
use CodeIgniter\Database\Seeder;

class KelasSeeder extends Seeder
{
    public function run()
    {
        $kelas_model = new KelasModel();
        $kelas_model->save([
            'nama_kelas' => 'A',
        ]);
        $kelas_model->save([
            'nama_kelas' => 'B',
        ]);
        $kelas_model->save([
            'nama_kelas' => 'C',
        ]);
        $kelas_model->save([
            'nama_kelas' => 'D',
        ]);
    }
}
