@extends('layouts.app')

@section('content')
<div class="ftco-blocks-cover-1">
    <div class="ftco-cover-1 overlay innerpage" style="background-image: url('/images/hero_1.jpg')">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-6 text-center">
                    <h1>Изменение статуса</h1>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="site-section bg-light" id="contact-section">
    <div class="container">
        <div class="row justify-content-center text-center">
            <div class="col-7 text-center mb-5">
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 mb-5">
                <form method="post" action="{{ url('/seller-edit-trade') }}" enctype="multipart/form-data">
                @csrf
                    <div class="form-group row">
                        <div class="col-md-6 mb-4 mb-lg-0">
                            <label>Стоимость </label>
                            @if(!empty($trade->rates()->max('id')->price))
                            <p class="form-control" name="start-price">{{$trade->rates()->max('id')->price}} руб.</p>
                            @else
                            <p class="form-control" name="start-price">{{$trade->start_price}} руб.</p>
                            @endif
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-md-12">
                            <label>Название сделки </label>
                            <p class="form-control" name="name">{{$trade->name}}</p>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-12">
                            <label>Статус сделки</label>
                            <select name="status_id" class="col-md-12">
                                @foreach($statuses as $status)
                                @if($trade->status->id==$status->id)
                                <option value="{{$status->id}}" selected>{{$status->name}}</option>
                                @else
                                <option value="{{$status->id}}">{{$status->name}}</option>
                                @endif
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <input type="hidden" value="{{$trade->id}}" name="trade_id">
                    <div class="form-group row">
                        <div class="col-md-6 mr-auto">
                            <input type="submit" class="btn btn-block btn-primary text-white py-3 px-5" value="Изменить статус">
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-4 ml-auto">
                <div class="bg-white p-3 p-md-5">
                    <h3 class="text-black mb-4">Ваша контактная информация</h3>
                    <ul class="list-unstyled footer-link">
                        <li class="d-block mb-3"><span class="d-block text-black">Телефон:</span><span>{{$user->phone}}</span></li>
                        <li class="d-block mb-3"><span class="d-block text-black">Email:</span><span>{{$user->email}}</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection