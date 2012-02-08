<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
 
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 <meta name="keywords" content="{$MetaKeywords}" />
 <meta name="description" content="{$MetaDescription}" />  
 <title>{$PageTitle}</title>
 <link rel="stylesheet" href="/css/style.css" type="text/css" media="screen" /> 
</head>

<body>

  <div id="wrapper">
  
    <div id="header">
      <a href="/"><img src="/img/trgblogo.png" alt="TRGB Logo" /></a>
      <h1>TRGB Ltd. Parts Catalogue</h1>
      <h2>Herald, Spitfire, Vitesse &amp; GT6</h2>
    </div><!--/header-->
    
    <div id="content">
      <h3>{$Heading}</h3>
      <table>
        <tr class="head">
          <td>Picture</td>
          <td>Part Number</td>
          <td>Part Name</td>
          <td>Part Price</td>
          <td>Quantity</td>
          <td>Remove</td>
        </tr>
        {section name=parts loop=$BasketContents}
        <tr>
          <td><a href="http://i.imgur.com/5G89Y.jpg"><img src="http://i.imgur.com/5G89Ys.jpg" alt="#" /></a></td>
          <td>{$BasketContents[parts].part_number}</td>
          <td>{$BasketContents[parts].part_name}</td>
          <td class="price">&pound;{$BasketContents[parts].part_price}</td>
          <td><a href="/parts/basket/subtract/{$BasketContents[parts].serial}"><img src="http://i.imgur.com/Q0zu2.png" alt="subtract" class="plusminus"></a><span class="floatleft">{$BasketContents[parts].quantity}</span><a href="/parts/basket/add/{$BasketContents[parts].serial}"><img src="http://i.imgur.com/lbdnF.png" alt="add" class="plusminus"></a></td>
          <td><a href="/parts/basket/remove/{$BasketContents[parts].serial}">Remove</a></td>
        </tr>
        {/section}
        <tr class="totals">
          <td class="nb"></td>
          <td class="nb"></td>
          <td class="nb"></td>
          <td colspan="2">Subtotal:</td>
          <td>&pound;{$TotalPrice}</td>
        </tr>
        <tr class="totals">
          <td class="nb"></td>
          <td class="nb"></td>
          <td class="nb"></td>
          <td colspan="2">VAT @ 20%:</td>
          <td>&pound;{$VATAmount}</td>
        </tr>
        <tr class="totals">
          <td class="nb"></td>
          <td class="nb"></td>
          <td class="nb"></td>
          <td colspan="2">Total:</td>
          <td>&pound;{$TotalPlusVAT}</td>
        </tr>
      </table>
      
      <div id="placeorder">
        <h3><a href="/parts/basket/placeorder/">Place Order</a></h3>
      </div><!--/placeorder-->
      
    </div><!--/content-->
    
    <div id="footer">
      <h6>&copy; 2011 - TRGB Ltd.</h6>
    </div><!--/footer-->
  
  </div><!--/wrapper-->

</body>

</html>