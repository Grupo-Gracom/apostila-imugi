@extends('layouts.template')
@section('titulo','Unit 12 | Pronunciation')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')

	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade12" data-etapa="pronunciation">
				<h3 class="barlow">UNIT 12</h3>
				<h5 class="barlow">4 - PRONUNCIATION</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/unit1/pronuciation/pronuciation.ogg') }}" type="audio/ogg">
                </audio>
                <div class="clear"></div>
				<ul class="lista-inline">
                    <li><b class="upper" style="color:green;">long u /ju/</b></li>
                    <li><b class="upper">Youth</b></li>
                    <li><b class="upper">University</b></li>
                    <li><b class="upper">Usually</b></li>
                    <li><b class="upper">Huge</b></li>
                    <li><b class="upper">Future</b></li>
                    <li><b class="upper">music</b></li>
                </ul>
                <p><b>You</b>th <b>u</b>sually study m<b>u</b>sic in h<b>u</b>ge <b>u</b>niversities.</p>
			</div>
		</div>
    </main>
    <script>
        activeMenu();
    </script>

@endsection
