<?php


function deleteAction($id)

{

    $action = "";

    if ($_SESSION['user']['rule_id'] == 2 || $_SESSION['user']['rule_id'] == 6) {
        $action = '
        <td>
        	<a href="?action=delete&ids=' . $id . '" class="delete" id="delete">
		   	<i class="fa fa-pencil"></i>حذف
         	</a>
		</td>
        ';
    }

    echo $action;
}
