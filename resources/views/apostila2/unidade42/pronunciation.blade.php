@extends('layouts.template')
@section('titulo','UNIMUGI | Home')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade42" data-etapa="pronunciation">
				<h3 class="barlow">UNIT 42</h3>
				<h5 class="barlow">4 - PRONUNCIATION</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/unit1/pronuciation/pronuciation.ogg') }}" type="audio/ogg">
                </audio>
                <div class="clear espacamento"></div>                             
                <p class="esquerda" style="color:green;">k sound /k/</p>                
                <ul class="lista-inline">                                        
                    <li><b>Keep</b></li>                    
                    <li><b>Client</b></li>                    
                    <li><b>Account</b></li>                    
                    <li><b>Second</b></li>                    
                    <li><b>Bank</b></li>                                   
                    <li><b>Unique</b></li>                                   
                </ul>           
                <div class="clear"></div>
                <p>The <b>c</b>lient wants to <b>k</b>eep his se<b>c</b>ond a<b>cc</b>ount in the ban<b>k</b> as his uni<b>que</b> investment.</p>
			</div>
		</div>
    </main>
    <script>
        activeMenu();
    </script>

@endsection
