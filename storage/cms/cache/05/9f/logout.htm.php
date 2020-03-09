<?php 
class Cms5e6637f34bbc4697729463_6a94730507dde9a5d6dcce8a07d16203Class extends Cms\Classes\PageCode
{
public function onStart(){
        \Auth::logout();
        return \Redirect::to("auth/login");
    }
}
