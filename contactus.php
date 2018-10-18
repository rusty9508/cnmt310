<?php

require_once("Template.php");

$page = new Template("contactus");

$page->setHeadSection("<link rel='stylesheet' href='contactus.css'>");

$page->setTopSection();

$page->setBottomSection();



print $page->getTopSection();

print "<body> \n";
print "<div class='border'> \n";
print "<div id='nav'> \n";
print "<ul> \n";
print "<li><a href='#/home'>Home</a></li> \n";
print "<li><a href='#/aboutus'>About Us</a></li> \n";
print "<li><a href='#/shop'>Shop</a></li> \n";
print "<li><a href='#/contactus'>Contact Us</a></li> \n";				
print "</ul> \n";
print "</div> \n";
print "<div id= 'contact'> \n";
print "<h1>Contact Us</h1> \n";
print "<p>* Please fill out this form.</p> \n";
print "<form action='Thankyou.html' method='post'> \n";
print "<fieldset> \n";
print "*First Name: <input name='firstName' type='text' /> <br /> \n";
print "*Last Name: <input name='lastName' type='text' /> <br /> \n";
print "*Email address: <input name='Email address' type='text' /> <br /> \n";
print "*phone number: <input name='phone number' type='text' /> <br /> \n";				
print "<button type='submit'>submit</button> \n";
print "</fieldset> \n";
print "</form> \n";	
print "</div> \n";
print "</div> \n";

print $page->getBottomSection();
print "<div id='footer'> \n";
print "<div id='shop' style='float:left'> \n"; 
print "<h2>Shop</h2> \n";
print "<ul> \n";
print "<li><a href='#/book'>Book</a></li> \n";
print "<li><a href='#/ebook'>EBook</a></li> \n";
print "<li><a href='#/sell'>Sell</a></li> \n";
print "<li><a href='#/art'>Art</a></li> \n";
print "<li><a href='#/giftcard'>Gift Cards</a></li> \n";
print "</ul> \n";
print "</div> \n";
print "<div id='store'> \n";		
print "<h2>Book Store</h2> \n";			
print "<ul> \n";
print "<li><a href='#/findastore'>Find a Store </a></li> \n";
print "<li><a href='#/camp'>Camp</a></li> \n";
print "<li><a href='#/downloadanapp'>Download an App</a></li> \n";
print "<li><a href='#/orderstatus'>Order Status</a></li> \n";
print "</ul> \n";				
print "<div id='others' style='float:right'> \n";				
print "<h2>Others</h2> \n";
print "<ul> \n";
print "<li><a href='#/news'>News </a></li> \n";
print "<li><a href='#/event'>Events</a></li> \n";
print "<li><a href='#/contact'>Contact</a></li> \n";
print "<li><a href='#/investors'>investors</a></li> \n";
print "</ul> \n";
print "</div> \n";
print "</div> \n";
print "<div class='copyright'> \n";
print "<p>Copyright @ 2018 HUAWEI. USA, Inc</p> \n";
print "</div> \n";
print "</body> \n";
print "</html> \n";
?>	