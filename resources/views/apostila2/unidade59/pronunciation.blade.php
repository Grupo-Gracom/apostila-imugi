@extends('layouts.template')
@section('titulo','Unit 59 | Pronunciation')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade59" data-etapa="pronunciation">
				<h3 class="barlow">UNIT 59</h3>
				<h5 class="barlow">4 - PRONUNCIATION</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/apostila2/UNIT 59/3. PRONUNCIATION/PRONUNCIATION.ogg') }}" type="audio/ogg">
				</audio>
				<div class="clear"></div>
				<ul class="lista-inline">
					<li><b>zh sound</b> /ʒ/ </li>        
					<li>measure</li>	
					<li>Pleasure</li>
					<li>Version</li>
					<li>Massage</li>
					<li>Garage</li>
					<li>Beige</li>
				</ul>
				<p style="margin-top:32px">
					It was nice to visit the garage sale. I found an awesome beige massage table. Besides that,
					it was a pleasure to talk to the owners of the house. I also bought a collector’s version of a
					marvel comic book.
				</p>
				<div class="clear"></div>
			</div>
		</div>
    </main>
    <script>
        activeMenu();
    </script>

@endsection
