@extends('layouts.template')
@section('titulo','Unit 18 | Vocabulary')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')

	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade18" data-etapa="vocabulary">
				<h3 class="barlow">UNIT 18</h3>
				<h5 class="barlow">1 - VOCABULARY</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/unit1/vocabulary/vocabulary.ogg') }}" type="audio/ogg">
				</audio>
				<h5 class="barlow" style="margin-top: 16px">A -  WORDS AND EXPRESSIONS</h5>
				<table class="espacamento">
					<tr>
						<td><p>TO PUT /things in order</p></td>
						<td><p>TO DO / your best / the right-wrong thing</p></td>
					</tr>
					<tr>
						<td><p>TO LOOK / carefully /careleesly</p></td>
						<td><p>TO STUDY / hard/ a lot /for hours</p></td>
					</tr>
					<tr>
						<td><p>TO SPEAK / fast / slowly / low / loud</p></td>
						<td><p>TO BECOME / a better person / good friends</p></td>
					</tr>
				</table>
				<h5 class="barlow" style="margin-top: 16px">B -  WORDS IN CONTEXT</h5>
				<ul class="lista-inline">
					<li><b>Modeling</b></li>
					<li><b>Soundtrack</b></li>
					<li><b>Showed</b></li>
					<li><b>Mixing</b></li>
					<li><b>Own</b></li>
					<li><b>While</b></li>
					<li><b>Booth</b></li>
					<li><b>tricks</b></li>
				</ul>
			</div>
		</div>
	</main>
	<script>
        activeMenu();
    </script>

@endsection
