@extends('layouts.template')
@section('titulo','UNIMUGI | Home')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-unidade="unidade14" data-etapa="pronunciation">
				<h3 class="barlow">UNIT 14 - COLOR TOOLS & TYPOGRAPHY TOOLS REVIEW</h3>
				<h5 class="barlow">4 - PRONUNCIATION</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/Unit14/Pronunciation/completo.ogg') }}" type="audio/ogg">
                </audio>
				<div class="clear"></div>
                <h5 class="barlow" style="margin-top: 16px">A. Observe The Difference In Pronounciation Between The Letters “Oo” And “U”.</h5>
				<ul class="lista-inline">
					<li><b>BOOT</b></li>
					<li><b>MOOD</b></li>
					<li><b>HOOT</b></li>
				</ul>
				<ul class="lista-inline">
					<li><b>X</b></li>
				</ul>
				<ul class="lista-inline">
					<li><b>BUT</b></li>
					<li><b>MUD</b></li>
					<li><b>HUT</b></li>
				</ul>
				<div class="clear"></div>
			</div>
		</div>
    </main>
    <script>
        activeMenu();
    </script>

@endsection
