@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Dodaj nową kartę</h1>

    <!-- Wyświetlenie błędów walidacji -->
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form method="POST" action="{{ route('cards.store') }}">
        <div class="card-with-button">
            <div class="single-card">
            
                    @csrf

                    <div class="card-header">
                        <div class="card-header-content">
                            <div class="card-image">
                                <svg version="1.0" xmlns="http://www.w3.org/2000/svg"
                                width="50.000000pt" height="50.000000pt" viewBox="0 0 900.000000 512.000000"
                                preserveAspectRatio="xMidYMid meet">
                                <g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)"
                                fill="#000000" stroke="none">
                                <path d="M1940 2560 l0 -1840 2560 0 2560 0 0 1840 0 1840 -2560 0 -2560 0 0
                                -1840z m4920 1513 l0 -128 -48 -41 c-44 -38 -288 -251 -1471 -1283 -250 -218
                                -481 -418 -514 -444 -209 -168 -447 -168 -654 0 -91 74 -2007 1744 -2020 1761
                                -9 11 -13 55 -13 139 l0 123 2360 0 2360 0 0 -127z m-4027 -1002 c356 -310
                                647 -567 647 -571 0 -7 -1314 -1051 -1332 -1058 -4 -2 -8 499 -8 1113 l0 1116
                                23 -18 c13 -10 314 -272 670 -582z m4023 -1628 c-5 -5 -1336 1047 -1336 1057
                                0 4 300 269 668 589 l667 582 3 -1112 c1 -612 0 -1114 -2 -1116z m-3005 741
                                c297 -260 379 -307 581 -333 136 -18 314 26 440 107 40 27 165 128 276 226
                                124 107 208 174 215 169 17 -10 1381 -1087 1445 -1140 l52 -45 0 -124 0 -124
                                -2360 0 -2360 0 0 125 c0 113 2 127 20 143 64 54 1476 1170 1483 1171 4 1 98
                                -78 208 -175z"/>
                                </g>
                                </svg>
                            </div>
                            <div class="form-group-pin">
                                <input type="text" class="form-control" id="pin" name="pin" value="{{ old('pin') }}" placeholder="PIN">
                            </div>
                        </div>
                    </div>
                
                    <div class="card-body">
                        <div class="form-group">

                            <input type="text" class="form-control" id="card_number" name="card_number" value="{{ $newCardNumber }}">
                        </div>

                        <div class="form-group">
                            <input type="date" class="form-control" id="activation_date" name="activation_date" value="{{ old('activation_date') }}" placeholder="Data aktywacji">
                        </div>

                        <div class="form-group">
                            <input type="date" class="form-control" id="expiration_date" name="expiration_date" value="{{ old('expiration_date') }}" placeholder="Data ważności">
                        </div>

                        <div class="form-group">
                            <input type="number" step="0.01" class="form-control" id="balance" name="balance" value="{{ old('balance') }}" placeholder="Saldo">
                        </div>
                    </div>
                    
        
            </div>

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Zapisz</button>
            </div>
        </div>
    </form> 
</div>   
@endsection