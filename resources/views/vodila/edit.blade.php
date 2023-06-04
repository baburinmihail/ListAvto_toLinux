@extends('dashbord_avtolist')

@section('title', 'Создание УЗ водителя')

@section('content')
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        @if (session('success'))
            <h4>{{session('success')}}</h4>
        @endif
        <form  action="{{ route('peaple.update',$peaple['id']) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="row mb-2" >
                <div class="col-md-12">Изменения данных водителя</div>
                <div class="col-md-8">
                    Имя
                </div>
                <div class="col-md-4">
                    <input name="nameD" id="nameD" class="firstName" type="text" value="{{ $peaple['nameD'] }}" placeholder="Иван">
                </div>
                <div class="col-md-8">
                    Фамилия
                </div>
                <div class="col-md-4">
                    <input name="surnameD" id="surname" class="lastName" type="text" value="{{ $peaple['surnameD'] }}" placeholder="Иванов">
                </div>
                <div class="col-md-8">
                    Отчество
                </div>
                <div class="col-md-4">
                    <input name="atronymicD" id="atronymic" class="patronymic" value="{{ $peaple['atronymicD'] }}" type="text" placeholder="Иванович">
                </div>
                <div class="col-md-12" style="visibility: hidden">
                    <input name="fullname" id="fullname" class="fullname" type="text" placeholder="fullname" value="value="{{ $peaple['atronymicD'] }}"" required>
                </div>
                <div class="col-md-12">
                    <input name="submit" type="submit" value="Обновить">
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


            let fullname = nameD+' '+ surnameD+' '+ atronymicD

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


