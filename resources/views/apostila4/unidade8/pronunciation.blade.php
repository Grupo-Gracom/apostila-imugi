@extends('layouts.template')
@section('titulo','Unit 8 | Pronunciation')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="apostila4" data-unidade="unidade8" data-etapa="pronunciation">
			<h3 class="barlow">UNIT 8</h3>
			<h5 class="barlow">4 - PRONUNCIATION</h5>
			{{-- <span class="play-audio">( Aperte o play )</span>
            <audio controls="" controlslist="nodownload" class="suave">
                <source src="{{ asset('assets/audio/apostila3/UNIT 7/4. PRONUNCIATION/PRONUNCIATION.ogg') }}" type="audio/ogg">
            </audio> --}}
            <div class="clear"></div>
			<h5 class="barlow" style="margin-top:16px">A - Minimal pairs 14</h5>
			<p>Observe the pairs and practice pronouncing them.</p>
			<table class="espacamento center-align">
				<tr>
					<td><h5 class="barlow">p</h5></td>
					<td><h5 class="barlow">f</h5></td>
				</tr>
				<tr>
					<td><p>poor</p></td>
					<td><p>four</p></td>
				</tr>
				<tr>
					<td><p>pair</p></td>
					<td><p>fair</p></td>
				</tr>
				<tr>
					<td><p>pine</p></td>
					<td><p>fine</p></td>
				</tr>
				<tr>
					<td><p>pill</p></td>
					<td><p>fill</p></td>
				</tr>
				<tr>
					<td><p>please</p></td>
					<td><p>fleas</p></td>
				</tr>
			</table>
		</div>
	</div>
</main>
<script>
	activeMenu();
</script>

@endsection
