@extends('layouts.template')
@section('titulo','UNIMUGI | Home')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-unidade="unidade22" data-etapa="conversation">
				<h3 class="barlow">UNIT 22 - SARAH’S STUDENTS</h3>
				<h5 class="barlow">2 - CONVERSATION</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/unit1/conversation/conversation.ogg') }}" type="audio/ogg">
				</audio>
				<p style="margin-top: 16px"><b>Mariana :</b> Hey guys, i’m Mariana Freitas. I’m from Brazil. I didn’t think I would be in this class because 
					I thought this would be very difficult, but i’m here and I will do my best to learn.</p>
				<p><b>Rafael :</b> What’s up? My name is Rafael, but just call me rafa, please. I’m a student and i’m taking this course because i’m going to work
					 for an advertising company and I think this would be interesting for an eventual promotion.</p>
				<p><b>Marcelo :</b>  Hello. I’m Marcelo. I’m 19 years old and i’m a college student in the field of gastronomy. I know it is not what you expect from
					 a photoshop student, but my hobby is drawing so, I guess it’s interesting for me.</p>
				<p><b>Kylie :</b> Hi! My name’s Kylie and i’m a 26-year-old photographer from Australia. I love drawing too! That’s why i’m here.</p>
				<figure>
					<img src="{{ asset('assets/img/playgo/unit1/unidade1.png') }}" alt="Garotos festejando">
				</figure>
			</div>
		</div>
	</main>
	<script>
        activeMenu();
    </script>

@endsection
