@extends('layouts.template')
@section('titulo','Unit 7 | Pronunciation')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila1" data-unidade="unidade7" data-etapa="pronunciation">
				<h3 class="barlow">UNIT 07 - Adjustment Panel</h3>
				<h5 class="barlow">4 - PRONUNCIATION</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/Unit7/pronuciation/pronuciation.ogg') }}" type="audio/ogg">
                </audio>
                <div class="clear"></div> <br>
                <h5 class="barlow">PLURAL WORDS</h5>
                <div class="umterco">
                    <p><b>“Z” SOUND</b></p>
                    <p>(voice)</p>
                    <p>SAYS</p>
                    <p>PHOTOS</p>
                    <p>REMEMBERS</p>                    
                    <p>GIVES</p>                    
                </div>
                <div class="umterco">
                    <p><b>“S” SOUND</b></p>
                    <p>(no voice)</p>
                    <p>EDITS</p>
                    <p>NEEDS</p>
                    <p>LIKES</p>                    
                    <p>UNDERSTANDS</p>                    
                </div>
                <div class="umterco">
                    <p><b>“IZ” SOUND</b></p>
                    <p>USES</p>
                    <p>UTILIZES</p>
                    <p>WATCHES</p>                    
                    <p>WASHES</p>                    
                </div>
                <div class="clear"></div>
                <h5 class="barlow" style="margin-top: 16px">A - LISTEN TO YOUR TEACHER READ THE FOLLOWING SENTENCES AND REPEAT AFTER HE IS FINISHED.</h5>
                <p>“He says she edits photos and uti lizes Photoshop for it.”</p>
                <p>“Lee uses the Adjustment Panel, and he uti lizes the Black &White tool because it is his favorite.”</p>                
			</div>
		</div>
    </main>
    <script>
        activeMenu();
    </script>

@endsection
