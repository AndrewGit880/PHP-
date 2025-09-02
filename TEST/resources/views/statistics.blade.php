@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    <h3>Статистика выполненных заказов</h3>
                    <p>За последние 7 дней ({{ now()->subDays(6)->format('d.m.Y') }} - {{ now()->format('d.m.Y') }})</p>
                </div>

                <div class="card-body">
                    @if($statistics->sum('total_earnings') > 0)
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover">
                                <thead class="thead-dark">
                                    <tr>
                                        <th>Дата</th>
                                        <th>Заработано (₽)</th>
                                        <th>Отработано часов</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($statistics as $stat)
                                        <tr>
                                            <td>{{ $stat['formatted_date'] }}</td>
                                            <td class="text-success font-weight-bold">
                                                {{ number_format($stat['total_earnings'], 2, '.', ' ') }} ₽
                                            </td>
                                            <td>{{ number_format($stat['total_hours'], 2, '.', ' ') }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                                <tfoot class="font-weight-bold">
                                    <tr>
                                        <td>Итого за 7 дней:</td>
                                        <td class="text-success">
                                            {{ number_format($statistics->sum('total_earnings'), 2, '.', ' ') }} ₽
                                        </td>
                                        <td>{{ number_format($statistics->sum('total_hours'), 2, '.', ' ') }}</td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    @else
                        <div class="alert alert-info">
                            <h5>Нет данных для отображения</h5>
                            <p>У вас нет подтвержденных заказов за последние 7 дней.</p>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
