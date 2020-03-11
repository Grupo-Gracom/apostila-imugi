@extends('layouts.template')
@section('titulo','Unit 19 | Vocabulary')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')

	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade19" data-etapa="vocabulary">
				<h3 class="barlow">UNIT 19</h3>
				<h5 class="barlow">1 - VOCABULARY</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/apostila2/UNIT 19/1. VOCABULARY/1. VOCABULARY.ogg') }}" type="audio/ogg">
				</audio>
				<div class="clear"></div>
				<h5 class="barlow" style="margin-top: 16px">A -  WORDS AND EXPRESSIONS</h5>
				<table class="espacamento">
					<tr>
						<td><p>TO BEGIN / with / by doing something</p></td>
						<td><p>TO PREPARE/ a meal / a report</p></td>
					</tr>
					<tr>
						<td><p>TO START / a relationship / a game / talking</p></td>
						<td><p>TO STOP /dancing / smoking</p></td>
					</tr>
					<tr>
						<td><p>TO TRAVEL/ alone / by yourself / with friends</p></td>
						<td><p>TO LIVE / alone / by yourself</p></td>
					</tr>
				</table>
				<h5 class="barlow" style="margin-top: 16px">B -  WORDS IN CONTEXT</h5>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/apostila2/UNIT 19/1. VOCABULARY/2. VOCABULARY.ogg') }}" type="audio/ogg">
				</audio>
				<ul class="lista-inline">
					<li><b>See</b></li>
					<li><b>Worldwide</b></li>
					<li><b>Kidding</b></li>
					<li><b>Terrific</b></li>
					<li><b>So far</b></li>
					<li><b>scratch</b></li>
					<li><b>Release</b></li>
					<li><b>Astonished</b></li>
					<li><b>Chance</b></li>
				</ul>
			</div>
		</div>
	</main>
	<script>
        activeMenu();
    </script>

@endsection
