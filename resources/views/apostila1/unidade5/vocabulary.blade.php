@extends('layouts.template')
@section('titulo','UNIMUGI | Home')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila1" data-unidade="unidade5" data-etapa="vocabulary">
				<h3 class="barlow">UNIT 05 - BURN TOOL</h3>
				<p><b>Goal:</b> To learn what Burn Tool is used for while focusing on adjectives in their comparative forms.</p>
				<h5 class="barlow">1 - VOCABULARY</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/Unit5/Vocabulary/completo.ogg') }}" type="audio/ogg">
				</audio>
				<ul class="lista-inline">
					<li><b>THINK</b></li>
					<li><b>BRIGHT</b></li>
					<li><b>DARK</b></li>
					<li><b>WANT</b></li>
					<li><b>KNOW</b></li>
					<li><b>MAKE</b></li>
					<li><b>BRUSH</b></li>
				</ul>
			</div>
		</div>
	</main>
	<script>
        activeMenu();
    </script>

@endsection
