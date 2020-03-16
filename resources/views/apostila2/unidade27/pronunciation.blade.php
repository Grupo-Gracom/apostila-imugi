@extends('layouts.template')
@section('titulo','Unit 27 | Pronunciation')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade27" data-etapa="pronunciation">
				<h3 class="barlow">UNIT 27</h3>
				<h5 class="barlow">4 - PRONUNCIATION</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/apostila2/UNIT 27/3. PRONUNCIATION/PRONUNCIATION.ogg') }}" type="audio/ogg">
				</audio>
				<div class="clear"></div>
				<ul class="lista-inline">
					<li><b>h sound /h/ </b></li>
					<li>Hear</li>	
					<li>History</li>
					<li>Habits</li>
					<li>Behind</li>
					<li>Who</li>
					<li>Horse</li>
				</ul>
				<ul class="lista-inline">
					<ol>W<b>h</b>o <b>h</b>eard the <b>h</b>istory of Napoleon’s <b>h</b>orse and its bad <b>h</b>abits.</ol>
				</ul>
				<div class="clear"></div>
			</div>
		</div>
    </main>
    <script>
        activeMenu();
    </script>

@endsection
