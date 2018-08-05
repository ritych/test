@extends('layouts.app')
@section('content')
	@include('common.errors')
	<table class="table table-bordered table-hover table-striped" id="main_table">
		<thead>
		     <tr class="info text-center">
		   	     <th class="text-center">{{ trans('strings.table_name') }}</th>
		   	     <th class="text-center">{{ trans('strings.table_email') }}</th>
		         <th class="text-center">{{ trans('strings.table_url') }}</th>
			     <th class="text-center">{{ trans('strings.table_description') }}</th>
			     <th class="text-center">{{ trans('strings.table_ip') }}</th>
			     <th class="text-center">{{ trans('strings.table_browser') }}</th>
			     <th class="text-center">{{ trans('strings.table_time_created') }}</th>
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

	<h2 class="title">{{ trans('strings.add_message') }}:</h2>
	<form action="{{ url('/submit') }}" method="POST" >
		{{ csrf_field() }}
		<div class="form-group">
			<div class="input-group">
				<span class="input-group-addon">{{ trans('strings.table_name') }}:</span>
				<input name="name" type="text" class="form-control" id="name">
			</div>
		</div>
		<div class="form-group">
			<div class="input-group">
				<span class="input-group-addon">{{ trans('strings.table_email') }}:</span>
				<input name="email" type="text" class="form-control" id="email">
			</div>
		</div>
		<div class="form-group">
			<div class="input-group">
				<span class="input-group-addon">{{ trans('strings.table_url') }}:</span>
				<input name="url" type="text" class="form-control" id="url">
			</div>
		</div>
		<div class="form-group">
			<div class="input-group">
				<span class="input-group-addon">{{ trans('strings.table_description') }}:</span>
				<textarea name="description" class="form-control" rows="5" id="description"></textarea>
			</div>
		</div>
		<div class="form-group">
			<div class="input-group">
				<span class="input-group-addon">{{ trans('strings.captcha') }}:</span>
				<div class="captcha">
				    <span class="captcha_img">{!! captcha_img() !!}</span>
					<a type="button" class="btn btn-refresh btn-success">{{ trans('strings.refresh') }}</a>
				</div>
				<input name="captcha" type="text" class="form-control" id="captcha">
			</div>
		</div>
		<button type="submit" class="btn btn-default">{{ trans('strings.add') }}</button>
	</form> 
@endsection

@section('scripts')
	<script>
        $(".btn-refresh").click(function () {
            $.ajax({
                type: 'GET',
                url: 'refresh_captcha',
                success: function success(data) {
                    $(".captcha_img").html(data.captcha);
                }
            });
        });

		$("#main_table").tablesorter({
            headers: { 1: {sorter: false},  2: {sorter: false}, 3: {sorter: false}, 4: {sorter: false}, 5: {sorter: false}},
		});
	</script>
@endsection