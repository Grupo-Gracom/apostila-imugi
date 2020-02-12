@extends('layouts.template')
@section('titulo','UNIMUGI | Home')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-unidade="unidade3" data-etapa="pronunciation">
				<h3 class="barlow">UNIT 03 - PHOTOGRAPHY AND PHOTOSHOP</h3>
				<h5 class="barlow">4 - PRONUNCIATION</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/unit1/pronuciation/pronuciation.ogg') }}" type="audio/ogg">
                </audio>
                <div class="clear"></div>
                <h5 class="barlow" style="margin-top: 16px">A - Listen to and repeat the pronunciati on of the following words. Observe the pronunciati on of the lett er ‘L’.</h5>
				<ul class="lista-inline">
                    <li><b class="upper">Wildlife</b></li>
                    <li><b class="upper">Original</b></li>
                    <li><b class="upper">Old</b></li>
                    <li><b class="upper">Tool</b></li>
                    <li><b class="upper">Call</b></li>
                    <li><b class="upper">Professional</b></li>
                    <li><b class="upper">All</b></li>
                </ul>
                <h5 class="barlow" style="margin-top: 16px">B - Listen to and repeat the pronunciati on of the following words. Pay att enti on to the pronunciati on of “CH”.</h5>
                <ul class="lista-inline">
                    <li><b class="upper">Choose</b></li>
                    <li><b class="upper">Teach</b></li>
                    <li><b class="upper">Check</b></li>
                    <li><b class="upper">Touch</b></li>
                    <li><b class="upper">Change</b></li>
                    <li><b class="upper">Chat</b></li>
                </ul>
                <h5 class="barlow" style="margin-top: 16px">C - Listen to your teacher read the sentence, and then repeat it aft er him.</h5>
                <p>I teach children to use professional Photoshop tools.</p>
			</div>
		</div>
    </main>
    <script>
        activeMenu();
    </script>

@endsection
