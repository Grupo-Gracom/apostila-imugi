@extends('layouts.template')
@section('titulo','UNIMUGI | Home')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-unidade="unidade4" data-etapa="vocabulary">
				<h3 class="barlow">UNIT 04 - NICE TO MEET YOU, KATE!</h3>
				<p><b>Goal:</b> Getti ng to know the foreign student Kate Kawamura while taking the ti me to learn more about third person verb conjugati on as well as nati onaliti es and demonstrati ve pronouns.</p>
				<h5 class="barlow">1 - VOCABULARY</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/Unit4/1.Vocabulary/Page17Vocabulary.ogg') }}" type="audio/ogg">
				</audio>
				<ul class="lista-inline">
					<li><b>NEWS</b></li>
					<li><b>HAVE</b></li>
					<li><b>SPEAK</b></li>
					<li><b>UNDERSTAND</b></li>
					<li><b>MEET</b></li>
					<li><b>MAKE</b></li>
					<li><b>WANT</b></li>
				</ul>
				<h5 class="barlow">1.1 - CONVERSATION</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/Unit4/Conversation/Page17Conversation.ogg') }}" type="audio/ogg">
				</audio>
				<p style="margin-top: 16px"><b>Professor Sophia :</b> Hello class! I have news for you. Today, we have a new student.</p>
				<p><b>Professor Sophia :</b> Class, this is Kate Kawamura. She is not from here. She is from Japan! Kate doesn’t speak English very well, but she understands if you speak slowly.</p>
				<p><b>Kate :</b> Hello everyone. It’s very nice to meet you all! I am a wildlife photographer and I love to travel. This class is important to me because I want to make my pictures more beauti ful!</p>
				<p><b>Carlos Silva :</b> Welcome to the class, Kate! My name is Carlos and I am a student. I am not a professional like you, but I love photography too. It’s really nice to meet you.</p>
				<p><b>Kate : </b>  Thank you very much Carlos!</p>
				<figure>
					<img src="{{ asset('assets/img/playgo/unit4/pagina-1.png') }}" alt="Garotos festejando">
				</figure>
			</div>
		</div>
	</main>
	<script>
        activeMenu();
    </script>

@endsection
