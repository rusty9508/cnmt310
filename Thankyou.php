<?php

require_once("Template.php");

/*for nav and bottom*/require_once("navAndbottom.php");

$page = new Template("Thankyou");

/*for nav and bottom*/$myPage = new navAndbottom("My content");

$page->setHeadSection("<link rel='stylesheet' href='main.css'>");

$page->setTopSection();

$page->setBottomSection();

/*for nav and bottom*/$myPage->setTopSection();

/*for nav and bottom*/$myPage->setBottomSection();

//Database stuff
require_once("DB.class.php");
$db = new DB();

//Check if connected
if (!$db->getConnStatus()) {
  print "An error has occurred with connection\n";
  exit;
}

print $page->getTopSection();
/*for nav and bottom*/print $myPage->getTopSection();

print "<h1>Thank you for contacting us, we will contact you in 24 hours.</h1>  \n";

/*for nav and bottom*/print $myPage->getBottomSection();


print $page->getBottomSection();
?>	