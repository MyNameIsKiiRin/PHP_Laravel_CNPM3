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
        @foreach ($accept as $accept)
        
            <tr>
                    <td>
                        {{ $accept->MaKH }}
                    </td>
                    <td>
                        {{ $accept->NgayDat }}
                    </td>
                    <td>
                        {{ $accept->TinhTrangGiaoHang==1?"Đã Nhận":"Chưa Nhận" }}
                    </td>
                    
                    <td>
                         {{ $accept->DaThanhToan==1?"Đã Thanh Toán":"Chưa Thanh Toán" }}
                    </td>
                    
                    <td>
                        {{ $accept->HuyDon==0?"Chưa Huỷ":"Đã Huỷ" }}
                    </td>
                    <td>
                        {{ $accept->TrangThai==1?"True":"False" }}
                    </td>
                    <td>
                        <a href="#" class="btn btn-primary" data-id="@item.MaDDH" id="btnAccept" >
                            Duyệt Đơn Hàng
                        </a>
                        
                    </td>
                </tr>
            
        @endforeach
    </tbody>

</table>