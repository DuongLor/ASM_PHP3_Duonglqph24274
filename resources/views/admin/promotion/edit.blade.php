@extends('admin.templates.app')
@section('title', 'Admin khuyến mại')
@section('content')
    <form action="{{ route('promotion.update', $promotion->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="card mb-3">
            <div class="card-body">
                <div class="form-group pb-2 align-items-center">
                    <label class="mr-2 my-2"><i class="fas fa-hotel"></i> Tên khuyến mại</label>
                    <input type="text" class="form-control" placeholder="Nhập tên" name="name"
                        value="{{ $promotion->name }}">
                </div>
                <div class="form-group pb-2 align-items-center">
                    <label class="mr-2 my-2"><i class="fas "></i> Chi tiết</label>
                    <input type="text" class="form-control" placeholder="Nhập chi tiết" name="description"
                        value="{{ $promotion->description }}">
                </div>
                <div class="form-group pb-2 align-items-center">
                    <label class="mr-2 my-2"><i class="fas "></i> Giá</label>
                    <input type="number" class="form-control" placeholder="Nhập giá" name="price"
                        value="{{ $promotion->price }}">
                </div>
            </div>
        </div>
        <hr>
        <button type="submit" class="btn btn-success btn-block">Sửa</button>
    </form>
@endsection
