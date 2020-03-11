@extends('layouts.template')
@section('titulo','Unit 29 | Pronunciation')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade29" data-etapa="pronunciation">
				<h3 class="barlow">UNIT 29</h3>
				<h5 class="barlow">4 - PRONUNCIATION</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio29/Pronunciation/completo.ogg') }}" type="audio/ogg">
                </audio>
				<div class="clear"></div>
				<ul class="lista-inline">
					<li><b>ch sound /ʧ/</b></li>        
					<li>Much</li>	
					<li>Teach</li>
					<li>Watch</li>
					<li>Challenge</li>
					<li>Change</li>
					<li>Channel</li>
					<li>Choose</li>
					<li>Check</li>
				</ul>
				<ul class="lista-inline">
					<ol>The tea<b>ch</b>er is going to <b>ch</b>ange the <b>cha</b>llenge to <b>ch</b>eck how mu<b>ch</b> time students spend <b>choo</b>sing and wat<b>ch</b>ing youtube <b>cha</b>nnels.</ol>
				</ul>
				<div class="clear"></div>
			</div>
		</div>
    </main>
    <script>
        activeMenu();
    </script>

@endsection
