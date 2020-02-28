@extends('layouts.template')
@section('titulo','UNIMUGI | Home')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade30" data-etapa="pronunciation">
				<h3 class="barlow">UNIT 30</h3>
				<h5 class="barlow">4 - PRONUNCIATION</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio30/Pronunciation/completo.ogg') }}" type="audio/ogg">
                </audio>
				<div class="clear"></div>
				<ul class="lista-inline">
					<li><b>sh sound /ʃ/</b></li>        
					<li>She</li>	
					<li>Show</li>
					<li>Special</li>
					<li>Emotion</li>
					<li>Finish</li>
					<li>Publish</li>
				</ul>
				<ul class="lista-inline">
				<b>Sh</b>e <b>sh</b>ows a spe<b>c</b>ial emo<b>ti</b>on when <b>sh</b>e fini<b>sh</b>es and publi<b>sh</b>es her articles.
				</ul>
				<div class="clear"></div>
			</div>
		</div>
    </main>
    <script>
        activeMenu();
    </script>

@endsection
