@extends('viewExcercise2')
@section('sidebar')
    <div class="col d-none d-lg-block">
        <nav class="collapse show navbar navbar-vertical navbar-light align-items-start p-0 border border-top-0 border-bottom-0"
            id="navbar-vertical">
            <div class="navbar-nav w-100 overflow-hidden" style="height: 410px">
                <div class="row align-items-center py-3 px-xl-5">
                    <div class="col d-none d-lg-block">
                        <h1 class="m-0 display-5 font-weight-semi-bold text-blue" style="color: aqua;"><span class=""><i
                                    class="fa-brands fa-airbnb" style="color: aqua;"></i></span>Finace</h1>
                    </div>
                </div>
                <div class="nav-item dropdown">
                    <span href="#" class="nav-link" data-toggle="dropdown">
                        <i class="fa-solid fa-house"></i>
                        Dashoard <i class="fa fa-angle-down float-right mt-1"></i></span>
                </div>
                <span href class="nav-item nav-link"><i class="fa-brands fa-slack me-2"></i>pages<i
                        class="fa fa-angle-down float-right mt-1"></i></span>
                <span href class="nav-item nav-link"><i class="fa-brands fa-slack me-2"></i>Applications<i
                        class="fa fa-angle-down float-right mt-1"></i></span>
                <span href class="nav-item nav-link"><i class="fa-brands fa-figma me-2"></i>UI Component<i
                        class="fa fa-angle-down float-right mt-1"></i></span>
                <span href class="nav-item nav-link"><i class="fa-brands fa-figma me-2"></i>Widgets<i
                        class="fa fa-angle-down float-right mt-1"></i></span>
                <span href class="nav-item nav-link"><i class="fa-brands fa-wpforms me-2"></i>Forms<i
                        class="fa fa-angle-down float-right mt-1"></i></span>
                <span href class="nav-item nav-link"><i class="fa-solid fa-chart-simple me-2"></i>Charts<i
                        class="fa fa-angle-down float-right mt-1"></i></span>
            </div>
        </nav>
    </div>
@endsection

@section('navbar')
    <div class="row">
        <div class="col-10 text-left">
            <form action>
                <div class="input-group">
                    <div class="input-group-append">
                        <span class="input-group-text bg-transparent text-primary">
                            <i class="fa fa-search pt-2" style="height:30px"></i>
                        </span>
                    </div>
                    <input type="text" class="form-control" placeholder="Search for products">
                </div>
            </form>
        </div>
        <div class="col text-right ms-5">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                class="bi bi-bell-fill me-3" viewBox="0 0 16 16">
                <path
                    d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2m.995-14.901a1 1 0 1 0-1.99 0A5 5 0 0 0 3 6c0 1.098-.5 6-2 7h14c-1.5-1-2-5.902-2-7 0-2.42-1.72-4.44-4.005-4.901" />
            </svg>
            </a>
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                class="bi bi-chat-fill me-3" viewBox="0 0 16 16">
                <path
                    d="M8 15c4.418 0 8-3.134 8-7s-3.582-7-8-7-8 3.134-8 7c0 1.76.743 3.37 1.97 4.6-.097 1.016-.417 2.13-.771 2.966-.079.186.074.394.273.362 2.256-.37 3.597-.938 4.18-1.234A9 9 0 0 0 8 15" />
            </svg>
            <img src="https://ps.w.org/user-avatar-reloaded/assets/icon-256x256.png?rev=2540745" alt=""
                style="height: 50px;border-radius:2px;">
        </div>
    </div>
@endsection

@section('items')
    <div class="row">

        <x-dashboard-item backgroundColor="background-color:blueviolet!important;" title="Total Income" amount="$92.000"
            savingPercentage="25" />

        <x-dashboard-item backgroundColor="background-color: greenyellow;" title="Total Expences" amount="$179.000"
            savingPercentage="65" />
    </div>
    <div class="row">
        <x-dashboard-item backgroundColor="background-color:blueviolet!important;" title="Cash on Hand" amount="$92.000"
            savingPercentage="25" />

        <x-dashboard-item backgroundColor="background-color: greenyellow;" title="Net Profit Margin" amount="$179.000"
            savingPercentage="65" />
    </div>
@endsection
