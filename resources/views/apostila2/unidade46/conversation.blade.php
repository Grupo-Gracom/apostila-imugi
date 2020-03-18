@extends('layouts.template')
@section('titulo','Unit 46 | Conversation')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">

		<div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade46" data-etapa="conversation">
			<h3 class="barlow">UNIT 46</h3>
			<h5 class="barlow">2 - CONVERSATION</h5>

			<span class="play-audio">( Aperte o play )</span>
			<audio controls="" controlslist="nodownload" class="suave">
				<source src="{{ asset('assets/audio/apostila2/UNIT 46/2. CONVERSATION/CONVERSATION.ogg') }}" type="audio/ogg">
			</audio>
			<p style="margin-top: 16px"><b>Gleen:</b> Ok guys. How’s everything? What about the development of the story? Is everything ok?
				Students: So far so good. Everything under control teacher. The characters are ready.
				Now we are working on the story. What’s gonna happen exactly.</p>
			<p><b>Gleen:</b> Cool guys. There are many strategies to tell a story. It can be either linear or out
				of chronological order. Since you have three different characters with special powers
				connected by their minds, you could either have a common problem for them to solve
				together or an individual problem where they help each other using the power of their
				minds.</p>
			<p><b>Akira:</b> Awesome teacher. I like the idea of telling the story not in a chronological way. In
				my opinion it’s more challenging for us to produce and have a good result.
				(to be continued)</p>
			<figure>
				<img src="{{ asset('assets/img/dominating/unit46/conversation.png') }}" alt="filmes">
			</figure>
		</div>
	</div>
</main>
<script>
	activeMenu();
</script>

@endsection