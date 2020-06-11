<?php 
class Cms5ee102c79d5c6008079330_af450064edbf55b8257d8cc0d150da77Class extends Cms\Classes\PageCode
{
public function onStart(){
        \Auth::logout();
        return \Redirect::to("auth/login");
    }
}
