<?php

namespace App\Controllers;

use App\Models\OrangModel;

class Orang extends BaseController
{
    protected $orangModel;
    public function __construct()
    {
        $this->orangModel = new OrangModel();
    }

    public function index()
    {
        $currentPage = $this->request->getVar('page_orang') ? $this->request->getVar('page_orang') : 1;
        $keyword = $this->request->getVar('keyword');
        if ($keyword) {
            $orang = $this->orangModel->search($keyword);
        } else {
            $orang = $this->orangModel;
        }


        $data = [
            'title' => 'Daftar Orang',
            'orang' => $orang->paginate(7, 'orang'),
            'pager' => $this->orangModel->pager,
            'currentPage' => $currentPage
        ];

        return view('orang/index', $data);
    }

    public function edit($id){
    $this->orangModel->save([
        'id' => $id,
        'nama' => $this->request->getPost('nama'),
        'alamat' => $this->request->getPost('alamat')

    ]);

    return redirect()->to('/orang');
        }
    }
