<!DOCTYPE html>
<html >
<head>
    <title>Welcome</title>

  <link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,400,600italic,600' rel='stylesheet' type='text/css'>

  <!-- Styles -->

  		<!-- Bootstrap CSS -->
  		<link href="<?php echo $this->url->get("public/css/bootstrap-responsive.css"); ?>" rel="stylesheet">
  		<link href="<?php echo $this->url->get("public/css/bootstrap.css"); ?>" rel="stylesheet">
        <!-- Animate css -->
        <link href="<?php echo $this->url->get("public/css/animate.min.css"); ?>" rel="stylesheet">
        <!-- Gritter -->
  <!--      <link href="<?php echo $this->url->get("public/css/jquery.gritter.css"); ?>" rel="stylesheet"> -->
        <!-- Calendar -->
        <link href="<?php echo $this->url->get("css/fullcalendar.css"); ?>" rel="stylesheet">
        <!-- Bootstrap toggable -->
        <link href="<?php echo $this->url->get("css/bootstrap-switch.css"); ?>" rel="stylesheet">
        <!-- Date and Time picker -->
     <!--   <link href="<?php echo $this->url->get("css/bootstrap-datetimepicker.min.css"); ?>" rel="stylesheet"> -->
        <!-- Star rating -->
        <link href="<?php echo $this->url->get("css/rateit.css"); ?>" rel="stylesheet">
        <!-- Star rating -->
        <link href="<?php echo $this->url->get("css/jquery.cleditor.css"); ?>" rel="stylesheet">
        <!-- jQuery UI -->
        <link href="<?php echo $this->url->get("css/jquery-ui.css"); ?>" rel="stylesheet">
        <link rel="stylesheet" href="//code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">
        <!-- prettyPhoto -->
        <link href="<?php echo $this->url->get("css/prettyPhoto.css"); ?>" rel="stylesheet">
  		<!-- Font awesome CSS -->
  		<link href="<?php echo $this->url->get("css/font-awesome.min.css"); ?>" rel="stylesheet">
  		<!-- Custom CSS -->
  		<link href="<?php echo $this->url->get("css/style.css"); ?>" rel="stylesheet">
  		<!-- jQuery -->
  		<script src="<?php echo $this->url->get("js/jquery.js"); ?>"></script>
 <script src="<?php echo $this->url->get("js/jquery-ui-1.10.2.custom.min.js"); ?>"></script>



	<style>
	body{
		padding:70px !important;
	}
	</style>
</head>
<body>



	 <?php echo $this->getContent(); ?>



<!-- Javascript files -->

		<!-- Bootstrap JS -->



		<script src="<?php echo $this->url->get("js/bootstrap.min.js"); ?>"></script>
      <!-- jQuery UI -->

      <!-- jQuery Peity -->
      <script src="<?php echo $this->url->get("js/peity.js"); ?>"></script>
      <!-- Calendar -->
      <script src="<?php echo $this->url->get("js/fullcalendar.min.js"); ?>"></script>
      <!-- jQuery Star rating -->
      <script src="<?php echo $this->url->get("js/jquery.rateit.min.js"); ?>"></script>
      <!-- prettyPhoto -->
      <script src="<?php echo $this->url->get("js/jquery.prettyPhoto.js"); ?>"></script>

      <!-- jQuery flot -->
      <!--[if lte IE 8]><script language="javascript" type="text/javascript" src="js/excanvas.min.js"></script><![endif]-->
      <script src="<?php echo $this->url->get("js/jquery.flot.js"); ?>"></script>
      <script src="<?php echo $this->url->get("js/jquery.flot.pie.js"); ?>"></script>
      <script src="<?php echo $this->url->get("js/jquery.flot.stack.js"); ?>"></script>
      <script src="<?php echo $this->url->get("js/jquery.flot.resize.js"); ?>"></script>



      <!-- Gritter plugin -->
   <!--   <script src="<?php echo $this->url->get("js/jquery.gritter.min.js"); ?>"></script> -->
      <!-- CLEditor -->
      <script src="<?php echo $this->url->get("js/jquery.cleditor.min.js"); ?>"></script>
      <!-- Date and Time picker -->
      <!--<script src="<?php echo $this->url->get("js/bootstrap-datetimepicker.min.js"); ?>"></script>-->
      <!-- jQuery Toggable -->
      <script src="<?php echo $this->url->get("js/bootstrap-switch.min.js"); ?>"></script>
		<!-- Respond JS for IE8 -->
		<script src="<?php echo $this->url->get("js/respond.min.js"); ?>"></script>
		<!-- HTML5 Support for IE -->
		<script src="<?php echo $this->url->get("js/html5shiv.js"); ?>"></script>
		<!-- Custom JS -->
	 <script src="<?php echo $this->url->get("js/custom.js"); ?>"></script>
	 <!-- CkeEditor -->
	 <script type="text/javascript" src="<?php echo $this->url->get('public/ckeditor/ckeditor.js') ?>"></script>

</body>
</html>

