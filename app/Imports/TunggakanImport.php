<?php

namespace App\Imports;

use App\Tunggakan;
use Maatwebsite\Excel\Concerns\ToModel;

class TunggakanImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Tunggakan([
            'rayon_id' => 1,
            'user_nis' => $row[0],
            'va_jumlah' => $row[1],
            'va_bulan' => $row[2],
            'tunai_jumlah' => $row[3],
            'tunai_bulan' => $row[4],
            'dsp' => $row[5],
            'sertifikat' => $row[6],
            'pondokan' => $row[7],
            'perpisahan' => $row[8],
            'dana_ganjil' => $row[9],
            'dana_genap' => $row[10],
            'kunjungan_industri' => $row[11],
            'bpjs' => $row[12],
            'toeic' => $row[13],
            'total' => $row[14]
        ]);
    }
}
