@extends('layouts.app')
@section('title') Вход @stop

@section('content')
    <div class="container" style="margin-top: 100px; margin-bottom: 10px;">
        <div class="row">
            <div class="col-md-12">
                <form action="{{ route('login.post') }}" method="post">
                    <div class="form-group">
                        <label for="email">E-Mail</label>
                        <input type="email" class="form-control" id="email" name="email">
                    </div>
                    <div class="form-group">
                        <label for="password">Пароль</label>
                        <input type="password" class="form-control" id="password" name="password">
                    </div>
                    {{ csrf_field() }}
                    <button type="submit" class="btn btn-primary">Ввойти</button>
                </form>
            </div>
        </div>
    </div>
@endsection