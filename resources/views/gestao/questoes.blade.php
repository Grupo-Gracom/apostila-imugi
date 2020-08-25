@include('layouts/admin/header/header')

<main>
    <div id="questoes" class="box">
        <h3>
            Questões
            <div class="click suave criar"><i class="material-icons">add_circle</i><span class="mini-title">Nova questão<span></div>
        </h3>
        <ul class="list-head">
            <li>
                <div><h6 class="mini-title upper">#</h6></div>
                <div><h6 class="mini-title upper">Nome</h6></div>
                <div><h6 class="mini-title upper">Ativa ?</h6></div>
                <div><h6 class="mini-title upper">Ações</h6></div>
            </li>
        </ul>
        <ul class="list-body loading active"></ul>
    </div>
</main>

<div id="lateral" class="suave">
    <div class="overlay suave"></div>
    <div id="criar" class="content suave">
        <h4>Criar questão <i class="material-icons click suave fechar">close</i></h4>
        <form id="form-criar-questao">
            <label for="questao_nome">Nome</label>
            <input type="text" name="questao_nome" id="questao_nome" placeholder="Nome da questão" required>
            <label for="questao_pergunta">Pergunta</label>
            <textarea name="questao_pergunta" id="questao_pergunta"></textarea>
            <div class="opcoes">
                <label>Opções de resposta</label>
                <ul></ul>
                <input type="text" id="opcao" placeholder="Descreva a opção">
                <div class="add-opcao suave click">Add opção</div>
            </div>
            <div class="clear"></div>
            <label for="questao_resposta">Resposta correta</label>
            <select name="questao_resposta" id="questao_resposta"></select>
            <label for="prova_id">Ativa ?</label>
            <select name="prova_id" id="prova_id">
                @foreach($provas as $prova)
                    <option value="{{ $prova->prova_id }}">{{ $prova->prova_nome }}</option>
                @endforeach
            </select>
            <label for="questao_status">Ativa ?</label>
            <select name="questao_status" id="questao_status">
                <option value="1">Sim</option>
                <option value="2">Não</option>
            </select>
            <button type="submit" class="click suave">Salvar <i class="material-icons">save</i></button>
        </form>
    </div>
    <div id="editar" class="content suave">
        <h4>Editar questão <i class="material-icons click suave fechar">close</i></h4>
        <form id="form-editar-questao">
            <input type="hidden" name="e_questao_id" id="e_questao_id" value="">
            <label for="e_questao_nome">Nome</label>
            <input type="text" name="e_questao_nome" id="e_questao_nome" placeholder="Nome da questão" required>
            <label for="e_questao_pergunta">Pergunta</label>
            <textarea name="e_questao_pergunta" id="e_questao_pergunta"></textarea>
            <div class="e_opcoes">
                <label>Opções de resposta</label>
                <ul></ul>
                <input type="text" id="e_opcao" placeholder="Descreva a opção">
                <div class="e_add-opcao suave click">Add opção</div>
            </div>
            <div class="clear"></div>
            <label for="e_questao_resposta">Resposta</label>
            <select name="e_questao_resposta" id="e_questao_resposta"></select>
            <label for="e_prova_id">Ativa ?</label>
            <select name="e_prova_id" id="e_prova_id">
                @foreach($provas as $prova)
                    <option value="{{ $prova->prova_id }}">{{ $prova->prova_nome }}</option>
                @endforeach
            </select>
            <label for="e_questao_status">Ativa ?</label>
            <select name="e_questao_status" id="e_questao_status">
                <option value="1">Sim</option>
                <option value="2">Não</option>
            </select>
            
            <button type="submit" class="click suave">Salvar <i class="material-icons">save</i></button>
        </form>
    </div>
</div>

<div id="alerta" class="suave">
    <div class="box">
        <h6 class="mini-title upper">aviso:</h6>
        <p></p>
        <div class="opcoes right-align hide">
            <button class="mini-title upper click suave confirmar">sim</button>
            <button class="mini-title upper click suave cancelar">não</button>
        </div>
    </div>
</div>

