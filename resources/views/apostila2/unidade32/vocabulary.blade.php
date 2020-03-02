@extends('layouts.template')
@section('titulo','UNIMUGI | Home')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade31"  data-etapa="vocabulary">

				<h3 class="barlow">UNIT 31</h3>
				<h5 class="barlow">1 - VOCABULARY</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/unit1/vocabulary/vocabulary.ogg') }}" type="audio/ogg">
				</audio>
				<h5 class="barlow" style="margin-top: 16px">A - WORDS AND EXPRESSIONS</h5>

				<p>TO REST / your feet / your legs / on the sofa / in peace (RIP).</p>
				<p>TO ROB / people / places</p>
				<p>TO SHOUT / out / at somebody</p>

				<h5 class="barlow" style="margin-top: 16px">B - WORDS IN CONTEXT</h5>

				<ul class="lista-inline">
					<li><b>TO BE INTO</b></li>
					<li><b>A LOT OF</b></li>
					<li><b>DETAILS</b></li>
					<li><b>ENDLESS</b></li>
					<li><b>REGARDING</b></li>
					<li><b>VIBE</b></li>
					<li><b>TRICKS</b></li>
					<li><b>SAW</li>
					<li><b>SO FAR</li>
				</ul>							
				
			</div>
		</div>
	</main>
	<script>
        activeMenu();
    </script>

@endsection
