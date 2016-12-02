<?php 
  $action = $_POST['action'];
  
  
  $yes = "Yes";
  $average = "Average";
  $no = "No";
  
  //for($i=0;$i=52;$i++){
    //test 
    //$test.$i = $_POST['test'.$i];
    //if($test.$i == $yes){
    //$test.$i = "10";
    //}elseif($test.$i == $average){
    //$test.$i = "5";
    //}elseif($test.$i == $no){
     //$test.$i = "0";
    //} else {
      //echo "None<br/>".$i;
      //echo $i;
    //}
    /////////////////////////
   //}
  
  //computing personality test responses
  if($action == "ptest"){
    //test 1
    $test1 = $_POST['test1'];
    if($test1 == $yes){
    $test1perc = "10";
    }elseif($test1 == $average){
    $test1perc = "5";
    }elseif($test1 == $no){
     $test1perc = "0";
    }  
    /////////////////////////
    //test 2
    $test2 = $_POST['test2'];
    if($test2 == $yes){
    $test2perc = "10";
    }elseif($test2 == $average){
    $test2perc = "5";
    }elseif($test2 == $no){
     $test2perc = "0";
    } 
    /////////////////////////
    //test 3
    $test3 = $_POST['test3'];
    if($test3 == $yes){
    $test3perc = "10";
    }elseif($test3 == $average){
    $test3perc = "5";
    }elseif($test3 == $no){
     $test3perc = "0";
    } 
    /////////////////////////
    //test 4
    $test4 = $_POST['test4'];
    if($test4 == $yes){
    $test4perc = "10";
    }elseif($test4 == $average){
    $test4perc = "5";
    }elseif($test4 == $no){
     $test4perc = "0";
    }
    /////////////////////////
    //test 5
    $test5 = $_POST['test5'];
    if($test5 == $yes){
    $test5perc = "10";
    }elseif($test5 == $average){
    $test5perc = "5";
    }elseif($test5 == $no){
     $test5perc = "0";
    } 
    /////////////////////////
    //test 6
    $test6 = $_POST['test6'];
    if($test6 == $yes){
    $test6perc = "10";
    }elseif($test6 == $average){
    $test6perc = "5";
    }elseif($test6 == $no){
     $test6perc = "0";
    } 
    /////////////////////////
    //test 7
    $test7 = $_POST['test7'];
    if($test7 == $yes){
    $test7perc = "10";
    }elseif($test7 == $average){
    $test7perc = "5";
    }elseif($test7 == $no){
     $test7perc = "0";
    } 
    /////////////////////////
    //test 8
    $test8 = $_POST['test8'];
    if($test8 == $yes){
    $test8perc = "10";
    }elseif($test8 == $average){
    $test8perc = "5";
    }elseif($test8 == $no){
     $test8perc = "0";
    } 
    /////////////////////////
    //test 9
    $test9 = $_POST['test9'];
    if($test9 == $yes){
    $test9perc = "10";
    }elseif($test9 == $average){
    $test9perc = "5";
    }elseif($test9 == $no){
     $test9perc = "0";
    } 
    /////////////////////////
    //test 10
    $test10 = $_POST['test10'];
    if($test10 == $yes){
    $test10perc = "10";
    }elseif($test10 == $average){
    $test10perc = "5";
    }elseif($test10 == $no){
     $test10perc = "0";
    } 
    /////////////////////////
    //test 11
    $test11 = $_POST['test11'];
    if($test11 == $yes){
    $test11perc = "10";
    }elseif($test11 == $average){
    $test11perc = "5";
    }elseif($test11 == $no){
     $test11perc = "0";
    } 
    /////////////////////////
    //test 12
    $test12 = $_POST['test12'];
    if($test12 == $yes){
    $test12perc = "10";
    }elseif($test12 == $average){
    $test12perc = "5";
    }elseif($test12 == $no){
     $test12perc = "0";
    }  
    /////////////////////////
    //test 13
    $test13 = $_POST['test13'];
    if($test13 == $yes){
    $test13perc = "10";
    }elseif($test13 == $average){
    $test13perc = "5";
    }elseif($test13 == $no){
     $test13perc = "0";
    }  
    /////////////////////////
    //test 14
    $test14 = $_POST['test14'];
    if($test14 == $yes){
    $test14perc = "10";
    }elseif($test14 == $average){
    $test14perc = "5";
    }elseif($test14 == $no){
     $test14perc = "0";
    }  
    /////////////////////////
    //test 15
    $test15 = $_POST['test15'];
    if($test15 == $yes){
    $test15perc = "10";
    }elseif($test15 == $average){
    $test15perc = "5";
    }elseif($test15 == $no){
     $test15perc = "0";
    }  
    /////////////////////////
    //test 16
    $test16 = $_POST['test16'];
    if($test16 == $yes){
    $test16perc = "10";
    }elseif($test16 == $average){
    $test16perc = "5";
    }elseif($test16 == $no){
     $test16perc = "0";
    }  
    /////////////////////////
    //test 17
    $test17 = $_POST['test17'];
    if($test17 == $yes){
    $test17perc = "10";
    }elseif($test17 == $average){
    $test17perc = "5";
    }elseif($test17 == $no){
     $test17perc = "0";
    }  
    /////////////////////////
    //test 18
    $test18 = $_POST['test18'];
    if($test18 == $yes){
    $test18perc = "10";
    }elseif($test18 == $average){
    $test18perc = "5";
    }elseif($test18 == $no){
     $test18perc = "0";
    }  
    /////////////////////////
    //test 19
    $test19 = $_POST['test19'];
    if($test19 == $yes){
    $test19perc = "10";
    }elseif($test19 == $average){
    $test19perc = "5";
    }elseif($test19 == $no){
     $test19perc = "0";
    }  
    /////////////////////////
    //test 20
    $test20 = $_POST['test20'];
    if($test20 == $yes){
    $test20perc = "10";
    }elseif($test20 == $average){
    $test20perc = "5";
    }elseif($test20 == $no){
     $test20perc = "0";
    } 
    /////////////////////////
    //test 21
    $test21 = $_POST['test21'];
    if($test21 == $yes){
    $test21perc = "10";
    }elseif($test21 == $average){
    $test21perc = "5";
    }elseif($test21 == $no){
     $test21perc = "0";
    } 
    /////////////////////////
    //test 22
    $test22 = $_POST['test22'];
    if($test22 == $yes){
    $test22perc = "10";
    }elseif($test22 == $average){
    $test22perc = "5";
    }elseif($test22 == $no){
     $test22perc = "0";
    } 
    /////////////////////////
    //test 23
    $test23 = $_POST['test23'];
    if($test23 == $yes){
    $test23perc = "10";
    }elseif($test23 == $average){
    $test23perc = "5";
    }elseif($test23 == $no){
     $test23perc = "0";
    } 
    /////////////////////////
    //test 24
    $test24 = $_POST['test24'];
    if($test24 == $yes){
    $test24perc = "10";
    }elseif($test24 == $average){
    $test24perc = "5";
    }elseif($test24 == $no){
     $test24perc = "0";
    } 
    /////////////////////////
    //test 25
    $test25 = $_POST['test25'];
    if($test25 == $yes){
    $test25perc = "10";
    }elseif($test25 == $average){
    $test25perc = "5";
    }elseif($test25 == $no){
     $test25perc = "0";
    } 
    /////////////////////////
    //test 26
    $test26 = $_POST['test26'];
    if($test26 == $yes){
    $test26perc = "10";
    }elseif($test26 == $average){
    $test26perc = "5";
    }elseif($test26 == $no){
     $test26perc = "0";
    } 
    /////////////////////////
    //test 27
    $test27 = $_POST['test27'];
    if($test27 == $yes){
    $test27perc = "10";
    }elseif($test27 == $average){
    $test27perc = "5";
    }elseif($test27 == $no){
     $test27perc = "0";
    } 
    /////////////////////////
    //test 28
    $test28 = $_POST['test28'];
    if($test28 == $yes){
    $test28perc = "10";
    }elseif($test28 == $average){
    $test28perc = "5";
    }elseif($test28 == $no){
     $test28perc = "0";
    } 
    /////////////////////////
    //test 29
    $test29 = $_POST['test29'];
    if($test29 == $yes){
    $test29perc = "10";
    }elseif($test29 == $average){
    $test29perc = "5";
    }elseif($test29 == $no){
     $test29perc = "0";
    } 
    /////////////////////////
    //test 30
    $test30 = $_POST['test30'];
    if($test30 == $yes){
    $test30perc = "10";
    }elseif($test30 == $average){
    $test30perc = "5";
    }elseif($test30 == $no){
     $test30perc = "0";
    } 
    /////////////////////////
    //test 31
    $test31 = $_POST['test31'];
    if($test31 == $yes){
    $test31perc = "10";
    }elseif($test31 == $average){
    $test31perc = "5";
    }elseif($test31 == $no){
     $test31perc = "0";
    } 
    /////////////////////////
    //test 32
    $test32 = $_POST['test32'];
    if($test32 == $yes){
    $test32perc = "10";
    }elseif($test32 == $average){
    $test32perc = "5";
    }elseif($test32 == $no){
     $test32perc = "0";
    } 
    /////////////////////////
    //test 3
    $test33 = $_POST['test33'];
    if($test33 == $yes){
    $test33perc = "10";
    }elseif($test33 == $average){
    $test33perc = "5";
    }elseif($test33 == $no){
     $test33perc = "0";
    } 
    /////////////////////////
    //test 34
    $test34 = $_POST['test34'];
    if($test34 == $yes){
    $test34perc = "10";
    }elseif($test34 == $average){
    $test34perc = "5";
    }elseif($test34 == $no){
     $test34perc = "0";
    } 
    /////////////////////////
    //test 35
    $test35 = $_POST['test35'];
    if($test35 == $yes){
    $test35perc = "10";
    }elseif($test35 == $average){
    $test35perc = "5";
    }elseif($test35 == $no){
     $test35perc = "0";
    } 
    /////////////////////////
    //test 36
    $test36 = $_POST['test36'];
    if($test36 == $yes){
    $test36perc = "10";
    }elseif($test36 == $average){
    $test36perc = "5";
    }elseif($test36 == $no){
     $test36perc = "0";
    } 
    /////////////////////////
    //test 37
    $test37 = $_POST['test37'];
    if($test37 == $yes){
    $test37perc = "10";
    }elseif($test37 == $average){
    $test37perc = "5";
    }elseif($test37 == $no){
     $test37perc = "0";
    } 
    /////////////////////////
    //test 38
    $test38 = $_POST['test38'];
    if($test38 == $yes){
    $test38perc = "10";
    }elseif($test38 == $average){
    $test38perc = "5";
    }elseif($test38 == $no){
     $test38perc = "0";
    } 
    /////////////////////////
    //test 39
    $test39 = $_POST['test39'];
    if($test39 == $yes){
    $test39perc = "10";
    }elseif($test39 == $average){
    $test39perc = "5";
    }elseif($test39 == $no){
     $test39perc = "0";
    } 
    /////////////////////////
    //test 40
    $test40 = $_POST['test40'];
    if($test40 == $yes){
    $test40perc = "10";
    }elseif($test40 == $average){
    $test40perc = "5";
    }elseif($test40 == $no){
     $test40perc = "0";
    }
    ///////////////////////////
    //test 41
    $test41 = $_POST['test41'];
    if($test41 == $yes){
    $test41perc = "10";
    }elseif($test41 == $average){
    $test41perc = "5";
    }elseif($test41 == $no){
     $test41perc = "0";
    }
    ////////////////////////////
    //test 42
    $test42 = $_POST['test42'];
    if($test42 == $yes){
    $test42perc = "10";
    }elseif($test42 == $average){
    $test42perc = "5";
    }elseif($test42 == $no){
     $test42perc = "0";
    }
    ///////////////////////////
    //test 43
    $test43 = $_POST['test43'];
    if($test43 == $yes){
    $test43perc = "10";
    }elseif($test43 == $average){
    $test43perc = "5";
    }elseif($test43 == $no){
     $test43perc = "0";
    }
    ///////////////////////////
    //test 44
    $test44 = $_POST['test44'];
    if($test44 == $yes){
    $test44perc = "10";
    }elseif($test44 == $average){
    $test44perc = "5";
    }elseif($test44 == $no){
     $test44perc = "0";
    }
    ///////////////////////////
    //test 45
    $test45 = $_POST['test45'];
    if($test45 == $yes){
    $test45perc = "10";
    }elseif($test45 == $average){
    $test45perc = "5";
    }elseif($test45 == $no){
     $test45perc = "0";
    }
     ////////////////////////////
     //test 46
    $test46 = $_POST['test46'];
    if($test46 == $yes){
    $test46perc = "10";
    }elseif($test46 == $average){
    $test46perc = "5";
    }elseif($test46 == $no){
     $test46perc = "0";
    }
    /////////////////////////
    //test 47
    $test47 = $_POST['test47'];
    if($test47 == $yes){
    $test47perc = "10";
    }elseif($test47 == $average){
    $test47perc = "5";
    }elseif($test47 == $no){
     $test47perc = "0";
    }
    /////////////////////////
    //test 48
    $test48 = $_POST['test48'];
    if($test48 == $yes){
    $test48perc = "10";
    }elseif($test48 == $average){
    $test48perc = "5";
    }elseif($test48 == $no){
     $test48perc = "0";
    }
    /////////////////////////
    //test 49
    $test49 = $_POST['test49'];
    if($test49 == $yes){
    $test49perc = "10";
    }elseif($test49 == $average){
    $test49perc = "5";
    }elseif($test49 == $no){
     $test49perc = "0";
    }
    /////////////////////////
    //test 50
    $test50 = $_POST['test50'];
    if($test50 == $yes){
    $test50perc = "10";
    }elseif($test50 == $average){
    $test50perc = "5";
    }elseif($test50 == $no){
     $test50perc = "0";
    } 
    /////////////////////////
    //test 51
    $test51 = $_POST['test51'];
    if($test51 == $yes){
    $test51perc = "10";
    }elseif($test51 == $average){
    $test51perc = "5";
    }elseif($test51 == $no){
     $test51perc = "0";
    } 
    /////////////////////////
    //test 52
    $test52 = $_POST['test52'];
    if($test52 == $yes){
    $test52perc = "10";
    }elseif($test52 == $average){
    $test52perc = "5";
    }elseif($test52 == $no){
     $test52perc = "0";
    } 
    /////////////////////////
    //test 53
    $test53 = $_POST['test53'];
    if($test53 == $yes){
    $test53perc = "10";
    }elseif($test53 == $average){
    $test53perc = "5";
    }elseif($test53 == $no){
     $test53perc = "0";
    } 
    /////////////////////////
    //personality test results
    
    //mind
    $introverted = $test5perc+$test20perc+$test32perc+$test46perc+$test49perc+$test50perc;
    $extraverted = $test1perc+$test12perc+$test27perc+$test41perc+$test42perc+$test53perc;
    $social = $test1perc+$test12perc+$test27perc+$test41perc+$test42perc+$test53perc+15;
    
    //energy
    $intuitive = $test6perc+$test9perc+$test26perc+25;
    $observant = $test52perc+$test18perc+$test22perc+15;
    
    //nature
    $thinking = $test2perc+$test17perc+$test18perc+$test22perc+$test23perc+$test30perc+$test35perc+$test43perc+$test44perc;
    $creative = $test2perc+$test17perc+$test18perc+$test22perc+$test23perc+$test30perc+$test35perc+$test43perc;
    $feeling = $test10perc+$test16perc+$test24perc+$test25perc+$test28perc+$test33perc+$test34perc+$test37perc+$test40perc+$test48perc;
    
    //tactics
    $judging = $test15perc+$test39perc+$test45perc+15;
    $prospecting = $test6perc+$test29perc+$test47perc+20;
    
    //identity
    $assertive = $test3perc+$test4perc+$test8perc+$test11perc+$test13perc+$test14perc+$test21perc+$test38perc;
    $turbulent = $test7perc+$test19perc+$test31perc+$test36perc+$test51perc;
    
    //insert result into dbase
    
    
    //summarize result in a sentence
    if($thinking >= 70 && $intuitive >=50 && $assertive >= 70){
      $tsummary = '<h5>Architect</h5>An extremely imaginative and strategic thinker, with a plan for everything.';
    } else if($thinking >= 50 && $feeling >= 50 && $extraverted >= 40 ){
      $tsummary = '<h5>Consul</h5>Caring, social, imaginative and strategic thinker.';  
    } else if($introverted >=45 && $thinking >=60 && $assertive >=60 ){
      $tsummary = '<h5>Advocate</h5>Quiet and mystical, yet very inspiring and tiredless idealists.';
    } else if($feeling >= 60 && $extraverted >=50 && $prospecting >=40){
      $tsummary = '<h5>Mediator</h5>Poetic, Kind and altrustic, always eager to help a good cause.';
    } else if($assertive >=60 && $thinking >= 70 && $extraverted >=40 && $prospecting >= 40){
      $tsummary = '<h5>Entrepreneur</h5>Smart, energetic and very perceptive, truly enjoys living on the edge.';
    }
    
    echo "<div>$tsummary</div>";
    //////////////////////////////
    
    //output result 
    echo "<h4>Mind</h4>";
    echo "<b>$introverted%</b> Introverted <br/>";
    echo "<b>$extraverted%</b> Extraverted<br/>";
    echo "<b>$social%</b> Social<br/>";
    echo "<h4>Energy</h4>";
    echo "<b>$intuitive%</b> Intuitive<br/>";
    echo "<b>$observant%</b> Observant<br/>";
    echo "<h4>Nature</h4>";
    echo "<b>$thinking%</b> Thinking<br/>";
    echo "<b>$creative%</b> Creative<br/>";
    echo "<b>$feeling%</b> Feeling<br/>";
    echo "<h4>Tactics</h4>";
    echo "<b>$judging%</b> Judging<br/>";
    echo "<b>$prospecting%</b> Prospecting<br/>";
    echo "<h4>Identity</h4>";
    echo "<b>$assertive%</b> Assertive<br/>";
    echo "<b>$turbulent%</b> Turbulent<br/>";
    echo "<div style='display:none;'>";
    
    
    
    
  
    
    }
    
  
  ?>
