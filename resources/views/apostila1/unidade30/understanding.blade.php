@extends('layouts.template')
@section('titulo','Unit 30 | Understanding')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila1" data-unidade="unidade30" data-etapa="understanding">
				<h3 class="barlow">UNIT 30 - VIDEO EFFECTS</h3>
				<h5 class="barlow">6 - UNDERSTANDING</h5>
                <h5 class="barlow" style="margin-top: 16px">A - Answer the questions, according to what you have learned in the unit.</h5>
                <div class="metade">
                    <form id="unidade30understanding76" method="post">
                        <p>
                            1 -  What Does Victor Want To Talk About Today?<br>
                            <input type="text" name="understanding76-1" class="full left-align" placeholder="Responda aqui" required>
                        </p>
                        <p>
                            2 -  What Does Victor Think About Video Effects?<br>
                            <input type="text" name="understanding76-2" class="full left-align" placeholder="Responda aqui" required>
                        </p>
                        <p>
                            3 - Who Has Previous Knowledge About Effects?<br>
                            <input type="text" name="understanding76-3" class="full left-align" placeholder="Responda aqui" required>
                        </p>
                        <p>
                            4 - What Is Marcelo’s Hobby?<br>
                            <input type="text" name="understanding76-4" class="full left-align" placeholder="Responda aqui" required>
                        </p>
                        <p>
                            5 - How Does Marcelo Feel About Editing Videos With Effects?<br>
                            <input type="text" name="understanding76-5" class="full left-align" placeholder="Responda aqui" required>
                        </p>
                        <p>
                            6 - What Is One Thing You Can Change In Videos Using Effects?<br>
                            <input type="text" name="understanding76-6" class="full left-align" placeholder="Responda aqui" required>
                        </p>
                        <p>
                            7 - Where Can You Find The Black & White Tool?<br>
                            <input type="text" name="understanding76-7" class="full left-align" placeholder="Responda aqui" required>
                        </p>
                        <p>
                            8 - Where Can You Find Most Tools To Add Effects To Your Video?<br>
                            <input type="text" name="understanding76-8" class="full left-align" placeholder="Responda aqui" required>
                        </p>
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <input type="hidden" name="resposta_id" value="0">
                        <input type="hidden" name="unidade_id" value="30">
                        <input type="hidden" name="atividade_id" value="76">
                        <button type="submit" class="mini-title suave click suave">Salvar resposta</button>
                    </form>
                </div>
			</div>
		</div>
    </main>
    <script>
        activeMenu();

        $("form").each(function(){
            var atividade_id = $(this).find('input[name="atividade_id"]').val();
            checkAtividade(atividade_id);
        });

        $("#unidade30understanding76").submit(function(e){
            e.preventDefault();
            $(this).find('button').prop('disabled', true);
            var respostas = '{';
            $('#unidade30understanding76 input[type="text"]').each(function(index){
                if(($('#unidade30understanding76 input[type="text"]').length - 1) == index){
                    respostas += '"'+$(this).attr("name")+'":"'+$(this).val()+'"}';
                }else{
                    respostas += '"'+$(this).attr("name")+'":"'+$(this).val()+'",';
                }
            });
            if($('#unidade30understanding76 input[name="resposta_id"').val() != 0){
                atualizarAtividade($('#unidade30understanding76'), respostas);
            }else{
                enviarAtividade($('#unidade30understanding76'), respostas);
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
                        $('#unidade30understanding'+atividade_id+' input[name="'+chaves[j]+'"]').val(respostas[j]);
                        $('#unidade30understanding'+atividade_id+' input[name="'+chaves[j]+'"]').attr("value", respostas[j]);
                    }
                    $('#unidade30understanding'+atividade_id+' input[name="resposta_id"]').val(response[0].resposta_id);
                    $('#unidade30understanding'+atividade_id+' input[name="resposta_id"]').attr("value", response[0].resposta_id);
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
