<?php  
?>
<!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
      <!-- Croppie.css -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.2/croppie.min.css">

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <meta name="csrf-token" content="{{ csrf_token() }}">

      <style type="text/css">
      	input[type="file"] {
		    position: absolute;
		    width: 1px;
		    height: 1px;
		    padding: 0;
		    margin: -1px;
		    overflow: hidden;
		    clip: rect(0,0,0,0);
		    border: 0;
		}
		#preview-crop-image p {
			text-align: center;
			padding-top: 65px;
		}
      	@media only screen and (max-width: 600px) {
		  #modal1 {
		    width: 100% !important;
		  }
		}
		@media only screen and (max-width: 992px) {
		  #modal1 {
		    width: 100% !important;
		  }
		}
      </style>
    </head>

    <body>
    	<nav class="white pink-text">
		    <div class="nav-wrapper">
		        <a href="#" class="brand-logo pink-text">Logo</a>
		        <ul id="nav-mobile" class="right hide-on-med-and-down pink-text">
		        	<li><a href="#modal1" class="btn waves-effect waves-light modal-trigger pink lighten-2 white-text"><i class="material-icons left">add_box</i> 
		        		<span style="text-transform:none;">New Post</span></a></li>
			        <li><a href="sass.html"  class="pink-text">Sass</a></li>
			        <li class="pink-text"><a href="badges.html"  class="pink-text">Components</a></li>
			        <li class="pink-text"><a href="collapsible.html" class="pink-text">JavaScript</a></li>
		        </ul>
		    </div>
		</nav>

		<div id="modal1" class="modal modal-fixed-footer" style="width: 45%;overflow-y: hidden;">
			<div class="front">
			    <div class="modal-content" style="padding-top: 10px;background-color: white;">
			      <p>New Post</p>
			      <div class="divider"></div>
			      <br><br>
			      	<div class="container">
				      	<div class="row center">
				      		<div class="col s6">
				      			<div style="cursor: pointer;" onclick="closeModal()" class="waves-effect waves-pink">
					      			<p><i class="material-icons pink-text" style="font-size:96px;">image_search</i></p>
					      			<p>Start a search</p>
					      		</div>
				      		</div>
				      		<div class="col s6">
				      			<div style="cursor: pointer;" class="waves-effect waves-pink">
					      			<p><i class="material-icons pink-text" style="font-size:96px;">poll</i></p>
					      			<p>Start a style poll</p>
					      		</div>
				      		</div>
				      	</div>
				    </div>
			    </div>
			    <div class="modal-footer white">
			      <a href="#!" class="modal-close waves-effect waves-green btn-flat pink-text" style="text-transform: none;">
			      	<i class="material-icons left">close</i>Close</a>
			    </div>
			</div>

			<!-- New quest modal -->
			<div class="back hide">
				<div class="modal-content" style="padding-top: 10px;background-color: white;overflow-y: hidden;">
			      <p class="backToFront pink-text waves-effect waves-green"><i class="material-icons left">chevron_left</i>Back</p>
			      <div class="divider"></div>
			      <br>
			      	<div class="">
				      	<div class="row">
				      		<div class="col s6">
				      			<div style="cursor: pointer;">
				      				<label for="image-uploading">
					      				<div id="preview-crop-image" class="center grey lighten-4" style="width:200px;height:200px;margin: auto;">
					      					<p><i class="material-icons" style="font-size:40px;">camera</i><br>Tap to upload</p>
					      				</div>
					      			</label>
					      			<!-- <p class="center"><strong>Select image to crop</strong></p>-->
        							<p><input type="file" id="image-uploading"></p>
					      		</div>
				      		</div>
				      		<div class="col s6">
				      			<h6 class="grey-text text-darken-2">What are you looking for?</h6>
				      			<div class="row">
    								<form class="col s12">
    									<div class="row">
        									<div class="input-field col s12">
        										<input id="last_name" type="text" class="validate" 
        										placeholder="eg: I am looking for a pink dress">
        									</div>
        									<div class="input-field col s12">
        										<input id="last_name" type="text" class="validate" 
        										placeholder="Add tags (optional)">
        									</div>
        									<p class="center"><button type="submit" class="btn pink white-text lighten-2">Submit</button></p>
        								</div>
    								</form>
    							</div>
				      		</div>
				      	</div>
				    </div>
			    </div>
			    <div class="modal-footer white">
			      <a href="#!" class="modal-close waves-effect waves-green btn-flat pink-text" style="text-transform: none;">
			      	<i class="material-icons left">close</i>Close</a>
			    </div>
			</div>
		 </div>

		 <!-- Cropping Modal -->
		 <div id="modal-for-cropping-image" class="modal" style="max-height: 100%;overflow-y: scroll;height: 1050px; bottom: 10%;">
		    <div class="modal-content center">
		      <div id="upload-demo"></div>
		      <p class="right">
		      	<a href="#!" class=" waves-effect waves-green btn pink white-text lighten-2 btn-upload-image">Done</a>
		        <a href="#!" class=" modal-close waves-effect waves-green btn-flat pink-text">
		      	<i class="material-icons left">close</i>Close</a></p>
		    </div>
		    <div class="modal-footer">
		     
		    </div>
		</div>


      <!--JavaScript at end of body for optimized loading-->
      <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.2/croppie.js"></script>
      <script>
      	M.AutoInit();

      	function closeModal() {
      		$('.front').removeClass('show').addClass('hide');
      		$('.back').removeClass('hide').addClass('show');
      	}
      	$(".backToFront").click(function(event) {
      		$('.back').removeClass('show').addClass('hide');
      		$('.front').removeClass('hide').addClass('show');
      	});
      </script>
      <script>
      	var resize = $('#upload-demo').croppie({
		    enableExif: true,
		    enableOrientation: true,    
		    viewport: { // Default { width: 100, height: 100, type: 'square' } 
		        width: 500,
		        height: 500,
		        type: 'square' //square
		    },
		    boundary: {
		        width: 550,
		        height: 550
		    }
		});


		$('#image-uploading').on('change', function () { 
		  // Open modal and display image for copping
		  $('#modal-for-cropping-image').modal('open');
		  var reader = new FileReader();
		    reader.onload = function (e) {
		      resize.croppie('bind',{
		        url: e.target.result
		      }).then(function(){
		        console.log('jQuery bind complete');
		      });
		    }
		    reader.readAsDataURL(this.files[0]);
		});


		$('.btn-upload-image').on('click', function (ev) {
		  ev.preventDefault();
		  resize.croppie('result', {
		    type: 'canvas',
		    size: 'viewport'
		  }).then(function (img) {
		    $.ajax({
		      url: "croppie.php",
		      type: "POST",
		      data: {"image":img},
		      success: function (data) {
		        html = '<img src="' + img + '" style="width:200px;height:200px;"/>';
		        $("#preview-crop-image").html(html);
		        $('#modal-for-cropping-image').modal('close');
		      }
		    });
		  });
		});

      </script>
    </body>
  </html>