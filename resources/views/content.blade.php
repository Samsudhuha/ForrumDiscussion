@extends('post')

@section('isipost')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<style type="text/css">
    .bs-example{
        margin: 20px;  
        color: white;      
    }
    .media i{
        width: 80px;
    }
    .media{
        height: 150px;
        line-height: 1.8;
        letter-spacing: 3px;
    }
    .btn-group{
        margin-right: 150px;
    }
</style>
    @foreach ($isi as $hasil)
        <div class="bs-example">
            <div class="media">
                <i class="glyphicon glyphicon-user" style="font-size:35px; color: white;"></i>
                <div class="media-body">
                    <h2 class="mt-0">{{$hasil->nama}}</h2>
                    <p style="text-indent: 50px;">{{$hasil->isi}}</p>
                </div>
                <div class="btn-group">
                    <a href="#" class="btn btn-light dropdown-toggle" data-toggle="dropdown"></a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="{{url('/update/'.$hasil->id)}}">edit</a>
                        <a class="dropdown-item" href="{{url('/delete/'.$hasil->id)}}">delete</a>
                        <a class="dropdown-item" href="{{url('/comment/'.$hasil->id)}}">comment</a>
                    </div>
                </div>
            </div>
            <hr size="20px" color="white"><hr size="20px" color="white">
            @if ($comment != Null)
            @foreach ($comment as $isi)
            @if ($isi->id_post == $hasil->id)
                <div class="media mt-2" style="margin-left:250px">
                    <i class="glyphicon glyphicon-user" style="font-size:35px; color: white;"></i>
                    <div class="media-body">
                        <h2 class="mt-0">{{$isi->nama}}</h2>
                        <p style="text-indent: 50px;">{{$isi->isi}}</p>
                    </div>
                    <div class="btn-group">
                        <a href="#" class="btn btn-light dropdown-toggle" data-toggle="dropdown"></a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="{{url('/delete_comment/'.$isi->id)}}">delete</a>
                        </div>
                    </div>
                </div>
            <hr size="20px" color="white"><hr size="20px" color="white">
            @endif
            @endforeach
            @endif
        </div>
        @endforeach
@endsection