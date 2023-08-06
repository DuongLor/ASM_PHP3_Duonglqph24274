@extends('admin.templates.app')
@section('title', 'Thêm Hình ảnh Khách sạn')
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
    <form action="{{ route('imageHotel.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="card mb-3">
            <div class="card-body">
                <div class="form-group pb-2 align-items-center">
                    <label class="mr-2 my-2"><i class="fas fa-hotel"></i> khách sạn</label>
                    <select name="hotel_id" id="" class="form-control">
                        @foreach ($hotels as $hotel)
                            <option value="{{ $hotel->id }}">{{ $hotel->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            {{-- add image --}}
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
        // Lấy input element
        let imgInput = document.getElementById('image');
        // Lắng nghe sự kiện thay đổi
        imgInput.addEventListener('change', function() {
            // Lấy file đã chọn
            let file = imgInput.files[0];
            // Tạo đối tượng DOM cho img
            let img = document.createElement('img');
            img.style.width = '200px';
            // Hiển thị ảnh preview
            img.src = URL.createObjectURL(file);
            // Thêm vào div preview
            document.getElementById('preview').appendChild(img);
        });
    </script>
@endsection
