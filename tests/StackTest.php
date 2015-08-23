<?php
namespace CrawlerDetector\Tests;

use CrawlerDetector\Detector\CrawlerDetector;

class StackTest extends \PHPUnit_Framework_TestCase
{
    public function testABrowse()
    {
        $detector = new CrawlerDetector(); 

        $this->assertFalse($detector->isCrawler('Mozilla/5.0 (compatible; U; ABrowse 0.6; Syllable) AppleWebKit/420+ (KHTML, like Gecko)'));
    }

    public function testAcooBrowser()
    {
        $detector = new CrawlerDetector(); 

        $this->assertFalse($detector->isCrawler('Mozilla/5.0 (compatible; MSIE 8.0; Windows NT 6.0; Trident/4.0; Acoo Browser 1.98.744; .NET CLR 3.5.30729)'));
    }

    public function testAmericaOnlineBrowser()
    {
        $detector = new CrawlerDetector(); 

        $this->assertFalse($detector->isCrawler('Mozilla/4.0 (compatible; MSIE 7.0; America Online Browser 1.1; Windows NT 5.1; (R1 1.5); .NET CLR 2.0.50727; InfoPath.1)'));
    }

    public function testAmigaVoyager()
    {
        $detector = new CrawlerDetector(); 

        $this->assertFalse($detector->isCrawler('AmigaVoyager/3.2 (AmigaOS/MC680x0)'));
    }

    public function testAOL()
    {
        $detector = new CrawlerDetector(); 

        $this->assertFalse($detector->isCrawler('Mozilla/5.0 (compatible; MSIE 9.0; AOL 9.7; AOLBuild 4343.19; Windows NT 6.1; WOW64; Trident/5.0; FunWebProducts)'));
    }

    public function testArora()
    {
        $detector = new CrawlerDetector(); 

        $this->assertFalse($detector->isCrawler('Mozilla/5.0 (X11; U; UNICOS lcLinux; en-US) Gecko/20140730 (KHTML, like Gecko, Safari/419.3) Arora/0.8.0'));
    }

    public function testAvantBrowser()
    {
        $detector = new CrawlerDetector(); 

        $this->assertFalse($detector->isCrawler('Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; Avant Browser; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; Media Center PC 6.0)'));
    }

    public function testBeonex()
    {
        $detector = new CrawlerDetector(); 

        $this->assertFalse($detector->isCrawler('Mozilla/5.0 (Windows; U; WinNT; en; rv:1.0.2) Gecko/20030311 Beonex/0.8.2-stable'));
    }

    public function testBonEcho()
    {
        $detector = new CrawlerDetector(); 

        $this->assertFalse($detector->isCrawler('Mozilla/5.0 (X11; U; Linux i686; nl; rv:1.8.1b2) Gecko/20060821 BonEcho/2.0b2 (Debian-1.99+2.0b2+dfsg-1)'));
    }

    public function testBrowzar()
    {
        $detector = new CrawlerDetector(); 

        $this->assertFalse($detector->isCrawler('Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 5.1; Trident/4.0; .NET4.0C; .NET4.0E; .NET CLR 2.0.50727; .NET CLR 1.1.4322; .NET CLR 3.0.4506.2152; .NET CLR 3.5.30729; Browzar)'));
    }

    public function testCamino()
    {
        $detector = new CrawlerDetector(); 

        $this->assertFalse($detector->isCrawler('Mozilla/5.0 (Macintosh; U; PPC Mac OS X Mach-O; XH; rv:8.578.498) fr, Gecko/20121021 Camino/8.723+ (Firefox compatible)'));
    }

    public function testCharon()
    {
        $detector = new CrawlerDetector(); 

        $this->assertFalse($detector->isCrawler('Mozilla/4.08 (Charon; Inferno)'));
    }

    public function testCheshire()
    {
        $detector = new CrawlerDetector(); 

        $this->assertFalse($detector->isCrawler('Mozilla/5.0 (Macintosh; U; PPC Mac OS X; en) AppleWebKit/418.8 (KHTML, like Gecko, Safari) Cheshire/1.0.UNOFFICIAL'));
    }

    public function testChimera()
    {
        $detector = new CrawlerDetector(); 

        $this->assertFalse($detector->isCrawler('Mozilla/5.0 (Macintosh; U; PPC Mac OS X; pl-PL; rv:1.0.1) Gecko/20021111 Chimera/0.6'));
    }

    public function testChrome()
    {
        $detector = new CrawlerDetector(); 

        $this->assertFalse($detector->isCrawler('Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/41.0.2228.0 Safari/537.36'));
    }

    public function testChromePlus()
    {
        $detector = new CrawlerDetector(); 

        $this->assertFalse($detector->isCrawler('Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US) AppleWebKit/532.2 (KHTML, like Gecko) ChromePlus/4.0.222.3 Chrome/4.0.222.3 Safari/532.2'));
    }

    public function testClassilla()
    {
        $detector = new CrawlerDetector(); 

        $this->assertFalse($detector->isCrawler('Mozilla/5.0 (Macintosh; U; PPC; en-US; mimic; rv:9.3.0) Gecko/20120117 Firefox/3.6.25 Classilla/CFM'));
    }

    public function testCometBird()
    {
        $detector = new CrawlerDetector(); 

        $this->assertFalse($detector->isCrawler('Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US; rv:1.9.2.3) Gecko/20100409 Firefox/3.6.3 CometBird/3.6.3'));
    }

    public function testComodoDragon()
    {
        $detector = new CrawlerDetector(); 

        $this->assertFalse($detector->isCrawler('Mozilla/5.0 (Windows NT 6.2) AppleWebKit/535.7 (KHTML, like Gecko) Comodo_Dragon/16.1.1.0 Chrome/16.0.912.63 Safari/535.7'));
    }

    public function testCrazyBrowser()
    {
        $detector = new CrawlerDetector(); 

        $this->assertFalse($detector->isCrawler('Mozilla/5.0 (compatible; MSIE 8.0; Windows NT 6.0; SV1; Crazy Browser 9.0.04)'));
    }

    public function testCyberdog()
    {
        $detector = new CrawlerDetector(); 

        $this->assertFalse($detector->isCrawler('Cyberdog/2.0 (Macintosh; PPC)'));
    }

    public function testDeepnetExplorer()
    {
        $detector = new CrawlerDetector(); 

        $this->assertFalse($detector->isCrawler('Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 6.1; WOW64; Trident/4.0; Deepnet Explorer 1.5.3; Smart 2x2; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; Media Center PC 6.0; .NET4.0C; .NET4.0E)'));
    }

    public function testDeskBrowse()
    {
        $detector = new CrawlerDetector(); 

        $this->assertFalse($detector->isCrawler('Mozilla/5.0 (Macintosh; U; PPC Mac OS X; pl-pl) AppleWebKit/312.8 (KHTML, like Gecko, Safari) DeskBrowse/1.0'));
    }

    public function testDillo()
    {
        $detector = new CrawlerDetector(); 

        $this->assertFalse($detector->isCrawler('Dillo/2.0'));
    }

    public function testDooble()
    {
        $detector = new CrawlerDetector(); 

        $this->assertFalse($detector->isCrawler('Dooble/0.07 (de_CH) WebKit'));
    }

    public function testElementBrowser()
    {
        $detector = new CrawlerDetector(); 

        $this->assertFalse($detector->isCrawler('Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US) AppleWebKit/533+ (KHTML, like Gecko) Element Browser 5.0'));
    }

    public function testElinks()
    {
        $detector = new CrawlerDetector(); 

        $this->assertFalse($detector->isCrawler('ELinks/0.9.3 (textmode; Linux 2.6.9-kanotix-8 i686; 127x41)'));
    }

    public function testEnigmaBrowser()
    {
        $detector = new CrawlerDetector(); 

        $this->assertFalse($detector->isCrawler('Enigma Browser'));
    }

    public function testEnigmaFox()
    {
        $detector = new CrawlerDetector(); 

        $this->assertFalse($detector->isCrawler('Mozilla/5.0 (Windows; U; Windows NT 6.0; en-GB; rv:1.9.0.13) Gecko/2009073022 EnigmaFox/3.0.13'));
    }

    public function testEpiphany()
    {
        $detector = new CrawlerDetector(); 

        $this->assertFalse($detector->isCrawler('Mozilla/5.0 (X11; U; Linux x86_64; en-US) AppleWebKit/534.7 (KHTML, like Gecko) Epiphany/2.30.6 Safari/534.7'));
    }

    public function testEscape()
    {
        $detector = new CrawlerDetector(); 

        $this->assertFalse($detector->isCrawler('Mozilla/4.0 (compatible; MSIE 5.23; Macintosh; PPC) Escape 5.1.8'));
    }

    public function testFirebird()
    {
        $detector = new CrawlerDetector(); 

        $this->assertFalse($detector->isCrawler('Mozilla/5.0 (Windows; U; Windows NT 6.1; x64; fr; rv:1.9.2.13) Gecko/20101203 Firebird/3.6.13'));
    }

    public function testFirefox()
    {
        $detector = new CrawlerDetector(); 

        $this->assertFalse($detector->isCrawler('Mozilla/5.0 (Windows NT 6.3; rv:36.0) Gecko/20100101 Firefox/36.0'));
    }

    public function testFirewebNavigator()
    {
        $detector = new CrawlerDetector(); 

        $this->assertFalse($detector->isCrawler('Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:2.0) Treco/20110515 Fireweb Navigator/2.4'));
    }

