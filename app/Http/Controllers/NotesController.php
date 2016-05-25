<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Card;
use App\Note;

class NotesController extends Controller
{
	public function edit( Note $note )
	{
		return view( 'notes.edit', compact( 'note' ) );
	}
	
	public function store( Request $request, Card $card )
	{
		// $note = new Note;
		// $note->body = $request->body;
		// $card->notes()->save( $note );

		// $card->notes()->save(
		// 	new Note( [ 'body' => $request->body ] )
		// );

		// $card->notes()->create( [
		// 	'body' => $request->body
		// ] );

		// $card->notes()->create( $request->all() );

		// $card->addNote(
		// 	new Note( $request->all() )
		// );

		$this->validate( $request, [
			'body' => 'required|min:10'
		] );
		$note = new Note( $request->all() );
		$card->addNote( $note, 1 );

		return back();
	}

	public function update( Request $request, Note $note )
	{
		$note->update( $request->all() );

		// return back();
		return redirect( 'cards/'.$note->card_id );
	}
}