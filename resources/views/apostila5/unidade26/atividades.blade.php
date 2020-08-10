@extends('layouts.template')
@section('titulo','Unit 26 | Atividades')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="apostila6" data-unidade="unidade26" data-etapa="atividades">
			<h3 class="barlow">UNIT 26</h3>
			<h5 class="barlow upper">Maping - Texturização avançada</h5>
                <form id="unidade26atividade820" method="post" class="metade">
					<p>1 - Material e textura são a mesma coisa? Explique.
						<input type="text" name="atividade820-1" class="full left-align" placeholder="Responda aqui" required>
					</p>
                    <p>2 - O material está dentro da textura?
						<input type="text" name="atividade820-2" class="full left-align" placeholder="Responda aqui" required> 
					</p>
					<p>3 - Qual o processo para fazer um maping?
						<input type="text" name="atividade820-3" class="full left-align" placeholder="Responda aqui" required>						
					</p>
					<p>4 - Quais são as opções de projeção de objetos em Uv Maping?
						<input type="text" name="atividade820-4" class="full left-align" placeholder="Responda aqui" required>
					</p>
					<p>5 - O que devo fazer para realizar a seleção de toda uma sequência de linhas?
					<input type="text" name="atividade820-5" class="full left-align" placeholder="Responda aqui" required>
					</p>
					<p>6 - Qual a ferramenta que me permite selecionar um loop de faces, pontos ou vértices?
						<input type="text" name="atividade820-6" class="full left-align" placeholder="Responda aqui" disabled="true"> 
					</p>
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <input type="hidden" name="resposta_id" value="0">
                    <input type="hidden" name="unidade_id" value="1">
                    <input type="hidden" name="atividade_id" value="814">
                    <button type="submit" class="mini-title suave click suave">Salvar resposta</button>
                </form>
        </div>
    </div>
	    
</main>

<script>
	activeMenu();

	$("form").each(function(){
        var atividade_id = $(this).find('input[name="atividade_id"]').val();
        checkAtividade(atividade_id);
    });

	$("#unidade26atividade820").submit(function(e){
		e.preventDefault();
		$(this).find('button').prop('disabled', true);
		var respostas = '{';
		$('#unidade26atividade820 input[type="text"]').each(function(index){
			if(($('#unidade26atividade820 input[type="text"]').length - 1) == index){
				respostas += '"'+$(this).attr("name")+'":"'+$(this).val()+'"}';
			}else{
				respostas += '"'+$(this).attr("name")+'":"'+$(this).val()+'",';
			}
		});
		if($('#unidade26atividade820 input[name="resposta_id"').val() != 0){
			atualizarAtividade($('#unidade26atividade820'), respostas);
		}else{
			enviarAtividade($('#unidade26atividade820'), respostas);
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
					$('#unidade26atividade'+atividade_id+' input[name="'+chaves[j]+'"]').val(respostas[j]);
					$('#unidade26atividade'+atividade_id+' input[name="'+chaves[j]+'"]').attr("value", respostas[j]);
				}
				$('#unidade26atividade'+atividade_id+' input[name="resposta_id"]').val(response[0].resposta_id);
				$('#unidade26atividade'+atividade_id+' input[name="resposta_id"]').attr("value", response[0].resposta_id);
			}
		});
    }

	function enviarAtividade(formId, respostas){
		console.log(formId);
		console.log(respostas);
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
