<?php
$pid = $_GET['page-id'];
if($pid > 1) {
	echo '<a href="?page=' . $_GET['page'] . '&amp;page-id=' . 1 . '#keys">&lt;&lt;</a>';
	echo '<a href="?page=' . $_GET['page'] . '&amp;page-id=' . ($pid - 1) . '#keys">&lt;</a>';
}
if(($pid - 2) > 0) {
	$i = $pid - 2;
}
else {
	$i = 1;
}
if(($pid + 2) <= $tPages) {
	$mPage = $pid + 2;
}
else {
	$mPage = $tPages;
}
while($i <= $mPage) {
	echo '<a href="?page=' . $_GET['page'] . '&amp;page-id=' . $i . '#keys"';
	if($pid == $i) {
		echo ' class="current"';
	}
	echo '>' . $i . '</a>';
	$i++;
}
if($pid < $tPages) {
	echo '<a href="?page=' . $_GET['page'] . '&amp;page-id=' . ($pid + 1) . '#keys">&gt;</a>';
	echo '<a href="?page=' . $_GET['page'] . '&amp;page-id=' . $tPages. '#keys">&gt;&gt;</a>';
}
?>