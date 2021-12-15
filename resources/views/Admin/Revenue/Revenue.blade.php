@extends('Admin.Admin_layout.layout')
@section('content')
{!! Form::open(['method' => 'POST', 'route' => ['postimport']]) !!}
    <h2>Chọn Năm</h2>
    <select name="year" class="form-control" style="width:30%">
        @for ($i = $year; $i >= 2010; $i--)
        
            <option value="{{ $i }}">{{ $i }}</option>
        @endfor

    </select>
    <input type="submit" value="Submit" class="btn btn-info" />
{!! Form::close() !!}
{{-- <div class="single">
    <div class="single-grid">
        <table class="table">
            <thead>
                <tr>
                    <td>Tháng</td>
                    <td>Tổng Số Đơn Hàng</td>
                    <td>Tổng Sản Phẩm Đã Bán</td>
                    <td>Tổng Doanh Thu</td>
                </tr>
            </thead>

            <tbody>
                @foreach (var item in Model)
                {
                    <tr>
                        <td>@item.Thang</td>
                        <td>@item.DonHang</td>
                        <td>@item.TongSp</td>
                        <td>@item.DoanhThu.ToString("#,##")đ</td>
                    </tr>
                }
            </tbody>
        </table>
    </div>
</div> --}}

@endsection