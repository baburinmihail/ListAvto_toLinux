@extends('dashbord_avtolist')

@section('title', 'Все водители')

@section('content')
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="table-responsive">
            <h2>Выберите автомобиль для которого необходимо создать маршрутный лист</h2>
            <table class="table table-striped table-sm">
                <thead>
                <tr>
                    <th scope="col">Марка</th>
                    <th scope="col">Гос.номер</th>
                    <th scope="col"></th>
                </tr>
                </thead>
                <tbody>
                @if (session('success'))
                    <h4>{{session('success')}}</h4>
                @endif
                @foreach($avtomobilist  as $value)
                    <tr>
                        <td>{{ $value['mark'] }}</td>
                        <td>{{ $value['gosnomer'] }}</td>
                        <td><a href="{{ route('bild.edit', $value['id'] ) }}">Создать лист</a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
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
        document.querySelector('#nav-link_create_edit').style.color= '#0093ff';
        document.querySelector('#nav-link_vodila_create').style.color= 'red';
    </script>
@endsection

