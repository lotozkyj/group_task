<?php
return [
    "/" => "main@index",
    "/login" => "login@login",
    "/register" => "login@register",
    "/logout" => "login@logout",
    "/login/handle" => "login@loginhandle",
    "/register/handle" => "login@registerhandle",
    "/contacts" => "main@contacts",
    "/details" => "main@details",
    "/account" => "main@account",
    "/account/addcat" => "addCategories@userkeys"
];