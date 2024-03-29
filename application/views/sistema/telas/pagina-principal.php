
<div class="app-content content container-fluid">
    <div class="content-wrapper">
        <div class="content-body"><!-- Statistics -->
            <div class="row">
                <?php if ($this->session->userdata('tipoConta') == 1) { ?>
                    <div class="col-xl-3 col-lg-6 col-xs-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="media">
                                    <div class="p-2 text-xs-center bg-cyan bg-darken-2 media-left media-middle">
                                        <i class="icon-user5 font-large-2 white"></i>
                                    </div>
                                    <div class="p-2 bg-cyan white media-body">
                                        <h5>Academias</h5>
                                        <h5 class="text-bold-400"><?php echo 'Ativas: ' . $qtdAcademiasAtivas; ?></h5>
                                        <h5 class="text-bold-400"><?php echo 'Bloqueadas: ' . $qtdAcademiasBloqueadas; ?></h5>
                                        <h5 class="text-bold-400"><?php echo 'Total: ' . ($qtdAcademiasAtivas + $qtdAcademiasBloqueadas); ?></h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
                <div class="col-xl-3 col-lg-6 col-xs-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="media">
                                <div class="p-2 text-xs-center bg-deep-orange bg-darken-2 media-left media-middle">
                                    <i class="icon-profile font-large-2 white"></i>
                                </div>
                                <div class="p-2 bg-deep-orange white media-body">
                                    <h5>Administradores</h5>
                                    <h5 class="text-bold-400"><?php echo 'Ativos: ' . $qtdAdminAtivos; ?></h5>
                                    <h5 class="text-bold-400"><?php echo 'Bloqueados: ' . $qtdAdminBloqueados; ?></h5>
                                    <h5 class="text-bold-400"><?php echo 'Total: ' . ($qtdAdminAtivos + $qtdAdminBloqueados); ?></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-xs-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="media">
                                <div class="p-2 text-xs-center bg-blue bg-darken-2 media-left media-middle">
                                    <i class="icon-user1 font-large-2 white"></i>
                                </div>
                                <div class="p-2 bg-blue white media-body">
                                    <h5>Funcionários</h5>
                                    <h5 class="text-bold-400"><?php echo 'Ativos: ' . $qtdFuncAtivos; ?></h5>
                                    <h5 class="text-bold-400"><?php echo 'Bloqueados: ' . $qtdFuncBloqueados; ?></h5>
                                    <h5 class="text-bold-400"><?php echo 'Total: ' . ($qtdFuncAtivos + $qtdFuncBloqueados); ?></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-xs-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="media">
                                <div class="p-2 text-xs-center bg-teal bg-darken-2 media-left media-middle">
                                    <i class="icon-users font-large-2 white"></i>
                                </div>
                                <div class="p-2 bg-teal white media-body">
                                    <h5>Instrutores</h5>
                                    <h5 class="text-bold-400"><?php echo 'Ativos: ' . $qtdInstAtivos; ?></h5>
                                    <h5 class="text-bold-400"><?php echo 'Bloqueados: ' . $qtdInstBloqueados; ?></h5>
                                    <h5 class="text-bold-400"><?php echo 'Total: ' . ($qtdInstAtivos + $qtdInstBloqueados); ?></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-xs-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="media">
                                <div class="p-2 text-xs-center bg-pink bg-darken-2 media-left media-middle">
                                    <i class="icon-profile font-large-2 white"></i>
                                </div>
                                <div class="p-2 bg-pink white media-body">
                                    <h5>Alunos</h5>
                                    <h5 class="text-bold-400"><?php echo 'Ativos: ' . $qtdAlunosAtivos; ?></h5>
                                    <h5 class="text-bold-400"><?php echo 'Bloqueados: ' . $qtdAlunosBloqueados; ?></h5>
                                    <h5 class="text-bold-400"><?php echo 'Total: ' . ($qtdAlunosAtivos + $qtdAlunosBloqueados); ?></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <?php if ($this->session->userdata('tipoConta') != 1) { ?>
                <div class="content-body">
                    <section id="basic-form-layouts">
                        <div class="row match-height">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-body collapse in">
                                        <div class="card-block">
                                            <!-- TÍTULO DO PÁGINA -->
                                            <div class="content-header row">
                                                <div class="content-header-left col-md-6 col-xs-12 mb-1">
                                                    <h3 class="content-header-title">Aniversariantes do Mês:</h3>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="content-body">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <label><b>Funcionários:</b></label>
                                                        <ul>
                                                            <?php foreach ($aniversariantesFuncionariosMes as $aniversarianteFuncionarioMes) { ?>
                                                                <li><?php echo $aniversarianteFuncionarioMes->nomeUsuario; ?> - <?php echo formatarData($aniversarianteFuncionarioMes->dataNascimentoUsuario); ?></li>
                                                            <?php } ?>
                                                        </ul>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label><b>Alunos:</b></label>
                                                        <ul>
                                                            <?php foreach ($aniversariantesAlunosMes as $aniversarianteAluno) { ?>
                                                                <li><i class="fa fa-birthday-cake"></i> <?php echo $aniversarianteAluno->nomeAluno; ?> - <?php echo formatarData($aniversarianteAluno->dataNascimentoAluno); ?></li>
                                                                <?php } ?>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            <?php } ?>
        </div>
    </div>
</div>