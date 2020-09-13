@include('layouts/admin/header/header')

<main>
    <div id="provas" class="box">
        <h3>
            Provas
            <div class="click suave criar"><i class="material-icons">add_circle</i><span class="mini-title">Nova prova<span></div>
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
        <h4>Criar prova <i class="material-icons click suave fechar">close</i></h4>
        <form id="form-criar-prova">
            <label for="prova_nome">Nome</label>
            <input type="text" name="prova_nome" id="prova_nome" placeholder="Nome da prova" required>
            <label for="prova_status">Ativa ?</label>
            <select name="prova_status" id="prova_status">
                <option value="1">Sim</option>
                <option value="2">Não</option>
            </select>
            <button type="submit" class="click suave">Salvar <i class="material-icons">save</i></button>
        </form>
    </div>
    <div id="editar" class="content suave">
        <h4>Editar prova <i class="material-icons click suave fechar">close</i></h4>
        <form id="form-editar-prova">
            <input type="hidden" name="e_prova_id" id="e_prova_id" value="">
            <label for="e_prova_nome">Nome</label>
            <input type="text" name="e_prova_nome" id="e_prova_nome" placeholder="Nome da prova" required>
            <label for="e_prova_status">Ativa ?</label>
            <select name="e_prova_status" id="e_prova_status">
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
        $("#provas .list-body").load("provas-lista", function(responseTxt, statusTxt, xhr){
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
    
    $("#form-criar-prova").submit(function(e){
        e.preventDefault();
        $("#form-criar-prova button").prop('disabled', true);
        criar();
    });

    $(document).on("click", ".editar", function(){
        $("#lateral, #editar").addClass("active");
        prova_id = $(this).attr("data-id");
        consultar(prova_id);
    });

    $("#form-editar-prova").submit(function(e){
        e.preventDefault();
        $("#form-editar-prova button").prop('disabled', true);
        editar();
    });

    $(document).on("click", ".deletar", function(){
        var prova_id = $(this).attr("data-id");
        $("#alerta p").empty();
        $("#alerta p").text("Deseja realmente deletar esta prova ?");
        $("#alerta .opcoes").removeClass("hide");
        $("#alerta").addClass("active");
        $("#alerta .confirmar").click(function(){
            $(this).prop('disabled', true);
            deletar(prova_id);
        });
    });
    
    $("#lateral .fechar").click(function(){
        $("#lateral, #lateral .content").removeClass("active");
    });

    $("#alerta .cancelar").click(function(){
        $("#alerta").removeClass("active");
    });
    
    function criar(){
        var form = new FormData($("#form-criar-prova")[0]);
        request = $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: 'provas',
            data: form,
            type: 'post',
            contentType: false,
            processData: false,
            error: function(){
                criaAlerta(0, "Falha ao criar prova!",5000);
            }
        });
        request.done(function(response){
            if(response == "1"){
                $("#lateral, #lateral .content").removeClass("active");
                $("#form-criar-prova")[0].reset();
                $("#form-criar-prova button").prop('disabled', false);
                criaAlerta(0, "Prova criada com sucesso!",5000);
                carregarLista();
            }
        });
    }

    function consultar(prova_id){
        request = $.ajax({
            url: 'provas/' + prova_id,
            type: 'get',
            error: function(){
                criaAlerta(0,"Falha na consulta!",2000);
            }
        });
        request.done(function(response){
            $('#form-editar-prova input[name="e_prova_id"]').val(response.prova_id);
            $('#form-editar-prova input[name="e_prova_nome"]').val(response.prova_nome);
            $('#form-editar-prova #e_prova_status option[value="'+response.prova_status+'"]').prop("selected", true);
        });
    }
    
    function editar(){
        var form = new FormData($("#form-editar-prova")[0]);
        request = $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: 'provas',
            data: form,
            type: 'post',
            contentType: false,
            processData: false,
            error: function(){
                criaAlerta(0,"Falha ao editar prova!",2000);
            }
        });
        request.done(function(response){
            if(response == "2"){
                $("#lateral, #lateral .content").removeClass("active");
                $("#form-editar-prova")[0].reset();
                $("#form-editar-prova button").prop('disabled', false);
                criaAlerta(0, "Prova atualizada com sucesso!",5000);
                carregarLista();
            }
        });
    }

    function deletar(prova_id){
        request = $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: 'provas/' + prova_id,
            type: 'delete',
            error: function(){
                criaAlerta(0, "Falha ao deletar prova!",2000);
            }
        });
        request.done(function(response){
            if(response == "1"){
                $("#alerta .opcoes").addClass("hide");
                $("#alerta p").text("Prova deletada com sucesso!");
                $("#alerta .confirmar").prop('disabled', false);
                setTimeout(function(){
                    $("#alerta").removeClass("active");
                }, 2000);
                carregarLista();
            }else{
                $("#alerta .opcoes").addClass("hide");
                $("#alerta p").text("Esta empresa possui cursos atreladas a ela, remova seus cursos primeiro!");
                $("#alerta .confirmar").prop('disabled', false);
                setTimeout(function(){
                    $("#alerta").removeClass("active");
                }, 5000);
            }
        });
    }

</script>

