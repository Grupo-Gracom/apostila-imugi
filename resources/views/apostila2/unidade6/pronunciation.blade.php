@extends('layouts.template')
@section('titulo','UNIMUGI | Home')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade6" data-etapa="pronunciation">
				<h3 class="barlow">UNIT 6</h3>
				<h5 class="barlow">4 - PRONUNCIATION</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio6/Pronunciation/completo.ogg') }}" type="audio/ogg">
                </audio>
				<div class="clear"></div>
				
                <h5 class="barlow" style="margin-top: 16px">A. Practice The Pronunciation Of The Letter D In The Beginning And Middle Of Words.</h5>
				<div class="metade">
					<ul class="lista-inline">
						<li><b>long e</b></li>
						<li>/i/</li>	
						<li>Read</li>
						<li>Meat</li>
						<li>Seat</li>
						<li>Seen</li>
						<li>Feet</li>
						<li>deep</li>
					</ul>
					<ul class="lista-inline">
						<ol>Pl<b>ea</b>se eat the m<b>ea</b>t and the ch<b>ee</b>se before you l<b>ea</b>ve.</ol>
					</ul>
				</div>
				<div class="clear"></div>
			</div>
		</div>
    </main>
    <script>
        activeMenu();
    </script>

@endsection
