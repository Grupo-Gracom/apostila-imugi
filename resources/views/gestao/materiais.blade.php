@include('layouts/admin/header/header')

<main>
    <div id="materiais" class="box">
        <h3>
            Materiais
            <div class="click suave criar"><i class="material-icons">add_circle</i><span class="mini-title">Novo material<span></div>
        </h3>
        <ul class="list-head">
            <li>
                <div><h6 class="mini-title upper">#</h6></div>
                <div><h6 class="mini-title upper">Título</h6></div>
                <div><h6 class="mini-title upper">Curso</h6></div>
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
        <h4>Criar material <i class="material-icons click suave fechar">close</i></h4>
        <form id="form-criar-material" enctype="multipart/form-data">
            <label for="material_nome">Nome</label>
            <input type="text" name="material_nome" id="material_nome" placeholder="Nome do material" required>
            <label for="material_arquivo">Arquivo</label>
            <input type="file" name="material_arquivo" id="material_arquivo">
            <label for="curso_id">Curso</label>
            <select name="curso_id" id="curso_id">
                @foreach($cursos as $curso)
                    <option value="{{ $curso->curso_id }}">{{ $curso->curso_nome }}</option>
                @endforeach
            </select>
            <label for="material_status">Ativo ?</label>
            <select name="material_status" id="material_status">
                <option value="1">Sim</option>
                <option value="2">Não</option>
            </select>
            <button type="submit" class="click suave">Salvar <i class="material-icons">save</i></button>
        </form>
    </div>
    <div id="editar" class="content suave">
        <h4>Editar material <i class="material-icons click suave fechar">close</i></h4>
        <form id="form-editar-material" enctype="multipart/form-data">
            <input type="hidden" name="e_material_id" id="e_material_id" value="" required>
            <label for="e_material_nome">Nome</label>
            <input type="text" name="e_material_nome" id="e_material_nome" placeholder="Nome do material" required>
            <label for="e_material_arquivo">Arquivo</label>
            <input type="file" name="e_material_arquivo" id="e_material_arquivo">
            <label for="e_curso_id">Curso</label>
            <select name="e_curso_id" id="e_curso_id">
                @foreach($cursos as $curso)
                    <option value="{{ $curso->curso_id }}">{{ $curso->curso_nome }}</option>
                @endforeach
            </select>
            <label for="e_material_status">Ativo ?</label>
            <select name="e_material_status" id="e_material_status">
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
        $("#materiais .list-body").load("materiais-lista", function(responseTxt, statusTxt, xhr){
            if(statusTxt == "success"){
                $(this).removeClass("active");
            }
            if(statusTxt == "error"){
                criaAlerta(0, "Falha ao carregar materiais", 2000);
            }
        });
    } carregarLista();

    $(".criar").click(function(){
        $("#lateral, #criar").addClass("active");
    });
    
    $("#form-criar-material").submit(function(e){
        e.preventDefault();
        $("#form-criar-material button").prop('disabled', true);
        criar();
    });

    $(document).on("click", ".editar", function(){
        $("#lateral, #editar").addClass("active");
        material_id = $(this).attr("data-id");
        consultar(material_id);
    });

    $("#form-editar-material").submit(function(e){
        e.preventDefault();
        $("#form-editar-material button").prop('disabled', true);
        editar();
    });

    $(document).on("click", ".deletar", function(){
        var material_id = $(this).attr("data-id");
        $("#alerta p").empty();
        $("#alerta p").text("Deseja realmente deletar este material ?");
        $("#alerta .opcoes").removeClass("hide");
        $("#alerta").addClass("active");
        $("#alerta .confirmar").click(function(){
            $(this).prop('disabled', true);
            deletar(material_id);
        });
    });
    
    $("#lateral .fechar").click(function(){
        $("#lateral, #lateral .content").removeClass("active");
    });

    $("#alerta .cancelar").click(function(){
        $("#alerta").removeClass("active");
    });
    
    function criar(){
        var form = new FormData($("#form-criar-material")[0]);
        request = $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: 'materiais',
            data: form,
            type: 'post',
            contentType: false,
            processData: false,
            error: function(){
                criaAlerta(0, "Falha ao criar material!",5000);
            }
        });
        request.done(function(response){
            if(response == "1"){
                $("#lateral, #lateral .content").removeClass("active");
                $("#form-criar-material")[0].reset();
                $("#form-criar-material button").prop('disabled', false);
                criaAlerta(0, "Material criado com sucesso!",5000);
                carregarLista();
            }
        });
    }

    function consultar(material_id){
        request = $.ajax({
            url: 'materiais/' + material_id,
            type: 'get',
            error: function(){
                criaAlerta(0,"Falha na consulta!",2000);
            }
        });
        request.done(function(response){
            $('#form-editar-material input[name="e_material_id"]').val(response.material_id);
            $('#form-editar-material input[name="e_material_nome"]').val(response.material_nome);
            $('#form-editar-material #e_material_status option[value="'+response.material_status+'"]').prop("selected", true);
        });
    }
    
    function editar(){
        var form = new FormData($("#form-editar-material")[0]);
        request = $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: 'materiais',
            data: form,
            type: 'post',
            contentType: false,
            processData: false,
            error: function(){
                criaAlerta(0,"Falha ao editar material!",2000);
            }
        });
        request.done(function(response){
            if(response == "2"){
                $("#lateral, #lateral .content").removeClass("active");
                $("#form-editar-material")[0].reset();
                $("#form-editar-material button").prop('disabled', false);
                criaAlerta(0, "Material atualizado com sucesso!",5000);
                carregarLista();
            }
        });
    }

    function deletar(material_id){
        request = $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: 'materiais/' + material_id,
            type: 'delete',
            error: function(){
                criaAlerta(0, "Falha ao deletar material!",2000);
            }
        });
        request.done(function(response){
            if(response == "1"){
                $("#alerta .opcoes").addClass("hide");
                $("#alerta p").text("Material deletado com sucesso!");
                $("#alerta .confirmar").prop('disabled', false);
                setTimeout(function(){
                    $("#alerta").removeClass("active");
                }, 2000);
                carregarLista();
            }
        });
    }
    
    

</script>

