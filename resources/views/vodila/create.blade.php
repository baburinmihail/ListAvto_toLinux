@extends('dashbord_avtolist')

@section('title', 'Создание УЗ водителя')

@section('content')
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        @if (session('success'))
            <h4>{{session('success')}}</h4>
        @endif
        <form  action="{{ route('peaple.store') }}" method="POST">
            @csrf
            <div class="row mb-2" >
                <div class="col-md-12">Создание новой записи водителя</div>
                <div class="col-md-8">
                    Имя
                </div>
                <div class="col-md-4">
                    <input name="nameD" id="nameD" class="nameD" type="text" placeholder="Иван" required>
                </div>
                <div class="col-md-8">
                    Фамилия
                </div>
                <div class="col-md-4">
                    <input name="surnameD" id="surname" class="surnameD" type="text" placeholder="Иванов" required>
                </div>
                <div class="col-md-8">
                    Отчество
                </div>
                <div class="col-md-4">
                    <input name="atronymicD" id="atronymic" class="atronymicD" type="text" placeholder="Иванович" required>
                </div>
                <div class="col-md-12" style="visibility: hidden">
                    <input name="fullname" id="fullname" class="fullname" type="text" placeholder="fullname" required>
                </div>
                <div class="col-md-12">
                    <input name="submit" id type="submit" value="Создать">
                </div>
            </div>
        </form>
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


