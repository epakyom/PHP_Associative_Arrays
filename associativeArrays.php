<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
        $books =[
            [
                'name'=> 'Do Androids Dream of Electricity',
                'author'=> 'Philip K. Dick',
                'purchaseUrl'=> 'http://example.com',
                'releaseYear'=> '1989',
            ],
            [
                'name'=> 'Concise Theology',
                'author'=> 'J.I Parker',
                'purchaseUrl'=> 'http://example.com',
                'releaseYear'=> '1977',
            ],
            [
                'name'=> 'Book of James',
                'author'=> 'Apostle James',
                'purchaseUrl'=> 'http://example.com',
                'releaseYear'=> 'Over 2000 years ago',
            ],


        ];
    ?>
        <!-- the array is displayed using the unordered list -->
    <ul>
        <?php foreach ($books as $book): ?>
            
            <li>
                <a href="<?= $book['purchaseUrl'];?>">

                    
                     <!-- <?= "Book Title: ". $book['name']. "." . "  Author: " .  $book['author']. "." . "  Release Year:  " . $book['releaseYear'];?> -->
                     
                     <?= $book['name']; ?> (<?= $book['releaseYear']?>)
                </a>

            </li>
        <?php endforeach; ?>
    </ul> 

</body>
</html>