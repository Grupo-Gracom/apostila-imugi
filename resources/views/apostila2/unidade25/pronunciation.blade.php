@extends('layouts.template')
@section('titulo','Unit 25 | Pronunciation')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')

	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade25" data-etapa="pronunciation">
				<h3 class="barlow">UNIT 25</h3>
				<h5 class="barlow">4 - PRONUNCIATION</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/unit1/pronuciation/pronuciation.ogg') }}" type="audio/ogg">
                </audio>
                <div class="clear"></div>
                <p><b>air sound /ɛr/</b></p>

                <ul class="lista-inline">
                    <li><p>SECRETARY</p></li>
                    <li><p>PREPARE</p></li>
                    <li><p>CAREFUL</p></li>
                    <li><p>AREA</p></li>
                    <li><p>VERY</p></li>
                    <li><p>NECESSARY</p></li>
                </ul>

                <p>The secret<b>ar</b>y was v<b>er</b>y c<b>ar</b>eful to prep<b>ar</b>e what is necess<b>ar</b>y for the general meeting of her <b>ar</b>ea.</p>

			</div>
		</div>
    </main>
    <script>
        activeMenu();
    </script>

@endsection
