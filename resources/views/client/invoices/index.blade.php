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

        <div class="customer container text-center">
            <h3>Thông tin khách hàng</h3>
            <p>
                Tên: {{ Auth::user()->name }} <br>
                Email: {{ Auth::user()->email }} <br>
            </p>
        </div>
        <div class="container py-5">
            <table class="table table-hover table-dark table-bordered ">
                <thead>
                    <tr>
                        <th scope="col" class="text-center font-weight-bold">User</th>
                        <th scope="col" class="text-center font-weight-bold">Hotel</th>
                        <th scope="col" class="text-center font-weight-bold">Room</th>
                        <th scope="col" class="text-center font-weight-bold">Price</th>
                        <th scope="col" class="text-center font-weight-bold">Discount</th>
                        <th scope="col" class="text-center font-weight-bold">start_date</th>
                        <th scope="col" class="text-center font-weight-bold">end_date</th>
                    </tr>
                </thead>
                <tbody>
                        <tr class="table-light">
                            <td class="text-center">{{ $name }}</td>
                            <td class="text-center">{{ $hotelName }}</td>
                            <td class="text-center">{{ $roomName }}</td>
                            <td class="text-center">{{ $price }}</td>
                            <td class="text-center">{{ $discount }}</td>
                            <td class="text-center">{{ $start_date }}</td>
                            <td class="text-center">{{ $end_date }}</td>
                        </tr>
                </tbody>
            </table>
        </div>
        </div>

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
