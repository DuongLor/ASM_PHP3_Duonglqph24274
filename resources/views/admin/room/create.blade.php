@extends('admin.templates.app')
@section('title', 'Thêm phòng')
@section('content')
    <form action="{{ route('room.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="card mb-3">
            <div class="card-body">
                <div class="form-group pb-2 align-items-center">
                    <label class="mr-2 my-2"><i class="fas fa-hotel"></i> Khách sạn</label>
                    <select name="hotel_id" id="" class="form-control">
                        @foreach ($hotels as $hotel)
                            <option value="{{ $hotel->id }}">{{ $hotel->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group pb-2 align-items-center">
                    <label class="mr-2 my-2"><i class="fas "></i> Loại phòng</label>
                    <select name="type_id" id="" class="form-control">
                        @foreach ($types as $type)
                            <option value="{{ $type->id }}">{{ $type->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group pb-2 align-items-center">
                    <label class="mr-2 my-2"><i class="fas "></i> Tên phòng</label>
                    <input type="text" class="form-control" placeholder="Nhập tên" name="name">
                </div>
                <div class="form-group pb-2 align-items-center">
                    <label class="mr-2 my-2"><i class="fas "></i> Giá phòng</label>
                    <input type="number" class="form-control" placeholder="Nhập tên" name="price">
                </div>
            </div>
        </div>
        <hr>
        <button type="submit" class="btn btn-success btn-block">Thêm</button>
    </form>
@endsection
