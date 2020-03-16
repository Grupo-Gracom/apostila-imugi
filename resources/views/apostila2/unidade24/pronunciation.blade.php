@extends('layouts.template')
@section('titulo','Unit 24 | Pronunciation')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')

	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade24" data-etapa="pronunciation">
				<h3 class="barlow">UNIT 24</h3>
				<h5 class="barlow">4 - PRONUNCIATION</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/apostila2/UNIT 24/3. PRONUNCIATION/PRONUNCIATION.ogg') }}" type="audio/ogg">
				</audio>
                <div class="clear"></div>
                <p><b>or sound /ɔr/</b></p>

                <ul class="lista-inline">
                    <li><p>SUPPORT</p></li>
                    <li><p>ORDER</p></li>
                    <li><p>ORGANIZE</p></li>
                    <li><p>IMPORTANT</p></li>
                    <li><p>STORE</p></li>
                    <li><p>BEFORE</p></li>
                </ul>

                <p>I need some supp<b>or</b>t to <b>or</b>ganize the imp<b>or</b>tant <b>or</b>ders bef<b>or</b>e the st<b>or</b>e opens.</p>

			</div>
		</div>
    </main>
    <script>
        activeMenu();
    </script>

@endsection