    public function testFlock()
    {
        $detector = new CrawlerDetector(); 

        $this->assertFalse($detector->isCrawler('Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_6_6; en-US) AppleWebKit/534.7 (KHTML, like Gecko) Flock/3.5.3.4628 Chrome/7.0.517.450 Safari/534.7'));
    }

    public function testFluid()
    {
        $detector = new CrawlerDetector(); 

        $this->assertFalse($detector->isCrawler('Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_6_1; nl-nl) AppleWebKit/532.3+ (KHTML, like Gecko) Fluid/0.9.6 Safari/532.3+'));
    }

    public function testGalaxy()
    {
        $detector = new CrawlerDetector(); 

        $this->assertFalse($detector->isCrawler('Galaxy/1.0 [en] (Mac OS X 10.5.6; U; en)'));
    }

    public function testGaleon()
    {
        $detector = new CrawlerDetector(); 

        $this->assertFalse($detector->isCrawler('Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.0.8) Gecko/20090327 Galeon/2.0.7'));
    }

    public function testGranParadiso()
    {
        $detector = new CrawlerDetector(); 

        $this->assertFalse($detector->isCrawler('Mozilla/5.0(X11;U;Linux(x86_64);en;rv:1.9a8)Gecko/2007100619;GranParadiso/3.1'));
    }

    public function testGreenBrowser()
    {
        $detector = new CrawlerDetector(); 

        $this->assertFalse($detector->isCrawler('Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 6.0; WOW64; Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1) ; SLCC1; .NET CLR 2.0.50727; .NET CLR 3.0.04506; Media Center PC 5.0; .NET CLR 3.5.21022; GreenBrowser)'));
    }

    public function testHana()
    {
        $detector = new CrawlerDetector(); 

        $this->assertFalse($detector->isCrawler('Mozilla/5.0 (Macintosh; U; PPC Mac OS X; en) AppleWebKit/418.9 (KHTML, like Gecko) Hana/1.1'));
    }

    public function testHotJava()
    {
        $detector = new CrawlerDetector(); 

        $this->assertFalse($detector->isCrawler('HotJava/1.1.2 FCS'));
    }

    public function testIBMWebExplorer()
    {
        $detector = new CrawlerDetector(); 

        $this->assertFalse($detector->isCrawler('IBM WebExplorer /v0.94'));
    }

    public function testIBrowse()
    {
        $detector = new CrawlerDetector(); 

        $this->assertFalse($detector->isCrawler('Mozilla/5.0 (compatible; IBrowse 3.0; AmigaOS4.0)'));
    }

    public function testiCab()
    {
        $detector = new CrawlerDetector(); 

        $this->assertFalse($detector->isCrawler('Mozilla/5.0 (Macintosh; PPC Mac OS X 10_5_8) AppleWebKit/537.3+ (KHTML, like Gecko) iCab/5.0 Safari/533.16'));
    }

    public function testIceape()
    {
        $detector = new CrawlerDetector(); 

        $this->assertFalse($detector->isCrawler('Mozilla/5.0 (X11; U; Linux x86_64; en-US; rv:1.9.1.13) Gecko/20100916 Iceape/2.0.8'));
    }

    public function testIceCat()
    {
        $detector = new CrawlerDetector(); 

        $this->assertFalse($detector->isCrawler('Mozilla/5.0 (X11; Linux x86_64; rv:17.0) Gecko/20121201 icecat/17.0.1'));
    }

    public function testIceweasel()
    {
        $detector = new CrawlerDetector(); 

        $this->assertFalse($detector->isCrawler('Mozilla/5.0 (X11; Linux x86_64; rv:17.0) Gecko/20121202 Firefox/17.0 Iceweasel/17.0.1'));
    }

    public function testiNetBrowser()
    {
        $detector = new CrawlerDetector(); 

        $this->assertFalse($detector->isCrawler('Mozilla/5.0 (Future Star Technologies Corp.; Star-Blade OS; x86_64; U; en-US) iNet Browser 4.7'));
    }

    public function testInternetExplorer()
    {
        $detector = new CrawlerDetector(); 

        $this->assertFalse($detector->isCrawler('Mozilla/5.0 (Windows NT 6.1; WOW64; Trident/7.0; AS; rv:11.0) like Gecko'));
    }

    public function testiRider()
    {
        $detector = new CrawlerDetector(); 

        $this->assertFalse($detector->isCrawler('Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 6.1; Trident/4.0; iRider 2.60.0008; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; Media Center PC 6.0)'));
    }

    public function testIron()
    {
        $detector = new CrawlerDetector(); 

        $this->assertFalse($detector->isCrawler('Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.4 (KHTML, like Gecko) Chrome/22.0.1250.0 Iron/22.0.2150.0 Safari/537.4'));
    }

    public function testKMeleon()
    {
        $detector = new CrawlerDetector(); 

        $this->assertFalse($detector->isCrawler('Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.9.2.21pre) Gecko K-Meleon/1.7.0'));
    }

    public function testKNinja()
    {
        $detector = new CrawlerDetector(); 

        $this->assertFalse($detector->isCrawler('Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.4pre) Gecko/20070404 K-Ninja/2.1.3'));
    }

    public function testKapiko()
    {
        $detector = new CrawlerDetector(); 

        $this->assertFalse($detector->isCrawler('Mozilla/5.0 (Windows; U; Windows NT 5.1; zh-CN; rv:1.9.0.1) Gecko/20080722 Firefox/3.0.1 Kapiko/3.0'));
    }

    public function testKazehakase()
    {
        $detector = new CrawlerDetector(); 

        $this->assertFalse($detector->isCrawler('Mozilla/5.0 (X11; U; Linux x86_64; en-US; rv:1.9.0.7) Gecko Kazehakase/0.5.6'));
    }

    public function testKKman()
    {
        $detector = new CrawlerDetector(); 

        $this->assertFalse($detector->isCrawler('Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; WOW64; Trident/4.0; KKMAN3.2; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; Media Center PC 6.0; InfoPath.2; .NET4.0C)'));
    }

    public function testKMLite()
    {
        $detector = new CrawlerDetector(); 

        $this->assertFalse($detector->isCrawler('Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.19) Gecko/20081217 KMLite/1.1.2'));
    }

    public function testKonqueror()
    {
        $detector = new CrawlerDetector(); 

        $this->assertFalse($detector->isCrawler('Mozilla/5.0 (X11) KHTML/4.9.1 (like Gecko) Konqueror/4.9'));
    }

    public function testLeechCraft()
    {
        $detector = new CrawlerDetector(); 

        $this->assertFalse($detector->isCrawler('Mozilla/5.0 (X11; U; Linux x86_64; ru-RU) AppleWebKit/533.3 (KHTML, like Gecko) Leechcraft/0.4.55-13-g2230d9f Safari/533.3'));
    }

    public function testLinks()
    {
        $detector = new CrawlerDetector(); 

        $this->assertFalse($detector->isCrawler('Links (6.9; Unix 6.9-astral sparc; 80x25)'));
    }

    public function testLobo()
    {
        $detector = new CrawlerDetector(); 

        $this->assertFalse($detector->isCrawler('Mozilla/4.0 (compatible; MSIE 6.0; Windows XP 5.1) Lobo/0.98.4'));
    }

    public function testlolifox()
    {
        $detector = new CrawlerDetector(); 

        $this->assertFalse($detector->isCrawler('Mozilla/5.0 (Windows; U; Windows NT 6.1; en-GB; rv:1.9.1.17) Gecko/20110123 Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.2) Gecko/20070225 lolifox/0.32'));
    }

    public function testLorentz()
    {
        $detector = new CrawlerDetector(); 

        $this->assertFalse($detector->isCrawler('Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US; rv:1.9.2.3pre) Gecko/20100403 Lorentz/3.6.3plugin2pre (.NET CLR 4.0.20506)'));
    }

    public function testLunascape()
    {
        $detector = new CrawlerDetector(); 

        $this->assertFalse($detector->isCrawler('Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.1; WOW64; Trident/5.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; Media Center PC 6.0; Lunascape 6.7.1.25446)'));
    }

    public function testLynx()
    {
        $detector = new CrawlerDetector(); 

        $this->assertFalse($detector->isCrawler('Lynx/2.8.8dev.3 libwww-FM/2.14 SSL-MM/1.4.1'));
    }

    public function testMadfox()
    {
        $detector = new CrawlerDetector(); 

        $this->assertFalse($detector->isCrawler('Mozilla/5.0 (Macintosh; U; PPC Mac OS X Mach-O; en; rv:1.7.12) Gecko/20050928 Firefox/1.0.7 Madfox/3.0'));
    }

    public function testMaxthon()
    {
        $detector = new CrawlerDetector(); 

        $this->assertFalse($detector->isCrawler('Mozilla/5.0 (Windows; U; Windows NT 6.0; en-US) AppleWebKit/533.1 (KHTML, like Gecko) Maxthon/3.0.8.2 Safari/533.1'));
    }

    public function testMidori()
    {
        $detector = new CrawlerDetector(); 

        $this->assertFalse($detector->isCrawler('Mozilla/5.0 (X11; U; Linux i686; fr-fr) AppleWebKit/525.1+ (KHTML, like Gecko, Safari/525.1+) midori/1.19'));
    }

    public function testMinefield()
    {
        $detector = new CrawlerDetector(); 

        $this->assertFalse($detector->isCrawler('Mozilla/5.0 (Windows NT 6.1; WOW64; rv:2.0b4pre) Gecko/20100815 Minefield/4.0b4pre'));
    }

    public function testMozilla()
    {
        $detector = new CrawlerDetector(); 

        $this->assertFalse($detector->isCrawler('Mozilla/5.0 (Windows; U; Windows NT 6.1; rv:2.2) Gecko/20110201'));
    }

    public function testNamoroka()
    {
        $detector = new CrawlerDetector(); 

        $this->assertFalse($detector->isCrawler('Mozilla/5.0 (X11; U; Linux x86_64; en-US; rv:1.9.2a2pre) Gecko/20090908 Ubuntu/9.04 (jaunty) Namoroka/3.6a2pre GTB5 (.NET CLR 3.5.30729)'));
    }

    public function testNCSAMosaic()
    {
        $detector = new CrawlerDetector(); 

        $this->assertFalse($detector->isCrawler('NCSA Mosaic/3.0 (Windows 95)'));
    }

    public function testNetNewsWire()
    {
        $detector = new CrawlerDetector(); 

        $this->assertFalse($detector->isCrawler('Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_6_3; de-de) AppleWebKit/531.22.7 (KHTML, like Gecko) NetNewsWire/3.2.7'));
    }

    public function testNetPositive()
    {
        $detector = new CrawlerDetector(); 

        $this->assertFalse($detector->isCrawler('Mozilla/3.0 (compatible; NetPositive/2.2.2; BeOS)'));
    }

    public function testNetscape()
    {
        $detector = new CrawlerDetector(); 

        $this->assertFalse($detector->isCrawler('Mozilla/5.0 (Windows; U; Win 9x 4.90; SG; rv:1.9.2.4) Gecko/20101104 Netscape/9.1.0285'));
    }

    public function testNetSurf()
    {
        $detector = new CrawlerDetector(); 

        $this->assertFalse($detector->isCrawler('NetSurf/2.0 (RISC OS; armv5l)'));
    }

    public function testOmniWeb()
    {
        $detector = new CrawlerDetector(); 

        $this->assertFalse($detector->isCrawler('Mozilla/5.0 (Macintosh; U; Intel Mac OS X; en-US) AppleWebKit/528.16 (KHTML, like Gecko, Safari/528.16) OmniWeb/v622.8.0.112941'));
    }

    public function testOpera()
    {
        $detector = new CrawlerDetector(); 

        $this->assertFalse($detector->isCrawler('Opera/9.80 (X11; Linux i686; Ubuntu/14.10) Presto/2.12.388 Version/12.16'));
    }

    public function testOrca()
    {
        $detector = new CrawlerDetector(); 

        $this->assertFalse($detector->isCrawler('Mozilla/5.0 (Windows; U; Windows NT 6.1; x64; fr; rv:1.9.1.1) Gecko/20090722 Firefox/3.5.1 Orca/1.2 build 2'));
    }

    public function testOregano()
    {
        $detector = new CrawlerDetector(); 

        $this->assertFalse($detector->isCrawler('Mozilla/1.10 [en] (Compatible; RISC OS 3.70; Oregano 1.10)'));
    }

    public function testosbbrowser()
    {
        $detector = new CrawlerDetector(); 

        $this->assertFalse($detector->isCrawler('Mozilla/5.0 (X11; U; Linux i686; en-us) AppleWebKit/146.1 (KHTML, like Gecko) osb-browser/0.5'));
    }

    public function testPalemoon()
    {
        $detector = new CrawlerDetector(); 

        $this->assertFalse($detector->isCrawler('Mozilla/1.10 [en] (Compatible; RISC OS 3.70; Oregano 1.10)'));
    }

    public function testPhoenix()
    {
        $detector = new CrawlerDetector(); 

        $this->assertFalse($detector->isCrawler('Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.3a) Gecko/20021207 Phoenix/0.5'));
    }

    public function testPogo()
    {
        $detector = new CrawlerDetector(); 

        $this->assertFalse($detector->isCrawler('Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.13) Gecko/20080414 Firefox/2.0.0.13 Pogo/2.0.0.13.6866'));
    }

    public function testPrism()
    {
        $detector = new CrawlerDetector(); 

        $this->assertFalse($detector->isCrawler('Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10.6; en-US; rv:1.9.2.3) Gecko/20100402 Prism/1.0b4'));
    }

    public function testQtWebInternetBrowser()
    {
        $detector = new CrawlerDetector(); 

        $this->assertFalse($detector->isCrawler('Mozilla/5.0 (Windows; U; Windows NT 5.1; pt-BR) AppleWebKit/533.3 (KHTML, like Gecko) QtWeb Internet Browser/3.7 http://www.QtWeb.net'));
    }

    public function testRekonq()
    {
        $detector = new CrawlerDetector(); 

        $this->assertFalse($detector->isCrawler('Mozilla/5.0 (X11; U; Linux x86_64; cs-CZ) AppleWebKit/533.3 (KHTML, like Gecko) rekonq Safari/533.3'));
    }

    public function testretawq()
    {
        $detector = new CrawlerDetector(); 

        $this->assertFalse($detector->isCrawler('retawq/0.2.6c [en] (text)'));
    }

    public function testRockMelt()
    {
        $detector = new CrawlerDetector(); 

        $this->assertFalse($detector->isCrawler('Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/534.24 (KHTML, like Gecko) RockMelt/0.9.58.494 Chrome/11.0.696.71 Safari/534.24'));
    }

    public function testSafari()
    {
        $detector = new CrawlerDetector(); 

        $this->assertFalse($detector->isCrawler('Mozilla/5.0 (Macintosh; Intel Mac OS X 10_9_3) AppleWebKit/537.75.14 (KHTML, like Gecko) Version/7.0.3 Safari/7046A194A'));
    }

    public function testSeaMonkey()
    {
        $detector = new CrawlerDetector(); 

        $this->assertFalse($detector->isCrawler('Mozilla/5.0 (Windows NT 5.2; RW; rv:7.0a1) Gecko/20091211 SeaMonkey/9.23a1pre'));
    }

    public function testShiira()
    {
        $detector = new CrawlerDetector(); 

        $this->assertFalse($detector->isCrawler('Mozilla/5.0 (Macintosh; U; PPC Mac OS X; ja-jp) AppleWebKit/419 (KHTML, like Gecko) Shiira/1.2.3 Safari/125'));
    }

    public function testShiretoko()
    {
        $detector = new CrawlerDetector(); 

        $this->assertFalse($detector->isCrawler('Mozilla/5.0 (X11; U; Linux x86_64; en-US; rv:1.9.1b5pre) Gecko/20090424 Shiretoko/3.5b5pre'));
    }

    public function testSleipnir()
    {
        $detector = new CrawlerDetector(); 

        $this->assertFalse($detector->isCrawler('Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.0; Trident/4.0; SLCC1; .NET CLR 2.0.50727; Media Center PC 5.0; .NET CLR 3.5.30729; .NET CLR 3.0.30618; .NET4.0C; .NET4.0E; Sleipnir/2.9.9)'));
    }

    public function testStainless()
    {
        $detector = new CrawlerDetector(); 

        $this->assertFalse($detector->isCrawler('Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_5_6; en-us) AppleWebKit/528.16 (KHTML, like Gecko) Stainless/0.5.3 Safari/525.20.1'));
    }

    public function testSunrise()
    {
        $detector = new CrawlerDetector(); 

        $this->assertFalse($detector->isCrawler('Mozilla/6.0 (X11; U; Linux x86_64; en-US; rv:2.9.0.3) Gecko/2009022510 FreeBSD/ Sunrise/4.0.1/like Safari'));
    }

    public function testsurf()
    {
        $detector = new CrawlerDetector(); 

        $this->assertFalse($detector->isCrawler('Surf/0.4.1 (X11; U; Unix; en-US) AppleWebKit/531.2+ Compatible (Safari; MSIE 9.0)'));
    }

    public function testSylera()
    {
        $detector = new CrawlerDetector(); 

        $this->assertFalse($detector->isCrawler('Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US; rv:1.8.1.9) Gecko/20071110 Sylera/3.0.20 SeaMonkey/1.1.6'));
    }

    public function testTencentTraveler()
    {
        $detector = new CrawlerDetector(); 

        $this->assertFalse($detector->isCrawler('Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.0; Trident/4.0; TencentTraveler 4.0; Trident/4.0; SLCC1; Media Center PC 5.0; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30618)'));
    }

    public function testTenFourFox()
    {
        $detector = new CrawlerDetector(); 

        $this->assertFalse($detector->isCrawler('Mozilla/5.0 (Macintosh; PPC Mac OS X 10.5; rv:10.0.2) Gecko/20120216 Firefox/10.0.2 TenFourFox/7450'));
    }

    public function testtheWorldBrowser()
    {
        $detector = new CrawlerDetector(); 

        $this->assertFalse($detector->isCrawler('Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.0; Trident/5.0; TheWorld)'));
    }

    public function testuzbl()
    {
        $detector = new CrawlerDetector(); 

        $this->assertFalse($detector->isCrawler('Uzbl (Webkit 1.3) (Linux i686 [i686])'));
    }

    public function testVimprobable()
    {
        $detector = new CrawlerDetector(); 

        $this->assertFalse($detector->isCrawler('Vimprobable/0.9.20.5'));
    }

    public function testVonkeror()
    {
        $detector = new CrawlerDetector(); 

        $this->assertFalse($detector->isCrawler('Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.9.1pre) Gecko/20090629 Vonkeror/1.0'));
    }

