<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />

    <!--[if gt IE 8]>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <![endif]-->

    <title>Sistema - Administrativo</title>

    <link href="css/stylesheets.css" rel="stylesheet" type="text/css" />
    <!--[if lt IE 10]>
    <link href="css/ie.css" rel="stylesheet" type="text/css"/>
    <![endif]-->
    <link rel="icon" type="image/ico" href="favicon.ico"/>

    <script type='text/javascript' src='js/plugins/jquery/jquery-1.10.2.min.js'></script>
    <script type='text/javascript' src='js/plugins/jquery/jquery-ui-1.10.1.custom.min.js'></script>
    <script type='text/javascript' src='js/plugins/jquery/jquery-migrate-1.1.1.min.js'></script>

    <script type='text/javascript' src='js/plugins/jquery/globalize.js'></script>
    <script type='text/javascript' src='js/plugins/other/excanvas.js'></script>

    <script type='text/javascript' src='js/plugins/other/jquery.mousewheel.min.js'></script>

    <script type='text/javascript' src='js/plugins/bootstrap/bootstrap.min.js'></script>

    <script type='text/javascript' src='js/plugins/cookies/jquery.cookies.2.2.0.min.js'></script>

    <script type='text/javascript' src='js/plugins/fancybox/jquery.fancybox.pack.js'></script>

    <script type='text/javascript' src='js/plugins/jflot/jquery.flot.js'></script>
    <script type='text/javascript' src='js/plugins/jflot/jquery.flot.stack.js'></script>
    <script type='text/javascript' src='js/plugins/jflot/jquery.flot.pie.js'></script>
    <script type='text/javascript' src='js/plugins/jflot/jquery.flot.resize.js'></script>

    <script type='text/javascript' src='js/plugins/epiechart/jquery.easy-pie-chart.js'></script>
    <script type='text/javascript' src='js/plugins/knob/jquery.knob.js'></script>

    <script type='text/javascript' src='js/plugins/sparklines/jquery.sparkline.min.js'></script>

    <script type='text/javascript' src='js/plugins/pnotify/jquery.pnotify.min.js'></script>

    <script type='text/javascript' src='js/plugins/fullcalendar/fullcalendar.min.js'></script>

    <script type='text/javascript' src='js/plugins/datatables/jquery.dataTables.min.js'></script>

    <script type='text/javascript' src='js/plugins/wookmark/jquery.wookmark.js'></script>

    <script type='text/javascript' src='js/plugins/jbreadcrumb/jquery.jBreadCrumb.1.1.js'></script>

    <script type='text/javascript' src='js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js'></script>

    <script type='text/javascript' src="js/plugins/uniform/jquery.uniform.min.js"></script>
    <script type='text/javascript' src="js/plugins/select/select2.min.js"></script>
    <script type='text/javascript' src='js/plugins/tagsinput/jquery.tagsinput.min.js'></script>
    <script type='text/javascript' src='js/plugins/maskedinput/jquery.maskedinput-1.3.min.js'></script>
    <script type='text/javascript' src='js/plugins/multiselect/jquery.multi-select.min.js'></script>

    <script type='text/javascript' src='js/plugins/validationEngine/languages/jquery.validationEngine-en.js'></script>
    <script type='text/javascript' src='js/plugins/validationEngine/jquery.validationEngine.js'></script>
    <script type='text/javascript' src='js/plugins/stepywizard/jquery.stepy.js'></script>

    <script type='text/javascript' src='js/plugins/animatedprogressbar/animated_progressbar.js'></script>
    <script type='text/javascript' src='js/plugins/hoverintent/jquery.hoverIntent.minified.js'></script>

    <script type='text/javascript' src='js/plugins/media/mediaelement-and-player.min.js'></script>

    <script type='text/javascript' src='js/plugins/cleditor/jquery.cleditor.js'></script>

    <script type='text/javascript' src='js/plugins/shbrush/XRegExp.js'></script>
    <script type='text/javascript' src='js/plugins/shbrush/shCore.js'></script>
    <script type='text/javascript' src='js/plugins/shbrush/shBrushXml.js'></script>
    <script type='text/javascript' src='js/plugins/shbrush/shBrushJScript.js'></script>
    <script type='text/javascript' src='js/plugins/shbrush/shBrushCss.js'></script>

    <script type='text/javascript' src='js/plugins/filetree/jqueryFileTree.js'></script>

    <script type='text/javascript' src='js/plugins/slidernav/slidernav-min.js'></script>
    <script type='text/javascript' src='js/plugins/isotope/jquery.isotope.min.js'></script>
    <script type='text/javascript' src='js/plugins/jnotes/jquery-notes_1.0.8_min.js'></script>
    <script type='text/javascript' src='js/plugins/jcrop/jquery.Jcrop.min.js'></script>
    <script type='text/javascript' src='js/plugins/ibutton/jquery.ibutton.min.js'></script>

    <script type='text/javascript' src='js/plugins/scrollup/jquery.scrollUp.min.js'></script>

    <script type='text/javascript' src='js/plugins.js'></script>
    <script type='text/javascript' src='js/charts.js'></script>
    <script type='text/javascript' src='js/actions.js'></script>

</head>
<body>

    <div class="header">

    </div>    
    
    <div class="login" id="login">
        <div class="wrap">
            <h1>Insira o login</h1>
            <form action="modulos/frota/functions/logar.php" method="post" id="validate">
            <div class="row-fluid">
                <div class="input-prepend">
                    <span class="add-on"><i class="icon-user"></i></span>
                    <input type="text" name="login"  placeholder="Login" style="width: 250px;"/>
                </div>                                                 
                <div class="input-prepend">
                    <span class="add-on"><i class="icon-exclamation-sign"></i></span>
                    <input type="password" name="senha" placeholder="Senha" style="width: 250px;"/>
                </div>          
                <div class="dr"><span></span></div>                                
            </div>                
            <div class="row-fluid">
                <div class="span8 remember">                    
                    <input type="checkbox" name="rem"/> Remember me                    
                </div>
                <div class="span4    TAR">
                    <input type="submit" class="btn btn-block btn-primary" value="Log In"/>
                </div>
            </div>
            </form>

        </div>
    </div>
    


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

 
    
</body>
</html>
