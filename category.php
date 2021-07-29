<?php

use techStore\classes\models\Product;

include("inc/header.php");

if ($request->getHas('id')) {
	$id = $request->get('id');
} else {
	$id = 1;
}

$category = $c->selectId($id); // hta5od elid w trg3 array feha kol 7aga 
print_r($category);
//echo $category['name'];

$pro = new Product;
$products = $pro->selectwhere("cat_id=$id", "id, name ,img ,price ");

?>


<!-- Home -->

<div class="home">
	<div class="home_background parallax-window" data-parallax="scroll" data-image-src="images/shop_background.jpg"></div>
	<div class="home_overlay"></div>
	<div class="home_content d-flex flex-column align-items-center justify-content-center">
		<h2 class="home_title">
			<?php if (!empty($category)) : ?>
				<?php echo $category['name']; ?></h2>
	<?php else :
				echo "no category found ";
			endif;
	?>


	</div>
</div>
<!-- f 7alet en mafesh category ha5fi goz2 elshop kolo  -->
<!-- Shop -->
<?php if (!empty($category)) : ?>
	<div class="shop">
		<div class="container">
			<div class="row">
				<div class="col-lg-3">

					<!-- Shop Sidebar -->
					<div class="shop_sidebar">
						<div class="sidebar_section">
							<?php foreach ($cats as $cat) { ?>
								<li><a href="category.php?id= <?php $cat['id']; ?>"><?php echo $cat['name']; ?> <i class="fas fa-chevron-right ml-auto"></i></a></li>
							<?php } ?>
							</ul>
						</div>

					</div>

				</div>

				<div class="col-lg-9">

					<!-- Shop Content -->

					<div class="shop_content">

						<div class="product_grid">
							<div class="product_grid_border"></div>

							<!-- Product Item -->
							<?php foreach ($products as $product) { ?>
								<div class="product_item">
									<div class="product_border"></div>
									<div class="product_image d-flex flex-column align-items-center justify-content-center">
										<img src="images/<?php URL ."uploads/" . $product['img']; ?>" alt="">
									</div>

									<div class="product_content">

										<div class="product_price"><?php $product['price']; ?></div>
										<div class="product_name">
											<div><a href="<?php URL; ?> product.php?id=<?= $product['id']; ?> " tabindex="0"><?php $product['name']; ?></a></div>
										</div>
									</div>
									<div class="product_fav"><i class="fas fa-cart-plus"></i></div>
								</div>
							<?php } ?>



							<!-- Shop Page Navigation -->

							<div class="shop_page_nav d-flex flex-row">
								<div class="page_prev d-flex flex-column align-items-center justify-content-center"><i class="fas fa-chevron-left"></i></div>
								<ul class="page_nav d-flex flex-row">
									<li><a href="#">1</a></li>
									<li><a href="#">2</a></li>
									<li><a href="#">3</a></li>
									<li><a href="#">...</a></li>
									<li><a href="#">21</a></li>
								</ul>
								<div class="page_next d-flex flex-column align-items-center justify-content-center"><i class="fas fa-chevron-right"></i></div>
							</div>

						</div>

					</div>
				</div>
			</div>
		</div>
	</div>

<?php endif; ?>
<!-- Copyright -->

<?php include("inc/footer.php"); ?>