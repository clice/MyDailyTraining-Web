// FUNÇÕES PARA MANUTENÇÃO DO USUÁRIO

// FUNÇÃO PARA VERIFICAR OS DADOS DO USUÁRIO
// OS DADOS PASSADOS DEVERAM SER OBRIGATÓRIOS
// O CPF TEM QUE SER VERIFICADO, PARA NÃO SER CADASTRADO DUAS VEZES
function verificarDadosUsuario() {
    var idUsuario = $('#idUsuario').val();
    var idAcademia = $('#idAcademia').val();
    var nomeUsuario = $('#nomeUsuario').val();
    var loginUsuario = $('#loginUsuario').val();
    var senhaUsuario = $('#senhaUsuario').val();
    var confirmarSenha = $('#confirmarSenha').val();
    var emailUsuario = $('#emailUsuario').val();
    var cpfUsuario = $('#cpfUsuario').val();
    var rgUsuario = $('#rgUsuario').val();
    var sexoUsuario = $('#sexoUsuario').val();
    var dataNascimentoUsuario = $('#dataNascimentoUsuario').val();
    var enderecoUsuario = $('#enderecoUsuario').val();
    var estadoUsuario = $('#estadoUsuario').val();
    var cidadeUsuario = $('#cidadeUsuario').val();
    var bairroUsuario = $('#bairroUsuario').val();
    var cepUsuario = $('#cepUsuario').val();
    var telefoneUsuario = $('#telefoneUsuario').val();
    var tipoConta = $('#tipoConta').val();

    var msnCPF = $('#msnCPF').val();

    if ((idUsuario === "") || (nomeUsuario === "") || (loginUsuario === "") || (senhaUsuario === "") || (emailUsuario === "") ||
            (emailUsuario.indexOf("@") === -1) || (cpfUsuario === "") || (rgUsuario === "") || (dataNascimentoUsuario === "") ||
            (enderecoUsuario === "") || (estadoUsuario === "") || (cidadeUsuario === "") || (bairroUsuario === "") ||
            (sexoUsuario === "") || (cepUsuario === "") || (telefoneUsuario === "")) {
        if (tipoConta > 1) {
            if (idAcademia === "") {
                $('#dados-obrigatorios').modal('show');
            } else {
                $('#dados-obrigatorios').modal('show');
            }
        } else {
            $('#dados-obrigatorios').modal('show');
        }
    } else if (senhaUsuario !== confirmarSenha) {
        $('#senhas-diferentes').modal('show');
    } else {
        if (msnCPF === "CPF válido!") {
            verificarCpfExiste(cpfUsuario, loginUsuario, idUsuario);
        } else if (idUsuario !== "novo") {
            verificarCpfExiste(cpfUsuario, loginUsuario, idUsuario);
        }
    }
}

// FUNÇÃO PARA ATIVAR O MODAL EXCLUIR INSTRUTOR
function modalExcluirUsuario(idUsuario) {
    $('#excluir').modal('show');
    document.getElementById('idUsuario').value = idUsuario;
}

// FUNÇÃO PARA BLOQUEAR OU DESBLOQUEAR UM USUÁRIO
function modalDesBloquearUsuario(obj, idUsuario, statusConta) {
    var dados = 'idUsuario=' + idUsuario;
    // SE O STATUS CONTA FOR TRUE - USUÁRIO ATIVO - BLOQUEAR USUÁRIO
    if (statusConta) {
        $('#bloquear').modal('show');
        $('#bloqueia').click(function () {
            bloquearUsuario(dados);
        });
        $('#nao-bloqueia').click(function () {
            obj.checked = false;
        });
    }
    // SE O STATUS CONTA FOR FALSE - USUÁRIO BLOQUEADO - DESBLOQUEAR USUÁRIO
    else {
        $('#desbloquear').modal('show');
        $('#desbloqueia').click(function () {
            desbloquearUsuario(dados);
        });
        $('#nao-desbloqueia').click(function () {
            obj.checked = true;
        });
    }
}

