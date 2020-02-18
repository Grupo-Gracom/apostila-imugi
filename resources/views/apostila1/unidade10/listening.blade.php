@extends('layouts.template')
@section('titulo','UNIMUGI | Home')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-unidade="unidade10" data-etapa="listening">
				<h3 class="barlow">UNIT 10</h3>
                <h5 class="barlow">5 - LISTENING</h5>
                <span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/unit1/listining/listining_a.ogg') }}" type="audio/ogg">
                </audio>
                <div class="clear"></div>
                <p style="margin-top:16px;">Beatriz’s students are from different origins. They are from <b>Germany</b>, <b>Denmark</b>, <b>Costa</b> Rica andthe UK.
                 They all need Photoshop for graphic designing, be it a <b>hobby</b> or a <b>profession</b>. </p>
                
			</div>
		</div>
    </main>
    <script>
        activeMenu();
    </script>

@endsection
