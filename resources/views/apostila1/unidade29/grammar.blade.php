@extends('layouts.template')
@section('titulo','UNIMUGI | Home')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-unidade="unidade29" data-etapa="grammar">
				<h3 class="barlow">UNIT 29 - KEY FRAME</h3>
				<h5 class="barlow">3 - GRAMAR</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/Unit29/Grammar/completo.ogg') }}" type="audio/ogg">
                </audio>
                <div class="clear"></div>
                <div style="margin-top: 16px">
                    <p><b>Possessive Adjectives X Possessive Pronouns</b></p>
                    <ul>
                        <li><p>Possessive Adjectives: Used Before Nouns.</p></li>
                        <li><p>Possessive Pronoun: Used To Express Possession While Substituting The Noun/ Or At The End Of Sentences To Give Enphasis To The Possession.</p></li>
                    </ul>
                    <div class="umterco" >
                        <p><b>POSSESSIVE ADJECTIVES</b></p>
                        <div class="metade esquerda">
                            <ul>
                                <p>I</p>
                                <p>YOU</p>
                                <p>WE</p>
                                <p>THEY</p>
                                <p>HE</p>
                                <p>SHE</p>
                                <p>IT</p>
                            </ul>
                        </div>
                        <div class="metade direita">
                            <ul>
                                <p>MY</p>
                                <p>YOUR</p>
                                <p>OUR</p>
                                <p>THEIR</p>
                                <p>HIS</p>
                                <p>HER</p>
                                <p>ITS</p>
                            </ul>
                        </div>
                    </div>
                    <div class="umterco">
                    <p><b>POSSESSIVE PRONOUNS</b></p>
                        <div class="metade direita">
                            <ul>
                                <p>MINE</p>
                                <p>YOURS</p>
                                <p>OURS</p>
                                <p>THEIRS</p>
                                <p>HIS</p>
                                <p>HERS</p>
                                <p>X</p>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="clear"></div>
                
                <h5 class="barlow" style="margin-top: 16px">A - Complete The Sentences Using Possessive Adjectives Or Possessive Pronouns.</h5>
				<form id="unidade29grammar73" method="post">
                    <p>1. These Are Not <input type="text" name="grammar73-1" required/>  (My/Mine) Books, <input type="text" name="grammar73-2" required/> (My/Mine) Are Over There.</p>
                            <p>2. That Pen Is <input type="text" name="grammar73-3" required/> (My/Mine).</p>
                            <p>3. Is This Car <input type="text" name="grammar73-4" required/>  (Your/Yours)?</p>
                            <p>4. Where Are <input type="text" name="grammar73-5" required/> (My/Mine) Car Keys?</p>
                            <p>5. Are They <input type="text" name="grammar73-6" required/> (Her/Hers) Friends?</p>
                            <p>6. This Money Isn’t <input type="text" name="grammar73-7" required/> (My/Mine), It’s <input type="text" name="grammar73-8" required/> (Their/Theirs).</p>
                            <p>7. She Needs <input type="text" name="grammar73-9" required/> (Your/Yours) Help.</p>
                            <p>8. That Is Not <input type="text" name="grammar73-10" required/> (Our/Ours) Because <input type="text" name="grammar73-11" required/>  (Our/Ours) Car Is In The Garage.</p>
                    </p>
                    
                    <div class="clear"></div>
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <input type="hidden" name="resposta_id" value="0">
                    <input type="hidden" name="unidade_id" value="29">
                    <input type="hidden" name="atividade_id" value="73">
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

        $("#unidade29grammar73").submit(function(e){
            e.preventDefault();
            $(this).find('button').prop('disabled', true);
            var respostas = '{';
            $('#unidade29grammar73 input[type="text"]').each(function(index){
                if(($('#unidade29grammar73 input[type="text"]').length - 1) == index){
                    respostas += '"'+$(this).attr("name")+'":"'+$(this).val()+'"}';
                }else{
                    respostas += '"'+$(this).attr("name")+'":"'+$(this).val()+'",';
                }
            });
            if($('#unidade29grammar73 input[name="resposta_id"').val() != 0){
                atualizarAtividade($('#unidade29grammar73'), respostas);
            }else{
                enviarAtividade($('#unidade29grammar73'), respostas);
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
                        $('#unidade29grammar'+atividade_id+' input[name="'+chaves[j]+'"]').val(respostas[j]);
                        $('#unidade29grammar'+atividade_id+' input[name="'+chaves[j]+'"]').attr("value", respostas[j]);
                    }
                    $('#unidade29grammar'+atividade_id+' input[name="resposta_id"]').val(response[0].resposta_id);
                    $('#unidade29grammar'+atividade_id+' input[name="resposta_id"]').attr("value", response[0].resposta_id);
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
