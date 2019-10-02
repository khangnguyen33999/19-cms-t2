
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
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">CMS TEST</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="<?php echo get_site_url(); ?>/home">Home</a></li>
      <li><a href="<?php echo get_site_url(); ?>/list">Danh sách</a></li>
      <li><a href="<?php echo get_site_url(); ?>/contact">Liên hệ</a></li>
     <li><?php echo '<form class="form-inline" role="search" method="get" id="searchform" action="' . home_url('/') . '" > 
	<input class="form-control" type="text" value="' . get_search_query() . '" placeholder="Tìm kiếm....." name="s" id="s" />
	<button type="submit" id="searchsubmit" value="Search" class="btn btn-primary"><i class="fa fa-search"></i>Search</button>
    </form>' ?></li>
    </ul>
  </div>
</nav>
  
<div class="container">


