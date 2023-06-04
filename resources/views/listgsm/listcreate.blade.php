@extends('dashbord_avtolist')

@section('title', 'Создание УЗ водителя')

@section('content')
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        @if (session('success'))
            <h4>{{session('success')}}</h4>
        @endif
        <form  action="{{ route('bild.update',$bild['id'] ) }}" method="POST">
            @csrf
            @method('PUT')
                <div class="row mb-2" >
                    <div class="col-md-12"><h2>Создание листа ГСМ</h2></div>
                    <!--1.title-->
                    <div class="col-md-8">
                        Показания спидометра начало
                    </div>
                    <div class="col-md-4">
                        <input min="0" step="0.001" type="number" name="title" id="title" class="title" value="{{$speedometer_end}}"   placeholder="Показания спидометра начало " readonly required>
                    </div>
                    <!--2.speedometer_end-->
                    <div class="col-md-8">
                        Показания спидометра
                    </div>
                    <div class="col-md-4">
                        <input min="0" step="0.001" type="number" name="speedometer_end" id="speedometer_end" style="background: #dfe0e1" class="speedometer_end"  placeholder="Показания спидометра конец" required>
                    </div>
                    <!--3.gsm_end-->
                    <div class="col-md-8">
                         Остаток ГСМ на начало
                    </div>
                    <div class="col-md-4">
                        <input min="0" step="0.001" type="number" name="gsm_end" id="gsm_end" class="title"    placeholder="gsm_end" value="{{$gsm_list_gsm_end}}" readonly required>
                    </div>
                    <!--4.car_name-->
                    <div class="col-md-8">
                        Марка авто
                    </div>
                    <div class="col-md-4">
                        <input min="0" step="0.001" type="text" name="car_name" id="car_name" class="title"    placeholder="car_name" value="{{$car_name}}" readonly required>
                    </div>
                    <!--5.state_number-->
                    <div class="col-md-8">
                        Гос.номер
                    </div>
                    <div class="col-md-4">
                        <input min="0" step="0.001" type="text" name="state_number" id="state_number" class="title" value="{{$state_number}}" readonly    placeholder="Гос.номер" required>
                    </div>
                    <!--6.consumption_rate-->
                    <div class="col-md-8">
                        Норма расхода на 100 км
                    </div>
                    <div class="col-md-4">
                        <input min="0" step="0.001" type="number" name="consumption_rate" id="consumption_rate" class="title"    placeholder="Норма расхода на 100 км" required>
                    </div>
                    <!--7.mileage-->
                    <div class="col-md-8">
                        Пробег
                    </div>
                    <div class="col-md-4">
                        <input min="0" step="0.001" type="number" name="mileage" id="mileage" class="title"    placeholder="пробег" required>
                    </div>
                    <!--8.received_gsm_initially-->
                    <div class="col-md-8">
                        Получено ГСМ изначально
                    </div>
                    <div class="col-md-4">
                        <input min="0" step="0.001" type="number" id="received_gsm_initially" name="received_gsm_initially" style="background: #dfe0e1" class="received_gsm_initially" placeholder="Получено ГСМ изначально" required>
                    </div>
                    <!--9.gsm_consumption-->
                    <div class="col-md-8">
                        Расход ГСМ по норме
                    </div>
                    <div class="col-md-4">
                        <input min="0" step="0.001" type="number" name="gsm_consumption" id="gsm_consumption" class="title"    placeholder="Расход по норме ГСМ" required>
                    </div>
                    <!--10.gsm_consumption-->
                    <div class="col-md-8">
                        Расход ГСМ по факту
                    </div>
                    <div class="col-md-4">
                        <input style="background: #dfe0e1" min="0" step="0.001" type="number" name="fact" id="fact" class="title"    placeholder="Расход ГСМ по факту" required>
                    </div>
                    <!--11.economy-->
                    <div class="col-md-8">
                        Экономия
                    </div>
                    <div class="col-md-4">
                        <input  step="0.001" type="number" id="economy" name="economy" class="economy" placeholder="Экономия" required>
                    </div>
                    <!--12.remainder_gsm_end-->
                    <div class="col-md-8">
                        Остаток ГСМ на конец
                    </div>
                    <div class="col-md-4">
                        <input min="0" step="0.001" type="number" name="remainder_gsm_end" id="remainder_gsm_end" class="title"    placeholder="Остаток ГСМ на конец" required>
                    </div>
                    <!--13.added_at-->
                    <div class="col-md-8">
                        Дата
                    </div>
                    <div class="col-md-4">
                        <input name="added_at" id="added_at" class="added_at" type="text" placeholder="Дата" readonly required>
                    </div>
                    <!--14.added_at-->
                    <div class="col-md-8">
                        ФИО водителя
                    </div>
                    <div class="col-md-4">
                        <p><select style="background: #dfe0e1" name="drivers_fio" required>
                            <option selected disabled>Выберите фамилию</option>
                                @foreach($peaple  as $value1)
                                    <option value="{{ $value1['fullname'] }}">{{ $value1['fullname'] }}</option>
                                @endforeach
                            </select>
                        </p>
                    </div>
                    <!--15.season-->
                    <div class="col-md-8">
                        Норма времени года
                    </div>
                    <!--16.category_id-->
                    <div class="col-md-8">
                        category_id
                    </div>
                    <div class="col-md-4">
                        <input min="0" step="0.001" type="number" name="category_id" id="category_id" class="category_id" value="{{$category_id}}"   placeholder="Показания спидометра начало " readonly required>
                    </div>
                    <div class="col-md-4">
                    <!--<input name="season" class="season" type="text" placeholder="Норма времени года" required>-->
                    <p><select id="season" style="background: #dfe0e1" name="season" class="season" required>
                            <option  value="1">Лето</option>
                            <option  value="2">Зима</option>
                        </select>
                    </p>
                    </div>
                    <!--.summer-->
                    <div style="display:none"  class="col-md-8">
                        summer скрытое поле
                    </div>
                    <div style="display:none" class="col-md-4">
                        <input min="0" step="0.001" type="number" name="summer" id="summer" class="title" value="{{$avtoNormaSummer}}"    placeholder="season1" required>
                    </div>
                    <!--.winter-->
                    <div style="display:none" class="col-md-8">
                        winter скрытое поле
                    </div>
                    <div style="display:none" class="col-md-4">
                        <input min="0" step="0.001" type="number" name="winter" id="winter" class="title" value="{{$avtoNormaWinter}}"    placeholder="season2" required>
                    </div>
                    <!--finish-->
                    <div class="col-md-12">
                        <input id="submit" name="submit" type="submit" value="Создать">
                    </div>
                </div>
            </form>
    </main>
    <script src="{{ url('js/jsGsm_move.js') }}"></script>

@endsection


