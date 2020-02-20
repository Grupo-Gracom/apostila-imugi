@extends('layouts.template')
@section('titulo','Unit 17 | Pronunciation')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila1" data-unidade="unidade17" data-etapa="pronunciation">
				<h3 class="barlow">UNIT 17 - LAYERS AND GUIDES</h3>
				<h5 class="barlow">4 - PRONUNCIATION</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/Unit17/Pronunciation/completo.ogg') }}" type="audio/ogg">
                </audio>
                <div class="clear"></div> <br>                
                <div class="clear"></div>
                <h5 class="barlow" style="margin-top: 16px">A - Pay Attention To The Sound Of The Underlined Letters.</h5>
				<ul class="lista-inline">
					<li><b>EXAMPLE</b></li>
					<li><b>EXACT</b></li>
					<li><b>EXEMPT</b></li>
					<li><b>EXIT</b></li>
					<li><b>EXIST</b></li>										
				</ul>
				<h5 class="barlow" style="margin-top: 16px">B - Read the sentences to practi ce pronounciati on.</h5>
					<p><b>1. </b>He Is Exempt From This Responsibility.</p>
					<p><b>2. </b>They Are Examples Of Professionals.</p>
					<p><b>3. </b>She Is Exactly The Person I Need.</p>
					<p><b>4. </b>The Exit Is Over There.</p>
					<p><b>5. </b>Ghosts Don’t Exist.</p>				                
			</div>
		</div>
    </main>
    <script>
        activeMenu();
    </script>

@endsection
