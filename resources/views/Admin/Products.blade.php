@extends('Admin.Admin_layout.layout')
@section('content')
<h2 class="text-info">Danh Sách Sản Phẩm</h2>
<style>
    a{
        text-decoration:none
    }
</style>
<p>
    <a class="btn btn-primary" href={{ Route('getcreate') }}>Thêm Sản Phẩm</a>
</p>
<table class="table">
    <thead>
        <tr>
            <th>
                Loại Sản Phẩm
            </th>
            <th>
                Nhà Cung Cấp
            </th>
            <th>
                Nhà Sản Xuất
            </th>
            <th>
                Tên Sản Phẩm
            </th>
            <th>
                Tên Tắt
            </th>
            <th>
                Đơn Giá
            </th>
            <th>
                Số Lượng Tồn
            </th>
            <th>
                Trạng Thái
            </th>
            <th>
                Ngày Cập Nhật
            </th>
            <th>
                Sản Phẩm Mới
            </th>
            <th></th>
        </tr>
    </thead>

    @foreach ($product as $product)
    
        <tbody>
            <tr>
                <td>
                   {{ $product->MaLoaiSP}}
                </td>
                <td>
                    {{ $product->MaNCC }}
                </td>
                <td>
                   {{ $product->MaNSX }}
                </td>
                <td>
                    {{ $product->TenSP}}
                </td>
                <td>
                    {{ $product->TenTat }}
                </td>
                <td>
                    {{ $product->DonGia }}
                </td>
                <td>
                	{{ $product->SoLuongTon }}
                </td>
                <td>
                    {{ $product->TrangThai==1?"True":"False" }}
                </td>
                <td>
                    {{ $product->NgayCapNhat }}
                </td>
                <td>
                    {{ $product->Moi }}
                </td>
                <td>
                    <a href="{{ Route('getupdate',$product->MaSP) }}" class="btn btn-warning">Sửa</a>

                </td>
            </tr>
        </tbody>
    @endforeach

</table>

@endsection