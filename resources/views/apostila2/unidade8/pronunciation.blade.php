@extends('layouts.template')
@section('titulo','UNIMUGI | Home')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade8" data-etapa="pronunciation">
				<h3 class="barlow">UNIT 8</h3>
				<h5 class="barlow">4 - PRONUNCIATION</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio8/Pronunciation/completo.ogg') }}" type="audio/ogg">
                </audio>
				<div class="clear"></div>
				<ul class="lista-inline">
					<li><b>long i /??/</b></li>
					<li>Time</li>	
					<li>Nine</li>
					<li>Five</li>
					<li>High</li>
					<li>Style</li>
					<li>China</li>
				</ul>
				<ul class="lista-inline">
					<ol>In Ch<b>i</b>na it’s, tim<b>e</b> for h<b>i</b>gh n<b>i</b>ne to f<b>i</b>ve st<b>y</b>le of work. </ol>
				</ul>
				<div class="clear"></div>
			</div>
		</div>
    </main>
    <script>
        activeMenu();
    </script>

@endsection
