@extends('layouts.template')
@section('titulo','Unit 09 | Conversation')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="apostila3" data-unidade="unidade9" data-etapa="conversation">
			<h3 class="barlow">UNIT 9</h3>
			<h5 class="barlow">2 - CONVERSATION</h5>
			<span class="play-audio">( Aperte o play )</span>
			<audio controls="" controlslist="nodownload" class="suave">
				<source src="{{ asset('assets/audio/apostila2/UNIT 29/2. CONVERSATION/CONVERSATION.ogg') }}" type="audio/ogg">
			</audio>

			<P><B>Jake: </B>Welcome back my dear potential youtubers. How are you guys?</P>
			<P><B>Students: </B>Great teacher. Everything is ok.</P>
			<P><B>Akira: </B>Thoughtful about the power my voice can have teacher. I’m really concerned
			with that.</P>
			<P><B>Laura: </B>Me too . You know what? It’s the fi rst ti me I think I have the power to change
			something. That’s a great feeling.</P>
			<P><B>John: </B>I have to confess that it frightens me a little. But I could come up with an idea
			that resonates with me. In the next month I want to start a channel to show info on
			how to treat images with free soft ware. The idea is to show interested people how
			they can start designing without spending too much money.</P>
			<P><B>Akira: </B>I’m gonna start a channel about FPS game leadership. I want to show how the
			military techniques can be used in the games and how people can develop leadership
			skills playing games.</P>
			<P><B>Jake: </B>And What about you Laura?
			Laura: Well, I want to teach people techniques to make videos with simple cell
			phones and as John said, how to edit them using free software.</P>
			<P><B>Jake: </B>Wow. Great ideas. Well, based on that I just had an idea. In the next class I’ll
			bring some ideas on how to plan the beginning of your channel ok. What do you think
			about it?</P>
			<P><B>Students: </B>Fantastic. If we dedicate ourselves, by the end of the course we will have
			uploaded our first video. That’s great.</P>
			<P><B>Jake: </B>Great guys. I’ll be working on that during this weekend and we talk in the next
			class ok. That’s it for today. I see you in the next class.</P>
			<P><B>Students: </B>Thank you teacher. See you in the next class.</P>
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