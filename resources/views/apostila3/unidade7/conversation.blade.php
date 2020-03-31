@extends('layouts.template')
@section('titulo','Unit 07 | Conversation')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="apostila3" data-unidade="unidade7" data-etapa="conversation">
			<h3 class="barlow">UNIT 7</h3>
			<h5 class="barlow">2 - CONVERSATION</h5>
			<span class="play-audio">( Aperte o play )</span>
			<audio controls="" controlslist="nodownload" class="suave">
				<source src="{{ asset('assets/audio/apostila2/UNIT 29/2. CONVERSATION/CONVERSATION.ogg') }}" type="audio/ogg">
			</audio>

			<p><b>Jake: </b>Ok guys. Welcome to one more class. Let’s dive into to topic?</p>
			<p><b>Students: </b>Fasten your seat belts. We’re about to take off .</p>
			<p><b>Jake: </b>Yeah. That’s it. Well, I told you in the last class that we would make a retrospecti ve
			analysis of Youtube evoluti on, do you remember?</p>
			<p><b>Students: </b>Yes teacher.</p>
			<p><b>Jake: </b>So, as I menti oned before, The creators of Youtube sold it for Google for 1.6 billion
			dollars. Before all this, they were employees of Elon Musk. They worked for Paypall and
			decided to create a platf orm to broadcast videos.</p>
			<p><b>Akira: </b>You’re kidding. When they sold it for Google they had already worked for Elon Musk?
			The SpaceX and Tesla owner. That’s crazy guys.</p>
			<p><b>Jake: </b>For sure Akira. At that ti me, they were trying to create a dati ng service using videos but
			people didn’t use to expose themselves like that. They simply didn’t buy the fi rst idea.
			Because of that, one of the creators decided to post his fi rst video. He posted a personal
			video of a visit to the zoo. And guess what. The fi rst video to hit 1 million views was a Nike
			ad with Ronaldinho Gaucho doing some “embaixadinhas”. Can you believe that?</p>
			<p><b>Laura: </b>Gee, I can’t believe that.</p>
			<p><b>Jake: </b>Well, This was the beginning of Youtube. From that moment on, many diff erent people
			have adhered to the idea of broadcasti ng themselves. Companies have invested huge money
			to promote their brands. Presidents have used it in their campaigns and regular people like
			us, have used it to shout out their ideas to the world.</p>
			<p><b>Students: </b>We’re shocked. Really, that’s crazy.</p>
			<p><b>Jake: </b>Never doubt what a simple idea can generate.</p>
			<p><b>(to be continued)</b></p>
			<div style="margin-top: 36px">
				<figure>
					<img src="{{ asset('assets/img/dominating/unit29/conversation.jpg') }}" alt="pensando grafico">
				</figure>
			</div>
		</div>
	</div>
</main>

<script>
	activeMenu();
</script>

@endsection