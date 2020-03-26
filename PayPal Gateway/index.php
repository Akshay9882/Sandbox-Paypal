<?php
$paypal_url='https://www.sandbox.paypal.com/cgi-bin/webscr'; // Test Paypal API URL
$paypal_id='akshay1@paypal.com'; // Business email ID
?>
<style>
body
{
    font: bold 14px arial;
}
.product
{
    float: left;
    margin-right: 10px;
    border: 1px solid #cecece;
    padding: 10px;
    margin-right: 20px;
}
</style>

<div class="product">            
    <div class="image">
        <img src="LogoFord.png" />
    </div>
    <div class="name">
        Buy This Logo Design
    </div>
    <div class="price">
        Price:$140
    </div>
    <div class="btn">
    <form action="<?php echo $paypal_url ?>" method="post" name="frmPayPal1">
    <input type="hidden" name="business" value="<?php echo $paypal_id ?>">
    <input type="hidden" name="cmd" value="_xclick">
    <input type="hidden" name="item_name" value="Logo Of cars">
    <input type="hidden" name="item_number" value="1">
    <input type="hidden" name="credits" value="510">
    <input type="hidden" name="userid" value="1">
    <input type="hidden" name="amount" value="140">
    <input type="hidden" name="cpp_header_image" value="http://www.phpgang.com/wp-content/uploads/gang.jpg">
    <input type="hidden" name="no_shipping" value="1">
    <input type="hidden" name="currency_code" value="USD">
    <input type="hidden" name="handling" value="0">
    <input type="hidden" name="cancel_return" value="http:/127.0.0.1:8085/abc/cancel.php">
    <input type="hidden" name="return" value="http:/127.0.0.1:8085/abc/success.php">
    <input type="image" src="https://www.sandbox.paypal.com/en_US/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
    <img alt="" border="0" src="https://www.sandbox.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1">
    </form> 
    </div>
</div>

<?php
$title = "PayPal Payment in PHP";
$heading = "Welcome to PayPal Payment PHP example.";
?>