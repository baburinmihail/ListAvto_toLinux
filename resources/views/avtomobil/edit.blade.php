@extends('dashbord_avtolist')

@section('title', 'Создание УЗ водителя')

@section('content')
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        @if (session('success'))
            <h4>{{session('success')}}</h4>
        @endif
        <div class="table-responsive">
            <form  action="{{ route('avtomobil.update',$avtomobil['id'] ) }}" method="POST">
                @csrf
                @method('PUT')
                <table class="table table-striped table-sm">
                    <thead>
                    <tr>
                        <th scope="col" style="max-width: 150px"><h3>Редактирование машины</h3></th>
                        <th scope="col"> </th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr class="">
                        <td scope="col" style="max-width: 150px">Марка машины</td>
                        <td scope="col"><input name="mark" value="{{$avtomobil['mark']}}" class="mark" type="text" placeholder="{{$avtomobil['mark']}}" required></td>
                    </tr>
                    <tr class="">
                        <td scope="col">Регистрационный знак</td>
                        <td scope="col"><input name="gosnomer" value="{{$avtomobil['gosnomer']}}" class="gosnomer" type="text" placeholder="{{$avtomobil['gosnomer']}}" required></td>
                    </tr>
                    <tr class="">
                        <td scope="col">Норма топлива летом</td>
                        <td scope="col"><input name="normatopliva_summer" value="{{$avtomobil['normatopliva_summer']}}" class="normatopliva_summer" type="text" placeholder="{{$avtomobil['normatopliva_summer']}}" required></td>
                    </tr>
                    <tr class="">
                        <td scope="col">Норма топлива зимой</td>
                        <td scope="col"><input name="normatopliva_winter" value="{{$avtomobil['normatopliva_winter']}}" class="normatopliva_winter" type="text" placeholder="{{$avtomobil['normatopliva_winter']}}" required></td>
                    </tr>
                    <tr class="">
                        <td scope="col">Изначальный ГСМ</td>
                        <td scope="col"><input name="gsm_end_new_day" value="{{$avtomobil['gsm_end_new_day']}}" class="gsm_end_new_day" type="text" placeholder="{{$avtomobil['gsm_end_new_day']}}" required></td>
                    </tr>
                    <tr class="">
                        <td scope="col">Изначальный Пробег</td>
                        <td scope="col"><input name="speedometer_new_day" value="{{$avtomobil['speedometer_new_day']}}" class="speedometer_new_day" type="text" placeholder="{{$avtomobil['speedometer_new_day']}}" required></td>
                    </tr>
                    </tbody>
                </table>
                <div class="col-md-12">
                    <input name="submit" class="btn-2" style="background: #739655"  type="submit" value="Обновить">
                </div>
            </form>
        </div>
    </main>
    <script>
        document.querySelector('#nav-link_transport').style.color= '#0093ff';
    </script>
@endsection


