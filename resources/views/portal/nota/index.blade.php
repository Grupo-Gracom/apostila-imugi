@extends('layouts.portal.template')
@section('titulo','Portal do Aluno | Notas')
@section('conteudo')
@include('layouts.portal.menus.sidebar')
<div id="main-wrapper">
	<div id="main" class="ajaxable layout-wide">
    @include('layouts.portal.header')
	@if($aluno->turma == "")
		<div class="alert alert-warning" style="margin:0!important;">
    <strong>Atenção!</strong> Para acesso completo ao portal aguarde o prazo de até 48h.
  </div>
  @endif
		<div  class="carousel slide">
			<div class="carousel-inner">
				<div class="item active">
				<form method="GET" action="http://fpeduc.com/aluno-portal/{{ Auth::user()->name}}/{{ Auth::user()->email}}/{{ Auth::user()->matricula}}/@foreach($alunos as $aluno){{ $aluno->cod_unidade}}@endforeach" target="_blank" style="background-color:#fff; margin-top:-20px;">
						<input type="image" src="{{asset('assets/portal/images/aovivo/aovivo.jpg')}}" alt="Submit" style="width:100%;">
					</form>
				</div>
			</div>
			<div class="carousel slide">
				<div class="carousel-inner">
					<div class="item active">
					      <img src="{{asset('assets/portal/images/notas.jpg')}}" alt="Notas">
					</div>
				</div>
			    <div class="be-section-pad clearfix" style="padding-top:10px;padding-bottom:40px; background-color: #ffffff;">
               		<div class="be-row be-wrap clear">
 					    <div class="col-md-6" style="margin-top: 90px;">
						 @if(sizeOf($alunos) > 0)
						 @foreach($alunos as $aluno)
 							<h3><strong> Aluno(a): {{$aluno->nome}} </strong></h3>
							<h3><strong> Nome da Turma: {{$aluno->turma}} </h3>
							<h3><strong> Matricula: {{$aluno->matricula}} </h3>
							<h3><strong> Módulo: {{$aluno->curso}} </h3>
						@endforeach
						@else
						  Suas infomações estão sendo processadas
						@endif
						</div>
					</div>
				</div>
			  <div class="be-section-pad clearfix" style="padding-top:10px;padding-bottom:40px; background-color: #ffffff;" id="table_notas">
               		<div class="be-row be-wrap clear">
               			<div class="col-lg-12" style="margin-top: 50px;">
							<table class="table table-striped  table-responsive">
                                <thead>
                                        <tr class="title-table">
                                            <th>Modulos</th>
                                            <th>Prova Teórica</th>
											<th>Prova Prática</th>
											<th>Trabalhos</th>
											<th>Média</th>
                                        </tr>
                                </thead>
								<tbody>
								@if(isset($notas))
								@foreach($notas['prova_teorica'] as $key => $prova_teorica)
							  
							  	<tr>
								  	<th> {{$notas['modulos'][$key] }} </th>
									<td> {{$prova_teorica}} </td>
									<td> {{$notas['prova_pratica'][$key] }}</td>
									<td> {{$notas['trabalhos'][$key] }}</td>
									<td> {{$notas['media'][$key] }}</td>
								</tr>
								@endforeach;
								@else
								<tr>
								  <th colspan="5">
								   <p class="text-center"> Não Possue Notas </p>
								   </th>
								</tr>
								@endif
								
							  </tbody>
							  
							</table>
						</div>
					</div>

               </div>
			</div>
		</div>
	</div>
	@include('layouts.portal.footer')
</div>	
	<a href="#" id="back-to-top"><i class="font-icon icon-up-open-big"></i></a>
 @endsection