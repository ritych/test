@extends('layouts.app')
@section('content')
	@include('common.errors')
	<table class="table table-bordered table-hover table-striped">
		<thead>
		     <tr class="info text-center">
		   	     <th class="text-center">Имя пользователя</th>
		   	     <th class="text-center">Адрес эл.почты</th>
		         <th class="text-center">Ссылка на сайт</th>
			     <th class="text-center">Текст сообщения</th>
			     <th class="text-center">IP</th>
			     <th class="text-center">Браузер</th>
			     <th class="text-center">Дата добавления</th>
		     </tr>
		</thead>
		@foreach ($comments as $comment)
			<tr>
				<td class="text-center">{{ $comment->name }}</td>
				<td class="text-center">{{ $comment->email }}</td>
				<td class="text-center">{{ $comment->url }}</td>
				<td class="text-center">{{ $comment->description }}</td>
				<td class="text-center">{{ $comment->ip }}</td>
				<td class="text-center">{{ $comment->browser }}</td>
				<td class="text-center">{{ $comment->created_at }}</td>
			</tr>
		@endforeach
	</table>

	{{ $comments->links() }}

	<h2 class="title">Добавьте отзыв:</h2>
	<form action="{{ url('/submit') }}" method="POST" >
		{{ csrf_field() }}
		<div class="form-group">
			<div class="input-group">
				<span class="input-group-addon">Имя пользовтеля:</span>
				<input name="name" type="text" class="form-control" id="name">
			</div>
		</div>
		<div class="form-group">
			<div class="input-group">
				<span class="input-group-addon">Адрес эл.почты:</span>
				<input name="email" type="text" class="form-control" id="email">
			</div>
		</div>
		<div class="form-group">
			<div class="input-group">
				<span class="input-group-addon">Ссылка на сайт:</span>
				<input name="url" type="text" class="form-control" id="url">
			</div>
		</div>
		<div class="form-group">
			<div class="input-group">
				<span class="input-group-addon">Текст сообщения:</span>
				<textarea name="description" class="form-control" rows="5" id="description"></textarea>
			</div>
		</div>
		<button type="submit" class="btn btn-default">Добавить</button>
	</form> 
@endsection