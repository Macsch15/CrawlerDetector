<?php
namespace CrawlerDetector\Tests;

use CrawlerDetector\Detector\CrawlerDetector;

class StackTest extends \PHPUnit_Framework_TestCase
{
    public function testABrowse()
    {
        $this->assertFalse(CrawlerDetector::isCrawler('Mozilla/5.0 (compatible; U; ABrowse 0.6; Syllable) AppleWebKit/420+ (KHTML, like Gecko)'));
    }

    public function testAcooBrowser()
    {
        $this->assertFalse(CrawlerDetector::isCrawler('Mozilla/5.0 (compatible; MSIE 8.0; Windows NT 6.0; Trident/4.0; Acoo Browser 1.98.744; .NET CLR 3.5.30729)'));
    }

    public function testAmericaOnlineBrowser()
    {
        $this->assertFalse(CrawlerDetector::isCrawler('Mozilla/4.0 (compatible; MSIE 7.0; America Online Browser 1.1; Windows NT 5.1; (R1 1.5); .NET CLR 2.0.50727; InfoPath.1)'));
    }

    public function testAmigaVoyager()
    {
        $this->assertFalse(CrawlerDetector::isCrawler('AmigaVoyager/3.2 (AmigaOS/MC680x0)'));
    }

    public function testAOL()
    {
        $this->assertFalse(CrawlerDetector::isCrawler('Mozilla/5.0 (compatible; MSIE 9.0; AOL 9.7; AOLBuild 4343.19; Windows NT 6.1; WOW64; Trident/5.0; FunWebProducts)'));
    }

    public function testArora()
    {
        $this->assertFalse(CrawlerDetector::isCrawler('Mozilla/5.0 (X11; U; UNICOS lcLinux; en-US) Gecko/20140730 (KHTML, like Gecko, Safari/419.3) Arora/0.8.0'));
    }

    public function testAvantBrowser()
    {
        $this->assertFalse(CrawlerDetector::isCrawler('Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; Avant Browser; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; Media Center PC 6.0)'));
    }

    public function testBeonex()
    {
        $this->assertFalse(CrawlerDetector::isCrawler('Mozilla/5.0 (Windows; U; WinNT; en; rv:1.0.2) Gecko/20030311 Beonex/0.8.2-stable'));
    }

    public function testBonEcho()
    {
        $this->assertFalse(CrawlerDetector::isCrawler('Mozilla/5.0 (X11; U; Linux i686; nl; rv:1.8.1b2) Gecko/20060821 BonEcho/2.0b2 (Debian-1.99+2.0b2+dfsg-1)'));
    }

    public function testBrowzar()
    {
        $this->assertFalse(CrawlerDetector::isCrawler('Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 5.1; Trident/4.0; .NET4.0C; .NET4.0E; .NET CLR 2.0.50727; .NET CLR 1.1.4322; .NET CLR 3.0.4506.2152; .NET CLR 3.5.30729; Browzar)'));
    }

    public function testCamino()
    {
        $this->assertFalse(CrawlerDetector::isCrawler('Mozilla/5.0 (Macintosh; U; PPC Mac OS X Mach-O; XH; rv:8.578.498) fr, Gecko/20121021 Camino/8.723+ (Firefox compatible)'));
    }

    public function testCharon()
    {
        $this->assertFalse(CrawlerDetector::isCrawler('Mozilla/4.08 (Charon; Inferno)'));
    }

    public function testCheshire()
    {
        $this->assertFalse(CrawlerDetector::isCrawler('Mozilla/5.0 (Macintosh; U; PPC Mac OS X; en) AppleWebKit/418.8 (KHTML, like Gecko, Safari) Cheshire/1.0.UNOFFICIAL'));
    }

    public function testChimera()
    {
        $this->assertFalse(CrawlerDetector::isCrawler('Mozilla/5.0 (Macintosh; U; PPC Mac OS X; pl-PL; rv:1.0.1) Gecko/20021111 Chimera/0.6'));
    }

    public function testChrome()
    {
        $this->assertFalse(CrawlerDetector::isCrawler('Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/41.0.2228.0 Safari/537.36'));
    }

    public function testChromePlus()
    {
        $this->assertFalse(CrawlerDetector::isCrawler('Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US) AppleWebKit/532.2 (KHTML, like Gecko) ChromePlus/4.0.222.3 Chrome/4.0.222.3 Safari/532.2'));
    }

    public function testClassilla()
    {
        $this->assertFalse(CrawlerDetector::isCrawler('Mozilla/5.0 (Macintosh; U; PPC; en-US; mimic; rv:9.3.0) Gecko/20120117 Firefox/3.6.25 Classilla/CFM'));
    }

    public function testCometBird()
    {
        $this->assertFalse(CrawlerDetector::isCrawler('Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US; rv:1.9.2.3) Gecko/20100409 Firefox/3.6.3 CometBird/3.6.3'));
    }

    public function testComodoDragon()
    {
        $this->assertFalse(CrawlerDetector::isCrawler('Mozilla/5.0 (Windows NT 6.2) AppleWebKit/535.7 (KHTML, like Gecko) Comodo_Dragon/16.1.1.0 Chrome/16.0.912.63 Safari/535.7'));
    }

    public function testCrazyBrowser()
    {
        $this->assertFalse(CrawlerDetector::isCrawler('Mozilla/5.0 (compatible; MSIE 8.0; Windows NT 6.0; SV1; Crazy Browser 9.0.04)'));
    }

    public function testCyberdog()
    {
        $this->assertFalse(CrawlerDetector::isCrawler('Cyberdog/2.0 (Macintosh; PPC)'));
    }

    public function testDeepnetExplorer()
    {
        $this->assertFalse(CrawlerDetector::isCrawler('Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 6.1; WOW64; Trident/4.0; Deepnet Explorer 1.5.3; Smart 2x2; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; Media Center PC 6.0; .NET4.0C; .NET4.0E)'));
    }

    public function testDeskBrowse()
    {
        $this->assertFalse(CrawlerDetector::isCrawler('Mozilla/5.0 (Macintosh; U; PPC Mac OS X; pl-pl) AppleWebKit/312.8 (KHTML, like Gecko, Safari) DeskBrowse/1.0'));
    }

    public function testDillo()
    {
        $this->assertFalse(CrawlerDetector::isCrawler('Dillo/2.0'));
    }

    public function testDooble()
    {
        $this->assertFalse(CrawlerDetector::isCrawler('Dooble/0.07 (de_CH) WebKit'));
    }

    public function testElementBrowser()
    {
        $this->assertFalse(CrawlerDetector::isCrawler('Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US) AppleWebKit/533+ (KHTML, like Gecko) Element Browser 5.0'));
    }

    public function testElinks()
    {
        $this->assertFalse(CrawlerDetector::isCrawler('ELinks/0.9.3 (textmode; Linux 2.6.9-kanotix-8 i686; 127x41)'));
    }

    public function testEnigmaBrowser()
    {
        $this->assertFalse(CrawlerDetector::isCrawler('Enigma Browser'));
    }

    public function testEnigmaFox()
    {
        $this->assertFalse(CrawlerDetector::isCrawler('Mozilla/5.0 (Windows; U; Windows NT 6.0; en-GB; rv:1.9.0.13) Gecko/2009073022 EnigmaFox/3.0.13'));
    }

    public function testEpiphany()
    {
        $this->assertFalse(CrawlerDetector::isCrawler('Mozilla/5.0 (X11; U; Linux x86_64; en-US) AppleWebKit/534.7 (KHTML, like Gecko) Epiphany/2.30.6 Safari/534.7'));
    }

    public function testEscape()
    {
        $this->assertFalse(CrawlerDetector::isCrawler('Mozilla/4.0 (compatible; MSIE 5.23; Macintosh; PPC) Escape 5.1.8'));
    }

    public function testFirebird()
    {
        $this->assertFalse(CrawlerDetector::isCrawler('Mozilla/5.0 (Windows; U; Windows NT 6.1; x64; fr; rv:1.9.2.13) Gecko/20101203 Firebird/3.6.13'));
    }

    public function testFirefox()
    {
        $this->assertFalse(CrawlerDetector::isCrawler('Mozilla/5.0 (Windows NT 6.3; rv:36.0) Gecko/20100101 Firefox/36.0'));
    }

    public function testFirewebNavigator()
    {
        $this->assertFalse(CrawlerDetector::isCrawler('Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:2.0) Treco/20110515 Fireweb Navigator/2.4'));
    }

    public function testFlock()
    {
        $this->assertFalse(CrawlerDetector::isCrawler('Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_6_6; en-US) AppleWebKit/534.7 (KHTML, like Gecko) Flock/3.5.3.4628 Chrome/7.0.517.450 Safari/534.7'));
    }

    public function testFluid()
    {
        $this->assertFalse(CrawlerDetector::isCrawler('Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_6_1; nl-nl) AppleWebKit/532.3+ (KHTML, like Gecko) Fluid/0.9.6 Safari/532.3+'));
    }

