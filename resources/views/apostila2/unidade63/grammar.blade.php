@extends('layouts.template')
@section('titulo','UNIMUGI | Home')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade63" data-etapa="grammar">
				<h3 class="barlow">UNIT 63</h3>
				<h5 class="barlow">3 - GRAMAR</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/Unit63/Grammar/completo.ogg') }}" type="audio/ogg">
                </audio>
                <div class="clear"></div>
                <div style="margin-top: 16px">
                    <h5 class="barlow">A - Choose the correct tense.</h5>
                    <form id="unidade63grammar413" method="post">
                        <div class="metade" >
                            <p> 
                                <p>
                                    1. <input type="radio" name="grammar413-1" value="1" required/> I can’t come to see you now, because I (am finishing /finish) my homework.
                                </p>
                                <p>
                                    2. <input type="radio" name="grammar413-1" value="2" required/> You’ve dropped your wallet. (I’m going to / I’ll) pick it up for you.
                                </p>
                                <p>
                                    3. <input type="radio" name="grammar413-1" value="3" required/> It was the first time the actor (received / was receiving) such bad reviews.
                                </p>
                                <p>
                                    4. <input type="radio" name="grammar413-1" value="4" required/> I (watched / was watching) my favorite show when the doorbell rang.
                                </p>
                                <p>
                                    5. <input type="radio" name="grammar413-1" value="5" required/> They (awarded / have awarded) Bob Matthews an Oscar. It was on the news just now.
                                </p>
                                <p>
                                    6. <input type="radio" name="grammar413-1" value="6" required/> They (broadcast / were broadcasting) the match live when the rain stopped play.
                                </p>
                                <p>
                                    7. <input type="radio" name="grammar413-1" value="7" required/> We looked out of the window and saw that it (was raining / rained) so we decided to stay at home.
                                </p>
                                <p>
                                    8. <input type="radio" name="grammar413-1" value="8" required/> TV talk shows (increase / are increasing) in number all the time.
                                </p>
                                <p>
                                    9. <input type="radio" name="grammar413-1" value="9" required/> Can you remember what you (were wearing / were) when you lost your handbag ?
                                </p>
                                <p>
                                    10. <input type="radio" name="grammar413-1" value="10" required/> I (had been skiing / skied) before but last week was really awesome.
                                </p>
                                <p>
                                    11. <input type="radio" name="grammar413-1" value="11" required/> I (have gone / went) to a modern art exhibition last week.
                                </p>
                                <p>
                                    12. <input type="radio" name="grammar413-1" value="12" required/> I (have been reading / have read) a new novel by John Grisham. It’s so thrilling I can’t put it down !
                                </p>
                                <p>
                                    13. <input type="radio" name="grammar413-1" value="13" required/> I (had been waited / had waited) for ages for her to write before the letter finally arrived.
                                </p>
                                <p>
                                    14. <input type="radio" name="grammar413-1" value="14" required/> When I (finished / have finished) reading the book, I’m going to start a new one.
                                </p>
                                <p>
                                    15. <input type="radio" name="grammar413-1" value="15" required/> They (broadcast / have broadcast) the program twice on TV already.
                                </p>
                                <p>
                                    16. <input type="radio" name="grammar413-1" value="16" required/> As it (had snowed / had been snowing) the whole night all the roads were blocked.
                                </p>
                                <p>
                                    17. <input type="radio" name="grammar413-1" value="17" required/> I usually (tell / am telling) the children a story before they go to bed.
                                </p>
                                <p>
                                    18. <input type="radio" name="grammar413-1" value="18" required/> The most popular film he (made / has made) so far is Ridding High.
                                </p>
                                <p>
                                    19. <input type="radio" name="grammar413-1" value="19" required/> I’m going now but (I’m seeing / I’ll see) you at the same time tomorrow.
                                </p>
                                <p>
                                    20. <input type="radio" name="grammar413-1" value="20" required/> I (have been watching / have watched) TV for hours now. I’ve had enough.
                                </p>
                            </p>
                        </div>
                        
                        <div class="clear"></div>

                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <input type="hidden" name="resposta_id" value="0">
                        <input type="hidden" name="unidade_id" value="63">
                        <input type="hidden" name="atividade_id" value="413">
                        <button type="submit" class="mini-title suave click suave">Salvar resposta</button>
                    </form>
                <div style="margin-top: 36px">
                    <figure>
                        <img src="{{ asset('assets/img/playgo/unit63/pagina-1.png') }}" alt="avistando">
                    </figure>
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

        $("#unidade63grammar413").submit(function(e){
            e.preventDefault();
            $(this).find('button').prop('disabled', true);
            var respostas = '{';
            $('#unidade63grammar413 input[type="radio"]:checked').each(function(index){
                if(($('#unidade63grammar413 input[type="radio"]:checked').length - 1) == index){
                    respostas += '"'+$(this).attr("name")+'":"'+$(this).val()+'"}';
                }else{
                    respostas += '"'+$(this).attr("name")+'":"'+$(this).val()+'",';
                }
            });
            if($('#unidade63grammar413 input[name="resposta_id"').val() != 0){
                atualizarAtividade($('#unidade63grammar413'), respostas);
            }else{
                enviarAtividade($('#unidade63grammar413'), respostas);
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
                        $('#unidade63grammar'+atividade_id+' input[name="'+chaves[j]+'"][value="'+respostas[j]+'"]').attr("checked", true);
                        $('#unidade63grammar'+atividade_id+' input[name="'+chaves[j]+'"]').val(respostas[j]);
                        $('#unidade63grammar'+atividade_id+' input[name="'+chaves[j]+'"]').attr("value", respostas[j]);
                        
                }
                    $('#unidade63grammar'+atividade_id+' input[name="resposta_id"]').val(response[0].resposta_id);
                    $('#unidade63grammar'+atividade_id+' input[name="resposta_id"]').attr("value", response[0].resposta_id);
                }
            });
        }

        function enviarAtividade(formId, respostas){
            var atividade = {
                "_token" : formId.find('input[name="_token"]').val(),
                "resposta_respostas" : respostas,
                "atividade_id" : formId.find('input[name="atividade_id"]').val(),
                "unidade_id" : formId.find('input[name="unidade_id"]').val()
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
