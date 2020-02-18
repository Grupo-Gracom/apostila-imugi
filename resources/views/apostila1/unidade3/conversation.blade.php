@extends('layouts.template')
@section('titulo','UNIMUGI | Home')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-unidade="unidade3" data-etapa="conversation">
				<h3 class="barlow">UNIT 03 - PHOTOGRAPHY AND PHOTOSHOP</h3>
				<h5 class="barlow">2 - CONVERSATION</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/unit3/conversation/uni3convers.ogg') }}" type="audio/ogg">
				</audio>

				<p style="margin-top: 16px"><b>Professor Sophia Jones :</b> Good morning Class! It is very nice to meet you all! I am Professor Sophia Jones, but please call me Sophia. I am originally from the United States. I’m 27 years old and I am a professional fashion photographer. My hobby is wildlife photography.</p>
				<p><b>Professor Sophia Jones :</b> Do you know why a photographer is teaching you a Photoshop class?</p>
				<p><b>Klaus :</b> Is it because you need Photoshop to edit your photos, teacher?</p>
				<p><b>Professor Sophia Jones :</b> Exactly Klaus! My work is published in magazines and websites, so it is very important for me to know how to use tools for editing.</p>
				<p><b>Katia :</b> Teacher, why do you prefer Photoshop to diff erent programs?</p>
				<p><b>Professor Sophia Jones :</b> Good questi on, Kati a! I choose to use Photoshop because it off ers the most advanced and complete editi ng tools.</p>
				<figure class="full">
					<img src="{{ asset('assets/img/playgo/unit3/ilust_03.jpg') }}" alt="Garotos festejando">
				</figure>
			</div>
		</div>
	</main>
	<script>
        activeMenu();
    </script>

@endsection
