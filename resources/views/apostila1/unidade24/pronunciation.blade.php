@extends('layouts.template')
@section('titulo','Unit 24 | Pronunciation')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila1" data-unidade="unidade24" data-etapa="pronunciation">
				<h3 class="barlow">UNIT 24 - ERASER TOOL</h3>
				<h5 class="barlow">4 - PRONUNCIATION</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/unit1/pronuciation/pronuciation.ogg') }}" type="audio/ogg">
                </audio>
                <div class="clear"></div>
				<h5 class="barlow" style="margin-top: 16px">A - Notice How The Verb To Be Is Contracted In The Pronounced Form Of The Verb There To Be.</h5>
				<p>THERE IS</p>
				<figure>
					<img style="width:40%;" src="{{ asset('assets/img/playgo/RS.jpg') }}" alt="there is">
				</figure>
				<p>THERE ARE</p>
				<figure>
					<img style="width:40%;" src="{{ asset('assets/img/playgo/RARE.jpg') }}" alt="there are">
				</figure><br>
				<p>“THERE ARE MANY TREES IN THE FOREST.”</p>
				<p>“THERE IS A LOT OF MONEY IN THE BANK.”</p>
			</div>
		</div>
    </main>
    <script>
        activeMenu();
    </script>

@endsection
