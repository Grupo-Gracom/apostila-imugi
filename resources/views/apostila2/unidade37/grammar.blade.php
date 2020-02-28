@extends('layouts.template')
@section('titulo','UNIMUGI | Home')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade37" data-etapa="grammar">
				<h3 class="barlow">UNIT 37 </h3>
				<h5 class="barlow">3 - GRAMAR</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/Unit37/Grammar/completo.ogg') }}" type="audio/ogg">
                </audio>
                <div class="clear"></div>
                <div style="margin-top: 16px">
                    <h5 class="barlow" style="margin-top: 16px">A - GERUNDS</h5>
                    <p>We use <b>gerunds (verb+ing)</b> after some specific verbs. Take a look at the examples below.</p>
                    <table class="metade center-align">
                        <tr>
                            <td><h5 class="barlow">VERB</h5></td>
                            <td><h5 class="barlow">EXAMPPLES</h5></td>
                        </tr>
                        <tr>
                            <td><p>Enjoy</p></td>
                            <td><p>My friemd enjoys travelling to take specialization courses.</p></td>
                        </tr>
                        <tr>
                            <td><p>Miss</p></td>
                            <td><p>I miss spending time around the pool just to relax.</p></td>
                        </tr>
                        <tr>
                            <td><p>Imagine</p></td>
                            <td><p>Can you imagine youself preparing a whole project? From A to Z?</p></td>
                        </tr>
                        <tr>
                            <td><p>Appreciate</p></td>
                            <td><p>I really appreciate having some time at home to study</p></td>
                        </tr>
                        <tr>
                            <td><p>Suggest</p></td>
                            <td><p>Glenn suggested watching more animations.</p></td>
                        </tr>
                        <tr>
                            <td colspan="2"><h5 class="barlow">Other Verbs</h5></td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <p>
                                    Admit, avoid, contemplate, delay, deny, detest, dislike, endure, escape, excuse, face,
                                    finish, forgive, give up, mind, pratice, postpone, resist, risk, understand, stop
                                </p>
                            </td>
                        </tr>
                    </table> 

                    <h5 class="barlow" style="margin-top: 16px">EXERCISES</h5>
                    <h5 class="barlow">1 - Complete with a gerund.</p>            
                    <form id="unidade37grammar275" style="margin-top:32px" method="post">
                        <div class="metade">
                            <p>
                                <p>
                                    1. Hector dislikes <input type="text" name="grammar275-1" placeholder="Responda aqui" required/> (play) Xbox games.<br>
                                </p>
                                <p>
                                    2. Martin admitted <input type="text" name="grammar275-2" placeholder="Responda aqui" required/> (steal) the money from the safe.<br>
                                </p>
                                <p>
                                    3.  I regretted <input type="text" name="grammar275-3" placeholder="Responda aqui" required/>(forget) to call my grandfather for his birthday.
                                </p>
                                <p>
                                    4. Please, avoid <input type="text" name="grammar275-4" placeholder="Responda aqui" required/> (touch)the wire with wet hands
                                </p>
                                <p>
                                    5. We suggested <input type="text" name="grammar275-5" placeholder="Responda aqui" required/> (sell) our apartment at the sea side.<br>
                                </p>
                                <p>
                                    6. She postponed <input type="text" name="grammar275-6" placeholder="Responda aqui" required/> (make) a decision for the new shop.<br>
                                </p>
                                <p>
                                    7. Excuse me, do you mind <input type="text" name="grammar275-7" placeholder="Responda aqui" required/> (clean) the table please<br>
                                </p>
                                <p>
                                    8. It was difficult to climb up the mountain but we kept <input type="text" name="grammar275-8" placeholder="Responda aqui" required/> (go).
                                </p>
                                <p>
                                    9. Robert denied <input type="text" name="grammar275-9" placeholder="Responda aqui" required/> (kidnap) the child.<br>
                                </p>
                                <p>
                                    10. Sonia didn’t tolerate <input type="text" name="grammar275-10" placeholder="Responda aqui" required/> (share)the bedroom with John. <br>
                                </p>
                                <p>
                                    11. Barbara celebrated <input type="text" name="grammar275-11" placeholder="Responda aqui" required/> (win) the TV contest. <br>
                                </p>
                                <p>
                                    12. Miriam omitted <input type="text" name="grammar275-12" placeholder="Responda aqui" required/> (invite) her old university colleagues. <br>
                                </p>
                                <p>
                                    13. It was late so we hurried <input type="text" name="grammar275-13" placeholder="Responda aqui" required/> (catch) the last bus. <br>
                                </p>
                                <p>
                                    14.  I can still remember <input type="text" name="grammar275-14" placeholder="Responda aqui" required/> (visit) my grandparents fifty years ago. <br>
                                </p>
                                <p>
                                    15. I’ll never forget <input type="text" name="grammar275-15" placeholder="Responda aqui" required/> (see) that van Gogh exhibition in New York <br>
                                </p>
                                <p>
                                    16. I regret <input type="text" name="grammar275-16" placeholder="Responda aqui" required/> (lend) him the money. He never paid it back. <br>
                                </p>
                                <p>
                                    17. I’ll just finish <input type="text" name="grammar275-17" placeholder="Responda aqui" required/> (clean) the kitchen then I’ll stop. <br>
                                </p>
                                <p>
                                    18. She suggested <input type="text" name="grammar275-18" placeholder="Responda aqui" required/> (have) dinner at her house. <br>
                                </p>
                                <p>
                                    19.  She doesn’t mind <input type="text" name="grammar275-19" placeholder="Responda aqui" required/> (do) the boring jobs. <br>
                                </p>
                                <p>
                                    20. He keeps <input type="text" name="grammar275-20" placeholder="Responda aqui" required/> (ask) me to go out with him <br>
                                </p>
                                <p>
                                    21. He has given up <input type="text" name="grammar275-21" placeholder="Responda aqui" required/> (smoke). <br>
                                </p>
                                <p>
                                    22. My remote control doesn’t work. Try <input type="text" name="grammar275-22" placeholder="Responda aqui" required/> (change) the batteries. <br>
                                </p>
                                <p>
                                    23.  Would you mind <input type="text" name="grammar275-23" placeholder="Responda aqui" required/> (open) the window? It’s very hot in here. <br>
                                </p>
                                <p>
                                    24. I couldn’t help <input type="text" name="grammar275-24" placeholder="Responda aqui" required/> (laugh)when he tripped! <br>
                                </p>
                                <p>
                                    25.  I enjoy <input type="text" name="grammar275-25" placeholder="Responda aqui" required/> (go) to clubs. <br>
                                </p>
                                <p>
                                    26. My doctor advised me <input type="text" name="grammar275-26" placeholder="Responda aqui" required/> (quit) smoking.  <br>
                                </p>
                                <p>
                                    27. Please stop <input type="text" name="grammar275-27" placeholder="Responda aqui" required/> (shout) I can hear you fine! <br>
                                </p>
                                
                            </p>
                        </div>
                        <div class="clear"></div>

                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <input type="hidden" name="resposta_id" value="0">
                        <input type="hidden" name="unidade_id" value="37">
                        <input type="hidden" name="atividade_id" value="275">
                        <button type="submit" class="mini-title suave click suave">Salvar resposta</button>
                    </form>
                    <div style="margin-top: 36px">
                        <figure>
                            <img src="{{ asset('assets/img/playgo/unit37/pagina-1.png') }}" alt="games">
                        </figure>
				    </div>
                </div>

                <h5 class="barlow metade" style="margin-top: 36px">2 - Think of suggestions for a new employee of a game development company. Write 5
                sentences using GERUND to tell him how he needs to behave in the new position.</h5>    
                <form id="unidade37grammar276" method="post">
                    <textarea name="grammar276-1" class="metade left-align" placeholder="Responda aqui" required></textarea>

                    <div class="clear"></div>

                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <input type="hidden" name="resposta_id" value="0">
                    <input type="hidden" name="unidade_id" value="37">
                    <input type="hidden" name="atividade_id" value="276">
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

        $("#unidade37grammar275").submit(function(e){
            e.preventDefault();
            $(this).find('button').prop('disabled', true);
            var respostas = '{';
            $('#unidade37grammar275 input[type="text"]').each(function(index){
                if(($('#unidade37grammar275 input[type="text"]').length - 1) == index){
                    respostas += '"'+$(this).attr("name")+'":"'+$(this).val()+'"}';
                }else{
                    respostas += '"'+$(this).attr("name")+'":"'+$(this).val()+'",';
                }
            });
            if($('#unidade37grammar275 input[name="resposta_id"').val() != 0){
                atualizarAtividade($('#unidade37grammar275'), respostas);
            }else{
                enviarAtividade($('#unidade37grammar275'), respostas);
            }
        });

       


        $("#unidade37grammar276").submit(function(e){
            e.preventDefault();
            $(this).find('button').prop('disabled', true);
            var respostas = '{"'+$('#unidade37grammar276 textarea').attr("name")+'":"'+$('#unidade37grammar276 textarea').val()+'"}';
            if($('#unidade37grammar276 input[name="resposta_id"').val() != 0){
                atualizarAtividade($('#unidade37grammar276'), respostas);
            }else{
                enviarAtividade($('#unidade37grammar276'), respostas);
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
                        $('#unidade37grammar'+atividade_id+' textarea[name="'+chaves[j]+'"]').val(respostas[j]);
                        $('#unidade37grammar'+atividade_id+' textarea[name="'+chaves[j]+'"]').attr("value", respostas[j]);
                        $('#unidade37grammar'+atividade_id+' input[name="'+chaves[j]+'"]').val(respostas[j]);
                        $('#unidade37grammar'+atividade_id+' input[name="'+chaves[j]+'"]').attr("value", respostas[j]);
                    }
                    $('#unidade37grammar'+atividade_id+' input[name="resposta_id"]').val(response[0].resposta_id);
                    $('#unidade37grammar'+atividade_id+' input[name="resposta_id"]').attr("value", response[0].resposta_id);
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
