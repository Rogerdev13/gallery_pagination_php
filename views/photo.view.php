<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GALLERY PAGINATION</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/gallery.css">
</head>
<body>
    <header>
        <h1 class="title"><?php if(!empty($photo['title'])){
             echo $photo['title'];
        }else{
            echo $photo['url'];
        } ?></h1>
    </header>
    <div class="container">
        <div class="photo">
            <img src="IMG\<?php echo $photo['url']; ?>"  alt="" class="photos__img">
            <p class="photo__description"><?php echo $photo['description']; ?></p>
        </div>
        <section class="pagination pagination--photo">
            <ul class="pagination__menu pagination__menu--photo">
                <li class="pagination__item"><a href="gallery.php" class="pagination__link "><i class="fa-solid fa-arrow-left"></i>  Back </a></li>
            </ul>
        </section>
    </div>

    <footer>
        <p class="footer">Gallery Created BY &#169;Roger-Dev</p>
    </footer>
</body>
</html>