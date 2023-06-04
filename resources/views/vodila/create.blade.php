@extends('dashbord_avtolist')

@section('title', 'Создание УЗ водителя')

@section('content')
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        @if (session('success'))
            <h4>{{session('success')}}</h4>
        @endif
        <div class="table-responsive">
            <form  action="{{ route('peaple.store') }}" method="POST">
                @csrf
                <table class="table table-striped table-sm">
                    <thead>
                        <tr>
                            <th scope="col" style="max-width: 150px"><h3>Создание новой записи водителя</h3></th>
                            <th scope="col"> </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="">
                            <td scope="col"  style="max-width: 150px">Имя</td>
                            <td scope="col"><input name="nameD" id="nameD" class="nameD" type="text" placeholder="Иван" required></td>
                        </tr>
                        <tr class="">
                            <td scope="col" >Фамилия</td>
                            <td scope="col"><input name="surnameD" id="surname" class="surnameD" type="text" placeholder="Иванов" required></td>
                        </tr>
                        <tr class="">
                            <td scope="col">Отчество</td>
                            <td scope="col"><input name="atronymicD" id="atronymic" class="atronymicD" type="text" placeholder="Иванович" required></td>
                        </tr>
                    </tbody>
                </table>
                <div class="col-md-12" style="visibility: hidden">
                    <input name="fullname" id="fullname" class="fullname" type="text" placeholder="fullname" required>
                </div>
                <div class="col-md-12">
                    <input name="submit" class="btn-2" style="background: #739655"  type="submit" value="Создать">
                </div>
            </form>
        </div>
    </main>
    <script>
        document.querySelector('#nav-link_vodila').style.color= '#0093ff';
    </script>
    <script type="text/javascript">
        //функция складывания
        function Fun1(){
            let nameD = document.querySelector('#nameD').value
            let surnameD = document.querySelector('#surname').value
            let atronymicD = document.querySelector('#atronymic').value


            let fullname =  surnameD+' '+nameD+' '+atronymicD

            console.log(nameD);
            console.log(surnameD);
            console.log(atronymicD);
            console.log(fullname);

            document.querySelector('#fullname').value = fullname ;
        }

        //перезапуск функции
        nIntervId = setInterval(Fun1, 1000);
    </script>
@endsection


