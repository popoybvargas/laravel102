@extends( 'layouts.app' )
@section( 'content' )
	<header>Edit the Note</header>

	<div class="col-sm-6 col-sm-offset-3">
		<form id="editNoteForm" class="form-group" action="/notes/{{ $note->id }}" method="post" accept-charset="utf-8">
			{{ method_field( 'patch' ) }}
			<div class="form-group">
				<textarea name="body" class="form-control" autofocus>{{ $note->body }}</textarea>
			</div>
			<div class="form-group">
				<button class="btn btn-primary">Update Note</button>
			</div>
			{!! csrf_field() !!}
		</form><!-- editNoteForm -->
	</div>
@endsection