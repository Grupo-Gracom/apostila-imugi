@extends('layouts.template')
@section('titulo','Unit 4 | Vocabulary')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')

	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade4"  data-etapa="vocabulary">

				<h3 class="barlow">UNIT 04</h3>
				<h5 class="barlow">1 - VOCABULARY</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/unit1/vocabulary/vocabulary.ogg') }}" type="audio/ogg">
				</audio>
				<h5 class="barlow" style="margin-top: 16px">A - ADVERBS OF FREQUENCY</h5>

				<ul class="lista-inline">
					<li><b>ALWAYS</b></li>
					<li><b>ALMOST ALWAYS</b></li>
					<li><b>USUALLY</b></li>
					<li><b>FREQUENTLY</b></li>
					<li><b>SOMETIMES</b></li>
					<li><b>RARELY</b></li>
					<li><b>HARDLY EVER</b></li>
					<li><b>NEVER</b></li>
				</ul>

				<h5 class="barlow" style="margin-top: 16px">B - GIVING YOUR OPINION</h5>

				<ul class="lista-inline">
					<li><b>I THINK</b></li>
					<li><b>I BELIEVE</b></li>
					<li><b>I GUESS</b></li>
                    <li><b>IN MY OPINION</b></li>
				</ul>

				<h5 class="barlow" style="margin-top: 16px">C - NAVIGATION / ORIENTATION VOCABULARY</h5>

                <p>IMAGENS</p>

                <h5 class="barlow" style="margin-top: 16px">D - WORDS IN CONTEXT</h5>

				<ul class="lista-inline">
					<li><b>IMPROVE</b></li>
					<li><b>KNOWLEDGE</b></li>
					<li><b>DEVELOPMENT</b></li>
					<li><b>DOUBTS</b></li>
					<li><b>RELATED</b></li>
					<li><b>ALSO</b></li>
					<li><b>POST</b></li>
					<li><b>CAN</b></li>
                    <li><b>REVIEW</b></li>
				</ul>

			</div>
		</div>
	</main>
	<script>
        activeMenu();
    </script>

@endsection