    public function testGalaxy()
    {
        $this->assertFalse(CrawlerDetector::isCrawler('Galaxy/1.0 [en] (Mac OS X 10.5.6; U; en)'));
    }

    public function testGaleon()
    {
        $this->assertFalse(CrawlerDetector::isCrawler('Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.0.8) Gecko/20090327 Galeon/2.0.7'));
    }

    public function testGranParadiso()
    {
        $this->assertFalse(CrawlerDetector::isCrawler('Mozilla/5.0(X11;U;Linux(x86_64);en;rv:1.9a8)Gecko/2007100619;GranParadiso/3.1'));
    }

    public function testGreenBrowser()
    {
        $this->assertFalse(CrawlerDetector::isCrawler('Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 6.0; WOW64; Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1) ; SLCC1; .NET CLR 2.0.50727; .NET CLR 3.0.04506; Media Center PC 5.0; .NET CLR 3.5.21022; GreenBrowser)'));
    }

    public function testHana()
    {
        $this->assertFalse(CrawlerDetector::isCrawler('Mozilla/5.0 (Macintosh; U; PPC Mac OS X; en) AppleWebKit/418.9 (KHTML, like Gecko) Hana/1.1'));
    }

    public function testHotJava()
    {
        $this->assertFalse(CrawlerDetector::isCrawler('HotJava/1.1.2 FCS'));
    }

    public function testIBMWebExplorer()
    {
        $this->assertFalse(CrawlerDetector::isCrawler('IBM WebExplorer /v0.94'));
    }

    public function testIBrowse()
    {
        $this->assertFalse(CrawlerDetector::isCrawler('Mozilla/5.0 (compatible; IBrowse 3.0; AmigaOS4.0)'));
    }

    public function testiCab()
    {
        $this->assertFalse(CrawlerDetector::isCrawler('Mozilla/5.0 (Macintosh; PPC Mac OS X 10_5_8) AppleWebKit/537.3+ (KHTML, like Gecko) iCab/5.0 Safari/533.16'));
    }

    public function testIceape()
    {
        $this->assertFalse(CrawlerDetector::isCrawler('Mozilla/5.0 (X11; U; Linux x86_64; en-US; rv:1.9.1.13) Gecko/20100916 Iceape/2.0.8'));
    }

    public function testIceCat()
    {
        $this->assertFalse(CrawlerDetector::isCrawler('Mozilla/5.0 (X11; Linux x86_64; rv:17.0) Gecko/20121201 icecat/17.0.1'));
    }

    public function testIceweasel()
    {
        $this->assertFalse(CrawlerDetector::isCrawler('Mozilla/5.0 (X11; Linux x86_64; rv:17.0) Gecko/20121202 Firefox/17.0 Iceweasel/17.0.1'));
    }

    public function testiNetBrowser()
    {
        $this->assertFalse(CrawlerDetector::isCrawler('Mozilla/5.0 (Future Star Technologies Corp.; Star-Blade OS; x86_64; U; en-US) iNet Browser 4.7'));
    }

    public function testInternetExplorer()
    {
        $this->assertFalse(CrawlerDetector::isCrawler('Mozilla/5.0 (Windows NT 6.1; WOW64; Trident/7.0; AS; rv:11.0) like Gecko'));
    }

    public function testiRider()
    {
        $this->assertFalse(CrawlerDetector::isCrawler('Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 6.1; Trident/4.0; iRider 2.60.0008; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; Media Center PC 6.0)'));
    }

    public function testIron()
    {
        $this->assertFalse(CrawlerDetector::isCrawler('Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.4 (KHTML, like Gecko) Chrome/22.0.1250.0 Iron/22.0.2150.0 Safari/537.4'));
    }

    public function testKMeleon()
    {
        $this->assertFalse(CrawlerDetector::isCrawler('Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.9.2.21pre) Gecko K-Meleon/1.7.0'));
    }

    public function testKNinja()
    {
        $this->assertFalse(CrawlerDetector::isCrawler('Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.4pre) Gecko/20070404 K-Ninja/2.1.3'));
    }

    public function testKapiko()
    {
        $this->assertFalse(CrawlerDetector::isCrawler('Mozilla/5.0 (Windows; U; Windows NT 5.1; zh-CN; rv:1.9.0.1) Gecko/20080722 Firefox/3.0.1 Kapiko/3.0'));
    }

    public function testKazehakase()
    {
        $this->assertFalse(CrawlerDetector::isCrawler('Mozilla/5.0 (X11; U; Linux x86_64; en-US; rv:1.9.0.7) Gecko Kazehakase/0.5.6'));
    }

    public function testKKman()
    {
        $this->assertFalse(CrawlerDetector::isCrawler('Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; WOW64; Trident/4.0; KKMAN3.2; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; Media Center PC 6.0; InfoPath.2; .NET4.0C)'));
    }

    public function testKMLite()
    {
        $this->assertFalse(CrawlerDetector::isCrawler('Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.19) Gecko/20081217 KMLite/1.1.2'));
    }

    public function testKonqueror()
    {
        $this->assertFalse(CrawlerDetector::isCrawler('Mozilla/5.0 (X11) KHTML/4.9.1 (like Gecko) Konqueror/4.9'));
    }

    public function testLeechCraft()
    {
        $this->assertFalse(CrawlerDetector::isCrawler('Mozilla/5.0 (X11; U; Linux x86_64; ru-RU) AppleWebKit/533.3 (KHTML, like Gecko) Leechcraft/0.4.55-13-g2230d9f Safari/533.3'));
    }

    public function testLinks()
    {
        $this->assertFalse(CrawlerDetector::isCrawler('Links (6.9; Unix 6.9-astral sparc; 80x25)'));
    }

    public function testLobo()
    {
        $this->assertFalse(CrawlerDetector::isCrawler('Mozilla/4.0 (compatible; MSIE 6.0; Windows XP 5.1) Lobo/0.98.4'));
    }

    public function testlolifox()
    {
        $this->assertFalse(CrawlerDetector::isCrawler('Mozilla/5.0 (Windows; U; Windows NT 6.1; en-GB; rv:1.9.1.17) Gecko/20110123 Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.2) Gecko/20070225 lolifox/0.32'));
    }

    public function testLorentz()
    {
        $this->assertFalse(CrawlerDetector::isCrawler('Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US; rv:1.9.2.3pre) Gecko/20100403 Lorentz/3.6.3plugin2pre (.NET CLR 4.0.20506)'));
    }

    public function testLunascape()
    {
        $this->assertFalse(CrawlerDetector::isCrawler('Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.1; WOW64; Trident/5.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; Media Center PC 6.0; Lunascape 6.7.1.25446)'));
    }

    public function testLynx()
    {
        $this->assertFalse(CrawlerDetector::isCrawler('Lynx/2.8.8dev.3 libwww-FM/2.14 SSL-MM/1.4.1'));
    }

    public function testMadfox()
    {
        $this->assertFalse(CrawlerDetector::isCrawler('Mozilla/5.0 (Macintosh; U; PPC Mac OS X Mach-O; en; rv:1.7.12) Gecko/20050928 Firefox/1.0.7 Madfox/3.0'));
    }

    public function testMaxthon()
    {
        $this->assertFalse(CrawlerDetector::isCrawler('Mozilla/5.0 (Windows; U; Windows NT 6.0; en-US) AppleWebKit/533.1 (KHTML, like Gecko) Maxthon/3.0.8.2 Safari/533.1'));
    }

    public function testMidori()
    {
        $this->assertFalse(CrawlerDetector::isCrawler('Mozilla/5.0 (X11; U; Linux i686; fr-fr) AppleWebKit/525.1+ (KHTML, like Gecko, Safari/525.1+) midori/1.19'));
    }

    public function testMinefield()
    {
        $this->assertFalse(CrawlerDetector::isCrawler('Mozilla/5.0 (Windows NT 6.1; WOW64; rv:2.0b4pre) Gecko/20100815 Minefield/4.0b4pre'));
    }

    public function testMozilla()
    {
        $this->assertFalse(CrawlerDetector::isCrawler('Mozilla/5.0 (Windows; U; Windows NT 6.1; rv:2.2) Gecko/20110201'));
    }

    public function testNamoroka()
    {
        $this->assertFalse(CrawlerDetector::isCrawler('Mozilla/5.0 (X11; U; Linux x86_64; en-US; rv:1.9.2a2pre) Gecko/20090908 Ubuntu/9.04 (jaunty) Namoroka/3.6a2pre GTB5 (.NET CLR 3.5.30729)'));
    }

    public function testNCSAMosaic()
    {
        $this->assertFalse(CrawlerDetector::isCrawler('NCSA Mosaic/3.0 (Windows 95)'));
    }

    public function testNetNewsWire()
    {
        $this->assertFalse(CrawlerDetector::isCrawler('Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_6_3; de-de) AppleWebKit/531.22.7 (KHTML, like Gecko) NetNewsWire/3.2.7'));
    }

