@extends('layouts.template')
@section('titulo','UNIMUGI | Home')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade56" data-etapa="vocabulary">
				<h3 class="barlow">UNIT 56</h3>
				<h5 class="barlow">1 - VOCABULARY</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/Unit56/Vocabulary/completo.ogg') }}" type="audio/ogg">
				</audio>
				<h5 class="barlow" style="margin-top: 16px">A -  WORDS AND EXPRESSIONS</h5>
				<ul class="lista-inline">
					<ol><b>TO DANCE / at a party / all night long</b></ol>
				</ul>
				<ul class="lista-inline">
					<ol><b>TO DREAM / every night / every other night / once in a while</b></ol>
				</ul>
				<ul class="lista-inline">
					<ol><b>TO EXIST / for years / for decades / for centuries</b></ol>
				</ul>

				<h5 class="barlow" style="margin-top: 32px">B -  WORDS IN CONTEXT</h5>
				<div style="margin-top: 36px">
					<ul class="lista-inline">
						<li><b>Get back</b></li>
						<li><b>Still</b></li>
						<li><b>Phase Characters</b></li>
						<li><b>Knowledge</b></li>
						<li><b>Tried Much </b></li>
						<li><b>Easier</b></li>
					</ul>
				</div>
			</div>
		</div>
	</main>
	<script>
        activeMenu();
    </script>

@endsection
