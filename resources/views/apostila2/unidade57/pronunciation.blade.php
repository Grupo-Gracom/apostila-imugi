@extends('layouts.template')
@section('titulo','Unit 57 | Pronunciation')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade57" data-etapa="pronunciation">
				<h3 class="barlow">UNIT 57</h3>
				<h5 class="barlow">4 - PRONUNCIATION</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio57/Pronunciation/completo.ogg') }}" type="audio/ogg">
                </audio>
				<div class="clear"></div>
				<ul class="lista-inline">
					<li><b>y sound</b> /y/ </li>        
					<li>Yesterday</li>	
					<li>Yellow Year</li>
					<li>Beyond</li>
					<li>Behavior</li>
				</ul>
				<p style="margin-top:32px">
					Yesterday I read about the behavior of the market. Specialists say the consumption is beyond the limit. They turned on yellow lights last year. This year, it is almost red.
				</p>
				<div class="clear"></div>
			</div>
		</div>
    </main>
    <script>
        activeMenu();
    </script>

@endsection
