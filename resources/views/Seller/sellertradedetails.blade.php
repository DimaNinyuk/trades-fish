@extends('layouts.app')

@section('content')
<div class="ftco-blocks-cover-1">
    <div class="ftco-cover-1 innerpage overlay" style="background-image: url('/images/hero_1.jpg')">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="site-section">
                    <div class="container">
                        <div class="row" style="background-color: black">
                            <div class="col-lg-6 mb-5 mb-lg-0 order-lg-2">
                                <img src="{{$trade->images->first()->img}}" alt="Image" class="img-fluid">
                            </div>
                            <div class="col-lg-4 mr-auto">
                                <h2 style="color: white">{{$trade->name}}</h2>
                                <p>{{$trade->description}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="site-section" style="background-color: white;">
    <div class="container">
        <div class="row">
            <div class="col-md-8 blog-content">
                <div class="pt-5">
                    <h3 class="mb-5">{{$trade->rates()->count()}} Ставок</h3>
                    <ul class="comment-list">
                        @foreach($trade->rates()->get() as $rate)
                        <li class="comment">
                            
                            <div class="comment-body">
                                <h3>{{$rate->client->user->name}}</h3>
                                <h3>{{$rate->price}} руб.</h3>
                                <div class="meta">{{$rate->date}}</div>
                                <p>Личные данные: телефон {{$rate->client->user->phone}}, почта {{$rate->client->user->email}}, адрес {{$rate->client->address}}</p>
                            </div>
                        </li>
                        @endforeach
                    </ul>
                    <!-- END comment-list -->
                </div>

            </div>
        </div>
    </div>
</div>


@endsection