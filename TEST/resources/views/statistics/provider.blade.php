@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Статистика выполненных заказов (последние 7 дней)</h1>

    <table class="table">
        <thead>
            <tr>
                <th>Дата</th>
                <th>Заработано</th>
                <th>Отработано часов</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($statistics as $date => $data)
                <tr>
                    <td>{{ $date }}</td>
                    <td>{{ number_format($data['earnings'], 2) }}</td>
                    <td>{{ number_format($data['total_time'], 2) }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
