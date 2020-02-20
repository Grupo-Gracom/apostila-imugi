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
                
                <table class="metade center-align">
                    <tr>
                        <td><p>I am a ...</p></td>
                        <td><p>I'm a ...</p></td>
                    </tr>
                    <tr>
                        <td><p>He is an...</p></td>
                        <td><p>He's an...</p></td>
                    </tr>
                    <tr>
                        <td><p>You are an...</p></td>
                        <td><p>You're an...</p></td>
                    </tr>
                    <tr>
                        <td><p>We are in...</p></td>
                        <td><p>We're in...</p></td>
                    </tr>
                    <tr>
                        <td><p>They are on...</p></td>
                        <td><p>They’re on...</p></td>
                    </tr>
                    <tr>
                        <td><p>Isn't …</p></td>
                        <td><p>Aren't...</p></td>
                    </tr>
                </table>
                              
			</div>
		</div>
    </main>
    <script>
        activeMenu();
    </script>

@endsection
