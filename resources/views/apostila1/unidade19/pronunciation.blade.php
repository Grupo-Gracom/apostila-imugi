@extends('layouts.template')
@section('titulo','UNIMUGI | Home')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-unidade="unidade19" data-etapa="pronunciation">
				<h3 class="barlow">UNIT 19 - TEXT FORMATING</h3>
				<h5 class="barlow">4 - PRONUNCIATION</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/Unit19/Pronunciation/completo.ogg') }}" type="audio/ogg">
                </audio>
                <div class="clear"></div> <br>                
                <div class="clear"></div>
                <h5 class="barlow" style="margin-top: 16px">A - Notice How The Letters “Ch” Sometimes Has Two Different Pronounciations.</h5>
				<ul class="lista-inline">
					<li><b>CHAT </b></li>
					<li><b>CHIP </b></li>
					<li><b>RICH </b></li>
					<li><b>BEACH </b></li>
					<li><b>PITCH</b></li>		                    										
				</ul>
				<p><b class="versus">X</b></p>
				<ul class="lista-inline">
					<li><b>CHARACTER</b></li>
					<li><b>MECHANIC</b></li>
					<li><b>CHEMISTRY</b></li>	                    										
				</ul>												                
			</div>
		</div>
    </main>
    <script>
        activeMenu();
    </script>

@endsection
