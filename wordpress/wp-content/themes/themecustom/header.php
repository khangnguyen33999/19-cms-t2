
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>MY CMS</title>
</head>

<?php wp_head(); ?>
<body>
<nav class="navbar navbar-default fix">
  <div class="container-fluid">
    <div class="navbar-header">
    <div class="logo">
      <a class="navbar-brand no-padding" href="#"><img src="<?php echo get_site_url(); ?>/wp-content/uploads/2019/10/logongang-301x88.jpg" alt="logo"></a>
    </div>
    </div>
    <ul class="nav navbar-nav background-header" style="margin-right:-20px; float:unset">
      <li><a href="<?php echo get_site_url(); ?>/home">Trang chủ</a></li>
      <li><a href="<?php echo get_site_url(); ?>/list">Tiệc Cưới</a></li>
      <li><a href="<?php echo get_site_url(); ?>/list">Hội Nghị</a></li>
      <li><a href="<?php echo get_site_url(); ?>/list">Tin Tức</a></li>
      <li><a href="<?php echo get_site_url(); ?>/contact">Liên hệ</a></li>
      <?php echo '<form class="form-inline" role="search" method="get" id="searchform" action="' . home_url('/') . '" > 
	<input class="form-control" type="text" value="' . get_search_query() . '" placeholder="Tìm kiếm....." name="s" id="s" />
	<button type="submit" id="searchsubmit" value="Search" class="btn btn-primary"><i class="fa fa-search"></i>Search</button>
    </form>' ?>
    </ul>
    
  </div>
</nav>
  
<div class="container"></div>


