@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edytuj kartę</h1>

    <!-- Wyświetlenie błędów walidacji -->

    <form method="POST" action="{{ route('cards.update', $card->id) }}">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="card_number">Nr karty</label>
            <input type="text" class="form-control" id="card_number" name="card_number" value="{{ $card->card_number }}">
        </div>
      

        <div class="form-group">
            <label for="pin">PIN</label>
            <input type="text" class="form-control" id="pin" name="pin" value="{{ $card->pin }}">
        </div>

        <div class="form-group">
            <label for="activation_date">Data aktywacji</label>
            <input type="date" class="form-control" id="activation_date" name="activation_date" value="{{ $card->activation_date }}">
        </div>

        <div class="form-group">
            <label for="expiration_date">Data ważności</label>
            <input type="date" class="form-control" id="expiration_date" name="expiration_date" value="{{ old('expiration_date') }}">
        </div>

        <div class="form-group">
            <label for="balance">Saldo</label>
            <input type="number" step="0.01" class="form-control" id="balance" name="balance" value="{{ old('balance') }}">
        </div>
        <!-- Pozostałe pola formularza (PIN, data aktywacji, data ważności, saldo) -->

        <button type="submit" class="btn btn-primary">Zapisz zmiany</button>
    </form>
</div>
@endsection