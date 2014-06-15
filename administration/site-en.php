<?php

require '../model/Administrateur.php';
session_start();
if(!isset($_SESSION["admin"]))
{
	header("location:index.php");
}

$admin=$_SESSION["admin"];
	@$title=$_POST["title"];
	@$title1=$_POST["title1"];
	@$subtitle1=$_POST["subtitle1"];
	@$title2=$_POST["title2"];
	@$subtitle2=$_POST["subtitle2"];
	@$title3=$_POST["title3"];
	@$subtitle3=$_POST["subtitle3"];
	@$article1=$_POST["article1"];
	@$desc1=$_POST["desc1"];
	@$para1_1=$_POST["para1_1"];
	@$para1_2=$_POST["para1_2"];
	@$file1=$_FILES["file1"];
	@$article2=$_POST["article2"];
	@$desc2=$_POST["desc2"];
	@$para2_1=$_POST["para2_1"];
	@$para2_2=$_POST["para2_2"];
	@$file2=$_FILES["file2"];
	@$article3=$_POST["article3"];
	@$desc3=$_POST["desc3"];
	@$para3_1=$_POST["para3_1"];
	@$para3_2=$_POST["para3_2"];
	@$file3=$_FILES["file3"];
	@$article4=$_POST["article4"];
	@$desc4=$_POST["desc4"];
	@$para4_1=$_POST["para4_1"];
	@$para4_2=$_POST["para4_2"];
	@$file4=$_FILES["file4"];
	@$descCFP=$_POST["descCFP"];
	@$prog1=$_POST["prog1"];
	@$prog2=$_POST["prog2"];
	@$image1=$_FILES["image1"];
	@$image2=$_FILES["image2"];
	@$image3=$_FILES["image3"];
	@$image4=$_FILES["image4"];
	@$adressemail=$_POST["adressemail"];
	@$adresse=$_POST["adresse"];
	@$numtel=$_POST["numtel"];
	@$numfax=$_POST["numfax"];
	@$send=$_POST["send"];
	
	if(isset($send)){
		//Création du fichier de donnees
		$dossier = '/site/fr/images';
		$fichier = basename($file1['name']);
		move_uploaded_file($file1['tmp_name'],$dossier."/photo1.jpg") ;
		$fileFR="../site/fr/donnee_fr.php";
		$mode='w';
		$fdFR=fopen($fileFR ,$mode);
		$j=0;
		for ($i=0;$i<strlen($title);$i++){
			if($i<(strlen($title)/2)){
				$titre1[$i]=$titre[$i];
			}
			else {
				$titre2[$j]=$titre[$i]; $j++;
			}
				
		}
		$str='<?php '
			.'$titre1="'.$title1.'";'
			.'$titre2="'.$title2.'";'
			.'$home="Home";'
			.'$cfp= "Call For Papers";'
			.'$programme="Programme";'
			.'$galerie="Galery";'
			.'$contact="Contact";'
			.'$titres=array( array( "'.$title1.'","'.$subtitle1.'"),array("'.$title2.'","'.$subtitle2.'"),array("'.$title3.'","'.$subtitle3.'"));'
			.'$article=array(array("'.$file1['name'].'","'.$article1.'","'.$desc1.'","'.$para1_1.'","'.$para1_2.'"),array("'.$file2['name'].'","'.$article2.'","'.$desc2.'","'.$para2_1.'","'.$para2_2.'"),array("'.$file3['name'].'","'.$article3.'","'.$desc3.'","'.$para3_1.'","'.$para3_2.'"),array("'.$file4['name'].'","'.$article4.'","'.$desc4.'","'.$para4_1.'","'.$para4_2.'"));'
			.'$more="More";$theme="Subjects of the CFP";'
			.'$descriptiontitre="Description";'
			.'$contactus="Contact us";
				$name="Name";
				$email="Email";
				$tel="Phone Number";
				$message="Message";
				$reset="Reset";
				$send="Send";
				$fax="Fax";'
			.'$numtel="'.$numtel.'";'
			.'$numfax="'.$numfax.'";'
			.'$adresse="'.$adresse.'";'
			.'$adressemail="'.$adressemail.'";'
			.'$programme="Programme";'
			.'$suite="suite";'
			.'$prog1="'.$prog1.'";'
			.'$prog2="'.$prog2.'";'
			.'$descriptioncfp="'.$descCFP.'";'
			.' ?>'
		;			
		fputs($fdFR, $str);
		fclose($fdFR);
		
		//Modification de l'index
		$fileindex="../index.php";
		$mode='w';
		$fdindex=fopen($fileindex ,$mode);
		$str='<?php header("location:site/fr/index.php"); ?>';
		fputs($fdindex, $str);
		fclose($fdindex);
		
	}

