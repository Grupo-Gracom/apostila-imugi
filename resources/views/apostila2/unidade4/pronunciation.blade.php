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
                <p>There are 6 <b>STOP CONSIONANTS</b> in English: <b>P,T,K,B,D,G.</b></p>
                
                <ul class="lista-inline">
                    <li><p>PHOTO SHO<b><u>P</u></b></p></li>
                    <li><p>NO<b><u>T</u></b></p></li>
                    <li><p>SPEN<b><u>T</u></b></p></li>
                    <li><p>WOR<b><u>K</u></b></p></li>
                    <li><p>BO<b><u>B</u></b></p></li>
                    <li><p>SECON<b><u>D</u></b></p></li>
                    <li><p>AN<b><u>D</u></b></p></li>
                    <li><p>BU<b><u>G</u></b></p></li>
                </ul>

                <p>I <b>spent</b> two hours to set up my photo <b>shop</b> in my computer. It’s the <b>second</b> time <b>Bob</b> installs it for me but it doesn’t <b>work</b>. I <b>think</b> it’s a <b>bug</b>.</p>

			</div>
		</div>
    </main>
    <script>
        activeMenu();
    </script>

@endsection
