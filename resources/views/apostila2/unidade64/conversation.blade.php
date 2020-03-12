@extends('layouts.template')
@section('titulo','UNIMUGI | Home')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade64" data-etapa="conversation">
				<h3 class="barlow">UNIT 64</h3>
				<h5 class="barlow">2 - CONVERSATION</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/apostila2/UNIT 64/2. CONVERSATION/CONVERSATION.ogg') }}" type="audio/ogg">
				</audio>
				<p style="margin-top: 16px">
					<b>(after watching the movie)</b>
				</p>
				<p style="margin-top: 16px">
					<b>Gleen :</b>  Congratulations guys. It was simply fantastic to see the final result. I’d like to make
					some comments in this last class. It was awesome to go on this journey with you. Thank
					you for being willing to learn. Thank you for your generosity of sharing your findings, your
					doubts, your failures, your victories. This movie represents the best you have in your souls.
					You guys are extraordinary. I wish all the best in your career.
				</p>
				<p>
					<b>Akira :</b> Teacher, thanks for all your support. I loved to study with you.
				</p>
				<p>
					<b>John :</b>  Teacher, I want to say that so far, it was the best course I ever had. Because of the content and especially because of you guys. Thank you.
				</p>
				<p>
					<b>Laura :</b>  Teacher, I also want to thank you for all your love with us. I could feel it in every single class. 
				</p>
				<p>
					<b>Students :</b>  We wish you all the best. Thanks for everything.
				</p>
				<p>
					<b>Gleen :</b>  Thanks guys. May the force be with you. Bye.
				</p>
				<div style="margin-top: 36px">
					<figure>
						<img src="{{ asset('assets/img/playgo/unit60/pagina-1.png') }}" alt="mestre yoda">
					</figure>
				</div>
			</div>
		</div>
	</main>
	
	<script>
        activeMenu();
    </script>

@endsection
