<ul class="nav" id="side-menu">
    <li class="sidebar-search">
        <div class="input-group custom-search-form">
            <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
        </div>
        <!-- /input-group -->
    </li>
    {{--
    <li>
        <a href="#"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
    </li>
    --}}

    <li>
        <a href="{{ route('cliente_index') }}">
            <i class="fa fa-dashboard fa-fw"></i>
            Clientes
        </a>
    </li>

    <li>
        <a href="{{ route('veiculo_index') }}">
            <i class="fa fa-dashboard fa-fw"></i> Veículos
        </a>
    </li>


</ul>