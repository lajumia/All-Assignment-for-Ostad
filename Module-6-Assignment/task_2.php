<?php

$sql_queries ="SELECT p.name as product_name, oi.quantity, oi.quantity * oi.unit_price as total_amount
FROM Order_Items oi
JOIN Products p ON oi.product_id = p.product_id
ORDER BY oi.order_id ASC;
";