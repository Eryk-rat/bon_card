<?php

namespace App\Http\Controllers;

use App\Models\Card;
use Illuminate\Http\Request;

class CardController extends Controller
{
           // Wyświetlanie listy kart
           public function index()
           {
               $cards = Card::paginate(4); // Paginacja - 10 rekordów na stronę
               return view('cards.index', compact('cards'));
           }
       
           // Wyświetlanie formularza do tworzenia karty
           public function create()
           {
             // Uzyskanie ostatniego numeru karty z bazy danych
           $lastCard = Card::orderBy('id', 'desc')->first();
   
           // Obliczenie nowego numeru karty
           $newCardNumber = str_pad((int)$lastCard->card_number + 1, 20, '0', STR_PAD_LEFT);
   
           return view('cards.create', ['newCardNumber' => $newCardNumber]);
           }
       
           // Zapisywanie nowej karty
           public function store(Request $request)
           {
   
   
               // Sprawdź, czy walidacja nie zakończyła się niepowodzeniem
   
               $request->validate([
                   'card_number' => 'required|string|size:20|unique:cards',
                   'pin' => 'required|string|size:4',
                   'activation_date' => 'required|date',
                   'expiration_date' => 'required|date|after:activation_date',
                   'balance' => 'required|numeric',
               ]);
   
               Card::create($request->all());
       
               return redirect()->route('cards.index')
                   ->with('success', 'Karta została dodana.');
           }
       
           // Wyświetlanie danych karty
           public function show(Card $card)
           {
               return view('cards.show', compact('card'));
           }
       
           // Wyświetlanie formularza do edycji karty
           public function edit(Card $card)
           {
               return view('cards.edit', compact('card'));
           }
       
           // Aktualizacja danych karty
           public function update(Request $request, Card $card)
           {
               $request->validate([
                   'card_number' => 'required|string|max:20',
                   'pin' => 'required|string|max:4',
                   'activation_date' => 'required|date',
                   'expiration_date' => 'required|date',
                   'balance' => 'required|numeric',
               ]);
       
               $card->update($request->all());
       
               return redirect()->route('cards.index')
                   ->with('success', 'Dane karty zostały zaktualizowane.');
           }
       
           // Usuwanie karty
           public function destroy(Card $card)
           {
               $card->delete();
       
               return redirect()->route('cards.index')
                   ->with('success', 'Karta została usunięta.');
           }
}
