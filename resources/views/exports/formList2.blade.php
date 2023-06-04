@extends('dashbord_avtolist')

@section('title', 'Создание УЗ водителя')

@section('content')
<button onclick="tableToExcel()">Table to Excel</button>
<table class="table" >
    <tr>
        <thead>
            <tr>
                <th>
                    First name
                </th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>
                    1232
                </td>
            </tr>
        </tbody>
    </tr>
</table >

<script>
    function tableToExcel(){
        var table2excel = new Table2Excel();
        table2excel.export(document.querySelectorAll("table.table"));
    }

</script>
<script>
    document.querySelector('#nav-link_transport').style.color= '#0093ff';
    document.querySelector('#nav-link_vodila_create').style.color= 'red';
</script>
@endsection




