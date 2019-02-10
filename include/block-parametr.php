<div id="block-parametr">
	<p class="header-title">Поиск по порометрам</p>
	<p class="title-filter">Стоимость</p>
	<form method="GET" action="search-filter.php">
		<div id="block-input-price">
			<ul>
				<li><p>от</p></li>
				<li><input type="text" name="start-price" id="start-price" value="1000"/></li>
				<li><p>до</p></li>
				<li><input type="text" name="end-price" id="end-price" value="10000"/></li>
				<li><p>тг</p></li>
			</ul>
		</div>
			<div id="blocktrackbar"></div>

			<p class="title-filter">Видыкухни</p>
			<ul class="checkbox-brand">
				<li><input type="checkbox" id="checkbrend1" /><label for="checkbrend1">Бренд1</label></li>
				<li><input type="checkbox" id="checkbrend2" /><label for="checkbrend2">Бренд2</label></li>
				<li><input type="checkbox" id="checkbrend3" /><label for="checkbrend3">Бренд3</label></li>
			</ul>
			<center><input type="submit" name="submit" id="button-param-search" value="Найти" /></center>

	</form>

</div>