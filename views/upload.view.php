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
        <h1 class="title">UPLOADED PHOTO</h1>
    </header>
    <div class="container">
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" enctype="multipart/form-data" class="form" method="POST">
            <input type="file" class=" form__control--file"  name="file">
            <input type="text" class="form__control" name="title" placeholder="Enter a title:">
            <textarea name="description" id="" class="form__control form__control--textarea" placeholder="Enter a description:"></textarea>
            <button type="submit" class="form__submit"><i class="form__icon fa-solid fa-upload"></i></button>
        </form>
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