@extends('layouts.template')
@section('titulo','UNIMUGI | Home')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-unidade="unidade17" data-etapa="pronunciation">
				<h3 class="barlow">UNIT 16 - Akira’S STUDENTS</h3>
				<h5 class="barlow">4 - PRONUNCIATION</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/Unit16/Pronunciation/completo.ogg') }}" type="audio/ogg">
                </audio>
                <div class="clear"></div> <br>                
                <div class="clear"></div>
                <h5 class="barlow" style="margin-top: 16px">A - OBSERVE THE DIFFERENCE IN THE PRONOUNCIATION OF LETTERS “P” AND “B”.</h5>
				<ul class="lista-inline">
					<li><b>PUT</b></li>
					<li><b>UP</b></li>
					<li><b>PAIN</b></li>
					<li><b>LAP</b></li>
					<li><b>PEN</b></li>
					<li><b>TAP</b></li>					
				</ul>
				<ul class="lista-inline">					
					<li><b>BUT</b></li>
					<li><b>JOB</b></li>
					<li><b>BALL</b></li>
					<li><b>RUB</b></li>
					<li><b>BURN</b></li>
					<li><b>CURB</b></li>
				</ul>                
			</div>
		</div>
    </main>
    <script>
        activeMenu();
    </script>

@endsection
