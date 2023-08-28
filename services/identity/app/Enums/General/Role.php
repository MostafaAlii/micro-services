<?php
declare(strict_types=1);
namespace App\Enums\General;
enum Role: string {
    case Admin = 'admin';
    case MANAGER = 'manager';
    case WAREHOUSE = 'warehouse';
    case User = 'user';
}