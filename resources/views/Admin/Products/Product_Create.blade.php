@extends('Admin.Admin_layout.layout')
@section('content')

    
    <div class="form-horizontal">
        <h4 class="text-primary">Thêm Sản Phẩm</h4>
        <hr />
        
        
    {!! Form::open(['method' => 'POST', 'route' => ['post.product'],'enctype' => 'multipart/form-data']) !!}
        <div class="form-group">
        	<label class="control-label col-md-2"> Tên Sản Phẩm</label>
            <div class="col-md-10">
            	<input type="text" name="TenSP" class="form-control" placeholder="Tên Sản Phẩm">
                
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-md-2"> Tên Tắt</label>
            <div class="col-md-10">
                <input type="text" name="TenTat" class="form-control" placeholder="Tên Tắt">
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-md-2"> Giới Thiệu</label>
            <div class="col-md-10">
                <textarea class="form-control" name="GioiThieu"></textarea>
            </div>
        </div>
        <div class="form-group">
           <label class="control-label col-md-2"> Đơn Giá</label>
            <div class="col-md-10">
                <input type="number" name="DonGia" class="form-control" placeholder="Đơn Giá">
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-md-2"> Mô Tả</label>
            <div class="col-md-10">
                <textarea class="form-control" name="MoTa"></textarea>
            </div>
        </div>

        <div class="form-group">
           <label class="control-label col-md-2"> Số Lượng Tồn</label>
            <div class="col-md-10">
                <input type="number" name="SoLuongTon" class="form-control">
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-md-2"> Nhà Cung Cấp</label>
            <div class="col-md-10">
                <select name="MaNCC" class="form-control">
                    @foreach ($ncc as $ncc)
                    
                        <option value={{ $ncc->MaNCC }}>{{ $ncc->TenNCC }}</option>
                    @endforeach
                </select>
                
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-md-2"> Nhà Sản Xuất</label>
            <div class="col-md-10">
                                <select name="MaNSX" class="form-control">
                    @foreach ($nsx as $nsx)
                    
                        <option value={{ $nsx->MaNSX }}>{{$nsx->TenNSX}}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-md-2"> Loại Sản Phẩm</label>
            <div class="col-md-10">
               
                <select name="MaLoaiSP" class="form-control">
                    @foreach ($loaisp as $loaisp)
                    
                        <option value={{ $loaisp->MaLoaiSP }}>{{ $loaisp->TenLoaiSP }}</option>
                    @endforeach
                </select>
            </div>
        </div>


       

        <div class="form-group">
            <label class="control-label col-md-2"> Chọn Hình Ảnh</label>
            <div class="col-md-10">
                <input type="file", name="file" />
                
                
               
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-md-2"> Trạng Thái</label>

            <div class="col-md-10">
                <div class="checkbox">
                    <input type="checkbox" name="TrangThai">
                </div>
            </div>
        </div>

        {{-- <div class="form-group">
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
                <input type="submit" value="Tạo Mới" class="btn btn-primary" />
            </div>
        </div>
    </div>
    {!! Form::close() !!}

@endsection