@extends('layouts.template')
@section('titulo','UNIMUGI | Home')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade1" data-etapa="pronunciation">
				<h3 class="barlow">UNIT 01</h3>
				<h5 class="barlow">4 - PRONUNCIATION</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/unit1/pronuciation/pronuciation.ogg') }}" type="audio/ogg">
                </audio>
                <div class="clear"></div>
                <h5>A - Contractions: Practice the pronunciation of contracted form x non-contracted forms.</h5>
                <div class="umterco">
                    <table class="tabelaVerdeEscuro">
                        <tr>
                            <td>I am a ...</td>
                            <td>I'm a ...</td>
                        </tr>
                        <tr>
                            <td>He is an...</td>
                            <td>He's an...</td>
                        </tr>
                        <tr>
                            <td>You are an...</td>
                            <td>You're an...</td>
                        </tr>
                        <tr>
                            <td>We are in...</td>
                            <td>We're in...</td>
                        </tr>
                        <tr>
                            <td>They are on...</td>
                            <td>They’re on...</td>
                        </tr>
                        <tr>
                            <td>Isn't …</td>
                            <td>Aren't...</td>
                        </tr>
                    </table>
                </div>                
			</div>
		</div>
    </main>
    <script>
        activeMenu();
    </script>

@endsection
