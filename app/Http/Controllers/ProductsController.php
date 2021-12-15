<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\SanPham;
class ProductsController extends Controller
{
    public function index($id)
    {

        $product= DB::table('sanpham')->where('MaSP',$id)->where('TrangThai',1)->get();
        
        if($product->isEmpty())
        {
            return "<h1>404 not found</h1>";
        
        }
        else
        {
            $producttype=DB::select('select MaLoaiSP,MaNSX from sanpham where MaSP = ?', [$id]);
            $config= DB::table('cauhinh')->where('MaSP',$id)->get();
            $related=SanPham::where('MaNSX',$producttype[0]->MaNSX)->take(5)->get();
            return view('Clients.Product',compact('product'))->with('config',$config)->with('Related',$related);
        }
    }
}
