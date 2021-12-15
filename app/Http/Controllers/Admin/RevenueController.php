<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;

class RevenueController extends Controller
{
    public function index()
    {
        $year=Carbon::now()->year;
        return view('Admin.Revenue.Revenue',compact('year'));
    }
    public function postRevenue(Request $request)
    {
        $thang=0;
        $DonHang=0;
        $DoanhThu=0;
        $TongSp=0;
        $data=$request->all();
        for($i=1;$i=12;i++)
        {
            $
        }
        return view('Admin.Revenue.Revenue',compact('year'));
    }
}
