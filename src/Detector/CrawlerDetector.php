<?php
namespace CrawlerDetector\Detector;

class CrawlerDetector
{
    /**
     * Detect crawler
     * 
     * @param string $user_agent
     * @return bool
     */
    public function isCrawler($user_agent)
    {
        $list = array_merge(require_once __DIR__ . '/Fixtures/CrawlersList.php');

        foreach ($list as $crawler_regex) {
            if (preg_match('/(?:^|[^A-Z0-9\_\-])(?:' . str_replace('/', '\/', $crawler_regex) . ')/i', $user_agent)) {
                return true;
            }
        }

        return false;
    }
}
