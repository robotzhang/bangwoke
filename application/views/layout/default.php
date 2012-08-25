<?php
$action = $this->uri->segment(1);
$action_next = $this->uri->segment(2);
?>
<!DOCTYPE>
<html lang="zh-CN">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="description" content="<?php echo $layout['description']; ?>" />
  <meta name="keywords" content="<?php echo $layout['keywords']; ?>" />
  <title><?php echo $layout['title']; ?></title>
  <link rel="stylesheet" href="<?php echo base_url(); ?>static/stylesheets/application.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>static/stylesheets/global.css" />
  <script src="<?php echo base_url(); ?>static/javascripts/jquery.js"></script>
</head>

<body>
  <?php $this->load->view('common/header.php'); ?>

  <div class="container">
  	<?php echo $layout['content']; ?>
  </div>

  <?php $this->load->view('common/footer.php'); ?>
</body>
</html>