<?php

// class Home {
//     public function index($nama = "Awit", $pekerjaan = 'pelajar')
// {
//  echo "Halo, Nama saya $nama dan saya merupakan seorang $pekerjaan";
// }
// }

class  Home extends Controller {
    public function index()
{
// $data['nama'] = 'Awit';
$data['judul'] = 'Home';
// $data['pekerjaan'] = 'Pelajar';
// $data['judul'] = 'Home';
$this->view('templates/header', $data);
$this->view('home/index', $data);
$this->view('templates/footer');
}

public function page()
{
    $data['judul'] = 'Page';
    $data['gambar'] = 'haruto.jpg';
    $data['nama'] = 'Haruto';
    $data['pekerjaan'] = 'Idol grup boy Treasure';
    $this->view('templates/header', $data);
    $this->view('home/page', $data);
    $this->view('templates/footer');
}
}