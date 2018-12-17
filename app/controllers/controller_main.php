<?php
function action_index(){

    return renderViewWithTemplate("main","default",[
        "title"=>"Главная",
        "user"=>auth_currentUser()
    ]);
}
function action_contacts(){
    $data=[];
    $data["title"]="Контакты";

    return renderViewWithTemplate("contacts","default",$data);
}

function action_details(){
    $data=[];
    $data["title"]="Информация";

    return renderViewWithTemplate("details","default",$data);
}