@extends('layouts.template')
@section('titulo','UNIMUGI | Home')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-unidade="unidade16" data-etapa="pronunciation">
				<h3 class="barlow">UNIT 16 - Akira’S STUDENTS</h3>
				<h5 class="barlow">4 - PRONUNCIATION</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/Unit16/Pronunciation/completo.ogg') }}" type="audio/ogg">
                </audio>
                <div class="clear"></div> <br>                
                <div class="clear"></div>
                <h5 class="barlow" style="margin-top: 16px">A - LISTEN TO YOUR TEACHER READ THE FOLLOWING SENTENCES AND REPEAT AFTER HE IS FINISHED.</h5>
                <p>“He says she edits photos and uti lizes Photoshop for it.”</p>
                <p>“Lee uses the Adjustment Panel, and he uti lizes the Black &White tool because it is his favorite.”</p>                
			</div>
		</div>
    </main>
    <script>
        activeMenu();
    </script>

@endsection
