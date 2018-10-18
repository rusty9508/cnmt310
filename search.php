<?php
require_once("Template.php");
$page = new Template("My Page");
$page->setHeadSection("<script src='hello.js'></script><link rel='stylesheet' href='main.css'>");
$page->setTopSection();
$page->setBottomSection();
print $page->getTopSection();

print "<div class='border'> \n";
print "<img src='http://st1.bgr.in/wp-content/uploads/2015/07/huawei-logo.jpg' alt='pic' width='150' height='80'/> \n";
print "<div id='nav'> \n";
print "<ul> \n";
print "<li><a href='Home.php'>Home</a></li> \n";
print "<li><a href='search.php'>Search</a></li> \n";
print "<li><a href='aboutus.php'>About Us</a></li> \n";
print "<li><a href='#/shop'>Shop</a></li> \n";
print "<li><a href='contactus.php'>Contact Us</a></li> \n";				
print "</ul> \n";
print "</div> \n";

print "<div id= 'contact'> \n";
print "<form method='post' action='searchResult.php'>";
print "<fieldset> \n";
print "Search: <input type='text' name='search'>";
print "<br><input type='submit' name='Submit' value='Submit'>";
print "</fieldset> \n";
print "</form>";
print "</div> \n";

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


print $page->getBottomSection();


?>