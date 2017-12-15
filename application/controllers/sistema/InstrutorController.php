<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class InstrutorController extends CI_Controller {

    public function index() {
        $dados['nomePagina'] = 'Lista de Instrutores';

        $this->load->view('sistema/templates/html-header', $dados);
        $this->load->view('sistema/templates/header');
        $this->load->view('sistema/templates/side-menu');
        $this->load->view('sistema/telas/listas/lista-instrutores');
        $this->load->view('sistema/templates/footer');
        $this->load->view('sistema/templates/html-footer');
    }

    public function viewCadastrarEditarInstrutor() {
        $dados['nomePagina'] = 'Cadastrar Instrutor';

        $this->load->view('sistema/templates/html-header', $dados);
        $this->load->view('sistema/templates/header');
        $this->load->view('sistema/templates/side-menu');
        $this->load->view('sistema/telas/cadastros/cadastrar-editar-instrutor');
        $this->load->view('sistema/templates/footer');
        $this->load->view('sistema/templates/html-footer');
    }

}