@extends('layouts.template')
@section('titulo','Unit 18 | Pronunciation')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')

	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade18" data-etapa="pronunciation">
				<h3 class="barlow">UNIT 18</h3>
				<h5 class="barlow">4 - PRONUNCIATION</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/apostila2/UNIT 18/4. PRONUNCIATION/PRONUNCIATION.ogg') }}" type="audio/ogg">
				</audio>
                <div class="clear espacamento"></div>
                <p class="esquerda" style="color:green;">oi sound /ɔɪ/</p>
                <ul class="lista-inline">
                    <li><b>Toy</b></li>
                    <li><b>Choice</b></li>
                    <li><b>Enjoy</b></li>
                    <li><b>Avoid</b></li>
                    <li><b>Voice</b></li>
                </ul>
                <div class="clear"></div>
                <p>Av<b>oi</b>d your inner v<b>oi</b>ce and enj<b>oy</b> the t<b>oy</b> of your ch<b>oi</b>ce</p>
			</div>
		</div>
    </main>
    <script>
        activeMenu();
    </script>

@endsection
