
<!DOCTYPE html>
<html lang="en">
<head>
	
	@include('backend.includs.header')
	
</head>

<body>
	@include('backend.includs.topbar')
	
		<div class="container-fluid-full">
			<div class="row-fluid">
					
				@include('backend.includs.manubar')
				
				
				<noscript>
					<div class="alert alert-block span10">
						<h4 class="alert-heading">Warning!</h4>
						<p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a> enabled to use this site.</p>
					</div>
				</noscript>
				
				<!-- start: Main Content Part -->

				<div id="content" class="span10">
					<ul class="breadcrumb">
						<li>
							<i class="icon-home"></i>
							<a href="index.html">Home</a> 
							<i class="icon-angle-right"></i>
						</li>
						<li><a href="#">Dashboard</a></li>
					</ul>

	@yield('content')

				</div>
				
				<!-- end: Main Content Part -->

			</div><!--/#content.span10-->
		</div><!--/fluid-row-->
		
	
	
	<div class="clearfix"></div>
	
	@include('backend.includs.footer')
	
</body>
</html>