    public function testw3m()
    {
        $detector = new CrawlerDetector(); 

        $this->assertFalse($detector->isCrawler('w3m/0.52'));
    }

    public function testWeltweitimnetzBrowser()
    {
        $detector = new CrawlerDetector(); 

        $this->assertFalse($detector->isCrawler('Mozilla/5.0 (Windows; U; Windows NT 5.1; pt-BR) AppleWebKit/534.12 (KHTML, like Gecko) WeltweitimnetzBrowser/0.25 Safari/534.12'));
    }

    public function testWorldWideWeb()
    {
        $detector = new CrawlerDetector(); 

        $this->assertFalse($detector->isCrawler('WorldWideweb (NEXT)'));
    }

    public function testWyzo()
    {
        $detector = new CrawlerDetector(); 

        $this->assertFalse($detector->isCrawler('Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US; rv:1.9.1.6) Gecko/20100121 Firefox/3.5.6 Wyzo/3.5.6.1'));
    }

    public function testAndroidWebkitBrowser()
    {
        $detector = new CrawlerDetector(); 

        $this->assertFalse($detector->isCrawler('Mozilla/5.0 (Linux; U; Android 4.0.3; ko-kr; LG-L160L Build/IML74K) AppleWebkit/534.30 (KHTML, like Gecko) Version/4.0 Mobile Safari/534.30'));
    }

    public function testBlackBerry()
    {
        $detector = new CrawlerDetector(); 

        $this->assertFalse($detector->isCrawler('Mozilla/5.0 (BlackBerry; U; BlackBerry 9900; en) AppleWebKit/534.11+ (KHTML, like Gecko) Version/7.1.0.346 Mobile Safari/534.11+'));
    }

    public function testBlazer()
    {
        $detector = new CrawlerDetector(); 

        $this->assertFalse($detector->isCrawler('Mozilla/4.0 (compatible; MSIE 6.0; Windows 95; PalmSource; Blazer 3.0) 16; 160x160'));
    }

    public function testBolt()
    {
        $detector = new CrawlerDetector(); 

        $this->assertFalse($detector->isCrawler('Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; BOLT/2.340) AppleWebKit/530+ (KHTML, like Gecko) Version/4.0 Safari/530.17 UNTRUSTED/1.0 3gpp-gba'));
    }

    public function testDoris()
    {
        $detector = new CrawlerDetector(); 

        $this->assertFalse($detector->isCrawler('Doris/1.15 [en] (Symbian)'));
    }

    public function testDorothy()
    {
        $detector = new CrawlerDetector(); 

        $this->assertFalse($detector->isCrawler('Mozilla/5.0 (Windows; U; Windows CE; Mobile; like iPhone; ko-kr) AppleWebKit/533.3 (KHTML, like Gecko) Version/4.0 Mobile Safari/533.3 Dorothy'));
    }

    public function testFennec()
    {
        $detector = new CrawlerDetector(); 

        $this->assertFalse($detector->isCrawler('Mozilla/5.0 (Android; Linux armv7l; rv:9.0) Gecko/20111216 Firefox/9.0 Fennec/9.0'));
    }

    public function testIEMobile()
    {
        $detector = new CrawlerDetector(); 

        $this->assertFalse($detector->isCrawler('Mozilla/5.0 (compatible; MSIE 9.0; Windows Phone OS 7.5; Trident/5.0; IEMobile/9.0)'));
    }

    public function testIris()
    {
        $detector = new CrawlerDetector(); 

        $this->assertFalse($detector->isCrawler('Mozilla/5.0 (Windows NT; U; en) AppleWebKit/525.18.1 (KHTML, like Gecko) Version/3.1.1 Iris/1.1.7 Safari/525.20'));
    }

    public function testMaemoBrowser()
    {
        $detector = new CrawlerDetector(); 

        $this->assertFalse($detector->isCrawler('Mozilla/5.0 (X11; U; Linux armv7l; ru-RU; rv:1.9.2.3pre) Gecko/20100723 Firefox/3.5 Maemo Browser 1.7.4.8 RX-51 N900'));
    }

    public function testMIB()
    {
        $detector = new CrawlerDetector(); 

        $this->assertFalse($detector->isCrawler('MOT-L7/NA.ACR_RB MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.1'));
    }

    public function testNetFront()
    {
        $detector = new CrawlerDetector(); 

        $this->assertFalse($detector->isCrawler('SAMSUNG-C5212/C5212XDIK1 NetFront/3.4 Profile/MIDP-2.0 Configuration/CLDC-1.1'));
    }

    public function testOperaMini()
    {
        $detector = new CrawlerDetector(); 

        $this->assertFalse($detector->isCrawler('Opera/9.80 (J2ME/MIDP; Opera Mini/9.80 (S60; SymbOS; Opera Mobi/23.348; U; en) Presto/2.5.25 Version/10.54'));
    }

    public function testSEMCBrowser()
    {
        $detector = new CrawlerDetector(); 

        $this->assertFalse($detector->isCrawler('SonyEricssonW800i/R1BD001/SEMC-Browser/4.2 Profile/MIDP-2.0 Configuration/CLDC-1.1'));
    }

    public function testSkyfire()
    {
        $detector = new CrawlerDetector(); 

        $this->assertFalse($detector->isCrawler('Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_5_7; en-us) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Safari/530.17 Skyfire/2.0'));
    }

    public function testTeaShark()
    {
        $detector = new CrawlerDetector(); 

        $this->assertFalse($detector->isCrawler('Mozilla/5.0 (Macintosh; U; Intel Mac OS X; en) AppleWebKit/418.9.1 (KHTML, like Gecko) Safari/419.3 TeaShark/0.8'));
    }

    public function testuZardWeb()
    {
        $detector = new CrawlerDetector(); 

        $this->assertFalse($detector->isCrawler('Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 5.2; WOW64; Trident/4.0; uZardWeb/1.0; Server_USA)'));
    }

    public function test360Spider()
    {
        $detector = new CrawlerDetector();

        $this->assertTrue($detector->isCrawler('360Spider'));
        $this->assertTrue($detector->isCrawler('360Spider-Image'));
        $this->assertTrue($detector->isCrawler('360Spider-Video'));

        $this->assertSame('360Spider', $detector->getCrawlerName());
    }

    public function testAboundexbot()
    {
        $detector = new CrawlerDetector();

        $this->assertTrue($detector->isCrawler('Aboundex'));

        $this->assertSame('Aboundexbot', $detector->getCrawlerName());
    }

    public function testAcoon()
    {
        $detector = new CrawlerDetector();

        $this->assertTrue($detector->isCrawler('AcoonBot'));

        $this->assertSame('Acoon', $detector->getCrawlerName());
    }

    public function testAddThiscom()
    {
        $detector = new CrawlerDetector();

        $this->assertTrue($detector->isCrawler('AddThis.com'));

        $this->assertSame('AddThis.com', $detector->getCrawlerName());
    }

    public function testaHrefsBot()
    {
        $detector = new CrawlerDetector();

        $this->assertTrue($detector->isCrawler('AhrefsBot'));

        $this->assertSame('aHrefs Bot', $detector->getCrawlerName());
    }

    public function testAlexaCrawler()
    {
        $detector = new CrawlerDetector();

        $this->assertTrue($detector->isCrawler('ia_archiver'));
        $this->assertTrue($detector->isCrawler('alexabot'));
        $this->assertTrue($detector->isCrawler('verifybot'));

        $this->assertSame('Alexa Crawler', $detector->getCrawlerName());
    }

    public function testAmorankSpider()
    {
        $detector = new CrawlerDetector();

        $this->assertTrue($detector->isCrawler('AmorankSpider'));

        $this->assertSame('Amorank Spider', $detector->getCrawlerName());
    }

    public function testAnalyticsSEOCrawler()
    {
        $detector = new CrawlerDetector();

        $this->assertTrue($detector->isCrawler('Curious George'));

        $this->assertSame('Analytics SEO Crawler', $detector->getCrawlerName());
    }

    public function testarchiveorgbot()
    {
        $detector = new CrawlerDetector();

        $this->assertTrue($detector->isCrawler('archive.org_bot'));
        $this->assertTrue($detector->isCrawler('special_archiver'));

        $this->assertSame('archive.org bot', $detector->getCrawlerName());
    }

    public function testAskJeeves()
    {
        $detector = new CrawlerDetector();

        $this->assertTrue($detector->isCrawler('Ask Jeeves/Teoma'));

        $this->assertSame('Ask Jeeves', $detector->getCrawlerName());
    }

    public function testBacklinkCeckde()
    {
        $detector = new CrawlerDetector();

        $this->assertTrue($detector->isCrawler('Backlink-Ceck.de'));

        $this->assertSame('Backlink-Ceck.de', $detector->getCrawlerName());
    }

    public function testBacklinkCrawler()
    {
        $detector = new CrawlerDetector();

        $this->assertTrue($detector->isCrawler('BacklinkCrawler'));

        $this->assertSame('BacklinkCrawler', $detector->getCrawlerName());
    }

    public function testBaiduSpider()
    {
        $detector = new CrawlerDetector();

        $this->assertTrue($detector->isCrawler('baiduspider'));
        $this->assertTrue($detector->isCrawler('baiduspider-image'));
        $this->assertTrue($detector->isCrawler('baidu Transcoder'));
        $this->assertTrue($detector->isCrawler('baidu.123456spider'));

        $this->assertSame('Baidu Spider', $detector->getCrawlerName());
    }

