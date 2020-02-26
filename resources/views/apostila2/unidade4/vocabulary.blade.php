@extends('layouts.template')
@section('titulo','UNIMUGI | Home')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade4"  data-etapa="vocabulary">

				<h3 class="barlow">UNIT 04</h3>
				<h5 class="barlow">1 - VOCABULARY</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/unit1/vocabulary/vocabulary.ogg') }}" type="audio/ogg">
				</audio>
				<h5 class="barlow" style="margin-top: 16px">A - ROUTINE VERBS</h5>

				<ul class="lista-inline">
					<li><b>WORK</b></li>
					<li><b>GO</b></li>
					<li><b>DO</b></li>
					<li><b>WAKE UP</b></li>
					<li><b>SEND</b></li>
					<li><b>ANSWER</b></li>
					<li><b>ASK</b></li>
					<li><b>USE</b></li>
					<li><b>FINISH</b></li>
				</ul>

				<h5 class="barlow" style="margin-top: 16px">B - LIKES AND DISLIKES</h5>
				
				<p class="espacamentoWord"><b>ACTIONS > </b>To-play To-practice To-study To-read To-dance To-create To-draw</p>
				<p class="espacamentoWord"><b>THINGS > </b>games sports English Books Hip Hop Heroes Warriors</p>
				
				<div class="metade">
					<form id="unidade3vocabulary112" method="post">
						<p><input type="text" name="vocabulary112-1" class="full" required></p>
						<p><input type="text" name="vocabulary112-2" class="full" required></p>
                        
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <input type="hidden" name="resposta_id" value="0">
                        <input type="hidden" name="unidade_id" value="3">
                        <input type="hidden" name="atividade_id" value="112">
                        <button type="submit" class="mini-title suave click suave">Salvar resposta</button>
					</form>
				</div>
				
				
				<h5 class="barlow" style="margin-top: 16px">C - WORDS IN CONTEXT</h5>
				
				<ul class="lista-inline">
					<li><b>ANNOY</b></li>
					<li><b>CHALLENGE</b></li>
					<li><b>MANY</b></li>
					<li><b>EVERY</b></li>
					<li><b>BORED</b></li>
					<li><b>MEET</b></li>
					<li><b>CHANGE</b></li>
					<li><b>ALWAYS</b></li>
				</ul>
				
			</div>
		</div>
	</main>
	<script>
        activeMenu();

		$("form").each(function(){
            var atividade_id = $(this).find('input[name="atividade_id"]').val();
            checkAtividade(atividade_id);
        });

        $("#unidade3vocabulary112").submit(function(e){
            e.preventDefault();
            $(this).find('button').prop('disabled', true);
            var respostas = '{';
            $('#unidade3vocabulary112 input[type="text"]').each(function(index){
                if(($('#unidade3vocabulary112 input[type="text"]').length - 1) == index){
                    respostas += '"'+$(this).attr("name")+'":"'+$(this).val()+'"}';
                }else{
                    respostas += '"'+$(this).attr("name")+'":"'+$(this).val()+'",';
                }
            });
            if($('#unidade3vocabulary112 input[name="resposta_id"').val() != 0){
                atualizarAtividade($('#unidade3vocabulary112'), respostas);
            }else{
                enviarAtividade($('#unidade3vocabulary112'), respostas);
            }
        });

        function checkAtividade(atividade_id){
            request = $.ajax({
                url: window.location.pathname+'/respostasCheck/'+atividade_id,
                type: 'get',
                error: function(){
                    console.log("Erro de retorno de dados.");
                }
            });
            request.done(function(response){
                if(response == 0){
                    console.log("não veio nada");
                }else{
                    var objeto = JSON.parse(response[0].resposta_respostas);
                    var chaves = Object.keys(objeto);
                    var respostas = Object.values(objeto);
                    for(j = 0; j < respostas.length; j++){
                        $('#unidade3vocabulary'+atividade_id+' input[name="'+chaves[j]+'"]').val(respostas[j]);
                        $('#unidade3vocabulary'+atividade_id+' input[name="'+chaves[j]+'"]').attr("value", respostas[j]);
                    }
                    $('#unidade3vocabulary'+atividade_id+' input[name="resposta_id"]').val(response[0].resposta_id);
                    $('#unidade3vocabulary'+atividade_id+' input[name="resposta_id"]').attr("value", response[0].resposta_id);
                }
            });
        }

        function enviarAtividade(formId, respostas){
            var resposta = {
                "_token" : formId.find('input[name="_token"]').val(),
                "resposta_respostas" : respostas,
                "atividade_id" : formId.find('input[name="atividade_id"]').val(),
                "unidade_id" : formId.find('input[name="unidade_id"]').val()
            };
            request = $.ajax({
                url: window.location.pathname+'/respostas',
                data: resposta,
                type: 'post',
                error: function(){
                    console.log("Erro de envio.");
                }
            });
            request.done(function(response){
                if(response == "1"){
                    alert("Respostas salvas");
                    window.location.reload();
                }else if(response == 2){
                    alert("Respostas atualizadas");
                    window.location.reload();
                }
            });
        }

        function atualizarAtividade(formId, respostas){
            var resposta = {
                "_token" : formId.find('input[name="_token"]').val(),
                "resposta_id" : formId.find('input[name="resposta_id"]').val(),
                "resposta_respostas" : respostas
            };
            request = $.ajax({
                url: window.location.pathname+'/respostas',
                data: resposta,
                type: 'post',
                error: function(){
                    console.log("Erro de envio.");
                }
            });
            request.done(function(response){
                if(response == "1"){
                    alert("Respostas salvas");
                    window.location.reload();
                }else if(response == 2){
                    alert("Respostas atualizadas");
                    window.location.reload();
                }
            });
        }
    </script>

@endsection
