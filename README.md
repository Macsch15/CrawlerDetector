###Crawler Detector [![Build Status](https://travis-ci.org/Macsch15/CrawlerDetector.svg?branch=master)](https://travis-ci.org/Macsch15/CrawlerDetector) [![Coverage Status](https://coveralls.io/repos/Macsch15/CrawlerDetector/badge.svg?branch=master&service=github)](https://coveralls.io/github/Macsch15/CrawlerDetector?branch=master) 
Fat-free, standalone and fast web crawler (bot) detector

Special thanks for [Piwik team](http://piwik.org/team/) for the [crawlers regexes](https://github.com/piwik/device-detector/blob/master/regexes/bots.yml) :heart:

###Requirements
- PHP 5.5 (or above)
- Composer
- PHPUnit (for automated testing)

###Usage
```
$ composer require macsch15/crawler-detector dev-master
```

```php
<?php
require './vendor/autoload.php';

use CrawlerDetector\Detector\CrawlerDetector;

CrawlerDetector::isCrawler($useragent); // returns true or false
CrawlerDetector::getCrawlerName(); // returns crawler name or null

// Example
if (CrawlerDetector::isCrawler($useragent) === true) {
    return CrawlerDetector::getCrawlerName();
}
```

###Unit testing
```
$ composer install
$ phpunit
```

###MIT Licence

Copyright (c) 2016 Maciej Schmidt

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
