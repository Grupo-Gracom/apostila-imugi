@extends('layouts.template')
@section('titulo','UNIMUGI | Home')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade1"  data-etapa="vocabulary">

				<h3 class="barlow">LESSON 1</h3>
				<h5 class="barlow">A - VOCABULARY</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/unit1/vocabulary/vocabulary.ogg') }}" type="audio/ogg">
				</audio>
				<h5 class="barlow" style="margin-top: 16px">1 - CARDINAL NUMBERS / ORDINAL NUMBERS</h5>
				
					<table class="tabelaVerdeEscuro">
						<tr>
							<th>Cardinal</th>
							<th>Ordinal</th>
							<th>Cardinal</th>
							<th>Ordinal</th>
						</tr>
						<tr class="tabelaVerde">
							<td>1 - one</td>
							<td>1st - first</td>
							<td>6 - six</td>
							<td>6th - sixth</td>
						</tr>
						<tr class="tabelaVerde">
							<td>2 - two</td>
							<td>2nd - second</td>
							<td>7 - seven</td>
							<td>7th - seventh</td>
						</tr>
						<tr class="tabelaVerde">
							<td>3 - three</td>
							<td>3rd - third</td>
							<td>8 - eight</td>
							<td>8th - eighth</td>
						</tr>
						<tr class="tabelaVerde">
							<td>4 - four</td>
							<td>4th - forth</td>
							<td>9 - nine</td>
							<td>9th - ninth</td>
						</tr>
						<tr class="tabelaVerde">
							<td>5 - five</td>
							<td>5th - fifth</td>
							<td>10 - ten</td>
							<td>10th - tenth</td>
						</tr>
					</table>
				
				<h5 class="barlow" style="margin-top: 16px">2 – WORDS IN CONTEXT</h5>
				<ul class="lista-inline">
					<li><b>What’s up</b></li>
					<li><b>Congrats</b></li>
					<li><b>Spent</b></li>
					<li><b>Almost</b></li>
					<li><b>Start</b></li>
					<li><b>Concepts</b></li>
					<li><b>Learned</b></li>
					<li><b>Way</b></li>
				</ul>
			</div>
		</div>
	</main>
	<script>
        activeMenu();
    </script>

@endsection
