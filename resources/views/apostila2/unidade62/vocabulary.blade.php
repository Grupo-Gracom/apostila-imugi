@extends('layouts.template')
@section('titulo','Unit 62 | Vocabulary')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade62" data-etapa="vocabulary">
			<h3 class="barlow">UNIT 62</h3>
			<h5 class="barlow">1 - VOCABULARY</h5>
			<span class="play-audio">( Aperte o play )</span>
			<audio controls="" controlslist="nodownload" class="suave">
				<source src="{{ asset('assets/audio/apostila2/UNIT 62/1. VOCABULARY/1. VOCABULARY.ogg') }}" type="audio/ogg">
			</audio>
			<h5 class="barlow" style="margin-top: 16px">A - WORDS AND EXPRESSIONS</h5>
			<div class="espacamento">
				<p><b>TO OPEN </b>/ your eyes / your mind / your heart / your arms</p>
				<p><b>TO SEE </b>/ a doctor / a film / a play</p>
				<p><b>TO SUBSCRIBE </b>/ to a newspaper / to a magazine / to a site / to a blog / to a Youtube channel</p>
			</div>

			<h5 class="barlow" style="margin-top: 32px">B - WORDS IN CONTEXT</h5>
			<audio controls="" controlslist="nodownload" class="suave">
				<source src="{{ asset('assets/audio/apostila2/UNIT 62/1. VOCABULARY/2. VOCABULARY.ogg') }}" type="audio/ogg">
			</audio>
			<ul class="lista-inline upper" style="margin-top: 16px">
				<li>
					<p><b>Together</b></p>
				</li>
				<li>
					<p><b>Detail</b></p>
				</li>
				<li>
					<p><b>Along</b></p>
				</li>
				<li>
					<p><b>Ourselves</b></p>
				</li>
				<li>
					<p><b>Paid</b></p>
				</li>
				<li>
					<p><b>Master</b></p>
				</li>
				<li>
					<p><b>Concepts</b></p>
				</li>
				<li>
					<p><b>Knowledge</b></p>
				</li>
			</ul>
		</div>
	</div>
</main>
<script>
	activeMenu();
</script>

@endsection