?>

<!DOCTYPE html>
<html>
<head>
	<?php $titleADMIN="Admin Panel | Generation of the english version of the web site"; include 'head.php'; ?>
</head>
<body>
<header>
	<?php include 'header.php'; ?>
</header>
 
  <!-- Content-->
  <section id="content" >
  <div class="centered">  

  
  <div class="main">
  		
          
        <div class="speedbar">
        <div class="speedbar-nav"> <a href="#">Admin panel | CPRMS</a> &rsaquo; <a href="#">Dashboard</a></div> 
         
           <div class="search">
             <form>
              <input type="text">
             </form>   
           </div>

        </div>
		
        <!-- Here -->
        <!--Form-->
        <form method="post" id="customForm" action="#">
        <div class="grid-1">
           <div class="title-grid">General Information</div>
           <div class="content-gird">
           <div class="form">
                 <div class="elem">
                        <label>Web Site Title : </label>
                        <div class="indent">
                            <input type="text" id="title" name="title"  class="medium"> 
                        </div>
                 </div>
                 <br>
                 <div class="elem">
                        <label>Title 1 :</label>
                        <div class="indent">
                            <input type="text" id="title1" name="title1" class="medium"> 
                        </div>
                 </div>
                 <div class="elem">
                        <label>Subtitle 1 :</label>
                        <div class="indent">
                            <input type="text" id="subtitle1" name="subtitle1" class="medium"> 
                        </div>
                 </div>
                 
                 <div class="elem">
                        <label>Title 2 :</label>
                        <div class="indent">
                            <input type="text" id="title2" name="title2" class="medium"> 
                        </div>
                 </div>
                 <div class="elem">
                        <label>Subtitle 2 :</label>
                        <div class="indent">
                            <input type="text" id="subtitle2" name="subtitle2" class="medium"> 
                        </div>
                 </div>
                 
                  <div class="elem">
                        <label>Title 3 :</label>
                        <div class="indent">
                            <input type="text" id="title3" name="title3" class="medium"> 
                        </div>
                 </div>
                 <div class="elem">
                        <label>Subtitle 3 :</label>
                        <div class="indent">
                            <input type="text" id="subtitle3" name="subtitle3" class="medium"> 
                        </div>
                 </div>
    		 <div class="clear"> </div>
             </div>
           </div>
        </div>  
		<!--Form end-->
        <!--Articles-->
        <div class="grid-1">
           <div class="title-grid">Article 1</div>
           <div class="content-gird">
           <div class="form">
               <div class="elem">
                        <label>Title of Article 1 :</label>
                        <div class="indent">
                            <input type="text" id="article1" name="article1" class="medium"> 
                        </div>
                 </div>
                 <div class="elem">
                        <label>Description of Article 1 :</label>
                        <div class="indent">
                            <textarea  class="medium"  id="desc1" name="desc1" rows="4"></textarea> 
                        </div>
                 </div>
                 <div class="elem">
                        <label>First Paragraphe of Article 1 :</label>
                        <div class="indent">
                            <textarea  class="medium"  id="1para1" name="para1_1" rows="5"></textarea>
                        </div>
                 </div>
                 <div class="elem">
                        <label>Second Paragraphe of Article 1 :</label>
                        <div class="indent">
                            <textarea  class="medium"  id="2para1" name="para1_2" rows="5"></textarea>
                        </div>
                 </div>
                 <div class="elem">
                        <label>Picture for Article 1 :</label>
                        <div class="indent">
                            <div class="uploader black">
                            <input type="text"  class="filename" readonly="readonly"/> 
                            <input type="button" name="file1btn" class="button_files " value="Browse..."/>
                            <input type="file" name="file1"/>
                            </div>
                        </div> 
                 </div>
    		 <div class="clear"> </div>
             </div>
           </div>
        </div>  
		<!--Article 1-->
		        <!--Articles-->
        <div class="grid-1">
           <div class="title-grid">Article 2</div>
           <div class="content-gird">
           <div class="form">
               <div class="elem">
                        <label>Title of Article 2 :</label>
                        <div class="indent">
                            <input type="text" id="article1" name="article2" class="medium"> 
                        </div>
                 </div>
                 <div class="elem">
                        <label>Description of Article 2 :</label>
                        <div class="indent">
                            <textarea  class="medium"  id="desc1" name="desc2" rows="4"></textarea> 
                        </div>
                 </div>
                 <div class="elem">
                        <label>first Paragraphe of Article 2 :</label>
                        <div class="indent">
                            <textarea  class="medium"  id="1para1" name="para2_1" rows="5"></textarea>
                        </div>
                 </div>
                 <div class="elem">
                        <label>Second Paragraphe of Article 2 :</label>
                        <div class="indent">
                            <textarea  class="medium"  id="2para1" name="para2_2" rows="5"></textarea>
                        </div>
                 </div>
                 <div class="elem">
                        <label>Picture for Article 2 :</label>
                        <div class="indent">
                            <div class="uploader black">
                            <input type="text"  class="filename" readonly="readonly"/>
                            <input type="button" name="file2" class="button_files " value="Browse..."/>
                            <input type="file" />
                            </div>
                        </div> 
                 </div>
    		 <div class="clear"> </div>
             </div>
           </div>
        </div>  
		<!--Article 2-->
		        <!--Articles-->
        <div class="grid-1">
           <div class="title-grid">Article 3</div>
           <div class="content-gird">
           <div class="form">
               <div class="elem">
                        <label>title of Article 3 :</label>
                        <div class="indent">
                            <input type="text" id="article3" name="article3" class="medium"> 
                        </div>
                 </div>
                 <div class="elem">
                        <label>Description of Article 3 :</label>
                        <div class="indent">
                            <textarea  class="medium"  id="desc3" name="desc3" rows="4"></textarea> 
                        </div>
                 </div>
                 <div class="elem">
                        <label>First Paragraphe of Article 3 :</label>
                        <div class="indent">
                            <textarea  class="medium"  id="1para3" name="para3_1" rows="5"></textarea>
                        </div>
                 </div>
                 <div class="elem">
                        <label>Second Paragraphe of Article 3 :</label>
                        <div class="indent">
                            <textarea  class="medium"  id="2para3" name="para3_2" rows="5"></textarea>
                        </div>
                 </div>
                 <div class="elem">
                        <label>Picture for Article 3 :</label>
                        <div class="indent">
                            <div class="uploader black">
                            <input type="text"  class="filename" readonly="readonly"/>
                            <input type="button" name="file1" class="button_files " value="Browse..."/>
                            <input type="file" />
                            </div>
                        </div> 
                 </div>
    		 <div class="clear"> </div>
             </div>
           </div>
        </div>  
		<!--Article 3-->
		        <!--Articles-->
        <div class="grid-1">
           <div class="title-grid">Article 4</div>
           <div class="content-gird">
           <div class="form">
               <div class="elem">
                        <label>title of Article 4 :</label>
                        <div class="indent">
                            <input type="text" id="article4" name="article4" class="medium"> 
                        </div>
                 </div>
                 <div class="elem">
                        <label>Description of Article 4 :</label>
                        <div class="indent">
                            <textarea  class="medium"  id="desc4" name="desc4" rows="4"></textarea> 
                        </div>
                 </div>
                 <div class="elem">
                        <label>First Paragraphe of Article 4 :</label>
                        <div class="indent">
                            <textarea  class="medium"  id="1para4" name="para4_1" rows="5"></textarea>
                        </div>
                 </div>
                 <div class="elem">
                        <label>Second Paragraphe of Article 4 :</label>
                        <div class="indent">
                            <textarea  class="medium"  id="2para4" name="para4_2" rows="5"></textarea>
                        </div>
                 </div>
                 <div class="elem">
                        <label>Picture for Article 4 :</label>
                        <div class="indent">
                            <div class="uploader black">
                            <input type="text"  class="filename" readonly="readonly"/>
                            <input type="button" name="file4" class="button_files " value="Browse..."/>
                            <input type="file" />
                            </div>
                        </div> 
                 </div>
    		 <div class="clear"> </div>
             </div>
           </div>
        </div>  
		<!--Article 4-->
		        <!--CFP-->
        <div class="grid-1">
           <div class="title-grid">Call For Paper | CFP</div>
           <div class="content-gird">
           <div class="form">
           		<div class="elem">
                        <label>Description :</label>
                        <div class="indent">
                            <textarea  class="medium"  id="descCFP" name="descCFP" rows="4"></textarea> 
                        </div>
                 </div>
                 <div class="elem">
                        <label>Programme of the event | First part</label>
                        <div class="indent">
                            <textarea  class="medium"  id="prog1" name="prog1" rows="5"></textarea>
                        </div>
                 </div>
                 <div class="elem">
                        <label>Programme of teh event | Second part</label>
                        <div class="indent">
                            <textarea  class="medium"  id="prog2" name="prog2" rows="5"></textarea>
                        </div>
                 </div>
    		 <div class="clear"> </div>
             </div>
           </div>
        </div>  
		<!--CFP-->
		        <!--Gallerie-->
        <div class="grid-1">
           <div class="title-grid">Galery :</div>
           <div class="content-gird">
           <div class="form">
           		<div class="elem">
                        <label>Picture 1 :</label>
                        <div class="indent">
                            <div class="uploader black">
                            <input type="text"  class="filename" readonly="readonly"/>
                            <input type="button" name="image1" class="button_files " value="Browse..."/>
                            <input type="file" />
                            </div>
                        </div> 
                 </div>
                 <div class="elem">
                        <label>Picture 2 :</label>
                        <div class="indent">
                            <div class="uploader black">
                            <input type="text"  class="filename" readonly="readonly"/>
                            <input type="button" name="image2" class="button_files " value="Browse..."/>
                            <input type="file" />
                            </div>
                        </div> 
                 </div>
                 <div class="elem">
                        <label>Picture 3 :</label>
                        <div class="indent">
                            <div class="uploader black">
                            <input type="text"  class="filename" readonly="readonly"/>
                            <input type="button" name="image3" class="button_files " value="Browse..."/>
                            <input type="file" />
                            </div>
                        </div> 
                 </div>
                 <div class="elem">
                        <label>Picture 4 :</label>
                        <div class="indent">
                            <div class="uploader black">
                            <input type="text"  class="filename" readonly="readonly"/>
                            <input type="button" name="image4" class="button_files " value="Browse..."/>
                            <input type="file" />
                            </div>
                        </div> 
                 </div>
    		 <div class="clear"> </div>
             </div>
           </div>
        </div>  
		<!--Gallerie-->
				        <!--Contact-->
        <div class="grid-1">
           <div class="title-grid">Contact :</div>
           <div class="content-gird">
           <div class="form">
           		<div class="elem">
                        <label>Email :</label>
                        <div class="indent">
                            <input type="text" id="adressemail" name="adressemail" class="medium"> 
                        </div>
                 </div>
                 <div class="elem">
                        <label>Adresse :</label>
                        <div class="indent">
                            <textarea  class="medium"  id="adress" name="adress" rows="5"></textarea>
                        </div>
                 </div>
                 <div class="elem">
                        <label>Phone Number :</label>
                        <div class="indent">
                            <input type="text" id="numtel" name="numtel" class="medium"> 
                        </div>
                 </div>
                 <div class="elem">
                        <label>Fax Number</label>
                        <div class="indent">
                            <input type="text" id="numfax" name="numfax" class="medium"> 
                            <br><br>
                          <input id="send" name="send" type="submit" class="button-a gray" value="Send" /> &nbsp;&nbsp;<button class="button-a dark-blue">Clear</button>
                        </div>
                 </div>
    		 <div class="clear"> </div>
             </div>
           </div>
        </div>  
		<!--Contatcs-->
		
		</form>

   </div><!-- END MAIN-->
   
   <!-- SIDEBAR -->
   <?php $expand=1; include 'sidebar.php'; ?>
   <!-- SIDEBAR -->
    
    <div class="clear"></div>
    </div>
    
  </section>
  <!-- Content end-->
  
  
  <footer>
     <?php include 'footer.php'; ?>
  </footer>
</body>
</html>