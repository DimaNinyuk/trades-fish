@extends('layouts.app')

@section('content')
<div class="ftco-blocks-cover-1">
    <div class="ftco-cover-1 overlay" style="background-image: url('images/hero_1.jpg')">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <div class="feature-car-rent-box-1">
                        <h3>Статистика сделок</h3>
                        <ul class="list-unstyled">
                            <li>
                                <span>Зарегистрирован:</span>
                                <span class="spec">{{$user->created_at}}</span>
                            </li>
                            <li>
                                <span>Текущих предложений:</span>
                                <span class="spec">{{$tradenew}}</span>
                            </li>
                            <li>
                                <span>Заключенных сделок:</span>
                                <span class="spec">{{$tradewin}}</span>
                            </li>
                            <li>
                                <span>Закрытых сделок</span>
                                <span class="spec">{{$tradeclose}}</span>
                            </li>
                            <li>
                                <span>Всего</span>
                                <span class="spec">{{$tradeall}}</span>
                            </li>
                            <li>
                                <span>Всего предложенных ставок</span>
                                <span class="spec">{{$countrates}}</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection