@extends('layouts.template')
@section('titulo','Unit 22 | Vocabulary')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')

	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade22"  data-etapa="vocabulary">

				<h3 class="barlow">UNIT 22</h3>
				<h5 class="barlow">1 - VOCABULARY</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/apostila2/UNIT 22/1. VOCABULARY/1. VOCABULARY.ogg') }}" type="audio/ogg">
				</audio>
				<h5 class="barlow" style="margin-top: 16px">A - WORDS AND EXPRESSIONS</h5>

				<p>TO DRINK / water / juice / soft drink / tea / milk / coffee / alcoholic beverages</p>
				<p>TO EAT / a lot / like kings</p>
				<p>TO GO / home / to work / to school / to the club / to the church / shopping / camping / dancing</p>

				<h5 class="barlow" style="margin-top: 16px">B - WORDS IN CONTEXT</h5>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/apostila2/UNIT 22/1. VOCABULARY/2. VOCABULARY.ogg') }}" type="audio/ogg">
				</audio>
				<ul class="lista-inline">
					<li><b>BEST</b></li>
					<li><b>DRAW</b></li>
					<li><b>DIGITIZE</b></li>
					<li><b>FELL IN LOVE</b></li>
					<li><b>ADD</b></li>
					<li><b>TREAT</b></li>
					<li><b>IMPROVED</b></li>
					<li><b>COUNT ON</li>
				</ul>

			</div>
		</div>
	</main>
	<script>
        activeMenu();
    </script>

@endsection
