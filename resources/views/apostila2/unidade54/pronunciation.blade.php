@extends('layouts.template')
@section('titulo','Unit 54 | Pronunciation')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade54" data-etapa="pronunciation">
				<h3 class="barlow">UNIT 54</h3>
				<h5 class="barlow">4 - PRONUNCIATION</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio54/Pronunciation/completo.ogg') }}" type="audio/ogg">
                </audio>
				<div class="clear"></div>
				<ul class="lista-inline">
					<li><b>s sound</b> /s/</li>        
					<li>System Select</li>	
					<li>Best</li>
					<li>Cancel Nice</li>
					<li>License</li>
				</ul>
				<p style="margin-top:32px">
					She is gonna cancel the current license. We have to select the best system
					to the company. It’s a nice decision. 
				</p>
				<div class="clear"></div>
			</div>
		</div>
    </main>
    <script>
        activeMenu();
    </script>

@endsection
