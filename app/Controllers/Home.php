<?php

namespace App\Controllers;

use App\Models\Modelcetak;

class Home extends BaseController
{
    protected $ModelCetak;
    public function __construct()
    {
        $this->ModelCetak = new ModelCetak();
    }
    public function index()
    {
        return view('layout');
    }
    public function tampil1()
    {
        $model = $this->ModelCetak;
        $data['pasien'] = $model->getData();
        return view('tampildata/cetakgelang', $data);
    }
    public function tampil2()
    {
        $model = $this->ModelCetak;
        $data['pasien'] = $model->getData1();
        return view('tampildata/printlabelpasien', $data);
    }
    public function tampil3()
    {
        $model = $this->ModelCetak;
        $data['pasien'] = $model->getData2();
        return view('tampildata/cetaksep', $data);
    }
    public function cetak1($no_registraion)
    {
        $model = $this->ModelCetak;
        $data['json'] = $model->getDataById($no_registraion);
        return view('cetakgelang', $data);
    }
    public function cetak2($no_registraion)
    {
        $model = $this->ModelCetak;
        $data['json'] = $model->getDataById1($no_registraion);
        return view('printlabelpasien', $data);
    }
    public function cetak3($no_registraion)
    {
        $model = $this->ModelCetak;
        $data['json'] = $model->getDataById2($no_registraion);
        return view('cetaksep', $data);
    }
}
