<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DonDatHang extends Model
{
    protected $table="DonDatHang";
    protected $primaryKey = 'MaDDH';
    protected $fillable = [
        'MaDDH',
        'NgayDat',
        'NgayGiao',
        'TinhTrangGiaoHang',
        'DaThanhToan',
        'MaKH',
        'UuDai',
        'HuyDon',
        'TrangThai',
        
    ];
}
