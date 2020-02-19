@extends('layouts.template')
@section('titulo','UNIMUGI | Home')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila1" data-unidade="unidade25" data-etapa="pronunciation">
				<h3 class="barlow">UNIT 25 - PEN TOOLS</h3>
				<h5 class="barlow">4 - PRONUNCIATION</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/unit1/pronuciation/pronuciation.ogg') }}" type="audio/ogg">
                </audio>
                <div class="clear"></div>
				<h5 class="barlow" style="margin-top: 16px">A - LISTEN AND PRACTICE THE PRONOUNCIATION OF CAN AND CAN’T.</h5>
				<p>• I CAN SWIM.</p>
				<p>• SHE CAN’T PLAY THE GUITTAR</p>
				<p>• HE CAN SPEAK ENGLISH.</p>
				<p>• CAN THEY GO?</p>
			</div>
		</div>
    </main>
    <script>
        activeMenu();
    </script>

@endsection
