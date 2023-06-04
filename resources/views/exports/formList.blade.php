@foreach($gsm  as $value)
<table >
    <tr>
        <td style="text-align: center" colspan="8"></td>
    </tr>
</table >
<table >
    <tbody style="font-family:'Times New Roman'">
        <tr>
            <th style="text-align: center" colspan="8">Путевой лист автомобиля на _______</th>
        </tr>
        <tr>
            <td style="text-align: center" colspan="8"></td>
        </tr>
        <tr>
            <td style="text-align: center" colspan="2">________________________</td>
            <td style="text-align: center" colspan="4"></td>
            <td style="text-align: center" colspan="2">№______________</td>
        </tr>
        <tr>
            <td style="text-align: center" colspan="8"></td>
        </tr>
        <tr>
            <td style="text-align: center" colspan="8"></td>
        </tr>
        <tr>
            <td style="text-align: center" colspan="2">г.Черногорск</td>
            <td style="text-align: center" colspan="4"></td>
            <td style="text-align: center" colspan="2">__________2023г.</td>
        </tr>
        <tr>
            <th style="text-align: center" colspan="8"></th>
        </tr>

        <tr>
            <td style="text-align: center" colspan="8">Организация: филиал ООО "СУЭК-Хакасия"-Промтранс, 655162 Республика </td>
        </tr>
        <tr>
            <td style="text-align: center" colspan="8">Хакасия г.Черногорск, ул. Красных партизан 2А тел 8(39031)35-5-35;6-37-17,</td>
        </tr>
        <tr>
            <td style="text-align: center" colspan="8"></td>
        </tr>
        <tr>
            <td style="text-align: center" colspan="3">Марка автомобиля:</td>
            <td style="text-align: center; color: red"  colspan="3">{{ $value['car_name'] }}</td>
            <td style="text-align: center" colspan="2"></td>
        </tr>
        <tr>
            <td style="text-align: center" colspan="8"></td>
        </tr>
        <tr>
            <td style="text-align: center" colspan="4">Государственный номерной знак:</td>
            <td style="text-align: center; color: red" colspan="3">{{ $value['state_number'] }}</td>
            <td style="text-align: center" colspan="1"></td>
        </tr>
        <tr>
            <td style="text-align: center" colspan="8"></td>
        </tr>
        <tr>
            <td style="text-align: center" colspan="3">Гаражный номер:</td>
            <td style="text-align: center" colspan="3">______________</td>
            <td style="text-align: center" colspan="2"></td>
        </tr>
        <tr>
            <td style="text-align: center" colspan="8"></td>
        </tr>
        <tr>
            <td style="text-align: center" colspan="4">Специальное оборудование:</td>
            <td style="text-align: center" colspan="3">______________</td>
            <td style="text-align: center" colspan="1"></td>
        </tr>
        <tr>
            <td style="text-align: center" colspan="8"></td>
        </tr>
        <tr>
            <td style="text-align: center" colspan="2">Водитель:</td>
            <td style="text-align: center ; color: red" colspan="4">{{ $value['drivers_fio'] }}</td>
            <td style="text-align: center" colspan="2"></td>
        </tr>
        <tr>
            <td style="text-align: center" colspan="8"></td>
        </tr>
        <tr>
            <td style="text-align: center" colspan="4">Табельный номер:</td>
            <td style="text-align: center" colspan="3">______________</td>
            <td style="text-align: center" colspan="1"></td>
        </tr>
        <tr>
            <td style="text-align: center" colspan="8"></td>
        </tr>
        <tr>
            <td style="text-align: center" colspan="4">Удостоверение</td>
            <td style="text-align: center" colspan="3">______________</td>
            <td style="text-align: center" colspan="1"></td>
        </tr>
        <tr>
            <td style="text-align: center" colspan="8"></td>
        </tr>
        <tr>
            <th style="text-align: center" colspan="3">Предрейсовый осмотр</th>
            <td style="text-align: center" colspan="1">Отметка</td>
            <td style="text-align: center" colspan="1">_______</td>
            <td style="text-align: center" colspan="1">Время</td>
            <td style="text-align: center" colspan="1">_______</td>
            <td style="text-align: center" colspan="1"></td>
        </tr>
        <tr>
            <td style="text-align: center" colspan="1">Должность</td>
            <td style="text-align: center" colspan="1">_________</td>
            <td style="text-align: center" colspan="1">Подпись</td>
            <td style="text-align: center" colspan="2">Расшивровка подписи</td>
            <td style="text-align: center" colspan="3">___________________</td>
        </tr>
        <tr>
            <td style="text-align: center" colspan="8"></td>
        </tr>
        <tr>
            <th style="text-align: center" colspan="3">Послерейсовый осмотр</th>
            <td style="text-align: center" colspan="1">Отметка</td>
            <td style="text-align: center" colspan="1">_______</td>
            <td style="text-align: center" colspan="1">Время</td>
            <td style="text-align: center" colspan="1">_______</td>
            <td style="text-align: center" colspan="1"></td>
        </tr>
        <tr>
            <td style="text-align: center" colspan="1">Должность</td>
            <td style="text-align: center" colspan="1">_________</td>
            <td style="text-align: center" colspan="1">Подпись</td>
            <td style="text-align: center" colspan="2">Расшивровка подписи</td>
            <td style="text-align: center" colspan="3">___________________</td>
        </tr>
    </tbody>
