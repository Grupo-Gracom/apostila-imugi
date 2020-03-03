@extends('layouts.template')
@section('titulo','UNIMUGI | Home')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade23"  data-etapa="vocabulary">

				<h3 class="barlow">UNIT 23</h3>
				<h5 class="barlow">1 - VOCABULARY</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/unit1/vocabulary/vocabulary.ogg') }}" type="audio/ogg">
				</audio>
				<h5 class="barlow" style="margin-top: 16px">A - WORDS AND EXPRESSIONS</h5>

				<p>TO KISS / somebody / cheeks / hands</p>
				<p>TO PICK / the nose / on somebody / up somebody</p>
				<p>TO READ / a book / the newspaper / a magazine / a comic book / a blog</p>

				<h5 class="barlow" style="margin-top: 16px">B - WORDS IN CONTEXT</h5>

				<ul class="lista-inline">
					<li><b>STUFF</b></li>
					<li><b>MATTER</b></li>
					<li><b>REARRANGE</b></li>
					<li><b>FITS</b></li>
					<li><b>CORNER</b></li>
					<li><b>CHANGE</b></li>
					<li><b>PLUG</b></li>
					<li><b>SET UP</li>
					<li><b>FIND OUT</b></li>
				</ul>							
				
			</div>
		</div>
	</main>
	<script>
        activeMenu();
    </script>

@endsection
