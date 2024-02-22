<?php

namespace App\Controllers;
use App\Models\PasienModel;
use App\Models\NakesModel;
use App\Models\BeratBadanModel; 

class DashboardController extends BaseController
{
    public function index(): string
    {
        $pasienModel = new PasienModel();
        $nakesModel = new NakesModel();
        $beratBadanModel = new BeratBadanModel(); 

        $data = [
            'jumlahPasien' => $pasienModel->countAll(),
            'jumlahNakes' => $nakesModel->countAll(),
            'dataBeratBadan' => json_encode($beratBadanModel->getBeratBadanData()),
            'usiaKehamilanData' => json_encode($pasienModel->getUsiaKehamilanData())
        ];

        return view('index', $data);
    }
}
