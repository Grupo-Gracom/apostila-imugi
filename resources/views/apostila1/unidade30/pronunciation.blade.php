@extends('layouts.template')
@section('titulo','Unit 30 | Pronunciation')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila1" data-unidade="unidade30" data-etapa="pronunciation">
				<h3 class="barlow">UNIT 30 - VIDEO EFFECTS</h3>
				<h5 class="barlow">4 - PRONUNCIATION</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio30/Pronunciation/completo.ogg') }}" type="audio/ogg">
                </audio>
				<div class="clear"></div>
				
                <h5 class="barlow" style="margin-top: 16px">A. Observe The Difference In Pronunciation Between The Sounds Of “M” And “N”. Touch Your Lips To Pronounce “M”.</h5>
				<ul class="lista-inline">
					<li><b>MAN</b></li>
					<li><b>GUN</b></li>
					<li><b>SUN</b></li>
				</ul>
				<ul class="lista-inline">
					<li><b>MA’AM</b></li>
					<li><b>GUM</b></li>
					<li><b>SUM</b></li>
				</ul>
				<div class="clear"></div>
			</div>
		</div>
    </main>
    <script>
        activeMenu();
    </script>

@endsection
