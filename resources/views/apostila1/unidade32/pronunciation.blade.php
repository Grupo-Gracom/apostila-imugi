@extends('layouts.template')
@section('titulo','UNIMUGI | Home')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-unidade="unidade32" data-etapa="pronunciation">
				<h3 class="barlow">UNIT 32 - VICTOR’S REVIEW</h3>
				<h5 class="barlow">4 - PRONUNCIATION</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio32/Pronunciation/completo.ogg') }}" type="audio/ogg">
                </audio>
				<div class="clear"></div>
				
                <h5 class="barlow" style="margin-top: 16px">A. Practice The Pronunciation Of The Letter D In The Beginning And Middle Of Words.</h5>
				<ul class="lista-inline">
					<li><b>DAY</b></li>
					<li><b>WEDDING</b></li>	
					<li><b>DATE</b></li>
					<li><b>VIDEO</b></li>
					<li><b>DOLL</b></li>
					<li><b>DEDICATION</b></li>
				</ul>
				<div class="clear"></div>
			</div>
		</div>
    </main>
    <script>
        activeMenu();
    </script>

@endsection
