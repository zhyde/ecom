@extends('master')
@section('content')
<div class='container custom-login'>
    <div class='row justify-content-center'>
        <div class="form-group col-md-4 col-md-offset-5 align-center">    
            <form  action="login" method="post">
                @csrf
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" id="exampleInputPassword1">
            </div>
            <button type="submit" class="btn btn-primary">Login</button>
            </form>
        </div>
    </div> 
</div> 
@endsection