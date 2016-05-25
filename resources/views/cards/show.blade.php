@extends( 'layouts.app' )
@section( 'content' )
	<div class="col-md-6 col-md-offset-3">
		<header>{{ $card->title }}</header>

		<ul class="list-group">
			@foreach ( $card->notes as $note )
				<li class="list-group-item">
					<a href="/notes/{{ $note->id }}/edit">{{ $note->body }}</a>
					<a href="#" class="pull-right">{{ $note->user->name }}</a>
				</li>
			@endforeach
		</ul>
		<hr>
		<h3>Add a New Note</h3>
		<form id="addNoteForm" class="form-group" action="/cards/{{ $card->id }}/notes" method="post" accept-charset="utf-8">
			<div class="form-group">
				<textarea name="body" class="form-control" autofocus>{{ old( 'body' ) }}</textarea>
			</div>
			<div class="form-group">
				<button type="submit" class="btn btn-primary">Add Note</button>
			</div>
			{!! csrf_field() !!}
		</form><!-- addNoteForm -->
		@include( 'includes.form_errors' )
	</div>
@endsection
@section( 'footer' )
	<script>
		
	$( function()
	{
		sayHello( 'How is everyone today?' );
	});

	</script>
@endsection