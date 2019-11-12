@extends('layouts.navbar')

@section('kontenku')
    
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<style>
    body {
        color: #14171a;
        font-size: 14px;
        line-height: 20px;
        font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;
    }

    /* buat whats new */

    .atas{
        text-align: center;
        font-size: 24px;
        color: white;
        font-family:'Segoe UI', Tahoma, Verdana, sans-serif;
    }

    /* buat nama dan isi */

    .posttweetcontainer{
        background: #336b87;padding:20px 50px;position:relative;
    }
    
    .posttweettacontainer{
        border-radius: 8px; border: 1px solid #336b87; border-image: none; line-height: 20px; box-shadow: 0px 0px 0px 1px #336b87; background-color: #90AFC5;
        height: 180px;
    }
    
    .posttweetcountcont{
        overflow: hidden; margin-top: 10px;
    }
    
    .posttweetcount{
        margin-right: 10px; display: block; float: right;
    }
    
    /* buat nge twit */

    .posttweetbutcont{
        overflow: hidden; margin-top: 15px;
    }
    
    .posttweetbut{
        padding: 6px 16px; border-radius: 100px; border: 1px solid #2A3132; border-image: none; text-align: center; color: rgb(255, 255, 255); line-height: 20px; font-size: 14px; font-weight: bold; white-space: nowrap; position: relative; cursor: pointer; float: right; box-shadow: none; background-color: #2A3132;
    }
</style>
</head> 
<form method="POST" action="{{ url('/addpost') }}"  enctype="multipart/form-data" id="addpost">
    {{ csrf_field() }}
    <div class="posttweetcontainer">
        <div class="atas">
            <p>Want to write somethings?</p>
        </div>
        <i class="glyphicon glyphicon-user" style="font-size:25px; position:absolute; left:35px;top:65px; color: white;"></i>
        <div class="posttweettacontainer" style="margin-left: 50px;">
            <input name="nama" style="margin-bottom:10px; border-radius: 8px;" type="text" class="form-control" placeholder="Your name" required>
            <textarea name="isi" rows="3" class="form-control" placeholder="What's happening?" required></textarea>
            <div class="posttweetcountcont">
                <span class="posttweetcount"><span id="totalchars">0</span>/250</span>
            </div>
        </div>
        <div class="posttweetbutcont">
            <button id="posttweetbut" class="posttweetbut">Post</button>
        </div>
        <hr size="20px" color="white"><hr size="20px" color="white">
    </div>
</form>
<main style="background-color:#336b87">
        @yield('isipost')
</main>
</body>
</html>      
@endsection