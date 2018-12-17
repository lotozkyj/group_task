<?php
function action_index(){
    $data = [
        "title"=>"Главная",
        "user"=>auth_currentUser()
    ];
    $data['errors'] = @$_SESSION["errors"];
    if($data['errors']!=null) unset($_SESSION["errors"]);
    return renderViewWithTemplate("main","default", $data);
}
function action_contacts(){
    $data=[];
    $data["title"]="Контакты";

    return renderViewWithTemplate("contacts","default",$data);
}
function action_details(){
    $data = [];
    $data["title"] = "Информация";
}
function action_account(){
    $data=[];
    $data["title"]="Личный кабинет";
    $data["old"] = @$_SESSION["old"];
    return renderViewWithTemplate("details","default",$data);
}