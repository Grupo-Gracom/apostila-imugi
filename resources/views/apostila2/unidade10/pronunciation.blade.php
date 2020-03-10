@extends('layouts.template')
@section('titulo','Unit 10 | Pronunciation')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')

	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade10" data-etapa="pronunciation">
				<h3 class="barlow">UNIT 10</h3>
				<h5 class="barlow">4 - PRONUNCIATION</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio10/Pronunciation/completo.ogg') }}" type="audio/ogg">
                </audio>
				<div class="clear"></div>
				<ul class="lista-inline">
					<li><b>long o /oʊ/</b></li>
					<li>Go</li>
					<li>Slow</li>
					<li>So</li>
					<li>Those Post</li>
					<li>Drove moment</li>
				</ul>
				<ul class="lista-inline">
					<ol>Don’t g<b>o</b> too sl<b>o</b>w. The m<b>o</b>ment you called, he dr<b>o</b>ve to the p<b>o</b>st. </ol>
				</ul>
				<div class="clear"></div>
			</div>
		</div>
    </main>
    <script>
        activeMenu();
    </script>

@endsection
