@extends('layouts.app')



@section('content')
<div class="container">
    <h1 class="content-h1">Karty</h1>

    <!-- Wyświetlenie komunikatów o sukcesie lub błędach -->
    <div class="card-with-pagination">
        <div class="card-list">
            @foreach ($cards as $card)
            @include('includes.card')
            @endforeach 
        </div>
    




        <!-- Wyświetlenie paginacji -->
        {{ $cards->links('includes.custom_pagination' ,['cards' => $cards]) }}
    </div>
</div>    
@endsection