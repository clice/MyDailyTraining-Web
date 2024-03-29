<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class AlunoModel extends CI_Model {

    // FUNÇÃO PARA INSERIR OS DADOS PASSADOS PELO USUÁRIO NO BANCO
    public function mCadastrarAluno($dadosAluno) {
        return $this->db->insert('alunos', $dadosAluno);
    }

    // FUNÇÃO PARA ATUALIZAR OS DADOS PASSADOS PELO USUÁRIO NO BANCO
    public function mEditarAluno($dadosAluno) {
        $this->db->where('idAluno', $dadosAluno['idAluno']);
        return $this->db->update('alunos', $dadosAluno);
    }

    // FUNÇÃO PARA EXCLUIR OS DADOS DO ALUNO DO BANCO
    public function mExcluirAluno($idAluno) {
        $this->db->where('idAluno', $idAluno);
        return $this->db->delete('alunos');
    }

    // FUNÇÃO PARA BLOQUEAR O ALUNO
    public function mBloquearAluno($idAluno) {
        $dadosAluno['statusAluno'] = false;
        $this->db->where('idAluno', $idAluno);
        return $this->db->update('alunos', $dadosAluno);
    }

    // FUNÇÃO PARA DESBLOQUEAR O ALUNO
    public function mDesbloquearAluno($idAluno) {
        $dadosAluno['statusAluno'] = true;
        $this->db->where('idAluno', $idAluno);
        return $this->db->update('alunos', $dadosAluno);
    }

    public function mVisualizarPerfilAluno($idAluno) {
        $this->db->select('*');
        $this->db->from('alunos');
        $this->db->where('md5(idAluno)', $idAluno);
        return $this->db->get()->result();
    }

    // FUNÇÃO PARA BUSCAR OS ALUNOS DESBLOQUEADOS NO BANCO DE DADOS
    public function mListarAlunosAtivos() {
        $this->db->select('idAluno, nomeAluno, enderecoAluno, telefoneAluno, cpfAluno, diaPagamentoAluno');
        $this->db->from('alunos');
        $this->db->where('idAcademia', $this->session->userdata('idAcademia'));
        $this->db->where('statusAluno', true);
        return $this->db->get()->result();
    }

    // FUNÇÃO PARA BUSCAR OS ALUNOS BLOQUEADOS NO BANCO DE DADOS
    public function mListarAlunosBloqueados() {
        $this->db->select('idAluno, nomeAluno, enderecoAluno, telefoneAluno, cpfAluno, diaPagamentoAluno');
        $this->db->from('alunos');
        $this->db->where('idAcademia', $this->session->userdata('idAcademia'));
        $this->db->where('statusAluno', false);
        return $this->db->get()->result();
    }

    // FUNÇÃO PARA BUSCAR TODOS ALUNOS NO BANCO DE DADOS
    public function mListarTodosAlunos() {
        $this->db->select('idAluno, nomeAluno, enderecoAluno, telefoneAluno, cpfAluno, diaPagamentoAluno, statusAluno');
        $this->db->from('alunos');
        $this->db->where('idAcademia', $this->session->userdata('idAcademia'));
        return $this->db->get()->result();
    }

    // FUNÇÃO PARA CONTAR A QUANTIDADE TOTAL DE ALUNOS DA ACADEMIA
    public function mQtdAlunos($idAcademia) {
        $this->db->where('md5(idAcademia)', $idAcademia);
        return $this->db->get('alunos')->result();
    }

    // FUNÇÃO PARA CONTAR A QUANTIDADE TOTAL DE ALUNOS DESBLOQUEADOS DA ACADEMIA
    public function mQtdAlunosAtivos($idAcademia) {
        if ($idAcademia > 0) {
            $this->db->where('idAcademia', $idAcademia);
        }
        $this->db->where('statusAluno', true);
        return $this->db->get('alunos')->result();
    }

    // FUNÇÃO PARA CONTAR A QUANTIDADE TOTAL DE ALUNOS BLOQUEADOS DA ACADEMIA
    public function mQtdAlunosBloqueados($idAcademia) {
        if ($idAcademia > 0) {
            $this->db->where('idAcademia', $idAcademia);
        }
        $this->db->where('statusAluno', false);
        return $this->db->get('alunos')->result();
    }

    // FUNÇÃO PARA VERIFICAR SE O CPF PASSADO JÁ FOI CADASTRADO
    public function mVerificarCPF($cpfAluno) {
        $this->db->from('alunos');
        $this->db->where('cpfAluno', $cpfAluno);
        return $this->db->get()->result();
    }

}
