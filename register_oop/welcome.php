<?php
    
    session_start();
    
    if ($_SESSION['id'] == "") {
        header("location: sigin.php");
    } else {}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome Page</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
    <div class="container">
        <h1 class="mt-5">Welcome, <?php echo $_SESSION['fname']; ?></h1>
        <hr>
        <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit esse commodi quaerat, ab culpa magni voluptas dolor id incidunt sequi tenetur quo earum animi voluptatem temporibus fuga, saepe iste excepturi! Sunt, ex. Aliquid omnis ratione veniam quos aut? Magni commodi vel et voluptatem praesentium! Aliquam at laboriosam praesentium perferendis dolorem, fugit est quia quisquam placeat provident ab similique quas, vero error veritatis tempore, non possimus pariatur sed dicta. Quam possimus natus ducimus. Eaque fugit provident voluptate quas assumenda est dicta necessitatibus eum, modi temporibus accusantium, consequatur officia, cupiditate eveniet rem saepe quia natus dolores. Commodi dolore officiis molestiae reprehenderit ullam et quo tempora, corporis harum fugiat sequi. Accusantium ipsum quaerat, quas provident corporis nulla placeat aspernatur laborum. Ducimus culpa recusandae dignissimos blanditiis nihil officiis reiciendis doloremque obcaecati iusto fugiat. Totam minima numquam adipisci. Nesciunt odit facere architecto aliquid amet adipisci, dolor error, laborum possimus distinctio ipsa. Velit temporibus dolor assumenda, vitae quas molestiae voluptates architecto accusamus aspernatur minus porro repellat excepturi impedit natus quis, ex perferendis et, dolores hic fugit maiores consequatur commodi officiis iste? Rerum voluptate aliquam dolore doloremque? Architecto nam deserunt nobis voluptatum mollitia. Magnam, quia vitae expedita, ipsa vel animi exercitationem sequi ratione porro eveniet ipsam obcaecati!
        </p>
        <hr>
        <a href = logout.php class="btn btn-danger">Logout</a>
    </div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>

<?php


?>