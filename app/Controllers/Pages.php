<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        // $faker = \Faker\Factory::create();

        $data = [
            'title' => 'Home | MR. Juliansyah',
            'tes' => ['satu', 'dua', 'tiga']
        ];
        return view('pages/home', $data);
    }

    public function about()
    {
        $data = [
            'title' => 'About Me'
        ];

        return view('pages/about', $data);
    }

    public function contact()
    {
        $data = [
            'title' => 'Contact Us',
            'alamat' =>
            [
                [
                    'tipe' => 'Rumah',
                    'alamat' => 'JL. panglima sudirman No. 123',
                    'kota' => 'Bandung'
                ],
                [
                    'tipe' => 'Kantor',
                    'alamat' => 'JL. SetiaBudi No. 12',
                    'kota' => 'Jakarta'
                ]
            ]
        ];

        return view('pages/contact', $data);
    }
}
