@extends('layouts.template')
@section('titulo','UNIMUGI | Home')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade2"  data-etapa="vocabulary">

				<h3 class="barlow">UNIT 02</h3>
				<h5 class="barlow">1 - VOCABULARY</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/unit1/vocabulary/vocabulary.ogg') }}" type="audio/ogg">
				</audio>
				<h5 class="barlow" style="margin-top: 16px">A - NATIONALITIES</h5>

				<ul class="lista-inline">
					<li><b>Brazilian</b></li>
					<li><b>American</b></li>
					<li><b>Canadian</b></li>
					<li><b>Chinese</b></li>
					<li><b>Japanese</b></li>
					<li><b>French</b></li>
					<li><b>Spanish</b></li>
					<li><b>Colombian</b></li>
				</ul>

				<h5 class="barlow" style="margin-top: 16px">B - PROFESSIONS</h5>
				
				<ul class="lista-inline">
					<li><b>Web designer</b></li>
					<li><b>Youtuber</b></li>
					<li><b>Teacher</b></li>
					<li><b>Editor</b></li>
					<li><b>Video Maker</b></li>
					<li><b>Illustrator</b></li>
					<li><b>programmer</b></li>
					<li><b>drawer</b></li>
				</ul>

				<h5 class="barlow" style="margin-top: 16px">C - WORDS IN CONTEXT</h5>
				
				<ul class="lista-inline">
					<li><b>Introduce</b></li>
					<li><b>Interview</b></li>
					<li><b>Full Name</b></li>
					<li><b>Guys</b></li>
					<li><b>Turn</b></li>
					<li><b>Tell</b></li>
					<li><b>Feel</b></li>
					<li><b>know</b></li>
				</ul>
				
			</div>
		</div>
	</main>
	<script>
        activeMenu();
    </script>

@endsection
