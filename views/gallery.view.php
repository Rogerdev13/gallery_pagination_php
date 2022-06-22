<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GALLERY PAGINATION</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/gallery.css">
    <style>
        .pagination__link--none{
            opacity: 0;
            pointer-events: none;
        }

        .pagination__menu{
            display:flex;
            justify-content:space-between;
        }

        .photos__container{
            display:grid;
            grid-template-columns: repeat(auto-fit , minmax(260px , 1fr) );
            justify-content:center;
        }

        .photos__thumb{
            width:100%;
        }
    </style>
   
</head>
<body>
    <header>
        <h1 class="title">GALLERY PAGINATION</h1>
    </header>
    <div class="container">
        <section class="photos">
            <div class="photos__container">
                <?php foreach($photos as $photo): ?>
                    <div class="photos__thumb">
                        <a href="photo.php?id=<?php echo $photo['id']; ?>" class="photos__link">
                            <img class="photos__img" src="IMG/<?php echo $photo['url']; ?>" alt="">
                        </a>
                    </div>
                <?php endforeach; ?>    
            </div>
        </section>

        <section class="pagination">
            <ul class="pagination__menu">
                
                    <?php if($page > 1): ?>
                        <li class="pagination__item"><a href="gallery.php?p=<?php echo $page - 1; ?>" class="pagination__link "><i class="fa-solid fa-arrow-left"></i> Prev </a></li>
                    <?php endif; ?>
                    <?php if($page == 1): ?>
                        <li class="pagination__item"><a href="gallery.php?p=<?php echo $page - 1; ?>" class="pagination__link pagination__link--none "><i class="fa-solid fa-arrow-left"></i> Prev </a></li>
                    <?php endif; ?>

                    <?php if($totalPages != $page):?>
                        <li class="pagination__item"><a href="gallery.php?p=<?php echo $page + 1 ?>" class="pagination__link "> Next <i class="fa-solid fa-arrow-right"></i></a></li>
                    <?php endif;?>


                
                </ul>
        </section>
    </div>

    <footer>
        <p class="footer">Gallery Created BY &#169;Roger-Dev</p>
    </footer>
</body>
</html>