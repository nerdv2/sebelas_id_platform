<?php
    include("header.php");
?>
</p>
<div class="bs-callout bs-callout-warning hidden">
  <h4>Oh snap!</h4>
  <p>This form seems to be invalid :(</p>
</div>

<div class="bs-callout bs-callout-info hidden">
  <h4>Yay!</h4>
  <p>Everything seems to be ok :)</p>
</div>

<form name="formInput" action="sendcontact.php" method="POST" autocomplete="off">
<table border='0' cellpadding="7" cellspacing="7">
    <tr>
        <td colspan="2">Contact Form</td>
    </tr>
    <tr>
        <td>Customer Name</td>
        <td><input type="text" data-parsley-type="alphanum" size="80" name="cstname" placeholder="Full Name (example:John Smith)" required=""><span id="usrmsg"></span></td></td>
    </tr>
    <tr>
        <td>Username</td>
        <td><input type="text" minlength="6" name="cstusername" size="80" required=""></td>
    </tr>
    <tr>
        <td>E-Mail</td>
        <td><input type="email" name="cstemail" size="80" required=""><span id="emailmsg"></span></td>
    </tr>
    <tr>
        <td>Complain Type</td>
        <td><select name="cstcomplaint" required="">
        	<option value="">Select...</option>
			<option value="product_complain">Product Complaint</option>
			<option value="payment_complain">Payment Complaint</option>
			<option value="feature_suggestion">Feature Suggestion</option>
			<option value="error_report">Bug and Error Report</option>
			</select>
        </td>
    </tr>
    <tr>
        <td>Information</td>
        <td><textarea name="cstinfo" width="600" required=""></textarea></td>
    </tr>
    <tr>
        <td>Additional Info</td>
        <td><textarea name="cstaddinfo" width="600" required=""></textarea></td>
    </tr>
    <tr>
        <td colspan="2">
        <input type="submit" value="Submit">
        <input type="reset" value="Reset Form">
        </td>
    </tr>
</table>
</form>

<script type="text/javascript">
$(function () {
  $('#formInput').parsley().on('field:validated', function() {
    var ok = $('.parsley-error').length === 0;
    $('.bs-callout-info').toggleClass('hidden', !ok);
    $('.bs-callout-warning').toggleClass('hidden', ok);
  })
  .on('form:submit', function() {
    return false; // Don't submit form for this demo
  });
});
</script>

<?php
    include("footer.php");
?>