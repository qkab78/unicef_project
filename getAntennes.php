<?php
/**
 * Created by PhpStorm.
 * User: Quentin
 * Date: 01/02/2017
 * Time: 15:20
 */

require "scripts/bdd.php";
$q = intval($_GET['q']);
$req_antennes = "SELECT * from users_office WHERE office_user_id='".$q."'";
$res_antennes = mysqli_query($bdd, $req_antennes);
$returnArray = array();
if ($data = mysqli_fetch_array($res_antennes)){
    $office_user_id = json_encode($data['office_user_id']);
    $lastname = json_encode($data['lastname']);
    $firstname = json_encode($data['firstname']);
    $office_name = json_encode($data['office_name']);
    $office_description = json_encode($data['office_description']);
    $team_photo = json_encode($data['team_photo']);
    $user_photo =  json_encode($data['user_photo']);
    $email = json_encode($data['email']);
    $address = json_encode($data['address']);
    $phone_number = json_encode($data['phone_number']);

    /*$returnArray['office_id'] = $office_user_id;
    $returnArray['lastname'] = $lastname;
    $returnArray['firstname'] = $firstname;*/

    echo json_encode($data);
}