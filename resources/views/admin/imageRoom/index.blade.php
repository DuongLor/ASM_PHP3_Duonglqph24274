@extends('admin.templates.app')
@section('title', 'Admin Hình ảnh phòng')
@section('content')
    <a href="{{ route('imageRoom.create') }}" class="btn btn-primary">Thêm hình ảnh<i class="fa-solid fa-plus"></i></a>
    <br>
    <br>
    <table class="table table-hover table-dark table-bordered">
        <thead>
            <tr>
                <th scope="col" class="text-center font-weight-bold">STT</th>
                <th scope="col" class="text-center font-weight-bold">phòng</th>
                <th scope="col" class="text-center font-weight-bold">Hình ảnh</th>
                <th scope="col" class="text-center font-weight-bold">Hành động</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($imageRooms as $key => $imageRoom)
                <tr class="table-light">
                    <th scope="row" class="text-center">{{ $key + 1 }}</th>
                    <td class="text-center">{{ $imageRoom->Room->name }}</td>
                    <td class="text-center"><img
                            src="{{ Storage::url($imageRoom->image) }}"
                            alt="" width="100px"></td>
                    <td class="text-center">
                        <a href="{{ route('imageRoom.delete', $imageRoom->id) }}" class="btn btn-danger">
                            <i class="fa-solid fa-trash"></i></a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
