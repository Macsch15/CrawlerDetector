<?php
namespace CrawlerDetector\Detector;

class CrawlerDetector
{
    /**
     * Crawler name
     * 
     * @var string
     */
    private $name = null;
    
    /**
     * Detect crawler
     * 
     * @param string $user_agent
     * @return bool
     */
    public function isCrawler($user_agent)
    {
        $list = array_merge(require __DIR__ . '/Fixtures/CrawlersList.php');

        foreach ($list as $crawler_regex) {
            if (preg_match('/(?:^|[^A-Z0-9\_\-])(?:' . str_replace('/', '\/', $crawler_regex) . ')/i', $user_agent, $matches)) {
                $this->name = trim($matches[0]);

                return true;
            }
        }

        return false;
    }

    /**
     * Get crawler name
     * 
     * @return string
     */
    public function getCrawlerName()
    {
        return $this->name;
    }
}
