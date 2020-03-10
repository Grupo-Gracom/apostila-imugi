@extends('layouts.template')
@section('titulo','Unit 20 | Vocabulary')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')

	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade20" data-etapa="vocabulary">
				<h3 class="barlow">UNIT 20</h3>
				<h5 class="barlow">1 - VOCABULARY</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/unit1/vocabulary/vocabulary.ogg') }}" type="audio/ogg">
				</audio>
				<h5 class="barlow" style="margin-top: 16px">A -  WORDS AND EXPRESSIONS</h5>
				<table class="espacamento">
					<tr>
						<td><p>TO SAY / a few words / nothing</p></td>
						<td><p>TO IGNORE / a person / an idea</p></td>
					</tr>
					<tr>
						<td><p>TO HATE/ people / things / to do things</p></td>
						<td><p>TO LOSE / control / something</p></td>
					</tr>
					<tr>
						<td><p>TO MAKE / a fuss/ a request / noise /</p></td>
						<td><p>TO LOVE / people / things / to do things</p></td>
					</tr>
				</table>
				<h5 class="barlow" style="margin-top: 16px">B -  WORDS IN CONTEXT</h5>
				<ul class="lista-inline">
					<li><b>I guess</b></li>
					<li><b>Decade</b></li>
					<li><b>Addicted</b></li>
					<li><b>Both</b></li>
					<li><b>Whole</b></li>
					<li><b>Hobby</b></li>
					<li><b>Amazed</b></li>
					<li><b>Diving</b></li>
					<li><b>World</b></li>
				</ul>
			</div>
		</div>
	</main>
	<script>
        activeMenu();
    </script>
@endsection
