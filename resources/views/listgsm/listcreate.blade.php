@extends('dashbord_avtolist')

@section('title', 'Создание УЗ водителя')

@section('content')
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        @if (session('success'))
            <h4>{{session('success')}}</h4>
        @endif
        <div class="table-responsive">
            <form style="max-width: 800px"  action="{{ route('bild.update',$bild['id']) }}" method="POST">
                @csrf
                @method('PUT')
                <table class="table table-striped table-sm" style="max-width: 1500px">
                    <thead>
                    <!--1.title-->
                    <tr>
                        <th scope="col" style="max-width: 50px"><h3>Создание листа ГСМ</h3></th>
                        <th scope="col"> </th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr class="">
                        <td scope="col" style="max-width: 50px">Показания спидометра начало дня</td>
                        <td scope="col" style="max-width: 100px"><input min="0" step="0.001" type="number" name="title" id="title" class="title" value="{{$speedometer_end}}"   placeholder="Показания спидометра начало дня " readonly required></td>
                    </tr>
                    <!--2.speedometer_end-->
                    <tr class="">
                        <td scope="col">Показания спидометра сейчас</td>
                        <td scope="col"><input min="0" step="0.001" type="number" name="speedometer_end" id="speedometer_end" style="background: #dfe0e1" class="speedometer_end"  placeholder="Показания спидометра конец" required></td>
                    </tr>
                    <!--3.gsm_end-->
                    <tr class="">
                        <td scope="col">Остаток ГСМ на начало</td>
                        <td scope="col"><input min="0" step="0.001" type="number" name="gsm_end" id="gsm_end" class="title"    placeholder="gsm_end" value="{{$gsm_list_gsm_end}}" readonly required></td>
                    </tr>
                    <!--4.car_name-->
                    <tr class="">
                        <td scope="col">Марка авто</td>
                        <td scope="col"><input min="0" step="0.001" type="text" name="car_name" id="car_name" class="title"    placeholder="car_name" value="{{$car_name}}" readonly required></td>
                    </tr>
                    <!--5.state_number-->
                    <tr class="">
                        <td scope="col">Гос.номер</td>
                        <td scope="col"><input min="0" step="0.001" type="text" name="state_number" id="state_number" class="title" value="{{$state_number}}" readonly    placeholder="Гос.номер" required></td>
                    </tr>
                    <!--6.consumption_rate-->
                    <tr class="">
                        <td scope="col">Норма расхода на 100 км</td>
                        <td scope="col"><input min="0" step="0.001" type="number" name="consumption_rate" id="consumption_rate" class="title"    placeholder="Норма расхода на 100 км" required></td>
                    </tr>
                    <!--7.mileage-->
                    <tr class="">
                        <td scope="col">Пробег</td>
                        <td scope="col"><input min="0" step="0.001" type="number" name="mileage" id="mileage" class="title"    placeholder="пробег" required></td>
                    </tr>
                    <!--8.received_gsm_initially-->
                    <tr class="">
                        <td scope="col">Получено ГСМ изначально</td>
                        <td scope="col"><input min="0" step="0.001" type="number" id="received_gsm_initially" name="received_gsm_initially" style="background: #dfe0e1" class="received_gsm_initially" placeholder="Получено ГСМ изначально" required></td>
                    </tr>
                    <!--9.gsm_consumption-->
                    <tr class="">
                        <td scope="col">Расход ГСМ по норме</td>
                        <td scope="col"><input min="0" step="0.001" type="number" name="gsm_consumption" id="gsm_consumption" class="title"    placeholder="Расход по норме ГСМ" required></td>
                    </tr>
                    <!--10.gsm_consumption-->
                    <tr class="">
                        <td scope="col">Расход ГСМ по факту</td>
                        <td scope="col"><input style="background: #dfe0e1" min="0" step="0.001" type="number" name="fact" id="fact" class="title"    placeholder="Расход ГСМ по факту" required></td>
                    </tr>
                    <!--11.economy-->
                    <tr class="">
                        <td scope="col">Экономия</td>
                        <td scope="col"><input  step="0.001" type="number" id="economy" name="economy" class="economy" placeholder="Экономия" required></td>
                    </tr>
                    <!--12.remainder_gsm_end-->
                    <tr class="">
                        <td scope="col">Остаток ГСМ на конец</td>
                        <td scope="col"><input min="0" step="0.001" type="number" name="remainder_gsm_end" id="remainder_gsm_end" class="title"    placeholder="Остаток ГСМ на конец" required></td>
                    </tr>
                    <!--13.added_at-->
                    <tr class="">
                        <td scope="col">Дата</td>
                        <td scope="col"><input name="added_at" id="added_at" class="added_at" type="text" placeholder="Дата" readonly required></td>
                    </tr>
                    <!--14.drivers_fio-->
                    <tr class="">
                        <td scope="col">ФИО водителя</td>
                        <td scope="col">
                            <select style="background: #dfe0e1" name="drivers_fio" required>
                                <option selected disabled>Выберите фамилию</option>
                                @foreach($peaple  as $value1)
                                    <option value="{{ $value1['fullname'] }}">{{ $value1['fullname'] }}</option>
                                @endforeach
                            </select>
                        </td>
                    </tr>
                    <!--15.season-->
                    <tr class="">
                        <td scope="col">Норма времени года</td>
                        <td scope="col">
                            <select id="season" style="background: #dfe0e1" name="season" class="season" required>
                                <option  value="1">Лето</option>
                                <option  value="2">Зима</option>
                            </select>
                        </td>
                    </tr>
                    </tbody>
                </table>
                <div class="row mb-2" >
                    <!--16.category_id-->
                    <div style="display:none" class="col-md-8">
                        category_id скрытое поле
                    </div>
                    <div style="display:none" class="col-md-4">
                        <input min="0" step="0.001" type="number" name="category_id" id="category_id" class="category_id" value="{{$category_id}}"   placeholder="Показания спидометра начало " readonly required>
                    </div>
                    <div class="col-md-4">
                        <!--<input name="season" class="season" type="text" placeholder="Норма времени года" required>-->
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
                        <input name="submit" class="btn-2" style="background: #739655"  type="submit" value="Создать новый лист">
                    </div>
                </div>
            </form>
        </div>
        <!---->
    </main>
    <script src="{{ url('js/jsGsm_move.js') }}"></script>
@endsection


