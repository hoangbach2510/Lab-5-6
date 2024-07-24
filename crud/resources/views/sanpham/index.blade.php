@extends('layout.admin')
@section('content')
<div class="card">

<h1>Danh sách sản phẩm</h1>
<a href="{{route('san-pham.create')}}">
    <button class="btn btn-success">
        Thêm Mới
    </button>
</a>
<div class="card-body">
<table class="table table-hover">
    <thead>
        <tr>
            <th>STT</th>
            <th>Tên sản phẩm</th>
            <th>Giá</th>
            <th>Số lượng</th>
            <th>Hình ảnh</th>
            <th>Mô Tả</th>
            <th>Danh Mục</th>
            <th>Ngày Nhập</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($listSP as $index => $item)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $item->ten_san_pham }}</td>
                <td>{{ $item->gia }}</td>
                <td>{{ $item->so_luong }}</td>
                <td><img src="{{ $item->hinh_anh }}" alt=""></td>
                <td>{{ $item->mo_ta }}</td>
                <td>{{ $item->ten_danh_muc}}</td>
                <td>{{ $item->ngay_nhap }}</td>
                <td>
                    <a href="">
                    <button class="btn btn-warning">Sửa</button>
                    </a>
                    <a href="">
                    <button class="btn btn-danger">Xóa</button>
                    </a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
</div>
</div>
@endsection