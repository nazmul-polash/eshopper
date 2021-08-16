
<!DOCTYPE html>
<html lang="en">
<head>
    @include('frontend.includes.header')
</head><!--/head-->

<body>
	@include('frontend.includes.topbar')


	@include('frontend.includes.slidebar')
	
	
	
	<section>
		<div class="container">
			<div class="row">

				@include('frontend.includes.leftbar')
				
				<!-- main body part start -->
				@yield('body')

				<!-- main body part end -->

			</div>
		</div>
	</section>

	@include('frontend.includes.footer')
	
    
</body>
</html>