@include('layouts/header/header')

<main>
    <div id="horarios" class="box">
        <h3>
            Horários
            <div class="click suave criar"><i class="material-icons">add_circle</i><span class="mini-title">Novo horário<span></div>
        </h3>
        <ul class="list-head">
            <li>
                <div><h6 class="mini-title upper">#</h6></div>
                <div><h6 class="mini-title upper">Hora início</h6></div>
                <div><h6 class="mini-title upper">Hora fim</h6></div>
                <div><h6 class="mini-title upper">Dias</h6></div>
                <div><h6 class="mini-title upper">Ações</h6></div>
            </li>
        </ul>
        <ul class="list-body loading active"></ul>
    </div>
</main>

<div id="lateral" class="suave">
    <div class="overlay suave"></div>
    <div id="criar" class="content suave">
        <h4 class="barlow">Criar horário <i class="material-icons click suave fechar">close</i></h4>
        <form id="form-criar-horario" action="{{ route('horarios.store') }}" method="post">
            <div class="metade esquerda">
                <label for="horario_inicio">Hora Início</label>
                <input type="time" name="horario_inicio" id="horario_inicio" required>
            </div>
            <div class="metade direita">
                <label for="horario_fim">Hora Fim</label>
                <input type="time" name="horario_fim" id="horario_fim" required>
            </div>
            <div class="clear"></div>
            <label for="horario_fim">Dias da semana</label>
            <div class="list-checkbox">
                <h6>
                    <div class="checkbox click suave">
                        <input type="checkbox" name="horario_dias[]" id="horario_dia1" value="Seg">
                    </div>
                    Segunda-feira
                </h6>
                <h6>
                    <div class="checkbox click suave">
                        <input type="checkbox" name="horario_dias[]" id="horario_dia2" value="Ter">
                    </div>
                    Terça-feira
                </h6>
                <h6>
                    <div class="checkbox click suave">
                        <input type="checkbox" name="horario_dias[]" id="horario_dia3" value="Qua">
                    </div>
                    Quarta-feira
                </h6>
                <h6>
                    <div class="checkbox click suave">
                        <input type="checkbox" name="horario_dias[]" id="horario_dia4" value="Qui">
                    </div>
                    Quinta-feira
                </h6>
                <h6>
                    <div class="checkbox click suave">
                        <input type="checkbox" name="horario_dias[]" id="horario_dia5" value="Sex">
                    </div>
                    Sexta-feira
                </h6>
                <h6>
                    <div class="checkbox click suave">
                        <input type="checkbox" name="horario_dias[]" id="horario_dia6" value="Sab">
                    </div>
                    Sábado
                </h6>
            </div>
            <button type="submit" class="click suave">Salvar <i class="material-icons">save</i></button>
        </form>
    </div>
    <div id="editar" class="content suave">
        <h4 class="barlow">Editar horário <i class="material-icons click suave fechar">close</i></h4>
        <form id="form-editar-horario" action="{{ route('horarios.store') }}" method="post">
            <input type="hidden" name="e_horario_id" id="e_horario_id" value="">
            <div class="metade esquerda">
                <label for="e_horario_inicio">Hora Início</label>
                <input type="time" name="e_horario_inicio" id="e_horario_inicio" required>
            </div>
            <div class="metade direita">
                <label for="e_horario_fim">Hora Fim</label>
                <input type="time" name="e_horario_fim" id="e_horario_fim" required>
            </div>
            <div class="clear"></div>
            <label for="horario_fim">Dias da semana</label>
            <div class="list-checkbox">
                <h6>
                    <div class="checkbox click suave">
                        <input type="checkbox" name="e_horario_dias[]" id="e_horario_dia1" value="Seg">
                    </div>
                    Segunda-feira
                </h6>
                <h6>
                    <div class="checkbox click suave">
                        <input type="checkbox" name="e_horario_dias[]" id="e_horario_dia2" value="Ter">
                    </div>
                    Terça-feira
                </h6>
                <h6>
                    <div class="checkbox click suave">
                        <input type="checkbox" name="e_horario_dias[]" id="e_horario_dia3" value="Qua">
                    </div>
                    Quarta-feira
                </h6>
                <h6>
                    <div class="checkbox click suave">
                        <input type="checkbox" name="e_horario_dias[]" id="e_horario_dia4" value="Qui">
                    </div>
                    Quinta-feira
                </h6>
                <h6>
                    <div class="checkbox click suave">
                        <input type="checkbox" name="e_horario_dias[]" id="e_horario_dia5" value="Sex">
                    </div>
                    Sexta-feira
                </h6>
                <h6>
                    <div class="checkbox click suave">
                        <input type="checkbox" name="e_horario_dias[]" id="e_horario_dia6" value="Sab">
                    </div>
                    Sábado
                </h6>
            </div>
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

    $(document).on("click", ".checkbox", function(){
        if($(this).find("input").prop("checked")){
            $(this).addClass("active");
        }else{
            $(this).removeClass("active");
        }
    });

    function carregarLista(){
        $("#horarios .list-body").load("horarios-lista", function(responseTxt, statusTxt, xhr){
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
    
    $("#form-criar-horario").submit(function(e){
        e.preventDefault();
        $("#form-criar-horario button").prop('disabled', true);
        var dias = '[';
        var tamanho = $('#form-criar-horario input[type="checkbox"]:checked').length - 1;
        $('#form-criar-horario input[type="checkbox"]:checked').each(function(index){
            if(tamanho == index){
                dias += '"'+$(this).val()+'"]';
            }else{
                dias += '"'+$(this).val()+'",';
            }
        });
        criar(dias);
    });

    $(document).on("click", ".editar", function(){
        $("#lateral, #editar").addClass("active");
        horario_id = $(this).attr("data-id");
        consultar(horario_id);
    });

    $("#form-editar-horario").submit(function(e){
        e.preventDefault();
        $("#form-editar-horario button").prop('disabled', true);
        var dias = '[';
        var tamanho = $('#form-editar-horario input[type="checkbox"]:checked').length - 1;
        $('#form-editar-horario input[type="checkbox"]:checked').each(function(index){
            if(tamanho == index){
                dias += '"'+$(this).val()+'"]';
            }else{
                dias += '"'+$(this).val()+'",';
            }
        });
        editar(dias);
    });

    $(document).on("click", ".deletar", function(){
        var horario_id = $(this).attr("data-id");
        $("#alerta p").empty();
        $("#alerta p").text("Deseja realmente deletar este horário ?");
        $("#alerta .opcoes").removeClass("hide");
        $("#alerta").addClass("active");
        $("#alerta .confirmar").click(function(){
            $(this).prop('disabled', true);
            deletar(horario_id);
        });
    });
    
    $("#lateral .fechar").click(function(){
        $("#lateral, #lateral .content").removeClass("active");
    });

    $("#alerta .cancelar").click(function(){
        $("#alerta").removeClass("active");
    });
    
    function criar(dias){
        var form = new FormData($("#form-criar-horario")[0]);
        form.append("horario_dias", dias);
        request = $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: 'horarios',
            data: form,
            type: 'post',
            contentType: false,
            processData: false,
            error: function(){
                criaAlerta(0, "Falha ao criar horario!",5000);
            }
        });
        request.done(function(response){
            if(response == "1"){
                $("#lateral, #lateral .content").removeClass("active");
                $("#form-criar-horario")[0].reset();
                $("#form-criar-horario .checkbox").removeClass("active");
                $("#form-criar-horario button").prop('disabled', false);
                criaAlerta(0, "Horário criado com sucesso!",5000);
                carregarLista();
            }
        });
    }

    function consultar(horario_id){
        request = $.ajax({
            url: 'horarios/' + horario_id,
            type: 'get',
            error: function(){
                criaAlerta(0,"Falha na consulta!",2000);
            }
        });
        request.done(function(response){
            $("#form-editar-horario .checkbox").removeClass("active");
            $('#form-editar-horario input[name="e_horario_id"]').val(response.horario_id);
            $('#form-editar-horario input[name="e_horario_inicio"]').val(response.horario_inicio);
            $('#form-editar-horario input[name="e_horario_fim"]').val(response.horario_fim);
            var dias = JSON.parse(response.horario_dias);
            dias.forEach( d => {
                $('#form-editar-horario input[value="'+d+'"]').prop("checked", true);
                $('#form-editar-horario input[value="'+d+'"]').offsetParent().addClass("active");
            });
        });
    }
    
    function editar(dias){
        var form = new FormData($("#form-editar-horario")[0]);
        form.append("e_horario_dias", dias);
        request = $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: 'horarios',
            data: form,
            type: 'post',
            contentType: false,
            processData: false,
            error: function(){
                criaAlerta(0,"Falha ao editar horario!",2000);
            }
        });
        request.done(function(response){
            if(response == "2"){
                $("#lateral, #lateral .content").removeClass("active");
                $("#form-editar-horario")[0].reset();
                $("#form-editar-horario .checkbox").removeClass("active");
                $("#form-editar-horario button").prop('disabled', false);
                criaAlerta(0, "Horário atualizado com sucesso!",5000);
                carregarLista();
            }
        });
    }

    function deletar(horario_id){
        request = $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: 'horarios/' + horario_id,
            type: 'delete',
            error: function(){
                criaAlerta(0, "Falha ao deletar horário!",2000);
            }
        });
        request.done(function(response){
            if(response == "1"){
                $("#alerta .opcoes").addClass("hide");
                $("#alerta p").text("Horário deletado com sucesso!");
                $("#alerta .confirmar").prop('disabled', false);
                setTimeout(function(){
                    $("#alerta").removeClass("active");
                }, 2000);
                carregarLista();
            }else{
                $("#alerta .opcoes").addClass("hide");
                $("#alerta p").text("Este horário possui turmas atreladas a ele, remova suas turmas primeiro!");
                $("#alerta .confirmar").prop('disabled', false);
                setTimeout(function(){
                    $("#alerta").removeClass("active");
                }, 5000);
            }
        });
    }
    
    

</script>

