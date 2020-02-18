@extends('layouts.template')
@section('titulo','UNIMUGI | Home')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila1" data-unidade="unidade21" data-etapa="conversation">
				<h3 class="barlow">UNIT 21 - PROFESSOR SARAH HENDRIX</h3>
				<h5 class="barlow">2 - CONVERSATION</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/unit1/conversation/conversation.ogg') }}" type="audio/ogg">
				</audio>
				<p style="margin-top: 16px"><b>Sarah :</b>  Morning! My name is Sarah Hendrix and i’ll be your teacher. First, i’d like to tell you all a little bit about myself.</p>
				<p><b>Sarah :</b> Well, it’s a long story. I’ll make it simple though. I was born in England but I movedto the u.S. When I was 17 to specialize in ilustration, the area I work in today. I used to
					draw for the school paper ilustrations back in England.</p>
				<p><b>Sarah :</b> Nowadays, i’m 29 years old and I produce ilustrations for a variety of companies such as advertising agencies and magazines.</p>
				<p><b>Sarah :</b> During these lessons we will see how photoshop can be of use for an ilustrator.</p>
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
