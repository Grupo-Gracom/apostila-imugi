@extends('layouts.template')
@section('titulo','Unit 10 | Vocabulary')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')

	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade10" data-etapa="vocabulary">
				<h3 class="barlow">UNIT 10</h3>
				<h5 class="barlow">1 - VOCABULARY</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/Unit10/Vocabulary/completo.ogg') }}" type="audio/ogg">
				</audio>
				<h5 class="barlow" style="margin-top: 16px">A -  QUANTIFIERS</h5>
				<ul class="lista-inline">
					<li><b>Some</b></li>
					<li><b>Any</b></li>
					<li><b>No</b></li>
				</ul>
				<h5 class="barlow" style="margin-top: 16px">B -  POLYGONS / 3D OBJECTS</h5>
				<div style="margin-top: 36px">
					<ul class="lista-inline">
						<li><b>POLYGONS ></b></li>
						<li>Triangle</li>
						<li>Square</li>
						<li>Pentagon</li>
						<li>Hexagon</li>
						<li>Heptagon</li>
					</ul>
					<ul class="lista-inline">
						<li><b>3D OBJECTS ></b></li>
						<li>Sphere</li>
						<li>Cube</li>
						<li>Pyramid</li>
						<li>Cone</li>
						<li>Cylinder</li>
					</ul>
				</div>
				<h5 class="barlow" style="margin-top: 16px">C -   WORDS IN CONTEXT</h5>
				<div style="margin-top: 36px">
					<ul class="lista-inline">
						<li>Bring</li>
						<li>Some</li>
						<li>Just</li>
						<li>Hold</li>
						<li>Release</li>
						<li>Feel</li>
						<li>Hope</li>
						<li>Straight</li>
						<li>Together</li>
					</ul>
				</div>
			</div>
		</div>
	</main>
	<script>
        activeMenu();
    </script>

@endsection
