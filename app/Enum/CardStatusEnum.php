<?php
namespace App\Enum;


enum CardStatusEnum:string
{
    case CAN = 'can';
    case CANT = 'cant';
    case REPEAT = 'repeat';
}