</table>
<table >
    <tbody style="font-family:'Times New Roman'">
    <tr>
        <td style="text-align: center" colspan="8">Задание водителю</td>
    </tr>
    <tr>
        <td style="text-align: center" colspan="8">РХ,Черногорск-Абакан-Белый яр</td>
    </tr>
    <tr>
        <td style="text-align: center" colspan="2">Адрес стоянки:</td>
        <td style="text-align: center" colspan="6">г.Черногорск, ул.Автомобильная, 5А</td>
    </tr>
    <tr>
        <td style="text-align: center" colspan="8"></td>
    </tr>
    <tr>
        <td style="text-align: center" colspan="8">Маршруты движения</td>
    </tr>
    <tr>
        <td style="text-align: center" colspan="8">__________________________________________________________________________________________</td>
    </tr>
    <tr>
        <td style="text-align: center" colspan="8">__________________________________________________________________________________________</td>
    </tr>
    <tr>
        <td style="text-align: center" colspan="3">Регион движения</td>
        <td style="text-align: center" colspan="5">_______________________</td>
    </tr>
    <tr>
        <td style="text-align: center" colspan="8">Общее время работы</td>
    </tr>
    <tr>
        <td style="text-align: center" colspan="2">Водитель</td>
        <td style="text-align: center" colspan="5">_______________________</td>
        <td style="text-align: center" colspan="1">часов</td>
    </tr>
    <tr>
        <td style="text-align: center" colspan="2">Водитель</td>
        <td style="text-align: center" colspan="5">_______________________</td>
        <td style="text-align: center" colspan="1">часов</td>
    </tr>
    <tr>
        <td style="text-align: center" colspan="2">Водитель</td>
        <td style="text-align: center" colspan="5">_______________________</td>
        <td style="text-align: center" colspan="1">часов</td>
    </tr>
    <tr>
        <td style="text-align: center" colspan="2">Прочие отметки</td>
        <td style="text-align: center" colspan="6">_______________________</td>
    </tr>
    <tr>
        <td style="text-align: center" colspan="8">__________________________________________________________________________________________</td>
    </tr>
    <tr>
        <td style="text-align: center" colspan="8">Автомобиль сдал водитель</td>
    </tr>
    <tr>
        <td style="text-align: center" colspan="2">Подпись</td>
        <td style="text-align: center" colspan="2">________</td>
        <td style="text-align: center ; color: red" colspan="4">{{ $value['drivers_fio'] }}</td>
    </tr>
    </tbody>
