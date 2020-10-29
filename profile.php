<?PHP
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

//TODO: make the code better (bc its really shit) - nttZx
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS");
header("Access-Control-Allow-Headers: *");
require '../../inc/pdo.php';
require '../../inc/config.php';

$id = htmlspecialchars(trim($_GET['userid']));

$req1 = $db->prepare("SELECT users.look,users.username,users.motto,users.facebook,users.instagram,users.discord,user_stats.AchievementScore,user_stats.groupid FROM users,user_stats WHERE user_stats.id = ? AND users.id = ?");
$req1->execute(array($id, $id));

$ft1 = $req1->fetch();

            $req4 = $db->prepare("SELECT user_relationships.type,users.username FROM users,user_relationships WHERE user_relationships.user_id = ? AND users.id = user_relationships.target AND user_relationships.type = 1 ORDER BY RAND() LIMIT 0,1");
            $req4->execute(array($id));
			$ft4 = $req4->fetch();
			
            $req5 = $db->prepare("SELECT count(id) FROM user_relationships WHERE user_id = ? AND type = 1");
            $req5->execute(array($id));
            $ft5 = $req5->fetch();

            if ($ft5['count(id)'] > 1) {
				$cnt = $ft5['count(id)'] - 1;
				$count = $ft4['username'] . " and " . $cnt . " others.";
            }
			if($ft5['count(id)'] == 1){
                $count = $ft4['username'];
            }
			if($ft5['count(id)'] == 0){
				$count = "Nobody here!";
			}
			
			$req6 = $db->prepare("SELECT user_relationships.type,users.username FROM users,user_relationships WHERE user_relationships.user_id = ? AND users.id = user_relationships.target AND user_relationships.type = 2 ORDER BY RAND() LIMIT 0,1");
            $req6->execute(array($id));
			$ft6 = $req6->fetch();
			
            $req7 = $db->prepare("SELECT count(id) FROM user_relationships WHERE user_id = ? AND type = 2");
            $req7->execute(array($id));
            $ft7 = $req7->fetch();

            if ($ft7['count(id)'] > 1) {
				$cnt1 = $ft7['count(id)'] - 1;
				$count1 = $ft6['username'] . " and " . $cnt1 . " others.";
            }
			if($ft7['count(id)'] == 1){
                $count1 = $ft6['username'];
            }
			if($ft7['count(id)'] == 0){
				$count1 = "Nobody here!";
			}
			
			$req8 = $db->prepare("SELECT user_relationships.type,users.username FROM users,user_relationships WHERE user_relationships.user_id = ? AND users.id = user_relationships.target AND user_relationships.type = 3 ORDER BY RAND() LIMIT 0,1");
            $req8->execute(array($id));
			$ft8 = $req8->fetch();
			
            $req9 = $db->prepare("SELECT count(id) FROM user_relationships WHERE user_id = ? AND type = 3");
            $req9->execute(array($id));
            $ft9 = $req9->fetch();

            if ($ft9['count(id)'] > 1) {
				$cnt2 = $ft9['count(id)'] - 1;
				$count2 = $ft8['username'] . " and " . $cnt2 . " others.";
            }
			if($ft7['count(id)'] == 1){
                $count2 = $ft9['username'];
            }
			if($ft7['count(id)'] == 0){
				$count2 = "Nobody here!";
			}
			
			$req2 = $db->prepare("SELECT badge FROM groups WHERE id = ?");
            $req2->execute(array($ft1['groupid']));

            $ft2 = $req2->fetch();
			
			$req3 = $db->prepare("SELECT badge_id,badge_slot FROM user_badges WHERE badge_slot > 0 AND user_id = ? ORDER BY badge_slot ASC");
            $req3->execute(array($id));
			
			if(isset($ft2['badge']) == null){
			$bgrrp = false;
			} else {
				$bgrrp = $ft2['badge'];
			}

$array = [
	'look' => $ft1['look'],
	'username' => $ft1['username'],
	'motto' => $ft1['motto'],
	'instagram' => $ft1['instagram'],
	'discord' => $ft1['discord'],
	'facebook' => $ft1['facebook'],
	'winwin' => $ft1['AchievementScore'],
	'groupid' => $ft1['groupid'],
	'heart' => $count,
	'smile' => $count1,
	'headskull' => $count2,
	"badgegroup" => $bgrrp,
];

while($ft3 = $req3->fetch()) {
	$badge = "badge" . $ft3['badge_slot'];
	$array += [$badge => $ft3['badge_id']];
	}

echo json_encode($array);
?>