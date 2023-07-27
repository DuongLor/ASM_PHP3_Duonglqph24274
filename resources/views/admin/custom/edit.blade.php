@extends('admin.templates.app')
@section('title', 'Admin Loại phòng')
@section('content')
    <form action="{{ route('type.update', $type->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
				@method('PUT')
        <div class="card mb-3">
            <div class="card-body">
                <div class="form-group pb-2 align-items-center">
                    <label class="mr-2 my-2"><i class="fas fa-hotel"></i> Tên loại phòng</label>
                    <input type="text" class="form-control" placeholder="Nhập tên" name="name"
                        value="{{ $type->name }}">
                </div>
            </div>
        </div>
        <hr>
        <button type="submit" class="btn btn-success btn-block">Thêm</button>
    </form>
@endsection
