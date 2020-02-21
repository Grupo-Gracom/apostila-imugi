@extends('layouts.template')
@section('titulo','UNIMUGI | Home')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade6" data-etapa="conversation">
				<h3 class="barlow">UNIT 6</h3>
				<h5 class="barlow">2 - CONVERSATION</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/Unit6/Conversation/completo.ogg') }}" type="audio/ogg">
				</audio>
				<p style="margin-top: 16px">
					<b>Gleen :</b> My dear students. How are you guys? I hope everything is ok. Let’s start the	class? Today Akira and Laura have something to share with us. Do you guys have your
					notes? John is all set for today.
				</p>
				<p><b>Akira and Laura :</b> Yes teacher we are ready.</p>
				<p><b>Akira :</b>  Ladies first. (LOL)</p>
				<p><b>Laura :</b> Thank you Akira. You are very smart but no problem teacher, I’m ready.</p>
				<p><b>Gleen :</b> Great Laura. Go ahead.</p>
				<p>
					<b>Laura :</b> Guys, the first thing I do is to decide with my client what type of video he needs. Second, 
					I prepare a story board and discuss the details with the client. Then we list everything
					we need. The takes, the scenarios, the people involved, material, scripts and etc. When
					the material is ready, it’s time to plan how we are going to work on the video. I decide what
					softwares and effects I want to use. Zooming, Fading, Rotating, special effects like shades,
					different colors, backgrounds and etc. I apply all these tools and effects and finish the video.
					Finally, I arrange a meeting with my client and show him the final result. That’s it.
				</p>
				<p><b>Gleen :</b> Awesome Laura. A lot of steps. And you Akira.</p>
				<p>
					<b>Akira :</b> Well guys, we almost always start with a brainstorm. We have an idea about one
					game or one phase of the game and we brainstorm how we want to create it. After that,
					it’s time for the story-telling technique. A good game has a good story behind it. So, we
					write the story. When all these elements are ok, it’s time to sit and start programming.
					We also decide what software to use, what tools and etc. An FPS game for example we
					need to plan things like Navigation and orientation inside the game. Well, basically this
					is the way we develop the games.
				</p>
				<p>
					<b>Gleen :</b> Guys, you rock. That’s is for today. Next class we’re going to talk about your
					current jobs. Things that you are producing, creating or developing ok. See you
					tomorrow folks.
				</p>
				<div style="margin-top: 36px">
					<figure>
						<img src="{{ asset('assets/img/playgo/unit6/pagina-1.png') }}" alt="Toy Story">
					</figure>
				</div>
			</div>
		</div>
	</main>
	
	<script>
        activeMenu();
    </script>

@endsection
