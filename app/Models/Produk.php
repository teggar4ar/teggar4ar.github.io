<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Pesanan;
use App\Models\Kategori;

class Produk extends Model
{
    use HasFactory;

    protected $fillable = ['kode','nama','harga','stok','min_stok','gambar','deskripsi_produk','kategori_id','user_id'];

    public function KategoriID(){
        return $this->hasOne(Kategori::class);
    }

    public function userID() {
        return $this->belongsTo(User::class);
      }

   
   
}
