@extends('layouts.template')
@section('titulo','Unit 15 | Vocabulary')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade15" data-etapa="vocabulary">
			<h3 class="barlow">UNIT 15</h3>
			<h5 class="barlow">1 - VOCABULARY</h5>
			<span class="play-audio">( Aperte o play )</span>
			<audio controls="" controlslist="nodownload" class="suave">
				<source src="{{ asset('assets/audio/apostila2/UNIT 15/1. VOCABULARY/1. VOCABULARY.ogg') }}" type="audio/ogg">
			</audio>
			<div class="clear"></div>
			<h5 class="barlow" style="margin-top: 16px">A - ADJECTIVES FOR DESCRIBING PEOPLE</h5>
			<ul class="lista-inline upper" style="margin-top: 16px">
				<li>
					<p><b>Professional</b></p>
				</li>
				<li>
					<p><b>Competent</b></p>
				</li>
				<li>
					<p><b>Perfectionist</b></p>
				</li>
				<li>
					<p><b>Awesome</b></p>
				</li>
				<li>
					<p><b>Great</b></p>
				</li>
				<li>
					<p><b>Efficient</b></p>
				</li>
				<li>
					<p><b>Communicative</b></p>
				</li>
			</ul>
			<h5 class="barlow" style="margin-top: 16px">B - WORDS IN CONTEXT</h5>
			<audio controls="" controlslist="nodownload" class="suave">
				<source src="{{ asset('assets/audio/apostila2/UNIT 15/1. VOCABULARY/2. VOCABULARY.ogg') }}" type="audio/ogg">
			</audio>
			<div class="clear"></div>
			<ul class="lista-inline upper" style="margin-top: 16px">
				<li>
					<p><b>Level</b></p>
				</li>
				<li>
					<p><b>Reference</b></p>
				</li>
				<li>
					<p><b>Research</b></p>
				</li>
				<li>
					<p><b>Drawing</b></p>
				</li>
				<li>
					<p><b>When</b></p>
				</li>
				<li>
					<p><b>Discover</b></p>
				</li>
				<li>
					<p><b>Inspiring</b></p>
				</li>
				<li>
					<p><b>Hardworking</b></p>
				</li>
				<li>
					<p><b>courage</b></p>
				</li>
			</ul>
		</div>
	</div>
</main>
<script>
	activeMenu();
</script>

@endsection