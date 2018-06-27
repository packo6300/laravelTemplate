@extends('layouts.basic')
@section('title','Login')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-6 col-md-4 col-md-offset-4 mx-auto">
            <div class="account-wall">
                <img class="profile-img" src="../resources/assets/img/avatar.png" alt="">
                <form class="form-signin" action="" method="POST">
                <input type="text" class="form-control" placeholder="Email" required autofocus>
                <input type="password" class="form-control" placeholder="Password" required>
                <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
                </form>
            </div>
        </div>
    </div>
</div>
@stop
