<header>
	<h1 class="header">Product List</h1>
	<nav class="buttons">
		<button id="delete-product-btn" form="produkts_checked" class="buttons" type="submit">MASS DELETE</button>
		<form class="addCancel" action="/addProduct" method="get">
			<button class="buttons" type="submit">ADD</button>
		</form>
		
	</nav>
</header>
<hr class="line">
<form id="produkts_checked" action="/" method="post" name="produkts">
	<?php foreach ($products as $product): ?>
	<div class='product'>
		<input type="checkbox" class="delete-checkbox" value="<?= $product->getSKU() ?>" name="massDelete[]">
		<?= $product ?>
	</div>
	<?php endforeach; ?>
</form>
<div><hr class="line line_bottom"></div>
				
	