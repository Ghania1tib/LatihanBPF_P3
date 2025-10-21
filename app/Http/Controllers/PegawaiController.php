<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tgl_lahir = new \DateTime('2006-05-05');
        $tgl_harus_wisuda = new \DateTime('2028-10-25');
        $tgl_sekarang = new \DateTime();

        $my_age = $tgl_sekarang->diff($tgl_lahir)->y;

        $time_to_study_left = $tgl_sekarang->diff($tgl_harus_wisuda)->days;

        $current_semester = 2;

        $message = '';
        if ($current_semester < 3) {
            $message = 'Masih Awal, Kejar TAK';
        } else {
            $message = 'Jangan main-main, kurang-kurangi main game!';
        }

        $data = [
            'name' => 'Ghania Khairinnisa',
            'my_age' => $my_age,
            'hobbies' => [
                'Membaca', 'Mendengarkan lagu', 'Menonton'
            ],
            'tgl_harus_wisuda' => $tgl_harus_wisuda->format('Y-m-d'),
            'time_to_study_left' => $time_to_study_left,
            'current_semester' => $current_semester,
            'message' => $message,
            'future_goal' => 'Become a senior developer'
        ];

        return view('pegawai', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
