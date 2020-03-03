@extends('layouts.template')
@section('titulo','UNIMUGI | Home')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade20" data-etapa="pronunciation">
				<h3 class="barlow">UNIT 20</h3>
				<h5 class="barlow">4 - PRONUNCIATION</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/unit1/pronuciation/pronuciation.ogg') }}" type="audio/ogg">
                </audio>
                <div class="clear espacamento"></div>                             
                <p class="esquerda" style="color:green;">schwa+r /ɚ/</p>                
                <ul class="lista-inline">                                        
                    <li><b>Her</b></li>                    
                    <li><b>Work</b></li>                    
                    <li><b>Sure</b></li>                    
                    <li><b>First</b></li>                    
                    <li><b>Early</b></li>                                   
                    <li><b>Were</b></li>                                   
                </ul>
                <div class="clear"></div>
                <p>First, they were, for sure, in her work very early.</p>
			</div>
		</div>
    </main>
    <script>
        activeMenu();
    </script>

@endsection
