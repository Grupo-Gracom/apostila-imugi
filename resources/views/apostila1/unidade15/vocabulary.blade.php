@extends('layouts.template')
@section('titulo','UNIMUGI | Home')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila1" data-unidade="unidade15" data-etapa="vocabulary">
				<h3 class="barlow">UNIT 15 - PROFESSOR Akira Suzuki</h3>
				<p><b>Goal: </b>Focus A Lot On Future With Going To And With Will. Give Many Examples To Contrast The Two Structures. Also, Shed Light On How Photoshop Is Important For Web Designers.	Talk A Litt le Bit About The Field.</p>
				<h5 class="barlow">1 - VOCABULARY</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/Unit15/Vocabulary/completo.ogg') }}" type="audio/ogg">
				</audio>
				<ul class="lista-inline">
					<li><b>WILL</b></li>
					<li><b>PLEASURE</b></li>
					<li><b>UNTIL</b></li>
					<li><b>AGE</b></li>
					<li><b>A FEW</b></li>
					<li><b>SMALL</b></li>
					<li><b>HOPE</b></li>
					<li><b>ASSIST</b></li>
				</ul>
			</div>
		</div>
	</main>
	<script>
        activeMenu();
    </script>

@endsection
