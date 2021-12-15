@extends('Admin.Admin_layout.layout')
@section('content')
<h2 class="text-center">Nhập Hàng</h2>

{!! Form::open(['method' => 'POST', 'route' => ['postimport']]) !!}
    <div class="form-horizontal">
                <hr />
        <div class="form-group">
            <label class="control-label col-md-2"> Nhà Cung Cấp</label>
            <div class="col-md-10">
                <select name="MaNCC" class="form-control">
                    @foreach ($ncc as $ncc)
                    
                        <option value="{{ $ncc->MaNCC }}">{{ $ncc->TenNCC }}</option>
                    @endforeach
                </select>

               
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-md-2"> Ngày Nhập</label>
            <div class="col-md-10">
                <input type="date" name="NgayCapNhat" class="form-control">
            </div>
        </div>

    </div>
    <table class="table">
        <tr class="trFirst" data-id="-1">
            <td>Sản Phẩm</td>
            <td>Đơn Giá Nhập</td>
            <td>Số Lượng Nhập</td>
            <td></td>
        </tr>

        <tr class="trAppend" style="">
            <td>
            	<select name="MaSP" class="dlpro">
                    @foreach ($product as $product)
                    
                        <option value="{{ $product->MaSP }}">{{ $product->TenSP }}</option>
                    @endforeach
                </select>
                
            </td>
            <td>
                <input name="DonGia" class="txtprice" value="0" />
            </td>
            <td>
                <input name="SoLuongTon" class="txtTotal" value="0" />
            </td>
            <td>
                <input type="button" class="btn btn-danger" value="-" id="btnDel" style="cursor:pointer" />
            </td>
        </tr>
        
    </table>
    <input type="button" class="btn btn-info" value="+" id="btnAdd" style="cursor:pointer" />
    <input type="submit" class="btn btn-success" id="btnImport" />

{!! Form::close() !!}
{{-- <script>
    $(document).ready(function () {
        $("#btnAdd").click(function () {

            var lastId = $(".table").find("tr:last-child").attr("data-id");
            i = parseInt(lastId) + 1;

            var content = $(".trAppend").html();
            var content = "<tr class=\"trAppended\" data-id=\"" + i + "\">" + content + "</tr>";
            $(".table").append(content);
            LoadID();
        });
        $("body").delegate("#btnDel", "click", function () {
            $(this).closest(".trAppended").remove();
            updateID();
        });
        $("#btnImport").click(function () {
            if (checkprice() == false) return false;
            if (checktotal() == false) return false;
        })

        function LoadID() {
            $(".trAppended").each(function () {
                var id = $(this).attr("data-id");
                var proId = "[" + id + "].MaSP";
                var total = "[" + id + "].SoLuongNhap";
                var price = "[" + id + "].DonGiaNhap";
                $(this).find(".dlpro").prop("name", proId);
                $(this).find(".txtprice").prop("name", price);
                $(this).find(".txtTotal").prop("name", total);
            });
        }
        function updateID() {
            var lastId = $(".table").find(".trFirst").attr("data-id");
            i = parseInt(lastId) + 1;
            $(".trAppended").each(function () {
                var id = i;
                $(this).attr("data-id", i);
                var proId = "[" + id + "].MaSP";
                var total = "[" + id + "].SoLuongNhap";
                var price = "[" + id + "].DonGiaNhap";
                $(this).find(".dlpro").prop("name", id);
                $(this).find(".txtprice").prop("name", price);
                $(this).find(".txtTotal").prop("name", total);
                i++;
            });
        };
        function checkprice() {
            var bl = true;
            $(".txtprice").each(function () {
                var val = $(this).val();
                if (isNaN(val) == true) {
                    alert("Đơn gía không hợp lệ");
                    bl = false;
                }
                else if (val = 0 && val < 0) {
                    alert("Đơn gía không được nhỏ hơn hoặc bằng 0");
                    bl = false;
                }
            })
            return bl;
        }
        function checktotal() {
            var bl = true;
            $(".txtTotal").each(function () {
                var val = $(this).val();
                if (isNaN(val) == true) {
                    alert("Số lượng không hợp lệ");
                    bl = false;

                }
            })
            return bl;
        }
    });

</script> --}}

@endsection