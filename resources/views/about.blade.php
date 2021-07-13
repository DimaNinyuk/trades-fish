@extends('layouts.auth')

@section('content')

<div class="ftco-blocks-cover-1">
      <div class="ftco-cover-1 overlay innerpage" style="background-image: url('images/hero_1.jpg')">
        <div class="container">
          <div class="row align-items-center justify-content-center">
            <div class="col-lg-6 text-center">
              <h1>О нас</h1>
              <p>Сайт-аукцион по биржевой торговле рыбопродукцией в камчатском крае</p>
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 mb-5 mb-lg-0">
            <img src="images/hero_10.jpg" alt="Image" class="img-fluid">
          </div>
          <div class="col-lg-4 ml-auto">
            <h2>Кто мы?</h2>
            <p>Система биржевой и аукционной торговли заключатся в том, что любой заинтересованный покупатель из любого региона страны может иметь доступ к торговле. То есть компании из Тюмени, Саратова, Читы или Севастополя могут участвовать в аукционах и покупать морепродукты напрямую у производителя, минуя цепочки многочисленных посредников. Как показывает практика аукционов, из-за сокращения количества посредников фактическая цены на рыбную продукцию, реализуемую на электронном сервисе, оказались на 10-30% ниже рыночных, а цены продажи на аукционах стали выступать в качестве индекса цен на рынке. При сокращении числа посредников, соответственно, сокращается возможность для неоправданных наценок и коррупционных моментов. Кроме того, торговли на электронном сервисе в режиме реального времени позволяет расширить географию покупателей и улучшить доступ к рыбной продукции не только для крупных покупателей, но и для малого бизнеса и индивидуальных предпринимателей</p>
          </div>
        </div>
      </div>
    </div>

    <div class="container site-section mb-5">
      <div class="row justify-content-center text-center">
        <div class="col-7 text-center mb-5">
          <h2>Как это работает?</h2>
          <p>Схема работы аукциона по биржевой торговле рыбопродукцией в камчатском крае</p>
        </div>
      </div>
      <div class="how-it-works d-flex">
        <div class="step">
          <span class="number"><span>01</span></span>
          <span class="caption">Продавец публикует предложение</span>
        </div>
        <div class="step">
          <span class="number"><span>02</span></span>
          <span class="caption">Покупатель просматривает предложения</span>
        </div>
        <div class="step">
          <span class="number"><span>03</span></span>
          <span class="caption">Покупатель делает ставки</span>
        </div>
        <div class="step">
          <span class="number"><span>04</span></span>
          <span class="caption">Продавец выбирает покупателя</span>
        </div>
        <div class="step">
          <span class="number"><span>05</span></span>
          <span class="caption">Сделака удалась!</span>
        </div>

      </div>
    </div>


@endsection