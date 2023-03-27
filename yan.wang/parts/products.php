<div class="container">
		<div class="card soft" style="text-align: center;">
			<h2 style="padding-bottom:20px;">Category</h2>

			<script>
			const makeNav = (classes='') => {
				const links = [ 'new arrivals', 'bottles','t-shirts','bags'];
				let ran = Math.floor(Math.random()*links.length);
				document.write(`
				<div>
					<nav class="${classes}">
						<ul>
						${links.reduce((r,o,i)=>{
							return r+`<li class="${ran==i?'active':''}"><a href="#">${o}</a></li>`;
						},``)}
						</ul>
					</nav>
				</div>
				`);
			}
		</script>
		<script>makeNav('nav nav-material')</script>
		</div>
	</div>



	<div class="container">
		<div class="grid gap xs-small md-medium"> 
				<div class="col-xs-12 col-md-4">
					<figure class="figure product-overlay">
					<img src="https://cdn.shopify.com/s/files/1/0371/7667/2389/products/NEWHYDRO-PINK_1024x1024@2x.jpg?v=1605490967" alt="">
					<figcaption>
						<div class="caption-body">
							<div>Bottles</div>
							<div>$30</div>
						</div>
					</figcaption>
				</div>
				<div class="col-xs-12 col-md-4">
					<figure class="figure product-overlay">
					<img src="https://cdn.shopify.com/s/files/1/0371/7667/2389/products/hawaiianvacation_1024x1024@2x.jpg?v=1637015169" alt="">
					<figcaption>
						<div class="caption-body">
							<div>T-shirts</div>
							<div>$50</div>
						</div>
					</figcaption>
				</div>
				<div class="col-xs-12 col-md-4">
					<figure class="figure product-overlay">
					<img src="https://cdn.shopify.com/s/files/1/0371/7667/2389/products/IMG_8530_540x.jpg?v=1592541527" alt="">
					<figcaption>
						<div class="caption-body">
							<div>Bags</div>
							<div>$50</div>
						</div>
					</figcaption>
				</div>
		</div>		
	</div>

<div class="container">
	<div class="grid gap xs-small md-medium"> 
	<div class="col-xs-12 col-md-4">
					<figure class="figure product-overlay">
					<img src="https://cdn.shopify.com/s/files/1/0371/7667/2389/products/NEWHYDRO-BLUE_1024x1024@2x.jpg?v=1605491110" alt="">
					<figcaption>
						<div class="caption-body">
						<div>Bottles</div>
						<div>$30</div>
					</div>
					</figcaption>
				</div>
				<div class="col-xs-12 col-md-4">
					<figure class="figure product-overlay">
					<img src="https://cdn.shopify.com/s/files/1/0371/7667/2389/products/SEASYOURDREAM_1024x1024@2x.jpg?v=1609905751" alt="">
					<figcaption>
						<div class="caption-body">
						<div>T-shirts</div>
						<div>$50</div>
							</div>
					</figcaption>
				</div>
				<div class="col-xs-12 col-md-4">
					<figure class="figure product-overlay">
					<img src="https://cdn.shopify.com/s/files/1/0371/7667/2389/products/ead83808-1688-4384-90be-baa0e5696e4d_1024x1024@2x.jpg?v=1609896435" alt="">
					<figcaption>
						<div class="caption-body">
						<div>Bags</div>
						<div>$50</div>
						</div>
					</figcaption>
				</div>
	</div>		
</div>