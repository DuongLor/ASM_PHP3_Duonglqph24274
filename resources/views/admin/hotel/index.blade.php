@extends('admin.templates.app')
@section('title', 'Admin Khách sạn')
@section('content')
    {{-- button create hotel --}}
    <a href="{{ route('hotel.create') }}" class="btn btn-primary">Thêm khách sạn <i class="fa-solid fa-plus"></i></a>
    <br>
    <br>
    <table class="table table-hover table-dark table-bordered">
        <thead>
            <tr>
                <th scope="col" class="text-center font-weight-bold">STT</th>
                <th scope="col" class="text-center font-weight-bold">Tên</th>
                <th scope="col" class="text-center font-weight-bold">Hình ảnh</th>
                <th scope="col" class="text-center font-weight-bold">Địa chỉ</th>
                <th scope="col" class="text-center font-weight-bold">Số sao</th>
                <th scope="col" class="text-center font-weight-bold">Hành động</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($hotels as $key => $hotel)
                <tr class="table-light">
                    <th scope="row" class="text-center">{{ $key + 1 }}</th>
                    <td>{{ $hotel->name }}</td>
                    <td class=" d-flex justify-content-center"><img
                            src="{{ $hotel->hotelImages->first()->image ? '' . Storage::url($hotel->hotelImages->first()->image) : '' }}"
                            alt="" width="100px"></td>
                    <td class="text-right">{{ $hotel->address }}</td>
                    <td>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="d-flex flex-row">
                                @for ($i = 1; $i <= 5; $i++)
                                    @if ($i <= $hotel->stars)
                                        <i class="fa-solid fa-star text-warning me-1"></i>
                                    @else
                                        <i class="fa-regular fa-star me-1"></i>
                                    @endif
                                @endfor
                            </div>
                        </div>
                    </td>
                    <td>
                        <a href="{{ route('hotel.edit', $hotel->id) }}" class="btn btn-info"><i
                                class="fa-solid fa-pen-to-square"></i></a>

                        <a href="{{ route('hotel.delete', $hotel->id) }}" class="btn btn-danger">
                            <i class="fa-solid fa-trash"></i></a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
