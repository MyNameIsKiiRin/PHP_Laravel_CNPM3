<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\SanPham;
use App\Models\NhaSanXuat;
use App\Models\NhaCungCap;
use App\Models\PhieuNhap;
use App\Models\ChiTietPhieuNhap;
class ImportController extends Controller
{
    public function index()
    {
        $nsx=NhaSanXuat::all();
        $ncc=NhaCungCap::all();
        $product=SanPham::all();

        return view('Admin.Import.Import')->with('nsx',$nsx)->with('ncc',$ncc)->with('product',$product);
    }
    public function postImport(Request $request)
    {
        $data=$request->all();
        $total=DB::select('select SoLuongTon from sanpham where MaSP = ?', [$data['MaSP']]);
        $import=PhieuNhap::insert([
            'MaNCC'=>$data['MaNCC'],
            'NgayNhap'=>$data['NgayCapNhat'],
        ]);
        if($import==true)
        {
            $product=SanPham::updateOrCreate([
            'MaSP'   => $data['MaSP'],
            ],[
                'DonGia'=>$data['DonGia'],
                'SoLuongTon'=>$data['SoLuongTon']+$total[0]->SoLuongTon,
                'NgayCapNhat'=>$data['NgayCapNhat'],
            ]);

        }
        
        dd($data);
    }
}
