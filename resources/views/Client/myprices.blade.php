@extends('layouts.appclient')

@section('content')
<div class="ftco-blocks-cover-1">
    <div class="ftco-cover-1 overlay" style="background-image: url('/images/hero_1.jpg')">
        <div class="container">
        </div>
    </div>
</div>
</div>

<div class="site-section bg-light">
    <div class="container">
        <div class="row">
            <div class="row align-items-center">
                <div class="col-md-12 mb-6 mb-lg-2">
                    <table class="table table-striped ">
                        <tbody>
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Изображение</th>
                                    <th scope="col">Заголовок</th>
                                    <th scope="col">Количество ставок</th>
                                    <th scope="col">Текущая цена</th>
                                    <th scope="col">Моя цена</th>
                                    <th scope="col">Продавец</th>
                                    <th scope="col">Статус</th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>

                            @foreach($ratesclient as $rate)
                            <tr scope="row">
                                <td>{{$rate->id}}</td>
                                <td><img src="{{$rate->trade->images()->first()->img}}" height="100px" width="200px" class="img-fluid"></td>
                                <td>{{$rate->trade->name}}</td>
                                <td>{{$rate->trade->rates()->count()}}</td>
                                @if(!empty($rate->trade->rates()->select('price')->max('price')))
                                <td>{{$rate->trade->rates()->select('price')->max('price')}} руб.</td>
                                @else
                                <td>{{$rate->trade->start_price}} руб.</td>
                                @endif
                                <td>{{$rate->price}}</td>
                                <td>{{$rate->trade->seller->user->name}}</td>
                                <td>{{$rate->trade->status->name}}</td>
                                <td>

                                    <form method="post" action="{{ url('/client-delete-key') }}" enctype="multipart/form-data" class="row justify-content-end">
                                        @csrf
                                        <input type="hidden" value="{{$rate->id}}" name="rate_id">
                                        <input type="submit" name="change" value="Отменить">
                                    </form>
                                </td>
                            </tr>
                            <tr scope="row">
                                <td colspan="9">

                                    <form method="post" action="{{ url('/client-update-key') }}" enctype="multipart/form-data">
                                        @csrf
                                        <label>
                                            Предложить новую цену
                                        </label>
                                        <input type="text" name="price">
                                        <input type="hidden" value="{{$rate->id}}" name="rate_id">
                                        <input type="submit" name="change" value="Изменить ставку">
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


@endsection