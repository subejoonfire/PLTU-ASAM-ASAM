<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Home extends BaseController
{
    public function index()
    {
        $model = new  \App\Models\VibeCheckModel();

        $data = $model->first();

        if (!$data) {
            $data = [
                'acceleration' => 0.000,
                'velocity' => 0.000,
                'demodulation' => 0.0000,
                'custom_value' => 0.0,
            ];
        }

        return view('index', $data);
    }
    public function store($acceleration, $velocity, $demodulation, $custom_value)
    {
        $model = new  \App\Models\VibeCheckModel();
        $data = [
            'acceleration' => $acceleration,
            'velocity' => $velocity,
            'demodulation' => $demodulation,
            'custom_value' => $custom_value
        ];

        // Simpan data ke database
        $model->insert($data);

        // Return response
        return $this->response->setStatusCode(201)
            ->setJSON(['status' => 'success', 'message' => 'Data saved successfully']);
    }
}
