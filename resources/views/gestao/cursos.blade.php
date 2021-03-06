@include('layouts/admin/header/header')

<main>
    <div id="cursos" class="box">
        <h3>
            Cursos
            <div class="click suave criar"><i class="material-icons">add_circle</i><span class="mini-title">Novo curso<span></div>
        </h3>
        <ul class="list-head">
            <li>
                <div><h6 class="mini-title upper">#</h6></div>
                <div><h6 class="mini-title upper">Nome</h6></div>
                <div><h6 class="mini-title upper">Nível</h6></div>
                <div><h6 class="mini-title upper">Unidade</h6></div>
                <div><h6 class="mini-title upper">Destaque ?</h6></div>
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
        <h4>Criar curso <i class="material-icons click suave fechar">close</i></h4>
        <form id="form-criar-curso" enctype="multipart/form-data">
            <div class="metade esquerda">
                <label for="curso_nome">Nome</label>
                <input type="text" name="curso_nome" id="curso_nome" placeholder="Nome do curso" required>
            </div>
            <div class="clear"></div>
            <div class="metade esquerda">
                <label for="curso_imagem">Thumb</label>
                <input type="file" name="curso_imagem" id="curso_imagem">
            </div>
            <div class="metade direita">
                <label for="curso_imagem_destaque">Thumb destaque</label>
                <input type="file" name="curso_imagem_destaque" id="curso_imagem_destaque">
            </div>
            <div class="clear"></div>
            <label for="curso_descricao">Descrição</label>
            <textarea name="curso_descricao" id="curso_descricao" placeholder="Descrição curso"></textarea>
            <div class="clear" style="margin-top: 16px"></div>
            <div class="metade esquerda">
                <label for="curso_nivel">Nível</label>
                <input type="text" name="curso_nivel" id="curso_nivel" placeholder="Ex: Iniciante, Avançado...">
            </div>
            <div class="metade direita">
                <label for="curso_duracao">Duração</label>
                <input type="text" name="curso_duracao" id="curso_duracao" placeholder="Ex: 10 horas aula..." required>
            </div>
            <div class="clear"></div>
            <div class="metade esquerda">
                <label for="software_id">Software utilizado</label>
                <select name="software_id" id="software_id">
                    @foreach($softwares as $software)
                        <option value="{{ $software->software_id }}">{{ $software->software_nome }}</option>
                    @endforeach
                </select>
            </div>
            <div class="metade direita">
                <label for="unidade_id">Unidade</label>
                <select name="unidade_id" id="unidade_id">
                    @foreach($unidades as $unidade)
                        <option value="{{ $unidade->unidade_id }}">{{ $unidade->unidade_nome }}</option>
                    @endforeach
                </select>
            </div>
            <div class="clear"></div>
            <div class="metade esquerda">
                <label for="curso_destaque">Destaque ?</label>
                <select name="curso_destaque" id="curso_destaque">
                    <option value="1">Sim</option>
                    <option value="2">Não</option>
                </select>
            </div>
            <div class="metade direita">
                <label for="categoria_id">Categoria</label>
                <select name="categoria_id" id="categoria_id">
                    @foreach($categorias as $categoria)
                    <option value="{{ $categoria->categoria_id }}">{{ $categoria->categoria_nome }}</option>
                    @endforeach
                </select>
            </div>
            <div class="clear"></div>
            <div class="metade esquerda">
                <label for="curso_status">Ativo ?</label>
                <select name="curso_status" id="curso_status">
                    <option value="1">Sim</option>
                    <option value="2">Não</option>
                </select>
            </div>
            <div class="clear"></div>
            <button type="submit" class="click suave">Salvar <i class="material-icons">save</i></button>
        </form>
    </div>
    <div id="editar" class="content suave">
        <h4>Editar curso <i class="material-icons click suave fechar">close</i></h4>
        <form id="form-editar-curso" enctype="multipart/form-data">
            <input type="hidden" name="e_curso_id" id="e_curso_id" value="" required>
            <div class="metade esquerda">
                <label for="e_curso_nome">Nome</label>
                <input type="text" name="e_curso_nome" id="e_curso_nome" placeholder="Nome do curso" required>
            </div>
            <div class="clear"></div>
            <div class="metade esquerda">
                <label for="e_curso_imagem">Thumb</label>
                <input type="file" name="e_curso_imagem" id="e_curso_imagem">
            </div>
            <div class="metade direita">
                <label for="e_curso_imagem_destaque">Thumb destaque</label>
                <input type="file" name="e_curso_imagem_destaque" id="e_curso_imagem_destaque">
            </div>
            <div class="clear"></div>
                <label for="e_curso_descricao">Descrição</label>
                <textarea name="e_curso_descricao" id="e_curso_descricao" placeholder="Descrição curso"></textarea>
            <div class="clear" style="margin-top: 16px"></div>
            <div class="metade esquerda">
                <label for="e_curso_nivel">Nível</label>
                <input type="text" name="e_curso_nivel" id="e_curso_nivel" placeholder="Ex: Iniciante, Avançado...">
            </div>
            <div class="metade direita">
                <label for="e_curso_duracao">Duração</label>
                <input type="text" name="e_curso_duracao" id="e_curso_duracao" placeholder="Ex: 10 horas aula..." required>
            </div>
            <div class="clear"></div>
            <div class="metade esquerda">
            <label for="e_software_id">Software utilizado</label>
            <select name="e_software_id" id="e_software_id">
                @foreach($softwares as $software)
                    <option value="{{ $software->software_id }}">{{ $software->software_nome }}</option>
                @endforeach
            </select>
            </div>
            <div class="metade direita">
                <label for="e_unidade_id">Unidade</label>
                <select name="e_unidade_id" id="e_unidade_id">
                    @foreach($unidades as $unidade)
                        <option value="{{ $unidade->unidade_id }}">{{ $unidade->unidade_nome }}</option>
                    @endforeach
                </select>
            </div>
            <div class="clear"></div>
            <div class="metade esquerda">
                <label for="e_curso_destaque">Destaque ?</label>
                <select name="e_curso_destaque" id="e_curso_destaque">
                    <option value="1">Sim</option>
                    <option value="2">Não</option>
                </select>
            </div>
            <div class="metade direita">
                <label for="e_categoria_id">Categoria</label>
                <select name="e_categoria_id" id="e_categoria_id">
                    @foreach($categorias as $categoria)
                    <option value="{{ $categoria->categoria_id }}">{{ $categoria->categoria_nome }}</option>
                    @endforeach
                </select>
            </div>
            <div class="clear"></div>
            <div class="metade esquerda">
                <label for="e_curso_status">Ativo ?</label>
                <select name="e_curso_status" id="e_curso_status">
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

    function carregarLista(){
        $("#cursos .list-body").load("cursos-lista", function(responseTxt, statusTxt, xhr){
            if(statusTxt == "success"){
                $(this).removeClass("active");
            }
            if(statusTxt == "error"){
                criaAlerta(0, "Falha ao carregar cursos", 2000);
            }
        });
    } carregarLista();

    $(".criar").click(function(){
        $("#lateral, #criar").addClass("active");
    });
    
    $("#form-criar-curso").submit(function(e){
        e.preventDefault();
        $("#form-criar-curso button").prop('disabled', true);
        criar();
    });

    $(document).on("click", ".editar", function(){
        $("#lateral, #editar").addClass("active");
        curso_id = $(this).attr("data-id");
        consultar(curso_id);
    });

    $("#form-editar-curso").submit(function(e){
        e.preventDefault();
        $("#form-editar-curso button").prop('disabled', true);
        editar();
    });

    $(document).on("click", ".deletar", function(){
        var curso_id = $(this).attr("data-id");
        $("#alerta p").empty();
        $("#alerta p").text("Deseja realmente deletar este curso ?");
        $("#alerta .opcoes").removeClass("hide");
        $("#alerta").addClass("active");
        $("#alerta .confirmar").click(function(){
            $(this).prop('disabled', true);
            deletar(curso_id);
        });
    });
    
    $("#lateral .fechar").click(function(){
        $("#lateral, #lateral .content").removeClass("active");
    });

    $("#alerta .cancelar").click(function(){
        $("#alerta").removeClass("active");
    });
    
    function criar(){
        var form = new FormData($("#form-criar-curso")[0]);
        form.append("curso_descricao", CKEDITOR.instances.curso_descricao.getData());
        request = $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: 'cursos',
            data: form,
            type: 'post',
            contentType: false,
            processData: false,
            error: function(){
                criaAlerta(0, "Falha ao criar curso!",5000);
            }
        });
        request.done(function(response){
            if(response == "1"){
                $("#lateral, #lateral .content").removeClass("active");
                $("#form-criar-curso")[0].reset();
                $("#form-criar-curso button").prop('disabled', false);
                criaAlerta(0, "Curso criado com sucesso!",5000);
                carregarLista();
            }
        });
    }

    function consultar(curso_id){
        request = $.ajax({
            url: 'cursos/' + curso_id,
            type: 'get',
            error: function(){
                criaAlerta(0,"Falha na consulta!",2000);
            }
        });
        request.done(function(response){
            $('#form-editar-curso input[name="e_curso_id"]').val(response.curso_id);
            $('#form-editar-curso input[name="e_curso_nome"]').val(response.curso_nome);
            CKEDITOR.instances.e_curso_descricao.setData(response.curso_descricao);
            $('#form-editar-curso input[name="e_curso_nivel"]').val(response.curso_nivel);
            $('#form-editar-curso input[name="e_curso_duracao"]').val(response.curso_duracao);
            $('#form-editar-curso #e_curso_destaque option[value="'+response.curso_destaque+'"]').prop("selected", true);
            $('#form-editar-curso #e_curso_status option[value="'+response.curso_status+'"]').prop("selected", true);
            $('#form-editar-curso #e_software_id option[value="'+response.software_id+'"]').prop("selected", true);
            $('#form-editar-curso #e_unidade_id option[value="'+response.unidade_id+'"]').prop("selected", true);
        });
    }
    
    function editar(){
        var form = new FormData($("#form-editar-curso")[0]);
        form.append("e_curso_descricao", CKEDITOR.instances.e_curso_descricao.getData());
        request = $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: 'cursos',
            data: form,
            type: 'post',
            contentType: false,
            processData: false,
            error: function(){
                criaAlerta(0,"Falha ao editar curso!",2000);
            }
        });
        request.done(function(response){
            if(response == "2"){
                $("#lateral, #lateral .content").removeClass("active");
                $("#form-editar-curso")[0].reset();
                $("#form-editar-curso button").prop('disabled', false);
                criaAlerta(0, "Curso atualizado com sucesso!",5000);
                carregarLista();
            }
        });
    }

    function deletar(curso_id){
        request = $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: 'cursos/' + curso_id,
            type: 'delete',
            error: function(){
                criaAlerta(0, "Falha ao deletar curso!",2000);
            }
        });
        request.done(function(response){
            if(response == "1"){
                $("#alerta .opcoes").addClass("hide");
                $("#alerta p").text("Curso deletado com sucesso!");
                $("#alerta .confirmar").prop('disabled', false);
                setTimeout(function(){
                    $("#alerta").removeClass("active");
                }, 2000);
                carregarLista();
            }else{
                $("#alerta .opcoes").addClass("hide");
                $("#alerta p").text("Esta curso possui aulas atreladas a ele, remova suas aulas primeiro!");
                $("#alerta .confirmar").prop('disabled', false);
                setTimeout(function(){
                    $("#alerta").removeClass("active");
                }, 5000);
            }
        });
    }
    
    CKEDITOR.replace( 'curso_descricao', {
        height: 400,
        filebrowserUploadUrl: "{{route('cursoCarregarImagem', ['_token' => csrf_token() ])}}",
        filebrowserUploadMethod: 'form'
    });

    CKEDITOR.replace( 'e_curso_descricao', {
        height: 400,
        filebrowserUploadUrl: "{{route('cursoCarregarImagem', ['_token' => csrf_token() ])}}",
        filebrowserUploadMethod: 'form'
    });

</script>

