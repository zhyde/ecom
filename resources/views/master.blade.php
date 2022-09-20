<!doctype html>
<html lang="en">
  <head>
  <title>ECOM</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  <body>
    
     {{View::make('header')}}
    <br><br>
      @yield('content')
      <br><br>
    {{View::make('footer')}}
    <script src="https://code.jquery.com/jquery-3.6.1.slim.min.js" integrity="sha256-w8CvhFs7iHNVUtnSP0YKEg00p9Ih13rlL9zGqvLdePA=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  
  </body>
<style>
  .custom-login{
    height: 500px;
    padding-top: 100px;
  }
  .custom-product{
    height: 600px;
    background-color: beige;
  }
  
  img.slider-img{
      height: 600px !important
  }
  .slider-text{
      background-color: gray;
  }
  .trending-image{
    height: 100px;
  }
  .trending-item{
    float: left;
    width: 20%;
  }
  .trending-wrapper{
     margin: 30px;
  }
  .detail-img{
    height: 200px;  
  }

</style>

</html>