@extends('dashbord_avtolist')

@section('title', 'Создание листа ГСМ')

@section('content')
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        @if (session('success'))
            <h4>{{session('success')}}</h4>
        @endif
        <form  action="{{ route('gsm.store') }}" method="POST">
            @csrf

            <div class="row mb-2" >
                <div class="col-md-12"><h2>Создание листа ГСМ(Представление не актуальное)</h2></div>
                <!--1.title-->
                <div class="col-md-8">
                    Показания спидометра начало дня
                </div>
                <div class="col-md-4">
                    <input min="0" step="0.001" type="number" name="title" id="title" class="title"    placeholder="Показания спидометра начало дня" required>
                </div>
                <!--2.speedometer_end-->
                <div class="col-md-8">
                    Показания спидометра конец
                </div>
                <div class="col-md-4">
                    <input min="0" step="0.001" type="number" name="speedometer_end" id="speedometer_end" style="background: #dfe0e1" class="speedometer_end"  placeholder="Показания спидометра конец" required>
                </div>
                <!--3.gsm_end-->
                <div class="col-md-8">
                    Остаток ГСМ на начало
                </div>
                <div class="col-md-4">
                    <input min="0" step="0.001" type="number" id="gsm_end" name="gsm_end" class="gsm_end"  placeholder="Остаток ГСМ на начало" required>
                </div>
                <!--4. car_name-->
                <div class="col-md-8">
                    Марка авто
                </div>
                <div class="col-md-4">
                    <!--
                    <p><select id="car_name" style="background: #dfe0e1" name="car_name" >
                            <option selected disabled>Выберите марку</option>
                        </select>
                    </p>
                    -->
                    <input type="text" id="car_name" name="car_name" class="car_name"  placeholder="марка авто" required>
                </div>
                <!--5.state_number-фейк-->
                <div class="col-md-8">
                    Гос.номер
                </div>
                <div class="col-md-4">
                    <p><select id="state_number2" style="background: #dfe0e1" name="state_number2" >
                            <option selected disabled>Выберите Гос.номер</option>
                            @foreach($avtomobilist  as $value2)
                            @endforeach
                        </select>
                    </p>
                </div>
                <!--6.consumption_rate-->
                <div class="col-md-8">
                    Норма расхода на 100 км
                </div>
                <div class="col-md-4">
                    <input min="0" step="0.001" type="number" id="consumption_rate" name="consumption_rate" class="consumption_rate" readonly  required>
                </div>

                <!--7.mileage-->
                <div class="col-md-8" >
                    Пробег
                </div>
                <div class="col-md-4" >
                    <input name="mileage" id="mileage3" class="mileage" type="text" placeholder="пробег" readonly required>
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
                    Расход ГСМ
                </div>
                <div class="col-md-4">
                    <input min="0" step="0.001" type="number" id="gsmRashod" name="gsm_consumption" class="gsm_consumption"   placeholder="Расход ГСМ" required>
                </div>
                <!--10.economy-->
                <div class="col-md-8">
                    Экономия
                </div>
                <div class="col-md-4">
                    <input  step="0.001" type="number" id="economy" name="economy" class="economy" placeholder="Экономия" required>
                </div>
                <!--11.remainder_gsm_end-->
                <div class="col-md-8">
                    Остаток ГСМ на конец
                </div>
                <div class="col-md-4">
                    <input min="0" step="0.001" type="number" id="remainder_gsm_end" name="remainder_gsm_end" class="remainder_gsm_end"  placeholder="Остаток ГСМ на конец" required>
                </div>
                <!--12.added_at-->
                <div class="col-md-8">
                    Дата
                </div>
                <div class="col-md-4">
                    <input name="added_at" id="added_at" class="added_at" type="text" placeholder="Дата" required>
                </div>
                <!--14.drivers_surname-->
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
                <!--16.season-->
                <div class="col-md-8">
                    Норма времени года
                </div>
                <div class="col-md-4">
                    <!--<input name="season" class="season" type="text" placeholder="Норма времени года" required>-->
                    <p><select id="season" style="background: #dfe0e1" name="season" class="season" required>
                            <option  value="1">Лето</option>
                            <option  value="2">Зима</option>
                        </select>
                    </p>
                </div>
                <!--5.state_number-реальный-->
                <div style="visibility: hidden" class="col-md-8">
                    Гос.номер
                </div>
                <div style="visibility: hidden" class="col-md-4">
                    <input name="state_number" id="state_number" class="state_number" type="text" placeholder="state_number" required>
                </div>
                <!------------------------------->
                <div class="col-md-8" style="display: none">
                    fake
                </div>
                <div class="col-md-4" style="display: none">
                    <input name="fake" id="fake" class="fake" type="text" value="0" placeholder="Норма времени года" >
                </div>
                <!------------------------------->
                <div class="col-md-8" style="display: none">
                    summer
                </div>
                <div class="col-md-4" style="display: none">
                    <input name="summer" id="summer" class="summer" type="text" value="0" placeholder="summer" >
                </div>
                <!------------------------------->
                <div class="col-md-8" style="display: none">
                    winter
                </div>
                <div class="col-md-4" style="display: none">
                    <input name="winter" id="winter" class="winter" type="text" value="0" placeholder="winter" >
                </div>

                <!--finish-->
                <div class="col-md-12">
                    <input id="submit" name="submit" type="submit" value="Создать">
                </div>
            </div>
        </form>
    </main>

    <!--Подсветка-------------------------------------------------->
    <script type="text/javascript">
        document.querySelector('#nav-link_create').style.color= '#0093ff';
    </script>



    <!--Расчет пробега--------------------------------------------->
    <script type="text/javascript">

        function mileageFun(){
            const mileage1 = parseFloat(document.querySelector('#title').value)
            let mileage2 = parseFloat(document.querySelector('#speedometer_end').value)

            if (mileage2<mileage1){

                mileage2 = mileage1
                alert('Пробег введен некоректно')
                document.querySelector('#speedometer_end').value = mileage2 ;

            }else if(mileage2===mileage1){
                mileage2 = parseFloat(document.querySelector('#speedometer_end').value)
            }else {
                mileage2 = parseFloat(document.querySelector('#speedometer_end').value)
            }

            let mileage = String(mileage2-mileage1)



            document.querySelector('#mileage3').value = mileage ;
        }

        //перезапуск функции
        nIntervId1 = setInterval(mileageFun, 5000);
    </script>



    <!--Беру время из интернета----------------------------------------------->
    <script type="text/javascript">
        let now = new Date().toLocaleString();
        document.querySelector('#added_at').value = now ;
    </script>



    <!--расход ГСМ------------------------------------------------------------->
    <script type="text/javascript">

        function gsmRashodFun(){
            let summer = parseFloat(document.querySelector('#summer').value)
            let winter = parseFloat(document.querySelector('#winter').value)
            let season = parseFloat(document.querySelector('#season').value)
            let mileage = parseFloat(document.querySelector('#mileage3').value)
            let normaTopliva = parseInt(document.querySelector('#consumption_rate').value)



            //проверка сезона
            if (season === 1){
                normaTopliva = summer
                document.querySelector('#consumption_rate').value= normaTopliva;
            }else {
                normaTopliva = winter
                document.querySelector('#consumption_rate').value= normaTopliva;
            }

            let gsmRashod = ((normaTopliva*mileage)/100).toFixed(3) ;

            document.querySelector('#gsmRashod').value = gsmRashod ;


        }

        //перезапуск функции
        nIntervId2 = setInterval(gsmRashodFun, 1000);
    </script>

    <!--"экономия"------------------------------------------------------------->
    <script type="text/javascript">

        function economyGsm(){
            let gsmOrigin = parseFloat(document.querySelector('#received_gsm_initially').value)
            let gsmRashod = parseFloat(document.querySelector('#gsmRashod').value)

            let economy = (gsmRashod - gsmOrigin).toFixed(3)

            document.querySelector('#economy').value = economy ;
        }

        //перезапуск функции
        nIntervId3 = setInterval(economyGsm, 1000);
    </script>

    <!--"Остаток ГСМ"------------------------------------------------------------->

    <script type="text/javascript">

        function economyGsm(){
            let gsmOrigin_end = parseFloat(document.querySelector('#gsm_end').value)
            let gsmOrigin = parseFloat(document.querySelector('#received_gsm_initially').value)
            let gsmRashod = parseFloat(document.querySelector('#gsmRashod').value)

            let gsmOstatok = ((gsmOrigin_end + gsmOrigin) - gsmRashod).toFixed(3)

            document.querySelector('#remainder_gsm_end').value = gsmOstatok ;
        }

        //перезапуск функции
        nIntervId4 = setInterval(economyGsm, 1000);
    </script>

    <script type="text/javascript">
        let peaple = <?= json_encode($peaple) ?>;
        let avtomobilist = <?= json_encode($avtomobilist) ?>;


        //function toArr(obj)
        //{
        //    Object.keys(obj).forEach(function(key) {
        //        console.log(key, obj[key]);
        //
        //    });
        //}

        //toArr(avtomobilist)

        function toArr2(cars)
        {
            let [mark , gosnomer , summer , winter, gsmNewDay , melegeNewDay]=''
            let opshins =  "<option selected disabled value='0' >выбери марку</option>"
            let values=0
            cars.forEach(cars => {
                values++
                //console.log(values)
                //console.log(cars.gosnomer)
                //console.log(cars.normatopliva_summer)
                //console.log(cars.normatopliva_winter)
                //console.log(cars.gsm_end_new_day)
                //console.log(cars.speedometer_new_day)

                mark = String(cars.mark)
                gosnomer = String(cars.gosnomer)
                summer = String(cars.normatopliva_summer)
                winter = String(cars.normatopliva_winter)
                gsmNewDay = String(cars.gsm_end_new_day)
                melegeNewDay = String(cars.speedometer_new_day)

                opshins += "<option  value='"+values+"~"+mark+"~"+gosnomer+"~"+summer+"~"+winter+"~"+gsmNewDay+"~"+melegeNewDay+"'>"+cars.gosnomer+"</option>"
                //if (cars.age >= 18) console.log(user.name);

            });

            document.querySelector('#state_number2').innerHTML = opshins ;



        }


        toArr2(avtomobilist)



        function jujment(){

            let fake = document.querySelector('#fake').value
            let values2 = document.querySelector('#state_number2').value

            let [numbeR , mark , gosnomer , summer , winter, gsmNewDay , melegeNewDay] = values2.split('~');

            if ( numbeR === fake ){

            }else {
                fake = numbeR
                document.querySelector('#fake').value = fake ;
                //option.textContent
                document.querySelector('#summer').value = summer ;
                document.querySelector('#car_name').value =mark  ;
                document.querySelector('#winter').value = winter ;
                document.querySelector('#gsm_end').value = gsmNewDay ;
                document.querySelector('#title').value = melegeNewDay ;
                document.querySelector('#state_number').value = gosnomer ;

            }

        }


        //перезапуск функции
        nIntervId2 = setInterval(jujment, 1000);

    </script>



@endsection


