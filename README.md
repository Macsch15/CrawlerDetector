###Crawler Detector
Fat-free, standalone and fast web crawler (bot) detector

Special thanks for [Piwik team](http://piwik.org/team/) for the [crawlers regexes](https://github.com/piwik/device-detector/blob/master/regexes/bots.yml) :heart:

###Requirements
- PHP 5.4 (or above)

###Usage
```
$ composer require macsch15/crawler-detector dev-master
```

```php
<?php
require './vendor/autoload.php';

use CrawlerDetector\Detector\CrawlerDetector;

$detector = new CrawlerDetector();
$detector->isCrawler($useragent); // returns true or false
$detector->getCrawlerName(); // returns crawler name or null

// example
if ($detector->isCrawler($useragent) === true) {
    echo $detector->getCrawlerName();
} 
```

###MIT Licence

Copyright (c) 2015 Maciej Schmidt

Permission is hereby granted, free of charge, to any person obtaining a copy 
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is furnished
to do so, subject to the following conditions:
The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
THE SOFTWARE.
