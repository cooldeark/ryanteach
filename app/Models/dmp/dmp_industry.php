<?php

//namespaces need to locate your file position <==very important
namespace App\Models\dmp;

use Illuminate\Notifications\Notifiable;//if don't import this doesn't matter
use Illuminate\Database\Eloquent\Model;

class dmp_industry extends Model
{
    //無法批量給值得欄位，類似黑名單
    protected $guarded = [];

    use Notifiable;
    public $table = 'dmp_industry';
    //不使用laravel預設的timestamp欄位
    public $timestamps = false;

    //更改連線的DB
    // protected $connection = 'report';

    //更改時間戳儲存的欄位名稱
    // const CREATED_AT = 'create_time';
    // const UPDATED_AT = 'update_time';
}
?>
