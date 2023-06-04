document.querySelector('#nav-link_create_edit').style.color= '#0093ff';

//функция времени(беру с сервера)
function time_add(){
    let now = new Date().toLocaleString();
    document.querySelector('#added_at').value = now ;
}

time_add();

//Расчет пробега---------------------------------------------


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



        document.querySelector('#mileage').value = mileage ;
    }

    //перезапуск функции через определенный интервал
    nIntervId1 = setInterval(mileageFun, 3000);

//Расчет "расход ГСМ"---------------------------------------------

    function gsmRashodFun(){
        let summer = parseFloat(document.querySelector('#summer').value)
        let winter = parseFloat(document.querySelector('#winter').value)
        let season = parseFloat(document.querySelector('#season').value)
        let mileage = parseFloat(document.querySelector('#mileage').value)
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

        document.querySelector('#gsm_consumption').value = gsmRashod ;


    }

    //перезапуск функции
    nIntervId2 = setInterval(gsmRashodFun, 1000);

//Расчет "Экономия"---------------------------------------------

    function economyGsm(){
        let gsmOrigin = parseFloat(document.querySelector('#gsm_consumption').value)
        let gsmRashod = parseFloat(document.querySelector('#fact').value)

        let economy = (gsmRashod - gsmOrigin).toFixed(3)

        document.querySelector('#economy').value = economy ;

    }

    //перезапуск функции
    nIntervId3 = setInterval(economyGsm, 1000);

//Расчет "Остаток ГСМ на конец"---------------------------------------------
    function remainder_gsm_end(){
        let gsmOrigin_end = parseFloat(document.querySelector('#gsm_end').value)
        let gsmOrigin = parseFloat(document.querySelector('#received_gsm_initially').value)
        let gsmRashod = parseFloat(document.querySelector('#fact').value)

        let gsmOstatok = (gsmOrigin_end + gsmOrigin - gsmRashod).toFixed(3)

        document.querySelector('#remainder_gsm_end').value = gsmOstatok ;

    }

    //перезапуск функции
    nIntervId4 = setInterval(remainder_gsm_end, 1000);