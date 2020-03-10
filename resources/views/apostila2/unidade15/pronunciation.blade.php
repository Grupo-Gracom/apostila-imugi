@extends('layouts.template')
@section('titulo','Unit 15 | Pronunciation')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')

	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade15" data-etapa="pronunciation">
				<h3 class="barlow">UNIT 15</h3>
				<h5 class="barlow">4 - PRONUNCIATION</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/unit1/pronuciation/pronuciation.ogg') }}" type="audio/ogg">
                </audio>
                <div class="clear espacamento"></div>
                <p style="color:green;">Ed sounds</p>
                <table class="umterco center-align">
                    <tr>
                        <td><h5 class="barlow">As <b>/t/</b> after <b>s,f,sh,ch,p,k</b></h5></td>
                    </tr>
                    <tr>
                        <td>Stopp<b>ed</b></td>
                    </tr>
                    <tr>
                        <td>Work<b>ed</b></td>
                    </tr>
                    <tr>
                        <td>Watch<b>ed</b></td>
                    </tr>
                </table>
                <table class="umterco center-align">
                    <tr>
                        <td><h5 class="barlow">As <b>/d/</b></h5></td>
                    </tr>
                    <tr>
                        <td>Remember<b>ed</b></td>
                    </tr>
                    <tr>
                        <td>Studi<b>ed</b></td>
                    </tr>
                    <tr>
                        <td>travel<b>ed</b></td>
                    </tr>
                </table>
                <table class="umterco center-align">
                    <tr>
                        <td><h5 class="barlow">As <b>/id/</b> after <b>/d/</b> or <b>/t/</b></h5>
                    </tr>
                    <tr>
                        <td>Visit<b>ed</b></td>
                    </tr>
                    <tr>
                        <td>Wait<b>ed</b></td>
                    </tr>
                    <tr>
                        <td>Offend<b>ed</b></td>
                    </tr>
                </table>
			</div>
		</div>
    </main>
    <script>
        activeMenu();
    </script>

@endsection
