@extends('layouts.template')
@section('titulo','UNIMUGI | Home')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-unidade="unidade1" data-etapa="pronunciation">
				<h3 class="barlow">UNIT 01 - INTRODUCTION TO GRAPHIC DESIGN PRODUCTION</h3>
				<h5 class="barlow">5 - PRONUNCIATION</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/unit1/pronuciation/pronuciation.ogg') }}" type="audio/ogg">
                </audio>
                <div class="clear"></div>
                <h5 class="barlow" style="margin-top: 16px">A - Observe how the sound of the letters “PH” resembles an “F”. Practice by repeating the words below.</h5>
				<ul class="lista-inline">
                    <li><b class="upper">Photo</b></li>
                    <li><b class="upper">Graph</b></li>
                    <li><b class="upper">Phone</b></li>
                    <li><b class="upper">Laugh</b></li>
                    <li><b class="upper">Pharmacy</b></li>
                    <li><b class="upper">Alphabet</b></li>
                    <li><b class="upper">Pamphlet</b></li>
                </ul>
                <h5 class="barlow" style="margin-top: 16px">B - Listen to your teacher say the words bellow and repeat after him. Observe the pronunciation of the suffixtion.</h5>
                <ul class="lista-inline">
                    <li><b class="upper">Production</b></li>
                    <li><b class="upper">Edition</b></li>
                    <li><b class="upper">Solution</b></li>
                    <li><b class="upper">Position</b></li>
                    <li><b class="upper">Option</b></li>
                    <li><b class="upper">Introduction</b></li>
                </ul>
                <h5 class="barlow" style="margin-top: 16px">C - Read the following sentence to practice pronunciation. Observe the underlined letters.</h5>
                <p>Photoshop is for the edition of photos and other graphic designing production.</p>
			</div>
		</div>
    </main>
    <script>
        activeMenu();
    </script>

@endsection
