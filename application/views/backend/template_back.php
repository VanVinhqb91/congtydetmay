<!DOCTYPE html>
<!-- PHẦN DÀNH CHO ADMIN -->
<html>
    <head>
        <meta charset="UTF-8">
        <title><?php echo $title; ?></title>
        <meta name="keywords" content="abc">
        <meta name="description" content="abc">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url().'public/'.$modu.'/css/admin_back.css';?>"/>
        <script type="text/javascript" src="<?php echo base_url().'public/backend/ckeditor/ckeditor.js';?>"></script>
    </head>
    <body>
        <div id="header">
            <?php $this->load->view("$modu/header_back");?>
        </div>
        <div id="content">
            <?php $this->load->view($loadPage);?>
        </div>
        <div id="footer">
            <?php $this->load->view("$modu/footer_back");?>
        </div>
    </body>
</html>
