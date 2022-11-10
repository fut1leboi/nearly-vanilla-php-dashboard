<?php
namespace App\Models;

use App\Structure\Model;

class Room extends Model{

    protected $table = "rooms";
    protected $fields = ['number', 'capacity', 'pc_amount', 'type', 'responsible_person'];
}