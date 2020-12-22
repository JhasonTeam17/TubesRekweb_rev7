<?php

namespace App\Controllers;

use App\Models\KomikModel;

class Buku extends BaseController
{
    protected $komikModel;

    public function __construct()
    {
        $this->komikModel = new KomikModel();
    }

    public function index()
    {

        $data = [
            'title' => 'Daftar Buku',
            //   'komik' => $komik->getKomik()
        ];
        return view('buku/index', $data);
    }
    // public function index()
    // {
    //     $data = [
    //         'title' => 'Daftar Buku',
    //         'komik' => $komik->getKomik()
    //       ];
    //       return view('buku/index', $data);


    //     // $data['title'] = 'Daftar Buku';
    //     // return view('buku/index', $data);
    // }

    //--------------------------------------------------------------------

}