<style>
#questions .quecss{
	
	border-bottom:1px solid #f3f3f3;
}

</style>
<div id="questions">
<form action="" method="post">
<div id="que" class="quecss">
You find it easy to introduce yourself to other people.
            <div class="form-group">
              <label class="radio radio-inline" for="radio4a">
                <input type="radio" name="test1" data-toggle="radio" value="<?php echo $yes; ?>" id="radio4a" required>
                 <?php echo $yes; ?>
              </label>
              <label class="radio radio-inline" for="radio4b">
                <input type="radio" name="test1" data-toggle="radio" value="<?php echo $average; ?>" id="radio4b" required>
                 <?php echo $average; ?>
              </label>
              <label class="radio radio-inline" for="radio4c">
                <input type="radio" name="test1" data-toggle="radio" value="<?php echo $no; ?>" id="radio4c" required>
                 <?php echo $no; ?>
              </label>
            </div>
</div>
<div id="que" class="quecss">
You often get so lost in thoughts that you ignore or forget your surroundings.
<div class="form-group">
              <label class="radio radio-inline" for="radio5a">
                <input type="radio" name="test2" data-toggle="radio" value="<?php echo $yes; ?>" id="radio5a" required>
                 <?php echo $yes; ?>
              </label>
              <label class="radio radio-inline" for="radio5b">
                <input type="radio" name="test2" data-toggle="radio" value="<?php echo $average; ?>" id="radio5b" required>
                 <?php echo $average; ?>
              </label>
              <label class="radio radio-inline" for="radio5c">
                <input type="radio" name="test2" data-toggle="radio" value="<?php echo $no; ?>" id="radio5c" required>
                 <?php echo $no; ?>
              </label>
            </div>
</div>
<div id="que" class="quecss">
You try to respond to your e-mails as soon as possible and cannot stand a messy inbox.
<div class="form-group">
              <label class="radio radio-inline" for="radio6a">
                <input type="radio" name="test3" data-toggle="radio" value="<?php echo $yes; ?>" id="radio6a" required>
                 <?php echo $yes; ?>
              </label>
              <label class="radio radio-inline" for="radio6b">
                <input type="radio" name="test3" data-toggle="radio" value="<?php echo $average; ?>" id="radio6b" required>
                 <?php echo $average; ?>
              </label>
              <label class="radio radio-inline" for="radio6c">
                <input type="radio" name="test3" data-toggle="radio" value="<?php echo $no; ?>" id="radio6c" required>
                 <?php echo $no; ?>
              </label>
            </div>
</div>
<div id="que" class="quecss">
You find it easy to stay relaxed and focused even when there is some pressure.
<div class="form-group">
              <label class="radio radio-inline" for="radio7a">
                <input type="radio" name="test4" data-toggle="radio" value="<?php echo $yes; ?>" id="radio7a" required>
                 <?php echo $yes; ?>
              </label>
              <label class="radio radio-inline" for="radio7b">
                <input type="radio" name="test4" data-toggle="radio" value="<?php echo $average; ?>" id="radio7b" required>
                 <?php echo $average; ?>
              </label>
              <label class="radio radio-inline" for="radio7c">
                <input type="radio" name="test4" data-toggle="radio" value="<?php echo $no; ?>" id="radio7c" required>
                 <?php echo $no; ?>
              </label>
            </div>
</div>
<div id="que" class="quecss">
You don't usually initiate conversations.
<div class="form-group">
              <label class="radio radio-inline" for="radio8a">
                <input type="radio" name="test5" data-toggle="radio" value="<?php echo $yes; ?>" id="radio8a" required>
                 <?php echo $yes; ?>
              </label>
              <label class="radio radio-inline" for="radio8b">
                <input type="radio" name="test5" data-toggle="radio" value="<?php echo $average; ?>" id="radio8b" required>
                 <?php echo $average; ?>
              </label>
              <label class="radio radio-inline" for="radio8c">
                <input type="radio" name="test5" data-toggle="radio" value="<?php echo $no; ?>" id="radio8c" required>
                 <?php echo $no; ?>
              </label>
            </div>
</div>


<div id="que" class="quecss">
You feel a constant need for something new.
<div class="form-group">
              <label class="radio radio-inline" for="radio9a">
                <input type="radio" name="test6" data-toggle="radio" value="<?php echo $yes; ?>" id="radio9a" required>
                 <?php echo $yes; ?>
              </label>
              <label class="radio radio-inline" for="radio9b">
                <input type="radio" name="test6" data-toggle="radio" value="<?php echo $average; ?>" id="radio9b" required>
                 <?php echo $average; ?>
              </label>
              <label class="radio radio-inline" for="radio9c">
                <input type="radio" name="test6" data-toggle="radio" value="<?php echo $no; ?>" id="radio9c" required>
                 <?php echo $no; ?>
              </label>
            </div>
</div>
<div id="que" class="quecss">
Being adaptable is more important to you than being organized.
<div class="form-group">
              <label class="radio radio-inline" for="radio10a">
                <input type="radio" name="test7" data-toggle="radio" value="<?php echo $yes; ?>" id="radio10a" required>
                 <?php echo $yes; ?>
              </label>
              <label class="radio radio-inline" for="radio10b">
                <input type="radio" name="test7" data-toggle="radio" value="<?php echo $average; ?>" id="radio10b" required>
                 <?php echo $average; ?>
              </label>
              <label class="radio radio-inline" for="radio10c">
                <input type="radio" name="test7" data-toggle="radio" value="<?php echo $no; ?>" id="radio10c" required>
                 <?php echo $no; ?>
              </label>
            </div>
</div>
<div id="que" class="quecss">
You go out of your way to avoid conflicts.
<div class="form-group">
              <label class="radio radio-inline" for="radio11a">
                <input type="radio" name="test8" data-toggle="radio" value="<?php echo $yes; ?>" id="radio11a" required>
                 <?php echo $yes; ?>
              </label>
              <label class="radio radio-inline" for="radio11b">
                <input type="radio" name="test8" data-toggle="radio" value="<?php echo $average; ?>" id="radio11b" required>
                 <?php echo $average; ?>
              </label>
              <label class="radio radio-inline" for="radio11c">
                <input type="radio" name="test8" data-toggle="radio" value="<?php echo $no; ?>" id="radio11c" required>
                 <?php echo $no; ?>
              </label>
            </div>
</div>
<div id="que" class="quecss">
Winning a debate is more important to you than making sure no one gets upset.
<div class="form-group">
              <label class="radio radio-inline" for="radio12a">
                <input type="radio" name="test9" data-toggle="radio" value="<?php echo $yes; ?>" id="radio12a" required>
                 <?php echo $yes; ?>
              </label>
              <label class="radio radio-inline" for="radio12b">
                <input type="radio" name="test9" data-toggle="radio" value="<?php echo $average; ?>" id="radio12b" required>
                 <?php echo $average; ?>
              </label>
              <label class="radio radio-inline" for="radio12c">
                <input type="radio" name="test9" data-toggle="radio" value="<?php echo $no; ?>" id="radio12c" required>
                 <?php echo $no; ?>
              </label>
            </div>
</div>
<div id="que" class="quecss">
You often feel as if you have to justify yourself to other people.
<div class="form-group">
              <label class="radio radio-inline" for="radio13a">
                <input type="radio" name="test10" data-toggle="radio" value="<?php echo $yes; ?>" id="radio13a" required>
                 <?php echo $yes; ?>
              </label>
              <label class="radio radio-inline" for="radio13b">
                <input type="radio" name="test10" data-toggle="radio" value="<?php echo $average; ?>" id="radio13b" required>
                 <?php echo $average; ?>
              </label>
              <label class="radio radio-inline" for="radio13c">
                <input type="radio" name="test10" data-toggle="radio" value="<?php echo $no; ?>" id="radio13c" required>
                 <?php echo $no; ?>
              </label>
            </div>
</div>
<div id="que" class="quecss">
Your home and work environments are quite tidy.
<div class="form-group">
              <label class="radio radio-inline" for="radio14a">
                <input type="radio" name="test11" data-toggle="radio" value="<?php echo $yes; ?>" id="radio14a" required>
                 <?php echo $yes; ?>
              </label>
              <label class="radio radio-inline" for="radio14b">
                <input type="radio" name="test11" data-toggle="radio" value="<?php echo $average; ?>" id="radio14b" required>
                 <?php echo $average; ?>
              </label>
              <label class="radio radio-inline" for="radio14c">
                <input type="radio" name="test11" data-toggle="radio" value="<?php echo $no; ?>" id="radio14c" required>
                 <?php echo $no; ?>
              </label>
            </div>
</div>


<div id="que" class="quecss">
You do not mind being at the center of attraction.
<div class="form-group">
              <label class="radio radio-inline" for="radio15a">
                <input type="radio" name="test12" data-toggle="radio" value="<?php echo $yes; ?>" id="radio15a" required>
                 <?php echo $yes; ?>
              </label>
              <label class="radio radio-inline" for="radio15b">
                <input type="radio" name="test12" data-toggle="radio" value="<?php echo $average; ?>" id="radio15b" required>
                 <?php echo $average; ?>
              </label>
              <label class="radio radio-inline" for="radio15c">
                <input type="radio" name="test12" data-toggle="radio" value="<?php echo $no; ?>" id="radio15c" required>
                 <?php echo $no; ?>
              </label>
            </div>
</div>
<div id="que" class="quecss">
You have been called an excellent teacher.
<div class="form-group">
              <label class="radio radio-inline" for="radio16a">
                <input type="radio" name="test13" data-toggle="radio" value="<?php echo $yes; ?>" id="radio16a" required>
                 <?php echo $yes; ?>
              </label>
              <label class="radio radio-inline" for="radio16b">
                <input type="radio" name="test13" data-toggle="radio" value="<?php echo $average; ?>" id="radio16b" required>
                 <?php echo $average; ?>
              </label>
              <label class="radio radio-inline" for="radio16c">
                <input type="radio" name="test13" data-toggle="radio" value="<?php echo $no; ?>" id="radio16c" required>
                 <?php echo $no; ?>
              </label>
            </div>
</div>
<div id="que" class="quecss">
You rarely get mood swings.
<div class="form-group">
              <label class="radio radio-inline" for="radio17a">
                <input type="radio" name="test14" data-toggle="radio" value="<?php echo $yes; ?>" id="radio17a" required>
                 <?php echo $yes; ?>
              </label>
              <label class="radio radio-inline" for="radio17b">
                <input type="radio" name="test14" data-toggle="radio" value="<?php echo $average; ?>" id="radio17b" required>
                 <?php echo $average; ?>
              </label>
              <label class="radio radio-inline" for="radio17c">
                <input type="radio" name="test14" data-toggle="radio" value="<?php echo $no; ?>" id="radio17c" required>
                 <?php echo $no; ?>
              </label>
            </div>
</div>
<div id="que" class="quecss">
it is often difficult for you to relate to other people's feelings.
<div class="form-group">
              <label class="radio radio-inline" for="radio18a">
                <input type="radio" name="test15" data-toggle="radio" value="<?php echo $yes; ?>" id="radio18a" required>
                 <?php echo $yes; ?>
              </label>
              <label class="radio radio-inline" for="radio18b">
                <input type="radio" name="test15" data-toggle="radio" value="<?php echo $average; ?>" id="radio18b" required>
                 <?php echo $average; ?>
              </label>
              <label class="radio radio-inline" for="radio18c">
                <input type="radio" name="test15" data-toggle="radio" value="<?php echo $no; ?>" id="radio18c" required>
                 <?php echo $no; ?>
              </label>
            </div>
</div>
<div id="que" class="quecss">
Your mood can change very quickly.
<div class="form-group">
              <label class="radio radio-inline" for="radio19a">
                <input type="radio" name="test16" data-toggle="radio" value="<?php echo $yes; ?>" id="radio19a" required>
                 <?php echo $yes; ?>
              </label>
              <label class="radio radio-inline" for="radio19b">
                <input type="radio" name="test16" data-toggle="radio" value="<?php echo $average; ?>" id="radio19b" required>
                 <?php echo $average; ?>
              </label>
              <label class="radio radio-inline" for="radio19c">
                <input type="radio" name="test16" data-toggle="radio" value="<?php echo $no; ?>" id="radio19c" required>
                 <?php echo $no; ?>
              </label>
            </div>
</div>


<div id="que" class="quecss">
In a discussion, truth should be more important than people's sensitivities.
<div class="form-group">
              <label class="radio radio-inline" for="radio20a">
                <input type="radio" name="test17" data-toggle="radio" value="<?php echo $yes; ?>" id="radio20a" required>
                 <?php echo $yes; ?>
              </label>
              <label class="radio radio-inline" for="radio20b">
                <input type="radio" name="test17" data-toggle="radio" value="<?php echo $average; ?>" id="radio20b" required>
                 <?php echo $average; ?>
              </label>
              <label class="radio radio-inline" for="radio20c">
                <input type="radio" name="test17" data-toggle="radio" value="<?php echo $no; ?>" id="radio20c" required>
                 <?php echo $no; ?>
              </label>
            </div>
</div>
<div id="que" class="quecss">
You rarely worry about how your actions affect other people.
<div class="form-group">
              <label class="radio radio-inline" for="radio21a">
                <input type="radio" name="test18" data-toggle="radio" value="<?php echo $yes; ?>" id="radio21a" required>
                 <?php echo $yes; ?>
              </label>
              <label class="radio radio-inline" for="radio21b">
                <input type="radio" name="test18" data-toggle="radio" value="<?php echo $average; ?>" id="radio21b" required>
                 <?php echo $average; ?>
              </label>
              <label class="radio radio-inline" for="radio21c">
                <input type="radio" name="test18" data-toggle="radio" value="<?php echo $no; ?>" id="radio21c" required>
                 <?php echo $no; ?>
              </label>
            </div>
</div>
<div id="que" class="quecss">
Your work style is closer to random energy spikes than to a methodical and organized approach.
<div class="form-group">
              <label class="radio radio-inline" for="radio22a">
                <input type="radio" name="test19" data-toggle="radio" value="<?php echo $yes; ?>" id="radio22a" required>
                 <?php echo $yes; ?>
              </label>
              <label class="radio radio-inline" for="radio22b">
                <input type="radio" name="test19" data-toggle="radio" value="<?php echo $average; ?>" id="radio22b" required>
                 <?php echo $average; ?>
              </label>
              <label class="radio radio-inline" for="radio22c">
                <input type="radio" name="test19" data-toggle="radio" value="<?php echo $no; ?>" id="radio22c" required>
                 <?php echo $no; ?>
              </label>
            </div>
</div>
<div id="que" class="quecss">
An interesting  book or a video game is often better than a social event.
<div class="form-group">
              <label class="radio radio-inline" for="radio23a">
                <input type="radio" name="test20" data-toggle="radio" value="<?php echo $yes; ?>" id="radio23a" required>
                 <?php echo $yes; ?>
              </label>
              <label class="radio radio-inline" for="radio23b">
                <input type="radio" name="test20" data-toggle="radio" value="<?php echo $average; ?>" id="radio23b" required>
                 <?php echo $average; ?>
              </label>
              <label class="radio radio-inline" for="radio23c">
                <input type="radio" name="test20" data-toggle="radio" value="<?php echo $no; ?>" id="radio23c" required>
                 <?php echo $no; ?>
              </label>
            </div>
</div>
<div id="que" class="quecss">
Being able to develop a plan and stick to it is the most important part of every project.
<div class="form-group">
              <label class="radio radio-inline" for="radio24a">
                <input type="radio" name="test21" data-toggle="radio" value="<?php echo $yes; ?>" id="radio24a" required>
                 <?php echo $yes; ?>
              </label>
              <label class="radio radio-inline" for="radio24b">
                <input type="radio" name="test21" data-toggle="radio" value="<?php echo $average; ?>" id="radio24b" required>
                 <?php echo $average; ?>
              </label>
              <label class="radio radio-inline" for="radio24c">
                <input type="radio" name="test21" data-toggle="radio" value="<?php echo $no; ?>" id="radio24c" required>
                 <?php echo $no; ?>
              </label>
            </div>
</div>


<div id="que" class="quecss">
You can easily lose yourself in fantasy and ideas
<div class="form-group">
              <label class="radio radio-inline" for="radio25a">
                <input type="radio" name="test22" data-toggle="radio" value="<?php echo $yes; ?>" id="radio25a" required>
                 <?php echo $yes; ?>
              </label>
              <label class="radio radio-inline" for="radio25b">
                <input type="radio" name="test22" data-toggle="radio" value="<?php echo $average; ?>" id="radio25b" required>
                 <?php echo $average; ?>
              </label>
              <label class="radio radio-inline" for="radio25c">
                <input type="radio" name="test22" data-toggle="radio" value="<?php echo $no; ?>" id="radio25c" required>
                 <?php echo $no; ?>
              </label>
            </div>
</div>
<div id="que" class="quecss">
Others would call you ingenious as you are constantly generating original ideas.
<div class="form-group">
              <label class="radio radio-inline" for="radio26a">
                <input type="radio" name="test23" data-toggle="radio" value="<?php echo $yes; ?>" id="radio26a" required>
                 <?php echo $yes; ?>
              </label>
              <label class="radio radio-inline" for="radio26b">
                <input type="radio" name="test23" data-toggle="radio" value="<?php echo $average; ?>" id="radio26b" required>
                 <?php echo $average; ?>
              </label>
              <label class="radio radio-inline" for="radio26c">
                <input type="radio" name="test23" data-toggle="radio" value="<?php echo $no; ?>" id="radio26c" required>
                 <?php echo $no; ?>
              </label>
            </div>
</div>
<div id="que" class="quecss">
If someone does not respond to your r-mail quickly, you start worrying if you said something wrong.
<div class="form-group">
              <label class="radio radio-inline" for="radio27a">
                <input type="radio" name="test24" data-toggle="radio" value="<?php echo $yes; ?>" id="radio27a" required>
                 <?php echo $yes; ?>
              </label>
              <label class="radio radio-inline" for="radio27b">
                <input type="radio" name="test24" data-toggle="radio" value="<?php echo $average; ?>" id="radio27b" required>
                 <?php echo $average; ?>
              </label>
              <label class="radio radio-inline" for="radio27c">
                <input type="radio" name="test24" data-toggle="radio" value="<?php echo $no; ?>" id="radio27c" required>
                 <?php echo $no; ?>
              </label>
            </div>
</div>
<div id="que" class="quecss">
As a parent, you would rather see your child grow up kind than smart.
<div class="form-group">
              <label class="radio radio-inline" for="radio28a">
                <input type="radio" name="test25" data-toggle="radio" value="<?php echo $yes; ?>" id="radio28a" required>
                 <?php echo $yes; ?>
              </label>
              <label class="radio radio-inline" for="radio28b">
                <input type="radio" name="test25" data-toggle="radio" value="<?php echo $average; ?>" id="radio28b" required>
                 <?php echo $average; ?>
              </label>
              <label class="radio radio-inline" for="radio28c">
                <input type="radio" name="test25" data-toggle="radio" value="<?php echo $no; ?>" id="radio28c" required>
                 <?php echo $no; ?>
              </label>
            </div>
</div>
<div id="que" class="quecss">
Your dreams tend to be vivid and focus on a fictional world.
<div class="form-group">
              <label class="radio radio-inline" for="radio29a">
                <input type="radio" name="test26" data-toggle="radio" value="<?php echo $yes; ?>" id="radio29a" required>
                 <?php echo $yes; ?>
              </label>
              <label class="radio radio-inline" for="radio29b">
                <input type="radio" name="test26" data-toggle="radio" value="<?php echo $average; ?>" id="radio29b" required>
                 <?php echo $average; ?>
              </label>
              <label class="radio radio-inline" for="radio29c">
                <input type="radio" name="test26" data-toggle="radio" value="<?php echo $no; ?>" id="radio29c" required>
                 <?php echo $no; ?>
              </label>
            </div>
</div>


<div id="que" class="quecss">
It does not take you much time to start getting involved in social activities at your new workplace.
<div class="form-group">
              <label class="radio radio-inline" for="radio30a">
                <input type="radio" name="test27" data-toggle="radio" value="<?php echo $yes; ?>" id="radio30a" required>
                 <?php echo $yes; ?>
              </label>
              <label class="radio radio-inline" for="radio30b">
                <input type="radio" name="test27" data-toggle="radio" value="<?php echo $average; ?>" id="radio30b" required>
                 <?php echo $average; ?>
              </label>
              <label class="radio radio-inline" for="radio30c">
                <input type="radio" name="test27" data-toggle="radio" value="<?php echo $no; ?>" id="radio30c" required>
                 <?php echo $no; ?>
              </label>
            </div>
</div>
<div id="que" class="quecss">
You are more of a natural improviser than a careful planner.
<div class="form-group">
              <label class="radio radio-inline" for="radio31a">
                <input type="radio" name="test28" data-toggle="radio" value="<?php echo $yes; ?>" id="radio31a" required>
                 <?php echo $yes; ?>
              </label>
              <label class="radio radio-inline" for="radio31b">
                <input type="radio" name="test28" data-toggle="radio" value="<?php echo $average; ?>" id="radio31b" required>
                 <?php echo $average; ?>
              </label>
              <label class="radio radio-inline" for="radio31c">
                <input type="radio" name="test28" data-toggle="radio" value="<?php echo $no; ?>" id="radio31c" required>
                 <?php echo $no; ?>
              </label>
            </div>
</div>
<div id="que" class="quecss">
You would love to drive a race car.
<div class="form-group">
              <label class="radio radio-inline" for="radio32a">
                <input type="radio" name="test29" data-toggle="radio" value="<?php echo $yes; ?>" id="radio32a" required>
                 <?php echo $yes; ?>
              </label>
              <label class="radio radio-inline" for="radio32b">
                <input type="radio" name="test29" data-toggle="radio" value="<?php echo $average; ?>" id="radio32b" required>
                 <?php echo $average; ?>
              </label>
              <label class="radio radio-inline" for="radio32c">
                <input type="radio" name="test29" data-toggle="radio" value="<?php echo $no; ?>" id="radio32c" required>
                 <?php echo $no; ?>
              </label>
            </div>
</div>
<div id="que" class="quecss">
You often spend time exploring unrealistic and impractical yet intriguing ideas.
<div class="form-group">
              <label class="radio radio-inline" for="radio33a">
                <input type="radio" name="test30" data-toggle="radio" value="<?php echo $yes; ?>" id="radio33a" required>
                 <?php echo $yes; ?>
              </label>
              <label class="radio radio-inline" for="radio33b">
                <input type="radio" name="test30" data-toggle="radio" value="<?php echo $average; ?>" id="radio33b" required>
                 <?php echo $average; ?>
              </label>
              <label class="radio radio-inline" for="radio33c">
                <input type="radio" name="test30" data-toggle="radio" value="<?php echo $no; ?>" id="radio33c" required>
                 <?php echo $no; ?>
              </label>
            </div>
</div>
<div id="que" class="quecss">
You would rather improvise than spend time coming up with a detailed plan.
<div class="form-group">
              <label class="radio radio-inline" for="radio34a">
                <input type="radio" name="test31" data-toggle="radio" value="<?php echo $yes; ?>" id="radio34a" required>
                 <?php echo $yes; ?>
              </label>
              <label class="radio radio-inline" for="radio34b">
                <input type="radio" name="test31" data-toggle="radio" value="<?php echo $average; ?>" id="radio34b" required>
                 <?php echo $average; ?>
              </label>
              <label class="radio radio-inline" for="radio34c">
                <input type="radio" name="test31" data-toggle="radio" value="<?php echo $no; ?>" id="radio34c" required>
                 <?php echo $no; ?>
              </label>
            </div>
</div>


<div id="que" class="quecss">
You are a relatively reserved and quiet person.
<div class="form-group">
              <label class="radio radio-inline" for="radio35a">
                <input type="radio" name="test32" data-toggle="radio" value="<?php echo $yes; ?>" id="radio35a" required>
                 <?php echo $yes; ?>
              </label>
              <label class="radio radio-inline" for="radio35b">
                <input type="radio" name="test32" data-toggle="radio" value="<?php echo $average; ?>" id="radio35b" required>
                 <?php echo $average; ?>
              </label>
              <label class="radio radio-inline" for="radio35c">
                <input type="radio" name="test32" data-toggle="radio" value="<?php echo $no; ?>" id="radio35c" required>
                 <?php echo $no; ?>
              </label>
            </div>
</div>
<div id="que" class="quecss">
If you had a business, you would find it very difficult to fire loyal but underperforming employees.
<div class="form-group">
              <label class="radio radio-inline" for="radio36a">
                <input type="radio" name="test33" data-toggle="radio" value="<?php echo $yes; ?>" id="radio36a" required>
                 <?php echo $yes; ?>
              </label>
              <label class="radio radio-inline" for="radio36b">
                <input type="radio" name="test33" data-toggle="radio" value="<?php echo $average; ?><?php echo $average; ?>" id="radio36b" required>
                 <?php echo $average; ?>
              </label>
              <label class="radio radio-inline" for="radio36c">
                <input type="radio" name="test33" data-toggle="radio" value="<?php echo $no; ?>" id="radio36c" required>
                 <?php echo $no; ?>
              </label>
            </div>
</div>
<div id="que" class="quecss">
Generally, you are more pessimistic than optimistic.
<div class="form-group">
              <label class="radio radio-inline" for="radio37a">
                <input type="radio" name="test34" data-toggle="radio" value="<?php echo $yes; ?>" id="radio37a" required>
                 <?php echo $yes; ?>
              </label>
              <label class="radio radio-inline" for="radio37b">
                <input type="radio" name="test34" data-toggle="radio" value="<?php echo $average; ?>" id="radio37b" required>
                 <?php echo $average; ?>
              </label>
              <label class="radio radio-inline" for="radio37c">
                <input type="radio" name="test34" data-toggle="radio" value="<?php echo $no; ?>" id="radio37c" required>
                 <?php echo $no; ?>
              </label>
            </div>
</div>
<div id="que" class="quecss">
Logic is usually more important than heart when it comes to making important decisions.
<div class="form-group">
              <label class="radio radio-inline" for="radio38a">
                <input type="radio" name="test35" data-toggle="radio" value="<?php echo $yes; ?>" id="radio38a" required>
                 <?php echo $yes; ?>
              </label>
              <label class="radio radio-inline" for="radio38b">
                <input type="radio" name="test35" data-toggle="radio" value="<?php echo $average; ?>" id="radio38b" required>
                 <?php echo $average; ?>
              </label>
              <label class="radio radio-inline" for="radio38c">
                <input type="radio" name="test35" data-toggle="radio" value="<?php echo $no; ?>" id="radio38c" required>
                 <?php echo $no; ?>
              </label>
            </div>
</div>
<div id="que" class="quecss">
Keeping your option open is more important than having a to-do list.
<div class="form-group">
              <label class="radio radio-inline" for="radio39a">
                <input type="radio" name="test36" data-toggle="radio" value="<?php echo $yes; ?>" id="radio39a" required>
                 <?php echo $yes; ?>
              </label>
              <label class="radio radio-inline" for="radio39b">
                <input type="radio" name="test36" data-toggle="radio" value="<?php echo $average; ?>" id="radio39b" required>
                 <?php echo $average; ?>
              </label>
              <label class="radio radio-inline" for="radio39c">
                <input type="radio" name="test36" data-toggle="radio" value="<?php echo $no; ?>" id="radio39c" required>
                 <?php echo $no; ?>
              </label>
            </div>
</div>
<div id="que" class="quecss">
If your friend is sad about something, you are more likely to offer emotional support than suggests ways to deal with the problems.
<div class="form-group">
              <label class="radio radio-inline" for="radio40a">
                <input type="radio" name="test37" data-toggle="radio" value="<?php echo $yes; ?>" id="radio40a" required>
                 <?php echo $yes; ?>
              </label>
              <label class="radio radio-inline" for="radio40b">
                <input type="radio" name="test37" data-toggle="radio" value="<?php echo $average; ?>" id="radio40b" required>
                 <?php echo $average; ?>
              </label>
              <label class="radio radio-inline" for="radio40c">
                <input type="radio" name="test37" data-toggle="radio" value="<?php echo $no; ?>" id="radio40c" required>
                 <?php echo $no; ?>
              </label>
            </div>
</div>


<div id="que" class="quecss">
You have no difficulties coming up with a personal timetable and sticking it.
<div class="form-group">
              <label class="radio radio-inline" for="radio41a">
                <input type="radio" name="test38" data-toggle="radio" value="<?php echo $yes; ?>" id="radio41a" required>
                 <?php echo $yes; ?>
              </label>
              <label class="radio radio-inline" for="radio41b">
                <input type="radio" name="test38" data-toggle="radio" value="<?php echo $average; ?>" id="radio41b" required>
                 <?php echo $average; ?>
              </label>
              <label class="radio radio-inline" for="radio41c">
                <input type="radio" name="test38" data-toggle="radio" value="<?php echo $no; ?>" id="radio41c" required>
                 <?php echo $no; ?>
              </label>
            </div>
</div>
<div id="que" class="quecss">
Being right is more important than being cooperative when it comes to teamwork.
<div class="form-group">
              <label class="radio radio-inline" for="radio42a">
                <input type="radio" name="test39" data-toggle="radio" value="<?php echo $yes; ?>" id="radio42a" required>
                 <?php echo $yes; ?>
              </label>
              <label class="radio radio-inline" for="radio42b">
                <input type="radio" name="test39" data-toggle="radio" value="<?php echo $average; ?>" id="radio42b" required>
                 <?php echo $average; ?>
              </label>
              <label class="radio radio-inline" for="radio42c">
                <input type="radio" name="test39" data-toggle="radio" value="<?php echo $no; ?>" id="radio42c" required>
                 <?php echo $no; ?>
              </label>
            </div>
</div>
<div id="que" class="quecss">
You think that everyone's views should be respected regardless of wether they are supported by facts or not.
<div class="form-group">
              <label class="radio radio-inline" for="radio43a">
                <input type="radio" name="test40" data-toggle="radio" value="<?php echo $yes; ?>" id="radio43a" required>
                 <?php echo $yes; ?>
              </label>
              <label class="radio radio-inline" for="radio43b">
                <input type="radio" name="test40" data-toggle="radio" value="<?php echo $average; ?>" id="radio43b" required>
                 <?php echo $average; ?>
              </label>
              <label class="radio radio-inline" for="radio43c">
                <input type="radio" name="test40" data-toggle="radio" value="<?php echo $no; ?>" id="radio43c" required>
                 <?php echo $no; ?>
              </label>
            </div>
</div>
<div id="que" class="quecss">
You feel more energetic after spending more time with a group of people.
<div class="form-group">
              <label class="radio radio-inline" for="radio44a">
                <input type="radio" name="test41" data-toggle="radio" value="<?php echo $yes; ?>" id="radio44a" required>
                 <?php echo $yes; ?>
              </label>
              <label class="radio radio-inline" for="radio44b">
                <input type="radio" name="test41" data-toggle="radio" value="<?php echo $average; ?>" id="radio44b" required>
                 <?php echo $average; ?>
              </label>
              <label class="radio radio-inline" for="radio44c">
                <input type="radio" name="test41" data-toggle="radio" value="<?php echo $no; ?>" id="radio44c" required>
                 <?php echo $no; ?>
              </label>
            </div>
</div>
<div id="que" class="quecss">
You were popular in high school.
<div class="form-group">
              <label class="radio radio-inline" for="radio45a">
                <input type="radio" name="test42" data-toggle="radio" value="<?php echo $yes; ?>" id="radio45a" required>
                 <?php echo $yes; ?>
              </label>
              <label class="radio radio-inline" for="radio45b">
                <input type="radio" name="test42" data-toggle="radio" value="<?php echo $average; ?>" id="radio45b" required>
                 <?php echo $average; ?>
              </label>
              <label class="radio radio-inline" for="radio45c">
                <input type="radio" name="test42" data-toggle="radio" value="<?php echo $no; ?>" id="radio45c" required>
                 <?php echo $no; ?>
              </label>
            </div>
</div>

<div id="que" class="quecss">
You see yourself as very emotionally stable.
<div class="form-group">
              <label class="radio radio-inline" for="radio46a">
                <input type="radio" name="test43" data-toggle="radio" value="<?php echo $yes; ?>" id="radio46a" required>
                 <?php echo $yes; ?>
              </label>
              <label class="radio radio-inline" for="radio46b">
                <input type="radio" name="test43" data-toggle="radio" value="<?php echo $average; ?>" id="radio46b" required>
                 <?php echo $average; ?>
              </label>
              <label class="radio radio-inline" for="radio46c">
                <input type="radio" name="test43" data-toggle="radio" value="<?php echo $no; ?>" id="radio46c" required>
                 <?php echo $no; ?>
              </label>
            </div>
