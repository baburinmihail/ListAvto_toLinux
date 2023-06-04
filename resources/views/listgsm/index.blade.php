@extends('dashbord_avtolist')

@section('title', 'Все листы ГСМ')

@section('content')
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="table-responsive">
            <table class="table table-striped table-sm">
                <thead>
                <tr>
                    <th scope="col">Покозания спидометра начало дня</th>
                    <th scope="col">Покозания спидометра конец</th>
                    <th scope="col">Остаток ГСМ на начало</th>
                    <th scope="col">Марка авто</th>

                    <th scope="col">Гос.номер</th>
                    <th scope="col">Норма расхода на 100 км</th>
                    <th scope="col">Пробег</th>
                    <th scope="col">Получинно ГСМ изначально</th>

                    <th scope="col">Расход ГСМ по норме</th>
                    <th scope="col">Расход ГСМ по факту</th>
                    <th scope="col">Экономия</th>
                    <th scope="col">Остаток ГСМ на конец</th>

                    <th scope="col">Дата </th>
                    <th scope="col">ФИО водителя</th>
                    <th scope="col">Норма времени года</th>

                    <th scope="col"></th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                </tr>
                </thead>
                <tbody>
                @if (session('success'))
                    <h4>{{session('success')}}</h4>
                @endif
                @foreach($gsm  as $value)
                    <tr>
                        <td>{{ $value['title'] }}</td>
                        <td>{{ $value['speedometer_end'] }}</td>
                        <td>{{ $value['gsm_end'] }}</td>
                        <td>{{ $value['car_name'] }}</td>

                        <td>{{ $value['state_number'] }}</td>
                        <td>{{ $value['consumption_rate'] }}</td>
                        <td>{{ $value['mileage'] }}</td>
                        <td>{{ $value['received_gsm_initially'] }}</td>

                        <td>{{ $value['gsm_consumption'] }}</td>
                        <td>{{ $value['fact'] }}</td>
                        <td>{{ $value['economy'] }}</td>
                        <td>{{ $value['remainder_gsm_end'] }}</td>
                        
                        <td>{{ $value['added_at'] }}</td>
                        <td>{{ $value['drivers_fio'] }}</td>
                        <td>{{ $value['season'] }}</td>

                        <td><a href="{{ route('gsm.edit', $value['id'] ) }}"target="_blank">экспорт</a></td>
                        <td>
                            <form action="{{ route( 'gsm.destroy', $value['id'] ) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button id="{{ $value['id'] }}" type="submit" class="btn-2 delete-btn {{ $value['car_name'] }}_{{$value['state_number']}}" href="">удалить</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            {{ $gsm->onEachSide(10)->links() }}
        </div>
    </main>
    <!-- Button trigger modal
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Добавить водителя
    </button>
    -->
    <!-- Modal
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Введите данные</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="col-md-4">
                        <input name="type_avto" class="type_avto" type="text" placeholder="type_avto">
                    </div>
                    <div class="col-md-8">
                        Время года
                    </div>
                    <div class="col-md-4">
                        <input name="seson_year" class="seson_year" type="text" placeholder="seson_year">
                    </div>
                    <div class="col-md-12">
                        <input name="submit" type="submit" value="Отпраить">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрыть</button>
                    <button type="button" class="btn btn-primary">Сохранить</button>
                </div>
            </div>
        </div>
    </div>
    -->
    <script>
        document.querySelector('#nav-link_mainMenu').style.color= '#0093ff';
    </script>
    <script src="{{ url('js/jsList_dontMove.js') }}"></script>
@endsection

