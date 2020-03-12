@extends('layouts.template')
@section('titulo','Unit 13 | Pronunciation')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')

	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade13" data-etapa="pronunciation">
				<h3 class="barlow">UNIT 13</h3>
				<h5 class="barlow">4 - PRONUNCIATION</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/apostila2/UNIT 13/4. PRONUNCIATION/PRONUNCIATION.ogg') }}" type="audio/ogg">
				</audio>
                <div class="clear"></div>

				<ul class="lista-inline">
                    <li><b class="upper" style="color:green;">short u /ʌ/</b></li>
                    <li><b class="upper">Come</b></li>
                    <li><b class="upper">Love</b></li>
                    <li><b class="upper">Up</b></li>
                    <li><b class="upper">Jump</b></li>
                    <li><b class="upper">But</b></li>
                    <li><b class="upper">About</b></li>
                    <li><b class="upper">Does</b></li>
                </ul>
                <p>C<b>o</b>me here my l<b>o</b>ve b<b>u</b>t don’t j<b>u</b>mp <b>u</b>p and down. He d<b>o</b>esn’t know <b>a</b>bout the movie.</p>
			</div>
		</div>
    </main>
    <script>
        activeMenu();
    </script>

@endsection
