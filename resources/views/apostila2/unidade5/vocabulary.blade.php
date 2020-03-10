@extends('layouts.template')
@section('titulo','Unit 5 | Vocabulary')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')

	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade5"  data-etapa="vocabulary">

				<h3 class="barlow">UNIT 05</h3>
				<h5 class="barlow">1 - VOCABULARY</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/apostila2/UNIT 5/1. VOCABULARY/1. VOCABULARY.ogg') }}" type="audio/ogg">
				</audio>
				<div class="clear"></div>
				<h5 class="barlow" style="margin-top: 16px">A - SEQUENCE WORDS/EXPRESSIONS</h5>

				<ul class="lista-inline">
					<li><b>FIRST</b></li>
					<li><b>SECOND</b></li>
					<li><b>NEXT</b></li>
					<li><b>BEFORE AFTER THAT</b></li>
					<li><b>THEN</b></li>
					<li><b>IN THE END</b></li>
					<li><b>FINALLY</b></li>
				</ul>

				<h5 class="barlow" style="margin-top: 16px">B - CLARIFYNG SENTENCES</h5>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/apostila2/UNIT 5/1. VOCABULARY/2. VOCABULARY.mp3') }}" type="audio/mp3">
				</audio>
				<div class="clear"></div>

				<table class="metade">
					<tr>
						<td><p>What do you wanna mean?</p></td>
						<td><p>Can/Could you repeat please?</p></td>
					</tr>
					<tr>
						<td><p>I don’t get it. Could you explain again?</p></td>
						<td><p>I didn’t get / understand.</p></td>
					</tr>
				</table>

				<h5 class="barlow" style="margin-top: 16px">C - COMMON ADVERBS</h5>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/apostila2/UNIT 5/1. VOCABULARY/3. VOCABULARY.mp3') }}" type="audio/mp3">
				</audio>
				<div class="clear"></div>

				<ul class="lista-inline">
					<li><b>WELL</b></li>
					<li><b>CAREFULLY</b></li>
					<li><b>PERFECTLY</b></li>
					<li><b>PROBABLY</b></li>
					<li><b>SPECIALLY</b></li>
					<li><b>SERIOUSLY</b></li>
					<li><b>ABSOLUTELY</b></li>
					<li><b>TERRIBLY</li>
                    <li><b>COMPLETELY</b></li>
				</ul>

                <h5 class="barlow" style="margin-top: 16px">D - WORDS IN CONTEXT</h5>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/apostila2/UNIT 5/1. VOCABULARY/4. VOCABULARY.mp3') }}" type="audio/mp3">
				</audio>
				<div class="clear"></div>
				
				<ul class="lista-inline">
					<li><b>TIPS</b></li>
					<li><b>SHARE</b></li>
					<li><b>MEAN</b></li>
					<li><b>STEPS</b></li>
					<li><b>NEED</b></li>
					<li><b>OPTIMIZE</b></li>
					<li><b>SEND</b></li>
					<li><b>MEETING</b></li>
                    <li><b>UNFORTUNATELY</b></li>
				</ul>

			</div>
		</div>
	</main>
	<script>
        activeMenu();
    </script>

@endsection
