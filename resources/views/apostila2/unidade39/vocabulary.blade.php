@extends('layouts.template')
@section('titulo','UNIMUGI | Home')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade38" data-etapa="vocabulary">
				<h3 class="barlow">UNIT 38</h3>
				<h5 class="barlow">1 - VOCABULARY</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/Unit39/Vocabulary/completo.ogg') }}" type="audio/ogg">
				</audio>
				<h5 class="barlow" style="margin-top: 16px">A -  WORDS AND EXPRESSIONS</h5>
				<ul class="lista-inline">
					<ol><b>TO LIKE / something-somebody a lot / very much / just a little</b></ol>
				</ul>
				<ul class="lista-inline">
					<ol><b>TO MATTER / if / what / who / a lot</b></ol>
				</ul>
				<ul class="lista-inline">
					<ol><b>TO PASS / a test / under / through / by places</b></ol>
				</ul>
				<h5 class="barlow" style="margin-top: 16px">B -  WORDS IN CONTEXT</h5>
				<div style="margin-top: 36px">
					<ul class="lista-inline">
						<li><b>Rested</b></li>
						<li><b>Strange</b></li>
						<li><b>Voice</b></li>
						<li><b>Didactic</b></li>
						<li><b>Slept</b></li>
						<li><b>Move</b></li>
						<li><b>Show up</b></li>
						<li><b>Out of the blue </b></li>
						<li><b>Gone</b></li>
					</ul>
				</div>
			</div>
		</div>
	</main>
	<script>
        activeMenu();
    </script>

@endsection
