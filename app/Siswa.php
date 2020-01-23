<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $table = 'siswas';
    protected $fillable = [
        'nis',
        'nama_siswa',
        'kelas',
        'poin'
      ];
  
      public function poins(){
      return $this->hasMany('App\Poin_Siswa', 'id_siswa', 'id');
      }
}
