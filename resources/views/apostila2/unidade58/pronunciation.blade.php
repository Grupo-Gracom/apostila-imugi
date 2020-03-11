@extends('layouts.template')
@section('titulo','Unit 58 | Pronunciation')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade58" data-etapa="pronunciation">
				<h3 class="barlow">UNIT 58</h3>
				<h5 class="barlow">4 - PRONUNCIATION</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio58/Pronunciation/completo.ogg') }}" type="audio/ogg">
                </audio>
				<div class="clear"></div>
				<ul class="lista-inline">
					<li><b>z sound</b> /z/ </li>        
					<li>Zoom</li>	
					<li>Zone</li>
					<li>Busy</li>
					<li>Visit</li>
					<li>Cause</li>
					<li>Because</li>
				</ul>
				<p style="margin-top:32px">Because of the zoom zone, people are busy visiting the galleries.</p>
				<div class="clear"></div>
			</div>
		</div>
    </main>
    <script>
        activeMenu();
    </script>

@endsection
