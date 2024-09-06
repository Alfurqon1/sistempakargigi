<?php 

namespace App\Controllers;

//kita panggil model untuk menampung data diagnosa pasien
use App\Models\DiagnosaPasienModel;

//kita buat controller DiagnosaPasien
class DiagnosaPasien extends BaseController
{
    //kita buat method dataDiagnosaPasien
    public function dataDiagnosaPasien()
    {
        //variable dataPasien
        $dataPasien = new DiagnosaPasienModel();

        $data = [
            'title' => 'Data Diagnosa Pasien',
            'dataPasien' => $dataPasien->findAll()
        ];
        return view ('dokter/ViewDataDiagnosaPasien', $data);
    }
}

?>