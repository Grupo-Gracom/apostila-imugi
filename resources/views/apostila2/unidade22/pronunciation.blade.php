@extends('layouts.template')
@section('titulo','Unit 22 | Pronunciation')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')

	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade22" data-etapa="pronunciation">
				<h3 class="barlow">UNIT 22</h3>
				<h5 class="barlow">4 - PRONUNCIATION</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/apostila2/UNIT 22/4. PRONUNCIATION/PRONUNCIATION.ogg') }}" type="audio/ogg">
				</audio>
                <div class="clear"></div>
                <p><b>ar sound /ɑr/</b></p>

                <ul class="lista-inline">
                    <li><p>MARKETING</p></li>
                    <li><p>DEPARTMENT</p></li>
                    <li><p>ARMS</p></li>
                    <li><p>PARTHER</p></li>
                    <li><p>ART</p></li>
                    <li><p>ARE</p></li>
                </ul>

                <p>For my p<b>a</b>rtner, the m<b>a</b>rketing and sales dep<b>a</b>rtments <b>a</b>re the <b>a</b>rms of his <b>a</b>rt company</p>

			</div>
		</div>
    </main>
    <script>
        activeMenu();
    </script>

@endsection
