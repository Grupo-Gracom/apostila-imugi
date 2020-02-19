@extends('layouts.template')
@section('titulo','UNIMUGI | Home')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila1" data-unidade="unidade14" data-etapa="vocabulary">
				<h3 class="barlow">UNIT 14 - COLOR TOOLS & TYPOGRAPHY TOOLS REVIEW</h3>
				<h5 class="barlow">1 - VOCABULARY</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/Unit14/Vocabulary/completo.ogg') }}" type="audio/ogg">
				</audio>
				<ul class="lista-inline">
					<li><b>ABOUT</b></li>
					<li><b>REVIEW</b></li>
					<li><b>REMEMBER</b></li>
					<li><b>OTHER</b></li>
					<li><b>SAVE</b></li>
					<li><b>GIVE</b></li>
					<li><b>FORGET</b></li>
				</ul>
			</div>
		</div>
	</main>
	<script>
        activeMenu();
    </script>

@endsection
