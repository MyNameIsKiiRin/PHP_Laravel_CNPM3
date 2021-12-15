<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PhieuNhap extends Model
{
    protected $table="PhieuNhap";
    protected $primaryKey = 'MaPN';
    protected $fillable = [
        'MaPN',
        'MaNCC',
        'NgayNhap',
        
    ];
    public function chitietphieunhap()
    {
        return $this->hasMany(ChiTietPhieuNhap::class, 'MaPN', 'MaCTPN');
    }
}
