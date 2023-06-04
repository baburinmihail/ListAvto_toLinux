@extends('dashbord_avtolist')

@section('title', 'Создание УЗ водителя')

@section('content')
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        @if (session('success'))
            <h4>{{session('success')}}</h4>
        @endif
        <form  action="{{ route('avtomobil.store') }}" method="POST">
            @csrf
            <div class="row mb-2" >
                <div class="col-md-12">Создание новую машину</div>
                <div class="col-md-8">
                    Марка авто
                </div>
                <div class="col-md-4">
                    <input name="mark" class="mark" type="text" placeholder="Марка авто" required>
                </div>
                <div class="col-md-8">
                    Гос.номер
                </div>
                <div class="col-md-4">
                    <input name="gosnomer" class="gosnomer" type="text" placeholder="Гос.номер" required>
                </div>
                <div class="col-md-8">
                    Норма топлива летом
                </div>
                <div class="col-md-4">
                    <input  min="0" step="0.001" type="number" name="normatopliva_summer" class="normatopliva_summer" type="text" placeholder="Норма топлива летом" required>
                </div>
                <div class="col-md-8">
                    Норма топлива зимой
                </div>
                <div class="col-md-4">
                    <input  min="0" step="0.001" type="number" name="normatopliva_winter" class="normatopliva_winter" type="text" placeholder="Норма топлива зимой" required>
                </div>
                <div class="col-md-8">
                    Изначальный ГСМ
                </div>
                <div class="col-md-4">
                    <input  min="0" step="0.001" type="number" name="gsm_end_new_day" class="gsm_end_new_day" type="text" placeholder="Изначальный ГСМ" required>
                </div>
                <div class="col-md-8">
                    Изначальный пробег
                </div>
                <div class="col-md-4">
                    <input  min="0" step="0.001" type="number" name="speedometer_new_day" class="speedometer_new_day" type="text" placeholder="Изначальный пробег" required>
                </div>
                <div class="col-md-12">
                    <input name="submit" type="submit" value="Создать">
                </div>
            </div>
        </form>
    </main>
    <script>
        document.querySelector('#nav-link_transport').style.color= '#0093ff';
    </script>
@endsection


