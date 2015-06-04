<?php $pageTitle= "Global Partners";?>
<?php $page= index;?>
<?php include('includes/header.php') ?>
	<section>
	  <div id="wrapper">
		
		<div class="section page">
		
		<?php include('includes/slideshow/slideshow.html')?><br><br><br><br><br><br><br><br>
		
		<h3>Top News</h3>
				<ul>
					<li>
						<h4>Just gotten started.</h4>
					</li>							
				</ul>
		
		<h3>Latest Products</h3>
			
		<div class="section shirts page">

			<div class="wrapper">
			
			<?php include("includes/products.php"); ?>
				<ul class="products">
					<?php 

						$total_products = count($products);
						$position = 0;
						$list_view_html = "";
						foreach($products as $product_id => $product) { 
							$position = $position + 1;
							if ($total_products - $position < 4) {
								$list_view_html = get_list_view_html($product_id,$product) . $list_view_html;
							}
						}
						echo $list_view_html;
					?>								
				</ul>
			</div>
		</div>
		
		<h3>DIY Products</h3>
				
		<div class="section shirts page">

			<div class="wrapper">
			
				<ul class="products">
					<?php 

						$total_products = count($products);
						$position = 0;
						$list_view_html = "";
						foreach($products as $product_id => $product) { 
							$position = $position + 1;
							if ($total_products - $position < 4) {
								$list_view_html = get_list_view_html($product_id,$product) . $list_view_html;
							}
						}
						echo $list_view_html;
					?>								
				</ul>
			</div>
		</div>
		</div>
		</div>
	</section>
<?php include('includes/footer.php') ?>

