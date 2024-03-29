
<!-- FUNÇÕES EM JAVASCRIPT -->
<script type="text/javascript">
    function excluirAluno() {
        var dados = "idAluno=" + $('#idAluno').val();
        $.ajax({
            url: "<?php echo base_url('AlunoController/cExcluirAluno'); ?>",
            type: "POST",
            data: dados,
            dataType: 'json',
            success: function (data) {
                $('#excluir-aluno').modal('hide');
                if (data.success) {
                    diminuirQtdAluno();
                } else {
                    $('#excluir-erro-aluno').modal('show');
                }
            },
            error: function (request, status, error) {
                $('#falha-internet').modal('show');
            }
        });
    }

    function diminuirQtdAluno() {
        var dados = "idAcademia=" + $('#idAcademia').val();
        $.ajax({
            url: "<?php echo base_url('AcademiaController/cDiminuirQtdAlunos'); ?>",
            type: "POST",
            data: dados,
            dataType: 'json',
            success: function (data) {
                $('#excluir-aluno').modal('hide');
                if (data.success) {
                    $('#excluir-sucesso-aluno').modal('show');
                } else {
                    $('#excluir-erro-aluno').modal('show');
                }
            },
            error: function (request, status, error) {
                $('#falha-internet').modal('show');
            }
        });
    }

    function bloquearAluno(dados) {
        $.ajax({
            type: 'POST',
            url: "<?php echo base_url('AlunoController/cBloquearAluno'); ?>",
            dataType: 'json',
            data: dados,
            success: function (data) {
                $('#bloquear-aluno').modal("hide");
                if (data.success) {
                    $('#bloquear-sucesso-aluno').modal("show");
                } else {
                    $('#bloquear-erro-aluno').modal("show");
                }
            },
            error: function (request, status, error) {
                $('#falha-internet').modal('show');
            }
        });
    }

    function desbloquearAluno(dados) {
        $.ajax({
            type: 'POST',
            url: "<?php echo base_url('AlunoController/cDesbloquearAluno'); ?>",
            dataType: 'json',
            data: dados,
            success: function (data) {
                $('#desbloquear-aluno').modal("hide");
                if (data.success) {
                    $('#desbloquear-sucesso-aluno').modal("show");
                } else {
                    $('#desbloquear-erro-aluno').modal("show");
                }
            },
            error: function (request, status, error) {
                $('#falha-internet').modal('show');
            }
        });
    }
</script>