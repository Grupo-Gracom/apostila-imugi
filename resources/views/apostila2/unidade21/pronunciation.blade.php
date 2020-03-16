@extends('layouts.template')
@section('titulo','Unit 21 | Pronunciation')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')

	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade21" data-etapa="pronunciation">
				<h3 class="barlow">UNIT 21</h3>
				<h5 class="barlow">4 - PRONUNCIATION</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/apostila2/UNIT 21/3. PRONUNCIATION/PRONUNCIATION.ogg') }}" type="audio/ogg">
				</audio>
                <div class="clear"></div>
                <p><b>th sound (voiced) /ð/</b></p>

                <ul class="lista-inline">
                    <li><p>BROTHER</p></li>
                    <li><p>FATHER</p></li>
                    <li><p>THIS</p></li>
                    <li><p>THEY</p></li>
                    <li><p>ANOTHER</p></li>
                    <li><p>THEMSELVES</p></li>
                </ul>

                <P><b>This</b> week, my fa<b>th</b>er and my bro<b>th</b>er have ano<b>th</b>er problem. But now, <b>th</b>ey have to solve it by <b>th</b>emselves.</P>

			</div>
		</div>
    </main>
    <script>
        activeMenu();
    </script>

@endsection
