<!DOCTYPE html>
<html dir="<?php echo $direction; ?>" lang="<?php echo $lang; ?>">
<head>
<meta charset="UTF-8" />
<title><?php echo $title; ?></title>
<base href="<?php echo $base; ?>" />
<?php if ($description) { ?>
<meta name="description" content="<?php echo $description; ?>" />
<?php } ?>
<?php if ($keywords) { ?>
<meta name="keywords" content="<?php echo $keywords; ?>" />
<?php } ?>
<?php if ($icon) { ?>
<link href="<?php echo $icon; ?>" rel="icon" />
<?php } ?>
<?php foreach ($links as $link) { ?>
<link href="<?php echo $link['href']; ?>" rel="<?php echo $link['rel']; ?>" />
<?php } ?>
<link rel="stylesheet" type="text/css" href="catalog/view/theme/herbal/stylesheet/stylesheet.css" />
<link href='http://fonts.googleapis.com/css?family=Play' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Dosis' rel='stylesheet' type='text/css'>
<?php foreach ($styles as $style) { ?>
<link rel="<?php echo $style['rel']; ?>" type="text/css" href="<?php echo $style['href']; ?>" media="<?php echo $style['media']; ?>" />
<?php } ?>
<script type="text/javascript" src="catalog/view/javascript/jquery/jquery-1.7.1.min.js"></script>
<script type="text/javascript" src="catalog/view/javascript/jquery/ui/jquery-ui-1.8.16.custom.min.js"></script>
<link rel="stylesheet" type="text/css" href="catalog/view/javascript/jquery/ui/themes/ui-lightness/jquery-ui-1.8.16.custom.css" />
<script type="text/javascript" src="catalog/view/javascript/common.js"></script>
<?php foreach ($scripts as $script) { ?>
<script type="text/javascript" src="<?php echo $script; ?>"></script>
<?php } ?>
<!--[if IE 7]> 
<link rel="stylesheet" type="text/css" href="catalog/view/theme/default/stylesheet/ie7.css" />
<![endif]-->
<!--[if lt IE 7]>
<link rel="stylesheet" type="text/css" href="catalog/view/theme/default/stylesheet/ie6.css" />
<script type="text/javascript" src="catalog/view/javascript/DD_belatedPNG_0.0.8a-min.js"></script>
<script type="text/javascript">
DD_belatedPNG.fix('#logo img');
</script>
<![endif]-->
<?php if ($stores) { ?>
<script type="text/javascript"><!--
$(document).ready(function() {
<?php foreach ($stores as $store) { ?>
$('body').prepend('<iframe src="<?php echo $store; ?>" style="display: none;"></iframe>');
<?php } ?>
});
//--></script>
<?php } ?>
<?php echo $google_analytics; ?>
</head>
<body>
    <div class="wrapper">
 <div class="social-bg">
        <div class="social-set">
			<div class="social">
				<span>Follow Us:</span>
				<div><a href="#"><img title="Facebook" src="catalog/view/theme/herbal/image/images/f.png"></a></div>
				<div><a href="#"><img title="Twitter" src="catalog/view/theme/herbal/image/images/t.png"></a></div>
				<div><a href="#"><img title="Instagram" src="catalog/view/theme/herbal/image/images/in.png"></a></div>
				<div><a href="#"><img title="Pinterest" src="catalog/view/theme/herbal/image/images/p.png"></a></div>
			</div>
			<div class="welcome">
				<h2>Welcome to Our online Store!</h2>
			</div>
			<div class="search">
				
			</div>
		</div>
    </div>
        <div id="container">
            <div class="container-head">   
<div id="header">
  <?php if ($logo) { ?>
  <div id="logo"><a href="<?php echo $home; ?>"><img src="<?php echo $logo; ?>" title="<?php echo $name; ?>" alt="<?php echo $name; ?>" /></a></div>
  <?php } ?>
  <div class="head-banner">
			<div class="banner1"><h2>International Shipping</h2></div>
			<div class="banner2"><h2>Free Delivery</h2></div>
			<div class="banner3"><h2>1800-123-456</h2></div>
			<div class="banner4"><h2>info@demo.com </h2></div>
		</div>
  
  <?php //echo $language; ?>
  <?php //echo $currency; ?>
  <?php //echo $cart; ?>
  <div id="search">
    <div class="button-search"></div>
    <input type="text" name="search" placeholder="<?php echo $text_search; ?>" value="<?php echo $search; ?>" />
  </div>
  <!--<div id="welcome">
    <?php if (!$logged) { ?>
    <?php echo $text_welcome; ?>
    <?php } else { ?>
    <?php echo $text_logged; ?>
    <?php } ?>
  </div>-->
  <div class="links"><a href="<?php echo $home; ?>"><?php echo $text_home; ?></a><a href="<?php echo $wishlist; ?>" id="wishlist-total"><?php //echo $text_wishlist; ?></a><a href="<?php echo $account; ?>"><?php echo $text_account; ?></a><a href="<?php echo $shopping_cart; ?>"><?php echo $text_shopping_cart; ?></a><a href="<?php echo $checkout; ?>"><?php echo $text_checkout; ?></a></div>
</div>

        
<?php if ($categories) { ?>
<div class="menu-area">
<div id="menu">
  <ul>
    <?php foreach ($categories as $category) { ?>
    
    <?php
    
    $len = strlen($category['href']);
          
          $act_cat=substr($category['href'],$len-2,$len);

    ?>

        
        <?php
        if(isset($_GET['path']))
        {
            if($act_cat == $_GET['path'])
            {
            
        ?>
                <li class="active-menu">
        <?php        
            }
            else
            {
        ?>
                <li>
        <?php
            }
        
        }
        else
        {
        ?>
            <li>
        <?php
        }
        ?>
   <a href="<?php echo $category['href']; ?>"><?php echo $category['name']; ?></a>
      <?php if ($category['children']) { ?>
      <div>
        <?php for ($i = 0; $i < count($category['children']);) { ?>
        <ul>
          <?php $j = $i + ceil(count($category['children']) / $category['column']); ?>
          <?php for (; $i < $j; $i++) { ?>
          <?php if (isset($category['children'][$i])) { ?>
          <li><a href="<?php echo $category['children'][$i]['href']; ?>"><?php echo $category['children'][$i]['name']; ?></a></li>
          <?php } ?>
          <?php } ?>
        </ul>
        <?php } ?>
      </div>
      <?php } ?>
    </li>
    <?php } ?>
  </ul>
</div>
    </div>
</div>

<?php } ?>
<?php if ($error) { ?>
    
    <div class="warning"><?php echo $error ?><img src="catalog/view/theme/herbal/image/close.png" alt="" class="close" /></div>
    
<?php } ?>
<div id="notification"></div>
<div class="container-middle">
