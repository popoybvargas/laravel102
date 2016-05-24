@extends( 'layouts.app' )
@section( 'content' )
	<header>All Cards</header>

	@foreach ( $cards as $card )
		<div>
			<a href="/cards/{{ $card->id }}">{{ $card->title }}</a>
		</div>
	@endforeach
@endsection