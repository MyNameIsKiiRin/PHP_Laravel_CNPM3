<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NhaSanXuat extends Model
{
    protected $table="NhaSanXuat";

    public function sanpham()
    {

        return $this->hasMany(SanPham::class, 'MaNSX', 'MaNSX');

    }
    protected $fillable = [
        'MaNSX',
        'TenNSX',
        'ThongTin'
    ];
    protected $primaryKey = 'MaNSX';
    public $timestamps = false;
}
