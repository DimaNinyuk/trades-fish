@extends('layouts.app')

@section('content')
<div>
    <div class="ftco-blocks-cover-1">
        <div class="ftco-cover-1 overlay" style="background-image: url('/images/hero_1.jpg')">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-12 mb-6 mb-lg-2" style="background-color: white; padding: 20px; margin-top:150px;">
                        <a href="/seller-main/0" class="btn btn-light">Все</a>
                        <a href="/seller-main/1" class="btn btn-light">Совершенные</a>
                        <a href="/seller-main/2" class="btn btn-light">Закрытые</a>
                        <a href="/seller-main/3" class="btn btn-light">Новые</a>
                        <a href="/seller-add-trade" class="btn btn-dark">Создать новое предложение</a>
                        <table class="table table-striped ">
                            <tbody>
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Изображение</th>
                                        <th scope="col">Заголовок</th>
                                        <th scope="col">Количество ставок</th>
                                        <th scope="col">Текущая цена</th>
                                        <th scope="col"></th>
                                    </tr>
                                </thead>
                                @foreach($trades as $trade)
                                <tr scope="row">
                                    <td>{{$trade->id}}</td>
                                    <td><img src="{{$trade->images()->first()->img}}" height="100px" width="200px"></td>
                                    <td><a href="/seller-trade-details/{{$trade->id}}">{{$trade->name}}</a></td>
                                    <td>{{$trade->rates()->count()}}</td>
                                    @if(!empty($trade->rates()->select('price')->max('price')))
                                    <td>{{$trade->rates()->select('price')->max('price')}} руб.</td>
                                    @else
                                    <td>{{$trade->start_price}} руб.</td>
                                    @endif
                                    <td>
                                        <a href="/seller-edit-trade/{{$trade->id}}" class="btn btn-ligh">Редактировать</a>
                                        <form action="/seller-main/0" method="POST">
                                            @csrf
                                            <input type="hidden" value="{{$trade->id}}" name="trade_id">
                                            <input type="submit" class="btn btn-ligh5" value="Удалить">
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection