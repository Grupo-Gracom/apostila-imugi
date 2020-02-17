@extends('layouts.template')
@section('titulo','UNIMUGI | Home')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-unidade="unidade17" data-etapa="listening">
				<h3 class="barlow">UNIT 17 - LAYERS AND GUIDES</h3>
                <h5 class="barlow">5 - LISTENING</h5>
                <span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/Unit17/Listening/completo.ogg') }}" type="audio/ogg">
                </audio>
                <div class="clear"></div>
                <p style="margin-top:16px;">Layers And Guides Are Two <b>Necessary</b> Tools In Photoshop To Better <b>Organize</b> The Layout</p>
                <p>And Editing Of Content. Layers Are Used To Separate The Tasks, In Order To Avoid Applying</p>
                <p>The Same Changes To All Of The <b>Items</b>. This Way, You Can Direct The <b>Alteration</b> To One</p>
                <p>Item At A Time. As For The <b>Guides</b>, They Are Simply <b>Lines</b> That Help You <b>Align</b> The Items</p>
                <p>Better. They Are Necessary To Have <b>Precision</b> In The Organization.</p>
			</div>
		</div>
    </main>
    <script>
        activeMenu();        

    </script>

@endsection
