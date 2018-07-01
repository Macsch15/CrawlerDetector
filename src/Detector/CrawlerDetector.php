<?php

namespace CrawlerDetector\Detector;

class CrawlerDetector
{
    private static $name = null;

    /**
     * Detect crawler.
     *
     * @param string $user_agent
     *
     * @return bool
     */
    public static function isCrawler($user_agent = null): bool
    {
        if ($user_agent === null) {
            $user_agent = getenv('HTTP_USER_AGENT');
        }

        $list = array_merge(require __DIR__.'/Fixtures/CrawlersList.php');

        foreach ($list as $crawler_name => $crawler_regex) {
            if (preg_match('/(?:^|[^A-Z0-9\_\-])(?:'.str_replace('/', '\/', $crawler_regex).')/i', $user_agent)) {
                self::$name = trim($crawler_name);

                return true;
            }
        }

        return false;
    }

    /**
     * Get crawler name.
     *
     * @return string
     */
    public static function getCrawlerName(): string
    {
        return self::$name;
    }
}
