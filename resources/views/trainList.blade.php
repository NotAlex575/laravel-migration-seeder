@extends("layouts/master")

@section("title")
    Lista treni disponibili
@endsection

@section("main")
    <h1>Lista treni</h1>

<table class="table table-striped table-bordered table-hover mt-4">
    <thead class="table-primary">
        <tr>
            <th>Azienda</th>
            <th>Stazione di Partenza</th>
            <th>Stazione di Arrivo</th>
            <th>Orario di Partenza</th>
            <th>Orario di Arrivo</th>
            <th>Codice Treno</th>
            <th>Totale Carrozze</th>
            <th>In Orario</th>
            <th>Cancellato</th>
        </tr>
    </thead>

    <tbody>
        @foreach ($Trains as $Train)
            <tr>
                <td>{{ $Train["azienda"] }}</td>
                <td>{{ $Train["stazione_partenza"] }}</td>
                <td>{{ $Train["stazione_arrivo"] }}</td>
                <td>{{ $Train["orario_partenza"] }}</td>
                <td>{{ $Train["orario_arrivo"] }}</td>
                <td>{{ $Train["codice_treno"] }}</td>
                <td>{{ $Train["totale_carrozze"] }}</td>
                <td>{{ $Train["in_orario"] }}</td>
                <td>{{ $Train["cancellato"] }}</td>
            </tr>
        @endforeach
    </tbody>

</table>
@endsection