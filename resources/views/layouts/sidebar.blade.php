<div id="app">
                @php
                    $perfis = session()->get('usuario.perfis');
                    $perfil_adm = str_contains($perfis, '1');
                    $perfil_ger = str_contains($perfis, '2');
                    $perfil_aux = str_contains($perfis, '3');
                    $perfil_vol = !($perfil_adm || $perfil_ger || $perfil_aux);
                @endphp

                {{-- Controle de Acceso --}}
    <nav class="navbar navbar-expand-md navbar-light shadow-sm" style="background-color:#DDA0DD; font-family:tahoma; font-weight:bold;">
        <div class="container">                    
            <a class="navbar-brand" style="color: #fff;" href="{{ url('/login/valida') }}">Ângelus</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="dropdown" data-bs-target="#navbarNavDarkDropdown" aria-controls="navbarNavDarkDropdown" aria-expanded="false" aria-label="Toggle navigation">
                </button>                
            <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="" role="button" data-bs-toggle="dropdown" aria-expanded="false">Controle de acesso</a>
                        <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                            <li>
                                <a class="dropdown-item" href="/gerenciar-pessoa" class="waves-effect">Pessoa</a>
                            </li>
                        @if(!$perfil_vol)
                            <li>
                                <a class="dropdown-item" href="/gerenciar-entidade" class="waves-effect">Entidades</a>
                            </li>
                        @endif
                        @if($perfil_adm)
                            <li>
                                <a class="dropdown-item" href="/gerenciar-usuario" class="waves-effect">Usuário</a>
                            </li>
                        @endif
                        </ul>
                    </li>
                </ul>
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="" role="button" data-bs-toggle="dropdown" aria-expanded="false">Catálogo</a>
                    </a>
                        <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                            <li>
                                <a class="dropdown-item" href="/gerenciar-item-catalogo" class="waves-effect"><span>Item Catalogo</span></a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="/gerenciar-composicao" class="waves-effect"><span>Composição</span></a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="" role="button" data-bs-toggle="dropdown" aria-expanded="false">Configurações</a>
                        <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                        <li>
                            <a class="dropdown-item" href="/cad-cat-material" class="waves-effect"><span>Categoria Material</span></a>
                        </li>
                        @if($perfil_adm || $perfil_ger)
                            <li>
                                <a class="dropdown-item" href="/cad-tipo-estoque" class="waves-effect"><span>Tipo Estoque</span></a>
                            </li>
                        @endif
                        @if(!$perfil_vol)
                            <li>
                                <a class="dropdown-item" href="/deposito" class="waves-effect"><span>Depósito</span></a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="/localizador" class="waves-effect"><span>Localizador</span></a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="/cad-pagamento" class="waves-effect"><span>Pagamento</span></a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="/cad-valor-avariado" class="waves-effect"><span>Valor Item Avariado</span></a>
                            </li>
                        @endif
                            <li>
                                <a class="dropdown-item" href="/cad-embalagem" class="waves-effect"><span>Embalagem</span></a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="/unidade-medida" class="waves-effect"><span>Unidade de Medida</span></a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="/cad-tipo-material" class="waves-effect"><span>Tipo de Material</span></a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="/marca" class="waves-effect"><span>Marca</span></a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="/tamanho" class="waves-effect"><span>Tamanho</span></a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="/cor" class="waves-effect"><span>Cor</span></a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="/fase-etaria" class="waves-effect"><span>Fase Etária</span></a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="/cad-sexo" class="waves-effect"><span>Sexo</span></a>
                            </li>
                        @if(!$perfil_vol)
                            <li>
                                <a class="dropdown-item" href="/cad-sit-doacao" class="waves-effect"><span>Situação Doação </span></a>
                            </li>
                        @endif
                        </ul>
                    </li>
                </ul>
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="" role="button" data-bs-toggle="dropdown" aria-expanded="false">Cadastro Inicial</a>
                        <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                            <li>
                                <a class="dropdown-item" href="/gerenciar-cadastro-inicial" class="waves-effect">Cadastro Inicial</a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="" role="button" data-bs-toggle="dropdown" aria-expanded="false">Venda Material</a>
                        <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                            <li>
                                <a class="dropdown-item" href="/gerenciar-vendas" class="waves-effect"><span>Gerenciar vendas</span></a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="/registrar-venda" class="waves-effect"><span>Registrar Venda</span></a>
                            </li>
                            @if($perfil_ger)
                            <li>
                                <a class="dropdown-item" href="/gerenciar-devolucoes" class="waves-effect"><span>Gerenciar Devoluções</span></a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="/gerenciar-desconto" class="waves-effect"><span>Gerenciar Descontos</span></a>
                            </li>                        
                            @endif 
                        </ul>
                    </li>
                </ul>
                <ul class="navbar-nav">
                @if(!$perfil_vol)
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="" role="button" data-bs-toggle="dropdown" aria-expanded="false">Documentos</a>
                        <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">                        
                            <li>
                                <a class="dropdown-item" href="/inventarios" class="waves-effect"><span>Inventário de material</span></a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="/relatorio-vendas" class="waves-effect"><span>Relatório de Vendas</span></a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="/relatorio-entrada" class="waves-effect"><span>Relatório de Entradas</span></a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="/relatorio-saidas" class="waves-effect"><span>Relatório de Saídas</span></a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="/venda-valor" class="waves-effect"><span>Relatório Vendas por valor</span></a>
                            </li> 
                        </ul>
                    </li>
                    @endif
                </ul>
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="4" role="button" data-bs-toggle="dropdown" aria-expanded="false">Logout</a>
                        <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                            <li><a class="dropdown-item" href="/usuario/alterar-senha"><i class="mdi mdi-lock-open-outline font-size-17 text-muted align-middle mr-1"></i>Alterar Senha</a></li>
                            <li><a class="dropdown-item" href="javascript:void();" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="mdi mdi-power font-size-17 text-muted align-middle mr-1 text-danger"></i> {{ __('Sair') }}</a></li>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>
