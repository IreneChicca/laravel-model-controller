@extends('layouts.app')

@section('main-content')
    
<div class="p-5 d-flex flex-wrap text-center justify-content-center">
    
@foreach ($movies as $movie)
    


    <div class="card col-3 m-4  p-1"><div class="border border-warning-subtle p-3 rounded">
        <h5>{{ $movie->original_title }}</h5>
        <p>{{ $movie->title }}</p>
        <h6>{{ $movie->date }}</h6>
        <br>
        <p>{{ $movie->nationality}}</p>
    </div>
</div>
    @endforeach
    
   
</div>
@endsection