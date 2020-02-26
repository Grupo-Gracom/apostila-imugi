@extends('layouts.template')
@section('titulo','UNIMUGI | Home')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="bem-vindo" class="box">
				<h3 class="barlow">Seu material didático exclusivo!</h3>
				<ul class="capas">
					<li>
						<figure>
							<a href="apostila1/intro1/intro"><img src="{{ asset('assets/img/playgo.png') }}" alt="Play Go"></a>
						</figure>
					</li>
					<li class="deactive">
						<figure>
							<img src="{{ asset('assets/img/dominating.png') }}" alt="Play Go">
						</figure>
					</li>
					<li class="deactive">
						<figure>
							<img src="{{ asset('assets/img/masteroflanguage.png') }}" alt="Play Go">
						</figure>
					</li>
					<li class="deactive">
						<figure>
							<img src="{{ asset('assets/img/photoshop.png') }}" alt="Play Go">
						</figure>
					</li>
					<li class="deactive">
						<figure>
							<img src="{{ asset('assets/img/gamesandanimation.png') }}" alt="Play Go">
						</figure>
					</li>
				</ul>
			</div>
			
		</div>
	</main>

@endsection
