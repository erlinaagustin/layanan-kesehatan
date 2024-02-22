<?php namespace App\Controllers;

use App\Models\ArtikelModel;

class ArtikelController extends BaseController
{
    public function index()
    {
        $model = new ArtikelModel();
        $data['artikel'] = $model->findAll();

        return view('tabel_artikel.php', $data);
    }

    public function tambah()
    {
        helper('form');
        return view('tambah_artikel.php');
    }

    public function simpan()
    {
        helper(['url', 'form']);
        $image = $this->request->getFile('image');
        $newName = '';
    
        // Cek apakah gambar valid dan belum dipindahkan
        if ($image->isValid() && !$image->hasMoved()) {
            $newName = $image->getRandomName(); // Generate nama file acak
            $image->move("uploads", $newName); // Pindahkan file ke direktori 'uploads'
        }

        $data = [
            'judul'     => $this->request->getPost('judul'),
            'thumbnail' => $newName,
            'deskripsi' => $this->request->getPost('deskripsi'),
            'link'      => $this->request->getPost('link'),
            'tanggal'    => $this->request->getPost('tanggal'),
        ];

        $model = new ArtikelModel();

        // Panggil fungsi insert yang sudah dimodifikasi untuk menambahkan QR Code
    if ($model->insert($data) === false) {
        // Jika ada kesalahan validasi, tampilkan kembali form dengan kesalahan
        return redirect()->back()->withInput()->with('errors', $model->errors());
    } else {
        // Jika berhasil, redirect ke halaman yang diinginkan dengan pesan sukses
        return redirect()->to(base_url('data-artikel'));
    }

        
    }

    public function edit($id_artikel)
    {
        $model = new ArtikelModel();
        $data['artikel'] = $model->find($id_artikel);

        helper('form');
        return view('edit_data_artikel.php', $data);
    }

    public function update()
    {

        $id_artikel = $this->request->getPost('id_artikel');
    
        $image = $this->request->getFile('image');
        $newName = '';
    
        // Cek apakah ada foto yang diunggah
        if ($image->isValid() && !$image->hasMoved()) {
            $newName = $image->getRandomName();
            $image->move("uploads", $newName);
        }

        
        $data = [
            'judul' => $this->request->getPost('judul'),
            'deskripsi' => $this->request->getPost('deskripsi'),
            'link' => $this->request->getPost('link'),
            'tanggal' => $this->request->getPost('tanggal')
        ];

        if (!empty($newName)) {
            $data['thumbnail'] = $newName;
        }
        $model = new ArtikelModel();
    
        // Gunakan klausa where untuk menentukan record yang akan diupdate
        $result = $model->update($id_artikel,$data);
    
        if ($result === false) {
            return redirect()->back()->withInput()->with('errors', $model->errors());
        } else {
            return redirect()->to('/data-artikel')->with('success', 'Data berhasil diupdate');
        }
    }

    public function delete($id_artikel)
    {
        $model = new ArtikelModel();
        $model->delete($id_artikel);

        // Redirect ke halaman utama artikel setelah penghapusan berhasil
        return redirect()->to(base_url('data-artikel'));
    }


}