    public function testNetPositive()
    {
        $this->assertFalse(CrawlerDetector::isCrawler('Mozilla/3.0 (compatible; NetPositive/2.2.2; BeOS)'));
    }

    public function testNetscape()
    {
        $this->assertFalse(CrawlerDetector::isCrawler('Mozilla/5.0 (Windows; U; Win 9x 4.90; SG; rv:1.9.2.4) Gecko/20101104 Netscape/9.1.0285'));
    }

    public function testNetSurf()
    {
        $this->assertFalse(CrawlerDetector::isCrawler('NetSurf/2.0 (RISC OS; armv5l)'));
    }

    public function testOmniWeb()
    {
        $this->assertFalse(CrawlerDetector::isCrawler('Mozilla/5.0 (Macintosh; U; Intel Mac OS X; en-US) AppleWebKit/528.16 (KHTML, like Gecko, Safari/528.16) OmniWeb/v622.8.0.112941'));
    }

    public function testOpera()
    {
        $this->assertFalse(CrawlerDetector::isCrawler('Opera/9.80 (X11; Linux i686; Ubuntu/14.10) Presto/2.12.388 Version/12.16'));
    }

    public function testOrca()
    {
        $this->assertFalse(CrawlerDetector::isCrawler('Mozilla/5.0 (Windows; U; Windows NT 6.1; x64; fr; rv:1.9.1.1) Gecko/20090722 Firefox/3.5.1 Orca/1.2 build 2'));
    }

    public function testOregano()
    {
        $this->assertFalse(CrawlerDetector::isCrawler('Mozilla/1.10 [en] (Compatible; RISC OS 3.70; Oregano 1.10)'));
    }

    public function testosbbrowser()
    {
        $this->assertFalse(CrawlerDetector::isCrawler('Mozilla/5.0 (X11; U; Linux i686; en-us) AppleWebKit/146.1 (KHTML, like Gecko) osb-browser/0.5'));
    }

    public function testPalemoon()
    {
        $this->assertFalse(CrawlerDetector::isCrawler('Mozilla/1.10 [en] (Compatible; RISC OS 3.70; Oregano 1.10)'));
    }

    public function testPhoenix()
    {
        $this->assertFalse(CrawlerDetector::isCrawler('Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.3a) Gecko/20021207 Phoenix/0.5'));
    }

    public function testPogo()
    {
        $this->assertFalse(CrawlerDetector::isCrawler('Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.13) Gecko/20080414 Firefox/2.0.0.13 Pogo/2.0.0.13.6866'));
    }

    public function testPrism()
    {
        $this->assertFalse(CrawlerDetector::isCrawler('Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10.6; en-US; rv:1.9.2.3) Gecko/20100402 Prism/1.0b4'));
    }

    public function testQtWebInternetBrowser()
    {
        $this->assertFalse(CrawlerDetector::isCrawler('Mozilla/5.0 (Windows; U; Windows NT 5.1; pt-BR) AppleWebKit/533.3 (KHTML, like Gecko) QtWeb Internet Browser/3.7 http://www.QtWeb.net'));
    }

    public function testRekonq()
    {
        $this->assertFalse(CrawlerDetector::isCrawler('Mozilla/5.0 (X11; U; Linux x86_64; cs-CZ) AppleWebKit/533.3 (KHTML, like Gecko) rekonq Safari/533.3'));
    }

    public function testretawq()
    {
        $this->assertFalse(CrawlerDetector::isCrawler('retawq/0.2.6c [en] (text)'));
    }

    public function testRockMelt()
    {
        $this->assertFalse(CrawlerDetector::isCrawler('Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/534.24 (KHTML, like Gecko) RockMelt/0.9.58.494 Chrome/11.0.696.71 Safari/534.24'));
    }

    public function testSafari()
    {
        $this->assertFalse(CrawlerDetector::isCrawler('Mozilla/5.0 (Macintosh; Intel Mac OS X 10_9_3) AppleWebKit/537.75.14 (KHTML, like Gecko) Version/7.0.3 Safari/7046A194A'));
    }

    public function testSeaMonkey()
    {
        $this->assertFalse(CrawlerDetector::isCrawler('Mozilla/5.0 (Windows NT 5.2; RW; rv:7.0a1) Gecko/20091211 SeaMonkey/9.23a1pre'));
    }

    public function testShiira()
    {
        $this->assertFalse(CrawlerDetector::isCrawler('Mozilla/5.0 (Macintosh; U; PPC Mac OS X; ja-jp) AppleWebKit/419 (KHTML, like Gecko) Shiira/1.2.3 Safari/125'));
    }

    public function testShiretoko()
    {
        $this->assertFalse(CrawlerDetector::isCrawler('Mozilla/5.0 (X11; U; Linux x86_64; en-US; rv:1.9.1b5pre) Gecko/20090424 Shiretoko/3.5b5pre'));
    }

    public function testSleipnir()
    {
        $this->assertFalse(CrawlerDetector::isCrawler('Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.0; Trident/4.0; SLCC1; .NET CLR 2.0.50727; Media Center PC 5.0; .NET CLR 3.5.30729; .NET CLR 3.0.30618; .NET4.0C; .NET4.0E; Sleipnir/2.9.9)'));
    }

    public function testStainless()
    {
        $this->assertFalse(CrawlerDetector::isCrawler('Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_5_6; en-us) AppleWebKit/528.16 (KHTML, like Gecko) Stainless/0.5.3 Safari/525.20.1'));
    }

    public function testSunrise()
    {
        $this->assertFalse(CrawlerDetector::isCrawler('Mozilla/6.0 (X11; U; Linux x86_64; en-US; rv:2.9.0.3) Gecko/2009022510 FreeBSD/ Sunrise/4.0.1/like Safari'));
    }

    public function testsurf()
    {
        $this->assertFalse(CrawlerDetector::isCrawler('Surf/0.4.1 (X11; U; Unix; en-US) AppleWebKit/531.2+ Compatible (Safari; MSIE 9.0)'));
    }

    public function testSylera()
    {
        $this->assertFalse(CrawlerDetector::isCrawler('Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US; rv:1.8.1.9) Gecko/20071110 Sylera/3.0.20 SeaMonkey/1.1.6'));
    }

    public function testTencentTraveler()
    {
        $this->assertFalse(CrawlerDetector::isCrawler('Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.0; Trident/4.0; TencentTraveler 4.0; Trident/4.0; SLCC1; Media Center PC 5.0; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30618)'));
    }

    public function testTenFourFox()
    {
        $this->assertFalse(CrawlerDetector::isCrawler('Mozilla/5.0 (Macintosh; PPC Mac OS X 10.5; rv:10.0.2) Gecko/20120216 Firefox/10.0.2 TenFourFox/7450'));
    }

    public function testtheWorldBrowser()
    {
        $this->assertFalse(CrawlerDetector::isCrawler('Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.0; Trident/5.0; TheWorld)'));
    }

    public function testuzbl()
    {
        $this->assertFalse(CrawlerDetector::isCrawler('Uzbl (Webkit 1.3) (Linux i686 [i686])'));
    }

    public function testVimprobable()
    {
        $this->assertFalse(CrawlerDetector::isCrawler('Vimprobable/0.9.20.5'));
    }

    public function testVonkeror()
    {
        $this->assertFalse(CrawlerDetector::isCrawler('Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.9.1pre) Gecko/20090629 Vonkeror/1.0'));
    }

    public function testw3m()
    {
        $this->assertFalse(CrawlerDetector::isCrawler('w3m/0.52'));
    }

    public function testWeltweitimnetzBrowser()
    {
        $this->assertFalse(CrawlerDetector::isCrawler('Mozilla/5.0 (Windows; U; Windows NT 5.1; pt-BR) AppleWebKit/534.12 (KHTML, like Gecko) WeltweitimnetzBrowser/0.25 Safari/534.12'));
    }

    public function testWorldWideWeb()
    {
        $this->assertFalse(CrawlerDetector::isCrawler('WorldWideweb (NEXT)'));
    }

    public function testWyzo()
    {
        $this->assertFalse(CrawlerDetector::isCrawler('Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US; rv:1.9.1.6) Gecko/20100121 Firefox/3.5.6 Wyzo/3.5.6.1'));
    }

    public function testAndroidWebkitBrowser()
    {
        $this->assertFalse(CrawlerDetector::isCrawler('Mozilla/5.0 (Linux; U; Android 4.0.3; ko-kr; LG-L160L Build/IML74K) AppleWebkit/534.30 (KHTML, like Gecko) Version/4.0 Mobile Safari/534.30'));
    }

    public function testBlackBerry()
    {
        $this->assertFalse(CrawlerDetector::isCrawler('Mozilla/5.0 (BlackBerry; U; BlackBerry 9900; en) AppleWebKit/534.11+ (KHTML, like Gecko) Version/7.1.0.346 Mobile Safari/534.11+'));
    }

