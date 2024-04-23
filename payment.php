<?php require('utilities/header.php') ?>


	<!-- End of header -->

	<div class="dash_right_body">
		<div class="container-fluid">


		<div class="payment_modal" id="payment_modal">
			<div class="p_modal_top">
				<div class="close_modal" id="close_modal">
					<i class="fa fa-times p_modal_close" id="p_modal_close"></i>
				</div>
				
			</div>

			<div class="p_modal_body">
				<h6 class="my-3">2nd Term Fees 2023 session</h6>

				<table class="table" style="font-size: 12px;">
					<tr>
						<th>S/N</th>
						<th>Description</th>
						<th>Amount</th>
					</tr>

					<tr>
						<td>1</td>
						<td>Tuition Fee</td>
						<td>15,000</td>
					</tr>

					<tr>
						<td>2</td>
						<td>Sport Wear</td>
						<td>4,000</td>
					</tr>

					<tr>
						<td>3</td>
						<td>Uniform</td>
						<td>3,000</td>
					</tr>

					<tr>
						<td>4</td>
						<td>Development Fee</td>
						<td>2,000</td>
					</tr>

					<tr>
						<th></th>
						<th>Total</th>
						<th>24,000</th>
					</tr>
				</table>

				<div class="p_modal_pay">
					<a href="#" class="button">Pay Now</a>
				</div>
			</div>
		</div>



			<div class="row">
				<div class="col col-12 my-4">
					<h5>Fees Payment</h5>
				</div>
			</div>

			<div class="row">
				<div class="col col-12 my-2">
					<h6>Unpaid Fees</h6>
				</div>

				<div class="col col-12">
					<div class="payment_card">
						<div class="payment_card_left">
							<h6>2nd Term Fees </h6>
							<p>N30,000</p>
						</div>

						<div class="payment_card_right">
							<h6>Not paid</h6>
							<button class="button" id="view_payment"><i class="fa fa-eye"></i> View</button>
						</div>
					</div>
				</div>
			</div>

			<hr>

			<div class="row">
				<div class="col col-12 my-2">
					<h6>Fees History</h6>
				</div>

				<div class="col col-12 my-2">
					<div class="payment_card">
						<div class="payment_card_left">
							<h6>2nd Term Fees </h6>
							<p>N30,000</p>
						</div>

						<div class="payment_card_right">
							<h6>Paid</h6>
							
						</div>
					</div>
				</div>

				<div class="col col-12 my-2">
					<div class="payment_card">
						<div class="payment_card_left">
							<h6>2nd Term Fees </h6>
							<p>N30,000</p>
						</div>

						<div class="payment_card_right">
							<h6>Paid</h6>
						</div>
					</div>
				</div>
			</div>


		</div>
		
	</div>

<?php require ('utilities/footer.php') ?>