@extends('layouts.template')
@section('titulo','UNIMUGI | Home')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-unidade="unidade4" data-etapa="grammar">
				<h3 class="barlow">UNIT 04 - NICE TO MEET YOU, KATE!</h3>
				<h5 class="barlow">3 - Grammar (demonstrative pronouns)</h5>
                <table class="tabelagrammar">
                    <tr>
                        <td></td>
                        <td class="upper"><b>Close</b></td>
                        <td class="upper"><b>far</b></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td class="upper"><b>singular</b></td>
                        <td>This</td>
                        <td>That</td>
                        <td>(is)</td>
                    </tr>
                    <tr>
                        <td class="upper"><b>plural</b></td>
                        <td>These</td>
                        <td>Those</td>
                        <td>(are)</td>
                    </tr>
                </table>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/Unit4/Grammar/gramar.ogg') }}" type="audio/ogg">
                </audio>
                <div class="clear"></div>
                <h5 class="barlow" style="margin-top: 16px">A - Complete the exercise with the correct demonstrative pronouns in the questions and personal pronouns in the answers.</h5>
				<form id="unidade4grammar14" method="post">
                    <div class="umterco">
                        <figure>
                            <img src="{{ asset('assets/img/playgo/unit4/01.png') }}" alt="Garotos festejando">
                        </figure>
                        <p>What <input type="text" name="grammar14-1" required/> ?</p>
                        <p><input type="text" name="grammar14-2" required/> book.</p>
                    </div>
                    <div class="umterco">
                        <figure>
                            <img src="{{ asset('assets/img/playgo/unit4/02.png') }}" alt="Garotos festejando">
                        </figure>
                        <p>Who is <input type="text" name="grammar14-3" required/> ?</p>
                        <p><input type="text" name="grammar14-4" required/> Kate.</p>
                    </div>
                    <div class="umterco">
                        <figure>
                            <img src="{{ asset('assets/img/playgo/unit4/03.png') }}" alt="Garotos festejando">
                        </figure>
                        <p>What <input type="text" name="grammar14-5" required/> ?</p>
                        <p><input type="text" name="grammar14-6" required/> glasses.</p>
                    </div>
                    <div class="clear"></div>
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <input type="hidden" name="resposta_id" value="0">
                    <input type="hidden" name="unidade_id" value="4">
                    <input type="hidden" name="atividade_id" value="14">
                    <button type="submit" class="mini-title suave click suave">Salvar resposta</button>
                </form>
                
				<h5 class="barlow">B. Fill in the blanks with the appropriate form of the verb be using informati on from the text.</h5>
				<form id="unidade4grammar15" method="post">
                    <p>1. This <input type="text" name="grammar15-1" required/> Kate. She <input type="text" name="grammar15-2" required/> from here. She <input type="text" name="grammar15-3" required/> from Japan.</p>
                    <p>2. Carlos and Kate <input type="text" name="grammar15-4" required/>  Photoshop students. They <input type="text" name="grammar15-5" required/> from Australia. Carlos <input type="text"  name="grammar15-6" required/> Brasilia and she <input type="text" name="grammar15-7" required/> Japanese.</p>
                    <p>3. <input type="text" name="grammar15-8" required/> you Brazilian?</p>
           
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <input type="hidden" name="resposta_id" value="0">
                    <input type="hidden" name="unidade_id" value="4">
                    <input type="hidden" name="atividade_id" value="15">
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

        $("#unidade4grammar14").submit(function(e){
            e.preventDefault();
            $(this).find('button').prop('disabled', true);
            var respostas = '{';
            $('#unidade4grammar14 input[type="text"]').each(function(index){
                if(($('#unidade4grammar14 input[type="text"]').length - 1) == index){
                    respostas += '"'+$(this).attr("name")+'":"'+$(this).val()+'"}';
                }else{
                    respostas += '"'+$(this).attr("name")+'":"'+$(this).val()+'",';
                }
            });
            if($('#unidade4grammar14 input[name="resposta_id"').val() != 0){
                atualizarAtividade($('#unidade4grammar14'), respostas);
            }else{
                enviarAtividade($('#unidade4grammar14'), respostas);
            }
        });

        $("#unidade4grammar15").submit(function(e){
            e.preventDefault();
            $(this).find('button').prop('disabled', true);
            var respostas = '{';
            $('#unidade4grammar15 input[type="text"]').each(function(index){
                if(($('#unidade4grammar15 input[type="text"]').length - 1) == index){
                    respostas += '"'+$(this).attr("name")+'":"'+$(this).val()+'"}';
                }else{
                    respostas += '"'+$(this).attr("name")+'":"'+$(this).val()+'",';
                }
            });
            if($('#unidade4grammar15 input[name="resposta_id"').val() != 0){
                atualizarAtividade($('#unidade4grammar15'), respostas);
            }else{
                enviarAtividade($('#unidade4grammar15'), respostas);
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
                        $('#unidade4grammar'+atividade_id+' input[name="'+chaves[j]+'"]').val(respostas[j]);
                        $('#unidade4grammar'+atividade_id+' input[name="'+chaves[j]+'"]').attr("value", respostas[j]);
                    }
                    $('#unidade4grammar'+atividade_id+' input[name="resposta_id"]').val(response[0].resposta_id);
                    $('#unidade4grammar'+atividade_id+' input[name="resposta_id"]').attr("value", response[0].resposta_id);
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
