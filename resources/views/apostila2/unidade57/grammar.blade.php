@extends('layouts.template')
@section('titulo','Unit 57 | Grammar')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade57" data-etapa="grammar">
				<h3 class="barlow">UNIT 57 </h3>
				<h5 class="barlow">3 - GRAMAR</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/Unit57/Grammar/completo.ogg') }}" type="audio/ogg">
                </audio>
                <div class="clear"></div>
                <div style="margin-top: 16px">
                    <h5 class="barlow">A - PAST PERFECT CONTINUOUS</h5>
                    <p>
                        We use the Past Perfect Continuous to show that something started in the past and continued up until another time in the past. “For five minutes” and “for two weeks” are both
                        durations which can be used with the Past Perfect Continuous. Notice that this is related to
                        the Present Perfect Continuous; however, the duration does not continue until now, it stops
                        before something else in the past. 
                    </p>
                    <div style="margin-top: 36px">
                        <figure>
                            <img src="{{ asset('assets/img/playgo/unit56/pagina-1.png') }}" alt="crianças">
                        </figure>
                    </div>
                    <!-- (↓↓ OS MESMOS FORM'S ABAIXO ESTÁ SE REPETINDO NA UNIDADE ANTERIOR ↓↓) -->

                    <!-- <h5 class="barlow" style="margin-top: 16px">EXERCISES:</h5>
                    <h5 class="barlow">1 - Fill in the following sentences by using PAST PERFECT CONTINUOUS TENSE:</h5>
                    <form id="unidade56grammar380" style="margin-top:32px" method="post">
                        <div class="metade">
                            <p>
                                <p>1. We <input type="text" name="grammar380-1"  placeholder="Responda aqui" required/> (play) football for half an hour when it started to rain.</p>
                                <p>2. I <input type="text" name="grammar380-2"  placeholder="Responda aqui" required/> (study) English for a short time when the electricity went off.</p>
                                <p>3. She <input type="text" name="grammar380-3"  placeholder="Responda aqui" required/> (do) her homework before you came in.</p>
                                <p>4. His knees and hands were very dirty. He <input type="text" name="grammar380-4"  placeholder="Responda aqui" required/> (crawl) in the garden.</p>
                                <p>5. <input type="text" name="grammar380-5"  placeholder="Responda aqui" required/> (drive) the car for five years when I sold it.</p>
                                <p>6. We were very tired. We <input type="text" name="grammar380-6"  placeholder="Responda aqui" required/> (travel) for about sixteen hours.</p>
                                <p>7. They were out of breath. They <input type="text" name="grammar380-7"  placeholder="Responda aqui" required/> (run) for a long time.</p>
                                <p>8. He <input type="text" name="grammar380-8"  placeholder="Responda aqui" required/> (live) in London for ten years when he had an accident.</p>
                                <p>9. He was tired because he <input type="text" name="grammar380-9"  placeholder="Responda aqui" required/> (write) letters all morning.</p>
                                <p>10.He <input type="text" name="grammar380-10"  placeholder="Responda aqui" required/> (repair) the radio for an hour when you arrived.</p>
                            </p>
                        </div>

                        <div class="clear"></div>

                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <input type="hidden" name="resposta_id" value="0">
                        <input type="hidden" name="unidade_id" value="56">
                        <input type="hidden" name="atividade_id" value="380">
                        <button type="submit" class="mini-title suave click suave">Salvar resposta</button>
                    </form>
                </div>
                <h5 class="barlow">2 - Fill in the following sentences by using PAST PERFECT CONTINUOUS TENSE:</h5>
                <form id="unidade56grammar381" style="margin-top:32px" method="post">
                    <div class="metade">
                        <p>
                            <p>1. I was tired because I <input type="text" name="grammar381-1"  placeholder="Responda aqui" required/> (type) for a long time.</p>
                            <p>2. Her boss was very angry with her because she <input type="text" name="grammar381-2"  placeholder="Responda aqui" required/> (come) to work very late.</p>
                            <p>3. I didn’t know about the earthquake because I <input type="text" name="grammar381-3"  placeholder="Responda aqui" required/> (not / watch) television.</p>
                            <p>4. She was too fat because she <input type="text" name="grammar381-4"  placeholder="Responda aqui" required/> (not / keep) her doctor’s advice.</p>
                            <p>5. I took my car to the garage because the brakes <input type="text" name="grammar381-5"  placeholder="Responda aqui" required/> (not / work).</p>
                            <p>6. She had to go to the dentist because she <input type="text" name="grammar381-6"  placeholder="Responda aqui" required/> (not / clean) her teeth.
                            <p>7. He got bad marks because he <input type="text" name="grammar381-7"  placeholder="Responda aqui" required/> (not / study) hard.
                            <p>8. She wasn’t at home. She <input type="text" name="grammar381-8"  placeholder="Responda aqui" required/> (go) out with her boyfriend.
                            <p>9. I thought I <input type="text" name="grammar381-9"  placeholder="Responda aqui" required/> (behave) like an idiot.
                            <p>10. He <input type="text" name="grammar381-10"  placeholder="Responda aqui" required/> (study) English) very hard for the last few days.
                        </p>
                    </div>

                    <div class="clear"></div>

                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <input type="hidden" name="resposta_id" value="0">
                    <input type="hidden" name="unidade_id" value="56">
                    <input type="hidden" name="atividade_id" value="381">
                    <button type="submit" class="mini-title suave click suave">Salvar resposta</button>
                </form>
                <div style="margin-top: 36px">
                    <figure>
                        <img src="{{ asset('assets/img/playgo/unit57/pagina-1.png') }}" alt="espera hospital">
                    </figure>
                </div>

                <h5 class="barlow metade" style="margin-top: 36px">
                    3 - Before you started your course, certainly you were involved in some activities. What
                    had you been doing before you started the course.
                </h5>    
                <form id="unidade56grammar382" method="post">
                    <textarea name="grammar382-1" class="metade left-align" placeholder="Responda aqui" required></textarea>

                    <div class="clear"></div>

                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <input type="hidden" name="resposta_id" value="0">
                    <input type="hidden" name="unidade_id" value="56">
                    <input type="hidden" name="atividade_id" value="382">
                    <button type="submit" class="mini-title suave click suave">Salvar resposta</button>
                </form> -->
                
			</div>
		</div>
    </main>
    <script>
        activeMenu();

        $("form").each(function(){
            var atividade_id = $(this).find('input[name="atividade_id"]').val();
            checkAtividade(atividade_id);
        });

        $("#unidade57grammar385").submit(function(e){
            e.preventDefault();
            $(this).find('button').prop('disabled', true);
            var respostas = '{';
            $('#unidade57grammar385 input[type="text"]').each(function(index){
                if(($('#unidade57grammar385 input[type="text"]').length - 1) == index){
                    respostas += '"'+$(this).attr("name")+'":"'+$(this).val()+'"}';
                }else{
                    respostas += '"'+$(this).attr("name")+'":"'+$(this).val()+'",';
                }
            });
            if($('#unidade57grammar385 input[name="resposta_id"').val() != 0){
                atualizarAtividade($('#unidade57grammar385'), respostas);
            }else{
                enviarAtividade($('#unidade57grammar385'), respostas);
            }
        });

        $("#unidade57grammar386").submit(function(e){
            e.preventDefault();
            $(this).find('button').prop('disabled', true);
            var respostas = '{';
            $('#unidade57grammar386 input[type="text"]').each(function(index){
                if(($('#unidade57grammar386 input[type="text"]').length - 1) == index){
                    respostas += '"'+$(this).attr("name")+'":"'+$(this).val()+'"}';
                }else{
                    respostas += '"'+$(this).attr("name")+'":"'+$(this).val()+'",';
                }
            });
            if($('#unidade57grammar386 input[name="resposta_id"').val() != 0){
                atualizarAtividade($('#unidade57grammar386'), respostas);
            }else{
                enviarAtividade($('#unidade57grammar386'), respostas);
            }
        });

        $("#unidade57grammar387").submit(function(e){
            e.preventDefault();
            $(this).find('button').prop('disabled', true);
            var respostas = '{"'+$('#unidade57grammar387 textarea').attr("name")+'":"'+$('#unidade57grammar387 textarea').val()+'"}';
            if($('#unidade57grammar387 input[name="resposta_id"').val() != 0){
                atualizarAtividade($('#unidade57grammar387'), respostas);
            }else{
                enviarAtividade($('#unidade57grammar387'), respostas);
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
                        $('#unidade57grammar'+atividade_id+' textarea[name="'+chaves[j]+'"]').val(respostas[j]);
                        $('#unidade57grammar'+atividade_id+' textarea[name="'+chaves[j]+'"]').attr("value", respostas[j]);
                        $('#unidade57grammar'+atividade_id+' input[name="'+chaves[j]+'"]').val(respostas[j]);
                        $('#unidade57grammar'+atividade_id+' input[name="'+chaves[j]+'"]').attr("value", respostas[j]);
                    }
                    $('#unidade57grammar'+atividade_id+' input[name="resposta_id"]').val(response[0].resposta_id);
                    $('#unidade57grammar'+atividade_id+' input[name="resposta_id"]').attr("value", response[0].resposta_id);
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
