@extends('layouts.template')
@section('titulo','UNIMUGI | Home')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila1" data-unidade="unidade32" data-etapa="vocabulary">
				<h3 class="barlow">UNIT 32 - VICTOR’S REVIEW</h3>
				<p><b>Goal: </b>Talk To Students About An Overview Of Video Editing On Photoshop. Go Over All Of The Tools Studied.</p>
				<h5 class="barlow">1 - VOCABULARY</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/Unit32/Vocabulary/completo.ogg') }}" type="audio/ogg">
				</audio>
				<ul class="lista-inline">
					<li><b>WONDERFUL</b></li>
					<li><b>FAR</b></li>
					<li><b>WRAP UP</b></li>
					<li><b>ADJUSTMENT</b></li>
					<li><b>BRILLIANT</b></li>
					<li><b>LITTLE</b></li>
				</ul>
			</div>
		</div>
	</main>
	<script>
        activeMenu();
    </script>

@endsection
