@extends('layouts.template')
@section('titulo','Unit 27 | Listening')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila1" data-unidade="unidade27" data-etapa="listening">
				<h3 class="barlow">UNIT 27 -  PROFESSOR VICTOR</h3>
                <h5 class="barlow">5 - LISTENING</h5>
                <span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/Unit27/Listening/completo.ogg') }}" type="audio/ogg">
                </audio>
                <div class="clear"></div>
                <div style="margin-top: 36px">
                    <p>
                        Although Video Editors Work Mainly Work With Other Programs Besides Photoshop, It Is
                        Useful For Beginners Because Photoshop Offers Some Tools That Allow You To Edit Basic
                        Video Content Such As Contrast, Brightness, Curves, Levels And Much More.
                    </p>
                </div>
                <h5 class="barlow" style="margin-top: 16px">A - Focus On The Pronunciation Difference Between The Lett ers “A” And “E”.</h5>
                <ul class="lista-inline">
					<li><b>BED</b></li>
					<li><b>SET</b></li>
					<li><b>LED</b></li>
					<li><b>MED</b></li>
                    <li><b>RED</b></li>
				</ul>
				<ul class="lista-inline">
					<li><b>BAD</b></li>
					<li><b>SAT</b></li>
					<li><b>LAD</b></li>
					<li><b>MAD</b></li>
                    <li><b>RAD</b></li>
				</ul>
				<div class="clear"></div>

                <h5 class="barlow" style="margin-top: 16px">B - Now Practice By Reading The Sentences.</h5>
                <ul>
                    <p>1.The Bad Boy Is A Tad Sad And Is In Bed.<p>
                    <p>2.Ted Has Ten Cats.</p>
                    <p>3.Karl Had Apples In His Car.</p>
                    <p>4.Pat Wants To Have Pets To Care For.</p>
                    <p>5.Ned Met Ralph Aft er The Event.</p>
                </ul>
            </div>
		</div>
    </main>
    <script>
        activeMenu();
    </script>

@endsection
