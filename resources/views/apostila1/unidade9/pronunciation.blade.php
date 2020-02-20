@extends('layouts.template')
@section('titulo','Unit 9 | Pronunciation')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila1" data-unidade="unidade9" data-etapa="pronunciation">
				<h3 class="barlow">UNIT 09 - PROFESSOR ANA BEATRIZ</h3>
				<h5 class="barlow">4 - PRONUNCIATION</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/unit1/pronuciation/pronuciation.ogg') }}" type="audio/ogg">
                </audio>
                <div class="clear"></div>
                <h5 class="barlow" style="margin-top: 16px">A - listen To Your Teacher First, And Then Repeat The Tittles Of Address To Practice Pronunciation. </h5>
				<p>TITTLES OF ADDRESS</p>
                <p>Miss (single females)</p>
                <p>Mrs. (married females) </p>
                <p>Ms. (single or married females)</p>
                <p>Mr. (single or married males)</p>
			</div>
		</div>
    </main>
    <script>
        activeMenu();
    </script>

@endsection
