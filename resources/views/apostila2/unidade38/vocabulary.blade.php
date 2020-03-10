@extends('layouts.template')
@section('titulo','Unit 38 | Vocabulary')
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
					<source src="{{ asset('assets/audio/Unit38/Vocabulary/completo.ogg') }}" type="audio/ogg">
				</audio>
				<h5 class="barlow" style="margin-top: 16px">A -  WORDS AND EXPRESSIONS</h5>
				<ul class="lista-inline">
					<ol><b>TO COUNT / to ten / on somebody</b></ol>
				</ul>
				<ul class="lista-inline">
					<ol><b>TO FORGET / things / people / to do things</b></ol>
				</ul>
				<ul class="lista-inline">
					<ol><b>TO GIVE / attention / love / a break</b></ol>
				</ul>
				<h5 class="barlow" style="margin-top: 16px">B -  WORDS IN CONTEXT</h5>
				<div style="margin-top: 36px">
					<ul class="lista-inline">
						<li><b>Add</b></li>
						<li><b>Goals</b></li>
						<li><b>Accomplish</b></li>
						<li><b>Tend</b></li>
						<li><b>Pitfalls</b></li>
						<li><b>Ultimate</b></li>
						<li><b>Upon</b></li>
						<li><b>Feasible</b></li>
						<li><b>Fail</b></li>
					</ul>
				</div>
			</div>
		</div>
	</main>
	<script>
        activeMenu();
    </script>

@endsection
