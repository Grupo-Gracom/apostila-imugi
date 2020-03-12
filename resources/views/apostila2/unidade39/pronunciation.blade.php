@extends('layouts.template')
@section('titulo','Unit 39 | Pronunciation')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade39" data-etapa="pronunciation">
				<h3 class="barlow">UNIT 39</h3>
				<h5 class="barlow">4 - PRONUNCIATION</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/apostila2/UNIT 39/4. PRONUNCIATION/PRONUNCIATION.ogg') }}" type="audio/ogg">
				</audio>
				<div class="clear"></div>
				<ul class="lista-inline">
					<li><b>j sound /ʤ/  </b></li>        
					<li>General</li>	
					<li>Job</li>
					<li>Original</li>
					<li>Agent</li>
					<li>Charge</li>
					<li>Average</li>
				</ul>
				<p style="margin-top:32px">The ori<b>g</b>inal job of the <b>g</b>eneral a<b>g</b>ent is to char<b>g</b>e an avera<b>g</b>e fee, and not a percenta<b>g</b>e of it.</p>
				<div class="clear"></div>
			</div>
		</div>
    </main>
    <script>
        activeMenu();
    </script>

@endsection
