<?php

namespace bootnetcrasher\House\Components;

use Cms\Classes\ComponentBase;
use DB;
use Flash;
use Redirect;
use Validator;
use ValidationException;
use Auth;
use bootnetcrasher\House\Models\DemarcheurModel;
use RainLab\User\Components\Account;

require_once(__DIR__ . './../../sms/plugin/Sms4all-php/autoload.php');

class SendSms extends Account {

    public function componentDetails() {
        return [
            'name' => 'Send sms',
            'description' => 'Send sms'
        ];
    }

    public function onStart() {
    }

    public function onRun() {
    }

    public function onSendSms(){
        $tel = "225".post('tel');
        $message = post('message');
        $api_client = new \Sms4all\ApiClient();
        $sendsms_api = new \Sms4all\Api\SendsmsAPI($api_client);
        $sendsms_api->sendSms("43WY45AM85", $message, "Chapmaison", $tel);
        \Flash::success("Le sms a été envoyé avec succès !");
        return \Redirect::to('send-sms');
    }
}
