@extends('client.layout.app')
@section('title', 'Phòng')
@section('content')
    <div class="container-fluid page-header mb-5 p-0" style="background-image: url({{Storage::url($banner->image)}});">
        <div class="container-fluid page-header-inner py-5">
            <div class="container text-center pb-5">
                <h1 class="display-3 text-white mb-3 animated slideInDown">Phòng</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center text-uppercase">
                        <li class="breadcrumb-item"><a href="/">Trang chủ</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('listHotel')}}">Khách sạn</a></li>
                        <li class="breadcrumb-item text-white active" aria-current="page">Phòng</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title text-center text-primary text-uppercase">Phòng</h6>
                <h1 class="mb-5">Khám phá các <span class="text-primary text-uppercase">phòng</span></h1>
            </div>
            <div class="row g-4">
                @foreach ($rooms as $key => $room)
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="{{ $key * 0.2 }}s">
                        <div class="room-item shadow rounded overflow-hidden">
                            <div class="position-relative">
                                <img class="img-fluid" src="{{ Storage::url($room->roomImages->first()->image) }}"
                                    alt="">
                                <small
                                    class="position-absolute start-0 top-100 translate-middle-y bg-primary text-white rounded py-1 px-3 ms-4">${{ $room->price }}/Ngày</small>
                            </div>
                            <div class="p-4 mt-2">
                                <div class="d-flex justify-content-between mb-3">
                                    <h5 class="mb-0">{{ $room->name }}</h5>
                                    <div class="ps-2">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="d-flex flex-row">
                                                @for ($i = 1; $i <= 5; $i++)
                                                    @if ($i <= $room->hotel->stars)
                                                        <i class="fa-solid fa-star text-warning me-1"></i>
                                                    @else
                                                        <i class="fa-regular fa-star me-1"></i>
                                                    @endif
                                                @endfor
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex mb-3">
                                    <small class="border-end me-3 pe-3"><i
                                            class="fa fa-bed text-primary me-2"></i>{{ $room->type->name }}</small>
                                    <small><i class="fa fa-wifi text-primary me-2"></i>Wifi</small>
                                </div>
                                <p class="text-body mb-3">Chi tiết: {{ $room->description }}</p>
                                <div class="d-flex justify-content-between">
                                    <a class="btn btn-sm btn-primary rounded py-2 px-4" href="">Xem chi tiết</a>
                                    <a class="btn btn-sm btn-dark rounded py-2 px-4" href="{{ route('booking.client.index', $room->id) }}">Đặt ngay</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
