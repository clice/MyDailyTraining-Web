<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class AcademiaController extends CI_Controller {

    // CONSTRUTOR DO ACADEMIA CONTROLLER
    public function __construct() {
        parent::__construct();

        if ($this->session->userdata('logado') == true) {
            $this->load->model('AlunoModel');
            $this->load->model('AcademiaModel');
            $this->load->model('PlanoPacoteModel');
        } else {
            redirect(base_url('404_override'));
        }
    }

    // FUNÇÃO DE CARREGAMENTO DA VIEW LISTA-ACADEMIAS.PHP
    public function index() {
        $dadosAcademia['nomePagina'] = "Lista de Academias";
        $dadosAcademia['urlPagina'] = "lista-academias";
        $dadosAcademia['academiasAtivas'] = $this->AcademiaModel->mListarAcademiasAtivas();
        $dadosAcademia['academiasBloqueadas'] = $this->AcademiaModel->mListarAcademiasBloqueadas();

        $this->load->view('sistema/templates/html-header', $dadosAcademia);
        $this->load->view('sistema/templates/header');
        $this->load->view('sistema/templates/side-menu');
        $this->load->view('sistema/telas/listas/lista-academias');
        $this->load->view('sistema/templates/academia/modals-academia');
        $this->load->view('sistema/templates/academia/js-academia');
        $this->load->view('sistema/templates/footer');
        $this->load->view('sistema/templates/html-footer');
    }

    // FUNÇÃO DE CARREGAMENTO DA VIEW CADASTRAR-EDITAR-ACADEMIA.PHP
    public function vCadastrarEditarAcademia($idAcademia) {
        // SE UM ID ACADEMIA FOI PASSADO OU NÃO
        // PARA REALIZAR A EDIÇÃO DE DADOS DE UMA ACADEMIA
        if ($idAcademia != "novo") {
            $dados = get_object_vars($this->AcademiaModel->mVisualizarPerfilAcademia($idAcademia)[0]);
            $plano = get_object_vars($this->PlanoPacoteModel->mQtdLicencasPlano($dados['idPlano'])[0]);
            $pacote = get_object_vars($this->PlanoPacoteModel->mQtdLicencasPacote($dados['idPacote'])[0]);
            $dados['nomePagina'] = 'Editar Academia';
            $dados['licencasPlano'] = $plano['qtdLicencas'];
            $dados['licencasPacote'] = $pacote['qtdLicencas'];
        }
        // PARA REALIZAR O CADASTRO DE UMA ACADEMIA
        else {
            $dados['nomePagina'] = 'Cadastrar Academia';
            $dados['idPlano'] = 0;
            $dados['idPacote'] = 0;
            $dados['valorPago'] = 0;
            $dados['valorPlano'] = 0;
            $dados['valorTotal'] = 0;
            $dados['qtdParcelas'] = 0;
            $dados['valorPacote'] = 0;
            $dados['licencasPlano'] = 0;
            $dados['statusAcademia'] = 0;
            $dados['licencasPacote'] = 0;
            $dados['estadoAcademia'] = '';
            $dados['idAcademia'] = "novo";
            $dados['qtdTotalLicencas'] = 0;
            $dados['qtdLicencasUsadas'] = 0;
            $dados['mensalidadeAcademia'] = 0;
            $dados['diaPagamentoAcademia'] = 0;
        }

        if ($this->session->userdata('tipoConta') == 1) {
            $dados['voltarPagina'] = "lista-academias";
        } else {
            $dados['voltarPagina'] = "perfil-academia/" . md5($this->session->userdata('idAcademia'));
        }

        // CARREGANDO AS VIEWS PARA FORMAR A TELA DE CADASTRO/EDIÇÃO DA ACADEMIA
        $this->load->view('sistema/templates/html-header', $dados);
        $this->load->view('sistema/templates/header');
        $this->load->view('sistema/templates/side-menu');
        $this->load->view('sistema/telas/cadastros/cadastrar-editar-academia');
        $this->load->view('sistema/templates/footer');
        $this->load->view('sistema/templates/html-footer');
    }

    // FUNÇÃO DE CARREGAMENTO DA VIEW RELARORIO.PHP
    public function vRelatorio() {
        $dados['nomePagina'] = 'Relatório';
        $this->load->view('sistema/templates/html-header', $dados);
        $this->load->view('sistema/templates/header');
        $this->load->view('sistema/templates/side-menu');
        $this->load->view('sistema/telas/relatorio');
        $this->load->view('sistema/templates/footer');
        $this->load->view('sistema/templates/html-footer');
    }

    // FUNÇÃO DE CARREGAMENTO DA VIEW PERFIL ACADEMIA.PHP
    public function vPerfilAcademia($idAcademia) {
        $dados['nomePagina'] = "Perfil Academia";
        $dados['urlPagina'] = "perfil-academia/" . $idAcademia;
        $dados['perfilAcademia'] = $this->AcademiaModel->mVisualizarPerfilAcademia($idAcademia);
        $dados['qtdAlunos'] = count($this->AlunoModel->mQtdAlunos($idAcademia));

        if ($this->session->userdata('tipoConta') == 1) {
            $dados['voltarPagina'] = "lista-academias";
        } else {
            $dados['voltarPagina'] = "meus-dados";
        }

        $this->load->view('sistema/templates/html-header', $dados);
        $this->load->view('sistema/templates/header');
        $this->load->view('sistema/templates/side-menu');
        $this->load->view('sistema/telas/perfis/perfil-academia');
        $this->load->view('sistema/templates/academia/modals-academia');
        $this->load->view('sistema/templates/academia/js-academia');
        $this->load->view('sistema/templates/footer');
        $this->load->view('sistema/templates/html-footer');
    }

    // FUNÇÃO CONTROLLER PARA CADASTRAR/EDITAR ACADEMIA
    public function cCadastrarEditarAcademia() {
        // PEGANDO OS VALORES PASSADOS PELO CADASTRAR-EDITAR-ACADEMIA.PHP     
        $dadosAcademia = array(
            'idAcademia' => $this->input->post('idAcademia'),
            'idPlano' => $this->input->post('idPlano'),
            'idPacote' => $this->input->post('idPacote'),
            'nomeAcademia' => $this->input->post('nomeAcademia'),
            'cnpjAcademia' => $this->input->post('cnpjAcademia'),
            'enderecoAcademia' => $this->input->post('enderecoAcademia'),
            'estadoAcademia' => $this->input->post('estadoAcademia'),
            'cidadeAcademia' => $this->input->post('cidadeAcademia'),
            'bairroAcademia' => $this->input->post('bairroAcademia'),
            'cepAcademia' => $this->input->post('cepAcademia'),
            'telefoneAcademia' => $this->input->post('telefoneAcademia'),
            'nomeResponsavelAcademia' => $this->input->post('nomeResponsavelAcademia'),
            'emailAcademia' => $this->input->post('emailAcademia'),
            'mensalidadeAcademia' => $this->input->post('mensalidadeAcademia'),
            'statusAcademia' => false,
            'qtdTotalLicencas' => $this->input->post('qtdTotalLicencas'),
            'qtdLicencasUsadas' => 0,
            'valorTotal' => $this->input->post('valorTotal'),
            'valorPago' => 0,
            'qtdParcelas' => 12,
            'diaPagamentoAcademia' => $this->input->post('diaPagamentoAcademia')
        );

        // SE O ID ACADEMIA FOR NOVO, CADASTRAR UMA NOVA ACADEMIA
        if ($dadosAcademia['idAcademia'] == "novo") {
            if ($this->AcademiaModel->mCadastrarAcademia($dadosAcademia)) {
                $resposta = array('success' => true);
            } else {
                $resposta = array('success' => false);
            }
        }
        // SE O ID ACADEMIA JÁ EXISTE, ALTERAR OS DADOS DA ACADEMIA
        else {
            if ($this->AcademiaModel->mEditarAcademia($dadosAcademia)) {
                $resposta = array('success' => true);
            } else {
                $resposta = array('success' => false);
            }
        }

        echo json_encode($resposta);
    }

    // FUNÇÃO CONTROLLER PARA EXCLUIR ACADEMIA
    public function cExcluirAcademia() {
        $idAcademia = $this->input->post('idAcademia');

        if ($this->AcademiaModel->mExcluirTodosAlunos($idAcademia)) {
            if ($this->AcademiaModel->mExcluirTodosUsuarios($idAcademia)) {
                if ($this->AcademiaModel->mExcluirAcademia($idAcademia)) {
                    $resposta = array('success' => true);
                } else {
                    $resposta = array('success' => false);
                }
            } else {
                $resposta = array('success' => false);
            }
        } else {
            $resposta = array('success' => false);
        }

        echo json_encode($resposta);
    }

    // FUNÇÃO CONTROLLER PARA BLOQUEAR ACADEMIA
    public function cBloquearAcademia() {
        $idAcademia = $this->input->post('idAcademia');

        if ($this->AcademiaModel->mBloquearAcademia($idAcademia)) {
            $resposta = array('success' => true);
        } else {
            $resposta = array('success' => false);
        }

        echo json_encode($resposta);
    }

    // FUNÇÃO CONTROLLER PARA DESBLOQUEAR ACADEMIA
    public function cDesbloquearAcademia() {
        $idAcademia = $this->input->post('idAcademia');

        if ($this->AcademiaModel->mDesbloquearAcademia($idAcademia)) {
            $resposta = array('success' => true);
        } else {
            $resposta = array('success' => false);
        }

        echo json_encode($resposta);
    }

    // FUNÇÃO CONTROLLER PARA VERIFICAR O CNPJ
    public function cVerificarCNPJ() {
        $cnpjAcademia = $this->input->post('cnpjAcademia');

        $dadosAcademia = get_object_vars($this->AcademiaModel->mVerificarCNPJ($cnpjAcademia)[0]);

        if (count($dadosAcademia) === 1) {
            $resposta = array('existe' => true, 'id' => $dadosAcademia['idAcademia']);
        } else {
            $resposta = array('existe' => false);
        }

        echo json_encode($resposta);
    }

}