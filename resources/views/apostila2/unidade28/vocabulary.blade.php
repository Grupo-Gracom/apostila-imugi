@extends('layouts.template')
@section('titulo','Unit 28 | Vocabulary')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade28" data-etapa="vocabulary">
				<h3 class="barlow">UNIT 28</h3>
				<h5 class="barlow">1 - VOCABULARY</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/apostila2/UNIT 28/1. VOCABULARY/1. VOCABULARY.ogg') }}" type="audio/ogg">
				</audio>
				<h5 class="barlow" style="margin-top: 16px">A -  WORDS AND EXPRESSIONS</h5>
				<div class="espacamento">
					<p><b>TO SELL </b>/ houses / tv / an idea</p>
					<p><b>TO WEAR </b>/ pants / glasses / earrings / necklace / bracelet</p>
					<p><b>TO BEGIN </b>/ with / by doing something</p>
				</div>
				<h5 class="barlow" style="margin-top: 16px">B -  WORDS IN CONTEXT</h5>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/apostila2/UNIT 28/1. VOCABULARY/2. VOCABULARY.ogg') }}" type="audio/ogg">
				</audio>
				<ul class="lista-inline upper" style="margin-top: 16px">
					<li><p><b>Accept</b></p></li>
					<li><p><b>NGO</b></p></li>
					<li><p><b>Deal</b></p></li>
					<li><p><b>Orphan</b></p></li>
					<li><p><b>Known</b></p></li>
					<li><p><b>Target</b></p></li>
					<li><p><b>Reach</b></p></li>
					<li><p><b>Campaigns</b></p></li>
					<li><p><b>steps</b></p></li>
				</ul>
			</div>
		</div>
	</main>
	<script>
        activeMenu();
    </script>

@endsection
