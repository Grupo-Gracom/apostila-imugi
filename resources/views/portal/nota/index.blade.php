@extends('layouts.portal.template')
@section('titulo','Portal do Aluno | Notas')
@section('conteudo')
@include('layouts.portal.menus.sidebar')
<div id="main-wrapper">
	<div id="main" class="ajaxable layout-wide">
    @include('layouts.portal.header')
		<div  class="carousel slide">
			<div class="carousel-inner">
				<div class="item active">
					<a href="http://futuronopresente.com.br/" target="_blank">
					      <img src="{{asset('assets/portal/images/portal_fp.jpg')}}" alt="Portal do Aluno">
					</a>
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
						 @foreach($alunos as $aluno)
 							<h3><strong> Aluno(a): {{$aluno->nome}} </strong></h3>
							<h3><strong> Nome da Turma: {{$aluno->turma}} </h3>
							<h3><strong> Matricula: {{$aluno->matricula}} </h3>
							<h3><strong> Módulo: {{$aluno->curso}} </h3>
						@endforeach
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
								@foreach($notas['prova_teorica'] as $key => $prova_teorica)
							  
							  	<tr>
								  	<th> {{$notas['modulos'][$key] }} </th>
									<td> {{$prova_teorica}} </td>
									<td> {{$notas['prova_pratica'][$key] }}</td>
									<td> {{$notas['trabalhos'][$key] }}</td>
									<td> {{$notas['media'][$key] }}</td>
								</tr>
								@endforeach
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