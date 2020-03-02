@extends('layouts.template')
@section('titulo','UNIMUGI | Home')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade32" data-etapa="pronunciation">
				<h3 class="barlow">UNIT 32</h3>
				<h5 class="barlow">4 - PRONUNCIATION</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/unit1/pronuciation/pronuciation.ogg') }}" type="audio/ogg">
                </audio>
                <div class="clear"></div>

                <ul class="lista-inline">
                    <li><p><b>l sound /l/</b></p></li>
                    <li><p>LAST</p></li>
                    <li><p>LIST</p></li>
                    <li><p>INCLUDE</p></li>
                    <li><p>CHILD</p></li>
                    <li><p>FINAL</p></li>
                    <li><p>SCHEDULE</p></li>
                </ul>

                <p><b>L</b>ets inc<b>l</b>ude the <b>l</b>ast chi<b>l</b>d in the fina<b>l</b> list schedu<b>l</b>e </p>
                
			</div>
		</div>
    </main>
    <script>
        activeMenu();
    </script>

@endsection
