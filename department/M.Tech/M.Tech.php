<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="utf-8">
       <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
 <link rel="icon" type="image/jpg" href="../../images/rkdflogo.jpg">
        <title>RKDF Question Paper</title>
        <link rel="stylesheet" href="../../css/jquery-ui.css">
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../css/animate.css">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/javascript.util/0.12.12/javascript.util.min.js"></script>
<script type="text/javascript" src="../../js/jquery.js"></script>
<script type="text/javascript" src="../../js/jquery-ui.js"></script>
    </head>
    
    <body>
        <!-- This part contains the header section-->
       <?php include '../../include/header.php';
             include '../../include/common.php';
       ?>
        <div class="section bg-white">
            <div class="container" >
                <div class="row" style="box-shadow: 0 2px 10px rgba(0,0,0,0.5); margin-top: 70px; padding:20px;">
                    <div class="col-md-3">
                        <h3 style="text-align: center; font-size: 1.5rem !important;" class="display-4">Questions</h3>
                        <ol id="selectable" class="list-group">
                            <li class="list-group-item list-group-item-action"><a href="../../switchpage/switchmenu.php?page=Engineering">
                                    Engineering</a>
                                </li>
                                <li class="list-group-item list-group-item-action"><a href="../../switchpage/switchmenu.php?page=Pharmacy">Pharmacy</a></li>
                                <li class="list-group-item list-group-item-action"><a href="../../switchpage/switchmenu.php?page=Agriculture">Agriculture</a></li>
                                <li class="list-group-item list-group-item-action"><a href="../../switchpage/switchmenu.php?page=Polytechnic">Polytechnic</a></li>
                                <li class="list-group-item list-group-item-action active"><a class="text-white" href="../../switchpage/switchmenu.php?page=M.Tech">M.Tech</a></li>
                               <li class="list-group-item list-group-item-action"><a href="../../switchpage/switchmenu.php?page=Computer-Application"><p>Comp.<br> Application</p></a></li>
                              <li class="list-group-item list-group-item-action"><a href="../../switchpage/switchmenu.php?page=Management">Management</a></li>
                              <li class="list-group-item list-group-item-action"><a href="../../switchpage/switchmenu.php?page=Architecture">Architecture</a></li>  
                              <li class="list-group-item list-group-item-action"><a href="../../switchpage/switchmenu.php?page=Science">Science</a></li>
                                <li class="list-group-item list-group-item-action"><a href="../../switchpage/switchmenu.php?page=Commerce">Commerce</a></li>
                                <li class="list-group-item list-group-item-action"><a href="../../switchpage/switchmenu.php?page=Education">Education</a></li>
                        </ol>
                    </div>
                    <div class="col-md-9">
                        <div class="accordion" id="accordionExample">
                            <div class="card wow fadeInUp" data-wow-delay="0.1s">
                              <div class="card-header" id="headingOne">
                                <h2 class="mb-0">
                                  <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Computer Science & Engineering
                                  </button>
                                </h2>
                              </div>

                              <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                <div class="card-body">
                                        <?php
                                $stmt=$db->prepare("select year from qpyear");
                                $stmt->execute();
                                while($row= $stmt->fetch())
                                {
                                          ?>
                                    <form method="POST" action="M.Tech_question_page">
                                           <input hidden type="text" value="CS" name="branch">
                                           <input hidden type="text" value="<?php echo $row['year'];?>" name="year">
                                           <input hidden type="text" value="1" name="sem">
                                           
                                           <button class="year btn btn-link" type="submit"><?php echo $row['year'];?></button>
                                       </form>
                                <?php } ?>
                                      </div>
                              </div>
                            <div class="card wow fadeInUp" data-wow-delay="0.3s">
                                <div class="card-header" id="headingTwo">
                                  <h2 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                      Digital Communication
                                    </button>
                                  </h2>
                                </div>
                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                  <div class="card-body">
                                       <?php
                                $stmt=$db->prepare("select year from qpyear");
                                $stmt->execute();
                                        while($row= $stmt->fetch())
                                {
                                          ?>
                                       <form method="POST" action="M.Tech_question_page">
                                           <input hidden type="text" value="DC" name="branch">
                                           <input hidden type="text" value="<?php echo $row['year'];?>" name="year">
                                           <input hidden type="text" value="1" name="sem">
                                           
                                           <button class="year btn btn-link" type="submit"><?php echo $row['year'];?></button>
                                       </form>
                                  <?php } ?>
                                  </div>
                                </div>
                              </div>
                            <div class="card wow fadeInUp" data-wow-delay="0.7s">
                                <div class="card-header" id="headingFour">
                                  <h2 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                      Power Electronics
                                    </button>
                                  </h2>
                                </div>
                                <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                                  <div class="card-body">
                                   <ul>
                                        <?php
                                $stmt=$db->prepare("select year from qpyear");
                                $stmt->execute();
                                        while($row= $stmt->fetch())
                                {
                                          ?>
                                        <form method="POST" action="M.Tech_question_page">
                                           <input hidden type="text" value="PE" name="branch">
                                           <input hidden type="text" value="<?php echo $row['year'];?>" name="year">
                                           <input hidden type="text" value="1" name="sem">
                                           
                                           <button class="year btn btn-link" type="submit"><?php echo $row['year'];?></button>
                                       </form>
                                <?php } ?>
                                    </ul> 
                                  </div>
                                </div>
                              </div>
                                <div class="card wow fadeInUp" data-wow-delay="0.7s">
                                <div class="card-header" id="headingFive">
                                  <h2 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                      Construction
                                    </button>
                                  </h2>
                                </div>
                                <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
                                  <div class="card-body">
                                  <ul>
                                        <?php
                                $stmt=$db->prepare("select year from qpyear");
                                $stmt->execute();
                                        while($row= $stmt->fetch())
                                {
                                          ?>
                              <form method="POST" action="M.Tech_question_page">
                                           <input hidden type="text" value="CT" name="branch">
                                           <input hidden type="text" value="<?php echo $row['year'];?>" name="year">
                                           <input hidden type="text" value="1" name="sem">
                                           
                                           <button class="year btn btn-link" type="submit"><?php echo $row['year'];?></button>
                                       </form>
                                <?php } ?>
                                    </ul>  
                                  </div>
                                </div>
                              </div>
                                <div class="card wow fadeInUp" data-wow-delay="0.7s">
                                <div class="card-header" id="headingSix">
                                  <h2 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                      Power System
                                    </button>
                                  </h2>
                                </div>
                                <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordionExample">
                                  <div class="card-body">
                                   <ul>
                                        <?php
                                $stmt=$db->prepare("select year from qpyear");
                                $stmt->execute();
                                        while($row= $stmt->fetch())
                                {
                                          ?>
                                       <form method="POST" action="M.Tech_question_page">
                                           <input hidden type="text" value="PS" name="branch">
                                           <input hidden type="text" value="<?php echo $row['year'];?>" name="year">
                                           <input hidden type="text" value="1" name="sem">
                                           
                                           <button class="year btn btn-link" type="submit"><?php echo $row['year'];?></button>
                                       </form>
                                <?php } ?>
                                    </ul> 
                                  </div>
                                </div>
                              </div>
                                <div class="card wow fadeInUp" data-wow-delay="0.7s">
                                <div class="card-header" id="headingSeven">
                                  <h2 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                      VLSI Design
                                    </button>
                                  </h2>
                                </div>
                                <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordionExample">
                                  <div class="card-body">
                                   <ul>
                                        <?php
                                $stmt=$db->prepare("select year from qpyear");
                                $stmt->execute();
                                        while($row= $stmt->fetch())
                                {
                                          ?>
                                <form method="POST" action="M.Tech_question_page">
                                           <input hidden type="text" value="VD" name="branch">
                                           <input hidden type="text" value="<?php echo $row['year'];?>" name="year">
                                           <input hidden type="text" value="1" name="sem">
                                           
                                           <button class="year btn btn-link" type="submit"><?php echo $row['year'];?></button>
                                       </form>
                                <?php } ?>
                                    </ul>  
                                  </div>
                                </div>
                              </div>
                                <div class="card wow fadeInUp" data-wow-delay="0.7s">
                                <div class="card-header" id="headingEight">
                                  <h2 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                                      Thermal
                                    </button>
                                  </h2>
                                </div>
                                <div id="collapseEight" class="collapse" aria-labelledby="headingEight" data-parent="#accordionExample">
                                  <div class="card-body">
                                   <ul>
                                        <?php
                                $stmt=$db->prepare("select year from qpyear");
                                $stmt->execute();
                                        while($row= $stmt->fetch())
                                {
                                          ?>
                                <form method="POST" action="M.Tech_question_page">
                                           <input hidden type="text" value="TH" name="branch">
                                           <input hidden type="text" value="<?php echo $row['year'];?>" name="year">
                                           <input hidden type="text" value="1" name="sem">
                                           
                                           <button class="year btn btn-link" type="submit"><?php echo $row['year'];?></button>
                                       </form>
                                <?php } ?>
                                    </ul>  
                                  </div>
                                </div>
                              </div>
                                <div class="card wow fadeInUp" data-wow-delay="0.7s">
                                <div class="card-header" id="headingNine">
                                  <h2 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                                      Production & Industry
                                    </button>
                                  </h2>
                                </div>
                                <div id="collapseNine" class="collapse" aria-labelledby="headingNine" data-parent="#accordionExample">
                                  <div class="card-body">
                                   <ul>
                                        <?php
                                $stmt=$db->prepare("select year from qpyear");
                                $stmt->execute();
                                        while($row= $stmt->fetch())
                                {
                                          ?>
                                <form method="POST" action="M.Tech_question_page">
                                           <input hidden type="text" value="PIE" name="branch">
                                           <input hidden type="text" value="<?php echo $row['year'];?>" name="year">
                                           <input hidden type="text" value="1" name="sem">
                                           
                                           <button class="year btn btn-link" type="submit"><?php echo $row['year'];?></button>
                                       </form>
                                <?php } ?>
                                    </ul>  
                                  </div>
                                </div>
                              </div>
                        </div>
                    </div>    
                    </div>
                </div>
            </div>
        </div>
           
           <?php include '../../include/footer.php'; ?>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../../js/wow.min.js"></script>
    <script>
    new WOW().init();
    </script>
     <script type="text/javascript">
    $(document).ready(function () {
    //Disable full page
    $("body").on("contextmenu",function(e){
        return false;
    })
     });
    </script>
    <script>
       $(function(){
          $("#selectable").selectable({cancel: 'a'});
       });
    </script>
<script>
 
     document.addEventListener('keydown',anyKey);
     
 function anyKey(ev){
    ev.preventDefault();
    
 }
</script>
</body>
</html>
