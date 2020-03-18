@extends('layouts.template')
@section('titulo','Unit 04 | Conversation')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="apostila3" data-unidade="unidade4" data-etapa="conversation">
			<h3 class="barlow">UNIT 4</h3>
			<h5 class="barlow">2 - CONVERSATION</h5>
			<span class="play-audio">( Aperte o play )</span>
			<audio controls="" controlslist="nodownload" class="suave">
				<source src="{{ asset('assets/audio/apostila2/UNIT 29/2. CONVERSATION/CONVERSATION.ogg') }}" type="audio/ogg">
			</audio>

			<p><b>Jake:</b> Well guys. Let’s have a brainstorm here. Who are the most famous Youtubers
			you know? Don’t forget to tell us why do you believe they are famous and what
			message they promote in their channels?</p>
			<p><b>John:</b> Teacher, in Brazil I believe that Winderson Nunes has become one of the most
			famous ones.</p>
			<p><b>Akira:</b> Yeah teacher. We have other names like Felipe Neto and his brother Lucas who
			has a channel for kids. Julio Cocielo who is sick teacher. The guys is completely nuts.</p>
			<p><b>Laura:</b> Hey, what about the girls in this story. There’s a prett y girl on Youtube. Her
			name is Kefera. Her videos are awesome.</p>
			<p><b>Jake:</b> Any internati onal name you want to mention?</p>
			<p><b>John:</b> Yeah. The Logan brothers and my favorite teacher. Pewdiepie. The guy is
			fantastic. He’s crazy as well, but I like him.</p>
			<p><b>Jake:</b> Guys, bear in mind that in the traditi onal media world all this irreverence is
			not welcome. Youtube, simply allows anybody to be himself or herself in front of the
			cheap camera of a cell phone.</p>
			<p><b>Akira:</b> Teacher, It’s important to say that some of these irreverent guys make much
			more money with Youtube than some famous traditi onal artists.</p>
			<p><b>Jake:</b> Yep. That’s it guys. Next class we go on talking about what message these guys
			transmit ok.</p>
			<p><b>Students:</b> Great teacher. See you in the next class.</p>

			<p class="contentVerde">Explaining Procedures = Giving instructions = Sequence of steps to be follow.</p>

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