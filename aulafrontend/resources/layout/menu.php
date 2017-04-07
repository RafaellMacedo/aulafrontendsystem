<?php
?>
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">Aula de Front-end</a>
            </div>
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li class="home active">
                        <a href="index.php"><i class="fa fa-fw fa-dashboard"></i>Home</a>
                    </li>
                    <li class="cadastro">
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-arrows-v"></i>Cadastro<i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo" class="collapse">
                            <li class="cadastro_aluno">
                                <a href="cadastro_aluno.php">Aluno</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="data/logout.php"><i class="fa fa-fw fa-dashboard"></i>Logout</a>
                    </li>
                </ul>
            </div>
