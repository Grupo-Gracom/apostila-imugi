@extends('layouts.template')
@section('titulo','UNIMUGI | Home')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila1" data-unidade="unidade2" data-etapa="vocabulary">
				<h3 class="barlow">UNIT 02 - INTRODUCTION TO PHOTOSHOP</h3>
				<p><b>Goal:</b>  Promote a broad understanding of what Photoshop is and its utilities in people’s professional lives.</p>
				<h5 class="barlow">1 - VOCABULARY</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/unit2/vocabulary/vocabulary.ogg') }}" type="audio/ogg">
				</audio>
				<ul class="lista-inline">
					<li><b>EDIT</b></li>
					<li><b>DEVELOP</b></li>
					<li><b>SUBJECT</b></li>
					<li><b>PICTURE</b></li>
					<li><b>LAYOUT</b></li>
					<li><b>TODAY</b></li>
					<li><b>ANY</b></li>
					<li><b>FOR</b></li>
					<li><b>VERSION</b></li>
				</ul>
				<h5 class="barlow">1.1 - CONVERSATION</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/unit2/conversation/conversation.ogg') }}" type="audio/ogg">
				</audio>
				<p style="margin-top: 16px"><b>Professor Ludemann :</b> HI everyone! Today is our second lesson. The subject today is Photoshop.</p>
				<p><b>Professor Ludemann :</b> The fi rst version of this soft ware was created in 1987 by two brothers. Their names are Thomas and John Knoll. Today, Photoshop is necessary in many
				professions. The word “Photoshop” is now a verb too!</p>
				<p><b>Professor Ludemann :</b>  Do any of you use Photoshop?</p>
				<p><b>João :</b>  I do, professor! I use it to edit my pictures because I am a photographer!</p>
				<p><b>Professor Ludemann :</b> Very good João! What about you, Bruna? Do you use Photoshop?</p>
				<p><b>Bruna :</b>  I do! I am a web designer. I need Photoshop to develop and edit layouts for sites.</p>
				<p><b>Professor Ludemann :</b> Thank you! You and João are great examples of the importance of Photoshop for professionals in the area of graphic design production.</p>
				<figure>
					<img src="{{ asset('assets/img/playgo/unit2/unidade1.png') }}" alt="Garotos festejando">
				</figure>
			</div>
		</div>
	</main>
	<script>
        activeMenu();
    </script>

@endsection
