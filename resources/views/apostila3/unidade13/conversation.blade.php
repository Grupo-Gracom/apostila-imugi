@extends('layouts.template')
@section('titulo','Unit 13 | Conversation')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="apostila3" data-unidade="unidade13" data-etapa="conversation">
			<h3 class="barlow">UNIT 13</h3>
			<h5 class="barlow">2 - CONVERSATION</h5>
			<span class="play-audio">( Aperte o play )</span>
			<audio controls="" controlslist="nodownload" class="suave">
				<source src="{{ asset('assets/audio/apostila2/UNIT 29/2. CONVERSATION/CONVERSATION.ogg') }}" type="audio/ogg">
			</audio>
			<p><b>Jake: </b>By the way guys, just to make some comments on the Empathy Map, I worked
			with a guy who was a specialist on that. The marketing agency results were awesome
			because of that.</p>
			<p><b>Students: </b>Cool teacher.</p>
			<p><b>Jake: </b>And one detail that is very important is the fact that this tool can be used to any
			kind of transaction that involves exchanging products, information, influence and etc.</p>
			<p><b>Akira: </b>Yeah teacher, I watched many videos about it. The first videos were more
			superficial. The ones which I saw yesterday were very detailed and complete. I can
			share the links with you if you want.</p>
			<p><b>Laura: </b>For a sure. I want to watch them as well. I have no idea how to use this tool. A
			friend of mine, who works in a pharmaceutical company, said that his company uses
			the same strategy. He said that his company has marketing departments in many
			different cities but in the office where he works, there is a team of specialists on that.</p>
			<p><b>John: </b>Teacher, I saw that there are two other tools which are very used as well. One is
			called Canvas and the other is called Value Proposition Map.</p>
			<p><b>Jake: </b>That’s it. Many companies use these three tools as means for understanding
			better the market they are interested in. In the beginning of the campaign, when you
			start thinking about a product or about a channel, It is a good moment to use these
			tools. Ok guys. That’s all for today. If you have time , check the link of the videos Akira
			is gonna share with us.</p>
			<p><b>Akira: </b>I’ll send it today, after the last class.</p>
			<p><b>John & Laura: </b>Great.</p>
			<p><b>Jake: </b>Take care guys.	</p>		
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