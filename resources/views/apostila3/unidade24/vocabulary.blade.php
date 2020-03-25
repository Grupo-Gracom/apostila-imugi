@extends('layouts.template')
@section('titulo','Unit 24 | Vocabulary')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="apostila3" data-unidade="unidade24" data-etapa="vocabulary">
			<h3 class="barlow">UNIT 24</h3>
			<h5 class="barlow">1 - VOCABULARY</h5>
			<span class="play-audio">( Aperte o play )</span>
			<audio controls="" controlslist="nodownload" class="suave">
				<source src="{{ asset('assets/audio/apostila3/UNIT 24/1. VOCABULARY/1. VOCABULARY.ogg') }}" type="audio/ogg">
			</audio>
			<h5 class="barlow" style="margin-top: 32px">A - WORDS IN CONTEXT</h5>
			<ul class="lista-inline upper" style="margin-top: 16px">
				<li>
					<p><b>To share</b></p>
				</li>
				<li>
					<p><b>To plan</b></p>
				</li>
				<li>
					<p><b>To execute</b></p>
				</li>
				<li>
					<p><b>Together</b></p>
				</li>
				<li>
					<p><b>Jealous</b></p>
				</li>
				<li>
					<p><b>Worry</b></p>
				</li>
				<li>
					<p><b>Kidding</b></p>
				</li>
			</ul>
		</div>
	</div>
</main>
<script>
	activeMenu();
</script>

@endsection
