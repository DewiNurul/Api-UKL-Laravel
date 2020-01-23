<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pelanggaran;
use App\Siswa;
use App\User;
use App\Poin_Siswa;

class DashboardController extends Controller {
    public function dashboard() {
        $data["Jumlah Siswa"] = Siswa::count();
        $data["Jumlah Petugas"] = User::count();
        $data["Jumlah Data Pelanggaran"] = Pelanggaran::count();
        $data["Jumlah Pelanggaran Hari ini"] = Poin_Siswa::count();

        return response($data);


    }
}