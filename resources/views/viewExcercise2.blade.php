<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/9a5faea756.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container-fluid">

    </div>
    <div class="container-fluid mb-5">
        <div class="row">
            @yield('sidebar')
            @section('main')
                <div class="col-lg-8">
                    @yield('navbar')
                    @yield('items')
                    <div class="row">
                        <div class="col">
                            <img src="{{ asset('assets/clients/img/Screenshot 2024-03-15 222829.png') }}" alt="">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            {{-- nơi hiển thị chart --}}
                            <div>
                                <canvas id="myChart"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            @show
        </div>


        {{-- CDN --}}
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

        {{-- config --}}
        <script>
            const ctx = document.getElementById('myChart');

            const DATA_COUNT = 4;
            const NUMBER_CFG = {
                count: DATA_COUNT,
                min: 0,
                max: 100
            };

            new Chart(ctx, {
                type: 'line',
                data: {
                    labels: ['Jan', 'Feb', 'Mar', 'April'],
                    datasets: [{
                            label: 'Dataset 1',
                            data: [12, 19, 3, 5, 9],
                            stack: 'combined',
                            type: 'bar'
                        },
                        {
                            label: 'Dataset 2',
                            data: [12, 19, 3, 5],
                            stack: 'combined'
                        }
                    ]
                },
                options: {
                    plugins: {
                        title: {
                            display: true,
                            text: 'Chart.js Stacked Line/Bar Chart'
                        }
                    },
                    scales: {
                        y: {
                            stacked: true
                        }
                    }
                }
            });
        </script>
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
</body>

</html>