    public function testBingBot()
    {
        $detector = new CrawlerDetector();

        $this->assertTrue($detector->isCrawler('MSNBot'));
        $this->assertTrue($detector->isCrawler('msrbot'));
        $this->assertTrue($detector->isCrawler('bingbot'));
        $this->assertTrue($detector->isCrawler('BingPreview'));
        $this->assertTrue($detector->isCrawler('msnbot-UDiscovery'));
        $this->assertTrue($detector->isCrawler('msnbot-NewsBlogs'));
        $this->assertTrue($detector->isCrawler('adidxbot'));

        $this->assertSame('BingBot', $detector->getCrawlerName());
    }

    public function testBlekkobot()
    {
        $detector = new CrawlerDetector();

        $this->assertTrue($detector->isCrawler('Blekkobot'));

        $this->assertSame('Blekkobot', $detector->getCrawlerName());
    }

    public function testBLEXBotCrawler()
    {
        $detector = new CrawlerDetector();

        $this->assertTrue($detector->isCrawler('BLEXBot'));
        $this->assertTrue($detector->isCrawler('BLEXBotTest'));

        $this->assertSame('BLEXBot Crawler', $detector->getCrawlerName());
    }

    public function testBloglovin()
    {
        $detector = new CrawlerDetector();

        $this->assertTrue($detector->isCrawler('Bloglovin'));

        $this->assertSame('Bloglovin', $detector->getCrawlerName());
    }

    public function testBountiiBot()
    {
        $detector = new CrawlerDetector();

        $this->assertTrue($detector->isCrawler('BountiiBot'));

        $this->assertSame('Bountii Bot', $detector->getCrawlerName());
    }

    public function testBrowsershots()
    {
        $detector = new CrawlerDetector();

        $this->assertTrue($detector->isCrawler('Browsershots'));

        $this->assertSame('Browsershots', $detector->getCrawlerName());
    }

    public function testButterflyRobot()
    {
        $detector = new CrawlerDetector();

        $this->assertTrue($detector->isCrawler('_Butterfly'));

        $this->assertSame('Butterfly Robot', $detector->getCrawlerName());
    }

    public function testCareerBot()
    {
        $detector = new CrawlerDetector();

        $this->assertTrue($detector->isCrawler('CareerBot'));

        $this->assertSame('CareerBot', $detector->getCrawlerName());
    }

    public function testccBotcrawler()
    {
        $detector = new CrawlerDetector();

        $this->assertTrue($detector->isCrawler('CCBot'));

        $this->assertSame('ccBot crawler', $detector->getCrawlerName());
    }

    public function testCliqzbot()
    {
        $detector = new CrawlerDetector();

        $this->assertTrue($detector->isCrawler('Cliqzbot'));

        $this->assertSame('Cliqzbot', $detector->getCrawlerName());
    }

    public function testCloudFlareAlwaysOnline()
    {
        $detector = new CrawlerDetector();

        $this->assertTrue($detector->isCrawler('CloudFlare-AlwaysOnline'));

        $this->assertSame('CloudFlare Always Online', $detector->getCrawlerName());
    }

    public function testCommaFeed()
    {
        $detector = new CrawlerDetector();

        $this->assertTrue($detector->isCrawler('CommaFeed'));

        $this->assertSame('CommaFeed', $detector->getCrawlerName());
    }

    public function testDazoobot()
    {
        $detector = new CrawlerDetector();

        $this->assertTrue($detector->isCrawler('Dazoobot'));

        $this->assertSame('Dazoobot', $detector->getCrawlerName());
    }

    public function testDiscobot()
    {
        $detector = new CrawlerDetector();

        $this->assertTrue($detector->isCrawler('Discobot'));
        $this->assertTrue($detector->isCrawler('Discobot-news'));

        $this->assertSame('Discobot', $detector->getCrawlerName());
    }

    public function testDotBot()
    {
        $detector = new CrawlerDetector();

        $this->assertTrue($detector->isCrawler('DotBot'));

        $this->assertSame('DotBot', $detector->getCrawlerName());
    }

    public function testEasouSpider()
    {
        $detector = new CrawlerDetector();

        $this->assertTrue($detector->isCrawler('EasouSpider'));

        $this->assertSame('Easou Spider', $detector->getCrawlerName());
    }

    public function testMailExractor()
    {
        $detector = new CrawlerDetector();

        $this->assertTrue($detector->isCrawler('EMail Exractor'));

        $this->assertSame('EMail Exractor', $detector->getCrawlerName());
    }

    public function testExaBot()
    {
        $detector = new CrawlerDetector();

        $this->assertTrue($detector->isCrawler('Exabot'));
        $this->assertTrue($detector->isCrawler('Exabot-Thumbnails'));
        $this->assertTrue($detector->isCrawler('Exabot-Images'));
        $this->assertTrue($detector->isCrawler('ExaleadCloudview'));

        $this->assertSame('ExaBot', $detector->getCrawlerName());
    }

    public function testExactSeekCrawler()
    {
        $detector = new CrawlerDetector();

        $this->assertTrue($detector->isCrawler('ExactSeek Crawler'));

        $this->assertSame('ExactSeek Crawler', $detector->getCrawlerName());
    }

    public function testEzooms()
    {
        $detector = new CrawlerDetector();

        $this->assertTrue($detector->isCrawler('Ezooms'));

        $this->assertSame('Ezooms', $detector->getCrawlerName());
    }

    public function testFacebookExternalHit()
    {
        $detector = new CrawlerDetector();

        $this->assertTrue($detector->isCrawler('facebookexternalhit'));
        $this->assertTrue($detector->isCrawler('facebookplatform'));

        $this->assertSame('Facebook External Hit', $detector->getCrawlerName());
    }

    public function testFeedbin()
    {
        $detector = new CrawlerDetector();

        $this->assertTrue($detector->isCrawler('Feedbin'));

        $this->assertSame('Feedbin', $detector->getCrawlerName());
    }

    public function testFeedBurner()
    {
        $detector = new CrawlerDetector();

        $this->assertTrue($detector->isCrawler('FeedBurner'));

        $this->assertSame('FeedBurner', $detector->getCrawlerName());
    }

    public function testFeedly()
    {
        $detector = new CrawlerDetector();

        $this->assertTrue($detector->isCrawler('Feedly'));
        $this->assertTrue($detector->isCrawler('MetaFeedly'));
        $this->assertTrue($detector->isCrawler('MetaFeedlyBot'));
        $this->assertTrue($detector->isCrawler('MetaFeedlyApp'));
        $this->assertTrue($detector->isCrawler('FeedlyBot'));
        $this->assertTrue($detector->isCrawler('FeedlyApp'));

        $this->assertSame('Feedly', $detector->getCrawlerName());
    }

    public function testFeedspot()
    {
        $detector = new CrawlerDetector();

        $this->assertTrue($detector->isCrawler('Feedspot'));

        $this->assertSame('Feedspot', $detector->getCrawlerName());
    }

    public function testFever()
    {
        $detector = new CrawlerDetector();

        $this->assertTrue($detector->isCrawler('Fever'));

        $this->assertSame('Fever', $detector->getCrawlerName());
    }

    public function testGenieoWebfilter()
    {
        $detector = new CrawlerDetector();

        $this->assertTrue($detector->isCrawler('Genieo'));

        $this->assertSame('Genieo Web filter', $detector->getCrawlerName());
    }

    public function testGoo()
    {
        $detector = new CrawlerDetector();

        $this->assertTrue($detector->isCrawler('ichiro/mobile goo'));

        $this->assertSame('Goo', $detector->getCrawlerName());
    }

    public function testGooglePageSpeedInsights()
    {
        $detector = new CrawlerDetector();

        $this->assertTrue($detector->isCrawler('Google Page Speed Insights'));

        $this->assertSame('Google PageSpeed Insights', $detector->getCrawlerName());
    }

    public function testGmailImageProxy()
    {
        $detector = new CrawlerDetector();

        $this->assertTrue($detector->isCrawler('via ggpht.com GoogleImageProxy'));

        $this->assertSame('Gmail Image Proxy', $detector->getCrawlerName());
    }

    public function testGooglebot()
    {
        $detector = new CrawlerDetector();

        $this->assertTrue($detector->isCrawler('Googlebot'));
        $this->assertTrue($detector->isCrawler('Googlebot-Mobile'));
        $this->assertTrue($detector->isCrawler('Googlebot-Image'));
        $this->assertTrue($detector->isCrawler('Googlebot-Video'));
        $this->assertTrue($detector->isCrawler('Googlebot-News'));
        $this->assertTrue($detector->isCrawler('Feedfetcher-Google'));
        $this->assertTrue($detector->isCrawler('Google-Test'));
        $this->assertTrue($detector->isCrawler('Google-Site-Verification'));
        $this->assertTrue($detector->isCrawler('Google Web Preview'));
        $this->assertTrue($detector->isCrawler('AdsBot-Google'));
        $this->assertTrue($detector->isCrawler('AdsBot-Google-Mobile'));
        $this->assertTrue($detector->isCrawler('Mediapartners-Google'));
        $this->assertTrue($detector->isCrawler('GoogleProducer'));

        $this->assertSame('Googlebot', $detector->getCrawlerName());
    }

