<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/9a5faea756.js" crossorigin="anonymous"></script>
    <title>Shop</title>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            {{-- sidebar-container --}}
            <div class="col-1">
                <div><i class="d-flex justify-content-center fa-solid fa-bars fs-1 pb-3 pt-5"></i></div>
                <div><i class="d-flex justify-content-center fa-brands fa-discord fs-1 p-3"></i></div>
                <div><i class="d-flex justify-content-center fa-solid fa-person fs-1 p-3"></i></div>
                <div><i class="d-flex justify-content-center fa-solid fa-person fs-1 p-3"></i></div>
                <div><i class="d-flex justify-content-center fa-solid fa-chair fs-1 p-3"></i></div>
                <div><i class="d-flex justify-content-center fa-solid fa-boxes-stacked fs-1 p-3"></i></div>
                <div><i class="d-flex justify-content-center fa-solid fa-gamepad  fs-1 p-3"></i></i></div>
                <div><i class="d-flex justify-content-center fa-solid fa-tv fs-1 p-3"></i></div>
            </div>
            {{-- main --}}
            <div class="col">
                {{-- navbar --}}
                <div class="row justify-content-center align-items-center">
                    <div class="col-3">
                        <img style="width: 200px"
                            src="https://img.freepik.com/free-vector/branding-identity-corporate-vector-logo-design_460848-8717.jpg"
                            alt="logo">
                    </div>
                    <div class="col">
                        <div>
                            {{-- <input class="w-75 border border-0" style="height: 50px" type="text"
                                placeholder="Search..."> --}}
                            <div class="search-container">
                                <input class="search-input" type="text" placeholder="Search...">
                                <button type="submit" class="search-button"><i class="fas fa-search"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="col-3">
                        <img src="https://ps.w.org/user-avatar-reloaded/assets/icon-256x256.png?rev=2540745"
                            alt="" style="height: 50px;border-radius:2px;">
                        <span class="p-3">Diago Morats <i class="fa-solid fa-chevron-down"></i></span>
                        <span class="p-3">Chart</span>
                        <span class="p-3">Order</span>

                    </div>

                </div>
                {{-- content --}}
                <div class="row">
                    {{-- leftbar --}}
                    <div class="col-3">
                        @foreach ($sidebarItems as $item)
                            <x-child-sidebar-item content="{{ $item['name'] }}"></x-child-sidebar-item>
                        @endforeach
                    </div>
                    <div class="col">
                        <div class="row">
                            <img class="img-fluid" style="height: 400px"
                                src="https://cdn11.bigcommerce.com/s-31djhj4ixx/images/stencil/1280x1280/products/15891/14922/NEW_Boucle_Occasional_Chair_Lores_01__72226.1675195700.jpg?c=1"
                                alt="">
                        </div>
                        <div class="row">
                            <div class="col p-1 text-center"><img
                                    src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcThQtu08Q9pMLfM9QmKlYFv4v69gRpMom4dnA&usqp=CAU"
                                    alt=""></div>
                            <div class="col p-1 text-center"><img
                                    src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcThQtu08Q9pMLfM9QmKlYFv4v69gRpMom4dnA&usqp=CAU"
                                    alt=""></div>
                            <div class="col p-1 text-center"><img
                                    src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcThQtu08Q9pMLfM9QmKlYFv4v69gRpMom4dnA&usqp=CAU"
                                    alt=""></div>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="rightbar">
                            <div class="item1">
                                <h2>Recently Viewd</h2>
                                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcThQtu08Q9pMLfM9QmKlYFv4v69gRpMom4dnA&usqp=CAU"
                                    alt="">
                            </div>
                            <div class="item1">
                                <h2>Recently Viewd</h2>
                                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcThQtu08Q9pMLfM9QmKlYFv4v69gRpMom4dnA&usqp=CAU"
                                    alt="">
                            </div>
                        </div>
                    </div>
                </div>
                {{-- bottom content --}}
                <div class="row">
                    <div class="title">
                        <span class="fs-3 border-end">Deals of the day </span>
                        <span class="text-danger fw-bold">20:45:15 Left</span>
                        <span>View All Details</span>
                    </div>
                    <div class="dealItems d-flex">
                        @foreach ($dealItems as $item)
                            <x-product-item link="{{ $item['link'] }}" content="{{ $item['conten'] }}"></x-product-item>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

    </div>
    </div>
</body>

</html>
