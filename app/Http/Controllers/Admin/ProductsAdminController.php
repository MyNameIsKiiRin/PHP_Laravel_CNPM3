<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\SanPham;
use App\Models\NhaSanXuat;
use App\Models\NhaCungCap;
use App\Models\LoaiSanPham;
class ProductsAdminController extends Controller
{
    public function index()
    {
        $product=SanPham::all();
        
        return view('Admin.Products')->with('product',$product);
    }
    // public function Create(Request $request)
    // {
    //     $data=$request->all();
    //     $product=sanphams::create([
    //         'MaSP'=>data['MaSP'];
    //         'TenSP'=>data['TenSP'];
    //         'MaLoaiSP'=>data
    // ]);
    // }
    public function getCreate()
    {
        $nsx=NhaSanXuat::all();
        $ncc=NhaCungCap::all();
        $loaisp=LoaiSanPham::all();

        return view('Admin.Products.Product_Create')->with('nsx',$nsx)->with('ncc',$ncc)->with('loaisp',$loaisp);
    }
    public function postCreate(Request $request)
    {
        $data=$request->all();
        $product=SanPham::insert([
            
            'TenSP'=>$data['TenSP'],
            'MoTa'=>$data['MoTa'],
            'TenTat'=>$data['TenTat'],
            'DonGia'=>$data['DonGia'],
            'SoLuongTon'=>$data['SoLuongTon'],
            'MaNCC'=>$data['MaNCC'],
            'MaNSX'=>$data['MaNSX'],
            'MaLoaiSP'=>$data['MaLoaiSP'],
            'HinhAnh1'=>$data['file']->getClientOriginalName(),
            'TrangThai'=>$request->has('TrangThai')?1:0,
            'GioiThieu'=>$data['GioiThieu'],

        ]);
        $path=$request->file('file')->move('assets\Client\Product_Images',$request->file('file')->getClientOriginalName() );
        
        return redirect()->action([ProductsAdminController::class, 'index']);

    }
    public function getUpdate($id)
    {
        $nsx=NhaSanXuat::all();
        $ncc=NhaCungCap::all();
        $loaisp=LoaiSanPham::all();
        $product=DB::table('sanpham')->where('MaSP',$id)->get();
        return view('Admin.Products.Product_Update')->with('product',$product)->with('nsx',$nsx)->with('ncc',$ncc)->with('loaisp',$loaisp);

    }
    public function postUpdate(Request $request)
    {
        $data=$request->all();
        if(!$request->hasFile('file')) {
            $product=SanPham::updateOrCreate([
            'MaSP'   => $data['MaSP'],
            ],[
                'DonGia'=>$data['DonGia'],
                'MoTa'=>$data['MoTa'],
                'TenTat'=>$data['TenTat'],
                'TrangThai'=>$request->has('TrangThai')?1:0,
                'GioiThieu'=>$data['GioiThieu'],
            ]);
        }
        else
        {
            $product=SanPham::updateOrCreate([
            'MaSP'   => $data['MaSP'],
            ],[
                'DonGia'=>$data['DonGia'],
                'MoTa'=>$data['MoTa'],
                
                'HinhAnh1'=>$data['file']->getClientOriginalName(),
                'TenTat'=>$data['TenTat'],
                'TrangThai'=>$request->has('TrangThai')?1:0,
                'GioiThieu'=>$data['GioiThieu'],
            ]);
        $path=$request->file('file')->move('assets\Client\Product_Images',$request->file('file')->getClientOriginalName() );

        }
        return redirect()->action([ProductsAdminController::class, 'index']);

    }

}
