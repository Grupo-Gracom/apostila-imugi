@extends('layouts.template')
@section('titulo','Unit 6 | Vocabulary')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')

	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade6" data-etapa="vocabulary">
				<h3 class="barlow">UNIT 6</h3>
				<h5 class="barlow">1 - VOCABULARY</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/apostila2/UNIT 6/1. VOCABULARY/1. VOCABULARY.ogg') }}" type="audio/ogg">
				</audio>
				<h5 class="barlow" style="margin-top: 16px">A - PROFESSION RELATED VERBS.</h5>
				<ul class="lista-inline">
					<li><b>Save</b></li>
					<li><b>Copy</b></li>
					<li><b>Discuss</b></li>
					<li><b>Edit</b></li>
					<li><b>Cut</b></li>
					<li><b>Select</b></li>
					<li><b>Choose</b></li>
					<li><b>Apply</b></li>
					<li><b>Clip</b></li>
				</ul>
				<ul class="lista-inline">
					<li><b>Fade</b></li>
					<li><b>Zoom in</b></li>
					<li><b>Zoom in</b></li>
					<li><b>Rotate</b></li>
					<li><b>Circle</b></li>
					<li><b>Color</b></li>
					<li><b>Brainstorm</b></li>
				</ul>
				<h5 class="barlow" style="margin-top: 16px">B - ADJECTIVES X ADVERBS.</h5>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/apostila2/UNIT 6/1. VOCABULARY/2. VOCABULARY.ogg') }}" type="audio/ogg">
				</audio>
				<div class="clear"></div>
				<ul class="lista-inline">
					<li><b>Good</b></li>
					<li><b>Careful</b></li>
					<li><b>Perfect</b></li>
					<li><b>Probable</b></li>
					<li><b>Special</b></li>
					<li><b>Serious</b></li>
					<li><b>Absolute</b></li>
				</ul>
				<ul class="lista-inline">
					<li><b>Well</b></li>
					<li><b>Carefully</b></li>
					<li><b>Perfectly</b></li>
					<li><b>Probably</b></li>
					<li><b>Specially</b></li>
					<li><b>Seriously</b></li>
					<li><b>Absolutely</b></li>
				</ul>
				<ul class="lista-inline">
					<li><b>Terrible</b></li>
					<li><b>Terribly</b></li>
					<li><b>Completely</b></li>
					<li><b>Complete</b></li>
				</ul>
				<h5 class="barlow" style="margin-top: 16px">C - WORDS IN CONTEXT.</h5>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/apostila2/UNIT 6/1. VOCABULARY/3. VOCABULARY.ogg') }}" type="audio/ogg">
				</audio>
				<div class="clear"></div>
				<ul class="lista-inline">
					<li><b>Notes</b></li>
					<li><b>All set</b></li>
					<li><b>Ready</b></li>
					<li><b>Type</b></li>
					<li><b>Story board</b></li>
					<li><b>Shade</b></li>
					<li><b>Background</b></li>
					<li><b>Arrange</b></li>
					<li><b>Unfortunately</b></li>
				</ul>
			</div>
		</div>
	</main>
	<script>
        activeMenu();
    </script>

@endsection
