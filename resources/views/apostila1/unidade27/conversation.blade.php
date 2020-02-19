@extends('layouts.template')
@section('titulo','UNIMUGI | Home')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila1" data-unidade="unidade27" data-etapa="conversation">
				<h3 class="barlow">UNIT 27 - PROFESSOR VICTOR</h3>
				<h5 class="barlow">2 - CONVERSATION</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/Unit27/Conversation/completo.ogg') }}" type="audio/ogg">
				</audio>
				<p style="margin-top: 16px">
				<b>Victor :</b> welcome to our first lesson. You can call me victor. I’m a professional video editor and i’ll teach you about how a video editor applies photoshop in his work.</p>
				<p>I’m a 29-year-old advertising graduate. I’ve worked with video editing for about 5 years now. I edit videos for some well-known artists in the city.</p>
				<p>I use many tools to edit videos, but you need to understand the basic first. That’s why i’ll show you how you can use photoshop to do it. Contrary to common opinion,
				photoshop has very useful tools for the job.</p>
				<p>You can edit the videos on photoshop just like photos. You can control settings like
				levels, curves, brightness, contrast and more. There is much to learn.</p>

				<div class="metade" style="margin-top: 36px">
					<figure>
						<img src="{{ asset('assets/img/playgo/unit27/pagina-1.png') }}" alt="Garotos festejando">
					</figure>
				</div>
			</div>
		</div>
	</main>
	<script>
        activeMenu();
    </script>

@endsection
