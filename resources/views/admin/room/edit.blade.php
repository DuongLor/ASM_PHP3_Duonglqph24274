@extends('admin.templates.app')
@section('title', 'Admin Loại phòng')
@section('content')
    <form action="{{ route('room.update', $room->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="card mb-3">
            <div class="card-body">
                <div class="form-group pb-2 align-items-center">
                    <label class="mr-2 my-2"><i class="fas fa-hotel"></i> Khách sạn</label>
                    <select name="hotel_id" id="" class="form-control">
                        @foreach ($hotels as $hotel)
                            <option @if ($hotel->id == $room->hotel_id) selected @endif value="{{ $hotel->id }}">
                                {{ $hotel->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group pb-2 align-items-center">
                    <label class="mr-2 my-2"><i class="fas "></i> Loại phòng</label>
                    <select name="type_id" id="" class="form-control">
                        @foreach ($types as $type)
                            <option @if ($type->id == $room->type_id) selected @endif value="{{ $type->id }}">
                                {{ $type->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group pb-2 align-items-center">
                    <label class="mr-2 my-2"><i class="fas "></i> Tên phòng</label>
                    <input type="text" class="form-control" placeholder="Nhập tên" name="name"
                        value="{{ $room->name }}">
                </div>
                <div class="form-group pb-2 align-items-center">
                    <label class="mr-2 my-2"><i class="fas "></i> Giá phòng</label>
                    <input type="number" class="form-control" placeholder="Nhập giá" name="price"
                        value="{{ $room->price }}">
                </div>
                <div class="form-group pb-2 align-items-center">
                    <label class="mr-2 my-2"><i class="fas "></i> Chi tiết</label>
                    <input type="text" class="form-control" placeholder="Nhập Chi tiết" name="description"
                        value="{{ $room->description }}">
                </div>
                <div class="form-group pb-2 align-items-center">
                    <label class="mr-2 my-2"><i class="fas "></i> Khuyến mại</label>
                    <select name="promotion_id" id="" class="form-control">
                        <option value="">Không khuyến mại</option>

                        @foreach ($promotions as $promotion)
                            <option @if ($promotion->id == $room->promotion_id) selected @endif value="{{ $promotion->id }}">
                                {{ $promotion->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>
        <hr>
        <button type="submit" class="btn btn-success btn-block">Sửa</button>
    </form>
@endsection
