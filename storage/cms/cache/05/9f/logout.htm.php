<?php 
class Cms5e44036879904616257676_440d2ab38215141344ca6620d399fcedClass extends Cms\Classes\PageCode
{
public function onStart(){
        \Auth::logout();
        return \Redirect::to("auth/login");
    }
}
