@extends('dashbord_avtolist')

@section('title', 'Все листы ГСМ')

@section('content')
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div>
            <form action="{{route('gsm.index')}}" method="get">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Поиск по имени водителя</label>
                    <input name="search_field" @if(isset($_GET['search_field'])) value="{{$_GET['search_field']}}" @endif type="text" class="form-control" id="exampleFormControlInput1" placeholder="Поиск по имени водителя">
                </div>
                <div class="mb-3">
                    <div class="form-label">Выбор авто</div>
                    <select name="category_id" class="form-select form-select-sm" aria-label=".form-select-sm example">
                        <option></option>
                        @foreach($categories as $category)
                            <option value="{{$category->id}}" @if(isset($_GET['category_id'])) @if($_GET['category_id'] == $category->id) selected @endif @endif>{{$category->mark}}</option>
                        @endforeach
                    </select>
                </div>
                <button type="submit" style="background: #739655" class="btn-2 delete-btn">Фильтрация</button>
            </form>
        </div>
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
                <?php $n=0 ?>
                @if (session('success'))
                    <h4>{{session('success')}}</h4>
                @endif
                @foreach($gsm  as $value)
                    <tr class="object" >
                        <td  id="td-{{$n}}-0">{{ $value['title'] }}</td>
                        <td id="td-{{$n}}-1">{{ $value['speedometer_end'] }}</td>
                        <td id="td-{{$n}}-2">{{ $value['gsm_end'] }}</td>
                        <td id="td-{{$n}}-3">{{ $value['car_name'] }}</td>

                        <td id="td-{{$n}}-4" >{{ $value['state_number'] }}</td>
                        <td id="td-{{$n}}-5" >{{ $value['consumption_rate'] }}</td>
                        <td id="td-{{$n}}-6">{{ $value['mileage'] }}</td>
                        <td id="td-{{$n}}-7">{{ $value['received_gsm_initially'] }}</td>

                        <td id="td-{{$n}}-8">{{ $value['gsm_consumption'] }}</td>
                        <td id="td-{{$n}}-9">{{ $value['fact'] }}</td>
                        <td id="td-{{$n}}-10">{{ $value['economy'] }}</td>
                        <td id="td-{{$n}}-11">{{ $value['remainder_gsm_end'] }}</td>

                        <td id="td-{{$n}}-12">{{ $value['added_at'] }}</td>
                        <td id="td-{{$n}}-13">{{ $value['drivers_fio'] }}</td>
                        <td id="td-{{$n}}-14">{{ $value['season'] }}</td>

                        <td>
                            <form action="{{ route('gsm.edit', $value['id'] ) }}" method="GET">
                                @csrf
                                @method('EDIT')
                                <button id="{{ $value['id'] }}" type="submit" style="background: #739655"
                                        class="btn-2 delete-btn"  {{ $value['car_name'] }}_{{$value['state_number']}}"
                                        href="">Экспорт
                                </button>
                            </form>
                        </td>
                        <td>
                            <form action="{{ route( 'gsm.destroy', $value['id'] ) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button id="{{ $value['id'] }}" type="submit" style="background: #ea6059" class="btn-2 delete-btn {{ $value['car_name'] }}_{{$value['state_number']}}" href="">удалить</button>
                            </form>
                        </td>
                    </tr>
                        <?php $n=$n+1;?>
                @endforeach
                </tbody>
            </table>
            {{ $gsm->withQueryString()->onEachSide(10)->links() }}
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

