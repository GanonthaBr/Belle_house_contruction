<!-- Sidebar -->
<div class="sidebar" data-background-color="dark">
	<div class="sidebar-logo">
		<!-- Logo Header -->
		<div class="logo-header" data-background-color="dark">

			<a href="{{route('admin')}}" class="logo">
				<img src="{{asset('public/images/logo.png')}}" alt="navbar brand" class="navbar-brand" height="20" style="background: #fff">
			</a>
			<div class="nav-toggle">
				<button class="btn btn-toggle toggle-sidebar">
					<i class="gg-menu-right"></i>
				</button>
				<button class="btn btn-toggle sidenav-toggler">
					<i class="gg-menu-left"></i>
				</button>
			</div>
			<button class="topbar-toggler more">
				<i class="gg-more-vertical-alt"></i>
			</button>
		</div>
		<!-- End Logo Header -->
	</div>
	<div class="sidebar-wrapper scrollbar scrollbar-inner">
		<div class="sidebar-content">
			<ul class="nav nav-secondary">
				<li class="nav-item">
					<a data-bs-toggle="collapse" href="{{route('admin')}}" class="collapsed" aria-expanded="false">
					<i class="fas fa-home icon"></i> 
						<p>Menu</p>
						<span class="caret icon"></span>
					</a>
				</li>
				<li class="nav-section">
					<span class="sidebar-mini-icon">
						<i class="fa fa-ellipsis-h icon"></i>
					</span>
					<h4 class="text-section">Composants</h4>
				</li>
				<li class="nav-item">
					{{-- data-bs-target="#forms-nav" data-bs-toggle="collapse"  --}}
					<a data-bs-toggle="collapse" data-bs-target="#sidebarLayouts"  href="#">
						<i class="fas fa-th-list icon"></i>
						<p>Les Realisations</p>
						<span class="caret icon"></span>
					</a>
					<div class="collapse" id="sidebarLayouts" >
						<ul class="nav nav-collapse">
							<li>
								<a href="{{route('allrealisations')}}">
									<span class="sub-item">Liste des realisations</span>
								</a>
							</li>
							<li>
								<a href="{{route('realisation.create')}}">
									<span class="sub-item">Ajouter une realisations</span>
								</a>
							</li>
						</ul>
					</div>
				</li>
				<li class="nav-item">
					<a data-bs-toggle="collapse" data-bs-target="#forms" href="#">
						<i class="fas fa-pen-square icon"></i>
						<p>Les Projets</p>
						<span class="caret icon"></span>
					</a>
					<div class="collapse" id="forms">
						<ul class="nav nav-collapse">
							<li>
								<a href="{{route('allprojects')}}">
									<span class="sub-item">Liste des Projets</span>
								</a>
							</li>
							<li>
								<a href="{{route('project.create')}}">
									<span class="sub-item">Ajouter un Projet</span>
								</a>
							</li>
						</ul>
					</div>
				</li>
				<li class="nav-item">
					<a data-bs-toggle="collapse" data-bs-target="#tables" href="#">
						<i class="fas fa-table icon"></i>
						<p>Blog Post</p>
						<span class="caret icon"></span>
					</a>
					<div class="collapse" id="tables">
						<ul class="nav nav-collapse">
							<li>
								<a href="{{route('allblogs')}}">
									<span class="sub-item">Liste des Publications</span>
								</a>
							</li>
							<li>
								<a href="{{route('blog.create')}}">
									<span class="sub-item">Ajouter une Publication</span>
								</a>
							</li>
						</ul>
					</div>
				</li>
				<li class="nav-item">
					<a data-bs-toggle="collapse" data-bs-target="#tables01" href="#">
						<i class="fas fa-table icon"></i>
						<p>Nos Services</p>
						<span class="caret icon"></span>
					</a>
					<div class="collapse" id="tables01">
						<ul class="nav nav-collapse">
							<li>
								<a href="{{route('allservices')}}">
									<span class="sub-item">Liste des services</span>
								</a>
							</li>
							<li>
								<a href="{{route('service.create')}}">
									<span class="sub-item">Ajouter un service</span>
								</a>
							</li>
						</ul>
					</div>
				</li>
				<li class="nav-item">
					<a data-bs-toggle="collapse" data-bs-target="#maps" href="#">
						<i class="fas fa-map-marker-alt icon"></i>
						<p>Partenaires</p>
						<span class="caret icon"></span>
					</a>
					<div class="collapse" id="maps">
						<ul class="nav nav-collapse">
							<li>
								<a href="{{route('allpartners')}}">
									<span class="sub-item">Tous nos Partenaires</span>
								</a>
							</li>
							<li>
								<a href="{{route('partner.create')}}">
									<span class="sub-item">Ajouter nouveau Partenaire</span>
								</a>
							</li>
						</ul>
					</div>

				</li>
				<li class="nav-item">
					<a href="{{route('messages')}}">Messages</a>
				</li>
				<li class="nav-item">
					<a href="{{route('messages')}}">Statistiques</a>
				</li>
			</ul>
		</div>
	</div>
</div>
<!-- End Sidebar -->