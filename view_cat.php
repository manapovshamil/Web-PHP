<?php
	include("include/db_connect.php");
	include("functions/functions.php");

	// $cat = clear_string($_GET["cat"]);
	// $type = clear_string($_GET["type"]);
	// echo $type;

	$sorting = isset($_GET['sort']) ? $_GET['sort'] : 'id';
	switch ($sorting) {
		case 'price-asc':
			$sorting = 'price ASC';
			$sort_name = 'От дешевых к дорогим';
			break;
		case 'price-desc':
			$sorting = 'price DESC';
			$sort_name = 'От дорогих к дешевым';
			break;
		case 'popular':
			$sorting = 'count DESC';
			$sort_name = 'Популярные';
			break;
		case 'news':
			$sorting = 'datetime DESC';
			$sort_name = 'Новинки';
			break;
		case 'brand':
			$sorting = 'brand';
			$sort_name = 'От А до Я';
			break;
		default:
			$sorting = 'products_id DESC';
			$sort_name = 'Нет сортировки';
			break;
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<meta charset="utf8" />

	<!-- <link rel="icon" type="image/png" sizes="16x16" href="images/phone-icon.png"> -->
</head>
<body>
	<div id="block-body">
		<div>
			<?php
				include("include/block-header.php");
			?>
		</div>
		<div id="block-right">
			<?php
				include("include/block-category.php");
				include("include/block-parametr.php");
				include("include/block-news.php");
			?>
		</div>
		<div id="block-content">
			<div id="block-sorting">
				<p id="nav-breadcrumbs"><a href="index.php">Главная страница</a> \ <span>Все виды</span></p>
				<ul id="options-list">
					<li>Вид:</li>
					<li><img id="style-grid" src="images/icon-grid.png"></li>
					<li><img id="style-list" src="images/icon-list.png"></li>
					<li>Сортировать:</li>
					<li><a id="select-sort"><?php echo $sort_name; ?></a>
						<ul id="sorting-list">
							<li><a href="index.php?sort=price-asc">От дешевых к дорогим</a></li>
							<li><a href="index.php?sort=price-desc">От дорогих к дешевым</a></li>
							<li><a href="index.php?sort=popular">Популярные</a></li>
							<li><a href="index.php?sort=news">Новинки</a></li>
							<li><a href="index.php?sort=brand">От А до Я</a></li>
						</ul>
					</li>
				</ul>
			</div>
		</div>
		<ul id="block-tovar-grid">
			<?php
                $result =  mysqli_query($link, "SELECT * FROM  products ORDER BY $sorting");
                if(mysqli_num_rows($result) > 0) {
                    $row = mysqli_fetch_array($result);
                    do {
                    	if ($row["image"] != "" && file_exists("./uploads_images/".$row["image"])){
                    		$img_path = './uploads_images/'.$row["image"];
                    		$width = 160;
                    		$height = 160;
                    	}else{
                    		$img_path = "images/no-image.jpg";
                    		$width = 160;
                    		$height = 160;
                    	}
                        echo'
                        <li>
	                        <div class="block-image-grid">
	                        	<img id="image-pos" src="'.$img_path.'" width="'.$width.'" height="'.$height.'"/>
	                        </div>
	                        <p class="style-title-grid"><a href="">'.$row["title"].'</a></p>
	                        <ul class="reviews-and-counts-grid">
	                        <li><img src="images/eye-icon.png" /><p>0</p></li>
	                        <li><img src="images/comment-icon.png"/><p>0</p></li>
	                        </ul>
	                        <a class="add-card-style-grid"><img src="images/basketa.png" /></a>
	                        <p class="style-price-grid"><strong>'.$row["price"].'</strong> тенге</p>
	                        <div class="mini-features"> 
	                        '.$row["mini_features"].'
	                        </div>
                        </li>
                        ';
                    }
                    while ($row = mysqli_fetch_array($result));
                }
            ?>
    	</ul>﻿
    	<ul id="block-tovar-list">
			<?php
                $result =  mysqli_query($link, "SELECT * FROM  products ORDER BY $sorting");
                if(mysqli_num_rows($result) > 0) {
                    $row = mysqli_fetch_array($result);
                    do {
                    	if ($row["image"] != "" && file_exists("./uploads_images/".$row["image"])){
                    		$img_path = './uploads_images/'.$row["image"];
                    		$width = 160;
                    		$height = 160;
                    	}else{
                    		$img_path = "images/no-image.jpg";
                    		$width = 160;
                    		$height = 160;
                    	}
                        echo'
                        <li>
	                        <div class="block-image-list">
	                        	<img id="image-pos" src="'.$img_path.'" width="'.$width.'" height="'.$height.'"/>
	                        </div>

	                        <ul class="reviews-and-counts-list">
	                        <li><img src="images/eye-icon.png" /><p>0</p></li>
	                        <li><img src="images/comment-icon.png"/><p>0</p></li>
	                        </ul>

	                        <p class="style-title-list"><a href="">'.$row["title"].'</a></p>
	                        

	                        <a class="add-card-style-list"><img src="images/basketa.png" /></a>
	                        <p class="style-price-list"><strong>'.$row["price"].'</strong> тенге</p>
	                        <div class="mini-features"> 
	                        '.$row["mini_features"].'
	                        </div>
                        </li>
                        ';
                    }
                    while ($row = mysqli_fetch_array($result));
                }
            ?>
    	</ul>﻿
		<div>
			<?php
				include("include/block-footer.php");
			?>
		</div>
	</div>

	<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	 <script type="text/javascript" src="js/owl.carousel.js"></script> 
	<script type="text/javascript" src="js/shop-script.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js"></script>
</body>
</html>