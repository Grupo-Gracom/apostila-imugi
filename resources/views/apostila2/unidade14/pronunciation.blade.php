@extends('layouts.template')
@section('titulo','Unit 14 | Pronunciation')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')

	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade14" data-etapa="pronunciation">
				<h3 class="barlow">UNIT 14</h3>
				<h5 class="barlow">4 - PRONUNCIATION</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/unit1/pronuciation/pronuciation.ogg') }}" type="audio/ogg">
                </audio>
                <div class="clear"></div>
				<ul class="lista-inline">
                    <li><b class="upper" style="color:green;">other u /ʊ/</b></li>
                    <li><b class="upper">Look</b></li>
                    <li><b class="upper">Took</b></li>
                    <li><b class="upper">Put</b></li>
                    <li><b class="upper">Foot</b></li>
                    <li><b class="upper">Full</b></li>
                    <li><b class="upper">Cookie</b></li>
                </ul>
                <p>Take a l<b>oo</b>k. He t<b>oo</b>k the f<b>u</b>ll pack of c<b>oo</b>kie and p<b>u</b>t near his f<b>oo</b>t.</p>
			</div>
		</div>
    </main>
    <script>
        activeMenu();
    </script>

@endsection
