<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class AlunoController extends CI_Controller {

    // CONSTRUTOR DO ALUNO CONTROLLER
    public function __construct() {
        parent::__construct();

        // VERIFICANDO SE TEM ALGUM USUÁRIO LOGADO PARA PERMITIR O ACESSO
        if ($this->session->userdata('logado') == true) {
            $this->load->model('AlunoModel');
            $this->load->model('TreinoModel');
            $this->load->model('ExercicioTreinoModel');
            $this->load->model('AcademiaModel');
            $this->load->model('InstrutorModel');
        } else {
            redirect(base_url('404_override'));
        }
    }

    // FUNÇÃO CONTROLLER DE CARREGAMENTO DA VIEW LISTA-ALUNOS.PHP
    public function index() {
        $dadosAluno['nomePagina'] = "Lista de Alunos";
        $dadosAluno['urlPagina'] = "lista-alunos";

        // PEGANDO OS DADOS DOS ALUNOS ATIVOS E BLOQUEADOS
        $dadosAluno['alunosAtivos'] = $this->AlunoModel->mListarAlunosAtivos();
        $dadosAluno['alunosBloqueados'] = $this->AlunoModel->mListarAlunosBloqueados();

        if ($this->session->userdata('tipoConta') == 4) {
            $dadosAluno['chamadosInstrutor'] = $this->InstrutorModel->mListarChamadosInstrutores($this->session->userdata('idUsuario'));
        }

        // CARREGANDO AS VIEWS DA PÁGINA
        $this->load->view('sistema/templates/html-header', $dadosAluno);
        $this->load->view('sistema/templates/header');
        $this->load->view('sistema/templates/side-menu');
        $this->load->view('sistema/telas/listas/lista-alunos');
        $this->load->view('sistema/templates/footer');
        $this->load->view('sistema/templates/aluno/modals-aluno');
        $this->load->view('sistema/templates/aluno/js-aluno');
        $this->load->view('sistema/templates/html-footer');
        $this->load->view('sistema/templates/html-footer-alunos');
    }

    // FUNÇÃO CONTROLLER DE CARREGAMENTO DA VIEW CADASTRAR-EDITAR-ALUNO.PHP
    public function vCadastrarAluno($idAluno) {
        $dadosAluno['idAluno'] = "novo";
        $dadosAluno['nomePagina'] = "Cadastrar Aluno";
        $dadosAluno['idAcademia'] = $this->session->userdata('idAcademia');
        $dadosAluno['loginAluno'] = "";
        $dadosAluno['senhaAluno'] = "";
        $dadosAluno['sexoAluno'] = "";
        $dadosAluno['objetivoAluno'] = "";
        $dadosAluno['diasTreinoAluno'] = "";
        $dadosAluno['diaValidadeExame'] = "";
        $dadosAluno['estadoAluno'] = "";
        $dadosAluno['diaPagamentoAluno'] = "";
        $dadosAluno['statusAluno'] = true;

        $dadosAluno['voltarPara'] = 'lista-alunos';

        if ($this->session->userdata('tipoConta') == 4) {
            $dadosAluno['chamadosInstrutor'] = $this->InstrutorModel->mListarChamadosInstrutores($this->session->userdata('idUsuario'));
        }

        // CARREGANDO AS VIEWS DA PÁGINA
        $this->load->view('sistema/templates/html-header', $dadosAluno);
        $this->load->view('sistema/templates/header');
        $this->load->view('sistema/templates/side-menu');
        $this->load->view('sistema/telas/cadastros/cadastrar-editar-aluno');
        $this->load->view('sistema/templates/footer');
        $this->load->view('sistema/templates/html-footer');
        $this->load->view('sistema/templates/html-footer-cadastros');
        $this->load->view('sistema/templates/html-footer-alunos');
    }

    // FUNÇÃO CONTROLLER DE CARREGAMENTO DA VIEW CADASTRAR-EDITAR-ALUNO.PHP
    public function vEditarAluno($idAluno, $voltarPara) {
        $dadosAluno = get_object_vars($this->AlunoModel->mVisualizarPerfilAluno($idAluno)[0]);
        $dadosAluno['nomePagina'] = "Editar Aluno";

        if ($voltarPara == "perfil-aluno") {
            $dadosAluno['voltarPara'] = $voltarPara . '/' . $idAluno;
        } else {
            $dadosAluno['voltarPara'] = $voltarPara;
        }

        if ($this->session->userdata('tipoConta') == 4) {
            $dadosAluno['chamadosInstrutor'] = $this->InstrutorModel->mListarChamadosInstrutores($this->session->userdata('idUsuario'));
        }

        // CARREGANDO AS VIEWS DA PÁGINA
        $this->load->view('sistema/templates/html-header', $dadosAluno);
        $this->load->view('sistema/templates/header');
        $this->load->view('sistema/templates/side-menu');
        $this->load->view('sistema/telas/cadastros/cadastrar-editar-aluno');
        $this->load->view('sistema/templates/footer');
        $this->load->view('sistema/templates/html-footer');
        $this->load->view('sistema/templates/html-footer-cadastros');
        $this->load->view('sistema/templates/html-footer-alunos');
    }

    public function vImprimirFichaTreino($idAluno) {
        $dadosAluno['perfilAluno'] = $this->AlunoModel->mVisualizarPerfilAluno($idAluno);
        $dadosAluno['treinosAluno'] = $this->TreinoModel->mEncontrarTreinosAluno($idAluno);
        $dadosAluno['exerciciosTreino'] = $this->ExercicioTreinoModel->mVisualizarExerciciosTreino($idAluno);

        $i = 0;
        foreach ($dadosAluno['treinosAluno'] as $treinosAluno) {
            for ($j = 0; $j < count($this->ExercicioTreinoModel->mVisualizarExerciciosTreino(md5($treinosAluno->idTreino))); $j++) {
                $dadosAluno['exerciciosTreinos'][$i][$j] = get_object_vars($this->ExercicioTreinoModel->mVisualizarExerciciosTreino(md5($treinosAluno->idTreino))[$j]);
            }
            $i++;
        }

        $dadosAluno['nomeAluno'] = $dadosAluno['perfilAluno'][0]->nomeAluno;

        $this->load->view('sistema/templates/html-header', $dadosAluno);
        $this->load->library('Pdf');
        $this->pdf->load_view('sistema/telas/imprimir-ficha-treino');
        $this->pdf->set_paper('letter', 'landscape');
        $this->pdf->render();
        $this->pdf->stream("Ficha de Treino - " . $dadosAluno['perfilAluno'][0]->nomeAluno . ".pdf", array("Attachment" => false));
    }

    // FUNÇÃO DE CARREGAMENTO DA VIEW PERFIL-ALUNO.PHP
    public function vPerfilAluno($idAluno) {
        $dadosAluno['nomePagina'] = "Perfil do Aluno";
        $dadosAluno['urlPagina'] = "perfil-aluno/" . $idAluno;
        $dadosAluno['perfilAluno'] = $this->AlunoModel->mVisualizarPerfilAluno($idAluno);
        $dadosAluno['treinosAluno'] = $this->TreinoModel->mEncontrarTreinosAluno($idAluno);
        $dadosAluno['exerciciosTreino'] = $this->ExercicioTreinoModel->mVisualizarExerciciosTreino($idAluno);
        $dadosAluno['idAluno'] = $dadosAluno['perfilAluno'][0]->idAluno;

        $i = 0;
        foreach ($dadosAluno['treinosAluno'] as $treinosAluno) {
            for ($j = 0; $j < count($this->ExercicioTreinoModel->mVisualizarExerciciosTreino(md5($treinosAluno->idTreino))); $j++) {
                $dadosAluno['exerciciosTreinos'][$i][$j] = get_object_vars($this->ExercicioTreinoModel->mVisualizarExerciciosTreino(md5($treinosAluno->idTreino))[$j]);
            }
            $i++;
        }

        if ($this->session->userdata('tipoConta') == 4) {
            $dadosAluno['chamadosInstrutor'] = $this->InstrutorModel->mListarChamadosInstrutores($this->session->userdata('idUsuario'));
        }

        // CARREGANDO AS VIEWS DA PÁGINA
        $this->load->view('sistema/templates/html-header', $dadosAluno);
        $this->load->view('sistema/templates/header');
        $this->load->view('sistema/templates/side-menu');
        $this->load->view('sistema/templates/aluno/modals-aluno');
        $this->load->view('sistema/templates/treino/modals-treino');
        $this->load->view('sistema/templates/treino/js-treino');
        $this->load->view('sistema/templates/aluno/js-aluno');
        $this->load->view('sistema/telas/perfis/perfil-aluno');
        $this->load->view('sistema/templates/footer');
        $this->load->view('sistema/templates/html-footer');
        $this->load->view('sistema/templates/html-footer-alunos');
    }

    // FUNÇÃO CONTROLLER PARA CADASTRAR/EDITAR ALUNO
    public function cCadastrarEditarAluno() {
        // PEGANDO OS VALORES PASSADOS PELO CADASTRAR-EDITAR-ALUNO.PHP
        $dadosAluno = array(
            'idAluno' => $this->input->post('idAluno'),
            'idAcademia' => $this->input->post('idAcademia'),
            'nomeAluno' => $this->input->post('nomeAluno'),
            'dataNascimentoAluno' => $this->input->post('dataNascimentoAluno'),
            'cpfAluno' => $this->input->post('cpfUsuario'),
            'rgAluno' => $this->input->post('rgAluno'),
            'emailAluno' => $this->input->post('emailAluno'),
            'sexoAluno' => $this->input->post('sexoAluno'),
            'loginAluno' => base64_encode($this->input->post('loginAluno')),
            'senhaAluno' => base64_encode($this->input->post('senhaAluno')),
            'telefoneAluno' => $this->input->post('telefoneUsuario'),
            'enderecoAluno' => $this->input->post('enderecoAluno'),
            'estadoAluno' => $this->input->post('estadoAluno'),
            'cidadeAluno' => $this->input->post('cidadeAluno'),
            'bairroAluno' => $this->input->post('bairroAluno'),
            'cepAluno' => $this->input->post('cepAluno'),
            'objetivoAluno' => $this->input->post('objetivoAluno'),
            'diaValidadeExame' => $this->input->post('diaValidadeExame'),
            'nomeResponsavelAluno' => $this->input->post('nomeResponsavelAluno'),
            'telefoneResponsavelAluno' => $this->input->post('telefoneResponsavelAluno'),
            'statusAluno' => $this->input->post('statusAluno'),
            'cirurgias' => $this->input->post('cirurgiasAluno'),
            'medicamentos' => $this->input->post('medicamentosAluno'),
            'doencasFamiliares' => $this->input->post('doencasFamiliaresAluno'),
            'diaPagamentoAluno' => $this->input->post('diaPagamentoAluno')
        );

        $diasTreino = $this->input->post('diasTreinoAluno');
        $diasTreinoAluno = implode('|', $diasTreino);
        $dadosAluno['idadeAluno'] = calcularIdade($dadosAluno['dataNascimentoAluno']);
        $dadosAluno['diasTreinoAluno'] = $diasTreinoAluno;

        $dadosAcademia = get_object_vars($this->AcademiaModel->mQtdLicencasTotaisEUsadas($dadosAluno['idAcademia'])[0]);

        // SE O IDALUNO FOR NOVO, CADASTRAR UM NOVO ALUNO
        if ($dadosAluno['idAluno'] == "novo") {
            if ($dadosAcademia['qtdTotalLicencas'] > $dadosAcademia['qtdLicencasUsadas']) {
                $dadosAcademia['qtdLicencasUsadas'] += 1;
                $this->AcademiaModel->mEditarAcademia($dadosAcademia);
                if ($this->AlunoModel->mCadastrarAluno($dadosAluno)) {
                    $resposta = array('success' => true);
                } else {
                    $resposta = array('success' => false);
                }
            } else {
                $resposta = array('success' => false, 'licencas' => true);
            }
        }
        // SE O IDALUNO JÁ EXISTE, ALTERAR OS DADOS DO ALUNO
        else {
            if ($this->AlunoModel->mEditarAluno($dadosAluno)) {
                $resposta = array('success' => true);
            } else {
                $resposta = array('success' => false);
            }
        }
        echo json_encode($resposta);
    }

    // FUNÇÃO CONTROLLER PARA EXCLUIR ALUNO
    public function cExcluirAluno() {
        $idAluno = $this->input->post('idAluno');

        if ($this->AlunoModel->mExcluirAluno($idAluno)) {
            $resposta = array('success' => true);
        } else {
            $resposta = array('success' => false);
        }

        echo json_encode($resposta);
    }

    // FUNÇÃO CONTROLLER PARA BLOQUEAR ALUNO
    public function cBloquearAluno() {
        $idAluno = $this->input->post('idAluno');

        if ($this->AlunoModel->mBloquearAluno($idAluno)) {
            $resposta = array('success' => true);
        } else {
            $resposta = array('success' => false);
        }

        echo json_encode($resposta);
    }

    // FUNÇÃO CONTROLLER PARA DESBLOQUEAR ALUNO
    public function cDesbloquearAluno() {
        $idAluno = $this->input->post('idAluno');

        if ($this->AlunoModel->mDesbloquearAluno($idAluno)) {
            $resposta = array('success' => true);
        } else {
            $resposta = array('success' => false);
        }

        echo json_encode($resposta);
    }

    // FUNÇÃO CONTROLLER PARA VISUALIZAR OS DADOS DO ALUNO
    public function cVisualizarPerfilAluno() {
        $idAluno = $this->input->post('idAluno');

        if ($this->AlunoModel->mVisualizarPerfilAluno($idAluno)) {
            $resposta = array('success' => true);
        } else {
            $resposta = array('success' => false);
        }

        echo json_encode($resposta);
    }

    // FUNÇÃO CONTROLLER PARA VERIFICAR O CPF
    public function cVerificarCPF() {
        $cpfAluno = $this->input->post('cpfAluno');

        $dadosAluno = $this->AlunoModel->mVerificarCPF($cpfAluno);

        if (count($dadosAluno) >= 1) {
            $dadosAluno = get_object_vars($this->AlunoModel->mVerificarCPF($cpfAluno)[0]);
            $resposta = array('existe' => true, 'id' => $dadosAluno['idAluno']);
        } else {
            $resposta = array('existe' => false);
        }

        echo json_encode($resposta);
    }

}
