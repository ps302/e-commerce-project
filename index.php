<?php

// conditional statements

$Destinyshops = [
   ['name' => 'Apple', 'colour' => 'green', 'location' => 'nnewi', 'price' => 230.99],
   ['name' => 'Orange', 'colour' => 'green', 'location' => 'nnewi', 'price' => 250.99],
   ['name' => 'Banana', 'colour' => 'yellow', 'location' => 'nnewi', 'price' => 270.99],
   ['name' => 'Mango',  'colour' => 'green', 'location' => 'nnewi', 'price' => 350.99],
   ['name' => 'Paw-Paw', 'colour' => 'green', 'location' => 'nnewi', 'price' => 320.99],
   ['name' => 'Melon', 'colour' => 'green', 'location' => 'nnewi', 'price' => 255.99],
   ['name' => 'Pineapple', 'colour' => 'yellow', 'location' => 'nnewi', 'price' => 265.99],
   ['name' => 'Lime', 'colour' => 'green', 'location' => 'nnewi', 'price' => 310.99],
   ['name' => 'Cashew', 'colour' => 'yellow', 'location' => 'nnewi', 'price' => 285.99],
   ['name' => 'Groundnut', 'colour' => 'brown', 'location' => 'nnewi', 'price' => 300.99],
   ['name' => 'Carrot', 'colour' => 'orange', 'location' => 'nnewi', 'price' => 245.99],
   ['name' => 'Pear', 'colour' => 'dark-blue', 'location' => 'nnewi', 'price' => 260.99],
   ['name' => 'Maize', 'colour' => 'orange-yellow', 'location' => 'nnewi', 'price' => 343.99],
   ['name' => 'Garden egg', 'colour' => 'green', 'location' => 'nnewi', 'price' => 220.99],
   ['name' => 'Plantain', 'colour' => 'green', 'location' => 'nnewi', 'price' => 290.99],
   ['name' => 'Cucumber', 'colour' => 'green', 'location' => 'nnewi', 'price' => 320.99],
   ['name' => 'Coconut', 'colour' => 'brown', 'location' => 'nnewi', 'price' => 255.99],
   ['name' => 'Cherry', 'colour' => 'green', 'location' => 'nnewi', 'price' => 330.99],
   ['name' => 'Strawberry', 'colour' => 'red-purple', 'location' => 'nnewi', 'price' => 335.99],
   ['name' => 'Local apple', 'colour' => 'red', 'location' => 'nnewi', 'price' => 275.99],
   ['name' => 'Tangerine', 'colour' => 'green', 'location' => 'nnewi', 'price' => 350.99],
];

 foreach($Destinyshops as $Destinyshop){

    if($Destinyshop['price'] < 351.00 || $Destinyshop['price'] > 249.99){
        echo $Destinyshops['name'] .'-'.'$'.['price'] . '<br />';
    }
 }


 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="style.css">
 </head>
 <body>
    
      <h1>Destiny Fruits Mon</h1>
 
      <div>
         <ul>
            <?php foreach($Destinyshops as $Destinyshop){ ?>
             <?php if($Destinyshop['price'] > 249.99){ ?>
                 <li><?php echo $Destinyshop['name'] ;?> <span>  -  </span><span>$<span></span><?php echo $Destinyshop['price'] ;?></span></li>
             <?php } ?>
             <?php } ?>
             </ul>
             </div>
 
 </body>
 </html>
 