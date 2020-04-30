@include('layouts/header/header')

<main>
    <div id="cargos" class="box">
        <h3>
            Cargos
            <div class="click suave criar"><i class="material-icons">add_circle</i><span class="mini-title">Novo cargo<span></div>
        </h3>
        <ul class="list-head">
            <li>
                <div><h6 class="mini-title upper">#</h6></div>
                <div><h6 class="mini-title upper">Cargo</h6></div>
                <div><h6 class="mini-title upper">Ativo ?</h6></div>
                <div><h6 class="mini-title upper">Ações</h6></div>
            </li>
        </ul>
        <ul class="list-body loading active"></ul>
    </div>
</main>

<div id="lateral" class="suave">
    <div class="overlay suave"></div>
    <div id="criar" class="content suave">
        <h4 class="barlow">Criar cargo <i class="material-icons click suave fechar">close</i></h4>
        <form id="form-criar-cargo" action="{{ route('cargos.store') }}" method="post">
            <label for="cargo_nome">Nome</label>
            <input type="text" name="cargo_nome" id="cargo_nome" placeholder="Nome do cargo" required>
            <label>Selecione os menus para o cargo</label>
            <div class="list-checkbox">
                <h6>
                    <div class="checkbox click suave"><input type="checkbox" name="menu_id_1" id="menu_id_1" value="1"></div>
                    Início
                </h6>
                <div class="divider"></div>
                <h6>
                    <div class="checkbox click suave"><input type="checkbox" name="menu_id_2" id="menu_id_2" value="2"></div>
                    Acadêmico
                </h6>
                <h6>
                    <div class="checkbox click suave"><input type="checkbox" name="menu_id_2-1" id="menu_id_2-1" value="2-1"></div>
                    Cursos
                </h6>
                <h6>
                    <div class="checkbox click suave"><input type="checkbox" name="menu_id_2-2" id="menu_id_2-2" value="2-2"></div>
                    Turmas
                </h6>
                <h6>
                    <div class="checkbox click suave"><input type="checkbox" name="menu_id_2-3" id="menu_id_2-3" value="2-3"></div>
                    Provas
                </h6>
                <div class="divider"></div>
                <h6>
                    <div class="checkbox click"><input type="checkbox" name="menu_id_3" id="menu_id_3" value="3"></div>
                    Administrativo
                </h6>
                <h6>
                    <div class="checkbox click suave"><input type="checkbox" name="menu_id_3-1" id="menu_id_3-1" value="3-1"></div>
                    Clientes
                </h6>
                <h6>
                    <div class="checkbox click suave"><input type="checkbox" name="menu_id_3-2" id="menu_id_3-2" value="3-2"></div>
                    Colaboradores
                </h6>
                <h6>
                    <div class="checkbox click suave"><input type="checkbox" name="menu_id_3-3" id="menu_id_3-3" value="3-3"></div>
                    Cargos
                </h6>
                <h6>
                    <div class="checkbox click suave"><input type="checkbox" name="menu_id_3-4" id="menu_id_3-4" value="3-4"></div>
                    Empresas
                </h6>
                <h6>
                    <div class="checkbox click suave"><input type="checkbox" name="menu_id_3-5" id="menu_id_3-5" value="3-5"></div>
                    Unidades
                </h6>
                <h6>
                    <div class="checkbox click suave"><input type="checkbox" name="menu_id_3-6" id="menu_id_3-6" value="3-6"></div>
                    Horários
                </h6>
            </div>
            <div class="esquerda">
                <label for="cargo_status">Ativo ?</label>
                <select name="cargo_status" id="cargo_status">
                    <option value="1">Sim</option>
                    <option value="2">Não</option>
                </select>
            </div>
            <div class="clear"></div>
            <button type="submit" class="click suave">Salvar <i class="material-icons">save</i></button>
        </form>
    </div>
    <div id="editar" class="content suave">
        <h4 class="barlow">Editar cargo <i class="material-icons click suave fechar">close</i></h4>
        <form id="form-editar-cargo" action="{{ route('cargos.store') }}" method="post">
            <input type="hidden" name="e_cargo_id" id="e_cargo_id" value="">
            <label for="e_cargo_nome">Título</label>
            <input type="text" name="e_cargo_nome" id="e_cargo_nome" placeholder="Nome do cargo" required>
            <label>Selecione os menus para o cargo</label>
            <div class="list-checkbox">
                <h6>
                    <div class="checkbox click suave"><input type="checkbox" name="e_menu_id_1" id="e_menu_id_1" value="1"></div>
                    Início
                </h6>
                <div class="divider"></div>
                <h6>
                    <div class="checkbox click suave"><input type="checkbox" name="e_menu_id_2" id="e_menu_id_2" value="2"></div>
                    Acadêmico
                </h6>
                <h6>
                    <div class="checkbox click suave"><input type="checkbox" name="e_menu_id_2-1" id="e_menu_id_2-1" value="2-1"></div>
                    Cursos
                </h6>
                <h6>
                    <div class="checkbox click suave"><input type="checkbox" name="e_menu_id_2-2" id="e_menu_id_2-2" value="2-2"></div>
                    Turmas
                </h6>
                <h6>
                    <div class="checkbox click suave"><input type="checkbox" name="e_menu_id_2-3" id="e_menu_id_2-3" value="2-3"></div>
                    Provas
                </h6>
                <div class="divider"></div>
                <h6>
                    <div class="checkbox click"><input type="checkbox" name="e_menu_id_3" id="e_menu_id_3" value="3"></div>
                    Administrativo
                </h6>
                <h6>
                    <div class="checkbox click suave"><input type="checkbox" name="e_menu_id_3-1" id="e_menu_id_3-1" value="3-1"></div>
                    Clientes
                </h6>
                <h6>
                    <div class="checkbox click suave"><input type="checkbox" name="e_menu_id_3-2" id="e_menu_id_3-2" value="3-2"></div>
                    Colaboradores
                </h6>
                <h6>
                    <div class="checkbox click suave"><input type="checkbox" name="e_menu_id_3-3" id="e_menu_id_3-3" value="3-3"></div>
                    Cargos
                </h6>
                <h6>
                    <div class="checkbox click suave"><input type="checkbox" name="e_menu_id_3-4" id="e_menu_id_3-4" value="3-4"></div>
                    Empresas
                </h6>
                <h6>
                    <div class="checkbox click suave"><input type="checkbox" name="e_menu_id_3-5" id="e_menu_id_3-5" value="3-5"></div>
                    Unidades
                </h6>
                <h6>
                    <div class="checkbox click suave"><input type="checkbox" name="e_menu_id_3-6" id="e_menu_id_3-6" value="3-6"></div>
                    Horários
                </h6>
            </div>
            <div class="esquerda">
                <label for="e_cargo_status">Ativo ?</label>
                <select name="e_cargo_status" id="e_cargo_status">
                    <option value="1">Sim</option>
                    <option value="2">Não</option>
                </select>
            </div>
            <div class="clear"></div>
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

    $(".checkbox").click(function(){
        $(this).toggleClass("active");
    });

    function carregarLista(){
        $("#cargos .list-body").load("cargos-lista", function(responseTxt, statusTxt, xhr){
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

    $("#form-criar-cargo").submit(function(e){
        e.preventDefault();
        $("#form-criar-cargo button").prop('disabled', true);
        var menus = '[';
        var tamanho = $('#form-criar-cargo input[type="checkbox"]:checked').length - 1;
        $('#form-criar-cargo input[type="checkbox"]:checked').each(function(index){
            if(tamanho == index){
                menus += '"'+$(this).val()+'"]';
            }else{
                menus += '"'+$(this).val()+'",';
            }
        });
        criar(menus);
    });

    $(document).on("click", ".editar", function(){
        $("#lateral, #editar").addClass("active");
        cargo_id = $(this).attr("data-id");
        consultar(cargo_id);
    });
    
    $("#form-editar-cargo").submit(function(e){
        e.preventDefault();
        $("#form-editar-cargo button").prop('disabled', true);
        var menus = '[';
        var tamanho = $('#form-editar-cargo input[type="checkbox"]:checked').length - 1;
        $('#form-editar-cargo input[type="checkbox"]:checked').each(function(index){
            if(tamanho == index){
                menus += '"'+$(this).val()+'"]';
            }else{
                menus += '"'+$(this).val()+'",';
            }
        });
        editar(menus);
    });
    
    $(document).on("click", ".deletar", function(){
        var cargo_id = $(this).attr("data-id");
        $("#alerta p").empty();
        $("#alerta p").text("Deseja realmente deletar esta cargo ?");
        $("#alerta .opcoes").removeClass("hide");
        $("#alerta").addClass("active");
        $("#alerta .confirmar").click(function(){
            $(this).prop('disabled', true);
            deletar(cargo_id);
        });
    });
    
    $("#lateral .fechar").click(function(){
        $("#lateral, #lateral .content").removeClass("active");
    });

    $("#alerta .cancelar").click(function(){
        $("#alerta").removeClass("active");
    });
    
    function criar(menus){
        var cargo = {
            "cargo_nome" : $('#form-criar-cargo input[name="cargo_nome"]').val(),
            "cargo_menus" : menus,
            "cargo_status" : $('#form-criar-cargo #cargo_status option:selected').val()
        };
        request = $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: 'cargos',
            data: cargo,
            type: 'post',
            error: function(){
                criaAlerta(0, "Falha ao criar cargo!",2000);
            }
        });
        request.done(function(response){
            if(response == "1"){
                $("#lateral, #lateral .content").removeClass("active");
                $("#form-criar-cargo")[0].reset();
                $("#form-criar-cargo .checkbox").removeClass("active");
                $("#form-criar-cargo button").prop('disabled', false);
                criaAlerta(0, "Cargo criado com sucesso!",5000);
                carregarLista();
            }
        });
    }

    function consultar(cargo_id){
        request = $.ajax({
            url: 'cargos/'+cargo_id,
            type: 'get',
            error: function(){
                criaAlerta(0,"Falha na consulta!",2000);
            }
        });
        request.done(function(response){
            $("#form-editar-cargo .checkbox").removeClass("active");
            $('#form-editar-cargo input[type="checkbox"]').prop("checked", false);
            $('#form-editar-cargo input[name="e_cargo_id"]').val(response.cargo_id);
            $('#form-editar-cargo input[name="e_cargo_nome"]').val(response.cargo_nome);
            $('#form-editar-cargo #e_cargo_status option[value="'+response.cargo_status+'"]').prop("selected", true);
            var menusArray = JSON.parse(response.cargo_menus);
            menusArray.forEach( m => {
                $('#form-editar-cargo input[value="'+m+'"]').prop("checked", true);
                $('#form-editar-cargo input[value="'+m+'"]').offsetParent().addClass("active");
            });
        });
    }
    
    function editar(menus){
        var cargo = {
            "_token" : $('#form-editar-cargo input[name="_token"]').val(),
            "e_cargo_id" : $('#form-editar-cargo input[name="e_cargo_id"]').val(),
            "e_cargo_nome" : $('#form-editar-cargo input[name="e_cargo_nome"]').val(),
            "e_cargo_menus" : menus,
            "e_cargo_status" : $('#form-editar-cargo #e_cargo_status option:selected').val()
        };
        request = $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: 'cargos',
            data: cargo,
            type: 'post',
            error: function(){
                criaAlerta(0,"Falha ao editar cargo!",2000);
            }
        });
        request.done(function(response){
            if(response == "2"){
                $("#lateral, #lateral .content").removeClass("active");
                $("#form-editar-cargo")[0].reset();
                $("#form-editar-cargo button").prop('disabled', false);
                criaAlerta(0, "Cargo atualizado com sucesso!",5000);
                carregarLista();
            }
        });
    }

    function deletar(cargo_id){
        request = $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: 'cargos/' + cargo_id,
            type: 'delete',
            error: function(){
                criaAlerta(0, "Falha ao deletar cargo!",2000);
            }
        });
        request.done(function(response){
            if(response == "1"){
                $("#alerta .opcoes").addClass("hide");
                $("#alerta p").text("Cargo deletado com sucesso!");
                $("#alerta .confirmar").prop('disabled', false);
                setTimeout(() => {
                    $("#alerta").removeClass("active");
                }, 2000);
                carregarLista();
            }else{
                $("#alerta .opcoes").addClass("hide");
                $("#alerta p").text("Este cargo possui usuários atrelados a ele, mude seus cargos primeiro!");
                $("#alerta .confirmar").prop('disabled', false);
                setTimeout(function(){
                    $("#alerta").removeClass("active");
                }, 5000);
            }
        });
    }
    
    

</script>

