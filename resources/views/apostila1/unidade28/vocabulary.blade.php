@extends('layouts.template')
@section('titulo','UNIMUGI | Home')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila1"  data-unidade="unidade28" data-etapa="vocabulary">
				<h3 class="barlow">UNIT 28 - VICTOR’S STUDENTS</h3>
				<p><b>Goal: </b> Explore Vocabulary With Students.</p>
				<h5 class="barlow">1 - VOCABULARY</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/Unit28/Vocabulary/completo.ogg') }}" type="audio/ogg">
				</audio>
				<ul class="lista-inline">
					<li><b>AS</b></li>
					<li><b>SAY</b></li>
					<li><b>ACTUALLY</b></li>
					<li><b>JOURNALIST</b></li>
					<li><b>EDITOR</b></li>
					<li><b>YOU ALL</b></li>
					<li><b>SHOULD</b></li>
				</ul>
			</div>
		</div>
	</main>
	<script>
        activeMenu();
    </script>

@endsection
