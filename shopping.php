<!--modal content for the shopping cart-->
<div id="Modal" class="modal fade" role="dialog">
	<div class="modal-dialog">
        <div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Purchase Details</h4>
			</div>
			<div class="modal-body">
				<!-- This form asks the user for the information in order to buy and ship the artwork -->
				Quantity: <input type="text" name="quantity" id="quantity">
				<br><br>
				Shipping plan: <select name="shipping" id="shipping">
								<option value="" selected disabled hidden>Select a Shipping Plan</option>
								<option value="10">PRIME ($10.00)</option>
								<option value="5">standard ($5.00)</option>
								<option value="0">questionable (FREE)</option>
							</select>
				<br><br>
				<button onclick="buy()">BUY</button>	
			</div>
		</div>
	</div>
</div>

<script>
function buy() {
	
		var selectedArtwork = document.getElementById("artList").value;
		//checks that an artwork has been selected
		if (selectedArtwork == "") {
			alert("Please select an artwork from the home page.");
			return;
		}
}
</script>