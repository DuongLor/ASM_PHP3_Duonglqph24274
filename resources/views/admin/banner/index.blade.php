@extends('admin.templates.app')
@section('title', 'Admin banner')
@section('content')
    <a href="{{ route('banner.create') }}" class="btn btn-primary">Thêm banner<i class="fa-solid fa-plus"></i></a>
    <br>
    <br>
    <table class="table table-hover table-dark table-bordered">
        <thead>
            <tr>
                <th scope="col" class="text-center font-weight-bold">STT</th>
                <th scope="col" class="text-center font-weight-bold">Tên</th>
                <th scope="col" class="text-center font-weight-bold">Hình ảnh</th>
                <th scope="col" class="text-center font-weight-bold">Hành động</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($banners as $key => $banner)
                <tr class="table-light">
                    <th scope="row" class="text-center">{{ $key + 1 }}</th>
                    <td class="text-center">{{ $banner->name }}</td>
                    <td class="text-center"><img src="{{ Storage::url($banner->image) }}" alt="" width="100px">
                    </td>
                    <td class="text-center">
                        <a href="{{ route('banner.delete', $banner->id) }}" class="btn btn-danger">
                            <i class="fa-solid fa-trash"></i></a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
