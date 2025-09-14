<div id="myModal" class="modal">
  <!-- The Close Button -->
  <span class="close">&times;</span>

  <!-- Modal Content (The Image) -->
  <img class="modal-content" id="img01"/>

  <!-- Modal Caption (Image Text) -->
  <div id="caption" class="chop"></div>	
	<script>
		includeHTML();// Get the modal
		var modal = document.getElementById("myModal");

		// Get the image and insert it inside the modal - use its "alt" text as a caption
		var img1 = document.getElementById("myImg1");
		var img2 = document.getElementById("myImg2");
		var img3 = document.getElementById("myImg3");
		var modalImg = document.getElementById("img01");
		var captionText = document.getElementById("caption");
		img1.onclick = function(){
		  modal.style.display = "block";
		  modalImg.src = this.src;
		  captionText.innerHTML = this.alt;
		}
		img2.onclick = function(){
		  modal.style.display = "block";
		  modalImg.src = this.src;
		  captionText.innerHTML = this.alt;
		}
		img3.onclick = function(){
		  modal.style.display = "block";
		  modalImg.src = this.src;
		  captionText.innerHTML = this.alt;
		}

		// Get the <span> element that closes the modal
		var span = document.getElementsByClassName("close")[0];

		// When the user clicks on <span> (x), close the modal
		span.onclick = function() {
		  modal.style.display = "none";
		}
	</script>
</div>

