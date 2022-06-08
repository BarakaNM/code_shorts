<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>JQuery Effects</title>

	<!-- CSS only -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

	<!--JQuery CDN-->
	<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

	<!-- JavaScript Bundle with Popper -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</head>
<body>

	<div class="row" style="margin-top:60px"></div>
<div class="container-lg">
	
		<div class=" container row">
			<!--Toggle effect-->
			<div class="col-md-4">
				<button type="button" class="tog btn btn-primary btn-lg btn-block"> Click Toggle(Hide/Show) Button</button>
				<div class="toggle">
					Lorem Ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip exea commodo consequat.
				</div>
			</div>
            
            <!--Fadeout effect-->
		    <div class="col-md-4">
				<button type="button" class="btnfade btn btn-primary btn-lg btn-block">Click Fade
				Out button</button>
				<div class="fout">
				Lorem Ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip exea commodo consequat.
				</div>
			</div>

            <!--FadeToggle effect-->
			<div class="col-md-4">
				<button type="button" class="btntoggle btn btn-primary btn-lg btn-block">Click Fade
				Toggle button</button>
  				<div class="ftoggle">
					Lorem Ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip exea commodo consequat.
				</div>
			</div>
		
		</div>

        <div class="row" style="margin-top:30px"></div>
		<div class="row">

			<!--fadeto effect-->
			<div class="col-md-4">
			<button type="button" class="btnfadeto btn btn-primary btn-lg btn-block">Click FadeTo Button</button>
			<div class="fto">
					Lorem Ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip exea commodo consequat.
			</div>
         	</div>
           
           <!--Slideup/Slidedown Effect-->
            <div class="col-md-4">
            	<button type="button" class="btnslideup btn btn-primary btn-lg btn-block">Click SlideUp/Down Button
				 </button>
  				<div class="fslideup">
					Lorem Ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip exea commodo consequat.
				</div>
            </div>

   

            <!--SlideToggle Effect--> 
            <div class="col-md-4">
            	<button type="button" class="btnslidtoggle btn btn-primary btn-lg btn-block">Click SlideToggle Button
				 </button>
  				<div class="fslidetoggle">
					Lorem Ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip exea commodo consequat.
				</div>
            </div>

		</div>
		</div>

<script type="text/javascript">
	$(function(){
		//hide/show toggle effect
		$(".tog").click(function(){
			$(".toggle").toggle();
		})

    	//fadeout effect
		$(".btnfade").click(function(){
			$(".fout").fadeOut(2000);
		})

		//fadetoggle(in/out) effect
		$(".btntoggle").click(function(){
			$(".ftoggle").fadeToggle(2000);
		})

		//fadeto effect
		$(".btnfadeto").click(function(){
			$(".fto").fadeTo(2000,0.6);
		})

		//slideup effect
		$(".btnslideup").click(function(){
			$(".fslideup").slideUp();
			$(".fslideup").slideDown();

		})
		
		//slidetoggle(up/down) effect 		
		$(".btnslidtoggle").click(function(){
			$(".fslidetoggle").slideToggle();
		})


	})
	
</script>	


</body>
</html>