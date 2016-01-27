<?php
//require any file that is in the model folder
require_once ('model.php');

$action = filter_input(INPUT_GET, 'action');
if ($action==NULL){
    $action = filter_input(INPUT_POST, 'action');
    if ($action==NULL){
        $action = 'home_view';
    }
}

if ($action == 'home_view') {
    $title = 'Understanding Portfolio';
    include ('home_view.php');

} else {
	$title = get_title($action);
	$content='';
	$content = get_content($action);
	include ('code_view.php');
}

?>