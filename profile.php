<!DOCTYPE html>

<html>

<head>
  
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

<style>

 .profile-header{
background-color: #007bff; height:200px;
}.user-detail{
	margin:-50px 0px 30px 0px;
}
.user-detail img{
	height:25vhpx;
	width:25vwpx;
}


.row-full{width:100vw;position:relative; margin-left: -50vw;left: 50%;}input[type="file"] {
  display: none;
}

img {
  cursor: pointer;
}
.edit-input {
    display:none;
}
</style>
</head>

<body text="40">
  
    
<div class="container">        
      <div class="row-full">
              <div class="col-lg-12 col-sm-12 col-12 profile-header">
</div>
        
 </div>
         
<div class="row-full user-detail">
              
   <div class="col-lg-12 col-sm-12 col-12">

      <input type="file" />                 
<center>      <img src="/dp.jfif" class="rounded-circle img-thumbnail" alt="">
 </center>
<script>
 var imgBtn = document.querySelector('img');
var fileInp = document.querySelector('[type="file"]');

imgBtn.addEventListener('click', function() {
  fileInp.click();
})
</script><br><br><br> 
               
<p align="center" style="font-size:40px;"><i class="fa fa-user fa-2x" aria-hidden="true"></i><input><span style="margin-left:10em"><i class="fa fa-pencil fa-2x" aria-hidden="true"></i></span></p><br><br>                
<p align="center" style="font-size:40px;"><i class="fa fa-envelope fa-2x" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;abcd@gmail.com <span style="margin-left:8em"><i class="fa fa-pencil fa-2x" aria-hidden="true"></i></span></p><br><br>
<p align="center" style="font-size:40px;"><i class="fa fa-lock fa-2x" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;abcd_123 <span style="margin-left:12em"><i class="fa fa-pencil fa-2x" aria-hidden="true"></i></span></p> 
              
             
</div>
         
</div>
</div>
</div>
</div>  
<script>
$(document).ready(function(){

	$('.edit').click(function(){
		$(this).hide();
		$(this).prev().hide();
		$(this).next().show();
		$(this).next().select();
	});

	$('input[type="text"]').blur(function() {
         if ($.trim(this.value) == ''){
			 this.value = (this.defaultValue ? this.defaultValue : '');
		 }
		 else{
			 $(this).prev().prev().html(this.value);
		 }

		 $(this).hide();
		 $(this).prev().show();
		 $(this).prev().prev().show();
          });

	  $('input[type="text"]').keypress(function(event) {
		  if (event.keyCode == '13') {
			  if ($.trim(this.value) == ''){
				 this.value = (this.defaultValue ? this.defaultValue : '');
			 }
			 else
			 {
				 $(this).prev().prev().html(this.value);
			 }

			 $(this).hide();
			 $(this).prev().show();
			 $(this).prev().prev().show();
		  }
	  });

});

</script>
</body>

</html>