<!-- page 3 certficate -->
<?php $title ='Certificates'; include 'header.php' ;?>
    
    <main class="page" id="p3">
        <section class="skill container">
            <span class="title"><i class="fas fa-file-certificate"></i> My <?=$title?></span>
            <br>
            <?php $img = array( "eng_course.jpg" , "sic_course.jpg" , "intro_testing_Cert.jpg" , "ISTQB_Cert.jpg" , "elearning_Cert.jpg" );
            for ($x = 0; $x<count($img); $x++): ?>
                <a href="img/<?=$img[$x];?>" data-lightbox="roadtrip" class=" col-lg-6">
                    <img class="img1" src="img/<?=$img[$x];?>" alt="<?=$x;?>">
                </a>
            <?php endfor;?>
        </section>
    </main>

<!-- end projects --> 

<?php include 'footer.php' ;?>