<?php 
class Cms5e49773d7a6fb275005094_8425793f7ac958e76c8c4cc3bdbff5f3Class extends Cms\Classes\PageCode
{
public function onStart(){
        \Auth::logout();
        return \Redirect::to("auth/login");
    }
}
