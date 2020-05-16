<?php
session_start();
if (!isset($_SESSION['email'])){
header("location:login.php");
}
?>
<html>
	<head>
		<title> Online Application|Home </title>
		<link rel="stylesheet" type="text/css" href="se_ms/login-box.css"/>
	
	</head>
	<body>
		<center>
			<div class="content">
				<div><img src="http://iitmandi.ac.in/onlineapp/images/navigation.jpg"></div>
				<table width="100%"><tr><td colspan="4" align="right"><button><b>User: <?php echo $_SESSION['email'];?></button>

<a href="http://iitmandi.ac.in/onlineapp/logout.php">Logout</a></b></td></tr></table>
			
<h1>Select the Program : </h1>
	<p>
<a href="http://iitmandi.ac.in/onlineapp/int_phy/index.php"><button>Application for <b>Integrated Ph.D (I-PhD) Physics</b> program</button></a></button></a></p>
<p>
	<!--<p>
<a href="http://iitmandi.ac.in/onlineapp/sbs_phd/index.php"><button>Application for <b>School of Basic Sciences (PhD)</b> program</button></a></button></a></p>
<p>
	
					<p>
<a href="http://iitmandi.ac.in/onlineapp/shss_phd/index.php"><button>Application for <b>School of Humanities and Social Sciences (PhD)</b> program</button></a></button></a></p>
<p>
					
 					<a href="http://iitmandi.ac.in/onlineapp/msc/index.php"><button>Application for <b>admission to the M. Sc (Chemistry)</b></button></a></p>
 					<p>
<a href="http://iitmandi.ac.in/onlineapp/se_ms/index.php"><button>Application for <b>School of Engineering (MS)</b> program</button></a><br><br> <a href="http://iitmandi.ac.in/onlineapp/se_phd/index.php"><button>Application for <b>School of  Engineering (Ph. D)</b> program</button></a></p>



 				<p>
					
 					<a href="http://iitmandi.ac.in/onlineapp/se_ms/index.php"><button>Application for <b>School of  Engineering (MS)</b> program</button></a><br><br> <a href="http://iitmandi.ac.in/onlineapp/se_phd/index.php"><button>Application for <b>School of  Engineering (Ph. D)</b> program</button></a></p>


 					

 				
 				<p>
 					
<a href="http://iitmandi.ac.in/onlineapp/diety_phd/index.php"><button>Application for DietY Ph. D in <b>School of Computing and Electrical Engineering (SCEE)</button></a></p>

<p><i><b>After submitting the online form, a PDF file will be generated. Keep this for your future reference. There is no need of sending the hard-copy of the form</i></b>.</p>-->

 				<br><br><br>
				
				<div class="footer"></div>
			</div><!-- .contect close here -->
		</center>
	</body>
</html>