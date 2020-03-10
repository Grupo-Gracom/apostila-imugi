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
					<source src="{{ asset('assets/audio/Unit28/Vocabulary/completo.ogg') }}" type="audio/ogg">
				</audio>
				<h5 class="barlow" style="margin-top: 16px">A -  WORDS AND EXPRESSIONS</h5>
				<ul class="lista-inline">
					<ol><b>TO SELL / houses / tv / an idea</b></ol>
				</ul>
				<ul class="lista-inline">
					<ol><b>TO WEAR / pants / glasses / earrings / necklace / bracelet</b></ol>
				</ul>
				<ul class="lista-inline">
					<ol><b>TO BEGIN / with / by doing something</b></ol>
				</ul>
				<h5 class="barlow" style="margin-top: 16px">B -  WORDS IN CONTEXT</h5>
				<div style="margin-top: 36px">
					<ul class="lista-inline">
						<li><b>Accept</b></li>
						<li><b>NGO</b></li>
						<li><b>Deal</b></li>
						<li><b>Orphan</b></li>
						<li><b>Known</b></li>
						<li><b>Target</b></li>
						<li><b>Reach</b></li>
						<li><b>Campaigns</b></li>
						<li><b>steps</b></li>
					</ul>
				</div>
			</div>
		</div>
	</main>
	<script>
        activeMenu();
    </script>

@endsection
