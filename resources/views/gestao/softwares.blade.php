@include('layouts/admin/header/header')

<main>
    <div id="softwares" class="box">
        <h3>
            Programas
            <div class="click suave criar"><i class="material-icons">add_circle</i><span class="mini-title">Novo programa<span></div>
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
        <h4>Criar programa <i class="material-icons click suave fechar">close</i></h4>
        <form id="form-criar-software" enctype="multipart/form-data">
            <label for="software_nome">Nome</label>
            <input type="text" name="software_nome" id="software_nome" placeholder="Nome do programa" required>
            <label for="software_imagem">Ícone</label>
            <input type="file" name="software_imagem" id="software_imagem">
            <label for="software_status">Ativo ?</label>
            <select name="software_status" id="software_status">
                <option value="1">Sim</option>
                <option value="2">Não</option>
            </select>
            <button type="submit" class="click suave">Salvar <i class="material-icons">save</i></button>
        </form>
    </div>
    <div id="editar" class="content suave">
        <h4>Editar programa <i class="material-icons click suave fechar">close</i></h4>
        <form id="form-editar-software" enctype="multipart/form-data">
            <input type="hidden" name="e_software_id" id="e_software_id" value="" required>
            <label for="e_software_nome">Nome</label>
            <input type="text" name="e_software_nome" id="e_software_nome" placeholder="Nome do programa" required>
            <label for="e_software_imagem">Ícone</label>
            <input type="file" name="e_software_imagem" id="e_software_imagem">
            <label for="e_software_status">Ativo ?</label>
            <select name="e_software_status" id="e_software_status">
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
        $("#softwares .list-body").load("softwares-lista", function(responseTxt, statusTxt, xhr){
            if(statusTxt == "success"){
                $(this).removeClass("active");
            }
            if(statusTxt == "error"){
                criaAlerta(0, "Falha ao carregar programas", 2000);
            }
        });
    } carregarLista();

    $(".criar").click(function(){
        $("#lateral, #criar").addClass("active");
    });
    
    $("#form-criar-software").submit(function(e){
        e.preventDefault();
        $("#form-criar-software button").prop('disabled', true);
        criar();
    });

    $(document).on("click", ".editar", function(){
        $("#lateral, #editar").addClass("active");
        software_id = $(this).attr("data-id");
        consultar(software_id);
    });

    $("#form-editar-software").submit(function(e){
        e.preventDefault();
        $("#form-editar-software button").prop('disabled', true);
        editar();
    });

    $(document).on("click", ".deletar", function(){
        var software_id = $(this).attr("data-id");
        $("#alerta p").empty();
        $("#alerta p").text("Deseja realmente deletar este programa ?");
        $("#alerta .opcoes").removeClass("hide");
        $("#alerta").addClass("active");
        $("#alerta .confirmar").click(function(){
            $(this).prop('disabled', true);
            deletar(software_id);
        });
    });
    
    $("#lateral .fechar").click(function(){
        $("#lateral, #lateral .content").removeClass("active");
    });

    $("#alerta .cancelar").click(function(){
        $("#alerta").removeClass("active");
    });
    
    function criar(){
        var form = new FormData($("#form-criar-software")[0]);
        request = $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: 'softwares',
            data: form,
            type: 'post',
            contentType: false,
            processData: false,
            error: function(){
                criaAlerta(0, "Falha ao criar programa!",5000);
            }
        });
        request.done(function(response){
            if(response == "1"){
                $("#lateral, #lateral .content").removeClass("active");
                $("#form-criar-software")[0].reset();
                $("#form-criar-software button").prop('disabled', false);
                criaAlerta(0, "Programa criado com sucesso!",5000);
                carregarLista();
            }
        });
    }

    function consultar(software_id){
        request = $.ajax({
            url: 'softwares/' + software_id,
            type: 'get',
            error: function(){
                criaAlerta(0,"Falha na consulta!",2000);
            }
        });
        request.done(function(response){
            $('#form-editar-software input[name="e_software_id"]').val(response.software_id);
            $('#form-editar-software input[name="e_software_nome"]').val(response.software_nome);
            $('#form-editar-software #e_software_status option[value="'+response.software_status+'"]').prop("selected", true);
        });
    }
    
    function editar(){
        var form = new FormData($("#form-editar-software")[0]);
        request = $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: 'softwares',
            data: form,
            type: 'post',
            contentType: false,
            processData: false,
            error: function(){
                criaAlerta(0,"Falha ao editar programa!",2000);
            }
        });
        request.done(function(response){
            if(response == "2"){
                $("#lateral, #lateral .content").removeClass("active");
                $("#form-editar-software")[0].reset();
                $("#form-editar-software button").prop('disabled', false);
                criaAlerta(0, "Programa atualizado com sucesso!",5000);
                carregarLista();
            }
        });
    }

    function deletar(software_id){
        request = $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: 'softwares/' + software_id,
            type: 'delete',
            error: function(){
                criaAlerta(0, "Falha ao deletar programa!",2000);
            }
        });
        request.done(function(response){
            if(response == "1"){
                $("#alerta .opcoes").addClass("hide");
                $("#alerta p").text("Programa deletado com sucesso!");
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

