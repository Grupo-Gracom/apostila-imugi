@extends('layouts.template')
@section('titulo','UNIMUGI | Home')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade51" data-etapa="vocabulary">
				<h3 class="barlow">UNIT 51</h3>
				<h5 class="barlow">1 - VOCABULARY</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/Unit51/Vocabulary/completo.ogg') }}" type="audio/ogg">
				</audio>
				<h5 class="barlow" style="margin-top: 16px">A -  WORDS AND EXPRESSIONS</h5>
				<ul class="lista-inline">
					<ol><b>TO AGREE / with something / with somebody / to do something</b></ol>
				</ul>
				<ul class="lista-inline">
					<ol><b>TO KNOW / a person /something / by heart</b></ol>
				</ul>
				<ul class="lista-inline">
					<ol><b>TO NEED / help / attention / to do something</b></ol>
				</ul>

				<table class="metade espacamento center-align">
					<tr>
						<td>
							<h5 class="barlow">
								<b>YET</b> - is used to talk about something which is expected to happen. It
								means ‘<b>at any time up to now</b>’. It is used in <b>questions and negatives</b>.
							</h5>
						</td>
					</tr>
					<tr>
						<td>
							<p>(?) Has the client sent the final proposal yet?</p>
							<p>(-) No, he hasn't sent it yet. He will send it by Friday morning.</p>
						</td>
					</tr>
					<tr>
						<td>
							<h5 class="barlow">
								<b>ALREADY</b> - is used to say that something has happened early - or earlier
								than it might have happened.	
							</h5>
						</td>
					</tr>
					<tr>
						<td>
							<p>(+) <b>I have already finished</b> the story-board for the game.</p>
							<p>(+) They <b>have already arrived</b> in New York.</p>
						</td>
					</tr>
					<tr>
						<td>
							<h5 class="barlow">
								<b>EVER</b> – (?) used to check if something has, by any chance, happened any time before now.<br>
								(-) used to emphasize that something has happened any time before now.
							</h5>
						</td>
					</tr>
					<tr>
						<td>
							<p>(?) <b>Have</b> you <b>ever been</b> to San Francisco?</p>
							<p>(?) <b>Has</b> she <b>ever tried</b> to use blender in her job?</p><br>
							<p>(+) San Francisco is the nicest city <b>I’ve ever been</b> to.</p>
							<p>(+) What a boring story. It’s the most boring anime <b>I’ve ever</b> seen</p>
						</td>
					</tr>
					<tr>
						<td>
							<h5 class="barlow">
								<b>NEVER</b> – (+) to inform that something hasn’t happened up to now.<br>			
								(?) It expresses a strong degree of doubt that the action has really happened.
							</h5>
						</td>
					</tr>
					<tr>
						<td>
							<p>(+) They have never been to a Comic Von abroad.</p>
							<p>(+) We have never used this specific tool.</p><br>
							<p>(?) Have you never played LOL. You're Kidding.</p>
							<p>(?) Has she never watched Naruto? No way.</p>
						</td>
					</tr>
				</table> 
				
				<h5 class="barlow" style="margin-top: 32px">B -  WORDS IN CONTEXT</h5>
				<div style="margin-top: 36px">
					<ul class="lista-inline">
						<li><b>Boring</b></li>
						<li><b>Intend Worth Stunning</b></li>
						<li><b>Isles</b></li>
						<li><b>Fairs</b></li>
						<li><b>Punch</b></li>
						<li><b>Miss</b></li>
					</ul>
				</div>
			</div>
		</div>
	</main>
	<script>
        activeMenu();
    </script>

@endsection
