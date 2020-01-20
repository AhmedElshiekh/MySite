<!-- page 4 projects -->
<?php $title='Projects'; include 'header.php' ;?>
    

<main class="page" id="p4">
    <section class="skill container">
        <span class="title"><i class="fas fa-file-code"></i> My <?=$title?></span>
        <br>
        <?php 
        $prj1=array("CMS","proj/cms","far fa-link");
        $prj2=array("PDO DBconnect","proj/pdo","far fa-link");
        $prj3=array("Flutter","proj/flutter","fab fa-app-store-ios");
        
        $var=array($prj1,$prj2,$prj3); //projects array
        for ($x = 0; $x<count($var); $x++): 
            $t=$var[$x];
            ?>
            <div class="proj container">
                <div class="row">
                    <?php if(is_integer($x/2) ){?>
                        <div class="col-md-12 col-lg-6">
                            <a href="<?=$t[1];?>"><img class="img3" src="<?=$t[1];?>/Screen.png" alt="<?=$t[0];?>" ></a>
                        </div>
                        <div class="col-md-12 col-lg-6">
                            <h2 class="title"><?=$t[0];?></h2>
                            <?=fread(fopen("../$t[1]/about.html", "r") , filesize("../$t[1]/about.html"));?>
                            <a href= "<?=$t[1];?>/Screen.png" data-lightbox="roadtrip" title="<?=$t[0];?>"><i class="far fa-image"></i></a>
                            <a href="<?=$t[1];?>" title="Open_Project"><i class="<?=$t[2]?>"></i></a>
                            <p>Copyright &copy;</p> 
                        </div>
                        <?php }else{?>
                            <div class="col-md-12 col-lg-6">
                                <h3 class= "title"><?=$t[0];?></h3>
                                <?=fread(fopen("../$t[1]/about.html", "r"), filesize( "../$t[1]/about.html" ));?>
                                <a href="<?=$t[1];?>" title="Open_Project"><i class="<?=$t[2]?>"></i></a>
                                <a href="<?=$t[1];?>/Screen.png" data-lightbox="roadtrip" title="<?=$t[0];?>"><i class="far fa-image"></i></a>
                                <p>Copyright &copy;</p>
                            </div>
                        <div class="col-md-12 col-lg-6">
                            <a href= "<?=$t[1];?>"><img class="img3" src= "<?=$t[1];?>/Screen.png" alt= "<?=$t[0];?>"></a>
                        </div>
                    <?php };?>
                </div>
            </div><br>
        <?php endfor;?>
    </section>
</main>

<!-- end projects --> 

<?php include 'footer.php' ;?>