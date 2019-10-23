<table align="left" border="1" cellpadding="3" cellspacing="0">  
    <thead>
        <th>id</th>
        <th>name</th>
        <th>proces</th>
    </thead>
    <tbody>
        <?php
        $products = [
            [
                "name" => "SamSung Galaxy 10 PLUS 512Gb",
                "price" => 1500,
                "currency" => "$"
            ],
            [
                "name" => "SamSung Galaxy Note 10 PLUS",
                "price" => 1500,
                "currency" => "$"
            ],
            [
                "name" => "iPhone 11 Pro max 512Gb",
                "price" => 2000,
                "currency" => "$"
            ],
            [
                "name" => "iPhone 11 Pro 256Gb",
                "price" => 1500,
                "currency" => "$"
            ],
            [
                "name" => "Huawei P30 Pro",
                "price" => 1000,
                "currency" => "$"
            ],
            [
                "name" => "Oppo Reno 10x",
                "price" => 800,
                "currency" => "$"
            ],
            [
                "name" => "Xiaomi Mi 9 SE",
                "price" => 300,
                "currency" => "$"
            ],
        ];

        for ($i =0 ; $i < count($products); $i++){
            echo "<tr>";
            echo "<td>$i</td>";
            echo "<td>" . $products[$i]['name'] . "</td>"; 
            echo "<td> $" . $products[$i]['price'] . "</td>"; 
            echo "</tr>";
            echo "<tr>";
            
        }
        
        ?>  
    </tbody>
</table> 


