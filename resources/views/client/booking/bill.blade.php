@extends('client.layout.app')
@section('title', 'Hóa Đơn Đặt Phòng')
@section('content')
    <div class="container pt-5">
        <h2 class="text-center">Hóa Đơn Đặt Phòng</h2>
    </div>
    <div class="container py-5">
        <table class="table table-hover table-dark table-bordered ">
            <thead>
                <tr>
                    <th scope="col" class="text-center font-weight-bold">STT</th>
                    <th scope="col" class="text-center font-weight-bold">Người nhận</th>
                    <th scope="col" class="text-center font-weight-bold">khách sạn</th>
                    <th scope="col" class="text-center font-weight-bold">Phòng</th>
                    <th scope="col" class="text-center font-weight-bold">Giá</th>
                    <th scope="col" class="text-center font-weight-bold">Giảm giá</th>
                    <th scope="col" class="text-center font-weight-bold">Ngày đặt</th>
                    <th scope="col" class="text-center font-weight-bold">Ngày về</th>
                    <th scope="col" class="text-center font-weight-bold">In hóa đơn</th>
                    <th scope="col" class="text-center font-weight-bold">Hành động</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($bookings as $key => $booking)
                    <tr class="table-light">
                        <th scope="row" class="text-center">{{ $key + 1 }}</th>
                        <td class="text-center">{{ $booking->user->name }}</td>
                        <td class="text-center">{{ $booking->room->hotel->name }}</td>
                        <td class="text-center">{{ $booking->room->name }}</td>
                        <td class="text-center">{{ $booking->price }}</td>
                        <td class="text-center">{{ $booking->discount }}</td>
                        <td class="text-center">{{ $booking->start_date }}</td>
                        <td class="text-center">{{ $booking->end_date }}</td>
                        <td class="text-center"><a href="{{ route('invoices.client.index', $booking->id) }}"
                                class="btn btn-primary"><i class="fa-solid fa-file-invoice"></i></a></td>
                        <td class="text-center"><a href="{{ route('booking.client.delete', $booking->id) }}"
                                class="btn btn-danger"><i class="fa-solid fa-trash"></i></a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