    public function testBlazer()
    {
        $this->assertFalse(CrawlerDetector::isCrawler('Mozilla/4.0 (compatible; MSIE 6.0; Windows 95; PalmSource; Blazer 3.0) 16; 160x160'));
    }

    public function testBolt()
    {
        $this->assertFalse(CrawlerDetector::isCrawler('Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; BOLT/2.340) AppleWebKit/530+ (KHTML, like Gecko) Version/4.0 Safari/530.17 UNTRUSTED/1.0 3gpp-gba'));
    }

    public function testDoris()
    {
        $this->assertFalse(CrawlerDetector::isCrawler('Doris/1.15 [en] (Symbian)'));
    }

    public function testDorothy()
    {
        $this->assertFalse(CrawlerDetector::isCrawler('Mozilla/5.0 (Windows; U; Windows CE; Mobile; like iPhone; ko-kr) AppleWebKit/533.3 (KHTML, like Gecko) Version/4.0 Mobile Safari/533.3 Dorothy'));
    }

    public function testFennec()
    {
        $this->assertFalse(CrawlerDetector::isCrawler('Mozilla/5.0 (Android; Linux armv7l; rv:9.0) Gecko/20111216 Firefox/9.0 Fennec/9.0'));
    }

    public function testIEMobile()
    {
        $this->assertFalse(CrawlerDetector::isCrawler('Mozilla/5.0 (compatible; MSIE 9.0; Windows Phone OS 7.5; Trident/5.0; IEMobile/9.0)'));
    }

    public function testIris()
    {
        $this->assertFalse(CrawlerDetector::isCrawler('Mozilla/5.0 (Windows NT; U; en) AppleWebKit/525.18.1 (KHTML, like Gecko) Version/3.1.1 Iris/1.1.7 Safari/525.20'));
    }

    public function testMaemoBrowser()
    {
        $this->assertFalse(CrawlerDetector::isCrawler('Mozilla/5.0 (X11; U; Linux armv7l; ru-RU; rv:1.9.2.3pre) Gecko/20100723 Firefox/3.5 Maemo Browser 1.7.4.8 RX-51 N900'));
    }

    public function testMIB()
    {
        $this->assertFalse(CrawlerDetector::isCrawler('MOT-L7/NA.ACR_RB MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.1'));
    }

    public function testNetFront()
    {
        $this->assertFalse(CrawlerDetector::isCrawler('SAMSUNG-C5212/C5212XDIK1 NetFront/3.4 Profile/MIDP-2.0 Configuration/CLDC-1.1'));
    }

    public function testOperaMini()
    {
        $this->assertFalse(CrawlerDetector::isCrawler('Opera/9.80 (J2ME/MIDP; Opera Mini/9.80 (S60; SymbOS; Opera Mobi/23.348; U; en) Presto/2.5.25 Version/10.54'));
    }

    public function testSEMCBrowser()
    {
        $this->assertFalse(CrawlerDetector::isCrawler('SonyEricssonW800i/R1BD001/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1'));
    }

    public function testSkyfire()
    {
        $this->assertFalse(CrawlerDetector::isCrawler('Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_5_7; en-us) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Safari/530.17 Skyfire/2.0'));
    }

    public function testTeaShark()
    {
        $this->assertFalse(CrawlerDetector::isCrawler('Mozilla/5.0 (Macintosh; U; Intel Mac OS X; en) AppleWebKit/418.9.1 (KHTML, like Gecko) Safari/419.3 TeaShark/0.8'));
    }

    public function testuZardWeb()
    {
        $this->assertFalse(CrawlerDetector::isCrawler('Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 5.2; WOW64; Trident/4.0; uZardWeb/1.0; Server_USA)'));
    }

    public function test360Spider()
    {
        $this->assertTrue(CrawlerDetector::isCrawler('360Spider'));
        $this->assertTrue(CrawlerDetector::isCrawler('360Spider-Image'));
        $this->assertTrue(CrawlerDetector::isCrawler('360Spider-Video'));

        $this->assertSame('360Spider', CrawlerDetector::getCrawlerName());
    }

    public function testAboundexbot()
    {
        $this->assertTrue(CrawlerDetector::isCrawler('Aboundex'));

        $this->assertSame('Aboundexbot', CrawlerDetector::getCrawlerName());
    }

    public function testAcoon()
    {
        $this->assertTrue(CrawlerDetector::isCrawler('AcoonBot'));

        $this->assertSame('Acoon', CrawlerDetector::getCrawlerName());
    }

    public function testAddThiscom()
    {
        $this->assertTrue(CrawlerDetector::isCrawler('AddThis.com'));

        $this->assertSame('AddThis.com', CrawlerDetector::getCrawlerName());
    }

    public function testaHrefsBot()
    {
        $this->assertTrue(CrawlerDetector::isCrawler('AhrefsBot'));

        $this->assertSame('aHrefs Bot', CrawlerDetector::getCrawlerName());
    }

    public function testAlexaCrawler()
    {
        $this->assertTrue(CrawlerDetector::isCrawler('ia_archiver'));
        $this->assertTrue(CrawlerDetector::isCrawler('alexabot'));
        $this->assertTrue(CrawlerDetector::isCrawler('verifybot'));

        $this->assertSame('Alexa Crawler', CrawlerDetector::getCrawlerName());
    }

    public function testAmorankSpider()
    {
        $this->assertTrue(CrawlerDetector::isCrawler('AmorankSpider'));

        $this->assertSame('Amorank Spider', CrawlerDetector::getCrawlerName());
    }

    public function testAnalyticsSEOCrawler()
    {
        $this->assertTrue(CrawlerDetector::isCrawler('Curious George'));

        $this->assertSame('Analytics SEO Crawler', CrawlerDetector::getCrawlerName());
    }

    public function testarchiveorgbot()
    {
        $this->assertTrue(CrawlerDetector::isCrawler('archive.org_bot'));
        $this->assertTrue(CrawlerDetector::isCrawler('special_archiver'));

        $this->assertSame('archive.org bot', CrawlerDetector::getCrawlerName());
    }

    public function testAskJeeves()
    {
        $this->assertTrue(CrawlerDetector::isCrawler('Ask Jeeves/Teoma'));

        $this->assertSame('Ask Jeeves', CrawlerDetector::getCrawlerName());
    }

    public function testBacklinkCeckde()
    {
        $this->assertTrue(CrawlerDetector::isCrawler('Backlink-Ceck.de'));

        $this->assertSame('Backlink-Ceck.de', CrawlerDetector::getCrawlerName());
    }

    public function testBacklinkCrawler()
    {
        $this->assertTrue(CrawlerDetector::isCrawler('BacklinkCrawler'));

        $this->assertSame('BacklinkCrawler', CrawlerDetector::getCrawlerName());
    }

    public function testBaiduSpider()
    {
        $this->assertTrue(CrawlerDetector::isCrawler('baiduspider'));
        $this->assertTrue(CrawlerDetector::isCrawler('baiduspider-image'));
        $this->assertTrue(CrawlerDetector::isCrawler('baidu Transcoder'));
        $this->assertTrue(CrawlerDetector::isCrawler('baidu.123456spider'));

        $this->assertSame('Baidu Spider', CrawlerDetector::getCrawlerName());
    }

    public function testBingBot()
    {
        $this->assertTrue(CrawlerDetector::isCrawler('MSNBot'));
        $this->assertTrue(CrawlerDetector::isCrawler('msrbot'));
        $this->assertTrue(CrawlerDetector::isCrawler('bingbot'));
        $this->assertTrue(CrawlerDetector::isCrawler('BingPreview'));
        $this->assertTrue(CrawlerDetector::isCrawler('msnbot-UDiscovery'));
        $this->assertTrue(CrawlerDetector::isCrawler('msnbot-NewsBlogs'));
        $this->assertTrue(CrawlerDetector::isCrawler('adidxbot'));

        $this->assertSame('BingBot', CrawlerDetector::getCrawlerName());
    }

    public function testBlekkobot()
    {
        $this->assertTrue(CrawlerDetector::isCrawler('Blekkobot'));

        $this->assertSame('Blekkobot', CrawlerDetector::getCrawlerName());
    }

    public function testBLEXBotCrawler()
    {
        $this->assertTrue(CrawlerDetector::isCrawler('BLEXBot'));
        $this->assertTrue(CrawlerDetector::isCrawler('BLEXBotTest'));

        $this->assertSame('BLEXBot Crawler', CrawlerDetector::getCrawlerName());
    }

    public function testBloglovin()
    {
        $this->assertTrue(CrawlerDetector::isCrawler('Bloglovin'));

        $this->assertSame('Bloglovin', CrawlerDetector::getCrawlerName());
    }

    public function testBountiiBot()
    {
        $this->assertTrue(CrawlerDetector::isCrawler('BountiiBot'));

        $this->assertSame('Bountii Bot', CrawlerDetector::getCrawlerName());
    }

