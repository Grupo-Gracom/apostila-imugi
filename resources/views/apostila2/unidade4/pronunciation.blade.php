@extends('layouts.template')
@section('titulo','UNIMUGI | Home')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade4" data-etapa="pronunciation">
				<h3 class="barlow">UNIT 04</h3>
				<h5 class="barlow">4 - PRONUNCIATION</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/unit1/pronuciation/pronuciation.ogg') }}" type="audio/ogg">
                </audio>
                <div class="clear"></div>
                <p><b>long a /eɪ/</b></p>
                
                <ul class="lista-inline">
                    <li><p>GATE</p></li>
                    <li><p>LATE</p></li>
                    <li><p>FAIL</p></li>
                    <li><p>PLACE</p></li>
                    <li><p>WAIT</p></li>
                    <li><p>GREAT</p></li>
                </ul>

                <P>J<b>a</b>ne’s f<b>a</b>ce looks gre<b>a</b>t while she w<b>a</b>its in the gre<b>a</b>t g<b>a</b>te</P>

			</div>
		</div>
    </main>
    <script>
        activeMenu();
    </script>

@endsection
