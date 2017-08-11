<?php
/**
 * Created by PhpStorm.
 * User: liang
 * Date: 2017/3/8
 * Time: 13:34
 */

namespace App;

use App\AdminModel\Admin;
use App\AdminModel\Archive;
use Carbon\Carbon;

class Notification
{
    public  function Notificate(){
        $notifications=array();
        foreach (Admin::first()->unreadNotifications as $notification) {
            if (class_basename($notification->type)=='MailSendNotification'){
                $notifications[]=$notification->data[0];
            }

        }
        return $notifications;
    }
    public function ArticleNotificate(){
        $articlenotifications=array();
        foreach (auth('admin')->user()->unreadNotifications as $notification) {
            if (class_basename($notification->type)=='ArticlePublishedNofication'){
                $articlenotifications[]=$notification->data[0];
            }

        }
        return $articlenotifications;
    }
    function Allnotifications (){
        $allnotifications=array();
        foreach (auth('admin')->user()->unreadNotifications as $notification) {
                $allnotifications[]=$notification;
        }
       return $allnotifications;
    }
    public function taskNotification()
    {
        $articleUsers=array_unique(Archive::where('created_at','>',Carbon::today())->where('created_at','<',Carbon::now())->pluck('write')->toArray());
        $colorStyle=['aqua','green','blue','red','yellow'];
        $labelStyle=['label-danger','label-info','label-warning','label-success','label-primary','label-default'];
        $taskDatas=['articleUsers'=>$articleUsers,'colorStyle'=>$colorStyle,'labelStyle'=>$labelStyle];
       return $taskDatas;
    }
}