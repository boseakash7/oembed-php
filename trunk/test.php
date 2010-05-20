<?php


require_once "class_oembed.php";

echo $oembed = new OEmbed(); 


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
				
print_r($oembed->getHTML("http://www.youtube.com/watch?v=EssrtKyCKVc", array('width' => 167, 'height' => 567)));

echo "<br /><br /><br />";
echo "-----------------------------------------------------------------------------------<br />";
echo "<br />";
echo "<br />";
echo "http://www.flickr.com/photos/scheiss_benji/4615831545/<br /><br />";
				
print_r($oembed->getHTML("http://www.flickr.com/photos/scheiss_benji/4615831545/", array('width' => 167, 'height' => 567)));

echo "<br /><br /><br />";
echo "-----------------------------------------------------------------------------------<br />";
echo "<br />";
echo "<br />";
echo "http://www.flickr.com/photos/nattu/3094752363/<br /><br />";
				
print_r($oembed->getHTML("http://www.flickr.com/photos/nattu/3094752363/", array('width' => 167, 'height' => 567)));	

echo "<br /><br /><br />";
echo "-----------------------------------------------------------------------------------<br />";
echo "<br />";
echo "<br />";
echo "http://vimeo.com/11774747<br /><br />";
				
print_r($oembed->getHTML("http://vimeo.com/11774747", array('width' => 167, 'height' => 567)));

echo "<br /><br /><br />";
echo "-----------------------------------------------------------------------------------<br />";
echo "<br />";
echo "<br />";
echo "http://www.viddler.com/explore/sidequesting/videos/23/<br /><br />";
				
print_r($oembed->getHTML("http://www.viddler.com/explore/sidequesting/videos/23/", array('width' => 167, 'height' => 567)));





?>