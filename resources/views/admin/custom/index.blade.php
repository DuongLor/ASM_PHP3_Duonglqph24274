@extends('admin.templates.app')
@section('title', 'Admin Khách hàng')
@section('content')
    <table class="table table-hover table-dark table-bordered">
        <thead>
            <tr>
                <th scope="col" class="text-center font-weight-bold">STT</th>
                <th scope="col" class="text-center font-weight-bold">Tên</th>
                <th scope="col" class="text-center font-weight-bold">Email</th>
                <th scope="col" class="text-center font-weight-bold">Hành động</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($customers as $key => $customer)
                <tr class="table-light">
                    <th scope="row" class="text-center">{{ $key + 1 }}</th>
                    <td class="text-center">{{ $customer->name }}</td>
                    <td class="text-center">{{ $customer->email }}</td>

                    <td class="text-center">
                        <a href="{{ route('user.delete', $customer->id) }}" class="btn btn-danger">
                            <i class="fa-solid fa-trash"></i></a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
