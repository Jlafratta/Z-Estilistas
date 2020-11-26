
<div class="app-sidebar sidebar-shadow bg-dark sidebar-text-light">
    <div class="app-header__logo">
        <div class="logo-src"></div>
        <div class="header__pane ml-auto">
            <div>
                <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                    <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                    </span>
                </button>
            </div>
        </div>
    </div>
    <div class="app-header__mobile-menu">
        <div>
            <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                </span>
            </button>
        </div>
    </div>
    <div class="app-header__menu">
        <span>
            <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                <span class="btn-icon-wrapper">
                    <i class="fa fa-ellipsis-v fa-w-6"></i>
                </span>
            </button>
        </span>
    </div>    
    <div class="scrollbar-sidebar">
        <div class="app-sidebar__inner">
            <ul class="vertical-nav-menu">

                <li class="app-sidebar__heading">Inicio</li>
                @can('client-gate')
                    <li>
                        <a href="{{ route('admin.turnos.daily') }}" class="mm<?php if($title == APPLYFOR_APPOINTMENT_TITLE){echo '-active';} ?>">
                            <i class="metismenu-icon pe-7s-clock"></i>
                            Solicitar turno
                        </a>
                    </li>
                @endcan
                @can('adm-emp-gate')
                    <li>
                        <a href="{{ route('admin.turnos.daily') }}" class="mm<?php if($title == DAILY_APPOINTMENT_TITLE){echo '-active';} ?>">
                            <i class="metismenu-icon pe-7s-clock"></i>
                            Turnos del dia
                        </a>
                    </li>
                
                    <li class="app-sidebar__heading">Informes</li>
                    <li>
                        <a href="#">
                            <i class="metismenu-icon pe-7s-date"></i>
                            Turnos
                            <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                        </a>
                        <ul class="<?php if($title == APPOINTMENT_TITLE || $title == NEW_APPOINTMENT_TITLE){echo 'mm-collapse mm-show';} ?>">
                            <li>
                                <a href="{{ route('admin.turnos.create') }}" class="mm<?php if($title == NEW_APPOINTMENT_TITLE){echo '-active';} ?>">
                                    <i class="metismenu-icon"></i>
                                    Nuevo
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('admin.turnos.index') }}" class="mm<?php if($title == APPOINTMENT_TITLE){echo '-active';} ?>">
                                    <i class="metismenu-icon"></i>
                                    Historial
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="{{ route('admin.users.clients') }}" class="mm<?php if($title == CLIENTS_TITLE){echo '-active';} ?>">
                            <i class="metismenu-icon pe-7s-users"></i>
                            Clientes
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="metismenu-icon pe-7s-scissors"></i>
                            Servicios
                            <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                        </a>
                        <ul class="<?php if($title == SERVICES_TITLE || $title == NEW_SERVICE_TITLE){echo 'mm-collapse mm-show';} ?>">
                            @can('admin-gate')
                                <li>
                                    <a href="{{ route('admin.services.create') }}" class="mm<?php if($title == NEW_SERVICE_TITLE){echo '-active';} ?>">
                                        <i class="metismenu-icon"></i>
                                        Nuevo
                                    </a>
                                </li>
                            @endcan
                            <li>
                                <a href="{{ route('admin.services.index') }}" class="mm<?php if($title == SERVICES_TITLE){echo '-active';} ?>">
                                    <i class="metismenu-icon"></i>
                                    Listado
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">
                            <i class="metismenu-icon pe-7s-cart"></i>
                            Productos
                            <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                        </a>
                        <ul class="<?php if($title == PRODUCTS_TITLE || $title == NEW_PRODUCT_TITLE){echo 'mm-collapse mm-show';} ?>">
                            @can('admin-gate')
                                <li>
                                    <a href="{{ route('admin.stock.create') }}" class="mm<?php if($title == NEW_PRODUCT_TITLE){echo '-active';} ?>">
                                        <i class="metismenu-icon"></i>
                                        Nuevo
                                    </a>
                                </li>
                            @endcan
                            <li>
                                <a href="{{ route('admin.stock.index') }}" class="mm<?php if($title == PRODUCTS_TITLE){echo '-active';} ?>">
                                    <i class="metismenu-icon"></i>
                                    Listado
                                </a>
                            </li>
                        </ul>
                    </li>

                    @can('admin-gate')
                    <li class="app-sidebar__heading">Contable</li>
                    <li>
                        <a href="{{ route('admin.turnos.index') }}" class="mm<?php if($title == DAILY_SALES_TITLE){echo '-active';} ?>">
                            <i class="metismenu-icon pe-7s-graph2"></i>
                            Ventas
                        </a>
                    </li>
                    @endcan

                    @can('admin-gate')
                    <li class="app-sidebar__heading">Usuarios</li>
                    <li>
                        <a href="{{ route('admin.users.employees') }}" class="mm<?php if($title == EMPLOYEES_TITLE){echo '-active';} ?>">
                            <i class="metismenu-icon pe-7s-id"></i>
                            Empleados
                        </a>
                    </li>
                    @endcan
                @endcan
                
            </ul> 
        </div>
    </div>
</div>   