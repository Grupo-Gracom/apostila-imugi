@extends('layouts.template')
@section('titulo','UNIMUGI | Home')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade17" data-etapa="pronunciation">
				<h3 class="barlow">UNIT 17</h3>
				<h5 class="barlow">4 - PRONUNCIATION</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/unit1/pronuciation/pronuciation.ogg') }}" type="audio/ogg">
                </audio>
                <div class="clear espacamento"></div>              
                <p class="esquerda" style="color:green;">aw sound /ɔ/</p>                
                <ul class="lista-inline">                                        
                    <li><b>Almost</b></li>                    
                    <li><b>Always</b></li>                    
                    <li><b>Offer</b></li>                    
                    <li><b>Author</b></li>                    
                    <li><b>Talk</b></li>                    
                    <li><b>audience</b></li>                    
                </ul>
                <div class="clear"></div>
                <p>The <b>au</b>thor <b>al</b>most <b>al</b>ways t<b>al</b>k to the <b>au</b>dience and <b>o</b>ffer <b>au</b>tographs</p>
			</div>
		</div>
    </main>
    <script>
        activeMenu();
    </script>

@endsection
