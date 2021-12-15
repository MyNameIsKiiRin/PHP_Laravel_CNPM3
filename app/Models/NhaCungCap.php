<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NhaCungCap extends Model
{
   protected $table="NhaCungCap";
   public function sanpham()
   {
       return $this->hasMany(SanPham::class, 'MaNCC', 'MaNCC');
   }
   protected $fillable = [
        'MaNCC',
        'TenNCC',
        'DiaChi',
        'SoDienThoai',
        'Email',
    ];
}
