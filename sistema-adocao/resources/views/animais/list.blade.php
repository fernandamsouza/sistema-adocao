@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            <div class="card-header"><a href="{{ url('home') }}">
                    Voltar
            </a></div>
            <div class="card-body">
                @foreach($animais as $a)
                    {{print_r($a)}}
                    {{($a->name)}}
                    <br>
                @endforeach   
            </div>
        </div>
    </div>
</div>
@endsection
