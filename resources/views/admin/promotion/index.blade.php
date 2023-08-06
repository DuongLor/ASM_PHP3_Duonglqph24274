@extends('admin.templates.app')
@section('title', 'Admin khuyến mại')
@section('content')
    <a href="{{ route('promotion.create') }}" class="btn btn-primary">Thêm khuyến mại <i class="fa-solid fa-plus"></i></a>
    <br>
    <br>
    <table class="table table-hover table-dark table-bordered">
        <thead>
            <tr>
                <th scope="col" class="text-center font-weight-bold">STT</th>
                <th scope="col" class="text-center font-weight-bold">Tên</th>
                <th scope="col" class="text-center font-weight-bold">Nội dung</th>
                <th scope="col" class="text-center font-weight-bold">Giá</th>
                <th scope="col" class="text-center font-weight-bold">Hành động</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($promotions as $key => $promotion)
                <tr class="table-light">
                    <th scope="row" class="text-center">{{ $key + 1 }}</th>
                    <td class="text-center">{{ $promotion->name }}</td>
                    <td class="text-center">{{ $promotion->description }}</td>
                    <td class="text-center">{{ $promotion->price }}</td>
                    <td class="text-center">
                        <a href="{{ route('promotion.edit', $promotion->id) }}" class="btn btn-info"><i
                                class="fa-solid fa-pen-to-square"></i></a>
                        <a href="{{ route('promotion.delete', $promotion->id) }}" class="btn btn-danger">
                            <i class="fa-solid fa-trash"></i></a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
