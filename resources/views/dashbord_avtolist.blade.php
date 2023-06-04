<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Автомобильный лист-@yield('title')</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="{{ url('css/mycss/bootstrap.css') }}" />
    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }

        .botstrape_class{
            font-family: "Times New Roman";
            text-align: center;
        }

         .btn-2 {
	    display: inline-block;
	    box-sizing: border-box;
	    padding: 0 16px;
	    margin: 0 15px 15px 0;
	    outline: none;
	    border: none;
	    border-radius: 4px;
	    height: 30px;
	    line-height: 30px;
	    font-size: 12.5px;
	    font-weight: normal;
	    text-decoration: none;
	    vertical-align: top;
	    color: #fff;
	    background-color: #5181b8;
	    cursor: pointer;
	    user-select: none;
	    appearance: none;
	    touch-action: manipulation;
	    overflow: hidden;
        }
        .btn-2:focus-visible {
	    box-shadow: 0 0 0 3px lightskyblue;
        }
        .btn-2:hover {
	    opacity: 0.88;
        }
        .btn-2:active {
	    line-height: 32px;
        }
        .btn-2:disabled {
	    pointer-events: none;
	    opacity: 0.65;
        }       
        </style>
    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="{{ url('css/mycss/dashboard.css') }}" />
</head>
<body>
<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">

    <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="{{ url('/') }}">Промтранс</a>
    <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <input class="form-control form-control-dark w-100" type="text" placeholder="Поиск" aria-label="Search">
    <div class="navbar-nav">
        <div class="nav-item text-nowrap">
            <a class="nav-link px-3" href="{{ route('logout') }}"
               onclick="event.preventDefault();
                  document.getElementById('logout-form').submit();">
                {{ __('Выход') }}
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </div>
    </div>
</header>

<div class="container-fluid">
    <div class="row">
        <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
            <div class="position-sticky pt-3">
                <ul class="nav flex-column">

                    <li class="nav-item">
                        <a id="nav-link_mainMenu" class="nav-link" aria-current="page" href="{{ route('gsm.index') }}">
                            <span data-feather="home"></span>
                            Список листов
                        </a>
                    </li>
                    <!--
                    <li class="nav-item">
                        <a id="nav-link_create" class="nav-link" href="{{ route('gsm.create') }}">
                            <span data-feather="file"></span>
                            Создать новый лист
                        </a>
                    </li>
                    -->
                    <li class="nav-item">
                        <a id="nav-link_create_edit" class="nav-link" href="{{ route('bild.index') }}">
                            <span data-feather="file"></span>
                            Создать новый лист
                        </a>
                    </li>
                    <li class="nav-item">
                        <a id="nav-link_gsm" class="nav-link" href="{{url('gsm_ex/export/')}}">
                            <span data-feather="file"></span>
                            Выгрузка всех листов
                        </a>
                    </li>
                    <!--
                    <li class="nav-item">
                        <a id="nav-link_gsm_list" class="nav-link" href="{{url('gsm_ex/list/')}}">
                            <span data-feather="file"></span>
                            Маршрутный лист2erw
                        </a>
                    </li>
                    -->
                    <li class="nav-item">
                        <a id="nav-link_vodila" class="nav-link" href="{{ route('peaple.index') }}">
                            <span data-feather="file"></span>
                            Водитель
                        </a>
                    </li>
                    <li class="nav-item">
                        <a id="nav-link_transport" class="nav-link" href="{{ route('avtomobil.index') }}">
                            <span data-feather="file"></span>
                            Транспорт
                        </a>
                    </li>
                    <!--
                    <li class="nav-item">
                      <a class="nav-link" href="#">
                        <span data-feather="shopping-cart"></span>
                        Products
                      </a>
                    </li>
                    -->
                </ul>
            </div>
        </nav>
        @yield('content')

    </div>
</div>
<script src="{{ url('js/table2excel.js') }}"></script>
<script src="{{ url('js/bootstrap.js') }}"></script>
</body>
</html>
