@extends('Admin.Admin_layout.layout')
@section('content')

    
    <div class="form-horizontal">
        <h4 class="text-primary">Sửa Sản Phẩm</h4>
        <hr />
        
    @foreach ($product as $product)
    {!! Form::open(['method' => 'POST', 'route' => ['postupdate']]) !!}
    
        <div class="form-group">
            <label class="control-label col-md-2"> Mã Sản Phẩm</label>
            <div class="col-md-10">
                <input type="text" name="MaSP" class="form-control" value="{{ $product->MaSP }}" readonly>
                
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-md-2"> Tên Sản Phẩm</label>
            <div class="col-md-10">
                <input type="text" name="TenSP" class="form-control" value="{{ $product->TenSP }}">
                
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-md-2"> Tên Tắt</label>
            <div class="col-md-10">
                <input type="text" name="TenTat" class="form-control" value="{{ $product->TenTat }}">
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-md-2"> Giới Thiệu</label>
            <div class="col-md-10">
                <textarea class="form-control" name="GioiThieu" value="">{{ $product->GioiThieu }}</textarea>
            </div>
        </div>
        <div class="form-group">
           <label class="control-label col-md-2"> Đơn Giá</label>
            <div class="col-md-10">
                <input type="number" name="DonGia" class="form-control" value="{{ $product->DonGia }}">
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-md-2"> Mô Tả</label>
            <div class="col-md-10">
                <textarea class="form-control" name="MoTa" value="">{{ $product->MoTa }}</textarea>
            </div>
        </div>

        

        <div class="form-group">
            <label class="control-label col-md-2"> Trạng Thái</label>

            <div class="col-md-10">
                <div class="checkbox">
                    <input type="checkbox" name="TrangThai" id="checkboxid">
                </div>
            </div>
        </div>
       

        <div class="form-group">
            <label class="control-label col-md-2"> Hình Ảnh</label>
            <div class="col-md-10">
                <input type="file", name="file" />
                
                
               
            </div>
        </div>

{{--         <div class="form-group">
            @Html.LabelFor(model => model.HinhAnh2, htmlAttributes: new { @class = "control-label col-md-2" })
            <div class="col-md-10">
                <input type="file" , name="file" />
                @Html.ValidationMessageFor(model => model.HinhAnh2, "", new { @class = "text-danger" })
            </div>
        </div>

        <div class="form-group">
            @Html.LabelFor(model => model.HinhAnh3, htmlAttributes: new { @class = "control-label col-md-2" })
            <div class="col-md-10">
                <input type="file" , name="file" />
                @Html.ValidationMessageFor(model => model.HinhAnh3, "", new { @class = "text-danger" })
            </div>
        </div> --}}

        <div class="form-group">
            <div class="col-md-offset-2 col-md-10">
                <input type="submit" value="Update" class="btn btn-primary" />
            </div>
        </div>
    </div>
    
    {!! Form::close() !!}
    <script type="text/javascript">
    document.getElementById("checkboxid").checked =  {{ $product->TrangThai==1?"true":"false" }}
    </script>
    @endforeach

@endsection