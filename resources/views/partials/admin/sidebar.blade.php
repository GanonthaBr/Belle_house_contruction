<!-- Sidebar -->
		<div class="sidebar" data-background-color="dark">
			<div class="sidebar-logo">
				<!-- Logo Header -->
				<div class="logo-header" data-background-color="dark">

					<a href="../index.html" class="logo">
						<img src="{{asset('images/logo.png')}}" alt="navbar brand" class="navbar-brand" height="20" style="background: #fff">
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
							<a data-bs-toggle="collapse"  class="collapsed" aria-expanded="false">
								<i class="fas fa-home"></i>
								<p>Menu</p>
								<span class="caret"></span>
							</a>
							{{-- <div class="collapse" id="dashboard">
								<ul class="nav nav-collapse">
									<li>
										<a href="../../demo1/index.html">
											<span class="sub-item">Dashboard 1</span>
										</a>
									</li>
								</ul>
							</div> --}}
						</li>
						<li class="nav-section">
							<span class="sidebar-mini-icon">
								<i class="fa fa-ellipsis-h"></i>
							</span>
							<h4 class="text-section">Composants</h4>
						</li>
						
						<li class="nav-item">
							<a data-bs-toggle="collapse" href="#sidebarLayouts">
								<i class="fas fa-th-list"></i>
								<p>Les Realisations</p>
								<span class="caret"></span>
							</a>
							<div class="collapse" id="sidebarLayouts">
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
							<a data-bs-toggle="collapse" href="#forms">
								<i class="fas fa-pen-square"></i>
								<p>Les Projets</p>
								<span class="caret"></span>
							</a>
							<div class="collapse" id="forms">
								<ul class="nav nav-collapse">
									<li>
										<a href="{{route('allprojects')}}">
											<span class="sub-item">Liste des Projets</span>
										</a>
									</li>
									<li>
										<a href="../forms/forms.html">
											<span class="sub-item">Ajouter un Projet</span>
										</a>
									</li>
								</ul>
							</div>
						</li>
						<li class="nav-item">
							<a data-bs-toggle="collapse" href="#tables">
								<i class="fas fa-table"></i>
								<p>Blog Post</p>
								<span class="caret"></span>
							</a>
							<div class="collapse" id="tables">
								<ul class="nav nav-collapse">
									<li>
										<a href="{{route('allblogs')}}">
											<span class="sub-item">Liste des Publications</span>
										</a>
									</li>
									<li>
										<a href="../tables/datatables.html">
											<span class="sub-item">Ajouter une Publication</span>
										</a>
									</li>
								</ul>
							</div>
						</li>
						<li class="nav-item">
							<a data-bs-toggle="collapse" href="#tables">
								<i class="fas fa-table"></i>
								<p>Nos Services</p>
								<span class="caret"></span>
							</a>
							<div class="collapse" id="tables">
								<ul class="nav nav-collapse">
									<li>
										<a href="../tables/tables.html">
											<span class="sub-item">Liste des services</span>
										</a>
									</li>
									<li>
										<a href="../tables/datatables.html">
											<span class="sub-item">Ajouter un service</span>
										</a>
									</li>
								</ul>
							</div>
						</li>
						<li class="nav-item">
							<a data-bs-toggle="collapse" href="#maps">
								<i class="fas fa-map-marker-alt"></i>
								<p>Partenaires</p>
								<span class="caret"></span>
							</a>
							<div class="collapse" id="maps">
								<ul class="nav nav-collapse">
									<li>
										<a href="../maps/googlemaps.html">
											<span class="sub-item">Tous nos Partenaires</span>
										</a>
									</li>
									<li>
										<a href="../maps/jsvectormap.html">
											<span class="sub-item">Ajouter nouveau Partenaire</span>
										</a>
									</li>
								</ul>
							</div>
							
						</li>
						
						
				
					</ul>
				</div>
			</div>
		</div>
		<!-- End Sidebar -->