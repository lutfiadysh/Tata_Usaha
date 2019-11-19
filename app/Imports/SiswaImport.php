<?php

namespace App\Imports;

use App\User;
use Maatwebsite\Excel\Concerns\ToModel;

class SiswaImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        if($row[3] == "Sukasari 2"){
            $row[3] = 1;
        }else if ($row[3] == "Sukasari 1"){
            $row[3] = 2;
        }
        return new User([
            'name' => $row[1],
            'nis' => $row[0],
            'rombel' => $row[2],
            'role' => "siswa",
            'rayon_id' => $row[3],
            'password' => \Hash::make($row[0]),
            'email' => $row[5],
            'tahun_pelajaran' => $row[4],
        ]);
    }
}
