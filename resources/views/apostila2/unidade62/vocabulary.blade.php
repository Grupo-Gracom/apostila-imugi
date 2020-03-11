@extends('layouts.template')
@section('titulo','UNIMUGI | Home')
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
				<h5 class="barlow" style="margin-top: 16px">A -  WORDS AND EXPRESSIONS</h5>
				<ul class="lista-inline">
					<ol><b>TO OPEN / your eyes / your mind / your heart / your arms</b></ol>
				</ul>
				<ul class="lista-inline">
					<ol><b>TO SEE / a doctor / a film / a play</b></ol>
				</ul>
				<ul class="lista-inline">
					<ol><b>TO SUBSCRIBE / to a newspaper / to a magazine / to a site / to a blog / to a Youtube channel</b></ol>
				</ul>

				<h5 class="barlow" style="margin-top: 32px">B -  WORDS IN CONTEXT</h5>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/apostila2/UNIT 62/1. VOCABULARY/2. VOCABULARY.ogg') }}" type="audio/ogg">
				</audio>
				<div style="margin-top: 36px">
					<ul class="lista-inline">
						<li><b>Together</b></li>
						<li><b>Detail</b></li>
						<li><b>Along</b></li>
						<li><b>Ourselves</b></li>
						<li><b>Paid</b></li>
						<li><b>Master</b></li>
						<li><b>Concepts</b></li>
						<li><b>Knowledge</b></li>
					</ul>
				</div>
			</div>
		</div>
	</main>
	<script>
        activeMenu();
    </script>

@endsection
