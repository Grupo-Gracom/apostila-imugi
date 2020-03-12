@extends('layouts.template')
@section('titulo','Unit 2 | Pronunciation')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')

	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade2" data-etapa="pronunciation">
				<h3 class="barlow">UNIT 02</h3>
				<h5 class="barlow">4 - PRONUNCIATION</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/apostila2/UNIT 2/4. PRONUNCIATION/PRONUNCIATION.ogg') }}" type="audio/ogg">
				</audio>
                <div class="clear"></div>
                <h5>A - Connected Speech: In spoken English the pronunciation of specific words may be changed within a sentence following two principles. Elision (When a sound disappears)
                    and Assimilation (When a sound is modified).</h5>

                <ul class="lista-inline">
                    <li><p>E.g.: Goo<b><u>d</u></b></p></li>
                    <li><p>Goo<b><u>d m</u></b>orning</p></li>
                    <li><p>Goo<b><u>d a</u></b>fternoon</p></li>
                </ul>

			</div>
		</div>
    </main>
    <script>
        activeMenu();
    </script>

@endsection
