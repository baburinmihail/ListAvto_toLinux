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
    </style>
    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="{{ url('css/mycss/dashboard.css') }}" />
</head>
<body>
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        @if (session('success'))
            <h4>{{session('success')}}</h4>
        @endif
        <form style="display: none"  action="{{ route('gsm.update',$gsm['id']) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="row mb-2" >
                <div class="col-md-12">Выгрузка листа ГСМ</div>
                <div class="col-md-8">
                    Имя
                </div>
                <!--1.title-->
                <div class="col-md-4">
                    <input min="0" name="title" class="title" id="title" type="text" value="{{ $gsm['title'] }}" placeholder="Иван">
                </div>
                <div class="col-md-8">
                    title
                </div>
                <!--2.speedometer_end-->
                <div class="col-md-4">
                    <input min="0" name="speedometer_end" id="speedometer_end" class="speedometer_end" value="{{ $gsm['speedometer_end'] }}" type="text" placeholder="speedometer_end" required>
                </div>
                <div class="col-md-8">
                    speedometer_end
                </div>
                <!--3.gsm_end-->
                <div class="col-md-4">
                    <input name="gsm_end" class="gsm_end" id="gsm_end" type="text" value="{{ $gsm['gsm_end'] }}" placeholder="gsm_end" required>
                </div>
                <div class="col-md-8">
                    gsm_end
                </div>
                <!--4.car_name-->
                <div class="col-md-4">
                    <input name="car_name" class="car_name" id="car_name" type="text" value="{{ $gsm['car_name'] }}"  placeholder="car_name" required>
                </div>
                <div class="col-md-8">
                    car_name
                </div>
                <!--5.state_number-->
                <div class="col-md-4">
                    <input name="state_number" class="state_number" id="state_number" value="{{ $gsm['state_number'] }}" type="text" placeholder="state_number" required>
                </div>
                <div class="col-md-8">
                    state_number
                </div>
                <!--6.consumption_rate-->
                <div class="col-md-4">
                    <input name="consumption_rate" class="consumption_rate" id="consumption_rate"  value="{{ $gsm['consumption_rate'] }}" type="text" placeholder="consumption_rate" required>
                </div>
                <div class="col-md-8">
                    consumption_rate
                </div>
                <!--7.mileage-->
                <div class="col-md-4">
                    <input name="mileage" class="mileage" type="text" id="mileage"  value="{{ $gsm['mileage'] }}" placeholder="mileage" required>
                </div>
                <div class="col-md-8">
                    mileage
                </div>
                <!--8.received_gsm_initially-->
                <div class="col-md-4">
                    <input name="received_gsm_initially" class="received_gsm_initially" id="received_gsm_initially" value="{{ $gsm['received_gsm_initially'] }}" type="text" placeholder="received_gsm_initially" required>
                </div>
                <div class="col-md-8">
                    received_gsm_initially
                </div>
                <!--9.gsm_consumption-->
                <div class="col-md-4">
                    <input name="gsm_consumption" class="gsm_consumption" id="gsm_consumption" type="text" value="{{ $gsm['gsm_consumption'] }}" placeholder="gsm_consumption" required>
                </div>
                <div class="col-md-8">
                    gsm_consumption
                </div>
                <!--10.economy-->
                <div class="col-md-4">
                    <input name="economy" class="economy" type="text" id="economy" value="{{ $gsm['economy'] }}" placeholder="economy" required>
                </div>
                <div class="col-md-8">
                    economy
                </div>
                <!--11.remainder_gsm_end-->
                <div class="col-md-4">
                    <input name="remainder_gsm_end" class="remainder_gsm_end" id="remainder_gsm_end" value="{{ $gsm['remainder_gsm_end'] }}"  type="text" placeholder="remainder_gsm_end" required>
                </div>
                <div class="col-md-8">
                    remainder_gsm_end
                </div>
                <!--12.added_at-->
                <div class="col-md-4">
                    <input name="added_at" class="added_at" type="text" id="added_at" value="{{ $gsm['added_at'] }}" placeholder="added_at" required>
                </div>
                <div class="col-md-8">
                    added_at
                </div>
                <!--13.drivers_name-->
                <div class="col-md-4">
                    <input name="drivers_fio" class="drivers_fio" type="text" id="drivers_fio" value="{{ $gsm['drivers_fio'] }}" placeholder="drivers_fio" required>
                </div>
                <div class="col-md-8">
                    drivers_name
                </div>
                <!--16.season-->
                <div class="col-md-4">
                    <input name="season" class="season" type="text" id="season" value="{{ $gsm['season'] }}" placeholder="season" required>
                </div>
                <div class="col-md-8">
                    season
                </div>
            </div>
                <div class="col-md-12">
                    <input name="submit" type="submit" value="Обновить">
                </div>
            </div>
        </form>
        <!--------------------------------------------------------------->
    <script src="{{ url('js/pdf/pdfmake.min.js') }}"></script>
    <script src="{{ url('js/pdf/vfs_fonts.js') }}"></script>
    <script src="{{ url('js/bootstrap.js') }}"></script>
    <script src="{{ url('js/pdf/js_myPdf.js') }}"></script>

</body>
</html>



