<html>
    <head>
        <link href="/assets/styles/styles.css" rel="stylesheet" type="text/css" />
        <title><?php echo $title ?> - McMaster Marauders</title>
    </head>
    <body>
        <div class="headerarea">
            <?php $this->load->view('templates/header'); ?>
        </div>
        <div class="navigationarea">
            <?php $this->load->view('templates/navigation'); ?>
        </div>
        <div class="bodyarea">
            <?php $this->load->view('pages/' . $body); ?>
        </div>
        <div class="footerarea">
            <?php $this->load->view('templates/footer'); ?>
        </div>
    </body>
</html>