@extends('templates.maintemplate')
@section('contenido')
	<div class="row obras">
		<div class="col-md-6 horizontal">
			<article class="infoobras">
				<h2>Obras Horizontales</h2>
				<img src="{{ asset('img/horizontal.jpg') }}">
				<div class="descripobra">
					<h3>Construcciones Horizontales</h3>
				</div>
			</article>
		</div>
		<div class="col-md-6 vertical">
			<article class="infoobras">
				<h2>Obras Verticales</h2>
				<img src="{{ asset('img/vertical.jpg') }}">
				<div class="descripobra">
					<h3>Construcciones Verticales</h3>
				</div>
			</article>
		</div>
		<div class="col-md-6 vertical"></div>
	</div>
@stop