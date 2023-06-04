<table>
    <thead>
    <tr>
        <th>title</th>
        <th>speedometer_end</th>
        <th>gsm_end</th>
        <th>car_name</th>

        <th>state_number</th>
        <th>consumption_rate</th>
        <th>mileage</th>
        <th>received_gsm_initially</th>

        <th>gsm_consumption</th>
        <th>economy</th>
        <th>remainder_gsm_end</th>
        <th>added_at</th>

        <th>drivers_name</th>
        <th>drivers_surname</th>
        <th>drivers_patronymic</th>
        <th>season</th>
    </tr>
    </thead>
    <tbody>
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
            <td>{{ $value['economy'] }}</td>
            <td>{{ $value['remainder_gsm_end'] }}</td>
            <td>{{ $value['added_at'] }}</td>

            <td>{{ $value['drivers_name'] }}</td>
            <td>{{ $value['drivers_surname'] }}</td>
            <td>{{ $value['drivers_patronymic'] }}</td>
            <td>{{ $value['season'] }}</td>

        </tr>
    @endforeach
    </tbody>
</table>


