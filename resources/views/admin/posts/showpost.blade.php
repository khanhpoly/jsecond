@extends('layouts.app')
@section('title')
{{$show->title}}
@endsection
@section('content')
<div class="container">
	<div class="row">
		<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
			@include('layouts.sidebar')
		</div>
		<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
			<h2 class="title" style="text-align: left; ">
				{!!$show->title!!}</h2>
				<hr>
				{!!$show->created_at->format('Y/m/d')!!}
				<hr>
				
			<p class="textbody">{!!$show->body!!}</p>
		</div>
	</div>

@endsection
@section('footer')
@endsection