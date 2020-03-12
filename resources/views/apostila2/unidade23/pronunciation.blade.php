@extends('layouts.template')
@section('titulo','Unit 23 | Pronunciation')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')

	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade23" data-etapa="pronunciation">
				<h3 class="barlow">UNIT 23</h3>
				<h5 class="barlow">4 - PRONUNCIATION</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/apostila2/UNIT 23/4. PRONUNCIATION/PRONUNCIATION.ogg') }}" type="audio/ogg">
				</audio>
                <div class="clear"></div>
                <p><b>schwa+r /ɚ/</b></p>

                <ul class="lista-inline">
                    <li><p>HER</p></li>
                    <li><p>WORK</p></li>
                    <li><p>SURE</p></li>
                    <li><p>FIRST</p></li>
                    <li><p>EARLY</p></li>
                    <li><p>WERE</p></li>
                </ul>

                <p>Fi<b>r</b>st, they w<b>e</b>re, for s<b>u</b>re, in h<b>e</b>r w<b>o</b>rk very <b>ea</b>rly.</p>

			</div>
		</div>
    </main>
    <script>
        activeMenu();
    </script>

@endsection
