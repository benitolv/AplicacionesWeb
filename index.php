<?php header("Content-Type: text/html;charset=utf-8");?>
<?php //session_start();

    define('DS',DIRECTORY_SEPARATOR);
    define('ROOT',realpath(dirname(__FILE__)).DS);
    define('URL',"http://localhost/escuela/");

    require_once ("AppData/Config/Autoload.php");
   \AppData\config\Autoload::run();
  if (!isset($_SERVER["HTPP_X_REQUEST_WITH"])&&(isset($_GET['url'])?!((stristr($_GET['url'],'print'))&&(stristr($_GET['url'],'pdf'))):true))
     Views\Template::head();
  if (!isset($_SERVER["HTPP_X_REQUEST_WITH"])&&(isset($_GET['url'])?!((stristr($_GET['url'],'print'))&&(stristr($_GET['url'],'pdf'))):true))
      Views\Template::nav();
  AppData\Config\Enrutador::run(new AppData\Config\Request());
  if (!isset($_SERVER["HTPP_X_REQUEST_WITH"])&&(isset($_GET['url'])?!((stristr($_GET['url'],'print'))&&(stristr($_GET['url'],'pdf'))):true))
     Views\Template::footer();
         # code...
<<<<<<< HEAD
=======


>>>>>>> 6b9c16fc3c1ecf23d192e67cb52263ede2df98e0
    
?>
