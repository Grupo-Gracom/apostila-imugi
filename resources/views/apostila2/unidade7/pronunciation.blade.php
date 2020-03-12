@extends('layouts.template')
@section('titulo','Unit 7 | Pronunciation')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')

	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade7" data-etapa="pronunciation">
				<h3 class="barlow">UNIT 7</h3>
				<h5 class="barlow">4 - PRONUNCIATION</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/apostila2/UNIT 7/4. PRONUNCIATION/PRONUNCIATION.ogg') }}" type="audio/ogg">
				</audio>
				<div class="clear"></div>

				<div class="metade">
					<ul class="lista-inline">
						<li><b>short e /ɛ/</b></li>
						<li>Let</li>
						<li>Get</li>
						<li>End</li>
						<li>Any</li>
						<li>Fell</li>
						<li>Bread</li>
					</ul>
					<ul class="lista-inline">
						<ol>L<b>e</b>t me get some br<b>e</b>ad in the <b>e</b>nd of the day.</ol>
					</ul>
				</div>
				<div class="clear"></div>
			</div>
		</div>
    </main>
    <script>
        activeMenu();
    </script>

@endsection
