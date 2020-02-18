@extends('layouts.template')
@section('titulo','UNIMUGI | Home')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-unidade="unidade18" data-etapa="pronunciation">
				<h3 class="barlow">UNIT 18 - SHAPE TOOL & ADOBE KULER</h3>
				<h5 class="barlow">4 - PRONUNCIATION</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/Unit18/Pronunciation/completo.ogg') }}" type="audio/ogg">
                </audio>
                <div class="clear"></div> <br>                
                <div class="clear"></div>
                <h5 class="barlow" style="margin-top: 16px">A - Notice That When Making A Question, The Intonation At The End Of The Sentence Is
				Usually Rising. This Occurs To Express Doubt.</h5>
				<p>“Do Any Of You Know What They Are Used For?”</p>
				<p>“What Kinds Of Shapes Can You Create?”</p>								                
			</div>
		</div>
    </main>
    <script>
        activeMenu();
    </script>

@endsection
