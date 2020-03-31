@extends('layouts.template')
@section('titulo','Unit 08 | Grammar')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
    <!-- Conteúdo principal central -->
    <div class="dashboard">
        <div id="unidade" class="box" data-apostila="apostila3" data-unidade="unidade8" data-etapa="grammar">
            <h3 class="barlow">UNIT 8 </h3>
            <h5 class="barlow">3 - GRAMAR</h5>
            <!-- <span class="play-audio">( Aperte o play )</span> -->
            <!-- <audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/Unit6/Grammar/completo.ogg') }}" type="audio/ogg">
                </audio> -->
            <!-- nao tem audio ainda -->
            <div class="clear"></div>     
            <h5 class="barlow">A – TALKING ABOUT THE PRESENT.</h5>
                <p>There are different ways to talk about the present. It also depends on the message
                you want to communicate. Pay att enti on to some possibiliti es on the table.</p>
            <table class="espacamento center-align bordered" style="margin-top:32px;">
                <tr>
                    <td><h5 class="barlow">Verb Tense</h5></td>                    
                    <td><h5 class="barlow">Explanation</h5></td>                    
                    <td><h5 class="barlow">Use</h5></td>                    
                </tr>
                <tr class="bordered center-align">
                    <td><p>Simple Present</p></td>
                    <td><p>Used to express general facts and habitual/regular action in the present.</p></td>
                    <td><p>Gleen <b>teaches</b> in many different courses nowadays.</p></td>
                </tr>                          
                <tr class="bordered center-align">
                    <td><p>Present Continuous</p></td>
                    <td><p>A progressive or temporary situation in the present.</p></td>
                    <td><p>John <b>is taking</b> a course on photoshop. He said <b>it’s being</b> awesome.</p></td>
                </tr>                          
                <tr class="bordered center-align">
                    <td><p>To be Used to</p></td>
                    <td><p>Used to express a present habit.</p></td>
                    <td><p>Carlos <b>is used</b> to many different video editing tools. He <b>is used to dealing</b> with different necessities when editing his videos. </p></td>
                </tr>                                         
            </table>
            <h5 class="barlow">EXERCISES :</h5>
            <h5 class="barlow">A -  Write sentences. Use the PRESENT SIMPLE or the PRESENT CONTINUOUS:</h5>
            <p> <b>Example:</b> (Usually she / work / at the offi ce, but this week she / work / at home.)</p>
            <p style="margin-left:10%;">Usually she works at the offi ce, but this week she’s working at home</p>
            <form id="unidade8grammar537" method="post">
                <p><b>1.</b> (You / not / eat / very much at the moment. Are you ill?)
                <input type="text" name="grammar537-1" class="inputpequeno left-align" placeholder="Responda aqui" required></p>
                <p><b>2.</b> (She / know / three words in Italian!)
                <input type="text" name="grammar537-2" class="inputpequeno left-align" placeholder="Responda aqui" required></p>
                <p><b>3.</b> (I / take / the bus to work this week, but usually I / walk)
                <input type="text" name="grammar537-3" class="inputpequeno left-align" placeholder="Responda aqui" required></p>
                <p><b>4.</b> (I / study / Japanese this year. It’s very diffi cult.)
                <input type="text" name="grammar537-4" class="inputpequeno left-align" placeholder="Responda aqui" required></p>
                <p><b>5.</b> (you / watch / the television at the moment?)
                <input type="text" name="grammar537-5" class="inputpequeno left-align" placeholder="Responda aqui" required></p>
                <p><b>6.</b> (I / not / remember / the name of the hotel.)
                <input type="text" name="grammar537-6" class="inputpequeno left-align" placeholder="Responda aqui" required></p>
                <p><b>7.</b> (She / speak / three languages.)
                <input type="text" name="grammar537-7" class="inputpequeno left-align" placeholder="Responda aqui" required></p>
                <p><b>8.</b> (The sun / shine /. It’s a beauti ful day!)
                <input type="text" name="grammar537-8" class="inputpequeno left-align" placeholder="Responda aqui" required></p>                                
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <input type="hidden" name="resposta_id" value="0">
                <input type="hidden" name="unidade_id" value="8">
                <input type="hidden" name="atividade_id" value="537">
                <div class="clear"></div>
                <button type="submit" class="mini-title suave click suave">Salvar resposta</button>
            </form>
            <h5 class="barlow">B - Make questions and answers. Use THE PRESENT CONTINUOUS:</h5>
            <form id="unidade8grammar538" method="post">
                <div class="metade esquerda">
                    <p><b>Example: </b>(she / work / in Peru / this year?)</p>
                    <p style="margin-left: 20%;">Is she working in Peru this year?</p>

                    <p style="margin-top: 16px;"><b>1.</b> (you / study / English / at the moment?)
                    <input type="text" name="grammar538-1" class="full left-align" placeholder="Responda aqui" required></p>
                    <p><b>2.</b> (they / listen / to the radio?)
                    <input type="text" name="grammar538-2" class="full left-align" placeholder="Responda aqui" required></p>
                    <p><b>3.</b> (Peter / wash / now?)
                    <input type="text" name="grammar538-3" class="full left-align" placeholder="Responda aqui" required></p>
                    <p><b>4.</b> (they / live / in Madrid / at the moment?)
                    <input type="text" name="grammar538-4" class="full left-align" placeholder="Responda aqui" required></p>
                    <p><b>5.</b> (David / sing / in a group / this year?)
                    <input type="text" name="grammar538-5" class="full left-align" placeholder="Responda aqui" required></p>
                </div>                                
                <div class="metade direita">
                    <p>(No, she / study / in Mexico)</p>
                    <p>No. She’s studying in Mexico.</p>

                    <p style="margin-top: 16px;">(Yes, I / work / hard.)
                    <input type="text" name="grammar538-6" class="full left-align" placeholder="Responda aqui" required></p> 
                    <p>(No, they / play / CDs.)
                    <input type="text" name="grammar538-7" class="full left-align" placeholder="Responda aqui" required></p>
                    <p>(Yes, he / have / a bath.)
                    <input type="text" name="grammar538-8" class="full left-align" placeholder="Responda aqui" required></p>
                    <p>(Yes, they / learn / Spanish.)
                    <input type="text" name="grammar538-9" class="full left-align" placeholder="Responda aqui" required></p>
                    <p>(No, he / work / in a restaurant.)
                    <input type="text" name="grammar538-10" class="full left-align" placeholder="Responda aqui" required></p>
                </div><div class="clear"></div>                                
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <input type="hidden" name="resposta_id" value="0">
                <input type="hidden" name="unidade_id" value="8">
                <input type="hidden" name="atividade_id" value="538">
                <div class="clear"></div>
                <button type="submit" class="mini-title suave click suave">Salvar resposta</button>
            </form>
            <h5 class="barlow">C - Read the paragraph and answer the questions:</h5>
            <p>Brian is a doctor. He looks after sick people. He usually gets up at 6.00 o’clock.
            Today he is late, it is 6.30 and he is still in bed. He usually goes to work by train but today he
            is driving to work. He arrives at work at 6.30 every morning but it is 7.30 now and he is still
            driving.</p>
            <p>It’s 12.00 o’clock now. He always has his lunch at 12.00 but today he isn’t having lunch at
            12.00, he is looking after his sick patients. It is half past seven now, Brian is watching TV. He
            usually watches TV at half past seven because his favorite program starts at half past seven.
            Brian has his dinner at 8.30 every day and he is having dinner now.</p>
            <p>It is 24.00 now Brian is going to bed. He always goes to bed at 24.00.</p>
            <form id="unidade8grammar539" method="post">
                <p><b>1.</b> What does Brian do?
                <input type="text" name="grammar539-1" class="inputpequeno left-align" placeholder="Responda aqui" required></p>
                <p><b>2.</b> What ti me does he usually get up?
                <input type="text" name="grammar539-2" class="inputpequeno left-align" placeholder="Responda aqui" required></p>
                <p><b>3.</b> How does he usually go to work?
                <input type="text" name="grammar539-3" class="inputpequeno left-align" placeholder="Responda aqui" required></p>
                <p><b>4.</b> Why is he driving to work today?
                <input type="text" name="grammar539-4" class="inputpequeno left-align" placeholder="Responda aqui" required></p>
                <p><b>5.</b> What ti me does he arrive at work every day?
                <input type="text" name="grammar539-5" class="inputpequeno left-align" placeholder="Responda aqui" required></p>
                <p><b>6.</b> When does he always have his lunch?
                <input type="text" name="grammar539-6" class="inputpequeno left-align" placeholder="Responda aqui" required></p>
                <p><b>7.</b> What is he doing at 12.00 today?
                <input type="text" name="grammar539-7" class="inputpequeno left-align" placeholder="Responda aqui" required></p>
                <p><b>8.</b> Why does he usually watch TV at 7.30?
                <input type="text" name="grammar539-8" class="inputpequeno left-align" placeholder="Responda aqui" required></p>
                <p><b>9.</b> What ti me does he go to bed?
                <input type="text" name="grammar539-9" class="inputpequeno left-align" placeholder="Responda aqui" required></p>
                <p><b>10</b>. What ti me is he going to bed now?
                <input type="text" name="grammar539-10" class="inputpequeno left-align" placeholder="Responda aqui" required></p>                
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <input type="hidden" name="resposta_id" value="0">
                <input type="hidden" name="unidade_id" value="8">
                <input type="hidden" name="atividade_id" value="539">
                <div class="clear"></div>
                <button type="submit" class="mini-title suave click suave">Salvar resposta</button>
            </form>
            <h5 class="barlow">D - Complete the sentences using USED TO or BE USED TO:</h5>
            <form id="unidade8grammar540" method="post">
                <p><b>1.</b> I <input type="text" name="grammar540-1" class="inputpequeno left-align" placeholder="Responda aqui" required>
                (live) in Finland, but now I live in France.</p>
                <p><b>2.</b> He <input type="text" name="grammar540-2" class="inputpequeno left-align" placeholder="Responda aqui" required>
                (sit) in the back of the classroom, but now he prefers to sit in the front row.</p>
                <p><b>3.</b> When I was a child, I 
                <input type="text" name="grammar540-3" class="inputpequeno left-align" placeholder="Responda aqui" required> 
                (play) games with my friends in a big field near my house after school every day.</p>
                <p><b>4.</b> It’s hard for my children to stay inside on a cold, rainy day. They 
                <input type="text" name="grammar540-4" class="inputpequeno left-align" placeholder="Responda aqui" required>
                (play) outside in the big field near our house. They play there almost every day.</p>
                <p><b>5.</b> People <input type="text" name="grammar540-5" class="inputpequeno left-align" placeholder="Responda aqui" required>
                (believe) that the world was flat.</p>
                <p><b>6.</b> Trains <input type="text" name="grammar540-6" class="inputpequeno left-align" placeholder="Responda aqui" required>
                (be) the main means of cross-continental travel. Today, most people take airplanes for long-distance travel.</p>
                <p><b>7.</b> Ms. Stanton’s job requires her to travel extensively throughout the world.
                She <input type="text" name="grammar540-7" class="inputpequeno left-align" placeholder="Responda aqui" required>
                (travel) by plane.</p>
                <p><b>8.</b> You and I are from different cultures. You
                <input type="text" name="grammar540-8" class="inputpequeno left-align" placeholder="Responda aqui" required>
                (have) fish for breakfast. I <input type="text" name="grammar540-9" class="inputpequeno left-align" placeholder="Responda aqui" required>
                (have) cheese and bread for breakfast.</p>                                
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <input type="hidden" name="resposta_id" value="0">
                <input type="hidden" name="unidade_id" value="8">
                <input type="hidden" name="atividade_id" value="540">
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

    
    $("#unidade8grammar537").submit(function(e){
            e.preventDefault();
            $(this).find('button').prop('disabled', true);
            var respostas = '{';
            $('#unidade8grammar537 input[type="text"]').each(function(index){
                if(($('#unidade8grammar537 input[type="text"]').length - 1) == index){
                    respostas += '"'+$(this).attr("name")+'":"'+$(this).val()+'"}';
                }else{
                    respostas += '"'+$(this).attr("name")+'":"'+$(this).val()+'",';
                }
            });
            if($('#unidade8grammar537 input[name="resposta_id"').val() != 0){
                atualizarAtividade($('#unidade8grammar537'), respostas);
            }else{
                enviarAtividade($('#unidade8grammar537'), respostas);
            }
        });
    $("#unidade8grammar538").submit(function(e){
            e.preventDefault();
            $(this).find('button').prop('disabled', true);
            var respostas = '{';
            $('#unidade8grammar538 input[type="text"]').each(function(index){
                if(($('#unidade8grammar538 input[type="text"]').length - 1) == index){
                    respostas += '"'+$(this).attr("name")+'":"'+$(this).val()+'"}';
                }else{
                    respostas += '"'+$(this).attr("name")+'":"'+$(this).val()+'",';
                }
            });
            if($('#unidade8grammar538 input[name="resposta_id"').val() != 0){
                atualizarAtividade($('#unidade8grammar538'), respostas);
            }else{
                enviarAtividade($('#unidade8grammar538'), respostas);
            }
        });
    $("#unidade8grammar539").submit(function(e){
            e.preventDefault();
            $(this).find('button').prop('disabled', true);
            var respostas = '{';
            $('#unidade8grammar539 input[type="text"]').each(function(index){
                if(($('#unidade8grammar539 input[type="text"]').length - 1) == index){
                    respostas += '"'+$(this).attr("name")+'":"'+$(this).val()+'"}';
                }else{
                    respostas += '"'+$(this).attr("name")+'":"'+$(this).val()+'",';
                }
            });
            if($('#unidade8grammar539 input[name="resposta_id"').val() != 0){
                atualizarAtividade($('#unidade8grammar539'), respostas);
            }else{
                enviarAtividade($('#unidade8grammar539'), respostas);
            }
        });
    $("#unidade8grammar540").submit(function(e){
            e.preventDefault();
            $(this).find('button').prop('disabled', true);
            var respostas = '{';
            $('#unidade8grammar540 input[type="text"]').each(function(index){
                if(($('#unidade8grammar540 input[type="text"]').length - 1) == index){
                    respostas += '"'+$(this).attr("name")+'":"'+$(this).val()+'"}';
                }else{
                    respostas += '"'+$(this).attr("name")+'":"'+$(this).val()+'",';
                }
            });
            if($('#unidade8grammar540 input[name="resposta_id"').val() != 0){
                atualizarAtividade($('#unidade8grammar540'), respostas);
            }else{
                enviarAtividade($('#unidade8grammar540'), respostas);
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
                    $('#unidade8grammar' + atividade_id + ' input[name="' + chaves[j] + '"][value="' + respostas[j] + '"]').attr("checked", true);
                    $('#unidade8grammar' + atividade_id + ' textarea[name="' + chaves[j] + '"]').val(respostas[j]);
                    $('#unidade8grammar' + atividade_id + ' textarea[name="' + chaves[j] + '"]').attr("value", respostas[j]);
                    $('#unidade8grammar' + atividade_id + ' input[name="' + chaves[j] + '"]').val(respostas[j]);
                    $('#unidade8grammar' + atividade_id + ' input[name="' + chaves[j] + '"]').attr("value", respostas[j]);

                }
                $('#unidade8grammar' + atividade_id + ' input[name="resposta_id"]').val(response[0].resposta_id);
                $('#unidade8grammar' + atividade_id + ' input[name="resposta_id"]').attr("value", response[0].resposta_id);
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