// FUNÇÃO PARA PESQUISAR OS USUÁRIOS CADASTRADOS
function pesquisarUsuario() {
    var entrada, filtro, i;
    var tabelaUsuariosAtivos, trA, tdA;
    var tabelaUsuariosBloqueados, trB, tdB;

    entrada = document.getElementById('pesquisarUsuario');
    filtro = entrada.value.toUpperCase();

    // PESQUISA OS USUÁRIOS ATIVOS NA TABELA
    tabelaUsuariosAtivos = document.getElementById('tabelaUsuariosAtivos');
    trA = tabelaUsuariosAtivos.getElementsByTagName('tr');
    for (i = 0; i < trA.length; i++) {
        tdA = trA[i].getElementsByTagName('td')[0];
        if (tdA) {
            if (tdA.innerHTML.toUpperCase().indexOf(filtro) > -1) {
                trA[i].style.display = "";
            } else {
                trA[i].style.display = "none";
            }
        }
    }

    // PESQUISA OS USUÁRIOS BLOQUEADOS NA TABELA
    tabelaUsuariosBloqueados = document.getElementById('tabelaUsuariosBloqueados');
    trB = tabelaUsuariosBloqueados.getElementsByTagName('tr');
    for (i = 0; i < trB.length; i++) {
        tdB = trB[i].getElementsByTagName('td')[0];
        if (tdB) {
            if (tdB.innerHTML.toUpperCase().indexOf(filtro) > -1) {
                trB[i].style.display = "";
            } else {
                trB[i].style.display = "none";
            }
        }
    }
}

// FUNÇÃO PARA PESQUISAR OS USUÁRIOS CADASTRADOS
function pesquisarEqualTech() {
    var entrada, filtro, i;
    var tabelaEqualTech, trA, tdA;

    entrada = document.getElementById('pesquisarEqualTech');
    filtro = entrada.value.toUpperCase();

    // PESQUISA OS USUÁRIOS ATIVOS NA TABELA
    tabelaEqualTech = document.getElementById('tabelaEqualTech');
    trA = tabelaEqualTech.getElementsByTagName('tr');
    for (i = 0; i < trA.length; i++) {
        tdA = trA[i].getElementsByTagName('td')[0];
        if (tdA) {
            if (tdA.innerHTML.toUpperCase().indexOf(filtro) > -1) {
                trA[i].style.display = "";
            } else {
                trA[i].style.display = "none";
            }
        }
    }
}

// FUNÇÃO PARA CONTROLE DOS PLANOS E PACOTES DA EMPRESA
// CONTROLANDO OS INPUTS RADIOS PARA QUE O USUÁRIO ESCOLHA CORRETAMENTE AS OPÇÕES
function verificarSexoUsuario() {
    // SE O SEXO FOR FEMININO
    if (document.getElementById('sexoFeminino').checked) {
        document.getElementById('sexoUsuario').value = 'Feminino';
    }
    // SE O SEXO FOR MASCULINO
    else if (document.getElementById('sexoMasculino').checked) {
        document.getElementById('sexoUsuario').value = 'Masculino';
    }
    // SE O SEXO FOR OUTROS
    else if (document.getElementById('sexoOutros').checked) {
        document.getElementById('sexoUsuario').value = 'Outros';
    }
}

// FUNÇÃO PARA VERIFICAR SE O CREF DO USUÁRIO FOI INFORMADO
function verificarCREF() {
    var crefAuxUsuario = $('#crefAuxUsuario').val();
    // SE O USUÁRIO TEM CREF
    if (document.getElementById("simCREF").checked) {
        document.getElementById('crefResposta').value = "Sim";
        document.getElementById('crefUsuario').value = crefAuxUsuario;
        document.getElementById('naoCREF').checked = false;
        document.getElementById('crefUsuario').disabled = false;
    }
    // SE O USUÁRIO NÃO TEM CREF
    else if (document.getElementById("naoCREF").checked) {
        document.getElementById('crefResposta').value = "Não";
        document.getElementById('crefUsuario').value = "";
        document.getElementById('simCREF').checked = false;
        document.getElementById('crefUsuario').disabled = true;
    }
}

// FUNÇÃO PARA VERIFICAR OS DADOS SELECIONADOS PARA GERAR O RELATÓRIO
function verificarDadosRelatorio() {
    var tipoConta = $('#tipoConta').val();
    var statusConta = $('#statusConta').val();

    if ((tipoConta === "") || (statusConta === "")) {
        $('#dados-obrigatorios').modal('show');
    } else {
        gerarRelatorio();
    }
}
