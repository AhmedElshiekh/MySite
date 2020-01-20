<!-- page 5 Gallery -->
<?php $title='Gallery';include 'header.php' ;?>
        
    <main class="page" id="p5">
        <section class="skill container">
            <span class="title"><i class="fas fa-paint-brush"></i> My <?=$title?></span>
            <br>
            <?php $img=array("1.jpg","7.jpg","2.jpg","4.jpg","3.jpg","8.jpg","5.jpg","9.jpg");
            for ($x = 0; $x < count($img); $x++): ?>
                <a href="img/<?=$img[$x];?>" data-lightbox="roadtrip" class="col-lg-6">
                    <img class="img1" src="img/<?=$img[$x];?>" alt="<?=$x;?>">
                </a>
            <?php endfor;?>
        </section>
    </main>

<?php include 'footer.php' ;?>
<!-- end projects -->