@extends('layout.admin')
@section('content')
<div class="card">
    <h4 class="card-header">Thêm sản phẩm</h4>
    <div class="card-body">
        @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
        <form action="{{ route('san-pham.store') }}" method="POST" enctype="multipart/form-data">
            {{-- 1 cơ chế bảo mật của laravel --}}
            @csrf
            <div class="mb-3">
                <label for="" class="form-label">Hình ảnh:</label>
                <input type="file" class="form-control" name="hinh_anh">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Tên sản phẩm:</label>
                <input type="text" class="form-control" name="ten_san_pham" placeholder="Nhập tên sản phẩm" value={{old('ten_san_pham')}}>
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Số lượng:</label>
                <input type="number" class="form-control" min="1" name="so_luong" placeholder="Nhập số lượng sản phẩm"value={{old('so_luong')}}>
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Giá sản phẩm:</label>
                <input type="number" class="form-control" min="1" name="gia_san_pham" placeholder="Nhập giá sản phẩm"value={{old('gia_san_pham')}}>
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Ngày nhập:</label>
                <input type="date" class="form-control" min="1" name="ngay_nhap">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Mô tả:</label>
                <textarea class="form-control" rows="3" name="mo_ta" placeholder="Nhập mô tả sản phẩm"value={{old('mo_ta')}}></textarea>
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Danh mục:</label>
                <select class="form-select" name="danh_muc_id">
                    @foreach ($danh_mucs as $item)
                        <option value="{{ $item->id }}" @if($item->id == old('danh_muc_id')) selected @endif>{{ $item->ten_danh_muc }}</option>
                    @endforeach
                </select>
            </div>
            <a href="{{route('san-pham.index')}}">
            <div class="mb-3 d-flex justify-content-center">
                <button type="submit" class="btn btn-success">Thêm mới</button>
            </div>
            </a>
        </form>
    </div>
</div>
@endsection