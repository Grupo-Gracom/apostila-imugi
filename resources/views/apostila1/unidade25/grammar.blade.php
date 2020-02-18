@extends('layouts.template')
@section('titulo','UNIMUGI | Home')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-unidade="unidade25" data-etapa="grammar">
				<h3 class="barlow">UNIT 25 - PEN TOOLS</h3>
				<h5 class="barlow">3 - GRAMMAR</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/unit1/grammar/grammar.ogg') }}" type="audio/ogg">
                </audio>
                
                <h5 class="barlow">Past Continuous</h5>
                <h5 class="barlow">The Past Continuous Tense Is Applied When Expressing An Action In Progress In The Past.</h5>
                <p>STRUCTURE:</p>
                <p>• AFFIRMATIVE: SUBJECT+ WAS/WERE+ VERB-ING.</p>
                <p>SHE WAS WORKING ON SUNDAY MORNING.</p>
                <p>• INTERROGATIVE: WAS/WERE+ SUBJECT+VERB-ING?</p>
                <p>WERE THEY STUDYING FOR THE TEST YESTERDAY?</p>
                <p>•NEGATIVE: SUBJECT+ WAS/WERE+ NOT+ VERB-ING.</p>
                <p>SHE WASN’T LISTENING WHEN THE TEACHER WAS TALKING.</p>               
			</div>
		</div>
    </main>
    <script>
        activeMenu();

       
    </script>

@endsection
