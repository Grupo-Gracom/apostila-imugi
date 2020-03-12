@extends('layouts.template')
@section('titulo','Unit 25 | Pronunciation')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade34" data-etapa="pronunciation">
				<h3 class="barlow">UNIT 34</h3>
				<h5 class="barlow">4 - PRONUNCIATION</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/apostila2/UNIT 34/4. PRONUNCIATION/PRONUNCIATION.ogg') }}" type="audio/ogg">
				</audio>
                <div class="clear"></div>

                <ul class="lista-inline">
                    <li><p><b>t sound /t/</b></p></li>
                    <li><p>TEACHER</p></li>
                    <li><p>TOMORROW</p></li>
                    <li><p>PARTICIPATE</p></li>
                    <li><p>EXPECTATION</p></li>
                    <li><p>SECRET</p></li>
                    <li><p>LIMIT</p></li>
                </ul>
                
			</div>
		</div>
    </main>
    <script>
        activeMenu();
    </script>

@endsection