    public function testBrowsershots()
    {
        $this->assertTrue(CrawlerDetector::isCrawler('Browsershots'));

        $this->assertSame('Browsershots', CrawlerDetector::getCrawlerName());
    }

    public function testButterflyRobot()
    {
        $this->assertTrue(CrawlerDetector::isCrawler('_Butterfly'));

        $this->assertSame('Butterfly Robot', CrawlerDetector::getCrawlerName());
    }

    public function testCareerBot()
    {
        $this->assertTrue(CrawlerDetector::isCrawler('CareerBot'));

        $this->assertSame('CareerBot', CrawlerDetector::getCrawlerName());
    }

    public function testccBotcrawler()
    {
        $this->assertTrue(CrawlerDetector::isCrawler('CCBot'));

        $this->assertSame('ccBot crawler', CrawlerDetector::getCrawlerName());
    }

    public function testCliqzbot()
    {
        $this->assertTrue(CrawlerDetector::isCrawler('Cliqzbot'));

        $this->assertSame('Cliqzbot', CrawlerDetector::getCrawlerName());
    }

    public function testCloudFlareAlwaysOnline()
    {
        $this->assertTrue(CrawlerDetector::isCrawler('CloudFlare-AlwaysOnline'));

        $this->assertSame('CloudFlare Always Online', CrawlerDetector::getCrawlerName());
    }

    public function testCommaFeed()
    {
        $this->assertTrue(CrawlerDetector::isCrawler('CommaFeed'));

        $this->assertSame('CommaFeed', CrawlerDetector::getCrawlerName());
    }

    public function testDazoobot()
    {
        $this->assertTrue(CrawlerDetector::isCrawler('Dazoobot'));

        $this->assertSame('Dazoobot', CrawlerDetector::getCrawlerName());
    }

    public function testDiscobot()
    {
        $this->assertTrue(CrawlerDetector::isCrawler('Discobot'));
        $this->assertTrue(CrawlerDetector::isCrawler('Discobot-news'));

        $this->assertSame('Discobot', CrawlerDetector::getCrawlerName());
    }

    public function testDotBot()
    {
        $this->assertTrue(CrawlerDetector::isCrawler('DotBot'));

        $this->assertSame('DotBot', CrawlerDetector::getCrawlerName());
    }

    public function testEasouSpider()
    {
        $this->assertTrue(CrawlerDetector::isCrawler('EasouSpider'));

        $this->assertSame('Easou Spider', CrawlerDetector::getCrawlerName());
    }

    public function testMailExractor()
    {
        $this->assertTrue(CrawlerDetector::isCrawler('EMail Exractor'));

        $this->assertSame('EMail Exractor', CrawlerDetector::getCrawlerName());
    }

    public function testExaBot()
    {
        $this->assertTrue(CrawlerDetector::isCrawler('Exabot'));
        $this->assertTrue(CrawlerDetector::isCrawler('Exabot-Thumbnails'));
        $this->assertTrue(CrawlerDetector::isCrawler('Exabot-Images'));
        $this->assertTrue(CrawlerDetector::isCrawler('ExaleadCloudview'));

        $this->assertSame('ExaBot', CrawlerDetector::getCrawlerName());
    }

    public function testExactSeekCrawler()
    {
        $this->assertTrue(CrawlerDetector::isCrawler('ExactSeek Crawler'));

        $this->assertSame('ExactSeek Crawler', CrawlerDetector::getCrawlerName());
    }

    public function testEzooms()
    {
        $this->assertTrue(CrawlerDetector::isCrawler('Ezooms'));

        $this->assertSame('Ezooms', CrawlerDetector::getCrawlerName());
    }

    public function testFacebookExternalHit()
    {
        $this->assertTrue(CrawlerDetector::isCrawler('facebookexternalhit'));
        $this->assertTrue(CrawlerDetector::isCrawler('facebookplatform'));

        $this->assertSame('Facebook External Hit', CrawlerDetector::getCrawlerName());
    }

    public function testFeedbin()
    {
        $this->assertTrue(CrawlerDetector::isCrawler('Feedbin'));

        $this->assertSame('Feedbin', CrawlerDetector::getCrawlerName());
    }

    public function testFeedBurner()
    {
        $this->assertTrue(CrawlerDetector::isCrawler('FeedBurner'));

        $this->assertSame('FeedBurner', CrawlerDetector::getCrawlerName());
    }

    public function testFeedly()
    {
        $this->assertTrue(CrawlerDetector::isCrawler('Feedly'));
        $this->assertTrue(CrawlerDetector::isCrawler('MetaFeedly'));
        $this->assertTrue(CrawlerDetector::isCrawler('MetaFeedlyBot'));
        $this->assertTrue(CrawlerDetector::isCrawler('MetaFeedlyApp'));
        $this->assertTrue(CrawlerDetector::isCrawler('FeedlyBot'));
        $this->assertTrue(CrawlerDetector::isCrawler('FeedlyApp'));

        $this->assertSame('Feedly', CrawlerDetector::getCrawlerName());
    }

    public function testFeedspot()
    {
        $this->assertTrue(CrawlerDetector::isCrawler('Feedspot'));

        $this->assertSame('Feedspot', CrawlerDetector::getCrawlerName());
    }

    public function testFever()
    {
        $this->assertTrue(CrawlerDetector::isCrawler('Fever'));

        $this->assertSame('Fever', CrawlerDetector::getCrawlerName());
    }

    public function testGenieoWebfilter()
    {
        $this->assertTrue(CrawlerDetector::isCrawler('Genieo'));

        $this->assertSame('Genieo Web filter', CrawlerDetector::getCrawlerName());
    }

    public function testGoo()
    {
        $this->assertTrue(CrawlerDetector::isCrawler('ichiro/mobile goo'));

        $this->assertSame('Goo', CrawlerDetector::getCrawlerName());
    }

    public function testGooglePageSpeedInsights()
    {
        $this->assertTrue(CrawlerDetector::isCrawler('Google Page Speed Insights'));

        $this->assertSame('Google PageSpeed Insights', CrawlerDetector::getCrawlerName());
    }

    public function testGmailImageProxy()
    {
        $this->assertTrue(CrawlerDetector::isCrawler('via ggpht.com GoogleImageProxy'));

        $this->assertSame('Gmail Image Proxy', CrawlerDetector::getCrawlerName());
    }

    public function testGooglebot()
    {
        $this->assertTrue(CrawlerDetector::isCrawler('Googlebot'));
        $this->assertTrue(CrawlerDetector::isCrawler('Googlebot-Mobile'));
        $this->assertTrue(CrawlerDetector::isCrawler('Googlebot-Image'));
        $this->assertTrue(CrawlerDetector::isCrawler('Googlebot-Video'));
        $this->assertTrue(CrawlerDetector::isCrawler('Googlebot-News'));
        $this->assertTrue(CrawlerDetector::isCrawler('Feedfetcher-Google'));
        $this->assertTrue(CrawlerDetector::isCrawler('Google-Test'));
        $this->assertTrue(CrawlerDetector::isCrawler('Google-Site-Verification'));
        $this->assertTrue(CrawlerDetector::isCrawler('Google Web Preview'));
        $this->assertTrue(CrawlerDetector::isCrawler('AdsBot-Google'));
        $this->assertTrue(CrawlerDetector::isCrawler('AdsBot-Google-Mobile'));
        $this->assertTrue(CrawlerDetector::isCrawler('Mediapartners-Google'));
        $this->assertTrue(CrawlerDetector::isCrawler('GoogleProducer'));

        $this->assertSame('Googlebot', CrawlerDetector::getCrawlerName());
    }

    public function testHeritrix()
    {
        $this->assertTrue(CrawlerDetector::isCrawler('heritrix'));

        $this->assertSame('Heritrix', CrawlerDetector::getCrawlerName());
    }

    public function testHTTPMon()
    {
        $this->assertTrue(CrawlerDetector::isCrawler('HTTPMon'));

        $this->assertSame('HTTPMon', CrawlerDetector::getCrawlerName());
    }

    public function testIISSiteAnalysis()
    {
        $this->assertTrue(CrawlerDetector::isCrawler('iisbot'));

        $this->assertSame('IIS Site Analysis', CrawlerDetector::getCrawlerName());
    }

    public function testKouio()
    {
        $this->assertTrue(CrawlerDetector::isCrawler('kouio'));

        $this->assertSame('Kouio', CrawlerDetector::getCrawlerName());
    }

    public function testLinkdexBot()
    {
        $this->assertTrue(CrawlerDetector::isCrawler('linkdexbot'));
        $this->assertTrue(CrawlerDetector::isCrawler('linkdexbot-mobile'));
        $this->assertTrue(CrawlerDetector::isCrawler('linkdex.com'));

        $this->assertSame('Linkdex Bot', CrawlerDetector::getCrawlerName());
    }

    public function testLinkedInBot()
    {
        $this->assertTrue(CrawlerDetector::isCrawler('LinkedInBot'));

        $this->assertSame('LinkedIn Bot', CrawlerDetector::getCrawlerName());
    }

