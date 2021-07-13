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
      <div class="col-lg-3">
        <h3>Недавние предложения</h3>
        <p>
          <a href="#" class="btn btn-primary custom-prev">Предыдущий</a>
        </p>
        <p>
          <a href="#" class="btn btn-primary custom-next">Следущий</a>
        </p>
      </div>
      <div class="col-lg-9">

        <div class="nonloop-block-13 owl-carousel">
          @foreach($newthreetrades as $newthreetrade)
          <div class="item-1">
            <a href="#"><img src="{{$newthreetrade->images()->first()->img}}" alt="Image" class="img-fluid"></a>
            <div class="item-1-contents">
              <div class="text-center">
                <h3><a href="#">{{$newthreetrade->name}}</a></h3>
                @if(!empty($newthreetrade->rates()->select('price')->max('price')))
                <div class="rent-price"><span>{{$newthreetrade->rates()->select('price')->max('price')}} руб.</span></div>
                @else
                <div class="rent-price"><span>{{$newthreetrade->start_price}} руб.</span></div>
                @endif
              </div>
              <ul class="specs">
                <li>
                  <span>Продавец</span>
                  <span class="spec">{{$newthreetrade->seller->user->name}}</span>
                </li>
                <li>
                  <span>Статус</span>
                  <span class="spec">{{$newthreetrade->status->name}}</span>
                </li>
                <li>
                  <span>Вид продукции</span>
                  <span class="spec">{{$newthreetrade->type->name}}</span>
                </li>
                <li>
                  <span>Дата публикации</span>
                  <span class="spec">{{$newthreetrade->created_at}}</span>
                </li>
                <li>
                  <span>Ставок</span>
                  <span class="spec">{{$newthreetrade->rates()->count()}}</span>
                </li>
                <li>
                  <span>Начальная цена</span>
                  <span class="spec">{{$newthreetrade->start_price}}</span>
                </li>
              </ul>
              <div class="d-flex action">
                <form method="post" action="{{ url('/client-top-key') }}" enctype="multipart/form-data">
                  @csrf
                  <label>
                    Предложить цену
                  </label>
                  <input type="text" name="price">
                  <input type="hidden" value="{{$newthreetrade->id}}" name="trade_id">
                  <input type="submit" name="estimate" class="btn btn-primary" value="Оценить">
                </form>
              </div>
            </div>
          </div>
          @endforeach
        </div>

      </div>
    </div>
  </div>
</div>
<div class="site-section pt-0 pb-0 bg-light">
  <div class="container">
    <div class="row">
      @foreach($newtrades as $newtrade)
      <div class="col-12">

        <div class="item-1" style="margin: 30px">
          <a href="#"><img src="{{$newtrade->images()->first()->img}}" alt="Image" class="img-fluid"></a>
          <div class="item-1-contents">
            <div class="text-center">
              <h3><a href="#">{{$newtrade->name}}</a></h3>
              @if(!empty($newtrade->rates()->select('price')->max('price')))
              <div class="rent-price"><span>{{$newtrade->rates()->select('price')->max('price')}} руб.</span></div>
              @else
              <div class="rent-price"><span>{{$newtrade->start_price}} руб.</span></div>
              @endif

            </div>
            <ul class="specs">
              <li>
                <span>Продавец</span>
                <span class="spec">{{$newtrade->seller->user->name}}</span>
              </li>
              <li>
                <span>Статус</span>
                <span class="spec">{{$newtrade->status->name}}</span>
              </li>
              <li>
                <span>Вид продукции</span>
                <span class="spec">{{$newtrade->type->name}}</span>
              </li>
              <li>
                <span>Дата публикации</span>
                <span class="spec">{{$newtrade->created_at}}</span>
              </li>
              <li>
                <span>Ставок</span>
                <span class="spec">{{$newtrade->rates()->count()}}</span>
              </li>
              <li>
                <span>Начальная цена</span>
                <span class="spec">{{$newtrade->start_price}}</span>
              </li>
            </ul>
            <div class="d-flex action">
              <form method="post" action="{{ url('/client-top-key') }}" enctype="multipart/form-data">
                @csrf
                <label>
                  Предложить цену
                </label>
                <input type="text" name="price">
                <input type="hidden" value="{{$newtrade->id}}" name="trade_id">
                <input type="submit" name="estimate" class="btn btn-primary" value="Оценить">
              </form>
            </div>
          </div>
        </div>
      </div>
      @endforeach

    </div>
  </div>
</div>

@endsection