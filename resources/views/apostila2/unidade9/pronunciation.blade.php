@extends('layouts.template')
@section('titulo','Unit 9 | Pronunciation')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')

	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade9" data-etapa="pronunciation">
				<h3 class="barlow">UNIT 9</h3>
				<h5 class="barlow">4 - PRONUNCIATION</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/apostila2/UNIT 9/3. PRONUNCIATION/PRONUNCIATION.ogg') }}" type="audio/ogg">
				</audio>
				<div class="clear"></div>
				<ul class="lista-inline">
					<li><b>short i /ɪ/</b></li>
					<li>In</li>
					<li>Bit</li>
					<li>This</li>
					<li>Give</li>
					<li>Sister</li>
					<li>City</li>
					<li>Will</li>
				</ul>
				<ul class="lista-inline">
					<ol>My s<b>i</b>ster L<b>i</b>nda w<b>i</b>ll l<b>i</b>ve <b>i</b>n a b<b>i</b>g city. </ol>
				</ul>
				<div class="clear"></div>
			</div>
		</div>
    </main>
    <script>
        activeMenu();
    </script>

@endsection
