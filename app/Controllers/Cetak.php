<?php

namespace App\Controllers;

class Cetak extends BaseController
{

    public function indek1(): string
    {
        return view('cetakgelang');
    }

    public function indek2(): string
    {
        return view('printlabelpasien');
    }

    public function indek3(): string
    {
        return view('cetaksep');
    }
}
