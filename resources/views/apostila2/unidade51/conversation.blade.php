@extends('layouts.template')
@section('titulo','UNIMUGI | Home')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade51" data-etapa="conversation">
				<h3 class="barlow">UNIT 51</h3>
				<h5 class="barlow">2 - CONVERSATION</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/Unit51/Conversation/completo.ogg') }}" type="audio/ogg">
				</audio>
				<p style="margin-top: 16px">
					<b>Jhon :</b>  I have already seen many movies of them and I’ve never watched a boring movie. 
				</p>
				<p>
					<b>Gleen :</b>  Have you watched Justice league yet?
				</p>
				<p>
					<b>John :</b>  No teacher, I haven’t seen it yet. I intend to watch it in the next weekend.
				</p>
				<p>
					<b>Gleen :</b>  You’re gonna love it. It’s one of the best movies I’ve ever seen.
				</p>
				<p>
					<b>Akira :</b>  Really? Is it that good? So I’ll see it too.
				</p>
				<p>
					<b>Gleen :</b>  Do it. It’s worth seeing it. The visual art, the story and the special effects are
					stunning. The movie makers are using technology that is not from this world to produce
					the movies. From cameras to editing softwares. Edition isles that cost millions of dollars.
					I have been to many technology fairs to see what they are creating and every edition is
					a punch in the stomach.
				</p>
				<p>
					<b>Laura :</b>  Awesome. Next fair I’ll go to see what is about to come to the market.
				</p>
				<p>
					<b>John :</b>  Me too. I won’t miss it. (to be continued)
				</p>
				<div style="margin-top: 36px">
					<figure>
						<img src="{{ asset('assets/img/playgo/unit38/pagina-1.png') }}" alt="Home office">
					</figure>
				</div>
			</div>
		</div>
	</main>
	
	<script>
        activeMenu();
    </script>

@endsection
