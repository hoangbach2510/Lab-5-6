@extends('layout.admin')
@section('content')
<div class="card">
    <h4 class="card-header">Thêm Danh Mục</h4>
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
        <form action="{{ route('danh-muc.store') }}" method="POST" enctype="multipart/form-data">
            {{-- 1 cơ chế bảo mật của laravel --}}
            @csrf
            <div class="mb-3">
                <label for="" class="form-label">Tên Danh Mục:</label>
                <input type="text" class="form-control" name="ten_san_pham" placeholder="Nhập tên sản phẩm" value={{old('ten_san_pham')}}>
            </div>

            <a href="{{route('danh-muc.index')}}">
            <div class="mb-3 d-flex justify-content-center">
                <button type="submit" class="btn btn-success">Thêm mới</button>
            </div>
            </a>
        </form>
    </div>
</div>
@endsection