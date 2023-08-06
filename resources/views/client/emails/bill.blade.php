<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
    <header>
        <!-- place navbar here -->
    </header>
    <main>
        <p class="mute"># Hóa Đơn Đặt Phòng</p>

        Xin cảm ơn quý khách {{ $name }} đã đặt phòng.
        <div class="table-responsive">
            <table class="table table-light">
                <thead>
                    <tr>
                        <th>Phòng</th>
                        <th>Loại Phòng</th>
                        <th>Giá</th>
                        <th>Giảm giá</th>
                        <th>Thời gian</th>
                        <th>Thành tiền</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="">
                        <td>{{ $phong }}</td>
                        <td>{{ $loaiphong }}</td>
                        <td>{{ $giaphong }}</td>
                        <td>{{ $giagiamgia }}</td>
                        <td>{{ $thoigian }} Ngày</td>
                        <td>{{ $thanhtien }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <b>Cảm ơn quý khách và hẹn gặp lại!</b>
    </main>
    <footer>
        <!-- place footer here -->
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
        integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
</body>

</html>
