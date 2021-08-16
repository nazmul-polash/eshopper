<!-- start: Main Menu -->
<div id="sidebar-left" class="span2">
	<div class="nav-collapse sidebar-nav">
		<ul class="nav nav-tabs nav-stacked main-menu">

			<li><a href="{{route('dashboard')}}"><i class="icon-bar-chart"></i><span class="hidden-tablet"> Dashboard</span></a></li>	


			<li>
				<a class="dropmenu" href="#"><i class="icon-folder-close-alt"></i>
					<span class="hidden-tablet"> Category</span>
				</a>
				<ul>
					<li>
						<a class="submenu" href="{{route('category.manage')}}"><i class="icon-file-alt"></i><span class="hidden-tablet">Manage All Category</span></a>
					</li>
					<li>
						<a class="submenu" href="{{route('category.create')}}"><i class="icon-file-alt"></i><span class="hidden-tablet">Add New Category</span></a>
					</li>
				</ul>	
			</li>

		</ul>
	</div>
</div>
<!-- end: Main Menu -->