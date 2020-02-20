@extends('layouts.template')
@section('titulo','Unit 27 | Grammar')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila1" data-unidade="unidade27" data-etapa="grammar">
				<h3 class="barlow">UNIT 27 - PROFESSOR VICTOR</h3>
				<h5 class="barlow">3 - GRAMAR</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/Unit27/Grammar/completo.ogg') }}" type="audio/ogg">
                </audio>
                <div class="clear"></div>
                <div style="margin-top: 16px">
                <p><b>Countables And Uncountables</b></p>
                <p>Some Objects Can Be Counted While Others Cannot. We Use “Many” To Refer To Countable Nouns And “Much” For Uncountable Nouns.</p>
                    <p>
                        <div class="umterco">
                            <ul>
                                <p><b>Countable Nouns</b></p>
                                <p>Cups</p>
                                <p>Hours</p>
                                <p>Books</p>
                                <p>Chairs</p>
                            </ul>
                            </div>
                        <div class="umterco">
                            <ul>
                                <p><b>Uncountable Nouns</b></p>
                                <p>Water</p>
                                <p>Time</p>
                                <p>Information</p>
                                <p>Furniture</p>
                            </ul>
                        </div>
                    </p>
                </div>
                
                <div class="clear"></div>
                <h5 class="barlow" style="margin-top: 16px">A - Complete The Sentences Using Much Or Many.</h5>
				<form id="unidade27grammar69" method="post">
                    <p>1. There Is <input type="text" name="grammar69-1" required/> Food On The Plate.</p>
                            <p>2. We Have <input type="text" name="grammar69-2" required/> Information About The Program.</p>
                            <p>3. I Work For <input type="text" name="grammar69-3" required/>  Hours A Day.</p>
                            <p>4. You Need To Drink <input type="text" name="grammar69-4" required/> Glasses Of Water Every Day.</p>
                            <p>5. He Has <input type="text" name="grammar69-5" required/> Work To Don.</p>
                    </p>
                    
                    <div class="clear"></div>
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <input type="hidden" name="resposta_id" value="0">
                    <input type="hidden" name="unidade_id" value="27">
                    <input type="hidden" name="atividade_id" value="69">
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

        $("#unidade27grammar69").submit(function(e){
            e.preventDefault();
            $(this).find('button').prop('disabled', true);
            var respostas = '{';
            $('#unidade27grammar69 input[type="text"]').each(function(index){
                if(($('#unidade27grammar69 input[type="text"]').length - 1) == index){
                    respostas += '"'+$(this).attr("name")+'":"'+$(this).val()+'"}';
                }else{
                    respostas += '"'+$(this).attr("name")+'":"'+$(this).val()+'",';
                }
            });
            if($('#unidade27grammar69 input[name="resposta_id"').val() != 0){
                atualizarAtividade($('#unidade27grammar69'), respostas);
            }else{
                enviarAtividade($('#unidade27grammar69'), respostas);
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
                        $('#unidade27grammar'+atividade_id+' input[name="'+chaves[j]+'"]').val(respostas[j]);
                        $('#unidade27grammar'+atividade_id+' input[name="'+chaves[j]+'"]').attr("value", respostas[j]);
                    }
                    $('#unidade27grammar'+atividade_id+' input[name="resposta_id"]').val(response[0].resposta_id);
                    $('#unidade27grammar'+atividade_id+' input[name="resposta_id"]').attr("value", response[0].resposta_id);
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
