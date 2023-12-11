<?php

$pdo = new PDO('mysql:dbname=pizzeria;host=127.0.0.1', 'root', '12PoisHaie74?',
  [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);

########################################################################################################################

// Users creation
$users = [
  [
    'email' => 'gustavo@gustavopizza.fr',
    'password' => password_hash('GusP1??A2023', PASSWORD_BCRYPT),
    'role' => 'admin'
  ],
  [
    'email' => 'johnsmith@example.com',
    'password' => password_hash('JSm2023!', PASSWORD_BCRYPT),
    'role' => 'client'
  ],
  [
    'email' => 'marie.martin@example.com',
    'password' => password_hash('MaM2023!', PASSWORD_BCRYPT),
    'role' => 'client'
  ]
];
foreach ($users as $user) {
  $pdo->exec("INSERT INTO users (id, email, password, role) VALUES (
      UUID(), '{$user['email']}', '{$user['password']}', '{$user['role']}'
    )
  ");
}

// Retrieving customers id
$query = $pdo->prepare("SELECT id FROM users WHERE role = :role");
$query->execute(['role' => 'client']);
$usersId = $query->fetchAll(PDO::FETCH_COLUMN);

########################################################################################################################

// Customers creation
$customers = [
  [
    'first_name' => 'John',
    'last_name' => 'Smith',
    'phone' => '0033606060606',
    'user_id' => $usersId[0]
  ],
  [
    'first_name' => 'Marie',
    'last_name' => 'Martin',
    'phone' => '0033300000000',
    'user_id' => $usersId[1]
  ]
];
foreach ($customers as $customer) {
  $pdo->exec("INSERT INTO customers (first_name, last_name, phone, user_id) VALUES (
      '{$customer['first_name']}', '{$customer['last_name']}', '{$customer['phone']}', '{$customer['user_id']}'
    )
  ");
}

########################################################################################################################

$customersId = $usersId;

// Orders creation
$orders = [
  [
    'hour' => '19:00',
    'message' => NULL,
    'state' => 1,
    'customer_id' => $customersId[0]
  ],
  [
    'hour' => '20:00',
    'message' => 'Bonjour, ma fille est trés allergique au soja, pouvez-vous me confirmer que la pizza Pimento ne
      contient pas de soja ? Merci',
    'state' => 1,
    'customer_id' => $customersId[1]
  ]
];
foreach ($orders as $order) {
  $pdo->exec("INSERT INTO orders (id, date, hour, message, state, customer_id) VALUES (
      UUID(), NOW(), '{$order['hour']}', '{$order['message']}', {$order['state']}, '{$order['customer_id']}'
    )
  ");
}

// Retrieving orders id
$query = $pdo->prepare("SELECT id FROM orders ORDER BY date, hour");
$query->execute();
$ordersId = $query->fetchAll(PDO::FETCH_COLUMN);

########################################################################################################################

// Pizzas creation
$pizzas = [
  ['name' => 'La Calzone', 'price' => 12.99],
  ['name' => 'La Campania', 'price' => 13.99],
  ['name' => 'La Formaggio', 'price' => 12.99],
  ['name' => 'La Margherita', 'price' => 11.49],
  ['name' => 'La Pepperoni', 'price' => 12.99],
  ['name' => 'La Pimento', 'price' => 13.99],
  ['name' => 'La Primavera', 'price' => 12.99],
  ['name' => 'La Regina', 'price' => 12.99],
  ['name' => 'La Salmone', 'price' => 14.99],
  ['name' => 'La Vegetariano', 'price' => 12.99]
];
foreach ($pizzas as $pizza) {
  $pdo->exec("INSERT INTO pizzas (name, price) VALUES ('{$pizza['name']}', {$pizza['price']})");
}

########################################################################################################################

// Extras creation
$extras = [
  ['name' => 'Extra Basilic', 'price' => 1.99],
  ['name' => 'Extra Burrata', 'price' => 3.99],
  ['name' => 'Extra Viande hachée', 'price' => 2.99],
  ['name' => 'Extra Truffe', 'price' => 3.99]
];
foreach ($extras as $extra) {
  $pdo->exec("INSERT INTO extras (name, price) VALUES ('{$extra['name']}', {$extra['price']})");
}

########################################################################################################################

// Drinks creation
$drinks = [
  ['name' => 'Evian 50cl', 'price' => 2.00],
  ['name' => 'Perrier 33cl', 'price' => 2.00],
  ['name' => 'Coca-cola 33cl', 'price' => 2.00],
  ['name' => 'Tropicana 33cl', 'price' => 2.00],
  ['name' => 'Heineken 25cl', 'price' => 3.00],
  ['name' => 'Ice Tea 33cl', 'price' => 2.00],
  ['name' => 'Sprite 33cl', 'price' => 2.00],
  ['name' => 'Jupiler 25cl', 'price' => 3.00]
];
foreach ($drinks as $drink) {
  $pdo->exec("INSERT INTO drinks (name, price) VALUES ('{$drink['name']}', {$drink['price']})");
}

########################################################################################################################

// Orderlines creation
$orderlines = [
  ['pizza_id' => 4, 'extra_id' => 1, 'drink_id' => 1, 'quantity' => 1, 'order_id' => $ordersId[0]],
  ['pizza_id' => 4, 'extra_id' => 1, 'drink_id' => 4, 'quantity' => 2, 'order_id' => $ordersId[0]],
  ['pizza_id' => 9, 'extra_id' => 4, 'drink_id' => 5, 'quantity' => 1, 'order_id' => $ordersId[0]],
  ['pizza_id' => 6, 'extra_id' => 2, 'drink_id' => 2, 'quantity' => 2, 'order_id' => $ordersId[1]],
  ['pizza_id' => 1, 'extra_id' => 3, 'drink_id' => 2, 'quantity' => 1, 'order_id' => $ordersId[1]],
  ['pizza_id' => 4, 'extra_id' => 2, 'drink_id' => 2, 'quantity' => 3, 'order_id' => $ordersId[1]],
  ['pizza_id' => 9, 'extra_id' => 'NULL', 'drink_id' => 4, 'quantity' => 3, 'order_id' => $ordersId[1]]
];
foreach ($orderlines as $orderline) {
  $pdo->exec("INSERT INTO orderlines (pizza_id, extra_id, drink_id, quantity, order_id) VALUES (
      {$orderline['pizza_id']}, {$orderline['extra_id']}, {$orderline['drink_id']}, {$orderline['quantity']},
      '{$orderline['order_id']}'
    )
  ");
}

########################################################################################################################

// Ingredients creation
$ingredients = [
  ['name' => 'Sauce tomate'], ['name' => 'Mozzarella fior di latte'], ['name' => 'Crème légère'], ['name' => 'Cheddar'],
  ['name' => 'Parmesan'], ['name' => 'Chèvre'], ['name' => 'Saumon'], ['name' => 'Oignons'], ['name' => 'Champignons'],
  ['name' => 'Poivrons'], ['name' => 'Olives noires'], ['name' => 'Pepperoni'], ['name' => 'Poulet rôti'],
  ['name' => 'Piment'], ['name' => 'Sauce piquante'], ['name' => 'Jambon'], ['name' => 'Oeufs'], ['name' => 'Lardons'],
  ['name' => 'Pommes de terre'], ['name' => 'Raclette']
];
foreach ($ingredients as $ingredient) {
  $pdo->exec("INSERT INTO ingredients (name) VALUES ('{$ingredient['name']}')");
}

########################################################################################################################

$recipes = [
  ['pizza_id' => 1, 'ingredient_id' => 1], ['pizza_id' => 1, 'ingredient_id' => 2],
  ['pizza_id' => 1, 'ingredient_id' => 3], ['pizza_id' => 1, 'ingredient_id' => 16],
  ['pizza_id' => 1, 'ingredient_id' => 17], ['pizza_id' => 1, 'ingredient_id' => 9],
  ['pizza_id' => 2, 'ingredient_id' => 2], ['pizza_id' => 2, 'ingredient_id' => 3],
  ['pizza_id' => 2, 'ingredient_id' => 18], ['pizza_id' => 2, 'ingredient_id' => 19],
  ['pizza_id' => 2, 'ingredient_id' => 8], ['pizza_id' => 2, 'ingredient_id' => 20],
  ['pizza_id' => 3, 'ingredient_id' => 2], ['pizza_id' => 3, 'ingredient_id' => 3],
  ['pizza_id' => 3, 'ingredient_id' => 4], ['pizza_id' => 3, 'ingredient_id' => 5],
  ['pizza_id' => 3, 'ingredient_id' => 6],
  ['pizza_id' => 4, 'ingredient_id' => 1], ['pizza_id' => 4, 'ingredient_id' => 2],
  ['pizza_id' => 5, 'ingredient_id' => 1], ['pizza_id' => 5, 'ingredient_id' => 2],
  ['pizza_id' => 5, 'ingredient_id' => 12],
  ['pizza_id' => 6, 'ingredient_id' => 1], ['pizza_id' => 6, 'ingredient_id' => 2],
  ['pizza_id' => 6, 'ingredient_id' => 12], ['pizza_id' => 6, 'ingredient_id' => 13],
  ['pizza_id' => 6, 'ingredient_id' => 14], ['pizza_id' => 6, 'ingredient_id' => 10],
  ['pizza_id' => 6, 'ingredient_id' => 15],
  ['pizza_id' => 7, 'ingredient_id' => 1], ['pizza_id' => 7, 'ingredient_id' => 2],
  ['pizza_id' => 7, 'ingredient_id' => 9], ['pizza_id' => 7, 'ingredient_id' => 10],
  ['pizza_id' => 7, 'ingredient_id' => 8], ['pizza_id' => 7, 'ingredient_id' => 11],
  ['pizza_id' => 8, 'ingredient_id' => 1], ['pizza_id' => 8, 'ingredient_id' => 2],
  ['pizza_id' => 8, 'ingredient_id' => 9], ['pizza_id' => 8, 'ingredient_id' => 16],
  ['pizza_id' => 9, 'ingredient_id' => 3], ['pizza_id' => 9, 'ingredient_id' => 2],
  ['pizza_id' => 9, 'ingredient_id' => 7], ['pizza_id' => 9, 'ingredient_id' => 8],
  ['pizza_id' => 10, 'ingredient_id' => 1], ['pizza_id' => 10, 'ingredient_id' => 2],
  ['pizza_id' => 10, 'ingredient_id' => 10], ['pizza_id' => 10, 'ingredient_id' => 9],
  ['pizza_id' => 10, 'ingredient_id' => 8], ['pizza_id' => 10, 'ingredient_id' => 11]
];
foreach ($recipes as $recipe) {
  $pdo->exec("INSERT INTO recipes (pizza_id, ingredient_id) VALUES (
      {$recipe['pizza_id']}, {$recipe['ingredient_id']}
    )
  ");
}