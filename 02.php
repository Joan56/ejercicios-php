<?php
$carrito = [
    ["producto" => "Portatil", "precio" => 1200, "cantidad" => 1],
    ["producto" => "Raton", "precio" => 25, "cantidad" => 2],
    ["producto" => "Teclado", "precio" => 45, "cantidad" => 1],
];

function calculartotal($carrito) {
    $total = 0;

     foreach ($carrito as $item) {
        $subtotal = $item['precio'] * $item['cantidad'];
        $total += $subtotal;
     }

     return $total;
}

foreach ($carrito as $item) {
    $producto = $item['producto'];
    $precio = $item['precio'];
    $cantidad = $item['cantidad'];
    $subtotal = $precio * $cantidad;

    echo "Producto: $producto\n";
    echo "Precio unitario: $precio\n";
    echo "Cantidad: $cantidad\n";
    echo "Subtotal: $subtotal\n";
    echo "---------------------------\n";
}

$total = calculartotal($carrito);
echo "Total sin descuento: $total\n";

$descuento = 0;

if ($total > 1000) {
    $descuento = $total * 0.10;
} elseif ($total > 500) {
    $descuento = $total * 0.05;
}

$totalFinal = $total - $descuento;

echo "Total sin descuento: $total\n";
echo "Descuento aplicado: $descuento\n";
echo "Total final: $totalFinal\n";