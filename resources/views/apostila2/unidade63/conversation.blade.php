@extends('layouts.template')
@section('titulo','Unit 63 | Conversation')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade62" data-etapa="conversation">
				<h3 class="barlow">UNIT 62</h3>
				<h5 class="barlow">2 - CONVERSATION</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/apostila2/UNIT 63/2. CONVERSATION/CONVERSATION.ogg') }}" type="audio/ogg">
				</audio>
				<p style="margin-top: 16px">
					<b>Gleen :</b>   I’m very happy to see that you got more than just technical knowledge. To make a
					difference, you gotta be critical. You have to ask questions that were not asked yet. Every
					time you have the chance to make a difference. It all depends on how you see yourself in the
					process. If you come to the game decided to win, you’re gonna find a way to do so. Be bold,
					be creative, be hungry to think out of the box. Don’t see things from a trivial point of view.
					Go beyond, walk the extra mile. There is less people in the extra mile and it’s there that the winners like to be. 
				</p>
				<p>
					<b>Students :</b>  Wow teacher, thanks for all these advices. We’ll take them with us in our journey.
				</p>
				<p>
					<b>Gleen :</b>  Awesome guys. Ok, its time to present your video. Lets’ see it?
					Students: Ok. Let’s see it. Fasten your seat belts. (to be continued)
				</p>
				<div style="margin-top: 36px">
					<figure>
						<img src="{{ asset('assets/img/playgo/unit63/pagina-1.png') }}" alt="amigos">
					</figure>
				</div>
			</div>
		</div>
	</main>
	
	<script>
        activeMenu();
    </script>

@endsection
