@extends('admin.templates.app')
@section('title', 'Admin Phòng')
@section('content')
    <a href="{{ route('room.create') }}" class="btn btn-primary">Thêm Phòng <i class="fa-solid fa-plus"></i></a>
    <br>
    <br>
    <table class="table table-hover table-dark table-bordered">
        <thead>
            <tr>
                <th scope="col" class="text-center font-weight-bold">STT</th>
                <th scope="col" class="text-center font-weight-bold">Khách sạn</th>
                <th scope="col" class="text-center font-weight-bold">Loại phòng</th>
                <th scope="col" class="text-center font-weight-bold">Tên</th>
                <th scope="col" class="text-center font-weight-bold">Giá</th>
                <th scope="col" class="text-center font-weight-bold">Hành động</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($rooms as $key => $room)
                <tr class="table-light">
                    <th scope="row" class="text-center">{{ $key + 1 }}</th>
                    <td class="text-center">{{ $room->hotel->name }}</td>
										<td class="text-center">{{ $room->type->name }}</td>
										<td class="text-center">{{ $room->name }}</td>
										<td class="text-center">{{ $room->price }}</td>
                    <td class="text-center">
                        <a href="{{ route('room.edit', $room->id) }}" class="btn btn-info"><i
                                class="fa-solid fa-pen-to-square"></i></a>
                        <a href="{{ route('room.delete', $room->id) }}" class="btn btn-danger">
                            <i class="fa-solid fa-trash"></i></a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
