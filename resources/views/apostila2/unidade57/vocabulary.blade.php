@extends('layouts.template')
@section('titulo','Unit 57 | Vocabulary')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade57" data-etapa="vocabulary">
				<h3 class="barlow">UNIT 57</h3>
				<h5 class="barlow">1 - VOCABULARY</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/Unit57/Vocabulary/completo.ogg') }}" type="audio/ogg">
				</audio>
				<h5 class="barlow" style="margin-top: 16px">A -  WORDS AND EXPRESSIONS</h5>
				<ul class="lista-inline">
					<ol><b>TO DIVE / into the poll / into the lake / in a project</b></ol>
				</ul>
				<ul class="lista-inline">
					<ol><b>TO HOPE / I hope so / I hope not / I hope things go all right</b></ol>
				</ul>
				<ul class="lista-inline">
					<ol><b>TO LEARN / English / Geography / history</b></ol>
				</ul>

				<h5 class="barlow" style="margin-top: 32px">B -  WORDS IN CONTEXT</h5>
				<div style="margin-top: 36px">
					<ul class="lista-inline">
						<li><b>Worried</b></li>
						<li><b>Behind Schedule</b></li>
						<li><b>Punctuality</b></li>
						<li><b>Still</b></li>
						<li><b>Missing</b></li>
						<li><b>Until</b></li>
						<li><b>By then</b></li>
					</ul>
				</div>
			</div>
		</div>
	</main>
	<script>
        activeMenu();
    </script>

@endsection
