@extends('layouts.template')
@section('titulo','UNIMUGI | Home')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila1" data-unidade="unidade15" data-etapa="listening">
				<h3 class="barlow">UNIT 15 -  LAYER STYLE</h3>
                <h5 class="barlow">5 - LISTENING</h5>
                <span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/Unit15/Listening/completo.ogg') }}" type="audio/ogg">
                </audio>
                <div class="clear"></div>
                <div style="margin-top: 36px">
                    <p>
                        <b>Web</b> Disigners Need The <b>Tools</b> In Photoshop To <b>Develop</b> Layouts For Websites. Webpage
                        <b>Layouts</b> Need To Have A Header, Publication Area, Background, Menu Bars And More. All
                        Of These Can <b>Be</b> Created With Photoshop.
                    </p>
                </div>
			</div>
		</div>
    </main>
    <script>
        activeMenu();
    </script>

@endsection
