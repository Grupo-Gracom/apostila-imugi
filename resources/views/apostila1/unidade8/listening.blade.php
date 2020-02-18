@extends('layouts.template')
@section('titulo','UNIMUGI | Home')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila1" data-unidade="unidade8" data-etapa="listening">
				<h3 class="barlow">UNIT 08 - REVIEW OF SOPHIA’S CLASSES</h3>
                <h5 class="barlow">5 - LISTENING</h5>
                <span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/Unit8/Listening/completo.ogg') }}" type="audio/ogg">
                </audio>
                <div class="clear"></div>
                <div style="margin-top: 36px">
                    <p>Listen and fill in the blanks.</p>
                    <p>Burn Tool And Dodge Tool Are Both Used To Balance The Contrast In Photos While Spot Healing Brush Is Utilized To Remove Imperfection In Photos. If You Have Red Eyes In The Picture, You Can Use Red Eye Tool To Remove It.</p>
                </div>
			</div>
		</div>
    </main>
    <script>
        activeMenu();
    </script>

@endsection
