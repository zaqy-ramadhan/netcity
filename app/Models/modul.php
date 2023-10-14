<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Modul extends Model
{
    use HasFactory;

    protected $table="moduls";
    protected $primaryKey = "id_modul";
    protected $fillable = [
        'nama_modul',
        'id_kategori',
        'id_user',
        'gambar_modul',
        'download_modul',
        'isi_modul',
        'isiteaser_modul',
    ];

    public function kategori(){
        return $this->belongsTo(Kategori::class,'id_kategori');
    }

    public function user(){
        return $this->belongsTo(User::class,'id_user');
    }

}
