@extends('layouts.template')
@section('titulo','UNIMUGI | Home')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade1" data-etapa="grammar">
				<h3 class="barlow">LESSON 1</h3>
				<h5 class="barlow">C – GRAMMAR</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/unit1/grammar/grammar.ogg') }}" type="audio/ogg">
                </audio>
                <div class="clear"></div>
                
                <div class="umterco">
                    <table class="tabelaVerdeEscuro">
                        <tr>
                            <th>Affirmative</th>
                        </tr>
                        <tr class="tabelaVerde">
                            <td><b>I am </b>a video Maker.(I´m)</td>
                        </tr>
                        <tr class="tabelaVerde">
                            <td>You <b>are</b> a Game Developer.(You´re)</td>
                        </tr>
                        <tr class="tabelaVerde">
                            <td>He <b>is</b> a Youtuber.(He´s)</td>
                        </tr>
                        <tr class="tabelaVerde">
                            <td>She <b>is</b> a nice software.(It´s)</td>
                        </tr>
                        <tr class="tabelaVerde">
                            <td>We <b>are</b> a very happy.(We´re)</td>
                        </tr>
                        <tr class="tabelaVerde">
                            <td>You <b>are</b> focused.(You´re)</td>
                        </tr>
                        <tr class="tabelaVerde">
                            <td>They <b>are</b> in New York.(They´re)</td>
                        </tr>
                    </table>
                </div>
                <div class="umterco">
                    <table class="tabelaVerdeEscuro">
                        <tr>
                            <th>Negative</th>
                        </tr>
                        <tr class="tabelaVerde">
                            <td><b>I am not</b>a video Maker</td>
                        </tr>
                        <tr class="tabelaVerde">
                            <td>You <b>are not</b> a...</td>
                        </tr>
                        <tr class="tabelaVerde">
                            <td>He <b>are not</b> a...</td>
                        </tr>
                        <tr class="tabelaVerde">
                            <td>She  <b>is not</b> in...</td>
                        </tr>
                        <tr class="tabelaVerde">
                            <td>It <b>is not</b> a...</td>
                        </tr>
                        <tr class="tabelaVerde">
                            <td>We <b>are not</b>...</td>
                        </tr>
                        <tr class="tabelaVerde">
                            <td>You <b>are not</b>...</td>
                        </tr>
                        <tr class="tabelaVerde">
                            <td>They <b>are not</b>...</td>
                        </tr>
                    </table>
                </div>

                <div class="umterco">
                    <table class="tabelaVerdeEscuro">
                        <tr>
                            <th>Interrogative</th>
                        </tr>
                        <tr class="tabelaVerde">
                            <td><b>Am <I></I></b>a video Maker ?</td>
                        </tr>
                        <tr class="tabelaVerde">
                            <td><b>Are</b> you a... ?</td>
                        </tr>
                        <tr class="tabelaVerde">
                            <td>Is <b>he</b> a... ?</td>
                        </tr>
                        <tr class="tabelaVerde">
                            <td>Is <b>she</b> in... ?</td>
                        </tr>
                        <tr class="tabelaVerde">
                            <td>Are <b>is</b> we</td>
                        </tr>
                        <tr class="tabelaVerde">
                            <td>Are <b>you</b>  very happy.(We´re)</td>
                        </tr>
                        <tr class="tabelaVerde">
                            <td>You <b>are</b> a Game Developer.(You´re)</td>
                        </tr>
                        <tr class="tabelaVerde">
                            <td>They <b>are</b> in New York.(They´re)</td>
                        </tr>
                    </table>
                </div>
                
                    
                    

                <div class="clear"></div>
				<h5 class="barlow">A - Complete the sentences using the verb to be.</h5>
				<form id="unidade1grammar1" method="post">
                    <p><b>Professor Ludemann:</b> Bruna, what <input type="text" name="grammar1-1" required> your job?</p>
                    <p><b>Bruno:</b> I <input type="text" name="grammar1-2" required> your job?</p>
                    <p><b>Professor Ludemann:</b> <input type="text" name="grammar1-3" required> Photoshop important in your area?</p>
                    <p><b>Bruno:</b> Yes, it <input type="text" name="grammar1-4" required> very important.</p>
                    <p><b>Professor Ludemann:</b> João, why <input type="text" name="grammar1-5" required> Photoshop important in Bruna’s work?</p>
                    <p><b>João:</b> It <input type="text" name="grammar1-6" required> necessary because she can use it to develop the layout of the website.</p>
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <input type="hidden" name="resposta_id" value="0">
                    <input type="hidden" name="unidade_id" value="1">
                    <input type="hidden" name="atividade_id" value="1">
                    <button type="submit" class="mini-title suave click suave">Salvar resposta</button>
                </form>
                <h5 class="barlow">B - Use the correct punctuati on at the end of the sentences. Use “?” or “.”.</h5>
				<form id="unidade1grammar2" method="post">
                    <p>1. Is Professor Ludemann from Germany <input type="text" name="grammar2-1" required></p>
                    <p>2. Bruna is a web designer <input type="text" name="grammar2-2" required></p>
                    <p>3. Is João a professional photographer <input type="text" name="grammar2-3" required></p>
                    <p>4. Is Bruno’s hobby photography <input type="text" name="grammar2-4" required></p>
                    <p>5. Photoshop is a soft ware with innumerous tools <input type="text" name="grammar2-5" required></p>
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <input type="hidden" name="resposta_id" value="0">
                    <input type="hidden" name="unidade_id" value="1">
                    <input type="hidden" name="atividade_id" value="2">
                    <button type="submit" class="mini-title suave click suave">Salvar resposta</button>
                </form>
                <h5 class="barlow">C - Connect the questions to the correct answers.</h5>
                <form id="unidade1grammar3" method="post">
                    <div class="metade esquerda">
                        <p>1. What is the professional photographer’s name?</p>
                        <p>2. What does Bruno do?</p>
                        <p>3. When did the professor move to Brazil?</p>
                        <p>4. Where is the professor from?</p>
                        <p>5. Why does João need Photoshop?</p>
                    </div>
                    <div class="metade direita">
                        <p><input type="text" name="grammar3-1" required> His name is João.</p>
                        <p><input type="text" name="grammar3-2" required> To edit his photos.</p>
                        <p><input type="text" name="grammar3-3" required> He is a photographer</p>
                        <p><input type="text" name="grammar3-4" required> He is from Canada.</p>
                        <p><input type="text" name="grammar3-5" required> 5 years ago.</p>
                    </div>
                    <div class="clear"></div>
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <input type="hidden" name="resposta_id" value="0">
                    <input type="hidden" name="unidade_id" value="1">
                    <input type="hidden" name="atividade_id" value="3">
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

        $("#unidade1grammar1").submit(function(e){
            e.preventDefault();
            $(this).find('button').prop('disabled', true);
            var respostas = '{';
            $('#unidade1grammar1 input[type="text"]').each(function(index){
                if(($('#unidade1grammar1 input[type="text"]').length - 1) == index){
                    respostas += '"'+$(this).attr("name")+'":"'+$(this).val()+'"}';
                }else{
                    respostas += '"'+$(this).attr("name")+'":"'+$(this).val()+'",';
                }
            });
            if($('#unidade1grammar1 input[name="resposta_id"').val() != 0){
                atualizarAtividade($('#unidade1grammar1'), respostas);
            }else{
                enviarAtividade($('#unidade1grammar1'), respostas);
            }
        });

        $("#unidade1grammar2").submit(function(e){
            e.preventDefault();
            $(this).find('button').prop('disabled', true);
            var respostas = '{';
            $('#unidade1grammar2 input[type="text"]').each(function(index){
                if(($('#unidade1grammar2 input[type="text"]').length - 1) == index){
                    respostas += '"'+$(this).attr("name")+'":"'+$(this).val()+'"}';
                }else{
                    respostas += '"'+$(this).attr("name")+'":"'+$(this).val()+'",';
                }
            });
            if($('#unidade1grammar2 input[name="resposta_id"').val() != 0){
                atualizarAtividade($('#unidade1grammar2'), respostas);
            }else{
                enviarAtividade($('#unidade1grammar2'), respostas);
            }
        });

        $("#unidade1grammar3").submit(function(e){
            e.preventDefault();
            $(this).find('button').prop('disabled', true);
            var respostas = '{';
            $('#unidade1grammar3 input[type="text"]').each(function(index){
                if(($('#unidade1grammar3 input[type="text"]').length - 1) == index){
                    respostas += '"'+$(this).attr("name")+'":"'+$(this).val()+'"}';
                }else{
                    respostas += '"'+$(this).attr("name")+'":"'+$(this).val()+'",';
                }
            });
            if($('#unidade1grammar3 input[name="resposta_id"').val() != 0){
                atualizarAtividade($('#unidade1grammar3'), respostas);
            }else{
                enviarAtividade($('#unidade1grammar3'), respostas);
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
                        $('#unidade1grammar'+atividade_id+' input[name="'+chaves[j]+'"]').val(respostas[j]);
                        $('#unidade1grammar'+atividade_id+' input[name="'+chaves[j]+'"]').attr("value", respostas[j]);
                    }
                    $('#unidade1grammar'+atividade_id+' input[name="resposta_id"]').val(response[0].resposta_id);
                    $('#unidade1grammar'+atividade_id+' input[name="resposta_id"]').attr("value", response[0].resposta_id);
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
