@extends('layouts.template')
@section('titulo','UNIMUGI | Home')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade45" data-etapa="grammar">
				<h3 class="barlow">UNIT 45</h3>
				<h5 class="barlow">3 - GRAMMAR</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/unit1/grammar/grammar.ogg') }}" type="audio/ogg">
                </audio>
                <div class="clear"></div>                
                <h5 class="barlow" style="margin-top:16px;">CONJUNCTIONS FOR CONCLUDING INFORMATION.</h5>
                <p>We also use <b>connectors to conclude ideas.</b> Take a look at the examples below</p>
                <div class="espacamento">
                    <table class="bordered">           
                        <tr>
                            <td class="center-align bordered"><h5 class="barlow">Drawing a conclusion</h5></td>                                                         														
                        </tr>                                                                             										
                        <tr>
                            <td class="center-align bordered"><p>so, therefore , as I’ve said , based on , as , as a conclusion , to
                            conclude , summing up , because of that , since , as a result</p></td>                                                         														
                        </tr>                                                                             										
                    </table>                 
                </div>
                <div class="clear"></div>               
                <div class="espacamento">                                
                    <table class="bordered esquerda">           
                        <tr>
                            <td class="center-align bordered"><h5 class="barlow">Sentences / information</h5></td>                                                         														
                        </tr>                                                                             										
                        <tr>
                            <td class="center-align bordered"><p>a.Cinema 4D is a <b>fast</b> software.</p></td>                                                         														
                        </tr>                                                                                                                               										
                        <tr>
                            <td class="center-align bordered"><p>b.Cinema 4D is <b>very efficient</b> for renderizations.</p></td>                                                         														
                        </tr>                                                                                                                               										
                        <tr>
                            <td class="center-align bordered"><p>c.Cinema 4D is <b>very cheap</b> when compared to other softwares.</p></td>                                                         														
                        </tr>                                                                                                                               										
                    </table>                 
                </div>
                <div class="espacamento">                                
                    <table id="encostado" class="bordered direita">           
                        <tr>
                            <td class="center-align bordered"><h5 class="barlow">Connected sentences / conclusion</h5></td>                                                         														
                        </tr>                                                                             										
                        <tr>
                            <td class="center-align bordered"><p>a+b+c</p></td>                                                         														
                        </tr>                                                                             										
                        <tr>
                            <td class="center-align bordered"><p>Cinema 4D has a lot of good qualities. <B>So</B>, we decided </P> <P>to use it in our company.</p></td>                                                         														
                        </tr>                                                                                                                      										
                        <tr>
                            <td class="center-align bordered"><p>Cinema 4D has a lot of good qualities. <B>Therefore</B>, </P> <P>we decided to use it in our company</p></td>                                                         														
                        </tr>                                                                                                                      										
                        <tr>
                            <td class="center-align bordered"><p>Cinema 4D has a lot of good qualities. </P> <P><B>Because of that</B>, we decided to use it in our company</p></td>                                                         														
                        </tr>                                                                                                                      										
                    </table>                 
                </div>
                <div class="clear"></div>                                                
                <table class="bordered direita">                                                                                                 										
                    <tr>
                        <td class="center-align bordered"><p><b>l</b>earn and memorize its too<b>l</b>s</p></td>                                                         														
                    </tr>                                                                             										
                    <tr>
                        <td class="center-align bordered"><p>Cinema 4D is a fast software <b>However/even though,</b> it's very dificult to
                        learn and memorize a<b>ll</b> the too<b>l</b>s.</p></td>                                                         														
                    </tr>                                                                                                                      										
                    <tr>
                        <td class="center-align bordered"><p><b>Although</b> Cinema 4D is a fast software, it's very dificult to learn
                        and memorize a<b>ll</b> the too<b>l</b>s.</p></td>                                                         														
                    </tr>                                                                                                                      										
                    <tr>
                        <td class="center-align bordered"><p>Cinema 4D is a fast software. it's very dificult to learn and memorize a<b>ll</b> the too<b>l</b>s <b>though.</b></p></td>                                                         														
                    </tr>                                                                                                                      										
                </table>        
                <div class="clear"></div>               
                <h5 class="barlow">EXERCISES</h5>                
                <h5 class="barlow">A - Complete the sentences in A using BECAUSE or BECAUSE OF and an idea from B. Use each idea in B only one.</h5>
                <div class="metade esquerda recuoEsquerda">
                    <p class="center-align"><b>A</b></p>
                    <p><b><span>1.</span> He phoned the police</b></p>
                    <p><b><span>2.</span> I didn’t have any lunch</b></p>
                    <p><b><span>3.</span> Our plane was delayed</b></p>
                    <p><b><span>4.</span> He went to Paris</b></p>
                    <p><b><span>5.</span> I took an umbrella</b></p>
                    <p><b><span>6.</span> He couldn’t run very fast</b></p>
                </div>                                     
                <div class="metade direita recuoEsquerda">
                    <p class="center-align"><b>B</b></p>
                    <p><b><span>a)</SPAN> his bad leg</b></p>
                    <p><b><span>b)</SPAN> I thought it might rain</b></p>
                    <p><b><span>c)</SPAN> I wasn’t hungry</b></p>
                    <p><b><span>d)</SPAN> he’d lost his wallet</b></p>
                    <p><b><span>e)</SPAN> the fog</b></p>
                    <p><b><span>f)</SPAN> he wanted to learn French</b></p>
                </div>                                     
                <div class="clear"></div>               
				<form class="quasefull" id="unidade45grammar319" method="post">
                    <P><b>1.</b> <input type="text" placeholder="responda aqui !" name="grammar319-1" class="inputpequeno left-align" required>
                    He phoned the police because he’d lost his wallet. 
                    <input type="text" placeholder="responda aqui !" name="grammar319-1" class="inputpequeno left-align" required></P>
                    <P><b>2.</b><input type="text" placeholder="responda aqui !" name="grammar319-2" class="quasefull left-align" required></P>
                    <P><b>3.</b><input type="text" placeholder="responda aqui !" name="grammar319-3" class="quasefull left-align" required></P>
                    <P><b>4.</b><input type="text" placeholder="responda aqui !" name="grammar319-4" class="quasefull left-align" required></P>
                    <P><b>5.</b><input type="text" placeholder="responda aqui !" name="grammar319-5" class="quasefull left-align" required></P>
                    <P><b>6.</b><input type="text" placeholder="responda aqui !" name="grammar319-6" class="quasefull left-align" required></P>                   
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <input type="hidden" name="resposta_id" value="0">
                    <input type="hidden" name="unidade_id" value="45">
                    <input type="hidden" name="atividade_id" value="319">
                    <button type="submit" class="mini-title suave click suave">Salvar resposta</button>
                </form>                
                <h5 class="barlow">B - Choose the correct answers:</h5>
				<form class="quasefull" id="unidade45grammar320" method="post">
                    <p><b>1.</b> <input type="radio" name="grammar320-1" value="1" required>
                    <b><b>As</b> / <input type="radio" name="grammar320-1" value="1" required>
                    </b><b>As a result</b> it was such a beautiful day, we decided to have a picnic.</p>

                    <p><b>2.</b> It was his birthday <input type="radio" name="grammar320-2" value="1" required>
                    <b>because</b> / <input type="radio" name="grammar320-2" value="1" required><b>so</b> 
                    we decided to buy him a present.</p>

                    <p><b>3.</b> <input type="radio" name="grammar320-3" value="1" required>
                    <b>As a result</b> / <input type="radio" name="grammar320-3" value="1" required>
                    <b>Since</b> all the seats on the train were taken, we had to stand.</p>

                    <p><b>4.</b> The banks were closed and <input type="radio" name="grammar320-4" value="1" required>
                    <b>as a result</b> / <input type="radio" name="grammar320-4" value="1" required>
                    <b>because</b> we couldn’t get any money.</p>

                    <p><b>5.</b> I didn’t find the book very interesting and <input type="radio" name="grammar320-5" value="1" required>
                    <b>so</b> / <input type="radio" name="grammar320-5" value="1" required>
                    <b>as</b> I didn’t finish it.</p>

                    <p><b>6.</b> We couldn’t drive across the bridge <input type="radio" name="grammar320-6" value="1" required>
                    <b>as a result</b> / <input type="radio" name="grammar320-6" value="1" required>
                    <b>because</b> it was closed.</p>

                    <p><b>7.</b> She had the best qualifications and she <input type="radio" name="grammar320-7" value="1" required>
                    <b>so</b> / <input type="radio" name="grammar320-7" value="1" required>
                    <b>therefore</b> got the job.</p>

                    <p><b>8.</b> I haven’t got much money <input type="radio" name="grammar320-8" value="1" required>
                    <b>as</b> / <input type="radio" name="grammar320-8" value="1" required>
                    <b>so</b> I can’t afford a new car.</p>

                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <input type="hidden" name="resposta_id" value="0">
                    <input type="hidden" name="unidade_id" value="45">
                    <input type="hidden" name="atividade_id" value="320">
                    <button type="submit" class="mini-title suave click suave">Salvar resposta</button>
                </form>
                <figure>
					<img src="{{ asset('assets/img/dominating/unit45/grammar.png') }}" alt="Garotos festejando">
				</figure>       
                <h5 class="barlow" style="margin-top: 16px;">C -  In groups of 3 or 4, debate what could the bone to bring the movies and games universe
                to the classroom to improve students interest and learning. Use the linking words to draw
                a conclusion.</h5>    
                <form id="unidade45grammar321" method="post">
                    <textarea name="grammar321-1" class="center-align" placeholder="Responda aqui" required></textarea>                    
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <input type="hidden" name="resposta_id" value="0">
                    <input type="hidden" name="unidade_id" value="45">
                    <input type="hidden" name="atividade_id" value="321">
                    <button type="submit" class="mini-title suave click suave">Salvar resposta</button>
                </form>                                              
                <div class="clear"></div>        
			</div>
		</div>
    </main>
    <script>
        activeMenu();

        $("form").each(function(){
            var atividade_id = $(this).find('input[name="atividade_id"]').val();
            var inputType = $(this).find('input').attr('type');
            checkAtividade(atividade_id, inputType);
        });

        $("#unidade45grammar319").submit(function(e){
            e.preventDefault();
            $(this).find('button').prop('disabled', true);
            var respostas = '{';
            $('#unidade45grammar319 input[type="text"]').each(function(index){
                if(($('#unidade45grammar319 input[type="text"]').length - 1) == index){
                    respostas += '"'+$(this).attr("name")+'":"'+$(this).val()+'"}';
                }else{
                    respostas += '"'+$(this).attr("name")+'":"'+$(this).val()+'",';
                }
            });
            if($('#unidade45grammar319 input[name="resposta_id"').val() != 0){
                atualizarAtividade($('#unidade45grammar319'), respostas);
            }else{
                enviarAtividade($('#unidade45grammar319'), respostas);
            }
        });

        
        $("#unidade45grammar320").submit(function(e){
            e.preventDefault();
            $(this).find('button').prop('disabled', true);
            var respostas = '{';
            $('#unidade45grammar320 input[type="radio"]:checked').each(function(index){
                if(($('#unidade45grammar320 input[type="radio"]:checked').length - 1) == index){
                    respostas += '"'+$(this).attr("name")+'":"'+$(this).val()+'"}';
                }else{
                    respostas += '"'+$(this).attr("name")+'":"'+$(this).val()+'",';
                }
            });
            if($('#unidade45grammar320 input[name="resposta_id"').val() != 0){
                atualizarAtividade($('#unidade45grammar320'), respostas);
            }else{
                enviarAtividade($('#unidade45grammar320'), respostas);
            }
        });

        $("#unidade45grammar321").submit(function(e){
            e.preventDefault();
            $(this).find('button').prop('disabled', true);
            var respostas = '{"'+$('#unidade45grammar321 textarea').attr("name")+'":"'+$('#unidade45grammar321 textarea').val()+'"}';
            if($('#unidade45grammar321 input[name="resposta_id"').val() != 0){
                atualizarAtividade($('#unidade45grammar321'), respostas);
            }else{
                enviarAtividade($('#unidade45grammar321'), respostas);
            }
        });
       

        function checkAtividade(atividade_id, inputType){
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
                    
                    console.log('tipo input -> ' + inputType);
                    if(inputType === 'radio'){
                        for(j = 0; j < respostas.length; j++){
                            $('#unidade45grammar'+atividade_id+' input[name="'+chaves[j]+'"][value="'+respostas[j]+'"]').attr("checked", true);                    
                        }
                    }else{
                        for(j = 0; j < respostas.length; j++){
                            $('#unidade45grammar'+atividade_id+' textarea[name="'+chaves[j]+'"]').val(respostas[j]);
                            $('#unidade45grammar'+atividade_id+' textarea[name="'+chaves[j]+'"]').attr("value", respostas[j]);
                            $('#unidade45grammar'+atividade_id+' input[name="'+chaves[j]+'"]').val(respostas[j]);
                            $('#unidade45grammar'+atividade_id+' input[name="'+chaves[j]+'"]').attr("value", respostas[j]);
                        }
                    }                    
                    $('#unidade45grammar'+atividade_id+' input[name="resposta_id"]').val(response[0].resposta_id);
                    $('#unidade45grammar'+atividade_id+' input[name="resposta_id"]').attr("value", response[0].resposta_id);
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