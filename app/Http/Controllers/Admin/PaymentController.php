<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\DonDatHang;
class PaymentController extends Controller
{
    public function index()
    {
        $product=DB::table('DonDatHang')->where('TrangThai',1)->where('TinhTrangGiaoHang',0)->where('DaThanhToan',0)->where('HuyDon',0)->get();
        $accept=DB::table('DonDatHang')->where('DaThanhToan',1)->get();
        // code...
         return view('Admin.Payment.Payment')->with('product',$product)->with('accept',$accept);
    }
    public function Unpaid()
    {
        $product=DB::table('DonDatHang')->where('TrangThai',1)->where('TinhTrangGiaoHang',0)->where('DaThanhToan',0)->where('HuyDon',0)->get();
        
        return view('Admin.Payment.Unpaid')->with('product');
    }
    public function getUnpaid(Request $request)
    {
        $data=$request->all();
        dd($data);
        $ddh=DonDatHang::updateOrCreate([
            'MaDDH'=>$data['MaDDH'],
        ],[
            'DaThanhToan'=>1,
        ]);
        
        return redirect()->action([PaymentController::class, 'index']);
    }
    public function Accept()
    {
        // code...
        $product=DB::table('DonDatHang')->where('DaThanhToan',1)->get();
        
        return view('Admin.Payment.Accept',compact('product'));
    }
   
}
