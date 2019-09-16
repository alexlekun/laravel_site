@extends('layouts.app')

@section('content')
	@include('components.header')
	<main class="main">
		<div class="container">

			@include('components.messages')

			<div class="row">
				<div class="col-12 col-lg-3">

					@include('components.aboutsite')

				</div>
				<div class="col-12 col-lg-6">

					@include('components.ajaxform')

					<hr>

					@include('components.ajaxtable')	

				</div>
				<div class="col-12 col-lg-3">

					@include('components.sendemail')
					
				</div>
			</div>
		</div>
	</main>
@endsection('content')