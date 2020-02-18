@extends('layouts.template')
@section('titulo','UNIMUGI | Home')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila1" data-unidade="unidade10" data-etapa="pronunciation">
				<h3 class="barlow">UNIT 10</h3>
				<h5 class="barlow">4 - PRONUNCIATION</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/unit1/pronuciation/pronuciation.ogg') }}" type="audio/ogg">
                </audio>
                <div class="clear"></div>
                <h5 class="barlow" style="margin-top: 16px">A - listen To Your Teacher As He Reads The Following Words, And Then Repeat Them. Observe The Underlined Lett ers.</h5>
				<ul class="lista-inline">
                    <li><b class="upper">GO</b></li>
                    <li><b class="upper">LOVE</b></li>
                    <li><b class="upper">SHOW</b></li>
                    <li><b class="upper">FROM</b></li>
                    <li><b class="upper">WORK</b></li>
                    <li><b class="upper">NICOLAS</b></li>
                </ul>
				<h5 class="barlow" style="margin-top: 16px">B - Read The Sentence Aft er Your Teacher</h5>
				<p>“I Love Going To Shows With Nicolas”</p>
			</div>
		</div>
    </main>
    <script>
        activeMenu();
    </script>

@endsection
