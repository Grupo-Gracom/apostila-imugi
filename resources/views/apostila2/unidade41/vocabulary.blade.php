@extends('layouts.template')
@section('titulo','UNIMUGI | Home')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade41" data-etapa="vocabulary">
				<h3 class="barlow">UNIT 41</h3>
				<h5 class="barlow">1 - VOCABULARY</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/unit1/vocabulary/vocabulary.ogg') }}" type="audio/ogg">
				</audio>
				<h5 class="barlow" style="margin-top: 16px">A -  WORDS AND EXPRESSIONS</h5>				                                   
				<ul class="lista-inline">
					<li><b>TO THINK / once / twice / over and over</b></li>
					<li><b>TO TRY / to do something / something</b></li>
					<li><b>TO WASH / your clothes / your face / your car</b></li>													
				</ul>
				</table>				
				<h5 class="barlow" style="margin-top: 16px">B -  WORDS IN CONTEXT</h5>	
				<ul class="lista-inline">
					<li><b>Saw</b></li>
					<li><b>Funny</b></li>
					<li><b>Enjoyed</b></li>
					<li><b>Mouse</b></li>
					<li><b>Mouth</b></li>
					<li><b>Private</b></li>
					<li><b>Kidding</b></li>
					<li><b>Rich</b></li>								
				</ul>
			</div>
		</div>
	</main>
	<script>
        activeMenu();
    </script>
@endsection
