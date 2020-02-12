@extends('layouts.template')
@section('titulo','UNIMUGI | Home')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-unidade="unidade4" data-etapa="pronunciation">
				<h3 class="barlow">UNIT 04 - NICE TO MEET YOU, KATE!</h3>
				<h5 class="barlow">4 - PRONUNCIATION</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/Unit4/Pronuciation/completo.ogg') }}" type="audio/ogg">
                </audio>
                <div class="clear"></div>
                <h5 class="barlow" style="margin-top: 16px">A. Observe that the letter 'E' is not pronounced at the end of words.</h5>
                <ul class="lista-inline">
					<li><b>LIKE</b></li>
					<li><b>NICE</b></li>
					<li><b>HAVE</b></li>
					<li><b>LOVE</b></li>
					<li><b>MAKE</b></li>
					<li><b>HERE</b></li>
                </ul>
                <h5 class="barlow" style="margin-top: 16px">B. Read the sentence below to practice the pronunciation of words ending in ‘E’.</h5>
                <ul class="lista-inline">
                    <p>“These are my friends Kate and Kyle.”</p>
                </ul>
			</div>
		</div>
    </main>
    <script>
        activeMenu();
    </script>

@endsection