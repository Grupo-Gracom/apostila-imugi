@extends('layouts.template')
@section('titulo','Unit 16 | Vocabulary')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')

	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade16" data-etapa="vocabulary">
				<h3 class="barlow">UNIT 16</h3>
				<h5 class="barlow">1 - VOCABULARY</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/unit1/vocabulary/vocabulary.ogg') }}" type="audio/ogg">
				</audio>
				<h5 class="barlow" style="margin-top: 16px">A -  WORDS AND EXPRESSIONS</h5>
				<p>TO AGREE WITH /somebody / a friend</p>
				<p>TO KNOW / a person / something</p>
				<p>TO NEED / help / attention</p>
				<p>TO PLAN / a trip / on doing something</p>
				<p>TO SHARE / information / an apartment / love</p>
				<p>TO FEEL / sorry / comfortable / happy / sad / free</p>
				<h5 class="barlow" style="margin-top: 16px">B -  WORDS IN CONTEXT</h5>
				<ul class="lista-inline">
					<li><b>understood</b></li>
					<li><b>Kind</b></li>
					<li><b>Speechless</b></li>
					<li><b>Enjoyed</b></li>
					<li><b>Single</b></li>
					<li><b>Milestone</b></li>
					<li><b>Spoke</b></li>
					<li><b>knowledge</b></li>
					<li><b>Same</b></li>
					<li><b>skills</b></li>
				</ul>
			</div>
		</div>
	</main>
	<script>
        activeMenu();
    </script>

@endsection
