@extends('layouts.template')
@section('titulo','UNIMUGI | Home')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila1" data-unidade="unidade20" data-etapa="pronunciation">
				<h3 class="barlow">UNIT 20 - Akira’S REVIEW</h3>
				<h5 class="barlow">4 - PRONUNCIATION</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/Unit20/Pronunciation/completo.ogg') }}" type="audio/ogg">
                </audio>
                <div class="clear"></div> <br>                
                <div class="clear"></div>
                <h5 class="barlow" style="margin-top: 16px">A - Practice The Pronounciation Of The Contractions Of The Verb To Be.</h5>
				<ul class="lista-inline">
					<li><b>I AM</b></li>
					<li><b>YOU ARE</b></li>
					<li><b>WE ARE</b></li>
					<li><b>THEY ARE</b></li>
					<li><b>HE IS</b></li>		                    										
					<li><b>SHE IS</b></li>		                    										
					<li><b>IT IS</b></li>	                    										
				</ul>
				<ul class="lista-inline">
					<li><b>I’M</b></li>
					<li><b>YOU’RE</b></li>
					<li><b>WE’RE</b></li>
					<li><b>THEY’RE</b></li>
					<li><b>HE’S</b></li>		                    										
					<li><b>SHE’S</b></li>		                    										
					<li><b>IT’S</b></li>	                    										
				</ul>												                
			</div>
		</div>
    </main>
    <script>
        activeMenu();
    </script>

@endsection
