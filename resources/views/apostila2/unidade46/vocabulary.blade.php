@extends('layouts.template')
@section('titulo','Unit 46 | Vocabulary')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade46"  data-etapa="vocabulary">

				<h3 class="barlow">UNIT 46</h3>
				<h5 class="barlow">1 - VOCABULARY</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/unit1/vocabulary/vocabulary.ogg') }}" type="audio/ogg">
				</audio>
				<h5 class="barlow" style="margin-top: 16px">A - WORDS AND EXPRESSIONS</h5>

				<p>TO HATE / people / things / to do things</p>
				<p>TO IGNORE / a person / an idea</p>
				<p>TO LOSE / control / a bag / my mind / my life</p>

				<h5 class="barlow" style="margin-top: 16px">B - WORDS IN CONTEXT</h5>

				<ul class="lista-inline">
					<li><b>DEVELOPMENT</b></li>
					<li><b>SO FAR</b></li>
					<li><b>SO GOOD</b></li>
					<li><b>READY</b></li>
					<li><b>TOGETHER</b></li>
					<li><b>MINDS</b></li>
					<li><b>TELLING</b></li>
					<li><b>CHALLENGING</li>
				</ul>							
				
			</div>
		</div>
	</main>
	<script>
        activeMenu();
    </script>

@endsection
