@extends('client.layout.app')
@section('title', 'Khách sạn')
@section('content')
    <div class="container-fluid page-header mb-5 p-0"
        style="background-image: url({{ Storage::url($banner->image) }});">
        <div class="container-fluid page-header-inner py-5">
            <div class="container text-center pb-5">
                <h1 class="display-3 text-white mb-3 animated slideInDown">Khách sạn</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center text-uppercase">
                        <li class="breadcrumb-item"><a href="/">Trang chủ</a></li>
                        <li class="breadcrumb-item text-white active" aria-current="page">Khách sạn</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title text-center text-primary text-uppercase">Khách sạn</h6>
                <h1 class="mb-5">Khám phá các <span class="text-primary text-uppercase">Khách sạn</span></h1>
            </div>
            <div class="row g-4">
                @foreach ($Hotels as $key => $Hotel)
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="{{ $key * 0.2 }}s">
                        <div class="Hotel-item shadow rounded overflow-hidden">
                            <div class="position-relative">
                                <img class="img-fluid" src="{{ Storage::url($Hotel->hotelImages->first()->image) }}"
                                    alt="">
                            </div>
                            <div class="p-4 mt-2">
                                <div class="d-flex justify-content-between mb-3">
                                    <h5 class="mb-0">{{ $Hotel->name }}</h5>
                                    <div class="ps-2">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="d-flex flex-row">
                                                @for ($i = 1; $i <= 5; $i++)
                                                    @if ($i <= $Hotel->stars)
                                                        <i class="fa-solid fa-star text-warning me-1"></i>
                                                    @else
                                                        <i class="fa-regular fa-star me-1"></i>
                                                    @endif
                                                @endfor
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <p class="text-body mb-3">Địa chỉ: {{ $Hotel->address }}</p>
                                <div class="d-flex justify-content-between">
                                    <a class="btn btn-sm btn-primary rounded py-2 px-4" href="{{ route('listRoomWhereHotelId', $Hotel->id) }}">Xem các phòng</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
