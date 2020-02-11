@extends('layouts.template')
@section('titulo','UNIMUGI | Home')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-unidade="unidade3" data-etapa="grammar">
				<h3 class="barlow">UNIT 03 - PHOTOGRAPHY AND PHOTOSHOP</h3>
				<h5 class="barlow">3 - GRAMMAR</h5>
				<!-- <span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/unit3/grammar/Page15Grammar.ogg') }}" type="audio/ogg">
                </audio>
                <div class="clear"></div> -->
                
                <p>I am a teacher <b>and</b> a photographer. (addition)</p>
                <p>My hobby is wildlife photography, <b>but</b> my profession is fashion photography. (contrast)</p>
                <p>My work is published in magazines and websites, so I need the photos to be perfect. (conclusion)</p>
                

				<h5 class="barlow">A - Complete the sentences with the appropriate conjuncti on. Use and, but or so.</h5>
				<form id="" method="post">
                    <p>1. Sophia works with teaching <input type="text" name="" required> photography.</p>
                    <p>2. My photos are published in magazines, <input type="text" name="" required> they need to be perfect.</p>
                    <p>3. The teacher’s name is Sophia Jones, <input type="text" name="" required> she likes to be called by her fi rst name, Sophia.</p>
                    <p>4. Sophia’s work is published in websites <input type="text" name="" required> magazines.</p>
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <input type="hidden" name="resposta_id" value="0">
                    <input type="hidden" name="unidade_id" value="1">
                    <input type="hidden" name="atividade_id" value="1">
                    <button type="submit" class="mini-title suave click suave">Salvar resposta</button>
                </form>
                <h5 class="barlow">B - Correct the conjuncti ons in the sentences, if necessary.</h5>
				<form id="" method="post">
                    <p>1. I work with photography <input type="text" name="" value="but" required> design.</p>
                    <p>2. Photoshop off ers complete <input type="text" name="" value="so" required> advanced editi ng tools.</p>
                    <p>3. Klaus <input type="text" name="" value="and" required> Katia are Sophia’s students.</p>
                    <p>4. I am a photographer, <input type="text" name="" value="but" required> I need Photoshop.</p>
                    <p>5. Sophia is from the United States, <input type="text" name="" value="and" required> she lives in Brazil.</p>
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
                    var respostas = Object.keys(objeto).map(i => JSON.parse(objeto[String(i)]));
                    console.log(respostas);
                    for(i = 0; i < respostas.length; i++){
                        var next = i + 1;
                        $('#unidade1grammar'+atividade_id+' input[name="grammar'+atividade_id+'-'+next+'"]').val(respostas[i]);
                        $('#unidade1grammar'+atividade_id+' input[name="grammar'+atividade_id+'-'+next+'"]').attr("value", respostas[i]);
                    }
                    $('#unidade1grammar'+atividade_id+' input[name="resposta_id"]').val(response[0].resposta_id);
                    $('#unidade1grammar'+atividade_id+' input[name="resposta_id"]').attr("value", response[0].resposta_id);
                }
            });
        }

        function enviarAtividade(form, respostas){
            var atividade = {
                "_token" : form.find('input[name="_token"]').val(),
                "resposta_respostas" : respostas,
                "atividade_id" : form.find('input[name="atividade_id"]').val(),
                "unidade_id" : form.find('input[name="unidade_id"]').val()
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
