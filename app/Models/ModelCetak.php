<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelCetak extends Model
{
    public function getData()
    {
        $json_data = file_get_contents("cetakgelang.json");
        $data = json_decode($json_data, true);

        return $data;
    }
    public function getData1()
    {
        $json_data = file_get_contents("printlabelpasien.json");
        $data = json_decode($json_data, true);

        return $data;
    }
    public function getData2()
    {
        $json_data = file_get_contents("cetaksep.json");
        $data = json_decode($json_data, true);

        return $data;
    }

    public function getDataById($no_registraion)
    {
        $json_data = file_get_contents("cetakgelang.json");
        $data = json_decode($json_data, true);
        foreach ($data as $item) {
            if ($item['no_registration'] == $no_registraion) {
                return $item;
            }
        }
    }

    public function getDataById1($no_registraion)
    {
        $json_data = file_get_contents("printlabelpasien.json");
        $data = json_decode($json_data, true);
        foreach ($data as $item) {
            if ($item['no_registration'] == $no_registraion) {
                return $item;
            }
        }
    }


    public function getDataById2($no_registraion)
    {
        $json_data = file_get_contents("cetaksep.json");
        $data = json_decode($json_data, true);
        foreach ($data as $item) {
            if ($item['no_registration'] == $no_registraion) {
                return $item;
            }
        }
    }
}
