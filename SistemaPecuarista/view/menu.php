
<body onload="myFunction()" style="margin:0;">

    <div id="loader"></div>


    <!-- <li><a href="index.php">Início</a></li> -->
    <!--
    <li><a href="?classe=AnimalController&acao=form_insercao">Animais</a></li>
    <li><a href="?classe=RacaController&acao=form_insercao">Raças</a></li>
    <li><a href="?classe=LoteController&acao=form_insercao">Lotes</a></li>
    <li><a href="?classe=VacinacaoController&acao=form_insercao">Vacinacão</a></li>
    <li><a href="?classe=VacinaController&acao=form_insercao">Vacinas</a></li>
    <li><a href="?classe=ReceitaController&acao=form_insercao">Receitas</a></li>
    <li><a href="?classe=ClienteController&acao=form_insercao">Clientes</a></li>
    <li><a href="?classe=DespesaController&acao=form_insercao">Despesas</a></li>
    <li><a href="?classe=FornecedorController&acao=form_insercao">Fornecedor</a></li>
    <li><a href="?classe=FaturamentoController&acao=listar">Faturamento</a></li>
    <li><a href="?classe=UsuarioController&acao=deslogar">Sair</a></li>
    -->

    <!-- SIDEBAR -->
    <div id="wrapper">

        <!-- Sidebar -->
        <div id="sidebar-wrapper" class="blue-grey darken-4">
            <ul class="sidebar-nav">
                <li>
                    <div id="info-user-menu">
                        <img src="assets/imagens/logo.jpg" alt="" class="circle center" id="perfil-sidebar">
                        <h6 class="white-text center" id="user-name-sidebar">Menu</h6>
                    </div>
                </li>

                <li class="indent">
                    <a href="javascript:void(0)" class="master-menu">
                        Gestão de Animais
                        <i class="material-icons right">add</i>
                    </a>
                    <ul class="child-menu blue-grey darken-3">
                        <li>
                            <a href="?classe=AnimalController&acao=form_insercao">
                                <span>Animais</span>
                                <i class="material-icons right">add_circle</i>
                            </a>
                        </li>
                        <li>
                            <a href="?classe=RacaController&acao=form_insercao">
                                <span>Raças</span>
                                <i class="material-icons right">add_circle</i>
                            </a>
                        </li>
                        <li>
                            <a href="?classe=LoteController&acao=form_insercao">
                                <span>Lotes</span>
                                <i class="material-icons right">add_circle</i>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="indent">
                    <a href="javascript:void(0)" class="master-menu">
                        Gestão de Vacinas
                        <i class="material-icons right">add</i>
                    </a>
                    <ul class="child-menu blue-grey darken-3">
                        <li>
                            <a href="?classe=VacinacaoController&acao=form_insercao">
                                <span>Vacinação</span>
                                <i class="material-icons right">add_circle</i>
                            </a>
                        </li>
                        <li>
                            <a href="?classe=VacinaController&acao=form_insercao">
                                <span>Vacinas</span>
                                <i class="material-icons right">add_circle</i>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="indent">
                    <a href="javascript:void(0)" class="master-menu">
                        Receitas/Despesas
                        <i class="material-icons right">add</i>
                    </a>
                    <ul class="child-menu blue-grey darken-3">
                        <li>
                            <a href="?classe=ReceitaController&acao=form_insercao">
                                <span>Receitas</span>
                                <i class="material-icons right">add_circle</i>
                            </a>
                        </li>
                        <li>
                            <a href="?classe=DespesaController&acao=form_insercao">
                                <span>Despesas</span>
                                <i class="material-icons right">add_circle</i>
                            </a>
                        </li>
                        <li>
                            <a href="?classe=ClienteController&acao=form_insercao">
                                <span>Clientes</span>
                                <i class="material-icons right">add_circle</i>
                            </a>
                        </li>
                        <li>
                            <a href="?classe=FornecedorController&acao=form_insercao">
                                <span>Fornecedores</span>
                                <i class="material-icons right">add_circle</i>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="indent">
                    <a href="?classe=FaturamentoController&acao=listar">
                    Faturamento
                    <i class="material-icons right">account_balance</i>
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <!-- HEADER -->
    <header class="navbar-fixed">
        <nav class="blue darken-2">
            <div class="nav-wrapper">
                <ul>
                    <li>
                        <a href="javascript:void(0)" id="btn-sidebar">
                            <i class="material-icons">dehaze</i>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)" id="header-logo">SISTEMA BRAVO</a>
                    </li>
                </ul>
                <ul class="right">
                    <li>
                        <a href="?classe=UsuarioController&acao=deslogar">
                            <i class="material-icons left">directions_run</i>
                            <!--<span class="new badge amber">Sair</span> -->
                        </a>
                    </li>

                </ul>
        </nav>


        <!--
        
                        <a href="#!" class="brand-logo"><img src="assets/imagens/logo.png"/></a>
                        <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                        <ul class="right hide-on-med-and-down">
                            <li>
                                <a href="javascript:void(0)" id="btn-dropdown-animais" data-target='dropdown-animais' data-actives='dropdown-animais'>
                                    <span>Animais</span>
                                    <i class="material-icons right">arrow_drop_down</i>
                                </a>
        
                                
                                <ul id='dropdown-animais' class='dropdown-content'>
                                    <li><a href="#!">Raças</a></li>
                                    <li><a href="#!">Lotes</a></li>
                                    <li class="divider" tabindex="-1"></li>
                                    <li><a href="?classe=AnimalController&acao=form_insercao">Animais</a></li>
                                    <li><a href="#!"><i class="material-icons">view_module</i>four</a></li>
                                    <li><a href="#!"><i class="material-icons">cloud</i>five</a></li>
                                </ul>
        
                            </li>
                            <li><a href="?classe=RacaController&acao=form_insercao">Raças</a></li>
                            <li><a href="?classe=LoteController&acao=form_insercao">Lotes</a></li>
                            <li><a href="?classe=VacinacaoController&acao=form_insercao">Vacinação</a></li>
                            <li><a href="?classe=VacinaController&acao=form_insercao">Vacinas</a></li>
                            <li><a href="?classe=ReceitaController&acao=form_insercao">Receitas</a></li>
                            <li><a href="?classe=ClienteController&acao=form_insercao">Clientes</a></li>
                            <li><a href="?classe=DespesaController&acao=form_insercao">Despesas</a></li>
                            <li><a href="?classe=FornecedorController&acao=form_insercao">Fornecedores</a></li>
                            <li><a href="?classe=FaturamentoController&acao=listar">Faturamento</a></li>
                            <li><a href="?classe=UsuarioController&acao=deslogar">Sair</a></li>
                        </ul>
                    </div>
        -->
    </header>
    <script src="assets/js/app.js"></script>
    <script>
    var myVar;

    function myFunction() {
        myVar = setTimeout(showPage, 1000);
    }

    function showPage() {
        document.getElementById("loader").style.display = "none";
        document.getElementById("myDiv").style.display = "block";
    }
    </script>