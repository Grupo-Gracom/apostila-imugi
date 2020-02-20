@extends('layouts.template')
@section('titulo','Unit 12 | Pronunciation')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila1" data-unidade="unidade12" data-etapa="pronunciation">
				<h3 class="barlow">UNIT 12 - TYPE TOOL & STYLE PANEL</h3>
				<h5 class="barlow">4 - PRONUNCIATION</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/Unit12/Pronunciation/completo.ogg') }}" type="audio/ogg">
                </audio>
                <div class="clear"></div>
                <h5 class="barlow" style="margin-top: 16px">A. Listen To Your Teacher And Repeat The Words. Notice The Difference In The Pronunciation Of Theunderlined Letters Between The Two Word Groups.</h5>
					<ul class="lista-inline">
						<li><b>THANKS</b></li>
						<li><b>WITH</b></li>
						<li><b>THINK</b></li>
					</ul>
					<ul class="lista-inline">
						<li><b>X</b></li>
					</ul>
					<ul class="lista-inline">
						<li><b>THAT</b></li>
						<li><b>THEY</b></li>
						<li><b>THIS</b></li>
					</ul>
				<h5 class="barlow" style="margin-top: 16px">B. Read The Sentence To Practice Pronunciation</h5>
				<p class="lower">“I think that they have this font with custom style.”</p>
			</div>
		</div>
    </main>
    <script>
        activeMenu();
    </script>

@endsection
