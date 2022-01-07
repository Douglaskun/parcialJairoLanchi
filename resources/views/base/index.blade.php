<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Quixlab - Bootstrap Admin Dashboard Template by Themefisher.com</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
    <!-- Pignose Calender -->
    <link href="./plugins/pg-calendar/css/pignose.calendar.min.css" rel="stylesheet">
    <!-- Chartist -->
    {!! Html::style("quixlab/themes/quixlab/plugins/chartist/css/chartist.min.css") !!}
    {!! Html::style("quixlab/themes/quixlab/plugins/chartist-plugin-tooltips/css/chartist-plugin-tooltip.css") !!}
    {!! Html::style("quixlab/themes/quixlab/css/style.css") !!}
    <!--  <link rel="stylesheet" href="./plugins/chartist/css/chartist.min.css">
    <link rel="stylesheet" href="./plugins/chartist-plugin-tooltips/css/chartist-plugin-tooltip.css">-->
    <!-- Custom Stylesheet 
   
    <link href="css/style.css" rel="stylesheet">-->

</head>

<body>

    <!--*******************
        Preloader start
    ********************-->
    @include('base.Preloader')
    <!--*******************
        Preloader end
    ********************-->

    
    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        @include('base.NavHeader')
        <!--**********************************
            Nav header end
        ***********************************-->

        <!--**********************************
            Header start
        ***********************************-->
        @include('base.Header')
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        @include('base.Sidebar')
        <!--**********************************
            Sidebar end
        ***********************************-->

        <!--**********************************
            Content body start
        ***********************************-->
        @include('base.ContentBody')
        <!--**********************************
            Content body end
        ***********************************-->
        
        
        <!--**********************************
            Footer start
        ***********************************-->
        @include('base.Footer')
        <!--**********************************
            Footer end
        ***********************************-->
    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    {!! Html::style("quixlab/themes/quixlab/css/style.css") !!}

    {!! Html::script('quixlab/themes/quixlab/plugins/common/common.min.js') !!}
    {!! Html::script('quixlab/themes/quixlab/js/custom.min.js') !!}
    {!! Html::script('quixlab/themes/quixlab/js/settings.js') !!}
    {!! Html::script('quixlab/themes/quixlab/js/gleek.js') !!}
    {!! Html::script('quixlab/themes/quixlab/js/styleSwitcher.js') !!}
 <!--   <script src="plugins/common/common.min.js"></script>
    <script src="js/custom.min.js"></script>
    <script src="js/settings.js"></script>
    <script src="js/gleek.js"></script>
    <script src="js/styleSwitcher.js"></script>-->

    <!-- Chartjs -->
    {!! Html::script('quixlab/themes/quixlab/plugins/chart.js/Chart.bundle.min.js') !!}
    <!-- <script src="./plugins/chart.js/Chart.bundle.min.js"></script>
   
        Circle progress -->
    {!! Html::script('quixlab/themes/quixlab/plugins/circle-progress/circle-progress.min.js') !!}
   <!-- <script src="./plugins/circle-progress/circle-progress.min.js"></script>
    
    Datamap -->
    {!! Html::script('quixlab/themes/quixlab/plugins/d3v3/index.js') !!}
    {!! Html::script('quixlab/themes/quixlab/plugins/topojson/topojson.min.js') !!}
    {!! Html::script('quixlab/themes/quixlab/plugins/datamaps/datamaps.world.min.js') !!}
  <!--  <script src="./plugins/d3v3/index.js"></script>
    <script src="./plugins/topojson/topojson.min.js"></script>
    <script src="./plugins/datamaps/datamaps.world.min.js"></script>
     
    Morrisjs -->
    {!! Html::script('quixlab/themes/quixlab/plugins/raphael/raphael.min.js') !!}
    {!! Html::script('quixlab/themes/quixlab/plugins/morris/morris.min.js') !!}
   <!-- <script src="./plugins/raphael/raphael.min.js"></script>
    <script src="./plugins/morris/morris.min.js"></script>
     
    Pignose Calender -->
    {!! Html::script('quixlab/themes/quixlab/plugins/moment/moment.min.js') !!}
    {!! Html::script('quixlab/themes/quixlab/plugins/pg-calendar/js/pignose.calendar.min.js') !!}
   <!-- <script src="./plugins/moment/moment.min.js"></script>
    <script src="./plugins/pg-calendar/js/pignose.calendar.min.js"></script>
     
    ChartistJS -->
    {!! Html::script('quixlab/themes/quixlab/plugins/chartist/js/chartist.min.js') !!}
    {!! Html::script('quixlab/themes/quixlab/plugins/chartist-plugin-tooltips/js/chartist-plugin-tooltip.min.js') !!}
    {!! Html::script('quixlab/themes/quixlab/js/dashboard/dashboard-1.js') !!}
  <!--  <script src="./plugins/chartist/js/chartist.min.js"></script>
    <script src="./plugins/chartist-plugin-tooltips/js/chartist-plugin-tooltip.min.js"></script>



    <script src="./js/dashboard/dashboard-1.js"></script>-->

</body>

</html>