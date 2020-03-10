@extends('layouts.template')
@section('titulo','Unit 21 | Vocabulary')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')

	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade21"  data-etapa="vocabulary">

				<h3 class="barlow">UNIT 21</h3>
				<h5 class="barlow">1 - VOCABULARY</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/unit1/vocabulary/vocabulary.ogg') }}" type="audio/ogg">
				</audio>
				<h5 class="barlow" style="margin-top: 16px">A - WORDS AND EXPRESSIONS</h5>

				<p>TO BRUSH / your hair / your teeth</p>
				<p>TO DO / your best / the right-wrong thing</p>
				<p>TO COMB / your hair</p>

				<h5 class="barlow" style="margin-top: 16px">B - WORDS IN CONTEXT</h5>

				<ul class="lista-inline">
					<li><b>CAME</b></li>
					<li><b>CHILDHOOD</b></li>
					<li><b>A LOT</b></li>
					<li><b>TOGETHER</b></li>
					<li><b>YOUNGER</b></li>
					<li><b>ALL DAY LONG</b></li>
					<li><b>KIND OF</b></li>
					<li><b>LOOK FOR</li>
				</ul>

			</div>
		</div>
	</main>
	<script>
        activeMenu();
    </script>

@endsection
