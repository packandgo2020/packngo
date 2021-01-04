<?php
include "utilisateurc.php";
$utilisateurc=new utilisateurc() ;

    header('Content-Type: application/json');

    $aResult = array();

    if( !isset($_POST['functionname']) ) { $aResult['error'] = 'No function name!'; }

    if( !isset($_POST['arguments']) ) { $aResult['error'] = 'No function arguments!'; }

    if( !isset($aResult['error']) ) {

        switch($_POST['functionname']) {
            case 'checkEmail':
               if( !is_array($_POST['arguments']) || (count($_POST['arguments']) < 1) ) {
                   $aResult['error'] = 'Error
 in arguments!';
               }
               else {
                   $aResult['result'] = $utilisateurc->emailexiste($_POST['arguments'][0]);
               }
               break;

            default:
               $aResult['error'] = 'Not found function '.$_POST['functionname'].'!';
               break;
        }

    }

    echo json_encode($aResult);

?>