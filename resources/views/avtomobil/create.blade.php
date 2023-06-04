@extends('dashbord_avtolist')

@section('title', 'Создание УЗ водителя')

@section('content')
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        @if (session('success'))
            <h4>{{session('success')}}</h4>
        @endif
        <div class="table-responsive">
            <form  action="{{ route('avtomobil.store') }}" method="POST">
                @csrf
                <table class="table table-striped table-sm">
                    <thead>
                        <tr>
                            <th scope="col" style="max-width: 150px"><h3>Создание новой машины</h3></th>
                            <th scope="col"> </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="">
                            <td scope="col" style="max-width: 150px">Марка новой машины</td>
                            <td scope="col"><input name="mark" class="mark" type="text" placeholder="Марка авто" required></td>
                        </tr>
                        <tr class="">
                            <td scope="col">Регистрационный знак</td>
                            <td scope="col"><input name="gosnomer" class="gosnomer" type="text" placeholder="Гос.номер" required></td>
                        </tr>
                        <tr class="">
                            <td scope="col">Норма топлива летом</td>
                            <td scope="col"><input  min="0" step="0.001" type="number" name="normatopliva_summer" class="normatopliva_summer" type="text" placeholder="Норма топлива летом" required></td>
                        </tr>
                        <tr class="">
                            <td scope="col">Норма топлива зимой</td>
                            <td scope="col"><input  min="0" step="0.001" type="number" name="normatopliva_winter" class="normatopliva_winter" type="text" placeholder="Норма топлива зимой" required></td>
                        </tr>
                        <tr class="">
                            <td scope="col">Изначальный ГСМ</td>
                            <td scope="col"><input  min="0" step="0.001" type="number" name="gsm_end_new_day" class="gsm_end_new_day" type="text" placeholder="Изначальный ГСМ" required></td>
                        </tr>
                        <tr class="">
                            <td scope="col">Изначальный Пробег</td>
                            <td scope="col"><input  min="0" step="0.001" type="number" name="speedometer_new_day" class="speedometer_new_day" type="text" placeholder="Изначальный Пробег" required></td>
                        </tr>
                    </tbody>
                </table>
                <div class="col-md-12">
                    <input name="submit" class="btn-2" style="background: #739655"  type="submit" value="Создать">
                </div>
            </form>
        </div>
    </main>
    <script>
        document.querySelector('#nav-link_transport').style.color= '#0093ff';
    </script>
@endsection


