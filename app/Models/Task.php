<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use function PHPUnit\Framework\returnSelf;

class Task extends Model
{
    use HasFactory;

    private static $tasks = [
        [
            'id' => 1,
            'name'=> 'Laravel Jarviscamp',
            'description'=> 'Membuat Routes, View, Model dan Controller',
            'deadline' => '2023-07-30',
            'status' => 'Selesai',
        ],
        [
            'id' => 2,
            'name'=> 'Sistem Cerdas',
            'description'=> 'Monitoring Ubuntu Server dengan Bot Telegram',
            'deadline' => '2023-07-31',
            'status' => 'Belum Selesai',
        ],
        [
            'id' => 3,
            'name'=> 'Sistem Administrator',
            'description'=> 'Membuat Webserver di Ubuntu 18.04',
            'deadline' => '2023-07-1',
            'status' => 'Belum Selesai',
        ],
    ];

    public static function getData(){
        return self::$tasks;
    }

    public static function getById($id){
        $AllTask =  self::$tasks;
        $taskById = [];
        foreach ($AllTask as $task) {
            if ($task ['id']==$id) {
                $taskById = $task;
            }
        }

        return $taskById;
    }
}
