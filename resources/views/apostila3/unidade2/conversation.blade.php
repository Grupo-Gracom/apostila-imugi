@extends('layouts.template')
@section('titulo','Unit 2 | Conversation')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')

	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila3" data-unidade="unidade2" data-etapa="conversation">
				<h3 class="barlow">UNIT 2</h3>
				<h5 class="barlow">2 - CONVERSATION</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/apostila2/UNIT 29/2. CONVERSATION/CONVERSATION.ogg') }}" type="audio/ogg">
				</audio>

				<p><b>Jake:</b> Hello guys. How are you? Are you ready to start?</p>
				<p><b>Students:</b> For sure teacher. We couldn’t be more excited to start.</p>
				<p><b>Jake:</b> So, Let’s get down to work. I have some comments to make before we start ok.
				We’re gonna talk about many details related to our main topic. The more you study
				about them, the bett er you´re gonna be. My fi rst hint is: Learn about the theory in
				the class, but practi ce it trying to use what we are gonna learn together. The good
				news is that it’s really fun to build a Youtube channel from scratch. The bad news is
				that there’s only one way to do it right. It’s being prepared to make mistakes an learn
				from the mistakes ok.</p>
				<p><b>Students:</b> Great.</p>
				<p><b>Akira:</b> Teacher, what’s your opinion about Youtube? Did it really change the
				traditi onal media.</p>
				<p><b>Jake:</b> For sure Akira. Aft er Youtube, everybody is a potenti al reporter, a potenti al
				teacher, a potenti al whatever you wanna be. Here is some great news. You can really
				impact the society much faster today. Many outstanding guys are spreading their
				voices through Youtube. That’s great, isn’t it.</p>
				<p><b>Laura:</b> I have learned a lot from Youtube videos teacher. It’s really awesome.
				Unfortunately, not everybody understands the power of it.</p>
				<p><b>John:</b> Yeah, some people use it for wrong purposes but I’m sure that by the end of
				the course, We’ll have learned how to contribute by sharing good info.</p>
				<p><b>Jake:</b> That’s it guys. That’s it for today. I see you tomorrow ok.</p>

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
