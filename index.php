require_once("./config/properties.php");
require_once('./class/business/getFormAction.php');

$action = new getFormAction();

  $action->saveDbPostData($_POST);
  require("./view/post.php");
  break;
