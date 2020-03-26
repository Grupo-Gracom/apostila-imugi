@extends('layouts.template')
@section('titulo','Unit 27 | Conversation')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="apostila3" data-unidade="unidade27" data-etapa="conversation">
			<h3 class="barlow">UNIT 27</h3>
			<h5 class="barlow">2 - CONVERSATION</h5>
			<span class="play-audio">( Aperte o play )</span>
			<audio controls="" controlslist="nodownload" class="suave">
				<source src="{{ asset('assets/audio/apostila3/UNIT 27/2. CONVERSATION/CONVERSATION.ogg') }}" type="audio/ogg">
			</audio>
            <p style="margin-top: 16px">
                <p>
                    <b>John :</b> I love this time guys. When I think that a person can become whatever he or
                    she wants to be, I feel this freedom. It’s priceless. Last week, a friend of mine called
                    me to ask how he could start a channel to share his ideas on sustainability. I never
                    thought he would get attracted to internet. I just didn’t realize he had a cause which
                    drives his actions. Internet is a great tool for him to share his ideas on the subject and
                    reach millions of people.
                </p>
                <p><b>Jake :</b> Wow! That’s awesome. And what did you say ?</p>
                <p>
                    <b>John :</b> I said that if I were him, I would let the world know what I believe. Then he
                    asked me how he could do that and I shared with him everything we have talked so
                    far, during the classes.
                </p>
                <p>
                    <b>Jake :</b> Hey, I have an idea. Why don’t you invite him to come for one of our classes. He
                    could ask wherever he wants. We can share with him what we have done so far. I’m
                    sure that after talking to you guys, he’s gonna be more confident and motivated to
                    start.
                </p>
                <p><b>Laura :</b> What a nice idea. It’ll be a great opportunity for him.</p>
                <p>
                    <b>Akira :</b> You see, these are the things the new era of technology brings. The connection
                    based on the idea of making a difference in people’s lives. That’s why I believe we are
                    living in a very special moment.
                </p>
                <p>
                    <b>Jake :</b> Fantastic guys. Congratulations for your ideas and personal development. Well,
                    we have only 5 more classes to finish the course. Next class I’d like to have each one
                    of you presenting the plan for your channel ok. That’s it for today. I see you in the
                    next class ok.
                </p> 
            </p>
			<div style="margin-top: 36px">
				<figure>
					<img src="{{ asset('assets/img/masteroflanguage/unit27/conversation.jpg') }}" alt="estudando">
				</figure>
			</div>
		</div>
	</div>
</main>

<script>
	activeMenu();
</script>

@endsection
