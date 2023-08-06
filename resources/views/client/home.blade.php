@extends('client.layout.app')
@section('title', 'home')
@section('content')
    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5">
        <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                @foreach ($hotel_slide as $key => $item)
                    <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                        <img class="w-100" src="{{ Storage::url($item->hotelImages->first()->image) }}" alt="Image">
                        <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                            <div class="p-3" style="max-width: 700px;">
                                <h6 class="section-title text-white text-uppercase mb-3 animated slideInDown">Khách
                                    sạn</h6>
                                <h1 class="display-3 text-white mb-2 animated slideInDown">{{ $item->name }}</h1>
                                <h4 class="my-4">
                                    <div class=" animated slideInDown">
                                        @for ($i = 1; $i <= 5; $i++)
                                            @if ($i <= $item->stars)
                                                <i class="fa fa-star text-primary"></i>
                                            @endif
                                        @endfor
                                    </div>
                                </h4>
                                <a href="{{ route('listRoomWhereHotelId', $item->id) }}"
                                    class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Xem phòng</a>
                                <a href="" class="btn btn-light py-md-3 px-md-5 animated slideInRight">Đặt
                                    phòng</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Carousel End -->
    <!-- Room Start -->
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
                                @if ($room->promotion_id != null)
                                    <small
                                        class="position-absolute translate-middle-y bg-primary text-white rounded py-1 px-3 ms-4"
                                        style="top:25px; left:265px">Sale</small>
                                @endif
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
    <!-- Room End -->
@endsection
