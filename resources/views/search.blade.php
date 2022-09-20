@extends('master')
@section('content')
<div class='container'>
    @foreach ($product as $item)
     
     <div class='row'>
        <div class='col-sm-4'>
        <img class="detail-img" src="{{$item['gallery']}}">
        </div>
        <div clss='col-sm-4'>
            <a href = "/"> Go Back</a>
            <h2>{{$item['name']}}</h2>
            <h3>Price : {{$item['price']}} Rs</h3>
            <p>Details : {{$item['description']}}</p>
            <p>Category : {{$item['category']}}</p>
            <br>
            <form action="/add_to_cart" method="POST">
                @csrf
                <input type="hidden" name="product_id" value="{{$item['id']}}">
                <button class="btn btn-primary"> Add to Cart</button>
            </form>
            
            <br><br>
            <button class="btn btn-success"> Buy Now </button>
            <br><br>            
        </div>
        @endforeach
    </div>
</div> 
@endsection