    public function testHeritrix()
    {
        $detector = new CrawlerDetector();

        $this->assertTrue($detector->isCrawler('heritrix'));

        $this->assertSame('Heritrix', $detector->getCrawlerName());
    }

    public function testHTTPMon()
    {
        $detector = new CrawlerDetector();

        $this->assertTrue($detector->isCrawler('HTTPMon'));

        $this->assertSame('HTTPMon', $detector->getCrawlerName());
    }

    public function testIISSiteAnalysis()
    {
        $detector = new CrawlerDetector();

        $this->assertTrue($detector->isCrawler('iisbot'));

        $this->assertSame('IIS Site Analysis', $detector->getCrawlerName());
    }

    public function testKouio()
    {
        $detector = new CrawlerDetector();

        $this->assertTrue($detector->isCrawler('kouio'));

        $this->assertSame('Kouio', $detector->getCrawlerName());
    }

    public function testLinkdexBot()
    {
        $detector = new CrawlerDetector();

        $this->assertTrue($detector->isCrawler('linkdexbot'));
        $this->assertTrue($detector->isCrawler('linkdexbot-mobile'));
        $this->assertTrue($detector->isCrawler('linkdex.com'));

        $this->assertSame('Linkdex Bot', $detector->getCrawlerName());
    }

    public function testLinkedInBot()
    {
        $detector = new CrawlerDetector();

        $this->assertTrue($detector->isCrawler('LinkedInBot'));

        $this->assertSame('LinkedIn Bot', $detector->getCrawlerName());
    }

    public function testMailRuBot()
    {
        $detector = new CrawlerDetector();

        $this->assertTrue($detector->isCrawler('Mail.RU'));
        $this->assertTrue($detector->isCrawler('Mail.RU_Bot'));

        $this->assertSame('Mail.Ru Bot', $detector->getCrawlerName());
    }

    public function testMagpieCrawler()
    {
        $detector = new CrawlerDetector();

        $this->assertTrue($detector->isCrawler('magpie-crawler'));

        $this->assertSame('Magpie-Crawler', $detector->getCrawlerName());
    }

    public function testMagpieRSS()
    {
        $detector = new CrawlerDetector();

        $this->assertTrue($detector->isCrawler('MagpieRSS'));

        $this->assertSame('MagpieRSS', $detector->getCrawlerName());
    }

    public function testMeanpathBot()
    {
        $detector = new CrawlerDetector();

        $this->assertTrue($detector->isCrawler('meanpathbot'));

        $this->assertSame('Meanpath Bot', $detector->getCrawlerName());
    }

    public function testMixrankBot()
    {
        $detector = new CrawlerDetector();

        $this->assertTrue($detector->isCrawler('MixrankBot'));

        $this->assertSame('Mixrank Bot', $detector->getCrawlerName());
    }

    public function testMJ12Bot()
    {
        $detector = new CrawlerDetector();

        $this->assertTrue($detector->isCrawler('MJ12bot'));

        $this->assertSame('MJ12 Bot', $detector->getCrawlerName());
    }

    public function testMojeekBot()
    {
        $detector = new CrawlerDetector();

        $this->assertTrue($detector->isCrawler('MojeekBot'));

        $this->assertSame('MojeekBot', $detector->getCrawlerName());
    }

    public function testNalezenCzBot()
    {
        $detector = new CrawlerDetector();

        $this->assertTrue($detector->isCrawler('NalezenCzBot'));

        $this->assertSame('NalezenCzBot', $detector->getCrawlerName());
    }

    public function testNetcraftSurveyBot()
    {
        $detector = new CrawlerDetector();

        $this->assertTrue($detector->isCrawler('Netcraft Web Server Survey'));

        $this->assertSame('Netcraft Survey Bot', $detector->getCrawlerName());
    }

    public function testNetvibes()
    {
        $detector = new CrawlerDetector();

        $this->assertTrue($detector->isCrawler('Netvibes'));

        $this->assertSame('Netvibes', $detector->getCrawlerName());
    }

    public function testNewsBlur()
    {
        $detector = new CrawlerDetector();

        $this->assertTrue($detector->isCrawler('NewsBlur Fetcher'));
        $this->assertTrue($detector->isCrawler('NewsBlur Finder'));

        $this->assertSame('NewsBlur', $detector->getCrawlerName());
    }

    public function testNewsGator()
    {
        $detector = new CrawlerDetector();

        $this->assertTrue($detector->isCrawler('NewsGatorOnline'));

        $this->assertSame('NewsGator', $detector->getCrawlerName());
    }

    public function testNLCrawler()
    {
        $detector = new CrawlerDetector();

        $this->assertTrue($detector->isCrawler('nlcrawler'));

        $this->assertSame('NLCrawler', $detector->getCrawlerName());
    }

    public function testOmgilibot()
    {
        $detector = new CrawlerDetector();

        $this->assertTrue($detector->isCrawler('omgilibot'));

        $this->assertSame('Omgili bot', $detector->getCrawlerName());
    }

    public function testOpenindexSpider()
    {
        $detector = new CrawlerDetector();

        $this->assertTrue($detector->isCrawler('OpenindexSpider'));

        $this->assertSame('Openindex Spider', $detector->getCrawlerName());
    }

    public function testOpenLinkProfiler()
    {
        $detector = new CrawlerDetector();

        $this->assertTrue($detector->isCrawler('spbot'));

        $this->assertSame('OpenLinkProfiler', $detector->getCrawlerName());
    }

    public function testOpenWebSpider()
    {
        $detector = new CrawlerDetector();

        $this->assertTrue($detector->isCrawler('OpenWebSpider'));

        $this->assertSame('OpenWebSpider', $detector->getCrawlerName());
    }

    public function testPaperLiBot()
    {
        $detector = new CrawlerDetector();

        $this->assertTrue($detector->isCrawler('PaperLiBot'));

        $this->assertSame('PaperLiBot', $detector->getCrawlerName());
    }

    public function testPicsearchbot()
    {
        $detector = new CrawlerDetector();

        $this->assertTrue($detector->isCrawler('psbot'));
        $this->assertTrue($detector->isCrawler('psbot-page'));

        $this->assertSame('Picsearch bot', $detector->getCrawlerName());
    }

    public function testPingdomBot()
    {
        $detector = new CrawlerDetector();

        $this->assertTrue($detector->isCrawler('Pingdom.com'));

        $this->assertSame('Pingdom Bot', $detector->getCrawlerName());
    }

    public function testQuerySeekerSpider()
    {
        $detector = new CrawlerDetector();

        $this->assertTrue($detector->isCrawler('QuerySeekerSpider'));

        $this->assertSame('QuerySeekerSpider', $detector->getCrawlerName());
    }

    public function testRedditBot()
    {
        $detector = new CrawlerDetector();

        $this->assertTrue($detector->isCrawler('redditbot'));

        $this->assertSame('Reddit Bot', $detector->getCrawlerName());
    }

    public function testRogerbot()
    {
        $detector = new CrawlerDetector();

        $this->assertTrue($detector->isCrawler('rogerbot'));

        $this->assertSame('Rogerbot', $detector->getCrawlerName());
    }

    public function testScreamingFrogSEOSpider()
    {
        $detector = new CrawlerDetector();

        $this->assertTrue($detector->isCrawler('Screaming Frog SEO Spider'));

        $this->assertSame('Screaming Frog SEO Spider', $detector->getCrawlerName());
    }

    public function testScreenerBot()
    {
        $detector = new CrawlerDetector();

        $this->assertTrue($detector->isCrawler('ScreenerBot'));

        $this->assertSame('ScreenerBot', $detector->getCrawlerName());
    }

    public function testSemrushBot()
    {
        $detector = new CrawlerDetector();

        $this->assertTrue($detector->isCrawler('SemrushBot'));

        $this->assertSame('Semrush Bot', $detector->getCrawlerName());
    }

    public function testSensikaBot()
    {
        $detector = new CrawlerDetector();

        $this->assertTrue($detector->isCrawler('SensikaBot'));

        $this->assertSame('Sensika Bot', $detector->getCrawlerName());
    }

    public function testSEOENGBot()
    {
        $detector = new CrawlerDetector();

        $this->assertTrue($detector->isCrawler('SEOENGBot'));
        $this->assertTrue($detector->isCrawler('SEOENGWorldBot'));

        $this->assertSame('SEOENGBot', $detector->getCrawlerName());
    }

    public function testSeznamBot()
    {
        $detector = new CrawlerDetector();

        $this->assertTrue($detector->isCrawler('SeznamBot'));
        $this->assertTrue($detector->isCrawler('SklikBot'));
        $this->assertTrue($detector->isCrawler('Seznam screenshot-generator'));

        $this->assertSame('Seznam Bot', $detector->getCrawlerName());
    }

    public function testShopWiki()
    {
        $detector = new CrawlerDetector();

        $this->assertTrue($detector->isCrawler('ShopWiki'));

        $this->assertSame('ShopWiki', $detector->getCrawlerName());
    }

    public function testSilverReader()
    {
        $detector = new CrawlerDetector();

        $this->assertTrue($detector->isCrawler('SilverReader'));

        $this->assertSame('SilverReader', $detector->getCrawlerName());
    }

    public function testSimplePie()
    {
        $detector = new CrawlerDetector();

        $this->assertTrue($detector->isCrawler('SimplePie'));

        $this->assertSame('SimplePie', $detector->getCrawlerName());
    }

