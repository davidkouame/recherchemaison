<?php 
class Cms5e3b403028fec085449905_a50ae830096fcfc5d20f9ebec5596d07Class extends Cms\Classes\PageCode
{
public function onStart(){
        \Auth::logout();
        return \Redirect::to("auth/login");
    }
}
