 <div id="block-category">
 	<p class="header-title">Категории товаров</p>
 	<ul>
 		<li><a id="index1"><img src="images/eat.png" id="eat-image"> Еда</a>
 			<ul class="category-section">
 				<li><a><strong style="font-weight:bold">Все виды</strong></a></li>
 				<?php
 					$result =  mysqli_query($link, "SELECT * FROM  eat_type WHERE type='food'");
                	if(mysqli_num_rows($result) > 0) {
                    $row = mysqli_fetch_array($result);
                    do {
                    	echo'
                    		<li><a id="asd" href="view_cat.php?cat='.strtolower($row["brand"]).'&type='.$row["type"].'">'.$row["brand"].'</a></li>
                    	';
                    }
                    	while ($row = mysqli_fetch_array($result));
                    }
 				?>
 			</ul>
 		</li>

 		<li><a id="index2"><img src="images/drink.png" id="drink-image">Напитки</a>
 			<ul class="category-section">
 				<li><a><strong style="font-weight:bold">Все виды</strong></a></li>
 				<?php
 					$result =  mysqli_query($link, "SELECT * FROM  eat_type WHERE type='drinks'");
                	if(mysqli_num_rows($result) > 0) {
                    $row = mysqli_fetch_array($result);
                    do {
                    	echo'
                    		<li><a href="view_cat.php?cat='.strtolower($row["brand"]).'&type='.$row["type"].'">'.$row["brand"].'</a></li>
                    	';
                    }
                    	while ($row = mysqli_fetch_array($result));
                    }
 				?>

 			</ul>
 		</li>

 		<li><a id="index3"><img src="images/fast-fud.png" id="fast-fud-image">Фастфуд</a>
 			<ul class="category-section">
 				<li><a><strong style="font-weight:bold">Все виды</strong></a></li>
 				<?php
 					$result =  mysqli_query($link, "SELECT * FROM  eat_type WHERE type='fastfood'");
                	if(mysqli_num_rows($result) > 0) {
                    $row = mysqli_fetch_array($result);
                    do {
                    	echo'
                    		<li><a href="view_cat.php?cat='.strtolower($row["brand"]).'&type='.$row["type"].'">'.$row["brand"].'</a></li>
                    	';
                    }
                    	while ($row = mysqli_fetch_array($result));
                    }
 				?>
 			</ul>
 		</li>
 		<li><a id="index4"><img src="images/salad.png" id="salad-image">Салаты</a>
 			<ul class="category-section">
 				<li><a><strong style="font-weight:bold">Все виды</strong></a></li>
 				<?php
 					$result =  mysqli_query($link, "SELECT * FROM  eat_type WHERE type='salads'");
                	if(mysqli_num_rows($result) > 0) {
                    $row = mysqli_fetch_array($result);
                    do {
                    	echo'
                    		<li><a href="view_cat.php?cat='.strtolower($row["brand"]).'&type='.$row["type"].'">'.$row["brand"].'</a></li>
                    	';
                    }
                    	while ($row = mysqli_fetch_array($result));
                    }
 				?>
 			</ul>
 		</li>
 	</ul>
 </div>