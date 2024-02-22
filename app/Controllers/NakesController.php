<?php namespace App\Controllers;

use App\Models\NakesModel;

class NakesController extends BaseController
{
    // public function index()
    // {
    //     $model = new PasienModel();
    //     $data['pasien'] = $model->findAll();

    //     return view('tabel_data_pasien.php', $data);
    // }

    public function tabel_data_nakes()
    {
        $model = new NakesModel();
        $data['nakes'] = $model->findAll();

        return view('tabel_data_nakes.php', $data);
    }

    public function tambah()
    {
        helper('form');
        return view('tambah_data_nakes.php');
    }

    public function simpan()
    {
        $model = new NakesModel();

        $data = [
            'nama' => $this->request->getPost('nama'),
            'jabatan' => $this->request->getPost('jabatan'),
            'spesialisasi' => $this->request->getPost('spesialisasi'),
            'alamat' => $this->request->getPost('alamat'),
            'no_telepon' => $this->request->getPost('no_telepon')
        ];

        $model->insert($data);

        // Redirect ke halaman utama tabel-nakes setelah penyimpanan berhasil
        return redirect()->to(base_url('data-nakes'));
    }

    public function edit($id_nakes)
    {
        $model = new NakesModel();
        $data['nakes'] = $model->find($id_nakes);

        helper('form');
        return view('edit_data_nakes.php', $data);
    }

    public function update()
    {
        $model = new NakesModel();

        $data = [
            'nama' => $this->request->getPost('nama'),
            'jabatan' => $this->request->getPost('jabatan'),
            'spesialisasi' => $this->request->getPost('spesialisasi'),
            'alamat' => $this->request->getPost('alamat'),
            'no_telepon' => $this->request->getPost('no_telepon')
        ];

        $id_nakes = $this->request->getPost('id_nakes');

        $model->update($id_nakes, $data);

        // Redirect ke halaman utama kategori setelah pembaruan berhasil
        return redirect()->to(base_url('data-nakes'));
    }

    public function delete($id_nakes)
    {
        $model = new NakesModel();
        $model->delete($id_nakes);

        // Redirect ke halaman utama kategori setelah penghapusan berhasil
        return redirect()->to(base_url('data-nakes'));
    }

    public function jumlahNakes()
    {
        $model = new PasienModel();
        $data['jumlahNakes'] = $model->countAll();

        return view('index.php', $data);
    }

    



}
