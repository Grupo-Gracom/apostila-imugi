@extends('layouts.template')
@section('titulo','Unit 56 | Pronunciation')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade56" data-etapa="pronunciation">
				<h3 class="barlow">UNIT 56</h3>
				<h5 class="barlow">4 - PRONUNCIATION</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/apostila2/UNIT 56/3. PRONUNCIATION/PRONUNCIATION.ogg') }}" type="audio/ogg">
				</audio>
				<div class="clear"></div>
				<ul class="lista-inline">
					<li><b>w sound</b> /w/ </li>        
					<li>Once</li>	
					<li>Watch</li>
					<li>While</li>
					<li>Quick</li>
					<li>Consequence</li>
					<li>Otherwise</li>
				</ul>
				<p style="margin-top:32px">
				While you watch the video quickly at least once I’ll check the subtitles. Otherwise the consequence is not gonna be good. 
				</p>
				<div class="clear"></div>
			</div>
		</div>
    </main>
    <script>
        activeMenu();
    </script>

@endsection
