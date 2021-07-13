@extends('layouts.app')

@section('content')
<div class="ftco-blocks-cover-1">
      <div class="ftco-cover-1 overlay" style="background-image: url('images/hero_1.jpg')">
        <div class="container">
          <div class="row align-items-center justify-content-md-center">
            <div class="col-lg-6">
              <div class="feature-car-rent-box-1">  
                <form method="post" action="{{ url('/seller-edit') }}" enctype="multipart/form-data">
                @csrf
                  <span>Имя</span>
                  <div class="d-flex align-items-center bg-light p-3">
                   <input type="text" name="email" value="{{$user->email}}">
                 </div>
                   <span>Номер телефона</span>
                  <div class="d-flex align-items-center bg-light p-3">
                   <input type="text" name="phone" value="{{$user->phone}}">
                 </div>
                   <span>Документы</span>
                  <div class="d-flex align-items-center bg-light p-3">
                   <input type="text" name="documents" value="{{$user->seller->documents}}">
                 </div>
                <div class="d-flex align-items-center p-3">
                  <input type="submit" name="login" value="Изменить" class="ml-auto btn btn-primary">
                </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

@endsection