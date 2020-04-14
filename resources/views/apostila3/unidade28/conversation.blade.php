@extends('layouts.template')
@section('titulo','Unit 28 | Conversation')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="apostila3" data-unidade="unidade28" data-etapa="conversation">
			<h3 class="barlow">UNIT 28</h3>
			<h5 class="barlow">2 - CONVERSATION</h5>
			<span class="play-audio">( Aperte o play )</span>
			<audio controls="" controlslist="nodownload" class="suave">
				<source src="{{ asset('assets/audio/apostila3/UNIT 28/2. CONVERSATION/CONVERSATION.ogg') }}" type="audio/ogg">
            </audio>
            <div class="clear"></div>
            <p style="margin-top: 16px">
                <p><b>Jake :</b> Hello guys, how are you? Are ready to present your plans?</p>
                <p><b>Students :</b> Yes teacher. We finished everything and we are excited to share our ideas.</p>
                <p>
                    <b>Jake :</b> Before you start, I’d like to congratulate you for the excellent job you’ve done
                    so far. When Gleen told me about you, I couldn’t guess how interested and dedicated
                    you guys were. I’m sure you’re gonna present something fantastic and that you’re
                    gonna create something really meaningful for the society. Who wants to start?
                </p>
                <p><b>John :</b> I can start teacher.</p>
                <p><b>Jake :</b> Great. Go ahead. After you finish, we’ll have Laura and Akira ok.</p>
                <p><b>Laura & Akira :</b> Great teacher.</p>
                <p><b>John(Description) : ???</b></p>
                <p><b>Laura(Narration) : ???</b></p>
                <p><b>Akira(Explanation) : ???</b></p>
                <p>
                    <b>Jake :</b> Wow. Congratulations guys. You are ready to start your project. I’m really proud
                    of you guys. You demonstrated a real sense of identity in your projects and certainly,
                    your voice is gonna be heard around the world.
                </p>
                <p><b>Students :</b> Thank you teacher.</p>
                <p>
                    <b>Jake :</b> Well, that’s it for today guys. Please, for next class research about “Skills for the
                    4th Industrial revolution”. We’re gonna talk about it ok. I see you in the next class ok.
                </p>
                <p><b>Students :</b> See you teacher.</p>
            </p>
			<div style="margin-top: 36px">
				<figure>
					<img src="{{ asset('assets/img/masteroflanguage/unit28/conversation.jpg') }}" alt="apresentação">
				</figure>
			</div>
		</div>
	</div>
</main>

<script>
	activeMenu();
</script>

@endsection