    public function testMailRuBot()
    {
        $this->assertTrue(CrawlerDetector::isCrawler('Mail.RU'));
        $this->assertTrue(CrawlerDetector::isCrawler('Mail.RU_Bot'));

        $this->assertSame('Mail.Ru Bot', CrawlerDetector::getCrawlerName());
    }

    public function testMagpieCrawler()
    {
        $this->assertTrue(CrawlerDetector::isCrawler('magpie-crawler'));

        $this->assertSame('Magpie-Crawler', CrawlerDetector::getCrawlerName());
    }

    public function testMagpieRSS()
    {
        $this->assertTrue(CrawlerDetector::isCrawler('MagpieRSS'));

        $this->assertSame('MagpieRSS', CrawlerDetector::getCrawlerName());
    }

    public function testMeanpathBot()
    {
        $this->assertTrue(CrawlerDetector::isCrawler('meanpathbot'));

        $this->assertSame('Meanpath Bot', CrawlerDetector::getCrawlerName());
    }

    public function testMixrankBot()
    {
        $this->assertTrue(CrawlerDetector::isCrawler('MixrankBot'));

        $this->assertSame('Mixrank Bot', CrawlerDetector::getCrawlerName());
    }

    public function testMJ12Bot()
    {
        $this->assertTrue(CrawlerDetector::isCrawler('MJ12bot'));

        $this->assertSame('MJ12 Bot', CrawlerDetector::getCrawlerName());
    }

    public function testMojeekBot()
    {
        $this->assertTrue(CrawlerDetector::isCrawler('MojeekBot'));

        $this->assertSame('MojeekBot', CrawlerDetector::getCrawlerName());
    }

    public function testNalezenCzBot()
    {
        $this->assertTrue(CrawlerDetector::isCrawler('NalezenCzBot'));

        $this->assertSame('NalezenCzBot', CrawlerDetector::getCrawlerName());
    }

    public function testNetcraftSurveyBot()
    {
        $this->assertTrue(CrawlerDetector::isCrawler('Netcraft Web Server Survey'));

        $this->assertSame('Netcraft Survey Bot', CrawlerDetector::getCrawlerName());
    }

    public function testNetvibes()
    {
        $this->assertTrue(CrawlerDetector::isCrawler('Netvibes'));

        $this->assertSame('Netvibes', CrawlerDetector::getCrawlerName());
    }

    public function testNewsBlur()
    {
        $this->assertTrue(CrawlerDetector::isCrawler('NewsBlur Fetcher'));
        $this->assertTrue(CrawlerDetector::isCrawler('NewsBlur Finder'));

        $this->assertSame('NewsBlur', CrawlerDetector::getCrawlerName());
    }

    public function testNewsGator()
    {
        $this->assertTrue(CrawlerDetector::isCrawler('NewsGatorOnline'));

        $this->assertSame('NewsGator', CrawlerDetector::getCrawlerName());
    }

    public function testNLCrawler()
    {
        $this->assertTrue(CrawlerDetector::isCrawler('nlcrawler'));

        $this->assertSame('NLCrawler', CrawlerDetector::getCrawlerName());
    }

    public function testOmgilibot()
    {
        $this->assertTrue(CrawlerDetector::isCrawler('omgilibot'));

        $this->assertSame('Omgili bot', CrawlerDetector::getCrawlerName());
    }

    public function testOpenindexSpider()
    {
        $this->assertTrue(CrawlerDetector::isCrawler('OpenindexSpider'));

        $this->assertSame('Openindex Spider', CrawlerDetector::getCrawlerName());
    }

    public function testOpenLinkProfiler()
    {
        $this->assertTrue(CrawlerDetector::isCrawler('spbot'));

        $this->assertSame('OpenLinkProfiler', CrawlerDetector::getCrawlerName());
    }

    public function testOpenWebSpider()
    {
        $this->assertTrue(CrawlerDetector::isCrawler('OpenWebSpider'));

        $this->assertSame('OpenWebSpider', CrawlerDetector::getCrawlerName());
    }

    public function testPaperLiBot()
    {
        $this->assertTrue(CrawlerDetector::isCrawler('PaperLiBot'));

        $this->assertSame('PaperLiBot', CrawlerDetector::getCrawlerName());
    }

    public function testPicsearchbot()
    {
        $this->assertTrue(CrawlerDetector::isCrawler('psbot'));
        $this->assertTrue(CrawlerDetector::isCrawler('psbot-page'));

        $this->assertSame('Picsearch bot', CrawlerDetector::getCrawlerName());
    }

    public function testPingdomBot()
    {
        $this->assertTrue(CrawlerDetector::isCrawler('Pingdom.com'));

        $this->assertSame('Pingdom Bot', CrawlerDetector::getCrawlerName());
    }

    public function testQuerySeekerSpider()
    {
        $this->assertTrue(CrawlerDetector::isCrawler('QuerySeekerSpider'));

        $this->assertSame('QuerySeekerSpider', CrawlerDetector::getCrawlerName());
    }

    public function testRedditBot()
    {
        $this->assertTrue(CrawlerDetector::isCrawler('redditbot'));

        $this->assertSame('Reddit Bot', CrawlerDetector::getCrawlerName());
    }

    public function testRogerbot()
    {
        $this->assertTrue(CrawlerDetector::isCrawler('rogerbot'));

        $this->assertSame('Rogerbot', CrawlerDetector::getCrawlerName());
    }

    public function testScreamingFrogSEOSpider()
    {
        $this->assertTrue(CrawlerDetector::isCrawler('Screaming Frog SEO Spider'));

        $this->assertSame('Screaming Frog SEO Spider', CrawlerDetector::getCrawlerName());
    }

    public function testScreenerBot()
    {
        $this->assertTrue(CrawlerDetector::isCrawler('ScreenerBot'));

        $this->assertSame('ScreenerBot', CrawlerDetector::getCrawlerName());
    }

    public function testSemrushBot()
    {
        $this->assertTrue(CrawlerDetector::isCrawler('SemrushBot'));

        $this->assertSame('Semrush Bot', CrawlerDetector::getCrawlerName());
    }

    public function testSensikaBot()
    {
        $this->assertTrue(CrawlerDetector::isCrawler('SensikaBot'));

        $this->assertSame('Sensika Bot', CrawlerDetector::getCrawlerName());
    }

    public function testSEOENGBot()
    {
        $this->assertTrue(CrawlerDetector::isCrawler('SEOENGBot'));
        $this->assertTrue(CrawlerDetector::isCrawler('SEOENGWorldBot'));

        $this->assertSame('SEOENGBot', CrawlerDetector::getCrawlerName());
    }

    public function testSeznamBot()
    {
        $this->assertTrue(CrawlerDetector::isCrawler('SeznamBot'));
        $this->assertTrue(CrawlerDetector::isCrawler('SklikBot'));
        $this->assertTrue(CrawlerDetector::isCrawler('Seznam screenshot-generator'));

        $this->assertSame('Seznam Bot', CrawlerDetector::getCrawlerName());
    }

    public function testShopWiki()
    {
        $this->assertTrue(CrawlerDetector::isCrawler('ShopWiki'));

        $this->assertSame('ShopWiki', CrawlerDetector::getCrawlerName());
    }

    public function testSilverReader()
    {
        $this->assertTrue(CrawlerDetector::isCrawler('SilverReader'));

        $this->assertSame('SilverReader', CrawlerDetector::getCrawlerName());
    }

    public function testSimplePie()
    {
        $this->assertTrue(CrawlerDetector::isCrawler('SimplePie'));

        $this->assertSame('SimplePie', CrawlerDetector::getCrawlerName());
    }

    public function testSISTRIXCrawler()
    {
        $this->assertTrue(CrawlerDetector::isCrawler('SISTRIX Crawler'));

        $this->assertSame('SISTRIX Crawler', CrawlerDetector::getCrawlerName());
    }

    public function testSogouSpider()
    {
        $this->assertTrue(CrawlerDetector::isCrawler('Sogou web spider'));
        $this->assertTrue(CrawlerDetector::isCrawler('Sogou inst spider'));
        $this->assertTrue(CrawlerDetector::isCrawler('Sogou Pic spider'));
        $this->assertTrue(CrawlerDetector::isCrawler('New-Sogou-Spider'));

        $this->assertSame('Sogou Spider', CrawlerDetector::getCrawlerName());
    }

    public function testSosoSpider()
    {
        $this->assertTrue(CrawlerDetector::isCrawler('Sosospider'));
        $this->assertTrue(CrawlerDetector::isCrawler('Sosoimagespider'));

        $this->assertSame('Soso Spider', CrawlerDetector::getCrawlerName());
    }

    public function testSuperfeedrBot()
    {
        $this->assertTrue(CrawlerDetector::isCrawler('Superfeedr bot'));

        $this->assertSame('Superfeedr Bot', CrawlerDetector::getCrawlerName());
    }

    public function testSpinn3r()
    {
        $this->assertTrue(CrawlerDetector::isCrawler('Spinn3r'));

        $this->assertSame('Spinn3r', CrawlerDetector::getCrawlerName());
    }

    public function testSputnikBot()
    {
        $this->assertTrue(CrawlerDetector::isCrawler('SputnikBot'));
        $this->assertTrue(CrawlerDetector::isCrawler('SputnikImageBot'));

        $this->assertSame('Sputnik Bot', CrawlerDetector::getCrawlerName());
    }

    public function testSurveyBot()
    {
        $this->assertTrue(CrawlerDetector::isCrawler('SurveyBot'));

        $this->assertSame('Survey Bot', CrawlerDetector::getCrawlerName());
    }

    public function testTinEyeCrawler()
    {
        $this->assertTrue(CrawlerDetector::isCrawler('TinEye-bot'));

        $this->assertSame('TinEye Crawler', CrawlerDetector::getCrawlerName());
    }

    public function testTinyTinyRSS()
    {
        $this->assertTrue(CrawlerDetector::isCrawler('Tiny Tiny RSS'));

        $this->assertSame('Tiny Tiny RSS', CrawlerDetector::getCrawlerName());
    }

    public function testTurnitinBot()
    {
        $this->assertTrue(CrawlerDetector::isCrawler('TurnitinBot'));

        $this->assertSame('TurnitinBot', CrawlerDetector::getCrawlerName());
    }

    public function testTweetedTimesBot()
    {
        $this->assertTrue(CrawlerDetector::isCrawler('TweetedTimes Bot'));

        $this->assertSame('TweetedTimes Bot', CrawlerDetector::getCrawlerName());
    }

    public function testTweetmemeBot()
    {
        $this->assertTrue(CrawlerDetector::isCrawler('TweetmemeBot'));

        $this->assertSame('Tweetmeme Bot', CrawlerDetector::getCrawlerName());
    }

    public function testTwitterbot()
    {
        $this->assertTrue(CrawlerDetector::isCrawler('Twitterbot'));

        $this->assertSame('Twitterbot', CrawlerDetector::getCrawlerName());
    }

    public function testUptimeRobot()
    {
        $this->assertTrue(CrawlerDetector::isCrawler('UptimeRobot'));

        $this->assertSame('Uptime Robot', CrawlerDetector::getCrawlerName());
    }

    public function testURLAppendBot()
    {
        $this->assertTrue(CrawlerDetector::isCrawler('URLAppendBot'));

        $this->assertSame('URLAppendBot', CrawlerDetector::getCrawlerName());
    }

    public function testVisualSiteMapperCrawler()
    {
        $this->assertTrue(CrawlerDetector::isCrawler('VSMCrawler'));

        $this->assertSame('Visual Site Mapper Crawler', CrawlerDetector::getCrawlerName());
    }

    public function testVoilaBot()
    {
        $this->assertTrue(CrawlerDetector::isCrawler('VoilaBot'));

        $this->assertSame('Voila Bot', CrawlerDetector::getCrawlerName());
    }

    public function testW3CCSSValidator()
    {
        $this->assertTrue(CrawlerDetector::isCrawler('Jigsaw'));

        $this->assertSame('W3C CSS Validator', CrawlerDetector::getCrawlerName());
    }

    public function testW3CI18NChecker()
    {
        $this->assertTrue(CrawlerDetector::isCrawler('W3C_I18n-Checker'));

        $this->assertSame('W3C I18N Checker', CrawlerDetector::getCrawlerName());
    }

    public function testW3CLinkChecker()
    {
        $this->assertTrue(CrawlerDetector::isCrawler('W3C-checklink'));

        $this->assertSame('W3C Link Checker', CrawlerDetector::getCrawlerName());
    }

    public function testW3CMarkupValidationService()
    {
        $this->assertTrue(CrawlerDetector::isCrawler('W3C_Validator'));

        $this->assertSame('W3C Markup Validation Service', CrawlerDetector::getCrawlerName());
    }

    public function testW3CMobileOKChecker()
    {
        $this->assertTrue(CrawlerDetector::isCrawler('W3C-mobileOK'));

        $this->assertSame('W3C MobileOK Checker', CrawlerDetector::getCrawlerName());
    }

    public function testW3CUnifiedValidator()
    {
        $this->assertTrue(CrawlerDetector::isCrawler('W3C_Unicorn'));

        $this->assertSame('W3C Unified Validator', CrawlerDetector::getCrawlerName());
    }

    public function testWeSEESearch()
    {
        $this->assertTrue(CrawlerDetector::isCrawler('WeSEE'));
        $this->assertTrue(CrawlerDetector::isCrawler('WeSEE:Search'));

        $this->assertSame('WeSEE:Search', CrawlerDetector::getCrawlerName());
    }

    public function testWebbCrawler()
    {
        $this->assertTrue(CrawlerDetector::isCrawler('WebbCrawler'));

        $this->assertSame('WebbCrawler', CrawlerDetector::getCrawlerName());
    }

    public function testWotbox()
    {
        $this->assertTrue(CrawlerDetector::isCrawler('Wotbox'));

        $this->assertSame('Wotbox', CrawlerDetector::getCrawlerName());
    }

    public function testYaCy()
    {
        $this->assertTrue(CrawlerDetector::isCrawler('yacybot'));

        $this->assertSame('YaCy', CrawlerDetector::getCrawlerName());
    }

    public function testYahooSlurp()
    {
        $this->assertTrue(CrawlerDetector::isCrawler('Yahoo! Slurp'));
        $this->assertTrue(CrawlerDetector::isCrawler('Yahoo!-AdCrawler'));

        $this->assertSame('Yahoo! Slurp', CrawlerDetector::getCrawlerName());
    }

    public function testYandexBot()
    {
        $this->assertTrue(CrawlerDetector::isCrawler('YandexBot'));
        $this->assertTrue(CrawlerDetector::isCrawler('YandexImages'));
        $this->assertTrue(CrawlerDetector::isCrawler('YandexAntivirus'));
        $this->assertTrue(CrawlerDetector::isCrawler('YandexDirect'));
        $this->assertTrue(CrawlerDetector::isCrawler('YandexBlogs'));
        $this->assertTrue(CrawlerDetector::isCrawler('YandexFavicons'));
        $this->assertTrue(CrawlerDetector::isCrawler('YandexImageResizer'));
        $this->assertTrue(CrawlerDetector::isCrawler('YandexNews'));
        $this->assertTrue(CrawlerDetector::isCrawler('YandexNewslinks'));
        $this->assertTrue(CrawlerDetector::isCrawler('YandexMetrika'));
        $this->assertTrue(CrawlerDetector::isCrawler('Yandex.Gazeta Bot)'));

        $this->assertSame('Yandex Bot', CrawlerDetector::getCrawlerName());
    }

    public function testYetiNaverbot()
    {
        $this->assertTrue(CrawlerDetector::isCrawler('Yeti'));

        $this->assertSame('Yeti/Naverbot', CrawlerDetector::getCrawlerName());
    }

    public function testYoudaoBot()
    {
        $this->assertTrue(CrawlerDetector::isCrawler('YoudaoBot'));

        $this->assertSame('Youdao Bot', CrawlerDetector::getCrawlerName());
    }

    public function testYunyunBot()
    {
        $this->assertTrue(CrawlerDetector::isCrawler('YRSpider'));
        $this->assertTrue(CrawlerDetector::isCrawler('YYSpider'));

        $this->assertSame('Yunyun Bot', CrawlerDetector::getCrawlerName());
    }

    public function testZookabot()
    {
        $this->assertTrue(CrawlerDetector::isCrawler('Zookabot'));

        $this->assertSame('Zookabot', CrawlerDetector::getCrawlerName());
    }

    public function testZumBot()
    {
        $this->assertTrue(CrawlerDetector::isCrawler('ZumBot'));

        $this->assertSame('ZumBot', CrawlerDetector::getCrawlerName());
    }

    public function testYottaaSiteMonitor()
    {
        $this->assertTrue(CrawlerDetector::isCrawler('YottaaMonitor'));

        $this->assertSame('Yottaa Site Monitor', CrawlerDetector::getCrawlerName());
    }

    public function testYahooGemini()
    {
        $this->assertTrue(CrawlerDetector::isCrawler('Yahoo Ad monitoring yahoo-ad-monitoring-SLN24857'));

        $this->assertSame('Yahoo Gemini', CrawlerDetector::getCrawlerName());
    }

    public function testOutbrain()
    {
        $this->assertTrue(CrawlerDetector::isCrawler('1Java outbrain'));

        $this->assertSame('Outbrain', CrawlerDetector::getCrawlerName());
    }

    public function testHubPages()
    {
        $this->assertTrue(CrawlerDetector::isCrawler('HubPages crawlingpolicy'));

        $this->assertSame('HubPages', CrawlerDetector::getCrawlerName());
    }

