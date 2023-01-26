<?php
 function calculateDiscount($product){
   return (int)((($product['variation']['default_sell_price'] - $product['regular_price'])/$product['variation']['default_sell_price'])*100);
 }
 
?>