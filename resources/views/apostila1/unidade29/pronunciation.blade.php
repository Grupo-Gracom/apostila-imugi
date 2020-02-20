@extends('layouts.template')
@section('titulo','Unit 29 | Pronunciation')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila1" data-unidade="unidade29" data-etapa="pronunciation">
				<h3 class="barlow">UNIT 29 - KEY FRAME</h3>
				<h5 class="barlow">4 - PRONUNCIATION</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio29/Pronunciation/completo.ogg') }}" type="audio/ogg">
                </audio>
				<div class="clear"></div>
				
                <h5 class="barlow" style="margin-top: 16px">A. notice How The Letter “H” Is Sillent In The Possessives After Words Ending In Consonant Sounds. The Connections Are In The Underlined Letters.</h5>
				<ul>
					<p>1.This Is For His Parents.</p>
					<p>2.I Bought This Gift For Her.</p>
					<p>3.I Helped Him Because His Car Broke Down.</p>
					<p>4.I Need To Take Her Family To The Airport.</p>
					<p>5.That’s His House.</p>
               </ul>
				<div class="clear"></div>
			</div>
		</div>
    </main>
    <script>
        activeMenu();
    </script>

@endsection
