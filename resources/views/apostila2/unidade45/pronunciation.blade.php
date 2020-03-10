@extends('layouts.template')
@section('titulo','UNIMUGI | Home')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade45" data-etapa="pronunciation">
				<h3 class="barlow">UNIT 45</h3>
				<h5 class="barlow">4 - PRONUNCIATION</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/unit1/pronuciation/pronuciation.ogg') }}" type="audio/ogg">
                </audio>
                <div class="clear espacamento"></div>                             
                <h5 class="barlow">Improving pronunciation - / tt / / dd /.</h5>
                <div class="metade esquerda center-align">
                    <p>Ma<b>tt</b>er</p>
                    <p>Ba<b>tt</b>leBi<b>tt</b>er</p>
                    <p>Li<b>tt</b>le</p>                    
                </div>
                <div class="metade direita center-align">
                    <p>Da<b>dd</b>y</p>
                    <p>Su<b>dd</b>enly</p>
                    <p>Di<b>dd</b>lo</p>                    
                    <p>A<b>dd</b> it</p>                    
                </div>
                <div class="clear"></div>                             
			</div>
		</div>
    </main>
    <script>
        activeMenu();
    </script>

@endsection
