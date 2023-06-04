@extends('dashbord_avtolist')

@section('title', 'Создание УЗ водителя')

@section('content')
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        @if (session('success'))
            <h4>{{session('success')}}</h4>
        @endif
        <form  action="{{ route('avtomobil.update',$avtomobil['id'] ) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="row mb-2" >
                <div class="col-md-12">Редактирование автомобиля</div>
                <div class="col-md-8">
                    Марка авто
                </div>
                <div class="col-md-4">
                    <input name="mark" value="{{$avtomobil['mark']}}" class="mark" type="text" placeholder="{{$avtomobil['mark']}}" required>
                </div>
                <div class="col-md-8">
                    Гос.номер
                </div>
                <div class="col-md-4">
                    <input name="gosnomer" value="{{$avtomobil['gosnomer']}}" class="gosnomer" type="text" placeholder="{{$avtomobil['gosnomer']}}" required>
                </div>
                <div class="col-md-8">
                    Норма топлива летом
                </div>
                <div class="col-md-4">
                    <input name="normatopliva_summer" value="{{$avtomobil['normatopliva_summer']}}" class="normatopliva_summer" type="text" placeholder="{{$avtomobil['normatopliva_summer']}}" required>
                </div>
                <div class="col-md-8">
                    Норма топлива Зимой
                </div>
                <div class="col-md-4">
                    <input name="normatopliva_winter" value="{{$avtomobil['normatopliva_winter']}}" class="normatopliva_winter" type="text" placeholder="{{$avtomobil['normatopliva_winter']}}" required>
                </div>
                <div class="col-md-8">
                    Изначальный ГСМ
                </div>
                <div class="col-md-4">
                    <input name="gsm_end_new_day" value="{{$avtomobil['gsm_end_new_day']}}" class="gsm_end_new_day" type="text" placeholder="{{$avtomobil['gsm_end_new_day']}}" required>
                </div>
                <div class="col-md-8">
                    Изначальный Пробек
                </div>
                <div class="col-md-4">
                    <input name="speedometer_new_day" value="{{$avtomobil['speedometer_new_day']}}" class="speedometer_new_day" type="text" placeholder="{{$avtomobil['speedometer_new_day']}}" required>
                </div>
                <div class="col-md-12">
                    <input name="submit" type="submit" value="Обновить">
                </div>
            </div>
        </form>
    </main>
    <script>
        document.querySelector('#nav-link_transport').style.color= '#0093ff';
    </script>
@endsection


