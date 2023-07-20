<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Admin</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item py-1 ">
                    <a class="nav-link active" aria-current="page" href="#">Trang chủ</a>
                </li>
                <li class="nav-item py-1 ">
                    <a class="nav-link" href="#"></a>
                </li>
            </ul>
            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Tìm kiếm" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Tìm</button>
            </form>
        </div>
    </div>
</nav>
<div class="container-fluid mt-4">
    <div class="row">
        <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
            <div class="position-sticky pt-3">
                <ul class="nav flex-column">
                    <li class="nav-item py-1 ">
                        <a class="nav-link active" aria-current="page" href="#">
                            <span data-feather="home"></span>
                            Trang điều khiển
                        </a>
                    </li>
                    <li class="nav-item py-1 ">
                        <a class="nav-link" href="{{ route('hotel.index') }}">
                            <span data-feather="file"></span>
                            Khách sạn
                        </a>
                    </li>
                    <li class="nav-item py-1 ">
                        <a class="nav-link" href="#">
                            <span data-feather="file"></span>
                            Phòng
                        </a>
                    </li>
                    <li class="nav-item py-1 ">
                        <a class="nav-link" href="{{ route('type.index') }}">
                            <span data-feather="file"></span>
                            Loại phòng
                        </a>
                    </li>
                    <li class="nav-item py-1 ">
                        <a class="nav-link" href="#">
                            <span data-feather="shopping-cart"></span>
                            Tiện nghi
                        </a>
                    </li>
                    <li class="nav-item py-1 ">
                        <a class="nav-link" href="#">
                            <span data-feather="users"></span>
                            Khách hàng
                        </a>
                    </li>
                    <li class="nav-item py-1 ">
                        <a class="nav-link" href="#">
                            <span data-feather="bar-chart-2"></span>
                            Đánh giá
                        </a>
                    </li>
                    <li class="nav-item py-1 ">
                        <a class="nav-link" href="#">
                            <span data-feather="layers"></span>
                            Hình ảnh
                        </a>
                    </li>
                    <li class="nav-item py-1 ">
                        <a class="nav-link" href="#">
                            <span data-feather="file"></span>
                            Đặt phòng
                        </a>
                    </li>
                    <li class="nav-item py-1 ">
                        <a class="nav-link" href="#">
                            <span data-feather="file"></span>
                            Thanh toán
                        </a>
                    </li>
                    <li class="nav-item py-1 ">
                        <a class="nav-link" href="#">
                            <span data-feather="file"></span>
                            Dịch vụ
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
