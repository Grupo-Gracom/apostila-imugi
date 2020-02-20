@extends('layouts.template')
@section('titulo','UNIMUGI | Home')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade6" data-etapa="conversation">
				<h3 class="barlow">UNIT 01 - INTRODUCTION TO GRAPHIC DESIGN PRODUCTION</h3>
				<h5 class="barlow">2 - CONVERSATION</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/unit1/conversation/conversation.ogg') }}" type="audio/ogg">
				</audio>
				<p style="margin-top: 16px"><b>Professor Ludemann :</b> Hello class. Welcome to our first lesson. My name is Caique Ludemann. I am from Canada, but I moved to Brazil five years ago. I work with graphic production.</p>
				<p><b>Professor Ludemann :</b> This area of work is extremely vast. It includes professionals from the fields of photography, web design, video edition, game design and others.</p>
				<p><b>Professor Ludemann :</b> Graphic designers have an infinite number of opportunities for work because the market in this area is continuously expanding</p>
				<p><b>Bruno :</b> Professor, photography is my hobby and I need a program to edit my photos.</p>
				<p><b>João :</b> Hey Bruno, I am a professional photographer! I use Photoshop to edit my photos. It is an excellent software. The possibilities are infinite.</p>
				<p><b>Professor Ludemann :</b> Thank you João. You are correct! Photoshop is the ideal software to use for image edition.</p>
				<figure>
					<img src="{{ asset('assets/img/playgo/unit1/unidade1.png') }}" alt="Garotos festejando">
				</figure>
			</div>
		</div>
	</main>
	<script>
        activeMenu();
    </script>

@endsection
