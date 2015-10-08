# oembed-php #

## Introduction ##

This library provides a simple and lightweight way to quickly add the advantages of oEmbed to your PHP project.

I'm totally that there are currently [two](http://code.google.com/p/php-oembed/) [other](http://pear.php.net/package/Services_oEmbed) PHP implementations of the oEmbed standard but in the need of a simple and lightweight and simple alternative I've written this little one-file PHP library.


## Providers: ##

Currently this library only supports a few of all oEmbed providers, with many more to come in future revisions. These are the supported providers at this time:

  * YouTube (video)
  * Flickr (video/photo)
  * Vimeo (video)
  * Viddler (video)


## How to use: ##

  * Include/require the class at the beginning

```
require_once "class_oembed.php";
```

  * Create a class instance

```
$oembed = new OEmbed(); 
```

  * Use the method **getHtml()** to embed a object

```
echo $oembed->getHTML("http://www.youtube.com/watch?v=EssrtKyCKVc", array('width' => 300));
```

  * That's it!

## To-Do: ##
  * ~~Auto-Embed-Function~~
  * Implementation of the [Discover-Feature](http://www.oembed.com/)
  * A better regexp-syntax for URL validation
  * Testing, testing, testing ...