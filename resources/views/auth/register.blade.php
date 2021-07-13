@extends('layouts.auth')

@section('content')

<div class="ftco-blocks-cover-1">
    <div class="ftco-cover-1 overlay" style="background-image: url('images/hero_1.jpg')">
        <div class="container">
            <div class="row align-items-center justify-content-md-center">
                <div class="col-lg-6">
                    <div class="feature-car-rent-box-1">
                        <form method="POST" action="{{ url('/register-client') }}">
                        @csrf
                            <span>Логин</span>
                            <div class="d-flex align-items-center bg-light p-3">
                                <input type="text" name="email">
                            </div>
                            <span>Номер телефона</span>
                            <div class="d-flex align-items-center bg-light p-3">
                                <input type="text" name="phone">
                            </div>
                            <span>Адрес</span>
                            <div class="d-flex align-items-center bg-light p-3">
                                <input type="text" name="address">
                            </div>
                            <span>Пароль</span>
                            <div class="d-flex align-items-center bg-light p-3">
                                <input type="text" name="password">
                            </div>
                            <span>Повторить пароль</span>
                            <div class="d-flex align-items-center bg-light p-3">
                                <input type="text" name="password">
                            </div>

                            <div class="d-flex align-items-center p-3">
                                <input type="submit" name="create" value="Создать" class="ml-auto btn btn-primary">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection