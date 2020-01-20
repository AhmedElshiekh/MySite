<!-- page 2 skills --> 
<?php $title='Skills'; include 'header.php';?>
  <main class="page" id="p2"> 
    <section class="skill">
      <span class="title"><i class="fas fa-clipboard-list"></i> My <?=$title;?></span><br>
      <?php 
        $linux=array("OS/linux","70","fab fa-linux");
        $PostgreSQL=array("PostgreSQL","30","fas fa-database");
        $flutter=array("flutter","50","fab fa-android");
        $javaScript=array("javaScript","30","fab fa-js");
        $laravel=array("laravel","50","fab fa-laravel");
        $php=array("php","70","fab fa-php");
        $c=array("c/c++","60","fab fa-codiepie");
        $python=array("python","50","fab fa-python");
        $bootstrap=array("bootstrap","60","fab fa-bootstrap");
        $jquery=array("jquery","30","fab fa-quinscape");
        $uikit=array("uikit","30","fab fa-uikit");
        $html=array("html/css<br/>sass","90","fab fa-html5");
        $mysql=array("mysql","50","fas fa-database");
        // $=array("","","");
        $var =array($linux,$PostgreSQL,$flutter,$javaScript,$laravel,$php,$c,$python,$bootstrap,$jquery,$uikit,$html,$mysql);
        for ($x = 0; $x<count($var); $x++): 
        $t=$var[$x];?>
          <div class="col-md-6 col-lg-4" >
            <div class="circle-wrap p<?=$t[1];?>" >
              <div class="circle">
                <div class="mask full">
                  <div class="fill"></div>
                </div>
                <div class="mask half">
                  <div class="fill"></div>
                </div>
                <div class="inside-circle"> <?=$t[1];?>% </div>
              </div>
            </div>
            <div><h3 style="font-size:3.4vh;"><i class="<?=$t[2];?>"></i> <?=$t[0];?></h3></div>
          </div>
      <?php endfor;?>
    </section>
  </main>  
<!-- end skills -->
<?php include 'footer.php' ;?>