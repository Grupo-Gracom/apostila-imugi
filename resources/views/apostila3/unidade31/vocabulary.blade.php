@extends('layouts.template')
@section('titulo','Unit 31 | Vocabulary')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="apostila3" data-unidade="unidade31" data-etapa="vocabulary">
			<h3 class="barlow">UNIT 31</h3>
			<h5 class="barlow">1 - VOCABULARY</h5>
			<span class="play-audio">( Aperte o play )</span>
			<audio controls="" controlslist="nodownload" class="suave">
				<source src="{{ asset('assets/audio/apostila3/UNIT 31/1. VOCABULARY/1. VOCABULARY.ogg') }}" type="audio/ogg">
			</audio>
			<h5 class="barlow" style="margin-top: 32px">A - WORDS IN CONTEXT</h5>
			<ul class="lista-inline upper" style="margin-top: 16px">
				<li>
					<p><b>Subject</b></p>
				</li>
				<li>
					<p><b>Big Data</b></p>
				</li>
				<li>
					<p><b>Field</b></p>
				</li>
				<li>
					<p><b>Deeper</b></p>
				</li>
			</ul>
			<ul class="lista-inline upper" style="margin-top: 16px">
				<li>
					<p><b>Major</b></p>
				</li>
				<li>
					<p><b>Increase</b></p>
				</li>
				<li>
					<p><b>Customer</b></p>
				</li>
				<li>
					<p><b>Source</b></p>
				</li>
			</ul>
		</div>
	</div>
</main>
<script>
	activeMenu();
</script>

@endsection
