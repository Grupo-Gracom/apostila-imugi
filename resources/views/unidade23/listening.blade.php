@extends('layouts.template')
@section('titulo','UNIMUGI | Home')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-unidade="unidade23" data-etapa="listening">
				<h3 class="barlow">UNIT 23 - BRUSHES</h3>
                <h5 class="barlow">5 - LISTENING</h5>
                <span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/unit1/listining/listining_a.ogg') }}" type="audio/ogg">
                </audio>
                <div class="clear"></div>
                <p style="margin-top:16px;">In The Brush Tool Options Menu, You Can Find A Variety Of Predefined Brushes To Apply To Your Art.
                                             You Can Even Define Your Own Settings, If You Want Something More Unique.</p>
                
			</div>
		</div>
    </main>
    <script>
        activeMenu();
    </script>

@endsection
