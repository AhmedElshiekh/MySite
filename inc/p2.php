<!-- page 2 skills --> 
<?php $title='Skills'; include 'header.php';?>
  <main class="page" id="p2"> 
    <section class="skill">
      <span class="title"><i class="fas fa-clipboard-list"></i> My <?=$title;?></span><br>
      <?php 
      // Skills add name , rate and icons As array
        $linux=       array("OS/linux","70","fab fa-linux");
        $javaScript=  array("javaScript","30","fab fa-js");
        $python=      array("python","50","fab fa-python");
        $bootstrap=   array("bootstrap","70","fab fa-bootstrap");
        $uikit=       array("uikit","50","fab fa-uikit");
        $html=        array("html/xml","90","fab fa-html5");
        $css=        array("css/sass","90","fab fa-css3-alt");
        $mysql=       array("mysql","50","fas fa-database");
        $vcs=         array("VCS","60","fab fa-git-alt");
        // used image icon >>>
        $laravel=     array("laravel","50","NO","laravel.png");
        $PostgreSQL=  array("PostgreSql","30","NO","postgresql.png");
        $jquery=      array("jquery","60","NO","jquery.png");
        $flutter=     array("flutter","50","NO","flutter.png"); 
        $kotlin=     array("kotlin","30","NO","kotlin.png"); 
        $c=           array("c/c++","60","NO","cpp.png");
        $php=         array("php","70","NO","php.png");
        $Qt=          array("Qt","30","NO","qt.png");
        // $=array("","","");
        // Add all on array [$var] To Show and Arranging it
        $var =array($linux, $vcs, $PostgreSQL, $mysql, $laravel, $php, $javaScript, $flutter, $kotlin, $python, $c, $Qt, $html, $css, $uikit, $jquery, $bootstrap,);
        // Loop show arrays
        for ($x = 0; $x<count($var); $x++): 
        $t=$var[$x];?>
          <div class="col-md-6 col-lg-4" >
            <div class="circle-wrap p<?=$t[1]?>" >
              <div class="circle">
                <div class="mask full">
                  <div class="fill"></div>
                </div>
                <div class="mask half">
                  <div class="fill"></div>
                </div>
                <div class="inside-circle"> <?=$t[1]?>% </div>
              </div>
            </div>
            <div>
              <h3 style="font-size:30;">
                <?php if ( $t[2] == "NO" ){ ?>
                    <img src="img/<?=$t[3]?>" width="30" >
                <?php }else{ ?>
                    <i class="<?=$t[2]?>"></i> 
                <?php }; echo $t[0];?>
              </h3>
            </div>
          </div>
      <?php endfor;?>
    </section>
  </main>  
<!-- end skills -->
<?php include 'footer.php' ;?>