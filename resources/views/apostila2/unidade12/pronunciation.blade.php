@extends('layouts.template')
@section('titulo','UNIMUGI | Home')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade12" data-etapa="pronunciation">
				<h3 class="barlow">UNIT 11</h3>
				<h5 class="barlow">4 - PRONUNCIATION</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/unit1/pronuciation/pronuciation.ogg') }}" type="audio/ogg">
                </audio>
                <div class="clear"></div>                
				<ul class="lista-inline">
                    <li><b class="upper" style="color:blue;">short o /ɑ/</b></li>
                    <li><b class="upper">Stop</b></li>
                    <li><b class="upper">Lock</b></li>
                    <li><b class="upper">Farm</b></li>
                    <li><b class="upper">Want</b></li>
                    <li><b class="upper">Possible</b></li>
                    <li><b class="upper">Got</b></li>
                </ul>                
                <p>If p<b>o</b>ssible,I want to l<b>o</b>ck everything I g<b>o</b>t after I st<b>o</b>p</p>
			</div>
		</div>
    </main>
    <script>
        activeMenu();
    </script>

@endsection
