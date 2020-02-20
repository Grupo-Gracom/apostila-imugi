@extends('layouts.template')
@section('titulo','Unit 11 | Pronunciation')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila1" data-unidade="unidade11" data-etapa="pronunciation">
				<h3 class="barlow">UNIT 11 - COLOR TOOLS</h3>
				<h5 class="barlow">4 - PRONUNCIATION</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/Unit11/Pronunciation/completo.ogg') }}" type="audio/ogg">
                </audio>
                <div class="clear"></div>
                <h5 class="barlow" style="margin-top: 16px">A. listen To Your Teacher Read The Words Below, Repeat After Him/Her. Observe The Pronunciation Of The Underlined Letters. Notice That The Letter ‘G’ At The End Is Not Pronounced.</h5>
                <ul class="lista-inline">
					<li><b>STUDYING</b></li>
					<li><b>CREATING</b></li>
					<li><b>DEVELOPING</b></li>
					<li><b>TRYING</b></li>
				</ul>
			</div>
		</div>
    </main>
    <script>
        activeMenu();
    </script>

@endsection
