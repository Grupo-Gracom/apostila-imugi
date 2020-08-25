@include('layouts/admin/header/header')

<main>
    <div id="categorias" class="box">
        <h3>
            Categorias
            <div class="click suave criar"><i class="material-icons">add_circle</i><span class="mini-title">Nova categoria<span></div>
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
        <h4>Criar categoria <i class="material-icons click suave fechar">close</i></h4>
        <form id="form-criar-categoria">
            <label for="categoria_nome">Nome</label>
            <input type="text" name="categoria_nome" id="categoria_nome" placeholder="Nome da categoria" required>
            <button type="submit" class="click suave">Salvar <i class="material-icons">save</i></button>
        </form>
    </div>
    <div id="editar" class="content suave">
        <h4>Editar categoria <i class="material-icons click suave fechar">close</i></h4>
        <form id="form-editar-categoria">
            <input type="hidden" name="e_categoria_id" id="e_categoria_id" value="">
            <label for="e_categoria_nome">Nome</label>
            <input type="text" name="e_categoria_nome" id="e_categoria_nome" placeholder="Nome da categoria" required>
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
        $("#categorias .list-body").load("categorias-lista", function(responseTxt, statusTxt, xhr){
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
    
    $("#form-criar-categoria").submit(function(e){
        e.preventDefault();
        $("#form-criar-categoria button").prop('disabled', true);
        criar();
    });

    $(document).on("click", ".editar", function(){
        $("#lateral, #editar").addClass("active");
        categoria_id = $(this).attr("data-id");
        consultar(categoria_id);
    });

    $("#form-editar-categoria").submit(function(e){
        e.preventDefault();
        $("#form-editar-categoria button").prop('disabled', true);
        editar();
    });

    $(document).on("click", ".deletar", function(){
        var categoria_id = $(this).attr("data-id");
        $("#alerta p").empty();
        $("#alerta p").text("Deseja realmente deletar esta categoria ?");
        $("#alerta .opcoes").removeClass("hide");
        $("#alerta").addClass("active");
        $("#alerta .confirmar").click(function(){
            $(this).prop('disabled', true);
            deletar(categoria_id);
        });
    });
    
    $("#lateral .fechar").click(function(){
        $("#lateral, #lateral .content").removeClass("active");
    });

    $("#alerta .cancelar").click(function(){
        $("#alerta").removeClass("active");
    });
    
    function criar(){
        var form = new FormData($("#form-criar-categoria")[0]);
        request = $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: 'categorias',
            data: form,
            type: 'post',
            contentType: false,
            processData: false,
            error: function(){
                criaAlerta(0, "Falha ao criar categoria!",5000);
            }
        });
        request.done(function(response){
            if(response == "1"){
                $("#lateral, #lateral .content").removeClass("active");
                $("#form-criar-categoria")[0].reset();
                $("#form-criar-categoria button").prop('disabled', false);
                criaAlerta(0, "Categoria criada com sucesso!",5000);
                carregarLista();
            }
        });
    }

    function consultar(empresa_id){
        request = $.ajax({
            url: 'categorias/' + empresa_id,
            type: 'get',
            error: function(){
                criaAlerta(0,"Falha na consulta!",2000);
            }
        });
        request.done(function(response){
            $('#form-editar-categoria input[name="e_categoria_id"]').val(response.categoria_id);
            $('#form-editar-categoria input[name="e_categoria_nome"]').val(response.categoria_nome);
        });
    }
    
    function editar(){
        var form = new FormData($("#form-editar-categoria")[0]);
        request = $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: 'categorias',
            data: form,
            type: 'post',
            contentType: false,
            processData: false,
            error: function(){
                criaAlerta(0,"Falha ao editar categoria!",2000);
            }
        });
        request.done(function(response){
            if(response == "2"){
                $("#lateral, #lateral .content").removeClass("active");
                $("#form-editar-categoria")[0].reset();
                $("#form-editar-categoria button").prop('disabled', false);
                criaAlerta(0, "Categoria atualizada com sucesso!",5000);
                carregarLista();
            }
        });
    }

    function deletar(empresa_id){
        request = $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: 'categorias/' + empresa_id,
            type: 'delete',
            error: function(){
                criaAlerta(0, "Falha ao deletar categoria!",2000);
            }
        });
        request.done(function(response){
            if(response == "1"){
                $("#alerta .opcoes").addClass("hide");
                $("#alerta p").text("Categoria deletada com sucesso!");
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

