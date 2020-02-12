@extends('layouts.template')
@section('titulo','UNIMUGI | Home')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-unidade="unidade5" data-etapa="pronunciation">
				<h3 class="barlow">UNIT 05 - BURN TOOL</h3>
				<h5 class="barlow">4 - PRONUNCIATION</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/Unit5/Pronunciation/completo.ogg') }}" type="audio/ogg">
                </audio>
                <div class="clear"></div>
                <h5 class="barlow" style="margin-top: 16px">A. Listen and practice the pronunciation of the following words.</h5>
                <ul class="lista-inline">
					<li><b>KNOW</b></li>
					<li><b>KNOT</b></li>
					<li><b>KNEE</b></li>
					<li><b>KNIT</b></li>
                </ul>
                <h5 class="barlow" style="margin-top: 16px">B. Read the sentence to practice pronunciation.</h5>
                <ul class="lista-inline">
                    <p>I know how to knit a knot.</p>
                </ul>
			</div>
		</div>
    </main>
    <script>
        activeMenu();
    </script>

@endsection
