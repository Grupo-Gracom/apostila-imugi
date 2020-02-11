@extends('layouts.template')
@section('titulo','UNIMUGI | Home')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-unidade="unidade4" data-etapa="understanding">
				<h3 class="barlow">UNIT 04 - INTRODUCTION TO GRAPHIC DESIGN PRODUCTION</h3>
				<h5 class="barlow">4 - UNDERSTANDING</h5>
                <h5 class="barlow" style="margin-top: 16px">A - Answer the questions, according to what you have learned in the unit.</h5>
                <form id="unidade1understanding5" method="post">
                    <p>
                        1 -  Where is Kate from?<br>
                        <input type="text" name="understanding5-1" class="full left-align" required>
                    </p>
                    <p>
                        2 - What is Carlos’ hobby?<br>
                        <input type="text" name="understanding5-1" class="full left-align" required>
                    </p>
                    <p>
                        3 - What does Kate do for a living?<br>
                        <input type="text" name="understanding5-1" class="full left-align" required>
                    </p>
                    <p>
                        4 - Why does Kate want to learn Photoshop?<br>
                        <input type="text" name="understanding5-1" class="full left-align" required>
                    </p>
                    <p>
                        5 - What is Kate’s last name?<br>
                        <input type="text" name="understanding5-1" class="full left-align" required>
                    </p>
                    <p>
                        6 - What is Kate’s hobby?<br>
                        <input type="text" name="understanding5-1" class="full left-align" required>
                    </p>
                    <p>
                        7 - Does Kate speak English well?<br>
                        <input type="text" name="understanding5-1" class="full left-align" required>
                    </p>
                    <p>
                        8 - Is Photoshop important to Kate?<br>
                        <input type="text" name="understanding5-1" class="full left-align" required>
                    </p>
                    <p>
                        9 - What news does Sophia have?<br>
                        <input type="text" name="understanding5-1" class="full left-align" required>
                    </p>
                    
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <input type="hidden" name="resposta_id" value="0">
                    <input type="hidden" name="unidade_id" value="1">
                    <input type="hidden" name="atividade_id" value="5">
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

        $("#unidade1understanding5").submit(function(e){
            e.preventDefault();
            var respostas = '{';
            $('#unidade1understanding5 input[type="text"]').each(function(index){
                if(($('#unidade1understanding5 input[type="text"]').length - 1) == index){
                    respostas += '"'+$(this).attr("name")+'":"'+$(this).val()+'"}';
                }else{
                    respostas += '"'+$(this).attr("name")+'":"'+$(this).val()+'",';
                }
            });
            if($('#unidade1understanding5 input[name="resposta_id"').val() != 0){
                atualizarAtividade($('#unidade1understanding5'), respostas);
            }else{
                enviarAtividade($('#unidade1understanding5'), respostas);
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
                    var respostas = Object.keys(objeto).map(i => JSON.parse(objeto[String(i)]));
                    for(i = 0; i < respostas.length; i++){
                        var next = i + 1;
                        $('#unidade1understanding'+atividade_id+' input[name="understanding'+atividade_id+'-'+next+'"]').val(respostas[i]);
                        $('#unidade1understanding'+atividade_id+' input[name="understanding'+atividade_id+'-'+next+'"]').attr("value", respostas[i]);
                    }
                    $('#unidade1understanding'+atividade_id+' input[name="resposta_id"]').val(response[0].resposta_id);
                    $('#unidade1understanding'+atividade_id+' input[name="resposta_id"]').attr("value", response[0].resposta_id);
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
