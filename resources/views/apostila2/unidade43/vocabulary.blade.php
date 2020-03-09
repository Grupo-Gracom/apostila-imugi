@extends('layouts.template')
@section('titulo','UNIMUGI | Home')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade43" data-etapa="vocabulary">
				<h3 class="barlow">UNIT 43</h3>
				<h5 class="barlow">1 - VOCABULARY</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/unit1/vocabulary/vocabulary.ogg') }}" type="audio/ogg">
				</audio>
				<h5 class="barlow" class="espacamento">A -  WORDS AND EXPRESSIONS</h5>				                                   
				<ul class="lista-inline">
					<li><b>TO FIX / a car / a dinner</b></li>
					<li><b>TO HAVE / a car / breakfast-lunch – dinner – a snack / a break / problems / headache</b></li>
					<li><b>TO SEE / a person / something / your point</b></li>													
				</ul>				
				<h5 class="barlow" style="margin-top: 16px">B -  WORDS IN CONTEXT</h5>	
				<ul class="lista-inline">
					<li><b>Hard</b></li>
					<li><b>Character</b></li>
					<li><b>Each</b></li>
					<li><b>Something</b></li>
					<li><b>RPG</b></li>
					<li><b>Also</b></li>
					<li><b>Fun</b></li>
					<li><b>Wait</b></li>								
				</ul>
			</div>
		</div>
	</main>
	<script>
        activeMenu();
    </script>
@endsection
