@extends('layouts.template')
@section('titulo','Unit 14 | Grammar')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila1" data-unidade="unidade14" data-etapa="grammar">
				<h3 class="barlow">UNIT 14 - COLOR TOOLS & TYPOGRAPHY TOOLS REVIEW</h3>
				<h5 class="barlow">3 - GRAMAR</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/Unit14/Grammar/completo.ogg') }}" type="audio/ogg">
                </audio>
                <div class="clear"></div>
                <div style="margin-top: 16px">
                <p>
                    Sometimes, To Avoid Repetition, We Use Cohesive Tools Like In The Examples Below. Complete The Exercise By Checking The Correct Answer That Best Represents The Underlined
                    Cohesive Tool.
                </p>
                <div class="clear"></div>
                <h5 class="barlow upper" style="margin-top: 16px">1 - My Friend Is Great At Photoshopping. I’m Not Great At It.</h5>
				<form id="unidade14grammar39" method="post">
                    <p>A. <input type="radio" name="grammar-39-1" value="1" required/> FRIEND</p>
                    <p>B. <input type="radio" name="grammar-39-1" value="2" required/> PHOTOSHOPPING</p>
                    <div class="clear"></div>
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <input type="hidden" name="resposta_id" value="0">
                    <input type="hidden" name="unidade_id" value="14">
                    <input type="hidden" name="atividade_id" value="39">
                    <button type="submit" class="mini-title suave click suave">Salvar resposta</button>
                </form>
                <h5 class="barlow" style="margin-top: 16px">2 - COLOR TOOLS AND TYPOGRAPHY TOOLS ARE IMPORTANT. BUT THE FIRST ARE MORE IMPORTANT TO ME.</h5>
                <form id="unidade14grammar40" method="post">
                    <p>A. <input type="radio" name="grammar40-1" value="1" required/> COLOR TOOLS</p>
                    <p>B. <input type="radio" name="grammar40-1" value="2" required/> TYPOGRAPHY TOOLS</p>
                    
                    <div class="clear"></div>
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <input type="hidden" name="resposta_id" value="0">
                    <input type="hidden" name="unidade_id" value="14">
                    <input type="hidden" name="atividade_id" value="40">
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

        $("#unidade14grammar39").submit(function(e){
            e.preventDefault();
            $(this).find('button').prop('disabled', true);
            var respostas = '{';
            $('#unidade14grammar39 input[type="radio"]:checked').each(function(index){
                if(($('#unidade14grammar39 input[type="radio"]:checked').length - 1) == index){
                    respostas += '"'+$(this).attr("name")+'":"'+$(this).val()+'"}';
                }else{
                    respostas += '"'+$(this).attr("name")+'":"'+$(this).val()+'",';
                }
            });
            if($('#unidade14grammar39 input[name="resposta_id"').val() != 0){
                atualizarAtividade($('#unidade14grammar39'), respostas);
            }else{
                enviarAtividade($('#unidade14grammar39'), respostas);
            }
        });

        $("#unidade14grammar40").submit(function(e){
            e.preventDefault();
            $(this).find('button').prop('disabled', true);
            var respostas = '{';
            $('#unidade14grammar40 input[type="radio"]:checked').each(function(index){
                if(($('#unidade14grammar40 input[type="radio"]:checked').length - 1) == index){
                    respostas += '"'+$(this).attr("name")+'":"'+$(this).val()+'"}';
                }else{
                    respostas += '"'+$(this).attr("name")+'":"'+$(this).val()+'",';
                }
            });
            if($('#unidade14grammar40 input[name="resposta_id"').val() != 0){
                atualizarAtividade($('#unidade14grammar40'), respostas);
            }else{
                enviarAtividade($('#unidade14grammar40'), respostas);
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
                        $('#unidade14grammar'+atividade_id+' input[name="'+chaves[j]+'"][value="'+respostas[j]+'"]').attr("checked", true);
                    }
                    $('#unidade14grammar'+atividade_id+' input[name="resposta_id"]').val(response[0].resposta_id);
                    $('#unidade14grammar'+atividade_id+' input[name="resposta_id"]').attr("value", response[0].resposta_id);
                }
            });
        }

        function enviarAtividade(form, respostas){
            var atividade = {
                "_token" : form.find('input[name="_token"]').val(),
                "resposta_respostas" : respostas,
                "atividade_id" : form.find('input[name="atividade_id"]').val(),
                "unidade_id" : form.find('input[name="unidade_id"]').val()
            };
            request = $.ajax({
                url: window.location.pathname+'/respostas',
                data: atividade,
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
