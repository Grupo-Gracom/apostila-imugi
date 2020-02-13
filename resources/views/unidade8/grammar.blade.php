@extends('layouts.template')
@section('titulo','UNIMUGI | Home')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-unidade="unidade8" data-etapa="grammar">
				<h3 class="barlow">UNIT 08 - REVIEW OF SOPHIA’S CLASSES</h3>
				<h5 class="barlow">3 - GRAMAR</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/Unit5/Grammar/completo.ogg') }}" type="audio/ogg">
                </audio>
                <div class="clear"></div>
                <div class="metade esquerda" style="margin-top: 16px">
                    <table>
                           <p> NEGATIVE FORM OF THE SIMPLE PRESENT</p>
                        <tr>
                            <th>I DON’T</th>
                            <th></th>
                            <th>HE DOESN’T</th>
                            <th></th>
                        </tr>
                        <tr>
                            <th>YOU DON’T</th>
                            <th>+ VERB</th>
                            <th>SHE DOESN’T</th>
                            <th>+VERB</th>
                        </tr>
                        <tr>
                            <th>WE DON’T</th>
                            <th></th>
                            <th>IT DOESN’T</th>
                            <th></th>
                        </tr>
                        <tr>
                            <th>THEY DON’T</th>
                            <th></th>
                            <th></th>
                            <th></th>
                        </tr>
                    </table>
                </div>
                
                <div class="clear"></div>
                <h5 class="barlow" style="margin-top: 16px">A - COMPLETE THE SENTENCES WITH THE CORRECT HELPING VERB IN THE NEGATIVE FORM</h5>
				<form id="unidade8grammar26" method="post">
                        <p>1. Sarah and Mike <input type="text" name="grammar26-1" required/> know how to use burn tool.</p>
                        <p>2. John <input type="text" name="grammar26-2" required/> work with Photography.</p>
                        <p>3. Nick and I <input type="text" name="grammar26-3" required/>  utilize Dodge tool.</p>
                        <p>4. Brian <input type="text" name="grammar26-4" required/> need to use Spot Healing Brush on his photos.</p>
                    
                    <div class="clear"></div>
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <input type="hidden" name="resposta_id" value="0">
                    <input type="hidden" name="unidade_id" value="8">
                    <input type="hidden" name="atividade_id" value="26">
                    <button type="submit" class="mini-title suave click suave">Salvar resposta</button>
                </form>
                
                <h5 class="barlow">B - TAKE THE GIVEN SENTENCES AND WRITE THEM IN THE OTHER TWO FORMS</h5>
                <form id="unidade8grammar27" method="post">
                    <p> 
                        <p>1. <b>AFFIRMATIVE:</b></p>
                        <p>SHE WORKS WITH PHOTOGRAPHY.</p>
                        <div class="metade">
                            <p>
                                <b>INTERROGATIVE:</b>
                                <input type="text" name="grammar27-1" class="left-align full" required/>
                            </p>
                            <p>
                                <b>NEGATIVE:</b>
                                <input type="text" name="grammar27-2" class="left-align full" required/>
                            </p>
                        </div>
                    </p>

                    <p style="margin-top: 36px"> 
                        <div class="metade">
                            <p>
                                2. <b>AFFIRMATIVE:</b> 
                                <input type="text" name="grammar27-3" class="left-align full"  required/>
                            </p>
                        </div>
                        <p><b>INTERROGATIVE:</b></p>
                        <p>DO CAIO AND SARAH HAVE AN EDITING SOFTWARE?</p>
                        <div class="metade">
                            <p>
                                <b>NEGATIVE:</b> 
                                <input type="text" name="grammar27-4" class="left-align full"  required/>
                            </p>
                        </div>
                    </p>

                    <p style="margin-top: 36px"> 
                        <div class="metade">
                            <p>
                                3. <b>AFFIRMATIVE:</b> 
                                <p><input type="text" name="grammar27-5" class="left-align full" required/></p>
                            </p>
                            <p>
                                <b>INTERROGATIVE:</b> 
                                <p><input type="text" name="grammar27-6" class="left-align full" required/></p>
                            </p>
                        </div>
                        <p><b>NEGATIVE:</b></p>
                        <p>THEY DON’T WANT TO STUDY.</p>
                    </p>

                        <div class="clear"></div>
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <input type="hidden" name="resposta_id" value="0">
                        <input type="hidden" name="unidade_id" value="8">
                        <input type="hidden" name="atividade_id" value="27">
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

        $("#unidade8grammar26").submit(function(e){
            e.preventDefault();
            $(this).find('button').prop('disabled', true);
            var respostas = '{';
            $('#unidade8grammar26 input[type="text"]').each(function(index){
                if(($('#unidade8grammar26 input[type="text"]').length - 1) == index){
                    respostas += '"'+$(this).attr("name")+'":"'+$(this).val()+'"}';
                }else{
                    respostas += '"'+$(this).attr("name")+'":"'+$(this).val()+'",';
                }
            });
            if($('#unidade8grammar26 input[name="resposta_id"').val() != 0){
                atualizarAtividade($('#unidade8grammar26'), respostas);
            }else{
                enviarAtividade($('#unidade8grammar26'), respostas);
            }
        });

        $("#unidade8grammar27").submit(function(e){
            e.preventDefault();
            $(this).find('button').prop('disabled', true);
            var respostas = '{';
            $('#unidade8grammar27 input[type="text"]').each(function(index){
                if(($('#unidade8grammar27 input[type="text"]').length - 1) == index){
                    respostas += '"'+$(this).attr("name")+'":"'+$(this).val()+'"}';
                }else{
                    respostas += '"'+$(this).attr("name")+'":"'+$(this).val()+'",';
                }
            });
            if($('#unidade8grammar27 input[name="resposta_id"').val() != 0){
                atualizarAtividade($('#unidade8grammar27'), respostas);
            }else{
                enviarAtividade($('#unidade8grammar27'), respostas);
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
                        $('#unidade8grammar'+atividade_id+' input[name="'+chaves[j]+'"]').val(respostas[j]);
                        $('#unidade8grammar'+atividade_id+' input[name="'+chaves[j]+'"]').attr("value", respostas[j]);
                    }
                    $('#unidade8grammar'+atividade_id+' input[name="resposta_id"]').val(response[0].resposta_id);
                    $('#unidade8grammar'+atividade_id+' input[name="resposta_id"]').attr("value", response[0].resposta_id);
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
