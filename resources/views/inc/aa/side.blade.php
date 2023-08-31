<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul>
                <li class="menu-title">
                    <span>Main</span>
                </li>
                <li class="submenu">
                    <a href="#"><i class="la la-dashboard"></i> <span> Tableau de Bord</span> <span class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li><a class="{{ request()->route()->named('admin.home') ? 'active' :''}}"  href="{{route("admin.home")}}">Admin Dashboard</a></li>
                    </ul>
                </li>
                <li class="menu-title">
                    <span>Administrations</span>
                    <li class="submenu">
                        <a href="#"><i class="la la-dashboard"></i> <span> Les Boursiers </span> <span class="menu-arrow"></span></a>
                        <ul style="display: none;">
                            <li><a class="{{ request()->route()->named('admin.boursiers.index') ? 'active' :''}}"  href="{{route("admin.boursiers.index")}}">Liste des Boursiers</a></li>
                            <li><a class="{{ request()->route()->named('admin.boursiers.create') ? 'active' :''}}" href="{{route("admin.boursiers.create")}}">Inscription d'un Boursier</a></li>
                        </ul>
                    </li>
                    <li class="submenu">
                        <a href="#"><i class="la la-dashboard"></i> <span> Les Utilisateurs </span> <span class="menu-arrow"></span></a>
                        <ul style="display: none;">
                            <li><a class="{{ request()->route()->named('admin.utilisateurs.index') ? 'active' :''}}"  href="{{route("admin.utilisateurs.index")}}">Liste des Utilisateurs</a></li>
                            <li><a class="{{ request()->route()->named('admin.utilisateurs.create') ? 'active' :''}}" href="{{route("admin.utilisateurs.create")}}">Nouvel Utilisateur</a></li>
                        </ul>
                    </li>
                    <li class="submenu">
                        <a href="#"><i class="la la-dashboard"></i> <span> Candidatures </span> <span class="menu-arrow"></span></a>
                        {{-- <ul style="display: none;">
                            <li><a class="{{ request()->route()->named('admin.utilisateurs.index') ? 'active' :''}}"  href="{{route("admin.utilisateurs.index")}}">Liste des Utilisateurs</a></li>
                            <li><a class="{{ request()->route()->named('admin.utilisateurs.create') ? 'active' :''}}" href="{{route("admin.utilisateurs.create")}}">Nouvel Utilisateur</a></li>
                        </ul> --}}
                    </li>
                    <li class="submenu">
                        <a href="#"><i class="la la-dashboard"></i> <span> Les Bourses </span> <span class="menu-arrow"></span></a>
                        <ul style="display: none;">
                            <li><a class="{{ request()->route()->named('admin.bourses.index') ? 'active' :''}}"  href="{{route("admin.bourses.index")}}">Liste des Bourses</a></li>
                            <li><a class="{{ request()->route()->named('admin.bourses.create') ? 'active' :''}}" href="{{route("admin.bourses.create")}}">Nouvelle Bourse</a></li>
                        </ul>
                    </li>
                </li>
                <li class="menu-title">
                    <span>Gestion du Site Internet</span>
                </li>
                <li class="submenu">
                    <a href="#"><i class="la la-dashboard"></i> <span> Les Articles </span> <span class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li><a class="{{ request()->route()->named('admin.posts.index') ? 'active' :''}}"  href="{{route("admin.posts.index")}}">Liste des Articles</a></li>
                        <li><a class="{{ request()->route()->named('admin.posts.create') ? 'active' :''}}" href="{{route("admin.posts.create")}}">Ajouter un Article</a></li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="#"><i class="la la-dashboard"></i> <span> Les Projets </span> <span class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li><a class="{{ request()->route()->named('admin.projets.index') ? 'active' :''}}"  href="{{route("admin.projets.index")}}">Liste des Projets</a></li>
                        <li><a class="{{ request()->route()->named('admin.projets.create') ? 'active' :''}}" href="{{route("admin.projets.create")}}">Nouveau Projet</a></li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="#"><i class="la la-dashboard"></i> <span> Les Sliders </span> <span class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li><a class="{{ request()->route()->named('admin.sliders.index') ? 'active' :''}}"  href="{{route("admin.sliders.index")}}">Liste des sliders</a></li>
                        <li><a class="{{ request()->route()->named('admin.sliders.create') ? 'active' :''}}" href="{{route("admin.sliders.create")}}">Ajouter un Slider</a></li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="#"><i class="la la-dashboard"></i> <span> Les Temoignages </span> <span class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li><a class="{{ request()->route()->named('admin.temoignages.index') ? 'active' :''}}"  href="{{route("admin.temoignages.index")}}">Liste des Témoignages</a></li>
                        <li><a class="{{ request()->route()->named('admin.temoignages.create') ? 'active' :''}}" href="{{route("admin.temoignages.create")}}">Ajouter un Témoignages</a></li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="#"><i class="la la-dashboard"></i> <span> Les Groupes Services </span> <span class="menu-arrow"></span></a>
                    
                </li>
                <li class="submenu">
                    <a href="#"><i class="la la-dashboard"></i> <span> Les Services </span> <span class="menu-arrow"></span></a>
                    
                </li>
                <li>
                    <a href="{{route('admin.contact-messages.index')}}" class="{{ request()->route()->named('admin.contact-messages.index') ? 'active' :''}}">
                        <i class="la la-question"></i> <span>Les Messages de Contact</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>