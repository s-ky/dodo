<?php

function get_list_view_html($product_id, $product) {
    
    $output = "";

    $output = $output . "<li>";
    $output = $output . '<a href="item.php?id=' . $product_id . '">';
    $output = $output . '<img src="' . $product["img"] . '" alt="' . $product["name"] . '">';
    $output = $output . "<p>".$product["name"]." </p>";
    $output = $output . "</a>";
    $output = $output . "</li>";

    return $output;
}

$products = array();
$products[101] = array(
	"name" => "13寸大象造型盤子-原色亮面",
	"img" => "includes/img/items/item-101.jpg",
	"price" => 18,
	"paypal" => "9P7DLECFD4LKE",
    "sizes" => array("紅色","黃色","綠色","紫色")
);
$products[102] = array(
	"name" => "13寸大象造型盤子-原色霧面",
    "img" => "includes/img/items/item-102.jpg",
    "price" => 20,
    "paypal" => "SXKPTHN2EES3J",
    "sizes" => array("紅色","黃色","綠色","紫色")
);
$products[103] = array(
    "name" => "13寸貓頭鷹造型盤子-原色",
    "img" => "includes/img/items/item-103.jpg",    
    "price" => 20,
    "paypal" => "7T8LK5WXT5Q9J",
    "sizes" => array("紅色","黃色","綠色","紫色")
);
$products[104] = array(
    "name" => "8寸兔子造型盤子-原色",
    "img" => "includes/img/items/item-104.jpg",    
    "price" => 18,
    "paypal" => "YKVL5F87E8PCS",
    "sizes" => array("Small","Medium","Large","X-Large")
);
$products[105] = array(
    "name" => "貓掌小菜碟子",
    "img" => "includes/img/items/item-105.jpg",    
    "price" => 25,
    "paypal" => "4CLP2SCVYM288",
    "sizes" => array("Small","Medium","Large","X-Large")
);
$products[106] = array(
    "name" => "原色馬克杯",
    "img" => "includes/img/items/item-106.jpg",    
    "price" => 20,
    "paypal" => "TNAZ2RGYYJ396",
    "sizes" => array("Small","Medium","Large","X-Large")
);
$products[107] = array(
    "name" => "Logo item, Teal",
    "img" => "includes/img/items/item-107.jpg",    
    "price" => 20,
    "paypal" => "S5FMPJN6Y2C32",
    "sizes" => array("Small","Medium","Large","X-Large")
);
$products[108] = array(
    "name" => "Mike the Frog item, Orange",
    "img" => "includes/img/items/item-108.jpg",    
    "price" => 25,
    "paypal" => "JMFK7P7VEHS44",
    "sizes" => array("Large","X-Large")
);

?>