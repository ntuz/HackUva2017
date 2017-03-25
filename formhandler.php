<html>
<head>
  <title>Simple form handler</title>
  <script type="text/javascript">
    function confirmation(){
      window.location.replace("Confirmation_Page.html");
    }
    function back(){
      window.location.replace("Assignment2.html");
    }
  </script>
  <?php
    if( isset($_POST["Question"])){
       $Question = $_POST["Question"];
    }
    if( isset($_POST["tf"])){
      $tf = $_POST['tf'];
    }
    else
      $tf = "";
    if( isset($_POST["o"])){
      $o = $_POST['o'];
    }
    else
      $o = "";
    if( isset($_POST["TAA"])){
      $TAA = $_POST['TAA'];
    }
    else
      $TAA = "";
    $myfile = fopen("/cslab/home/rk2ea/public_html/data/data.txt", "a");
    /*$txt = "Question: ".$_POST['Question']. "Multiple Choice: ".$_POST['o'].  "True/False: ".$_POST['tf']. "Short Answer: ".$_POST['TAA'] ;*/
    $txt = "\n".$Question."\n".$tf."\n".$o."\n".$TAA."\n";
    fwrite($myfile, $txt);
    fclose($myfile);
  ?>
</head>

<body bgcolor="#EEEEEE">
<p> JT Speetjens: jts2bu</p>
  <p> Rohan Koduri: rk2ea </p>
<center>
  <center><h2>Simple Form Handler</h2></center>
  <p>
    The following table lists all parameter names and their values that were submitted from your form. Are these correct?
  </p>

  <table cellSpacing=1 cellPadding=1 width="75%" border=1 bgColor="lavendar">
    <tr bgcolor="#FFFFFF">
      <td align="center"><strong>Parameter</strong></td>
      <td align="center"><strong>Value</strong></td>
    </tr>
    <tr>
      <td width="20%">Question</td> 
      <td>
      <?php 
      if( isset($_POST["Question"])){
        echo $_POST["Question"];
      }?>
        </td>      
    </tr>
    <tr>
      <td width="20%">Multiple Choice</td> 
      <td>
      <?php 
      if( isset($_POST["o"])){
        echo $_POST["o"];
      }?>
        
      </td>      
    </tr>
    <tr>
    <td width="20%">True / False</td>
      <td>
      <?php 
       if( isset($_POST["tf"])){
        echo $_POST["tf"];
      }?>  
      </td>      
    </tr>
    <tr>
      <td width="20%">Short Answer</td>
      <td>
      <?php if( isset($_POST["TAA"])){
        echo $_POST["TAA"];
      }?>
        
      </td>      
    </tr> 
  </table>

<p>
    <input type="button" value="Confirm" onclick="javascript:confirmation();"/>
    <input type="button" value="Go Back" onclick="javascript:back();"/>
    </p>
    </center>


</body>
</html> 
