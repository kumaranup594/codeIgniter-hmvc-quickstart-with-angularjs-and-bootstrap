<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link href="<?php echo base_url() ?>assets/boostrap4/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>

        <title>
            <?php echo isset($page_title)?$page_title:'Default Page title'; ?>
        </title>
        <script src="<?php echo base_url() ?>assets/angularjs/angular.min.js" type="text/javascript"></script>
        <script type="text/javascript">
            var app = angular.module('nexgiApp', []);
            var BASE_URL = "<?php echo base_url() ?>";
        </script>
    </head>
    <body ng-app="nexgiApp" ng-cloak>
        <header>
            
        </header>
        <main>
            <?php echo $content; ?>
        </main>
        <footer>
            
        </footer>
        
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="<?php echo base_url() ?>assets/jquery/jquery-3.2.1.slim.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url() ?>assets/boostrap4/js/popper.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url() ?>assets/boostrap4/js/bootstrap.min.js" type="text/javascript"></script>
    </body>
</html>