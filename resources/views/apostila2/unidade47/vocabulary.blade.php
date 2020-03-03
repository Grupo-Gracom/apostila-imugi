@extends('layouts.template')
@section('titulo','UNIMUGI | Home')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade47"  data-etapa="vocabulary">

				<h3 class="barlow">UNIT 47</h3>
				<h5 class="barlow">1 - VOCABULARY</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/unit1/vocabulary/vocabulary.ogg') }}" type="audio/ogg">
				</audio>
				<h5 class="barlow" style="margin-top: 16px">A - WORDS AND EXPRESSIONS</h5>

				<p>TO LOVE / people / things / to do things</p>
				<p>TO MAKE / a request / noise / a fuss / friends / a cake</p>
				<p>TO PREFER / salmon to tuna / reading books to watching movies</p>

				<h5 class="barlow" style="margin-top: 16px">B - WORDS IN CONTEXT</h5>

				<ul class="lista-inline">
					<li><b>GOTTA</b></li>
					<li><b>CAREFUL</b></li>
					<li><b>LINEAR</b></li>
					<li><b>RIGHT</b></li>
					<li><b>FORGOT</b></li>
					<li><b>SOLVE</b></li>
					<li><b>BELIEVE</b></li>
					<li><b>SURE</li>
				</ul>							
				
			</div>
		</div>
	</main>
	<script>
        activeMenu();
    </script>

@endsection
