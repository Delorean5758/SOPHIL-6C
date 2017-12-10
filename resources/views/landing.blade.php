@extends('layout.bar')

@section('content')
<div class="banner">
	<div class="container">
		<section class="slider">
			<div class="flexslider">
				<ul class="slides">
					<li>	
						<div class="banner_text">
							<h3>BERTERNAK LELE</h3>
							<div class="w3ls-line"> </div>
							<p>Lele Company</p>
						</div>
					</li>
					<li>	
						<div class="banner_text">
							<h3>ANALISA BISNIS</h3>
							<div class="w3ls-line"> </div>
							<p>Lele Company</p>
						</div>
					</li>
				</ul>
			</div>
		</section>
		<link rel="stylesheet" href="{{url('lele/css/flexslider.css')}}" type="text/css" media="screen" property="" />
		<script defer src="{{url('lele/js/jquery.flexslider.js')}}"></script>
		<script type="text/javascript">
			$(window).load(function(){
				$('.flexslider').flexslider({
					animation: "slide",
					start: function(slider){
						$('body').removeClass('loading');
					}
				});
			});
		</script>
	</div>
</div>
@endsection