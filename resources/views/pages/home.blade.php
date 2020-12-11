@extends('app')

@section('content')

    <img src="{{ asset('/images/djibouti-flag.png') }}" alt="Djibouti Flag">
   
    <h1>Hello from Djibouti!</h1>

    <p>It's currently {{ date('h:i A') }}.</p>    
@endsection
        

        
