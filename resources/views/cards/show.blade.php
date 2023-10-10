@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Szczegóły karty</h1>

   
    @include('includes.card')
    <a href="{{ route('cards.index') }}" class="btn btn-primary">Powrót</a>
</div>
@endsection