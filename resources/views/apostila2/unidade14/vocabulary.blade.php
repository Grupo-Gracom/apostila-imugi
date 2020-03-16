@extends('layouts.template')
@section('titulo','Unit 14 | Vocabulary')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')

	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade14" data-etapa="vocabulary">
				<h3 class="barlow">UNIT 14</h3>
				<h5 class="barlow">1 - VOCABULARY</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/apostila2/UNIT 14/1. VOCABULARY/1. VOCABULARY.ogg') }}" type="audio/ogg">
				</audio>
				<div class="clear"></div>
				<h5 class="barlow" style="margin-top: 16px">A -  SUPPORTING VERBS</h5>				
				<ul class="lista-inline upper" style="margin-top:16px">
					<li><p><b>Take care</b></p></li>
					<li><p><b>Assist</b></p></li>
					<li><p><b>Monitor</b></p></li>
					<li><p><b>Help</b></p></li>
					<li><p><b>Pay attention</b></p></li>
					<li><p><b>Support</b></p></li>
					<li><p><b>Supervise</b></p></li>
					<li><p><b>Encourage</b></p></li>
				</ul>
				<h5 class="barlow" style="margin-top: 16px">B -  WORDS IN CONTEXT</h5>				
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/apostila2/UNIT 14/1. VOCABULARY/2. VOCABULARY.ogg') }}" type="audio/ogg">
				</audio>
				<div class="clear"></div>
				<ul class="lista-inline upper" style="margin-top:16px">
					<li><p><b>Ankle</b></p></li>
					<li><p><b>Knee</b></p></li>
					<li><p><b>Hard</b></p></li>
					<li><p><b>Right</b></p></li>
					<li><p><b>Glad</b></p></li>
					<li><p><b>Bit</b></p></li>
					<li><p><b>All over</b></p></li>
					<li><p><b>Awesome</b></p></li>
					<li><p><b>Feedback</b></p></li>
				</ul>
			</div>
		</div>
	</main>
	<script>
        activeMenu();
    </script>

@endsection
