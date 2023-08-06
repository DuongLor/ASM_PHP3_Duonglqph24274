<nav class="navbar navbar-expand-lg bg-dark navbar-dark p-3 p-lg-0">
    <a href="index.html" class="navbar-brand d-block d-lg-none">
        <h1 class="m-0 text-primary text-uppercase">Khách sạn</h1>
    </a>
    <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
        <div class="navbar-nav mr-auto py-0">
            <a href="/" class="nav-item nav-link @if (Route::current()->getName() == 'home') active @endif">Trang chủ</a>
            <a href="{{ route('listHotel') }}"
                class="nav-item nav-link @if (Route::current()->getName() == 'listHotel') active @endif">Khách sạn</a>
            <a href="{{ route('listRoom') }}"
                class="nav-item nav-link @if (Route::current()->getName() == 'listRoom') active @endif ">Phòng</a>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">Loại
                    phòng</a>
                <div class="dropdown-menu rounded-0 m-0">
                    @foreach ($type_rooms as $item)
                        <a href="{{ route('listRoom_by_type', $item->id) }}"
                            class="dropdown-item">{{ $item->name }}</a>
                    @endforeach
                </div>
            </div>
            <a href="{{ route('bill.client.index') }}"
                class="nav-item nav-link @if (Route::current()->getName() == 'bill.client.index') active @endif ">Hóa đơn</a>
            @if (Auth::check())
                @if (Auth::user()->role == 0)
                    <a href="{{ route('dashboard') }}" class="nav-item nav-link">Trang điều khiển</a>
                @endif
            @else
                <a href="{{ route('login') }}"
                    class="nav-item nav-link @if (Route::current()->getName() == 'login') active @endif">Đăng nhập</a>
            @endif
        </div>
        @if (Auth::check())
            <div class="navbar-nav">
                <a href="" class="nav-item nav-link">Hello , {{ Auth::user()->name }}</a>
                <a href="{{ route('logout') }}" class="nav-item nav-link">Đăng xuất</a>
            </div>
        @endif
    </div>
</nav>
