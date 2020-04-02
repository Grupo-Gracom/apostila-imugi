@extends('layouts.template')
@section('titulo','Unit 14 | Grammar')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
    <!-- Conteúdo principal central -->
    <div class="dashboard">
        <div id="unidade" class="box" data-apostila="apostila3" data-unidade="unidade14" data-etapa="grammar">
            <h3 class="barlow">UNIT 14 </h3>
            <h5 class="barlow">3 - GRAMAR</h5>
            <!-- <span class="play-audio">( Aperte o play )</span> -->
            <!-- <audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/Unit6/Grammar/completo.ogg') }}" type="audio/ogg">
                </audio> -->
            <!-- nao tem audio ainda -->
            <div class="clear"></div>     
            <h5 class="barlow">A – PAIRED CONJUNCTIONS – REVIEW</h5>
            <p>We use paired conjunctions to : </p>                            
            <table class="espacamento center-align bordered" style="margin-top:32px;">
                <tr>
                    <td><h5 class="barlow">Function</h5></td>                    
                    <td><h5 class="barlow">Paired conjunctions</h5></td>
                    <td><h5 class="barlow">Examples</h5></td>
                </tr>
                <tr class="bordered center-align">
                    <td><p>Give options</p></td>
                    <td><p><B>Either … or</B></p></td>
                    <td>
                        <P>• <b>Either</b> Wolverine <b>or</b> Cyclop have different powers. They are considered mutants.</P>
                        <P>• We love <b>either</b> DC movies <b>or</b> marvel movies.</P>                        
                    </td>
                </tr>                          
                <tr class="bordered center-align">
                    <td><p>To deny both options</p></td>
                    <td><p><b>Neither … nor</b></p></td>
                    <td>
                        <p>• <b>Neither</b> Spider man <b>nor</b> Ant man can fly.</p>
                        <p>• I like <b>neither</b> terror movies <b>nor</b> comedy ones.</p>
                    </td>
                </tr>                          
                <tr class="bordered center-align">
                    <td><p>Add information</p></td>
                    <td><p><b>Not only… but also /both…and</b></p></td>
                    <td>
                        <p>• <b>Not only</b> Spider man <b>but also</b> Ant man actin Civil war</p>
                        <p>• <b>Both</b> Spider man <b>and</b> Vision are killed by Thanos in Infinity War.</p>
                    </td>
                </tr>                                                        
            </table>
            <p><b>VERB AGREEMENT.</b></p>
            <div class="metade esquerda">
                <p>Either…or/Neither..nor/ not only…but also Both…and</p>
            </div>
            <div class="metade direita">
                <p>- The verb agrees with the last subject</p>
                <p>- The verb agrees with both subjects.</p>
            </div>

            <h5 class="barlow">A -  Complete the sentences with WHO / WHICH / WHERE / WHOSE:</h5>            
            <form id="unidade14grammar575" method="post">
                <p>1. The hotel wasn’t clean. And it wasn’t comfortable.
                The hotel was 
                <input type="text" name="grammar575-1" class="inputpequeno left-align" placeholder="Responda aqui" required>
                2. It was a very boring movie. It was very long too.
                The movie was 
                <input type="text" name="grammar575-2" class="inputpequeno left-align" placeholder="Responda aqui" required>
                3. Is that man’s name Richard? Or is it Robert? It’s one of the two.
                That man’s name 
                <input type="text" name="grammar575-3" class="inputpequeno left-align" placeholder="Responda aqui" required>
                4. I don’t have the time to take a vacation. And I don’t have the money.
                I have
                <input type="text" name="grammar575-4" class="inputpequeno left-align" placeholder="Responda aqui" required>
                5. We can leave today or we can leave tomorrow- whichever you prefer.
                We
                <input type="text" name="grammar575-5" class="inputpequeno left-align" placeholder="Responda aqui" required>
                6. He gave up his job because he needed a change. Also because the pay was low.
                He gave up his job both
                <input type="text" name="grammar575-6" class="inputpequeno left-align" placeholder="Responda aqui" required>
                7. Laura doesn’t smoke. And she doesn’t eat meat.
                <input type="text" name="grammar575-7" class="inputpequeno left-align" placeholder="Responda aqui" required>
                8. The front of the house needs painting. The back needs painting too.
                <input type="text" name="grammar575-8" class="inputpequeno left-align" placeholder="Responda aqui" required></p>                                                                      
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <input type="hidden" name="resposta_id" value="0">
                <input type="hidden" name="unidade_id" value="14">
                <input type="hidden" name="atividade_id" value="575">
                <div class="clear"></div>
                <button type="submit" class="mini-title suave click suave">Salvar resposta</button>
            </form>
            <h5 class="barlow">B -  In groups, think about do’s and don’ts you have to pay attention to, before starting a
            new Youtube channel, for example. Make sure you use the paired conjunctions in your
            production. Be ready to share your group’s ideas with the whole class.</h5>
                                    
            <form id="unidade14grammar576" method="post">
                <textarea name="grammar576-1" class="metade left-align" placeholder="Responda aqui" required></textarea>                                            
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <input type="hidden" name="resposta_id" value="0">
                <input type="hidden" name="unidade_id" value="14">
                <input type="hidden" name="atividade_id" value="576">
                <div class="clear"></div>
                <button type="submit" class="mini-title suave click suave">Salvar resposta</button>
            </form>                        
        </div>
    </div>
