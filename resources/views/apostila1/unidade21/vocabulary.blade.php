@extends('layouts.template')
@section('titulo','UNIMUGI | Home')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-unidade="unidade21" data-etapa="vocabulary">
				<h3 class="barlow">UNIT 21 - PROFESSOR SARAH HENDRIX</h3>
				<p><b>Goal:</b> Provide Students With An Understanding Of The Field Of Ilustration.</p>
				<h5 class="barlow">1 - VOCABULARY</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/unit1/vocabulary/vocabulary.ogg') }}" type="audio/ogg">
				</audio>
				<ul class="lista-inline">
					<li><b>THOUGH</b></li>
					<li><b>MOVE</b></li>
					<li><b>SPECIALIZE</b></li>
					<li><b>DRAW</b></li>
					<li><b>NOWADAYS</b></li>
					<li><b>VARIETY</b></li>
					<li><b>DURING</b></li>
					<li><b>SUCHAS</b></li>
				</ul>
			</div>
		</div>
	</main>
	<script>
        activeMenu();
    </script>

@endsection
