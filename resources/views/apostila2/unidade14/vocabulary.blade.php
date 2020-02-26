@extends('layouts.template')
@section('titulo','UNIMUGI | Home')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade14" data-etapa="vocabulary">
				<h3 class="barlow">UNIT 14</h3>
				<h5 class="barlow">1 - VOCABULARY</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/unit1/vocabulary/vocabulary.ogg') }}" type="audio/ogg">
				</audio>
				
				
				<h5 class="barlow" style="margin-top: 16px">A -  SUPPORTING VERBS</h5>				
				<ul class="lista-inline">
					<li><b>Take care</b></li>
					<li><b>Assist</b></li>
					<li><b>Monitor</b></li>
					<li><b>Help</b></li>
					<li><b>Pay attention</b></li>
					<li><b>Support</b></li>
					<li><b>Supervise</b></li>
					<li><b>Encourage</b></li>					
				</ul>
				<h5 class="barlow" style="margin-top: 16px">B -  WORDS IN CONTEXT</h5>				
				<ul class="lista-inline">
					<li><b>Ankle</b></li>
					<li><b>Knee</b></li>
					<li><b>Hard</b></li>
					<li><b>Right</b></li>
					<li><b>Glad</b></li>
					<li><b>Bit</b></li>
					<li><b>All over</b></li>
					<li><b>Awesome</b></li>										
					<li><b>Feedback</b></li>										
				</ul>
			</div>
		</div>
	</main>
	<script>
        activeMenu();
    </script>

@endsection
