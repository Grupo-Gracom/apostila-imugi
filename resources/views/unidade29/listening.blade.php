@extends('layouts.template')
@section('titulo','UNIMUGI | Home')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-unidade="unidade29" data-etapa="listening">
				<h3 class="barlow">UNIT 29 -  KEY FRAME</h3>
                <h5 class="barlow">5 - LISTENING</h5>
                <span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/Unit29/Listening/completo.ogg') }}" type="audio/ogg">
                </audio>
                <div class="clear"></div>
                <div style="margin-top: 36px">
                    <p>
                        A key frame in animation and filmmaking is a drawing that defines the starting and ending
                        points of any smooth transition. The drawings are called “frames” because their position
                        in time is measured in frames on a strip of film.
                    </p>
                </div>
				<div class="clear"></div>
            </div>
		</div>
    </main>
    <script>
        activeMenu();
    </script>

@endsection
