<?php 
namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\BeratBadanModel;
use App\Models\PasienModel;

class BeratBadanController extends BaseController
{
    public function index()
    {
        $model = new BeratBadanModel();
        $data['lapor_bb'] = $model->getBeratBadanWithNamaPasien();

        return view('tabel_lapor_bb', $data);
    }

    public function tambah()
    {
        helper('form');
        return view('tambah_data_bb.php');
    }

    public function simpan()
    {
        $model = new BeratBadanModel();

        $data = [
            'ID_Pasien' => $this->request->getPost('ID_Pasien'),
            'berat_badan' => $this->request->getPost('berat_badan'),
            'created_at' => $this->request->getPost('created_at')
        ];

        $model->insert($data);

        // Redirect ke halaman utama tabel-berat-badan setelah penyimpanan berhasil
        return redirect()->to(base_url('data-berat-badan'));
    }

    public function edit($ID_lapor)
    {
        $model = new BeratBadanModel();
        $data['lapor_bb'] = $model->find($ID_lapor);

        helper('form');
        return view('edit_data_berat_badan.php', $data);
    }

    public function update()
    {
        $model = new BeratBadanModel();

        $data = [
            'ID_Pasien' => $this->request->getPost('ID_Pasien'),
            'berat_badan' => $this->request->getPost('berat_badan'),
            'created_at' => $this->request->getPost('created_at')
        ];

        $ID_riwayat = $this->request->getPost('ID_lapor');

        $model->update($ID_riwayat, $data);

        // Redirect ke halaman utama kategori setelah pembaruan berhasil
        return redirect()->to(base_url('data-berat-badan'));
    }

    public function delete($ID_lapor)
    {
        $model = new BeratBadanModel();
        $model->delete($ID_lapor);

        // Redirect ke halaman utama kategori setelah penghapusan berhasil
        return redirect()->to(base_url('data-berat-badan'));
    }


    public function form_grafik()
{
    $model = new PasienModel(); // Ganti dengan nama model yang sesuai
    $pasien = $model->findAll(); // Mengambil semua data pasien

    // Mengirim data pasien ke view
    return view('form_grafik', ['pasien' => $pasien]);
}

    public function grafikBeratBadan()
    {
        $model = new BeratBadanModel();

        $ID_Pasien = $this->request->getGet('ID_Pasien');
        $dataBeratBadan = $model->where('ID_Pasien', $ID_Pasien)->findAll();

        $labels = [];
        $beratData = [];

        foreach ($dataBeratBadan as $record) {
            $labels[] = date("Y-m-d", strtotime($record['created_at']));
            $beratData[] = $record['berat_badan'];
        }
        

        $data['labels'] = json_encode($labels);
        $data['beratData'] = json_encode($beratData);

        return view('grafik_berat_badan', $data);
    }

    public function tampilkanGrafik()
    {
        $model = new BeratBadanModel();
        $dataBeratBadan = $model->findAll();
    
        $labels = [];
        $beratData = [];
    
        foreach ($dataBeratBadan as $record) {
            $labels[] = date("Y-m-d", strtotime($record['created_at']));
            $beratData[] = $record['berat_badan'];
        }
    
        $data['labels'] = json_encode($labels);
        $data['beratData'] = json_encode($beratData);
    
        return view('index', $data);
    }
    
    
}