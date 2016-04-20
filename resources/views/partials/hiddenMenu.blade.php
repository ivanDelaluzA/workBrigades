<div class="layer-container">

		<!-- BEGIN MENU LAYER -->
		<div class="menu-layer">
			<ul>
			@if (auth()->check())
					
				<li data-open-after="true">
					<a href="index.html">Dashboard</a>
				</li>
				<li>
					<a href="javascript:;">Opciones</a>
					<ul class="child-menu">
						<li><a href="">enlace</a></li>
						<li><a href="">enlace</a></li>
					</ul>
				</li>
				<li>
					<a href="javascript:;">Opciones</a>
					<ul class="child-menu">
						<li><a href="">enlace</a></li>
						<li><a href="">enlace</a></li>
						<li>
							<a href="javascript:;">Sub Opciones</a>
							<ul class="child-menu">
								<li><a href="">enlace</a></li>
								<li><a href="">enlace</a></li>
							</ul>
						</li>
						<li>
							<a href="javascript:;">Sub Opciones</a>
							<ul class="child-menu">
								<li><a href="">enlace</a></li>
								<li><a href="">enlace</a></li>
							</ul>
						</li>
					</ul>
				</li>
				<li>
					<a href="http://themeforest.net/item/pleasure-material-design-responsive-admin-panel/10579013">Buy Pleasure</a>
				</li>
			@else
				<li data-open-after="true">
					<a href=""><span class="glyphicon glyphicon-lock"></span>  Aun No Inicias Secion !!</a>
				</li>
			@endif

			</ul>
		</div><!--.menu-layer-->
		<!-- END OF MENU LAYER -->

	</div><!--.layer-container-->