</main>
<script>
    activeMenu();

    $("form").each(function() {
        var atividade_id = $(this).find('input[name="atividade_id"]').val();
        checkAtividade(atividade_id);
    });
    
    

        $("#unidade14grammar575").submit(function(e){
            e.preventDefault();
            $(this).find('button').prop('disabled', true);
            var respostas = '{';
            $('#unidade14grammar575 input[type="text"]').each(function(index){
                if(($('#unidade14grammar575 input[type="text"]').length - 1) == index){
                    respostas += '"'+$(this).attr("name")+'":"'+$(this).val()+'"}';
                }else{
                    respostas += '"'+$(this).attr("name")+'":"'+$(this).val()+'",';
                }
            });
            if($('#unidade14grammar575 input[name="resposta_id"').val() != 0){
                atualizarAtividade($('#unidade14grammar575'), respostas);
            }else{
                enviarAtividade($('#unidade14grammar575'), respostas);
            }
        });

        $("#unidade14grammar576").submit(function(e){
            e.preventDefault();
            $(this).find('button').prop('disabled', true);
            var respostas = '{"'+$('#unidade14grammar576 textarea').attr("name")+'":"'+$('#unidade14grammar576 textarea').val()+'"}';
            if($('#unidade14grammar576 input[name="resposta_id"').val() != 0){
                atualizarAtividade($('#unidade14grammar576'), respostas);
            }else{
                enviarAtividade($('#unidade14grammar576'), respostas);
            }
        });

    function checkAtividade(atividade_id) {
        request = $.ajax({
            url: window.location.pathname + '/respostasCheck/' + atividade_id,
            type: 'get',
            error: function() {
                console.log("Erro de retorno de dados.");
            }
        });
        request.done(function(response) {
            if (response == 0) {
                console.log("não veio nada");
            } else {
                var objeto = JSON.parse(response[0].resposta_respostas);
                var chaves = Object.keys(objeto);
                var respostas = Object.values(objeto);
                for (j = 0; j < respostas.length; j++) {
                    $('#unidade14grammar' + atividade_id + ' input[name="' + chaves[j] + '"][value="' + respostas[j] + '"]').attr("checked", true);
                    $('#unidade14grammar' + atividade_id + ' textarea[name="' + chaves[j] + '"]').val(respostas[j]);
                    $('#unidade14grammar' + atividade_id + ' textarea[name="' + chaves[j] + '"]').attr("value", respostas[j]);
                    $('#unidade14grammar' + atividade_id + ' input[name="' + chaves[j] + '"]').val(respostas[j]);
                    $('#unidade14grammar' + atividade_id + ' input[name="' + chaves[j] + '"]').attr("value", respostas[j]);

                }
                $('#unidade14grammar' + atividade_id + ' input[name="resposta_id"]').val(response[0].resposta_id);
                $('#unidade14grammar' + atividade_id + ' input[name="resposta_id"]').attr("value", response[0].resposta_id);
            }
        });
    }

    function enviarAtividade(formId, respostas) {
        var atividade = {
            "_token": formId.find('input[name="_token"]').val(),
            "resposta_respostas": respostas,
            "atividade_id": formId.find('input[name="atividade_id"]').val(),
            "unidade_id": formId.find('input[name="unidade_id"]').val()
        };
        request = $.ajax({
            url: window.location.pathname + '/respostas',
            data: atividade,
            type: 'post',
            error: function() {
                console.log("Erro de envio.");
            }
        });
        request.done(function(response) {
            if (response == "1") {
                alert("Respostas salvas");
                window.location.reload();
            } else if (response == 2) {
                alert("Respostas atualizadas");
                window.location.reload();
            }
        });
    }

    function atualizarAtividade(formId, respostas) {
        var resposta = {
            "_token": formId.find('input[name="_token"]').val(),
            "resposta_id": formId.find('input[name="resposta_id"]').val(),
            "resposta_respostas": respostas
        };
        request = $.ajax({
            url: window.location.pathname + '/respostas',
            data: resposta,
            type: 'post',
            error: function() {
                console.log("Erro de envio.");
            }
        });
        request.done(function(response) {
            if (response == "1") {
                alert("Respostas salvas");
                window.location.reload();
            } else if (response == 2) {
                alert("Respostas atualizadas");
                window.location.reload();
            }
        });
    }
</script>
@endsection