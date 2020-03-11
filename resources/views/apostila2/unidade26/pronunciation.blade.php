@extends('layouts.template')
@section('titulo','Unit 26 | Pronunciation')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade26" data-etapa="pronunciation">
				<h3 class="barlow">UNIT 26</h3>
				<h5 class="barlow">4 - PRONUNCIATION</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio26/Pronunciation/completo.ogg') }}" type="audio/ogg">
                </audio>
				<div class="clear"></div>
				<ul class="lista-inline">
					<li><b>r sound /r/</b></li>
					<li>Ready</li>	
					<li>Receive</li>
					<li>Group</li>
					<li>Friends</li>
					<li>Celebrate</li>
					<li>year</li>
				</ul>
				<ul class="lista-inline">
					<ol>We a<b>r</b>e ready to <b>r</b>eceive a g<b>r</b>oup of f<b>r</b>iends to celeb<b>r</b>ate the end of the yea<b>r</b>. </ol>
				</ul>
				<div class="clear"></div>
			</div>
		</div>
    </main>
    <script>
        activeMenu();
    </script>

@endsection
