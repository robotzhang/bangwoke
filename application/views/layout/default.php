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
  <link href="<?php echo base_url(); ?>static/images/favicon.png" type="image/x-icon" rel="icon">
  <link rel="stylesheet" href="http://lib.sinaapp.com/js/bootstrap/2.0.3/css/bootstrap.min.css" />
  <link rel="stylesheet" href="<?php echo base_url(); ?>static/stylesheets/global.css" />
  <script src="http://lib.sinaapp.com/js/jquery/1.8/jquery.min.js"></script>
</head>

<body>
  <?php $this->load->view('common/header.php'); ?>

  <div class="site">
      <div class="container">
        <?php echo $layout['content']; ?>
      </div>
  </div>

  <?php $this->load->view('common/footer.php'); ?>
</body>
</html>