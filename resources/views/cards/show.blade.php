@extends( 'layouts.app' )
@section( 'content' )
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<h1>{{ $card->title }}</h1>

			<ul class="list-group">
				@foreach ( $card->notes as $note )
					<li class="list-group-item">
						<a href="/notes/{{ $note->id }}/edit">{{ $note->body }}</a>
						<a href="#" class="pull-right">{{ $note->user->username }}</a>
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

			@if ( count( $errors ) )
				<ul>
					@foreach ( $errors->all() as $error )
						<li>{{ $error }}</li>
					@endforeach
				</ul>
			@endif
		</div>
	</div><!-- row -->
@endsection