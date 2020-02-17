@extends('layouts.template')
@section('titulo','UNIMUGI | Home')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-unidade="unidade15" data-etapa="pronunciation">
				<h3 class="barlow">UNIT 15 - PROFESSOR Akira Suzuki</h3>
				<h5 class="barlow">4 - PRONUNCIATION</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/Unit15/Pronunciation/completo.ogg') }}" type="audio/ogg">
                </audio>
				<div class="clear"></div>
                <h5 class="barlow" style="margin-top: 16px">A. Notice How The Sound Of “U” And “W” Are Totally Different. Listen And Repeat.</h5>
				<ul class="lista-inline">
						<li><b>WHAT</b></li>
						<li><b>WET</b></li>
						<li><b>WACK</b></li>
						<li><b>WONDER</b></li>
					</ul>
					<ul class="lista-inline">
						<li><b>X</b></li>
					</ul>
					<ul class="lista-inline">
						<li><b>UPSET</b></li>
						<li><b>UPLOAD</b></li>
						<li><b>UTTER</b></li>
						<li><b>UPTIGHT</b></li>
					</ul>
				<div class="clear"></div>
				<div class="clear"></div>
				<h5 class="barlow" style="margin-top: 16px">B. Read The Sentence And Practice Pronounciation.</h5>
				<p>The Usher Was Waiting For The Wedding Guests To Arrive When An Upset Woman Started Crying.</p>
				<div class="clear"></div>
			</div>
		</div>
    </main>
    <script>
        activeMenu();
    </script>

@endsection
