@extends('admin.templates.app')
@section('title', 'Thêm khách sạn')
@section('css_header_custom')
    <style>
        #preview img {
            max-width: 200px;
            height: auto;
            border: 1px solid #ddd;
            border-radius: 4px;
            padding: 5px;
            margin-top: 10px;
        }

        .fade-in {
            animation: fadeIn 0.5s;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }
    </style>
@endsection
@section('content')
    <form action="{{ route('hotel.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="card mb-3">
            <div class="card-body">
                <div class="form-group pb-2 align-items-center">
                    <label class="mr-2 my-2"><i class="fas fa-hotel"></i> Tên khách sạn</label>
                    <input type="text" class="form-control" placeholder="Nhập tên" name="name">
                </div>
                <div class="form-group align-items-center">
                    <label class="mr-2 my-2"><i class="fas fa-map-marker-alt"></i> Địa chỉ</label>
                    <input type="text" class="form-control" placeholder="Nhập địa chỉ" name="address">
                </div>
                <div class="form-group align-items-center">
                    <label class="form-label mr-2 my-2" for="">Số sao</label>
                    <div class="rating">
                        <span class="star" data-value="1"><i class="fa-regular fa-star "></i></span>
                        <span class="star" data-value="2"><i class="fa-regular fa-star "></i></span>
                        <span class="star" data-value="3"><i class="fa-regular fa-star "></i></span>
                        <span class="star" data-value="4"><i class="fa-regular fa-star "></i></span>
                        <span class="star" data-value="5"><i class="fa-regular fa-star "></i></span>
                    </div>
                    <input type="hidden" name="stars" id="ratingInput" value="">
                </div>
            </div>
        </div>
        <div class="form-group">
            <label>Ảnh</label>
            <input type="file" name="image" class="form-control" id="image">
        </div>
        <div id="preview" class="">
        </div>
        <hr>
        <button type="submit" class="btn btn-success btn-block">Thêm</button>
    </form>
@endsection
@section('js_footer_custom')
    <script>
        const stars = document.querySelectorAll('.star');
        const ratingInput = document.getElementById('ratingInput');
        stars.forEach(star => {
            star.addEventListener('click', () => {
                const value = star.getAttribute('data-value');
                ratingInput.value = value;
                highlightStars(value);
            });
        });

        function highlightStars(value) {
            stars.forEach(star => {
                const starValue = star.getAttribute('data-value');
                if (starValue <= value) {
                    star.querySelector('i').classList.add('text-warning');
                    star.querySelector('i').classList.remove('fa-regular');
                    star.querySelector('i').classList.add('fa-solid');
                } else {
                    star.querySelector('i').classList.remove('text-warning');
                    star.querySelector('i').classList.add('fa-regular');
                    star.querySelector('i').classList.remove('fa-solid');
                }
            });
        }
        // Lấy input element
        let imgInput = document.getElementById('image');
        // Lắng nghe sự kiện thay đổi
        imgInput.addEventListener('change', function() {
            // Lấy file đã chọn
            let file = imgInput.files[0];
            // Tạo đối tượng DOM cho img
            let img = document.createElement('img');
            // Hiển thị ảnh preview
            img.src = URL.createObjectURL(file);
            // Thêm vào div preview
            document.getElementById('preview').appendChild(img);
        });
    </script>
@endsection
