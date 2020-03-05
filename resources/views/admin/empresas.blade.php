@include('layouts/header/header')

<main>
    <div id="empresas" class="box">
        <h3>
            Empresas
            <div class="click suave criar"><i class="material-icons">add_circle</i><span class="mini-title">Nova empresa<span></div>
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
        <h4 class="barlow">Criar empresa <i class="material-icons click suave fechar">close</i></h4>
        <form id="form-criar-empresa" action="{{ route('empresas.store') }}" method="post">
            <label for="empresa_nome">Nome</label>
            <input type="text" name="empresa_nome" id="empresa_nome" placeholder="Nome da empresa" required>
            <button type="submit" class="click suave">Salvar <i class="material-icons">save</i></button>
        </form>
    </div>
    <div id="editar" class="content suave">
        <h4 class="barlow">Editar empresa <i class="material-icons click suave fechar">close</i></h4>
        <form id="form-editar-empresa" action="{{ route('empresas.store') }}" method="post">
            <input type="hidden" name="e_empresa_id" id="e_empresa_id" value="">
            <label for="e_empresa_nome">Título</label>
            <input type="text" name="e_empresa_nome" id="e_empresa_nome" placeholder="Nome da empresa" required>
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
        $("#empresas .list-body").load("empresas-lista", function(responseTxt, statusTxt, xhr){
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
    
    $("#form-criar-empresa").submit(function(e){
        e.preventDefault();
        $("#form-criar-empresa button").prop('disabled', true);
        criar();
    });

    $(document).on("click", ".editar", function(){
        $("#lateral, #editar").addClass("active");
        empresa_id = $(this).attr("data-id");
        consultar(empresa_id);
    });

    $("#form-editar-empresa").submit(function(e){
        e.preventDefault();
        $("#form-editar-empresa button").prop('disabled', true);
        editar();
    });

    $(document).on("click", ".deletar", function(){
        var empresa_id = $(this).attr("data-id");
        $("#alerta p").empty();
        $("#alerta p").text("Deseja realmente deletar esta empresa ?");
        $("#alerta .opcoes").removeClass("hide");
        $("#alerta").addClass("active");
        $("#alerta .confirmar").click(function(){
            $(this).prop('disabled', true);
            deletar(empresa_id);
        });
    });
    
    $("#lateral .fechar").click(function(){
        $("#lateral, #lateral .content").removeClass("active");
    });

    $("#alerta .cancelar").click(function(){
        $("#alerta").removeClass("active");
    });
    
    function criar(){
        var form = new FormData($("#form-criar-empresa")[0]);
        request = $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: 'empresas',
            data: form,
            type: 'post',
            contentType: false,
            processData: false,
            error: function(){
                criaAlerta(0, "Falha ao criar empresa!",5000);
            }
        });
        request.done(function(response){
            if(response == "1"){
                $("#lateral, #lateral .content").removeClass("active");
                $("#form-criar-empresa")[0].reset();
                $("#form-criar-empresa button").prop('disabled', false);
                criaAlerta(0, "Empresa criada com sucesso!",5000);
                carregarLista();
            }
        });
    }

    function consultar(empresa_id){
        request = $.ajax({
            url: 'empresas/' + empresa_id,
            type: 'get',
            error: function(){
                criaAlerta(0,"Falha na consulta!",2000);
            }
        });
        request.done(function(response){
            $('#form-editar-empresa input[name="e_empresa_id"]').val(response.empresa_id);
            $('#form-editar-empresa input[name="e_empresa_nome"]').val(response.empresa_nome);
        });
    }
    
    function editar(){
        var form = new FormData($("#form-editar-empresa")[0]);
        request = $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: 'empresas',
            data: form,
            type: 'post',
            contentType: false,
            processData: false,
            error: function(){
                criaAlerta(0,"Falha ao editar empresa!",2000);
            }
        });
        request.done(function(response){
            if(response == "2"){
                $("#lateral, #lateral .content").removeClass("active");
                $("#form-editar-empresa")[0].reset();
                $("#form-editar-empresa button").prop('disabled', false);
                criaAlerta(0, "Empresa atualizada com sucesso!",5000);
                carregarLista();
            }
        });
    }

    function deletar(empresa_id){
        request = $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: 'empresas/' + empresa_id,
            type: 'delete',
            error: function(){
                criaAlerta(0, "Falha ao deletar empresa!",2000);
            }
        });
        request.done(function(response){
            if(response == "1"){
                $("#alerta .opcoes").addClass("hide");
                $("#alerta p").text("Empresa deletada com sucesso!");
                $("#alerta .confirmar").prop('disabled', false);
                setTimeout(function(){
                    $("#alerta").removeClass("active");
                }, 2000);
                carregarLista();
            }else{
                $("#alerta .opcoes").addClass("hide");
                $("#alerta p").text("Esta empresa possui unidades atreladas a ela, remova suas unidades primeiro!");
                $("#alerta .confirmar").prop('disabled', false);
                setTimeout(function(){
                    $("#alerta").removeClass("active");
                }, 5000);
            }
        });
    }
    
    

</script>

