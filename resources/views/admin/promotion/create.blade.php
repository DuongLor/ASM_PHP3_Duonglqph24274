@extends('admin.templates.app')
@section('title', 'Thêm khuyến mại')
@section('content')
    <form action="{{ route('promotion.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="card mb-3">
            <div class="card-body">
                <div class="form-group pb-2 align-items-center">
                    <label class="mr-2 my-2"><i class="fas "></i> Tên </label>
                    <input type="text" class="form-control" placeholder="Nhập tên" name="name">
                </div>
                <div class="form-group pb-2 align-items-center">
                    <label class="mr-2 my-2"><i class="fas "></i> Chi tiết</label>
                    <input type="text" class="form-control" placeholder="Nhập chi tiết" name="description">
                </div>
                <div class="form-group pb-2 align-items-center">
                    <label class="mr-2 my-2"><i class="fas "></i> Giá</label>
                    <input type="number" class="form-control" placeholder="Nhập giá" name="price">
                </div>
            </div>
        </div>
        <hr>
        <button type="submit" class="btn btn-success btn-block">Thêm</button>
    </form>
@endsection
