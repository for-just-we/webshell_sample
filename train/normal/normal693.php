<?php
$config = getconfig();
	$stats = getstats();
	$keys = getkeys();
	$statistics = new Statistics();
	
	$serverStatus = $statistics->checkServer("173.0.57.230:443");
	
switch($_GET['get']) {
		default:
			echo 'No get variable set (api.php?get=x).<br /><br />Possible options:<br /><ul><li>server-running</li><li>server-uptime</li><li>dropdown-time</li><li>happy-hour</li></ul>';
			echo '<h1>' . $stats['happy_hour_elapsed'] . '</h1>';
		break;

		
		case "keyload-dropdown":
			echo $config['keyload_dropdown'];
		break;
		
		case "keyload-interval":
			echo $config['keyload_dropdown_interval'];
		break;
		
		case "dropdown-time":
			$secondsLeft = $config['keyload_dropdown_interval'] - $stats['elapsed_key_check_interval'];
		
			if($secondsLeft > 60) {
					echo floor($secondsLeft / 60) . ' minutes ';
					echo ($secondsLeft % 60). ' seconds';
			}
			else {
				echo $secondsLeft . ' seconds';
			}
		break;
		
		case "happy-hour":
				$secondsLeft = ACCEPTING_NEW_PEOPLE_IN - $stats['happy_hour_elapsed'];
				
				if($secondsLeft < 0) {
					echo '<p class="notification green">Happy Hour!</p>';
				}
				else {
					if($secondsLeft > 3600) {
						echo floor($secondsLeft / 3600) . ' hours ';
						echo floor(($secondsLeft % 3600) / 60) . ' minutes';
					}
					elseif($secondsLeft > 60) {
						echo floor($secondsLeft / 60) . ' minutes ';
						echo ($secondsLeft % 60) . ' seconds';
					}
					else {
						echo $secondsLeft . ' seconds';
					}
				}
		break;
	}
?>