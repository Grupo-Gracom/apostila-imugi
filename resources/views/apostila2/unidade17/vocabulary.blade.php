@extends('layouts.template')
@section('titulo','Unit 17 | Vocabulary')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')

	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade17" data-etapa="vocabulary">
				<h3 class="barlow">UNIT 17</h3>
				<h5 class="barlow">1 - VOCABULARY</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/unit1/vocabulary/vocabulary.ogg') }}" type="audio/ogg">
				</audio>
				<h5 class="barlow" style="margin-top: 16px">A -  WORDS AND EXPRESSIONS</h5>
				<table class="espacamento">
					<tr>
						<td><p>TO WAIT FOR /somebody /an opportunity</p></td>
						<td><p>TO CHANGE / opinion / attitude</p></td>
					</tr>
					<tr>
						<td><p>TO CREATE / questions / problems</p></td>
						<td><p>TO GET / excited / nervous / stressed / a bus</p></td>
					</tr>
					<tr>
						<td><p>TO UNDERSTAND / a question / a problem</p></td>
						<td><p>TO WANT / something badly</p></td>
					</tr>
				</table>
				<h5 class="barlow" style="margin-top: 16px">B -  WORDS IN CONTEXT</h5>
				<ul class="lista-inline">
					<li><b>Crossing </b></li>
					<li><b>Sharing </b></li>
					<li><b>Becoming </b></li>
					<li><b>Fan </b></li>
					<li><b>Leaving </b></li>
					<li><b>Sick </b></li>
					<li><b>Incident </b></li>
					<li><b>Meet</b></li>
				</ul>
			</div>
		</div>
	</main>
	<script>
        activeMenu();
    </script>

@endsection
