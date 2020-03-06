@extends('layouts.template')
@section('titulo','UNIMUGI | Home')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade61" data-etapa="vocabulary">
				<h3 class="barlow">UNIT 61</h3>
				<h5 class="barlow">1 - VOCABULARY</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/Unit61/Vocabulary/completo.ogg') }}" type="audio/ogg">
				</audio>
				<h5 class="barlow" style="margin-top: 16px">A -  WORDS AND EXPRESSIONS</h5>
				<ul class="lista-inline">
					<ol><b>TO SELECT / an option / someone / something / somebody to do something</b></ol>
				</ul>
				<ul class="lista-inline">
					<ol><b>TO FIND / it difficult – easy / your way</b></ol>
				</ul>
				<ul class="lista-inline">
					<ol><b>TO MARRY / a man / a woman / late / </b></ol>
				</ul>

				<h5 class="barlow" style="margin-top: 32px">B -  WORDS IN CONTEXT</h5>
				<div style="margin-top: 36px">
					<ul class="lista-inline">
						<li><b>Aware</b></li>
						<li><b>Took</b></li>
						<li><b>Whole</b></li>
						<li><b>Missed</b></li>
						<li><b>Grow</b></li>
						<li><b>Position</b></li>
						<li><b>Realized</b></li>
						<li><b>Touch</b></li>
					</ul>
				</div>
			</div>
		</div>
	</main>
	<script>
        activeMenu();
    </script>

@endsection
