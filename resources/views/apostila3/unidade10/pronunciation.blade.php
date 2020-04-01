@extends('layouts.template')
@section('titulo','Unit 10 | Pronunciation')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
    <!-- Conteúdo principal central -->
    <div class="dashboard">
        <div id="unidade" class="box" data-apostila="apostila3" data-unidade="unidade10" data-etapa="pronunciation">
            <h3 class="barlow">UNIT 10</h3>
            <h5 class="barlow">4 - PRONUNCIATION</h5>
            <span class="play-audio">( Aperte o play )</span>
            <audio controls="" controlslist="nodownload" class="suave">
                <source src="{{ asset('assets/audio/apostila2/UNIT 29/3. PRONUNCIATION/PRONUNCIATION.ogg') }}" type="audio/ogg">
            </audio>
            <div class="clear"></div>
            <h5 class="barlow">A – Homophones 10</h5>
            <p>Observe the list of homophones below and try to contextualize them,</p>
            <table class="espacamento center-align bordered" style="margin-top:32px;">
                <tr>
                    <td><h5 class="barlow">hi</h5></td>                    
                    <td><h5 class="barlow">high</h5></td>                              
                    <td><h5 class="barlow">hole</h5></td>                    
                    <td><h5 class="barlow">Whole</h5></td>                              
                </tr>
                <tr>
                    <td><h5 class="barlow">Our</h5></td>                    
                    <td><h5 class="barlow">Hour</h5></td>                              
                    <td><h5 class="barlow">Eye</h5></td>                    
                    <td><h5 class="barlow">I</h5></td>                              
                </tr>
                <tr>
                    <td><h5 class="barlow">Knew</h5></td>                    
                    <td><h5 class="barlow">New</h5></td>                              
                    <td><h5 class="barlow">Know</h5></td>                    
                    <td><h5 class="barlow">No</h5></td>                              
                </tr>
                <tr>
                    <td><h5 class="barlow">Not</h5></td>                    
                    <td><h5 class="barlow">Knot</h5></td>                              
                    <td><h5 class="barlow">Knight</h5></td>                    
                    <td><h5 class="barlow">night</h5></td>                              
                </tr>
                <tr>
                    <td><h5 class="barlow">male</h5></td>                    
                    <td><h5 class="barlow">mail</h5></td>                              
                    <td><h5 class="barlow">meet</h5></td>                    
                    <td><h5 class="barlow">meat</h5></td>                              
                </tr>
                <tr>
                    <td><h5 class="barlow">Pear</h5></td>                    
                    <td><h5 class="barlow">Pair</h5></td>                              
                    <td><h5 class="barlow">Piece</h5></td>                    
                    <td><h5 class="barlow">Peace</h5></td>                              
                </tr>
                <tr>
                    <td><h5 class="barlow">You're</h5></td>                    
                    <td><h5 class="barlow">Your</h5></td>                              
                    <td><h5 class="barlow">Won</h5></td>                    
                    <td><h5 class="barlow">One</h5></td>                              
                </tr>
                <tr>
                    <td><h5 class="barlow">Where</h5></td>                    
                    <td><h5 class="barlow">Wear</h5></td>                              
                    <td><h5 class="barlow">See</h5></td>                    
                    <td><h5 class="barlow">Sea</h5></td>                              
                </tr>                                                         
            </table>
            <p>For more examples of homophones, check on the net. There are plenty of useful lists to help
            you improve your pronunciation.</p>
        </div>
    </div>
</main>
<script>
    activeMenu();
    $("form").each(function() {
        var atividade_id = $(this).find('input[name="atividade_id"]').val();
        checkAtividade(atividade_id);
    });

    $("#unidade9pronunciation549").submit(function(e) {
        e.preventDefault();
        $(this).find('button').prop('disabled', true);
        var respostas = '{';
        $('#unidade9pronunciation549 input[type="text"]').each(function(index) {
            if (($('#unidade9pronunciation549 input[type="text"]').length - 1) == index) {
                respostas += '"' + $(this).attr("name") + '":"' + $(this).val() + '"}';
            } else {
                respostas += '"' + $(this).attr("name") + '":"' + $(this).val() + '",';
            }
        });
        if ($('#unidade9pronunciation549 input[name="resposta_id"').val() != 0) {
            atualizarAtividade($('#unidade9pronunciation549'), respostas);
        } else {
            enviarAtividade($('#unidade9pronunciation549'), respostas);
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
                    $('#unidade9pronunciation' + atividade_id + ' input[name="' + chaves[j] + '"]').val(respostas[j]);
                    $('#unidade9pronunciation' + atividade_id + ' input[name="' + chaves[j] + '"]').attr("value", respostas[j]);
                }
                $('#unidade9pronunciation' + atividade_id + ' input[name="resposta_id"]').val(response[0].resposta_id);
                $('#unidade9pronunciation' + atividade_id + ' input[name="resposta_id"]').attr("value", response[0].resposta_id);
            }
        });
    }


    function enviarAtividade(formId, respostas) {
        var resposta = {
            "_token": formId.find('input[name="_token"]').val(),
            "resposta_respostas": respostas,
            "atividade_id": formId.find('input[name="atividade_id"]').val(),
            "unidade_id": formId.find('input[name="unidade_id"]').val()
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