</table>
<table >
    <tbody style="font-family:'Times New Roman'">
    <tr>
        <td style="text-align: center" colspan="8">Автомобиль технически исправен</td>
    </tr>
    <tr>
        <td style="text-align: center" colspan="4">Показание спидометра в, км</td>
        <td style="text-align: center ; color: red" colspan="4">{{ $value['title'] }}</td>
    </tr>
    <tr>
        <td style="text-align: center" colspan="3">Автомобиль передал механик</td>
        <td style="text-align: center" colspan="1">Подпись</td>
        <td style="text-align: center" colspan="1">________</td>
        <td style="text-align: center" colspan="1">Расшифровка</td>
        <td style="text-align: center" colspan="2">________</td>
    </tr>
    <tr>
        <td style="text-align: center" colspan="8"></td>
    </tr>
    <tr>
        <td style="text-align: center" colspan="8">Автомобиль технически исправеном сосотоянии принял</td>
    </tr>
    <tr>
        <td style="text-align: center" colspan="1">Водитель</td>
        <td style="text-align: center" colspan="1">Подпись</td>
        <td style="text-align: center" colspan="1">________</td>
        <td style="text-align: center" colspan="1">Расшифровка</td>
        <td style="text-align: center ; color: red" colspan="4">{{ $value['drivers_fio'] }}</td>
    </tr>
    <tr>
        <td style="text-align: center" colspan="2">Горючее</td>
        <td style="text-align: center" colspan="1">Марка:</td>
        <td style="text-align: center" colspan="1">АИ-92</td>
        <td style="text-align: center" colspan="1">Код</td>
        <td style="text-align: center" colspan="3">_________</td>
    </tr>
    <tr>
        <td style="text-align: center" colspan="8">Движение горючего</td>
    </tr>
    <tr>
        <td style="text-align: center" colspan="2">Выдано:</td>
        <td style="text-align: center ; color: red" colspan="2">{{ $value['gsm_end'] }}</td>
        <td style="text-align: center" colspan="2">Приобретенно:</td>
        <td style="text-align: center ; color: red" colspan="2">{{ $value['received_gsm_initially'] }}</td>
    </tr>
    <tr>
        <td style="text-align: center" colspan="2">Остаток:</td>
        <td style="text-align: center ; color: red" colspan="2">{{ $value['remainder_gsm_end'] }}</td>
        <td style="text-align: center" colspan="2">Норма расхода:</td>
        <td style="text-align: center ; color: red" colspan="2">{{ $value['consumption_rate'] }}</td>
    </tr>
    <tr>
        <td style="text-align: center" colspan="2">Фактический расход:</td>
        <td style="text-align: center ; color: red" colspan="2">{{ $value['gsm_consumption'] }}</td>
        <td style="text-align: center" colspan="2">Экономия:</td>
        <td style="text-align: center ; color: red" colspan="2">{{ $value['economy'] }}</td>
    </tr>
    <tr>
        <td style="text-align: center" colspan="6">Показания спидометра при возвращении в гараж, км:</td>
        <td style="text-align: center ; color: red" colspan="2">{{ $value['speedometer_end'] }}</td>
    </tr>
    <tr>
        <td style="text-align: center" colspan="2">Механик:</td>
        <td style="text-align: center" colspan="1">___________</td>
        <td style="text-align: center" colspan="3">Расшифровка подписи:</td>
        <td style="text-align: center" colspan="2">____________________</td>
    </tr>
    <tr>
        <td style="text-align: center" colspan="6">Остаток при возврате:</td>
        <td style="text-align: center ; color: red" colspan="2">{{ $value['remainder_gsm_end'] }}</td>
    </tr>
    <tr>
        <td style="text-align: center" colspan="8">Движение ГСМ</td>
    </tr>
    <tr>
        <td style="text-align: center" colspan="8"> Масло:</td>
    </tr>
    <tr>
        <td style="text-align: center" colspan="2">Выдано:</td>
        <td style="text-align: center" colspan="2">______________</td>
        <td style="text-align: center" colspan="2">Приобретенно:</td>
        <td style="text-align: center" colspan="2">______________</td>
    </tr>
    <tr>
        <td style="text-align: center" colspan="2">Расход по норме:</td>
        <td style="text-align: center" colspan="2">______________</td>
        <td style="text-align: center" colspan="2">Фактический :</td>
        <td style="text-align: center" colspan="2">______________</td>
    </tr>
    <tr>
        <td style="text-align: center" colspan="2">Экономия:</td>
        <td style="text-align: center" colspan="2">______________</td>
        <td style="text-align: center" colspan="2">Перерасход :</td>
        <td style="text-align: center" colspan="2">______________</td>
    </tr>
    <tr>
        <td style="text-align: center" colspan="8"> Антифриз:</td>
    </tr>
    <tr>
        <td style="text-align: center" colspan="2">Выдано:</td>
        <td style="text-align: center" colspan="2">______________</td>
        <td style="text-align: center" colspan="2">Приобретенно:</td>
        <td style="text-align: center" colspan="2">______________</td>
    </tr>
    <tr>
        <td style="text-align: center" colspan="2">Расход по норме:</td>
        <td style="text-align: center" colspan="2">______________</td>
        <td style="text-align: center" colspan="2">Фактический :</td>
        <td style="text-align: center" colspan="2">______________</td>
    </tr>
    <tr>
        <td style="text-align: center" colspan="2">Экономия:</td>
        <td style="text-align: center" colspan="2">______________</td>
        <td style="text-align: center" colspan="2">Перерасход :</td>
        <td style="text-align: center" colspan="2">______________</td>
    </tr>
    <tr>
        <td style="text-align: center" colspan="8"> Тосол:</td>
    </tr>
    <tr>
        <td style="text-align: center" colspan="2">Выдано:</td>
        <td style="text-align: center" colspan="2">______________</td>
        <td style="text-align: center" colspan="2">Приобретенно:</td>
        <td style="text-align: center" colspan="2">______________</td>
    </tr>
    <tr>
        <td style="text-align: center" colspan="2">Расход по норме:</td>
        <td style="text-align: center" colspan="2">______________</td>
        <td style="text-align: center" colspan="2">Фактический :</td>
        <td style="text-align: center" colspan="2">______________</td>
    </tr>
    <tr>
        <td style="text-align: center" colspan="2">Экономия:</td>
        <td style="text-align: center" colspan="2">______________</td>
        <td style="text-align: center" colspan="2">Перерасход :</td>
        <td style="text-align: center" colspan="2">______________</td>
    </tr>
    <tr>
        <td style="text-align: center" colspan="8"> Сведения о ремонтах и техобслуживании:</td>
    </tr>
    <tr>
        <td style="text-align: center" colspan="8">__________________________________________________________________________________________</td>
    </tr>
    <tr>
        <td style="text-align: center" colspan="8">__________________________________________________________________________________________</td>
    </tr>
    <tr>
        <td style="text-align: center" colspan="8">__________________________________________________________________________________________</td>
    </tr>
    <tr>
        <td style="text-align: center" colspan="8"> Результат работы автомобиля: Расчет заработной платы:</td>
    </tr>
    <tr>
        <td style="text-align: center" colspan="2"> Всего отработано ч:</td>
        <td style="text-align: center" colspan="2"> _________________</td>
        <td style="text-align: center" colspan="2"> за километраж, руб</td>
        <td style="text-align: center" colspan="2"> _________________</td>
    </tr>
    <tr>
        <td style="text-align: center" colspan="2"> пройдено, км:</td>
        <td style="text-align: center; color: red" colspan="2"> {{ $value['mileage'] }}</td>
        <td style="text-align: center" colspan="2"> за часы, руб</td>
        <td style="text-align: center" colspan="2"> _________________</td>
    </tr>
    <tr>
        <td style="text-align: center" colspan="2"> доплаты</td>
        <td style="text-align: center" colspan="2"> _________________</td>
        <td style="text-align: center" colspan="2"> за _________, руб</td>
        <td style="text-align: center" colspan="2"> _________________</td>
    </tr>
    <tr>
        <td style="text-align: center" colspan="4"> Итого рублей</td>
        <td style="text-align: center" colspan="4"> _________________</td>
    </tr>
    <tr>
        <td style="text-align: center" colspan="8"> Расчет произвел</td>
    </tr>
    <tr>
        <td style="text-align: center" colspan="2"> Должность</td>
        <td style="text-align: center" colspan="2"> _________________</td>
        <td style="text-align: center" colspan="2"> Подпись</td>
        <td style="text-align: center" colspan="2"> _________________</td>
    </tr>
    </tbody>
</table>
@endforeach