    public function testSISTRIXCrawler()
    {
        $detector = new CrawlerDetector();

        $this->assertTrue($detector->isCrawler('SISTRIX Crawler'));

        $this->assertSame('SISTRIX Crawler', $detector->getCrawlerName());
    }

    public function testSogouSpider()
    {
        $detector = new CrawlerDetector();

        $this->assertTrue($detector->isCrawler('Sogou web spider'));
        $this->assertTrue($detector->isCrawler('Sogou inst spider'));
        $this->assertTrue($detector->isCrawler('Sogou Pic spider'));
        $this->assertTrue($detector->isCrawler('New-Sogou-Spider'));

        $this->assertSame('Sogou Spider', $detector->getCrawlerName());
    }

    public function testSosoSpider()
    {
        $detector = new CrawlerDetector();

        $this->assertTrue($detector->isCrawler('Sosospider'));
        $this->assertTrue($detector->isCrawler('Sosoimagespider'));

        $this->assertSame('Soso Spider', $detector->getCrawlerName());
    }

    public function testSuperfeedrBot()
    {
        $detector = new CrawlerDetector();

        $this->assertTrue($detector->isCrawler('Superfeedr bot'));

        $this->assertSame('Superfeedr Bot', $detector->getCrawlerName());
    }

    public function testSpinn3r()
    {
        $detector = new CrawlerDetector();

        $this->assertTrue($detector->isCrawler('Spinn3r'));

        $this->assertSame('Spinn3r', $detector->getCrawlerName());
    }

    public function testSputnikBot()
    {
        $detector = new CrawlerDetector();

        $this->assertTrue($detector->isCrawler('SputnikBot'));
        $this->assertTrue($detector->isCrawler('SputnikImageBot'));

        $this->assertSame('Sputnik Bot', $detector->getCrawlerName());
    }

    public function testSurveyBot()
    {
        $detector = new CrawlerDetector();

        $this->assertTrue($detector->isCrawler('SurveyBot'));

        $this->assertSame('Survey Bot', $detector->getCrawlerName());
    }

    public function testTinEyeCrawler()
    {
        $detector = new CrawlerDetector();

        $this->assertTrue($detector->isCrawler('TinEye-bot'));

        $this->assertSame('TinEye Crawler', $detector->getCrawlerName());
    }

    public function testTinyTinyRSS()
    {
        $detector = new CrawlerDetector();

        $this->assertTrue($detector->isCrawler('Tiny Tiny RSS'));

        $this->assertSame('Tiny Tiny RSS', $detector->getCrawlerName());
    }

    public function testTurnitinBot()
    {
        $detector = new CrawlerDetector();

        $this->assertTrue($detector->isCrawler('TurnitinBot'));

        $this->assertSame('TurnitinBot', $detector->getCrawlerName());
    }

    public function testTweetedTimesBot()
    {
        $detector = new CrawlerDetector();

        $this->assertTrue($detector->isCrawler('TweetedTimes Bot'));

        $this->assertSame('TweetedTimes Bot', $detector->getCrawlerName());
    }

    public function testTweetmemeBot()
    {
        $detector = new CrawlerDetector();

        $this->assertTrue($detector->isCrawler('TweetmemeBot'));

        $this->assertSame('Tweetmeme Bot', $detector->getCrawlerName());
    }

    public function testTwitterbot()
    {
        $detector = new CrawlerDetector();

        $this->assertTrue($detector->isCrawler('Twitterbot'));

        $this->assertSame('Twitterbot', $detector->getCrawlerName());
    }

    public function testUptimeRobot()
    {
        $detector = new CrawlerDetector();

        $this->assertTrue($detector->isCrawler('UptimeRobot'));

        $this->assertSame('Uptime Robot', $detector->getCrawlerName());
    }

    public function testURLAppendBot()
    {
        $detector = new CrawlerDetector();

        $this->assertTrue($detector->isCrawler('URLAppendBot'));

        $this->assertSame('URLAppendBot', $detector->getCrawlerName());
    }

    public function testVisualSiteMapperCrawler()
    {
        $detector = new CrawlerDetector();

        $this->assertTrue($detector->isCrawler('VSMCrawler'));

        $this->assertSame('Visual Site Mapper Crawler', $detector->getCrawlerName());
    }

    public function testVoilaBot()
    {
        $detector = new CrawlerDetector();

        $this->assertTrue($detector->isCrawler('VoilaBot'));

        $this->assertSame('Voila Bot', $detector->getCrawlerName());
    }

    public function testW3CCSSValidator()
    {
        $detector = new CrawlerDetector();

        $this->assertTrue($detector->isCrawler('Jigsaw'));

        $this->assertSame('W3C CSS Validator', $detector->getCrawlerName());
    }

    public function testW3CI18NChecker()
    {
        $detector = new CrawlerDetector();

        $this->assertTrue($detector->isCrawler('W3C_I18n-Checker'));

        $this->assertSame('W3C I18N Checker', $detector->getCrawlerName());
    }

    public function testW3CLinkChecker()
    {
        $detector = new CrawlerDetector();

        $this->assertTrue($detector->isCrawler('W3C-checklink'));

        $this->assertSame('W3C Link Checker', $detector->getCrawlerName());
    }

    public function testW3CMarkupValidationService()
    {
        $detector = new CrawlerDetector();

        $this->assertTrue($detector->isCrawler('W3C_Validator'));

        $this->assertSame('W3C Markup Validation Service', $detector->getCrawlerName());
    }

    public function testW3CMobileOKChecker()
    {
        $detector = new CrawlerDetector();

        $this->assertTrue($detector->isCrawler('W3C-mobileOK'));

        $this->assertSame('W3C MobileOK Checker', $detector->getCrawlerName());
    }

    public function testW3CUnifiedValidator()
    {
        $detector = new CrawlerDetector();

        $this->assertTrue($detector->isCrawler('W3C_Unicorn'));

        $this->assertSame('W3C Unified Validator', $detector->getCrawlerName());
    }

    public function testWeSEESearch()
    {
        $detector = new CrawlerDetector();

        $this->assertTrue($detector->isCrawler('WeSEE'));
        $this->assertTrue($detector->isCrawler('WeSEE:Search'));

        $this->assertSame('WeSEE:Search', $detector->getCrawlerName());
    }

    public function testWebbCrawler()
    {
        $detector = new CrawlerDetector();

        $this->assertTrue($detector->isCrawler('WebbCrawler'));

        $this->assertSame('WebbCrawler', $detector->getCrawlerName());
    }

    public function testWotbox()
    {
        $detector = new CrawlerDetector();

        $this->assertTrue($detector->isCrawler('Wotbox'));

        $this->assertSame('Wotbox', $detector->getCrawlerName());
    }

    public function testYaCy()
    {
        $detector = new CrawlerDetector();

        $this->assertTrue($detector->isCrawler('yacybot'));

        $this->assertSame('YaCy', $detector->getCrawlerName());
    }

    public function testYahooSlurp()
    {
        $detector = new CrawlerDetector();

        $this->assertTrue($detector->isCrawler('Yahoo! Slurp'));
        $this->assertTrue($detector->isCrawler('Yahoo!-AdCrawler'));

        $this->assertSame('Yahoo! Slurp', $detector->getCrawlerName());
    }

    public function testYandexBot()
    {
        $detector = new CrawlerDetector();

        $this->assertTrue($detector->isCrawler('YandexBot'));
        $this->assertTrue($detector->isCrawler('YandexImages'));
        $this->assertTrue($detector->isCrawler('YandexAntivirus'));
        $this->assertTrue($detector->isCrawler('YandexDirect'));
        $this->assertTrue($detector->isCrawler('YandexBlogs'));
        $this->assertTrue($detector->isCrawler('YandexFavicons'));
        $this->assertTrue($detector->isCrawler('YandexImageResizer'));
        $this->assertTrue($detector->isCrawler('YandexNews'));
        $this->assertTrue($detector->isCrawler('YandexNewslinks'));
        $this->assertTrue($detector->isCrawler('YandexMetrika'));
        $this->assertTrue($detector->isCrawler('Yandex.Gazeta Bot)'));

        $this->assertSame('Yandex Bot', $detector->getCrawlerName());
    }

    public function testYetiNaverbot()
    {
        $detector = new CrawlerDetector();

        $this->assertTrue($detector->isCrawler('Yeti'));

        $this->assertSame('Yeti/Naverbot', $detector->getCrawlerName());
    }

    public function testYoudaoBot()
    {
        $detector = new CrawlerDetector();

        $this->assertTrue($detector->isCrawler('YoudaoBot'));

        $this->assertSame('Youdao Bot', $detector->getCrawlerName());
    }

    public function testYunyunBot()
    {
        $detector = new CrawlerDetector();

        $this->assertTrue($detector->isCrawler('YRSpider'));
        $this->assertTrue($detector->isCrawler('YYSpider'));

        $this->assertSame('Yunyun Bot', $detector->getCrawlerName());
    }

    public function testZookabot()
    {
        $detector = new CrawlerDetector();

        $this->assertTrue($detector->isCrawler('Zookabot'));

        $this->assertSame('Zookabot', $detector->getCrawlerName());
    }

    public function testZumBot()
    {
        $detector = new CrawlerDetector();

        $this->assertTrue($detector->isCrawler('ZumBot'));

        $this->assertSame('ZumBot', $detector->getCrawlerName());
    }

