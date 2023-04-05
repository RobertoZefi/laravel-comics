
@extends('layout.app')

@section('comics')

<div class="bg-hero">
    <div class="container">
        <div class="button">
            <p>current series</p>
        </div>
    </div>
</div>

<div class="hero">
    <div class="container">
        <div class="row">
            @foreach($comics as $comic)
            <div class="col" >
                <div class="card">
                    <img :src="{{ $comic['thumb'] }}" alt="">
                    <h4 class="title">{{ $comic['title'] }}</h4>
                </div>
            </div>
            @endforeach
        </div>
        <div class="button">
            <p>load more</p>
        </div>
    </div>
</div>

@endsection

