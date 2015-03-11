<?php 
$pages = [
    'Home'=>['pageUrl'=>'home.php', 'default'=>true],
    'About Us'=>['pageUrl'=>'about-us.php'],
    'Services'=>['pageUrl'=>'services.php'],
    'Contact'=>['pageUrl'=>'contact.php']
];
// print("GET BEFORE SET");print_r($_GET);
if(!isset($_GET['page']))
{
    $_GET['page'] = 'home.php';
}

?><!DOCTYPE html> 

<html>
<head> 
	<title> Davis - Sweet Corner | index</title> 
	
	<meta name="title" content="Home of the Sweet Corner" />
	<meta name="keywords" content="sweetcorner, sweet, corner, home, index" />
	<meta name="description" content="This is the home of the Sweet Corner." />
	<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
	<link  media = "all" rel="stylesheet" type="text/css" href="css/sweet_style.css">
	<link href='http://fonts.googleapis.com/css?family=Dancing+Script'
rel='stylesheet' type='text/css' />


<style> 
.selected_menu_item{
	background: lightblue;
}


</style>
		
</head> 


<body> 
<?php 
	require('header_footer/header.php');
?>
	
	<div id = "main_contents"> 
		<?php 
/*
		if(isset($_GET['page'])){
//			echo ($_GET['page']);
			include("pages/".$_GET['page']);
		}
		else {
			include("pages/home.php");
		}
		*/
		?>
		
		
		<?php 
		?>
		
		<?php //----------------------------------------------------?>
		
		 <?php 
            //check to see if file exists
            if(file_exists('pages/'.$_GET['page']))
            {
            //if it does, include it
                include('pages/'.$_GET['page']);
            }
            else  
            {
                include('pages/404.php');
            }
            //if page doesn't exists, then include our custom 404 page

           ?>
	
	</div> 
		

<?php 
	require('header_footer/footer.php');
?>
	<script src="js/sweet_javascript.js"></script> 		
</body> 
</html>