    public function testYottaaSiteMonitor()
    {
        $detector = new CrawlerDetector();

        $this->assertTrue($detector->isCrawler('YottaaMonitor'));

        $this->assertSame('Yottaa Site Monitor', $detector->getCrawlerName());
    }

    public function testYahooGemini()
    {
        $detector = new CrawlerDetector();

        $this->assertTrue($detector->isCrawler('Yahoo Ad monitoring yahoo-ad-monitoring-SLN24857'));

        $this->assertSame('Yahoo Gemini', $detector->getCrawlerName());
    }

    public function testOutbrain()
    {
        $detector = new CrawlerDetector();

        $this->assertTrue($detector->isCrawler('1Java outbrain'));

        $this->assertSame('Outbrain', $detector->getCrawlerName());
    }

    public function testHubPages()
    {
        $detector = new CrawlerDetector();

        $this->assertTrue($detector->isCrawler('HubPages crawlingpolicy'));

        $this->assertSame('HubPages', $detector->getCrawlerName());
    }

    public function testPinterest()
    {
        $detector = new CrawlerDetector();

        $this->assertTrue($detector->isCrawler('Pinterest/0.1 +http://www.pinterest.com/'));
        $this->assertTrue($detector->isCrawler('Pinterest/0.1 +http://pinterest.com/'));

        $this->assertSame('Pinterest', $detector->getCrawlerName());
    }

    public function testSite24x7WebsiteMonitoring()
    {
        $detector = new CrawlerDetector();

        $this->assertTrue($detector->isCrawler('Site24x7'));

        $this->assertSame('Site24x7 Website Monitoring', $detector->getCrawlerName());
    }

    public function testMonitorUs()
    {
        $detector = new CrawlerDetector();

        $this->assertTrue($detector->isCrawler('www.monitor.us'));

        $this->assertSame('Monitor.Us', $detector->getCrawlerName());
    }

    public function testLycos()
    {
        $detector = new CrawlerDetector();

        $this->assertTrue($detector->isCrawler('lycos'));

        $this->assertSame('Lycos', $detector->getCrawlerName());
    }

    public function testInktomiSlurp()
    {
        $detector = new CrawlerDetector();

        $this->assertTrue($detector->isCrawler('Slurp'));

        $this->assertSame('Inktomi Slurp', $detector->getCrawlerName());
    }

    public function testSpeedy()
    {
        $detector = new CrawlerDetector();

        $this->assertTrue($detector->isCrawler('Speedy Spider'));

        $this->assertSame('Speedy', $detector->getCrawlerName());
    }

    public function testScoutJet()
    {
        $detector = new CrawlerDetector();

        $this->assertTrue($detector->isCrawler('ScoutJet'));

        $this->assertSame('ScoutJet', $detector->getCrawlerName());
    }

    public function testNetResearchServer()
    {
        $detector = new CrawlerDetector();

        $this->assertTrue($detector->isCrawler('nrsbot'));
        $this->assertTrue($detector->isCrawler('netresearch'));

        $this->assertSame('NetResearchServer', $detector->getCrawlerName());
    }

    public function testScooter()
    {
        $detector = new CrawlerDetector();

        $this->assertTrue($detector->isCrawler('scooter'));

        $this->assertSame('Scooter', $detector->getCrawlerName());
    }

    public function testGigabot()
    {
        $detector = new CrawlerDetector();

        $this->assertTrue($detector->isCrawler('gigabot'));

        $this->assertSame('Gigabot', $detector->getCrawlerName());
    }

    public function testCharlotte()
    {
        $detector = new CrawlerDetector();

        $this->assertTrue($detector->isCrawler('charlotte'));

        $this->assertSame('Charlotte', $detector->getCrawlerName());
    }

    public function testPompos()
    {
        $detector = new CrawlerDetector();

        $this->assertTrue($detector->isCrawler('Pompos'));

        $this->assertSame('Pompos', $detector->getCrawlerName());
    }

    public function testichiro()
    {
        $detector = new CrawlerDetector();

        $this->assertTrue($detector->isCrawler('ichiro'));

        $this->assertSame('ichiro', $detector->getCrawlerName());
    }

    public function testPagePeeker()
    {
        $detector = new CrawlerDetector();

        $this->assertTrue($detector->isCrawler('PagePeeker'));

        $this->assertSame('PagePeeker', $detector->getCrawlerName());
    }

    public function testWebThumbnail()
    {
        $detector = new CrawlerDetector();

        $this->assertTrue($detector->isCrawler('WebThumbnail'));

        $this->assertSame('WebThumbnail', $detector->getCrawlerName());
    }

    public function testWillowInternetCrawler()
    {
        $detector = new CrawlerDetector();

        $this->assertTrue($detector->isCrawler('Willow Internet Crawler'));

        $this->assertSame('Willow Internet Crawler', $detector->getCrawlerName());
    }

    public function testEmailWolf()
    {
        $detector = new CrawlerDetector();

        $this->assertTrue($detector->isCrawler('EmailWolf'));

        $this->assertSame('EmailWolf', $detector->getCrawlerName());
    }

    public function testNetLyzerFastProbe()
    {
        $detector = new CrawlerDetector();

        $this->assertTrue($detector->isCrawler('NetLyzer FastProbe'));

        $this->assertSame('NetLyzer FastProbe', $detector->getCrawlerName());
    }

    public function testADMantX()
    {
        $detector = new CrawlerDetector();

        $this->assertTrue($detector->isCrawler('ADmantX Platform Semantic Analyzer - ADmantX Inc. - www.admantx.com'));

        $this->assertSame('ADMantX', $detector->getCrawlerName());
    }

    public function testServerDensity()
    {
        $detector = new CrawlerDetector();

        $this->assertTrue($detector->isCrawler('Server Density Service Monitoring 5'));

        $this->assertSame('Server Density', $detector->getCrawlerName());
    }

    public function testBot()
    {
        $detector = new CrawlerDetector();

        $this->assertTrue($detector->isCrawler('nuhk'));
        $this->assertTrue($detector->isCrawler('TsolCrawler'));
        $this->assertTrue($detector->isCrawler('Yammybot'));
        $this->assertTrue($detector->isCrawler('Openbot'));
        $this->assertTrue($detector->isCrawler('Gulper Web Bot'));
        $this->assertTrue($detector->isCrawler('grub-client'));
        $this->assertTrue($detector->isCrawler('Download Demon'));
        $this->assertTrue($detector->isCrawler('SearchExpress'));
        $this->assertTrue($detector->isCrawler('Microsoft URL Control'));
        $this->assertTrue($detector->isCrawler('borg'));
        $this->assertTrue($detector->isCrawler('altavista'));
        $this->assertTrue($detector->isCrawler('teoma'));
        $this->assertTrue($detector->isCrawler('blitzbot'));
        $this->assertTrue($detector->isCrawler('oegp'));
        $this->assertTrue($detector->isCrawler('furlbot'));
        $this->assertTrue($detector->isCrawler('http%20client'));
        $this->assertTrue($detector->isCrawler('polybot'));
        $this->assertTrue($detector->isCrawler('htdig'));
        $this->assertTrue($detector->isCrawler('mogimogi'));
        $this->assertTrue($detector->isCrawler('larbin'));
        $this->assertTrue($detector->isCrawler('scrubby'));
        $this->assertTrue($detector->isCrawler('searchsight'));
        $this->assertTrue($detector->isCrawler('seekbot'));
        $this->assertTrue($detector->isCrawler('semanticdiscovery'));
        $this->assertTrue($detector->isCrawler('snappy'));
        $this->assertTrue($detector->isCrawler('vortex'));
        $this->assertTrue($detector->isCrawler('zao'));
        $this->assertTrue($detector->isCrawler('zeal'));
        $this->assertTrue($detector->isCrawler('fast-webcrawler'));
        $this->assertTrue($detector->isCrawler('converacrawler'));
        $this->assertTrue($detector->isCrawler('dataparksearch'));
        $this->assertTrue($detector->isCrawler('findlinks'));
        $this->assertTrue($detector->isCrawler('BrowserMob'));
        $this->assertTrue($detector->isCrawler('HttpMonitor'));
        $this->assertTrue($detector->isCrawler('ThumbShotsBot'));
        $this->assertTrue($detector->isCrawler('URL2PNG'));
        $this->assertTrue($detector->isCrawler('ZooShot'));
        $this->assertTrue($detector->isCrawler('GomezA'));
        $this->assertTrue($detector->isCrawler('Catchpoint bot'));
        $this->assertTrue($detector->isCrawler('Google SketchUp'));
        $this->assertTrue($detector->isCrawler('Read%20Later'));
        $this->assertTrue($detector->isCrawler('Minimo'));
        $this->assertTrue($detector->isCrawler('RackspaceBot'));

        $this->assertSame('Bot', $detector->getCrawlerName());
    }

    public function testNutchbasedBot()
    {
        $detector = new CrawlerDetector();

        $this->assertTrue($detector->isCrawler('Nutch'));

        $this->assertSame('Nutch-based Bot', $detector->getCrawlerName());
    }

    public function testGenericBot()
    {
        $detector = new CrawlerDetector();

        $this->assertTrue($detector->isCrawler('sebot'));
        $this->assertTrue($detector->isCrawler('crawler'));
        $this->assertTrue($detector->isCrawler('archiver'));
        $this->assertTrue($detector->isCrawler('transcoder'));
        $this->assertTrue($detector->isCrawler('spider'));

        $this->assertSame('Generic Bot', $detector->getCrawlerName());
    }
}
