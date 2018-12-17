<?php

function getCategoriesByUserId($user_id){
    $getAllCategories = fs_getAll(fs_filename("user_categories"));
    $userCategories = [];
    return $userCategories;
}

function addCategoryByUserId($cat, $user_id){

}