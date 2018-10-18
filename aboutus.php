<?php

require_once("Template.php");

$page = new Template("about us");

$page->setHeadSection("<link rel='stylesheet' href='main.css'>");

$page->setTopSection();

$page->setBottomSection();



print $page->getTopSection();

print "<div class='border'> \n";
print "<div id='nav'> \n";
print "<ul> \n";
print "<li><a href='Home.php'>Home</a></li> \n";
print "<li><a href='search.php'>Search</a></li> \n";
print "<li><a href='aboutus.php'>About Us</a></li> \n";
print "<li><a href='#/shop'>Shop</a></li> \n";
print "<li><a href='contactus.php'>Contact Us</a></li> \n";				
print "</ul> \n";
print "</div> \n";
print "<div class='border'> \n";
print "<h1> This is our Story </h1> \n";
print "<p>Huawei is a leading global provider of information and communications 
	technology (ICT) infrastructure and smart devices. With integrated solutions
	across four key domains telecom networks, IT, smart devices, and cloud services
	we are committed to bringing digital to every person, home and organization for
	a fully connected, intelligent world.</p> \n";
print "<p>Huawei's end-to-end portfolio of products, solutions and services are both 
	competitive and secure. Through open collaboration with ecosystem partners,
	we create lasting value for our customers, working to empower people,
	enrich home life, and inspire innovation in organizations of all shapes and sizes.</p> \n";
print "<p>At Huawei, innovation focuses on customer needs. We invest heavily in basic research,
	concentrating on technological breakthroughs that drive the world forward. We have
	more than 180,000 employees, and we operate in more than 170 countries and regions.
	Founded in 1987, Huawei is a private company fully owned by its employees.</p> \n";
print "</div> \n";
print "<div class='video'> \n";
print "<iframe width='550' height='350' \n"; 
print "src='https://www.youtube.com/embed/9g6kw1fu1Io'  allow='autoplay; encrypted-media' allowfullscreen></iframe> \n";
print "</div> \n";
print "</div> \n";
print "<div class='border2'> \n";	
print "<img src='http://usa.chinadaily.com.cn/business/attachement/jpg/site1/20130929/180373d2873013b2a13a34.jpg' alt='1picture' width='550' height='400'/> \n";	
print "<img src='https://www.cmimagazine.it/wp-content/uploads/2017/12/Huawei-experience-store.jpg' alt='2picture' width='550' height='400'/> \n";
print "<img src='https://cdn.techinasia.com/wp-content/uploads/2012/10/huawei-ceatec-7-680x435.jpg' alt='3picture' width='550' height='400'/> \n";
print "</div> \n";

print "<div id='footer'> \n";
print "<div id='shop' style='float:left'> \n"; 
print "<h2>Shop</h2> \n";
print "<ul> \n";
print "<li><a href='#/phone'>Phone</a></li> \n";
print "<li><a href='#/computer'>Computer</a></li> \n";
print "<li><a href='#/tv'>TV</a></li> \n";
print "<li><a href='#/music'>Music</a></li> \n";
print "<li><a href='#/giftcard'>Gift Cards</a></li> \n";
print "</ul> \n";
print "</div> \n";
print "<div id='store'> \n";		
print "<h2>Huawei Store</h2> \n";			
print "<ul> \n";
print "<li><a href='#/findastore'>Find a Store </a></li> \n";
print "<li><a href='#/Huaweicamp'>HUAWEI Camp</a></li> \n";
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
						