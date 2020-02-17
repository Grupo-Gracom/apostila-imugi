@extends('layouts.template')
@section('titulo','UNIMUGI | Home')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-unidade="unidade13" data-etapa="listening">
				<h3 class="barlow">UNIT 13 -  LAYER STYLE</h3>
                <h5 class="barlow">5 - LISTENING</h5>
                <span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/Unit13/Listening/completo.ogg') }}" type="audio/ogg">
                </audio>
                <div class="clear"></div>
                <div style="margin-top: 36px">
                    <p>
                        Layer <b>Style</b> Is An Incredible <b>Tool</b> That Allows You To Style Texts, Logos, <b>Shapes</b> Or Anything
                        You Want. You Can <b>Create</b> A Text In 3D, For Example. Add <b>Shades</b>, Borders, Glow, <b>Textures</b>,
                        And More To Your Text. It Is The Process Of <b>Creation</b> Of A Style. With This Tool, You Can
                        Create <b>Custom</b> Styles To Use In Your Specifi c Project Or Save It To Use In Others.
                    </p>
                </div>
			</div>
		</div>
    </main>
    <script>
        activeMenu();
    </script>

@endsection
