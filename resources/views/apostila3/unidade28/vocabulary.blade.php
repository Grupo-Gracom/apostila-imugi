@extends('layouts.template')
@section('titulo','Unit 28 | Vocabulary')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="apostila3" data-unidade="unidade28" data-etapa="vocabulary">
			<h3 class="barlow">UNIT 28</h3>
			<h5 class="barlow">1 - VOCABULARY</h5>
			<span class="play-audio">( Aperte o play )</span>
			<audio controls="" controlslist="nodownload" class="suave">
                <source src="{{ asset('assets/audio/apostila3/LESSON 28/01_VOCABULARY/VOCABULARY_28.mp3') }}" type="audio/mp3">
            </audio>
            <div class="clear"></div>
			<h5 class="barlow" style="margin-top: 32px">A - WORDS IN CONTEXT</h5>
			<ul class="lista-inline upper" style="margin-top: 16px">
				<li>
					<p><b>So far</b></p>
				</li>
				<li>
					<p><b>Meaningful</b></p>
				</li>
				<li>
					<p><b>Go ahead</b></p>
				</li>
				<li>
					<p><b>Ready</b></p>
				</li>
			</ul>
			<ul class="lista-inline upper" style="margin-top: 16px">
				<li>
					<p><b>Proud</b></p>
				</li>
				<li>
					<p><b>Sense</b></p>
				</li>
				<li>
					<p><b>Certainly</b></p>
				</li>
				<li>
					<p><b>heard</b></p>
				</li>
			</ul>
		</div>
	</div>
</main>
<script>
	activeMenu();
</script>

@endsection
