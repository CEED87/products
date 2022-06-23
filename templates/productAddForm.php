
<header>
	<h1 class="header">Product Add</h1>
	<nav class="buttons">
		<button form="product_form" type="submit" class="buttons">Save</button>
		<form class="addCancel" action="/" method="get">
			<button  class="buttons">Cancel</button>
		</form>
		
	</nav>
</header>

<hr class="line">

<form id="product_form" action="/" method="post">
	<div class="visible">
		<div class="input">
			<label for="sku">SKU</label>
		</div>
		<input type="text" id="sku" name="sku">
		<span class="hide">Please fill in the field</span>
	</div>
	<div class="visible">
		<div class="input">
			<label for="name">Name</label>
		</div>
		<input type="text" id="name" name="name">
		<span class="hide">Please fill in the field</span>
	</div>
	<div class="visible">
		<div class="input">
			<label for="price">Price ($)</label>
		</div>	
		<input type="text" id="price" name="price">
		<span class="hide"></span>
	</div>
	<div>
		<div class="input">
			<label for="productType">Type Switcher</label>
		</div>	
	<select id="productType" name="type">
		<option id="DVD" value="DVD">DVD</option>
		<option id="Furniture" value="Furniture">Furniture</option>
		<option id="Book" value="Book">Book</option>
	</select>
	</div>
	<div id="form_elements">
		<div data-type="DVD" class="visible">
			<div class="input">
				<label for="size">Size (MB)</label>
			</div>	
			<input type="text" id="size" name="size">
			<span class="hide"></span>	
			<p>Please enter Disk size in MB</p>
		</div>
		<div data-type="Furniture" class="hide">
			<div>
				<div class="input">
					<label for="height">Height (CM)</label>
				</div>
				<input type="text" id="height" name="height">
				<span class="hide"></span>	
			</div>
			
			<div>
				<div class="input">
					<label for="width">Width (CM)</label>
				</div>
				<input type="text" id="width" name="width">
				<span class="hide"></span>	
			</div>
			
			<div>
				<div class="input">
					<label for="length">Length (CM)</label>
				</div>	
				<input type="text" id="length" name="length">
				<span class="hide"></span>	
			</div>	
			<p>Please provide in HxWxL format</p>
		</div>
		<div data-type="Book" class="hide">
			<div class="input">
				<label for="weight">Weight (KG)</label>
			</div>	
			<input type="text" id="weight" name="weight">
			<span class="hide"></span>	
			<p>Please enter Book weight in KG</p>
		</div> 
	</div>
</form>

<div><hr class="line line_bottom"></div>
