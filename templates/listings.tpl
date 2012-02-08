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
          <td>Add to cart</td>
        </tr>
        {section name=parts loop=$PartListings}
        <tr>
          <td><a href="http://i.imgur.com/lqZE5.jpg"><img src="http://i.imgur.com/lqZE5s.jpg" alt="#" /></a></td>
          <td>{$PartListings[parts].part_number}</td>
          <td>{$PartListings[parts].part_name}</td>
          <td class="price">&pound;{$PartListings[parts].part_price}</td>
          <td class="add"><a href="/parts/basket/add/{$PartListings[parts].serial}">Add</a></td>
        </tr>
        {/section}

 
      </table>
    </div><!--/content-->
    
    <div id="footer">
      <h6>&copy; 2011 - TRGB Ltd.</h6>
    </div><!--/footer-->
  
  </div><!--/wrapper-->

</body>

</html>