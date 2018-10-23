<?php

class navAndbottom {



  private $_top;

  private $_bottom;


	function setTopSection() {
		
		$returnVal = "";
		$returnVal .= "<div class='border'> \n";
		$returnVal .= "<img src='http://st1.bgr.in/wp-content/uploads/2015/07/huawei-logo.jpg' alt='pic' width='150' height='80'/> \n";
		$returnVal .= "<div id='nav'> \n";
		$returnVal .= "<ul> \n";
		$returnVal .= "<li><a href='Home.php'>Home</a></li> \n";
		$returnVal .= "<li><a href='search.php'>Search</a></li> \n";
		$returnVal .= "<li><a href='aboutus.php'>About Us</a></li> \n";
		$returnVal .= "<li><a href='#/shop'>Shop</a></li> \n";
		$returnVal .= "<li><a href='contactus.php'>Contact Us</a></li> \n";				
		$returnVal .= "</ul> \n";
		$returnVal .= "</div> \n";
		$returnVal .= "<div class='border'> \n";

		$this->_top = $returnVal;



	} //end function setTopSection



	function setBottomSection() {

		$returnVal = "";

		$returnVal .= "<div id='footer'> \n";
		$returnVal .= "<div id='shop' style='float:left'> \n"; 
		$returnVal .= "<h2>Shop</h2> \n";
		$returnVal .= "<ul> \n";
		$returnVal .= "<li><a href='#/book'>Book</a></li> \n";
		$returnVal .= "<li><a href='#/ebook'>EBook</a></li> \n";
		$returnVal .= "<li><a href='#/sell'>Sell</a></li> \n";
		$returnVal .= "<li><a href='#/art'>Art</a></li> \n";
		$returnVal .= "<li><a href='#/giftcard'>Gift Cards</a></li> \n";
		$returnVal .= "</ul> \n";
		$returnVal .= "</div> \n";
		$returnVal .= "<div id='store'> \n";		
		$returnVal .= "<h2>Book Store</h2> \n";			
		$returnVal .= "<ul> \n";
		$returnVal .= "<li><a href='#/findastore'>Find a Store </a></li> \n";
		$returnVal .= "<li><a href='#/camp'>Camp</a></li> \n";
		$returnVal .= "<li><a href='#/downloadanapp'>Download an App</a></li> \n";
		$returnVal .= "<li><a href='#/orderstatus'>Order Status</a></li> \n";
		$returnVal .= "</ul> \n";				
		$returnVal .= "<div id='others' style='float:right'> \n";				
		$returnVal .= "<h2>Others</h2> \n";
		$returnVal .= "<ul> \n";
		$returnVal .= "<li><a href='#/news'>News </a></li> \n";
		$returnVal .= "<li><a href='#/event'>Events</a></li> \n";
		$returnVal .= "<li><a href='#/contact'>Contact</a></li> \n";
		$returnVal .= "<li><a href='#/investors'>investors</a></li> \n";
		$returnVal .= "</ul> \n";
		$returnVal .= "</div> \n";
		$returnVal .= "<div class='copyright'> \n";
		$returnVal .= "<p>Copyright @ 2018 HUAWEI. USA, Inc</p> \n";
		$returnVal .= "</div>";
		$returnVal .= "</div></div> \n";



		$this->_bottom = $returnVal;



	} //end function setBottomSection



	function getTopSection() {

		return $this->_top;

	}

	function getBottomSection() {

		return $this->_bottom;

	}

}

?>