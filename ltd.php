<?PHP
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS");
header("Access-Control-Allow-Headers: *");
/*
  _________________________________________________
 |                                                 |
 |          _____ ___  ___ _____          __       |
 |         /  __ \|  \/  |/  ___|        /  |      |
 |        _| /  \/| .  . |\ `--.  __   __`| |      |
 |     / __| |    | |\/| | `--. \ \ \ / / | |      |
 |     \__ \ \__/\| |  | |/\__/ /  \ V / _| |_     |
 |     |___/\____/\_|  |_/\____/    \_/  \___/     |
 |                                                 |
 |              #front-end: s63#9999               |
 |       #back-end: Explorz#1337 | nttZx#0013      |
 |   Thanks to everyone who contributed to Rise.   |
 |_________________________________________________|
*/

require '../../inc/pdo.php';
require '../../inc/config.php';

$id = $_GET['itemid'];


if ($id == null) {
    die('ID can\'t be null !');
} else {
    $req1 = $db->prepare("SELECT items.id,items.base_item,items.limited_number,items.limited_stack,catalog_items.cost_credits,catalog_items.cost_pixels,catalog_items.cost_diamonds,catalog_items.catalog_name FROM items,catalog_items WHERE items.id = ? AND catalog_items.id = items.base_item");
    $req1->execute(array($id));

    $ft1 = $req1->fetch();

    $req2 = $db->prepare("SELECT count(id) FROM items WHERE base_item = ?");
    $req2->execute(array($ft1['base_item']));
    $ft2 = $req2->fetch();
    if ($ft1['cost_credits'] != 0) {
        $credit = $ft1['cost_credits'];
        $try1 = "credits-ok";
        if ($ft1['cost_diamonds'] != 0) {
            $diamonds = $ft1['cost_diamonds'];
            if ($try1 = "credits_ok") {
                $price = $credit . " <img src=\"./assets/img/ncredits.png\" style=\"margin-bottom: -2%;\"> " . $diamonds . " <img src=\"../img/ndiamonds.png\" style=\"margin-bottom: -2%;height: 15px;\">";
            }
        } else {
            $price = $credit . "  <img src=\"./assets/img/ncredits.png\" style=\"margin-bottom: -2%;\"> ";
        }
    } else {
        $diamonds = $ft1['cost_diamonds'];
        $price = $diamonds . "  <img src=\"./assets/img/ndiamonds.png\" style=\"margin-bottom: -2%;height: 15px;\">";
    }
}


if ($ft1['limited_stack'] == null) {
    die('It only works for LTD items !');
}

$array = array(
    "name" => $ft1['catalog_name'],
    "price" => $price,
    "circulation" => $ft2['count(id)'],
	"nb_sales" => $ft1['limited_stack'],
	"ltd_no" => $ft1['limited_number']
);

echo json_encode($array);


?>