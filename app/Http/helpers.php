<?php

use App\Models\GeneralSettings;
use App\Models\ServiceCategory;

function website_title(){
    return GeneralSettings::find(1)->website_title;
}

function copyright_text(){
    return GeneralSettings::find(1)->copyright_text;
}

function favicon(){
    return GeneralSettings::find(1)->favicon;
}

function logo(){
    return GeneralSettings::find(1)->logo;
}