</div>
<div id="que" class="quecss">
Your mind is always buzzing with unexpected ideas and plans.
<div class="form-group">
              <label class="radio radio-inline" for="radio47a">
                <input type="radio" name="test44" data-toggle="radio" value="<?php echo $yes; ?>" id="radio47a" required>
                 <?php echo $yes; ?>
              </label>
              <label class="radio radio-inline" for="radio47b">
                <input type="radio" name="test44" data-toggle="radio" value="<?php echo $average; ?>" id="radio47b" required>
                 <?php echo $average; ?>
              </label>
              <label class="radio radio-inline" for="radio47c">
                <input type="radio" name="test44" data-toggle="radio" value="<?php echo $no; ?>" id="radio47c" required>
                 <?php echo $no; ?>
              </label>
            </div>
</div>
<div id="que" class="quecss">
You would not call yourself a dreamer.
<div class="form-group">
              <label class="radio radio-inline" for="radio48a">
                <input type="radio" name="test45" data-toggle="radio" value="<?php echo $yes; ?>" id="radio48a" required>
                 <?php echo $yes; ?>
              </label>
              <label class="radio radio-inline" for="radio48b">
                <input type="radio" name="test45" data-toggle="radio" value="<?php echo $average; ?>" id="radio48b" required>
                 <?php echo $average; ?>
              </label>
              <label class="radio radio-inline" for="radio48c">
                <input type="radio" name="test45" data-toggle="radio" value="<?php echo $no; ?>" id="radio48c" required>
                 <?php echo $no; ?>
              </label>
            </div>
</div>
<div id="que" class="quecss">
You usually find it difficult to relax when talking in front of many people.
<div class="form-group">
              <label class="radio radio-inline" for="radio49a">
                <input type="radio" name="test46" data-toggle="radio" value="<?php echo $yes; ?>" id="radio49a" required>
                 <?php echo $yes; ?>
              </label>
              <label class="radio radio-inline" for="radio49b">
                <input type="radio" name="test46" data-toggle="radio" value="<?php echo $average; ?>" id="radio49b" required>
                 <?php echo $average; ?>
              </label>
              <label class="radio radio-inline" for="radio49c">
                <input type="radio" name="test46" data-toggle="radio" value="<?php echo $no; ?>" id="radio49c" required>
                 <?php echo $no; ?>
              </label>
            </div>
</div>
<div id="que" class="quecss">
You get easily bored with the usual way of doing things.
<div class="form-group">
              <label class="radio radio-inline" for="radio50a">
                <input type="radio" name="test47" data-toggle="radio" value="<?php echo $yes; ?>" id="radio50a" required>
                 <?php echo $yes; ?>
              </label>
              <label class="radio radio-inline" for="radio50b">
                <input type="radio" name="test47" data-toggle="radio" value="<?php echo $average; ?>" id="radio50b" required>
                 <?php echo $average; ?>
              </label>
              <label class="radio radio-inline" for="radio50c">
                <input type="radio" name="test47" data-toggle="radio" value="<?php echo $no; ?>" id="radio50c" required>
                 <?php echo $no; ?>
              </label>
            </div>
</div>
<div id="que" class="quecss">
You worry too much about what other people think.
<div class="form-group">
              <label class="radio radio-inline" for="radio51a">
                <input type="radio" name="test48" data-toggle="radio" value="<?php echo $yes; ?>" id="radio51a" required>
                 <?php echo $yes; ?>
              </label>
              <label class="radio radio-inline" for="radio51b">
                <input type="radio" name="test48" data-toggle="radio" value="<?php echo $average; ?>" id="radio51b" required>
                 <?php echo $average; ?>
              </label>
              <label class="radio radio-inline" for="radio51c">
                <input type="radio" name="test48" data-toggle="radio" value="<?php echo $no; ?>" id="radio51c" required>
                 <?php echo $no; ?>
              </label>
            </div>
</div>


<div id="que" class="quecss"> 
If the room is full, you stay closer to the walls, avoiding the center.
<div class="form-group">
              <label class="radio radio-inline" for="radio52a">
                <input type="radio" name="test49" data-toggle="radio" value="<?php echo $yes; ?>" id="radio52a" required>
                 <?php echo $yes; ?>
              </label>
              <label class="radio radio-inline" for="radio52b">
                <input type="radio" name="test49" data-toggle="radio" value="<?php echo $average; ?>" id="radio52b" required>
                 <?php echo $average; ?>
              </label>
              <label class="radio radio-inline" for="radio52c">
                <input type="radio" name="test49" data-toggle="radio" value="<?php echo $no; ?>" id="radio52c" required>
                 <?php echo $no; ?>
              </label>
            </div>
</div>
<div id="que" class="quecss">
You find it hard to throw things away.
<div class="form-group">
              <label class="radio radio-inline" for="radio53a">
                <input type="radio" name="test50" data-toggle="radio" value="<?php echo $yes; ?>" id="radio53a" required>
                 <?php echo $yes; ?>
              </label>
              <label class="radio radio-inline" for="radio53b">
                <input type="radio" name="test50" data-toggle="radio" value="<?php echo $average; ?>" id="radio53b" required>
                 <?php echo $average; ?>
              </label>
              <label class="radio radio-inline" for="radio53c">
                <input type="radio" name="test50" data-toggle="radio" value="<?php echo $no; ?>" id="radio53c" required>
                 <?php echo $no; ?>
              </label>
            </div>
</div>
<div id="que" class="quecss">
You feel very anxious in stressful situations.
<div class="form-group">
              <label class="radio radio-inline" for="radio54a">
                <input type="radio" name="test51" data-toggle="radio" value="<?php echo $yes; ?>" id="radio54a" required>
                 <?php echo $yes; ?>
              </label>
              <label class="radio radio-inline" for="radio54b">
                <input type="radio" name="test51" data-toggle="radio" value="<?php echo $average; ?>" id="radio54b" required>
                 <?php echo $average; ?>
              </label>
              <label class="radio radio-inline" for="radio54c">
                <input type="radio" name="test51" data-toggle="radio" value="<?php echo $no; ?>" id="radio54c" required>
                 <?php echo $no; ?>
              </label>
            </div>
</div>
<div id="que" class="quecss">
You focus on the possibilities rather than the realities.
<div class="form-group">
              <label class="radio radio-inline" for="radio55a">
                <input type="radio" name="test52" data-toggle="radio" value="<?php echo $yes; ?>" id="radio55a" required>
                 <?php echo $yes; ?>
              </label>
              <label class="radio radio-inline" for="radio55b">
                <input type="radio" name="test52" data-toggle="radio" value="<?php echo $average; ?>" id="radio55b" required>
                 <?php echo $average; ?>
              </label>
              <label class="radio radio-inline" for="radio55c">
                <input type="radio" name="test52" data-toggle="radio" value="<?php echo $no; ?>" id="radio55c" required>
                 <?php echo $no; ?>
              </label>
            </div>
</div>
<div id="que" class="quecss">
You often take initiative in social situations.
<div class="form-group">
              <label class="radio radio-inline" for="radio56a">
                <input type="radio" name="test53" data-toggle="radio" value="<?php echo $yes; ?>" id="radio56a" required>
                 <?php echo $yes; ?>
              </label>
              <label class="radio radio-inline" for="radio56b">
                <input type="radio" name="test53" data-toggle="radio" value="<?php echo $average; ?>" id="radio56b" required>
                 <?php echo $average; ?>
              </label>
              <label class="radio radio-inline" for="radio56c">
                <input type="radio" name="test53" data-toggle="radio" value="<?php echo $no; ?>" id="radio56c" required>
                 <?php echo $no; ?>
              </label>
            </div>
</div>
<div id="que" class="quecss">
  <div class="form-group">
    <input type="hidden" name="action" value="ptest">
 <input type="submit" value="Submit Test">
 </div>
 </form>
</div>


