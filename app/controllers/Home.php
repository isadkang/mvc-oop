<?php

class Home extends Controller {
    public function index() 
    {
        $data['judul'] = 'Home';
        $data['nama'] = 'Irsyad';
        $data['pekerjaan'] = 'Developer';
        $this->view('templates/header', $data);
        $this->view('home/index', $data);
        $this->view('templates/footer');
    }

    public function page()
    {
        $data['judul'] = 'Page';
        $data['gambar'] = 'halal.jpg';
        $data['nama'] = 'Halal Logo';
        $data['pekerjaan'] = 'Halal halal halal';
        $this->view('templates/header', $data);
        $this->view('home/page', $data);
        $this->view('templates/footer');
    }
}