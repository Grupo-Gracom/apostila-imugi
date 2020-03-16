@extends('layouts.template')
@section('titulo','Unit 16 | Pronunciation')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')

	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade16" data-etapa="pronunciation">
				<h3 class="barlow">UNIT 16</h3>
				<h5 class="barlow">4 - PRONUNCIATION</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/apostila2/UNIT 16/3. PRONUNCIATION/PRONUNCIATION.ogg') }}" type="audio/ogg">
				</audio>
                <div class="clear espacamento"></div>
                <ul class="lista-inline">
                    <li><p style="color:green;">oo sound /u:/</p></li>
                    <li><b>Cool</b></li>
                    <li><b>Soup</b></li>
                    <li><b>Moon</b></li>
                    <li><b>Boot</b></li>
                    <li><b>Tooth</b></li>
                    <li><b>Move</b></li>
                </ul>
                <p>C<b>oo</b>l guys. Take some soup to the b<b>oo</b>t camp and have fun under the m<b>oo</b>n.</p>
			</div>
		</div>
    </main>
    <script>
        activeMenu();
    </script>

@endsection
