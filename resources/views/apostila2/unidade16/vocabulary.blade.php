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
				<source src="{{ asset('assets/audio/apostila2/UNIT 16/1. VOCABULARY/1. VOCABULARY.ogg') }}" type="audio/ogg">
			</audio>
			<div class="clear"></div>
			<h5 class="barlow" style="margin-top: 16px">A - WORDS AND EXPRESSIONS</h5>
			<div class="espacamento">
				<p><b>TO AGREE WITH </b>/somebody / a friend</p>
				<p><b>TO KNOW </b>/ a person / something</p>
				<p><b>TO NEED </b>/ help / attention</p>
				<p><b>TO PLAN </b>/ a trip / on doing something</p>
				<p><b>TO SHARE </b>/ information / an apartment / love</p>
				<p><b>TO FEEL </b>/ sorry / comfortable / happy / sad / free</p>
			</div>
			<h5 class="barlow" style="margin-top: 16px">B - WORDS IN CONTEXT</h5>
			<audio controls="" controlslist="nodownload" class="suave">
				<source src="{{ asset('assets/audio/apostila2/UNIT 16/1. VOCABULARY/2. VOCABULARY.ogg') }}" type="audio/ogg">
			</audio>
			<div class="clear"></div>
			<ul class="lista-inline upper" style="margin-top:16px">
				<li>
					<p><b>understood</b></p>
				</li>
				<li>
					<p><b>Kind</b></p>
				</li>
				<li>
					<p><b>Speechless</b></p>
				</li>
				<li>
					<p><b>Enjoyed</b></p>
				</li>
				<li>
					<p><b>Single</b></p>
				</li>
				<li>
					<p><b>Milestone</b></p>
				</li>
				<li>
					<p><b>Spoke</b></p>
				</li>
				<li>
					<p><b>knowledge</b></p>
				</li>
				<li>
					<p><b>Same</b></p>
				</li>
				<li>
					<p><b>skills</b></p>
				</li>
			</ul>
		</div>
	</div>
</main>
<script>
	activeMenu();
</script>

@endsection