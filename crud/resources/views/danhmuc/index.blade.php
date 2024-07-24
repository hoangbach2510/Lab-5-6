@extends('layout.admin')
@section('content')
<div class="card">

<h1>Danh sách sản phẩm</h1>
<a href="{{route('danh-muc.create')}}">
    <button class="btn btn-success">
        Thêm Mới
    </button>
</a>
<div class="card-body">
<table class="table table-hover">
    <thead>
        <tr>
            <th>STT</th>
            <th>Tên Danh Mục</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($danh_mucs as $index => $item)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $item->ten_danh_muc }}</td>
               
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