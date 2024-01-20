<?php

namespace App\Table;

use App\Model\Order;
use PDO;

final class OrderTable extends Table {

    protected $table = 'orders';
    protected $class = Order::class;
    protected $fetchMode = PDO::FETCH_CLASS;
    protected $fetchFunction = 'fetchAll';

    public function selectOrders(): array
    {
        $this->sql = 
        "SELECT o.id, o.hour, o.message, c.first_name AS firstname, c.last_name AS lastname
        FROM {$this->table} AS o
        JOIN customers AS c ON c.user_id = o.customer_id
        WHERE o.date = CURDATE()
        ORDER BY o.hour";
        return $this->getDatas();
    }

    

}