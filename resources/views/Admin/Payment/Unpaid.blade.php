{!! Form::open(['method' => 'POST', 'route' => ['postunpaid']]) !!}
<table class="table">
    <thead>
        <tr>
            <th>
                Mã Khách Hàng
            </th>
            <th>
                Ngày Đặt
            </th>
            <th>
                Tình Trạng Giao Hàng
            </th>
            
            <th>
               Đã Thanh Toán
            </th>
            
            <th>
                Huỷ Đơn
            </th>
            <th>
               Trạng Thái
            </th>
            <th></th>
        </tr>
    </thead>
   
    <tbody>
        @foreach ($product as $product)
        {!! Form::open(['method' => 'POST', 'route' => ['postunpaid',$product->MaDDH]]) !!}
            <tr>
                    <td>
                        <input type="hidden" name="MaDDH" value="{{ $product->MaDDH }}">
                        {{ $product->MaKH }}
                    </td>
                    <td>
                        {{ $product->NgayDat }}
                    </td>
                    <td>
                        {{ $product->TinhTrangGiaoHang==1?"Đã Vận Chuyển":"Chưa Vận Chuyển" }}
                    </td>
                    
                    <td>
                         {{ $product->DaThanhToan==1?"Đã Thanh Toán":"Chưa Thanh Toán" }}
                    </td>
                    
                    <td>
                        {{ $product->HuyDon==0?"Chưa Huỷ":"Đã Huỷ" }}
                    </td>
                    <td>
                        {{ $product->TrangThai==1?"True":"False" }}
                    </td>
                    <td>
                        <a href="{{ Route('postunpaid',$product->MaDDH) }}" class="btn btn-primary"  >
                            Duyệt Đơn Hàng
                        </a>
                        
                    </td>
                </tr>
            {!! Form::close() !!}
        @endforeach
    </tbody>

</table>