<script>

    function carregarLista(){
        $("#questoes .list-body").load("questoes-lista", function(responseTxt, statusTxt, xhr){
            if(statusTxt == "success"){
                $(this).removeClass("active");
            }
            if(statusTxt == "error"){
                criaAlerta(0, "Erro: " + xhr.status + ": " + xhr.statusText, 2000);
            }
        });
    } carregarLista();

    $(".criar").click(function(){
        $("#lateral, #criar").addClass("active");
    });
    
    $("#form-criar-questao").submit(function(e){
        e.preventDefault();
        $("#form-criar-questao button").prop('disabled', true);
        var opcoes = "[";
        $(".opcoes li").each(function(index){
            if(++index < ($(".opcoes li").length)){
                opcoes += '{"opcao":"'+$(this).find("span").text()+'"},';
            }else{
                opcoes += '{"opcao":"'+$(this).find("span").text()+'"}';
            }
        });
        opcoes += "]";
        criar(opcoes);
    });

    $(document).on("click", ".editar", function(){
        $("#lateral, #editar").addClass("active");
        questao_id = $(this).attr("data-id");
        consultar(questao_id);
    });

    $("#form-editar-questao").submit(function(e){
        e.preventDefault();
        $("#form-editar-questao button").prop('disabled', true);
        var opcoes = "[";
        $(".e_opcoes li").each(function(index){
            if(++index < ($(".e_opcoes li").length)){
                opcoes += '{"opcao":"'+$(this).find("span").text()+'"},';
            }else{
                opcoes += '{"opcao":"'+$(this).find("span").text()+'"}';
            }
        });
        opcoes += "]";
        editar(opcoes);
    });

    $(document).on("click", ".deletar", function(){
        var questao_id = $(this).attr("data-id");
        $("#alerta p").empty();
        $("#alerta p").text("Deseja realmente deletar esta questão ?");
        $("#alerta .opcoes").removeClass("hide");
        $("#alerta").addClass("active");
        $("#alerta .confirmar").click(function(){
            $(this).prop('disabled', true);
            deletar(questao_id);
        });
    });
    
    $("#lateral .fechar").click(function(){
        $("#lateral, #lateral .content").removeClass("active");
    });

    $("#alerta .cancelar").click(function(){
        $("#alerta").removeClass("active");
    });
    
    function criar(opcoes){
        var form = new FormData($("#form-criar-questao")[0]);
        form.append("questao_opcoes", opcoes);
        request = $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: 'questoes',
            data: form,
            type: 'post',
            contentType: false,
            processData: false,
            error: function(){
                criaAlerta(0, "Falha ao criar questao!",5000);
            }
        });
        request.done(function(response){
            if(response == "1"){
                $("#lateral, #lateral .content").removeClass("active");
                $("#form-criar-questao")[0].reset();
                $("#form-criar-questao button").prop('disabled', false);
                $(".opcoes ul").empty();
                criaAlerta(0, "Questão criada com sucesso!",5000);
                carregarLista();
            }
        });
    }

    function consultar(questao_id){
        request = $.ajax({
            url: 'questoes/' + questao_id,
            type: 'get',
            error: function(){
                criaAlerta(0,"Falha na consulta!",2000);
            }
        });
        request.done(function(response){
            $('#form-editar-questao input[name="e_questao_id"]').val(response.questao_id);
            $('#form-editar-questao input[name="e_questao_nome"]').val(response.questao_nome);
            $('#form-editar-questao textarea[name="e_questao_pergunta"]').val(response.questao_pergunta);
            $('#form-editar-questao input[name="e_questao_resposta"]').val(response.questao_resposta);
            $('#form-editar-questao #e_questao_status option[value="'+response.questao_status+'"]').prop("selected", true);
            $('#form-editar-questao #e_prova_id option[value="'+response.prova_id+'"]').prop("selected", true);
            var opcoes = JSON.parse(response.questao_opcoes);
            $(".e_opcoes ul").empty();
            $("#e_questao_resposta").empty();
            opcoes.forEach( o => {
                var opcao = '<li><span>'+o.opcao+'</span> <i class="material-icons click suave remove-opcao e">close</i></li>';
                var resposta = '<option value="'+$(".e_opcoes li").length+'">'+o.opcao+'</value>';
                $(".e_opcoes ul").append(opcao);
                $("#e_questao_resposta").append(resposta);
            });
        });
    }
    
    function editar(opcoes){
        var form = new FormData($("#form-editar-questao")[0]);
        form.append("e_questao_opcoes", opcoes);
        request = $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: 'questoes',
            data: form,
            type: 'post',
            contentType: false,
            processData: false,
            error: function(){
                criaAlerta(0,"Falha ao editar questao!",2000);
            }
        });
        request.done(function(response){
            if(response == "2"){
                $("#lateral, #lateral .content").removeClass("active");
                $("#form-editar-questao")[0].reset();
                $("#form-editar-questao button").prop('disabled', false);
                $(".e_opcoes ul").empty();
                criaAlerta(0, "Questão atualizada com sucesso!",5000);
                carregarLista();
            }
        });
    }

    function deletar(questao_id){
        request = $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: 'questoes/' + questao_id,
            type: 'delete',
            error: function(){
                criaAlerta(0, "Falha ao deletar questão!",2000);
            }
        });
        request.done(function(response){
            if(response == "1"){
                $("#alerta .opcoes").addClass("hide");
                $("#alerta p").text("Questão deletada com sucesso!");
                $("#alerta .confirmar").prop('disabled', false);
                setTimeout(function(){
                    $("#alerta").removeClass("active");
                }, 2000);
                carregarLista();
            }
        });
    }

    function addOpcao(){
        $(".add-opcao").click(function(){
            var opcao = '<li><span>'+$("#opcao").val()+'</span> <i class="material-icons click suave remove-opcao">close</i></li>';
            var resposta = '<option value="'+$(".opcoes li").length+'">'+$("#opcao").val()+'</value>';
            $(".opcoes ul").append(opcao);
            $("#questao_resposta").append(resposta);
            $("#opcao").val("");
        });
        $(".e_add-opcao").click(function(){
            var opcao = '<li><span>'+$("#e_opcao").val()+'</span> <i class="material-icons click suave remove-opcao e">close</i></li>';
            var resposta = '<option value="'+$(".e_opcoes li").length+'">'+$("#e_opcao").val()+'</value>';
            $(".e_opcoes ul").append(opcao);
            $("#e_questao_resposta").append(resposta);
            $("#e_opcao").val("");
        });
    } addOpcao();

    function removeOpcao(){
        $(document).on("click", ".remove-opcao", function(){
            if($(this).hasClass("e")){
                $(this).offsetParent().remove();
                $("#e_questao_resposta").empty();
                $(".e_opcoes li").each(function(){
                    var resposta = '<option value="'+$(".e_opcoes li").length+'">'+$(this).find("span").text()+'</value>';
                    $("#e_questao_resposta").append(resposta);
                });
            }else{
                $(this).offsetParent().remove();
                $("#questao_resposta").empty();
                $(".opcoes li").each(function(){
                    var resposta = '<option value="'+$(".opcoes li").length+'">'+$(this).find("span").text()+'</value>';
                    $("#questao_resposta").append(resposta);
                });
            }
        });
    }removeOpcao();

</script>

