<?php

// Include/require the class at the beginning

require_once "class_oembed.php";


// Create a class instance

$oembed = new OEmbed(); 


echo "<pre>";
echo "-----------------------------------------------------------------------------------<br />";
echo "------- OEmbed Test ---------------------------------------------------------------<br />";
echo "-----------------------------------------------------------------------------------<br />";
echo "<br />";
echo "<br />";
echo "<br />";
echo "<br />";
echo "-----------------------------------------------------------------------------------<br />";
echo "<br />";
echo "<br />";

echo "http://www.youtube.com/watch?v=EssrtKyCKVc<br /><br />";

// Use the method *getHtml()* to embed a object
				
echo $oembed->getHTML("http://www.youtube.com/watch?v=EssrtKyCKVc", array('width' => 300));

echo "<br /><br /><br />";
echo "-----------------------------------------------------------------------------------<br />";
echo "<br />";
echo "<br />";
echo "http://www.flickr.com/photos/scheiss_benji/4615831545/<br /><br />";
				
echo $oembed->getHTML("http://www.flickr.com/photos/scheiss_benji/4615831545/", array('width' => 300));

echo "<br /><br /><br />";
echo "-----------------------------------------------------------------------------------<br />";
echo "<br />";
echo "<br />";
echo "http://www.flickr.com/photos/nattu/3094752363/<br /><br />";
				
echo $oembed->getHTML("http://www.flickr.com/photos/nattu/3094752363/", array('width' => 300));	

echo "<br /><br /><br />";
echo "-----------------------------------------------------------------------------------<br />";
echo "<br />";
echo "<br />";
echo "http://vimeo.com/11774747<br /><br />";
				
echo $oembed->getHTML("http://vimeo.com/11774747", array('width' => 300));

echo "<br /><br /><br />";
echo "-----------------------------------------------------------------------------------<br />";
echo "<br />";
echo "<br />";
echo "http://www.viddler.com/explore/sidequesting/videos/23/<br /><br />";
				
echo $oembed->getHTML("http://www.viddler.com/explore/sidequesting/videos/23/", array('width' => 300));





?>