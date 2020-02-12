<?php 
class Cms5e41ae597cccc018565143_266c27d48ac01471bd0b48e0263b8e8fClass extends Cms\Classes\PageCode
{
public function onStart(){
        \Auth::logout();
        return \Redirect::to("auth/login");
    }
}
