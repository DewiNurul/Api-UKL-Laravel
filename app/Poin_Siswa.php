<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Poin_Siswa extends Model
{
    protected $table = 'poin_siswas';

    protected $fillable = ['id_siswa', 'id_pelanggaran', 'tanggal', 'keterangan'];

    public function siswas(){
    	return $this->belongsTo('App\Siswa', 'id_siswa', 'id');
    }

    public function pelanggarans(){
    	return $this->belongsTo('App\Pelanggaran', 'id_pelanggaran', 'id');
    }
}