    public function testPinterest()
    {
        $this->assertTrue(CrawlerDetector::isCrawler('Pinterest/0.1 +http://www.pinterest.com/'));
        $this->assertTrue(CrawlerDetector::isCrawler('Pinterest/0.1 +http://pinterest.com/'));

        $this->assertSame('Pinterest', CrawlerDetector::getCrawlerName());
    }

    public function testSite24x7WebsiteMonitoring()
    {
        $this->assertTrue(CrawlerDetector::isCrawler('Site24x7'));

        $this->assertSame('Site24x7 Website Monitoring', CrawlerDetector::getCrawlerName());
    }

    public function testMonitorUs()
    {
        $this->assertTrue(CrawlerDetector::isCrawler('www.monitor.us'));

        $this->assertSame('Monitor.Us', CrawlerDetector::getCrawlerName());
    }

    public function testLycos()
    {
        $this->assertTrue(CrawlerDetector::isCrawler('lycos'));

        $this->assertSame('Lycos', CrawlerDetector::getCrawlerName());
    }

    public function testInktomiSlurp()
    {
        $this->assertTrue(CrawlerDetector::isCrawler('Slurp'));

        $this->assertSame('Inktomi Slurp', CrawlerDetector::getCrawlerName());
    }

    public function testSpeedy()
    {
        $this->assertTrue(CrawlerDetector::isCrawler('Speedy Spider'));

        $this->assertSame('Speedy', CrawlerDetector::getCrawlerName());
    }

    public function testScoutJet()
    {
        $this->assertTrue(CrawlerDetector::isCrawler('ScoutJet'));

        $this->assertSame('ScoutJet', CrawlerDetector::getCrawlerName());
    }

    public function testNetResearchServer()
    {
        $this->assertTrue(CrawlerDetector::isCrawler('nrsbot'));
        $this->assertTrue(CrawlerDetector::isCrawler('netresearch'));

        $this->assertSame('NetResearchServer', CrawlerDetector::getCrawlerName());
    }

    public function testScooter()
    {
        $this->assertTrue(CrawlerDetector::isCrawler('scooter'));

        $this->assertSame('Scooter', CrawlerDetector::getCrawlerName());
    }

    public function testGigabot()
    {
        $this->assertTrue(CrawlerDetector::isCrawler('gigabot'));

        $this->assertSame('Gigabot', CrawlerDetector::getCrawlerName());
    }

    public function testCharlotte()
    {
        $this->assertTrue(CrawlerDetector::isCrawler('charlotte'));

        $this->assertSame('Charlotte', CrawlerDetector::getCrawlerName());
    }

    public function testPompos()
    {
        $this->assertTrue(CrawlerDetector::isCrawler('Pompos'));

        $this->assertSame('Pompos', CrawlerDetector::getCrawlerName());
    }

    public function testichiro()
    {
        $this->assertTrue(CrawlerDetector::isCrawler('ichiro'));

        $this->assertSame('ichiro', CrawlerDetector::getCrawlerName());
    }

    public function testPagePeeker()
    {
        $this->assertTrue(CrawlerDetector::isCrawler('PagePeeker'));

        $this->assertSame('PagePeeker', CrawlerDetector::getCrawlerName());
    }

    public function testWebThumbnail()
    {
        $this->assertTrue(CrawlerDetector::isCrawler('WebThumbnail'));

        $this->assertSame('WebThumbnail', CrawlerDetector::getCrawlerName());
    }

    public function testWillowInternetCrawler()
    {
        $this->assertTrue(CrawlerDetector::isCrawler('Willow Internet Crawler'));

        $this->assertSame('Willow Internet Crawler', CrawlerDetector::getCrawlerName());
    }

    public function testEmailWolf()
    {
        $this->assertTrue(CrawlerDetector::isCrawler('EmailWolf'));

        $this->assertSame('EmailWolf', CrawlerDetector::getCrawlerName());
    }

    public function testNetLyzerFastProbe()
    {
        $this->assertTrue(CrawlerDetector::isCrawler('NetLyzer FastProbe'));

        $this->assertSame('NetLyzer FastProbe', CrawlerDetector::getCrawlerName());
    }

    public function testADMantX()
    {
        $this->assertTrue(CrawlerDetector::isCrawler('ADmantX Platform Semantic Analyzer - ADmantX Inc. - www.admantx.com'));

        $this->assertSame('ADMantX', CrawlerDetector::getCrawlerName());
    }

    public function testServerDensity()
    {
        $this->assertTrue(CrawlerDetector::isCrawler('Server Density Service Monitoring 5'));

        $this->assertSame('Server Density', CrawlerDetector::getCrawlerName());
    }

    public function testBot()
    {
        $this->assertTrue(CrawlerDetector::isCrawler('nuhk'));
        $this->assertTrue(CrawlerDetector::isCrawler('TsolCrawler'));
        $this->assertTrue(CrawlerDetector::isCrawler('Yammybot'));
        $this->assertTrue(CrawlerDetector::isCrawler('Openbot'));
        $this->assertTrue(CrawlerDetector::isCrawler('Gulper Web Bot'));
        $this->assertTrue(CrawlerDetector::isCrawler('grub-client'));
        $this->assertTrue(CrawlerDetector::isCrawler('Download Demon'));
        $this->assertTrue(CrawlerDetector::isCrawler('SearchExpress'));
        $this->assertTrue(CrawlerDetector::isCrawler('Microsoft URL Control'));
        $this->assertTrue(CrawlerDetector::isCrawler('borg'));
        $this->assertTrue(CrawlerDetector::isCrawler('altavista'));
        $this->assertTrue(CrawlerDetector::isCrawler('teoma'));
        $this->assertTrue(CrawlerDetector::isCrawler('blitzbot'));
        $this->assertTrue(CrawlerDetector::isCrawler('oegp'));
        $this->assertTrue(CrawlerDetector::isCrawler('furlbot'));
        $this->assertTrue(CrawlerDetector::isCrawler('http%20client'));
        $this->assertTrue(CrawlerDetector::isCrawler('polybot'));
        $this->assertTrue(CrawlerDetector::isCrawler('htdig'));
        $this->assertTrue(CrawlerDetector::isCrawler('mogimogi'));
        $this->assertTrue(CrawlerDetector::isCrawler('larbin'));
        $this->assertTrue(CrawlerDetector::isCrawler('scrubby'));
        $this->assertTrue(CrawlerDetector::isCrawler('searchsight'));
        $this->assertTrue(CrawlerDetector::isCrawler('seekbot'));
        $this->assertTrue(CrawlerDetector::isCrawler('semanticdiscovery'));
        $this->assertTrue(CrawlerDetector::isCrawler('snappy'));
        $this->assertTrue(CrawlerDetector::isCrawler('vortex'));
        $this->assertTrue(CrawlerDetector::isCrawler('zao'));
        $this->assertTrue(CrawlerDetector::isCrawler('zeal'));
        $this->assertTrue(CrawlerDetector::isCrawler('fast-webcrawler'));
        $this->assertTrue(CrawlerDetector::isCrawler('converacrawler'));
        $this->assertTrue(CrawlerDetector::isCrawler('dataparksearch'));
        $this->assertTrue(CrawlerDetector::isCrawler('findlinks'));
        $this->assertTrue(CrawlerDetector::isCrawler('BrowserMob'));
        $this->assertTrue(CrawlerDetector::isCrawler('HttpMonitor'));
        $this->assertTrue(CrawlerDetector::isCrawler('ThumbShotsBot'));
        $this->assertTrue(CrawlerDetector::isCrawler('URL2PNG'));
        $this->assertTrue(CrawlerDetector::isCrawler('ZooShot'));
        $this->assertTrue(CrawlerDetector::isCrawler('GomezA'));
        $this->assertTrue(CrawlerDetector::isCrawler('Catchpoint bot'));
        $this->assertTrue(CrawlerDetector::isCrawler('Google SketchUp'));
        $this->assertTrue(CrawlerDetector::isCrawler('Read%20Later'));
        $this->assertTrue(CrawlerDetector::isCrawler('Minimo'));
        $this->assertTrue(CrawlerDetector::isCrawler('RackspaceBot'));

        $this->assertSame('Bot', CrawlerDetector::getCrawlerName());
    }

    public function testNutchbasedBot()
    {
        $this->assertTrue(CrawlerDetector::isCrawler('Nutch'));

        $this->assertSame('Nutch-based Bot', CrawlerDetector::getCrawlerName());
    }

    public function testGenericBot()
    {
        $this->assertTrue(CrawlerDetector::isCrawler('sebot'));
        $this->assertTrue(CrawlerDetector::isCrawler('crawler'));
        $this->assertTrue(CrawlerDetector::isCrawler('archiver'));
        $this->assertTrue(CrawlerDetector::isCrawler('transcoder'));
        $this->assertTrue(CrawlerDetector::isCrawler('spider'));

        $this->assertSame('Generic Bot', CrawlerDetector::getCrawlerName());
    }
}
