
function curltu($url, $data = 0, $header = array()) {
   if ($data) {
      if (json_decode($data, 1)) {
         $header[] = "content-type: application/json";
      }
   }
   $ch = curl_init($url);
   curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
   curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
   curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
   curl_setopt($ch, CURLOPT_TIMEOUT, 60);
   curl_setopt($ch, CURLOPT_VERBOSE, 0);
   curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
   if (strlen($data) > 0) {
      curl_setopt($ch, CURLOPT_POST, true);
      curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
   } else {
      curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
   }
   $result = curl_exec($ch);
   $info = curl_getinfo($ch);
   curl_close($ch);
   return $result;
}
class Shortlinks {
   #private $url, $key, $provider, $function;
   private $url,$key,$function;
   public $provider;
   public function __construct() {
      menu(1, "Syid");
      menu(2, "Tertuyul"); l();
      print r.pan2.k."ENTER = ".h.sl.n;
      $pil = readline(input("Provider Shortlinks"));
      if ($pil == 1) {
         $this->host = "https://syid.my.id/";
         print pan2.p."Register".sd.h.'https://syid.my.id/'.d.n; l();
         $this->key = save("Syid_Apikey", 1);
         $this->provider_sl = "Syid";
      } elseif ($pil == 2) {
         $this->host = "https://tertuyul.my.id/apikey/";
         print pan2.p."Register".sd.h.'https://tertuyul.my.id/apikey'.d.n; l();
         $this->key = save("Tertuyul_Apikey", 1);
         $this->provider_sl = "Tertuyul";
      } else {
         if (sl == '[Tertuyul]' || preg_match('/tuyul/i', $sl)) {
            $this->host = "https://tertuyul.my.id/apikey/";
            print pan2.p."Register".sd.h.'https://tertuyul.my.id/apikey'.d.n; l();
            $this->key = save("Tertuyul_Apikey", 1);
            $this->provider_sl = "Tertuyul";
         } else {
            $this->host = "https://syid.my.id/";
            print pan2.p."Register".sd.h.'https://syid.my.id/'.d.n; l();
            $this->key = save("Syid_Apikey", 1);
            $this->provider_sl = "Syid";
         }
      }
   }
   public function balsl() {
      if ($this->provider_sl == "Syid") {
         $url = $this->host."in.php?apikey=".$this->key."&saldo=token";
         $r = run($url)[1];
         slow(cb.p.t("Api_SL", k."𓊈𒆜 ".h.$r.k." 𒆜𓊉")); l();
      } else {
         $post_user = json_encode([
            'method' => 'user_info',
            'apikey' => $this->key
         ]);
         $r = json_decode(curltu($this->host, $post_user), 1);
         slow(cb.p.t("Api_SL", k."𓊈𒆜 ".h.$r['balance'].k." 𒆜𓊉")); l();
      }
   }
   public function cd($seconds) {
      timer($seconds);
   }
   public function check($nama) {
      $check = strtolower($nama);
      print r.k."--[".p."?".k."] ".o."Checking "."$check";
      ##Not supported
      #Need recheck
      // Support
      if ($this->provider_sl == "Syid") {
         $supported = [
            /*##   "earnow" => "earnow",
            ##   "earnnow" => "earnow",
            ##   "earnowon" => "earnow",
            ##   "earnow.online" => "earnow",
            ##"clks" => "clks",
            ## "clkspro" => "clkspro",
            ##"clk pro" => "clk pro",
            ##"clks pro" => "clks pro",
            ##   "rsshort" => "rsshort",
            ##   "rsshortcom" => "rsshort",
            ##   "shortano" => "shortano",
            ##   "shortanoxx" => "shortano",
            ##   "shortano.link" => "shortano",
            ##   "shortino" => "shortino",
            ##   "shortino.link" => "shortino",
            ##   "rsfly" => "rsfly",
            ##   "rsfley" => "rsfly",
            ##   "revcut" => "revcut",*/
            "chainfo" => ["sl_link" => "chainfo.xyz","cd" => rand(90, 120)],
            "chainfoll" => ["sl_link" => "chainfo.xyz","cd" => rand(90, 120)],
            "chainfolll" => ["sl_link" => "chainfo.xyz","cd" => rand(90, 120)],
            "chainfo.xyz" => ["sl_link" => "chainfo.xyz","cd" => rand(90, 120)],
            "linksflame" => ["sl_link" => "linksflame",
               "cd" => rand(90, 120)],
            "try2link" => ["sl_link" => "try2link",
               "cd" => rand(60, 90)],
            "trylink" => ["sl_link" => "try2link",
               "cd" => rand(60, 90)],
            "linkpay" => ["sl_link" => "linkpay",
               "cd" => rand(60, 90)],
            "pay.inc" => ["sl_link" => "pay.inc", "cd" => rand(90, 120)],
            "cbshort" => ["sl_link" => "cbshort",
               "cd" => rand(60, 90)],
            "mgnet" => ["sl_link" => "mgnet",
               "cd" => rand(90, 120)],
            "cut-urls" => ["sl_link" => "cuturl",
               "cd" => rand(60, 90)],
            "1bitspace" => ["sl_link" => "1bit.space",
               "cd" => rand(90, 120)],
            "1bit.space" => ["sl_link" => "1bit.space",
               "cd" => rand(90, 120)],
            "clk" => ["sl_link" => "Clksh",
               "cd" => rand(60, 90)],
            "clksh" => ["sl_link" => "Clksh",
               "cd" => rand(60, 90)],
            "clk.sh" => ["sl_link" => "Clksh",
               "cd" => rand(60, 90)],
            "dutchycorp2" => ["sl_link" => "dutchycorp.space","cd" => rand(90, 120)],
            "dutchy corp 8" => ["sl_link" => "dutchycorp.ovh","cd" => rand(90, 120)],
            "cutsme" => ["sl_link" => "cutsme",
               "cd" => rand(70, 90)],
            "zshort.io" => ["sl_link" => "zshort.io",
               "cd" => rand(70, 90)],
            "shrinkearn" => ["sl_link" => "Shrinkearn",
               "cd" => rand(60, 90)],
            "shrink earn" => ["sl_link" => "Shrinkearn",
               "cd" => rand(60, 90)],
            "shrinkearn.com" => ["sl_link" => "Shrinkearn",
               "cd" => rand(60, 90)],
            "shrinkme.link" => ["sl_link" => "Shrinkme",
               "cd" => rand(60, 90)],
            "oii" => ["sl_link" => "oii",
               "cd" => rand(60, 90)],
            /* "adlink" => ["sl_link" => "adlink",
               "cd" => rand(90, 120)],
            "adlink.click" => ["sl_link" => "adlink",
               "cd" => rand(90, 120)],
            "adlink" => ["sl_link" => "link.adlink",
               "cd" => rand(90, 120)],
            "adlink.click" => ["sl_link" => "link.adlink.click",
               "cd" => rand(90, 120)],
               
            "shrinkme" => ["sl_link" => "Shrinkme",
               "cd" => rand(60, 90)],
            "shrinkme.io" => ["sl_link" => "Shrinkme",
               "cd" => rand(60, 90)],
            "exe" => ["sl_link" => "exe.io",
               "cd" => rand(60, 90)],
            "exeio" => ["sl_link" => "exe.io",
               "cd" => rand(60, 90)],
            "exe.io" => ["sl_link" => "exe.io",
               "cd" => rand(60, 90)],               
            "cuty" => ["sl_link" => "cuty.io",
               "cd" => rand(60, 90)],
            "cuty.io" => ["sl_link" => "cuty.io",
               "cd" => rand(60, 90)],
            "fclc" => ["sl_link" => "fc-lc.xyz",
               "cd" => rand(60, 90)],
            "fc.lc" => ["sl_link" => "fc-lc.xyz",
               "cd" => rand(60, 90)],
            "fc-lc" => ["sl_link" => "fc-lc.xyz",
               "cd" => rand(60, 90)],
            "fc lc" => ["sl_link" => "fc-lc.xyz",
               "cd" => rand(60, 90)],
            "linkx" => ["sl_link" => "linkrex.net",
               "cd" => rand(80, 100)],
            "linkrex" => ["sl_link" => "linkrex.net",
               "cd" => rand(80, 100)],
            "linkrexx" => ["sl_link" => "linkrex.net",
               "cd" => rand(80, 100)],
            "linkrex.net" => ["sl_link" => "linkrex.net",
               "cd" => rand(80, 100)], */
            "clickflcom" => ["sl_link" => "Clickflcom",
               "cd" => rand(90, 120)],
            "urlcut" => ["sl_link" => "Urlcutpo",
               "cd" => rand(90, 120)],
            "urlcutpo" => ["sl_link" => "Urlcutpo",
               "cd" => rand(90, 120)],
            "urlcutpro" => ["sl_link" => "Urlcutpo",
               "cd" => rand(90, 120)],
            /* "gplinks" => ["sl_link" => "gplinks",
               "cd" => rand(90, 120)],
            "gplinks.com" => ["sl_link" => "gplinks",
               "cd" => rand(90, 120)], */
            "pay cut" => ["sl_link" => "paycut.pro",
               "cd" => rand(90, 120)],
            "paycut" => ["sl_link" => "paycut.pro",
               "cd" => rand(90, 120)],
            "paycut.pro" => ["sl_link" => "paycut.pro",
               "cd" => rand(90, 120)],
            "c2g" => ["sl_link" => "c2g",
               "cd" => rand(90, 120)],
            "c2g link" => ["sl_link" => "c2g",
               "cd" => rand(90, 120)],
            "sproutech.us" => ["sl_link" => "sproutech.us",
               "cd" => rand(90, 120)],
            "adbitfly" => ["sl_link" => "adbitfly",
               "cd" => rand(90, 120)],
            "ez4short" => ["sl_link" => "ez4short",
               "cd" => rand(60, 90)],
            "linkjust.com" => ["sl_link" => "linkjust",
               "cd" => rand(60, 90)],
            "shortsme" => ["sl_link" => "shortsme",
               "cd" => rand(60, 90)],
            "ex-foary.com" => ["sl_link" => "ex-foary.com",
               "cd" => rand(60, 90)],
            "linkpay.top" => ["sl_link" => "linkpay.top",
               "cd" => rand(60, 90)],
            "droplink.co" => ["sl_link" => "droplink.co",
               "cd" => rand(60, 90)],
            "shrink.pe" => ["sl_link" => "Shrink.pe",
               "cd" => rand(90, 120)],
            "tii" => ["sl_link" => "tii",
               "cd" => rand(60, 90)],
            "tii.la" => ["sl_link" => "tii",
               "cd" => rand(60, 90)],
            "bindaaslinks.com" => ["sl_link" => "bindaaslinks.com",
               "cd" => rand(90, 120)],
            "droplink.site" => ["sl_link" => "droplink.site",
               "cd" => rand(60, 90)],
            "cutto" => ["sl_link" => "cutto",
               "cd" => rand(60, 90)],
            "beingtek" => ["sl_link" => "beingtek",
               "cd" => rand(90, 120)],
            "fast2.link" => ["sl_link" => "fast2.link",
               "cd" => rand(60, 120)],
            "10short.com" => ["sl_link" => "10short.com",
               "cd" => rand(90, 120)],
            "vplink.in" => ["sl_link" => "vplink.in",
               "cd" => rand(90, 120)],
            "lkfms.pro" => ["sl_link" => "lkfms.pro",
               "cd" => rand(90, 120)],
            "udlinks" => ["sl_link" => "udlinks",
               "cd" => rand(60, 90)],
            "rglinks" => ["sl_link" => "rglinks",
               "cd" => rand(60, 90)],
            "earnlinks" => ["sl_link" => "earnlinks",
               "cd" => rand(60, 90)],
            "urlspay" => ["sl_link" => "urlspay",
               "cd" => rand(60, 90)],
            "shortxlinks.xyz" => ["sl_link" => "shortxlinks.xyz",
               "cd" => rand(90, 120)],
            "link.speedlinkurl.com" => ["sl_link" => "link.speedlinkurl.com",
               "cd" => rand(60, 90)],
            "thshort.com" => ["sl_link" => "thshort.com",
               "cd" => rand(60, 90)],
            "easycut.io" => ["sl_link" => "easycut.io",
               "cd" => rand(60, 90)],
            "thshort.com" => ["sl_link" => "thshort.com",
               "cd" => rand(60, 90)],
            "inviscash.site" => ["sl_link" => "inviscash.site",
               "cd" => rand(60, 90)],
            "shortxlinks.com" => ["sl_link" => "shortxlinks.com",
               "cd" => rand(90, 120)],
            "linkpays.in" => ["sl_link" => "linkpays.in",
               "cd" => rand(60, 90)],
            "test1.shorthop.fun" => ["sl_link" => "test1.shorthop.fun",
               "cd" => rand(60, 90)],
            "ouo" => ["sl_link" => "ouo.io",
               "cd" => rand(30, 90)],
            "ouo.io" => ["sl_link" => "ouo.io",
               "cd" => rand(30, 90)],
            "tmearn" => ["sl_link" => "tmearn", "cd" => rand(90, 120)],
            "linksly" => ["sl_link" => "linksly.co",
               "cd" => rand(60, 120)],
            "linksly.co" => ["sl_link" => "linksly.co",
               "cd" => rand(60, 120)],
            /* "mitly" => ["sl_link" => "mitly.us",
               "cd" => rand(90, 120)],
            "mitly us" => ["sl_link" => "mitly.us",
               "cd" => rand(90, 120)],
            "mitly.us" => ["sl_link" => "mitly.us",
               "cd" => rand(90, 120)], */
            /* ##"bit4me" => ["sl_link" => "bit4me", "cd" => rand(60, 90)],
            ##"cutlink" => "cutlink",
            ##"cutlink.xyz" => "cutlink",


            ##"coinclix.co" => "Coinclix.co",
            ##"ctr.sh" => "Ctr.sh",
            ##"nevcoins short free" => "NevCoins Short Free",
            ##"tmearn" => "Tmearn",
            ##"oii.io" => "Oii.io",
            ##"dutchy corp 8" => "Dutchy Corp 8",
            ##"linkrexx" => "linkrex",
            ##"shortox" => "Shortox",
            ##"ouo" => "ouo",
            ##"ouo.io" => "ouo",
            ##"exe" => "exe",
            ##"exe.io" => "exe",
            ##   "cuty" => "cuty",
            ##   "cuty.io" => "cuty",
            ##   "fc.lc" => "fclc",
            ##   "fclc" => "fclc",
            ##	"1short" => "1Short",
            ##   "btcutio" => "BtcUtio",
            ##	"noshortido" => "Noshortido",
            ## "coinclix" => "coinclix",
*/
               
               
            "linksfly.link" => ["sl_link" => "linksfly.link",
               "cd" => rand(90, 120)],
            "linksfly" => ["sl_link" => "LinksFly",
               "cd" => rand(90, 120)],
            "linksfly.me" => ["sl_link" => "LinksFly",
               "cd" => rand(90, 120)],
            "shortsfly" => ["sl_link" => "ShortFly",
               "cd" => rand(90, 120)],
            "shortsfly.me" => ["sl_link" => "ShortFly",
               "cd" => rand(90, 120)],
            "urlsfly" => ["sl_link" => "urlsfly",
               "cd" => rand(90, 120)],
            "urlsfly.me" => ["sl_link" => "urlsfly",
               "cd" => rand(90, 120)],
            "wefly" => ["sl_link" => "Wefly",
               "cd" => rand(90, 120)],
            "wefly.me" => ["sl_link" => "Wefly",
               "cd" => rand(90, 120)],
            "clicksfly" => ["sl_link" => "ClicksFly",
               "cd" => rand(90, 120)],
            "clicksflyme" => ["sl_link" => "ClicksFly",
               "cd" => rand(90, 120)],
            "clicksfly.me" => ["sl_link" => "ClicksFly",
               "cd" => rand(90, 120)]

            /*
	#
			"clicksfly.com" => "fly.com",
	#		"owllink.net" => "owllink",
	#		"birdurls.com" => "birdurls",
	#		"illink.net" => "illink",
	#		"insfly.pw" => "insfly",
			"revcut.net" => "revcut",
			"kyshort.xyz" => "kyshort",
			"wez.info" => "wez",
			"megaurl.in" => "megaurl",
			"megafly.in" => "megafly",
			"usalink.io" => "usalink",
			"cashurl.win" => "cashurl",
	#		"shorti.io" => "shorti",
	#		"inlinks.online" => "inlinks",
	#		"bitss.sbs" => "bitss",
         // 			"adcorto" => "adcorto",
         // 			"urlhives" => "UrlHives",
         // 			"linkhives" =>"LinkHives",
         // 			"revcut" => "revcut",*/
         ];
      } else {
         $supported = [
           /* ##   "earnow" => ["sl_link" => "earnnow", 'cd' => rand(120, 150)],
            ##   "earnnow" => "earnow",
            ##   "earn now" => "earnow",
            ##   "earn now 2" => "earnow",
            ##   "earnowon" => "earnow",
            ##   "earnow.online" => "earnow",
            ##   "rsshort" => "rsshort",
            ##   "rsshortcom" => "rsshort",
            ##   "shortano" => "shortano",
            ##   "shortanoxx" => "shortano",
            ##   "shortano.link" => "shortano",
            ##   "shortino" => "shortino",
            ##   "shortino.link" => "shortino",
            ##"noshortido" => "Noshortido",
            ##"8occom" => "8occom",

            ##"shortino" => ["sl_link" => "shortino","cd" => rand(90, 120)],*/
            "shortino.site" => ["sl_link" => "shortino","cd" => rand(150, 170)],
            "rsfly" => ["sl_link" => "rsfly",
               "cd" => rand(90, 120)],
            "rsfley" => ["sl_link" => "rsfly",
               "cd" => rand(90, 120)],
            "site.short-ino" => ["sl_link" => "Site.short-ino",
               "cd" => rand(90, 120)],
            "site.short-ino" => ["sl_link" => "shortino.site",
               "cd" => rand(90, 120)],
            "clks" => ["sl_link" => "clks",
               "cd" => rand(150, 180)],
            "clkspro" => ["sl_link" => "clks",
               "cd" => rand(150, 180)],
            "clks.pro" => ["sl_link" => "clks",
               "cd" => rand(150, 180)],
            "clk pro" => ["sl_link" => "clks",
               "cd" => rand(150, 180)],
            "clks pro" => ["sl_link" => "clks",
               "cd" => rand(150, 180)],
            "clk" => ["sl_link" => "clksh",
               "cd" => rand(90, 120)],
            "clksh" => ["sl_link" => "clksh",
               "cd" => rand(90, 120)],
       /*     "clik.si" => ["sl_link" => "ClikSi",
               "cd" => rand(90, 120)],*/
            "clk.sh" => ["sl_link" => "clksh",
               "cd" => rand(90, 120)],
            "revcut" => ["sl_link" => "revcut",
               "cd" => rand(120, 150)],
            "revcut.net" => ["sl_link" => "revcut",
               "cd" => rand(120, 150)],
            "cutlink" => ["sl_link" => "cutlink",
               "cd" => rand(120, 150)],
            "cutlink.xyz" => ["sl_link" => "cutlink",
               "cd" => rand(120, 150)],
            "urlcut" => ["sl_link" => "Urlcutpo",
               "cd" => rand(120, 150)],
            "urlcutpo" => ["sl_link" => "Urlcutpo",
               "cd" => rand(120, 150)],
            "urlcutpro" => ["sl_link" => "Urlcutpo",
               "cd" => rand(120, 150)],
            /*"faho" => ["sl_link" => "Faho",
               "cd" => rand(120, 150)],*/
            "faho.us" => ["sl_link" => "Faho", "cd" => rand(120, 150)],
            "chainfo" => ["sl_link" => "Chainfo",
               "cd" => rand(120, 150)],
            "chainfoll" => ["sl_link" => "Chainfo",
               "cd" => rand(120, 150)],
            "chainfolll" => ["sl_link" => "Chainfo",
               "cd" => rand(120, 150)],
            "chainfo.xyz" => ["sl_link" => "Chainfo",
               "cd" => rand(120, 150)],
            "try2link" => ["sl_link" => "try2link",
               "cd" => rand(80, 100)],
            "trylink" => ["sl_link" => "try2link",
               "cd" => rand(80, 100)],
            "linkpay" => ["sl_link" => "linkpay",
               "cd" => rand(90, 120)],
            "pay.inc" => ["sl_link" => "pay.inc", "cd" => rand(90, 120)],
           /* "cbshort" => ["sl_link" => "cbshort",
               "cd" => rand(90, 120)],*/
            "ouo" => ["sl_link" => "ouo",
               "cd" => rand(30, 90)],
            "ouo.io" => ["sl_link" => "ouo",
               "cd" => rand(30, 90)],
            "mgnet" => ["sl_link" => "mgnet",
               "cd" => rand(90, 120)],
            "cut-urls" => ["sl_link" => "cuturl",
               "cd" => rand(90, 120)],
            "1bitspace" => ["sl_link" => "1bitspace",
               "cd" => rand(90, 120)],
            "dutchycorp" => ["sl_link" => "dutchycorp",
               "cd" => rand(90, 120)],
            "dutchycorp2" => ["sl_link" => "dutchycorp2",
               "cd" => rand(90, 120)],
            "dutchy corp 8" => ["sl_link" => "dutchy corp 8",
               "cd" => rand(90, 120)],
            "cutsme" => ["sl_link" => "cutsme",
               "cd" => rand(80, 100)],
            "adlink" => ["sl_link" => "adlink",
               "cd" => rand(110, 120)],
            "adlink.click" => ["sl_link" => "adlink",
               "cd" => rand(110, 120)],
            "zshort.io" => ["sl_link" => "zshort",
               "cd" => rand(80, 100)],
            "shrinkearn" => ["sl_link" => "ShrinkEarn",
               "cd" => rand(80, 100)],
            "shrinkearn.com" => ["sl_link" => "ShrinkEarn",
               "cd" => rand(80, 100)],
            "shrinkme" => ["sl_link" => "ShrinkMe",
               "cd" => rand(80, 100)],
            "shrinkme.io" => ["sl_link" => "ShrinkMe",
               "cd" => rand(80, 100)],
            "exe" => ["sl_link" => "exe",
               "cd" => rand(80, 100)],
            "exeio" => ["sl_link" => "exe",
               "cd" => rand(80, 100)],
            "exe.io" => ["sl_link" => "exe",
               "cd" => rand(80, 100)],
            "exalink.fun" => ["sl_link" => "exe",
               "cd" => rand(80, 100)],
            "clickflcom" => ["sl_link" => "Clickflcom",
               "cd" => rand(90, 120)],
            "short" => ["sl_link" => "short",
               "cd" => rand(90, 120)],
            "shortox" => ["sl_link" => "Shortox",
               "cd" => rand(90, 120)],
            "shortox.com" => ["sl_link" => "Shortox",
               "cd" => rand(90, 120)],
            "linkx" => ["sl_link" => "linkrex",
               "cd" => rand(80, 100)],
            "linkrex" => ["sl_link" => "linkrex",
               "cd" => rand(80, 100)],
            "linkrexx" => ["sl_link" => "linkrex",
               "cd" => rand(80, 100)],
            "linkrex.net" => ["sl_link" => "linkrex",
               "cd" => rand(80, 100)],
            "pwclick" => ["sl_link" => "Click.pw",
               "cd" => rand(80, 100)],
            "powclick" => ["sl_link" => "powclick",
               "cd" => rand(80, 100)],
            "click.pw" => ["sl_link" => "Click.pw",
               "cd" => rand(80, 100)],
            "mitly" => ["sl_link" => "Mitly",
               "cd" => rand(90, 120)],
            "mitly us" => ["sl_link" => "Mitly",
               "cd" => rand(90, 120)],
            "mitly.us" => ["sl_link" => "Mitly",
               "cd" => rand(90, 120)],
            "gplinks" => ["sl_link" => "gplinks",
               "cd" => rand(90, 120)],
            "gplinks.com" => ["sl_link" => "gplinks",
               "cd" => rand(90, 120)],
            "bitad" => ["sl_link" => "bitad",
               "cd" => rand(90, 120)],
            "bitad.org" => ["sl_link" => "bitad",
               "cd" => rand(90, 120)],
            "pay cut" => ["sl_link" => "paycut.pro",
               "cd" => rand(90, 120)],
            "paycut.pro" => ["sl_link" => "paycut.pro",
               "cd" => rand(90, 120)],
            "kyshort" => ["sl_link" => "kyshort",
               "cd" => rand(80, 100)],
            "kyshortll" => ["sl_link" => "kyshort",
               "cd" => rand(80, 100)],
            "kyshortlll" => ["sl_link" => "kyshort",
               "cd" => rand(80, 100)],
            "kyshort.xyz" => ["sl_link" => "kyshort",
               "cd" => rand(80, 100)],
            "earn4click" => ["sl_link" => "earn4click",
               "cd" => rand(90, 120)],
            "4click" => ["sl_link" => "earn4click",
               "cd" => rand(90, 120)],
            "clicksfly.com" => ["sl_link" => "fly.com",
               "cd" => rand(120, 150)],
            "linksly" => ["sl_link" => "linksly",
               "cd" => rand(60, 120)],
            "linksly.co" => ["sl_link" => "linksly",
               "cd" => rand(60, 120)],
            "wez.info" => ["sl_link" => "wez",
               "cd" => rand(60, 120)],
            "megaurl" => ["sl_link" => "megaurl",
               "cd" => rand(90, 120)],
            "megaurl.in" => ["sl_link" => "megaurl",
               "cd" => rand(90, 120)],
            "megafly" => ["sl_link" => "megafly",
               "cd" => rand(90, 120)],
            "megafly.in" => ["sl_link" => "megafly",
               "cd" => rand(90, 120)],
            "usalink.io" => ["sl_link" => "usalink",
               "cd" => rand(90, 120)],
            "cashurl.win" => ["sl_link" => "cashurl",
               "cd" => rand(90, 120)],
            "avashortener.com" => ["sl_link" => "avashortener.com",
               "cd" => rand(90, 120)],
            "easyshort" => ["sl_link" => "easyshort",
               "cd" => rand(90, 120)],
            "easyshortxyz" => ["sl_link" => "easyshort",
               "cd" => rand(90, 120)],
            "exfoary" => ["sl_link" => "ex-foary.com",
               "cd" => rand(90, 120)],
            "foary.com" => ["sl_link" => "ex-foary.com",
               "cd" => rand(90, 120)],
            "ex-foary.com" => ["sl_link" => "ex-foary.com",
               "cd" => rand(90, 120)],
            "paycut" => ["sl_link" => "paycut",
               "cd" => rand(90, 120)],
            "linkpay" => ["sl_link" => "linkpay.top",
               "cd" => rand(90, 120)],
            "linkpay.top" => ["sl_link" => "linkpay.top",
               "cd" => rand(90, 120)],
            "linkzon" => ["sl_link" => "linkzon",
               "cd" => rand(90, 120)],
            "cryptolink" => ["sl_link" => "cryptolink",
               "cd" => rand(90, 120)],
            "shortslink" => ["sl_link" => "shortslink",
               "cd" => rand(90, 120)],
            "wlink.us" => ["sl_link" => "wlink.us",
               "cd" => rand(120, 150)],
            "flyad" => ["sl_link" => "Flyad",
               "cd" => rand(110, 120)],
            "shorthop" => ["sl_link" => "ShortHop",
               "cd" => rand(120, 150)],
            "ailinks" => ["sl_link" => "AILinks",
               "cd" => rand(150, 180)],
            "cryptoradio" => ["sl_link" => "CryptoRadio",
               "cd" => rand(150, 180)],
            "shortclick" => ["sl_link" => "ShortClick",
               "cd" => rand(120, 150)],
            "onylinks.com" => ["sl_link" => "onylinks.com","cd" => rand(90, 110)],#onlylinks normal 60 second
            "aysolink.online" => ["sl_link" => "aysolink.com","cd" => rand(90, 110)],


            #"linkslice" => ["sl_link" => "linkslice", "cd" => rand(90, 120)],
            #"btcutio" => ["sl_link" => "BtcUtio", "cd" => rand(90, 120)],
            #"thundertea" => ["sl_link" => "thundertea", "cd" => rand(90, 120)],
            #"oiiio" => ["sl_link" => "oii.io", "cd" => rand(90, 120)],
            #"tmearn" => ["sl_link" => "tmearn", "cd" => rand(90, 120)],
            #"1shortio" => ["sl_link" => "1shortio", "cd" => rand(90, 120)],
            #"shortsurl" => ["sl_link" => "shortsurl", "cd" => rand(90, 120)],
            #"trliink" => ["sl_link" => "try2link", "cd" => rand(90, 120)],




            ##"linksflame" => ["sl_link" => "linksflame", "cd" => rand(90, 150)],
            ##"droplink" => ["sl_link" => "droplink", "cd" => rand(90, 120)],
            ##"ez4short" => ["sl_link" => "ez4short", "cd" => rand(90, 120)],
            ##"hatelink" => ["sl_link" => "hatelink", "cd" => rand(120, 150)],
            ##"bit4me" => ["sl_link" => "bit4me", "cd" => rand(90, 120)],
            ##"1shortio" => "1short",
            ##	"1short" => "1Short",
            ##"thundertea" => "Thundertea",
            ##"btcutio" => "BtcUtio",
            ##"coinclix.co" => "Coinclix.co",
            ##"ctr.sh" => "Ctr.sh",
            ##"nevcoins short free" => "NevCoins Short Free",
            ##"tmearn" => "Tmearn",
            ##"oii.io" => "Oii.io",
            ##"shortclick" => "Shortclick",
            ##   "cuty" => "cuty",
            ##   "cuty.io" => "cuty",
            ##   "fc.lc" => "fclc",
            ##   "fclc" => "fclc",
            ##   "btcutio" => "BtcUtio",
            ##	"noshortido" => "Noshortido",
            ## "coinclix" => "coinclix",
            ##"shortsurl" => "shortsurl",
            ##"free earn" => "Free earn",
            ##"zirof" => "Zirof",*/


            "linksfly" => ["sl_link" => "fly",
               "cd" => rand(120, 150)],
            "linksfly.me" => ["sl_link" => "fly",
               "cd" => rand(120, 150)],
            "shortsfly" => ["sl_link" => "fly",
               "cd" => rand(120, 150)],
            "shortsfly.me" => ["sl_link" => "fly",
               "cd" => rand(120, 150)],
            "urlsfly" => ["sl_link" => "fly",
               "cd" => rand(120, 150)],
            "urlsfly.me" => ["sl_link" => "fly",
               "cd" => rand(120, 150)],
            "wefly" => ["sl_link" => "fly",
               "cd" => rand(120, 150)],
            "wefly.me" => ["sl_link" => "fly",
               "cd" => rand(120, 150)],
            "clicksfly" => ["sl_link" => "fly",
               "cd" => rand(120, 150)],
            "clicksflyme" => ["sl_link" => "fly",
               "cd" => rand(120, 150)],
            "clicksfly.me" => ["sl_link" => "fly",
               "cd" => rand(120, 150)]


            /*
			"easycut.io" => "easycut",
	#
			"clicksfly.com" => "fly.com",
			"linksly.co" => "linksly",
	#		"owllink.net" => "owllink",
	#		"birdurls.com" => "birdurls",
	#		"illink.net" => "illink",
	#		"insfly.pw" => "insfly",
			"wez.info" => "wez",
			"megaurl.in" => "megaurl",
			"megafly.in" => "megafly",
			"usalink.io" => "usalink",
			"cashurl.win" => "cashurl",
	#		"shorti.io" => "shorti",
	#		"shrinkme.link" => "shrinkme",
	#		"inlinks.online" => "inlinks",
	#		"bitss.sbs" => "bitss",
			"linkjust.com" => "linkjust",
			"ex-foary.com" => "exfoary"*/
            // 			"linksly" => "linksly",
            // 			"adcorto" => "adcorto",
            // 			"c2g" => "C2G",
            // 			"c2g link" => "C2G",
            // 			"urlhives" => "UrlHives",
            // 			"linkhives" =>"LinkHives",
            // 			"shortsme" => "shortsme",
         ];
      }
      sleep(1);
      $filter = $supported[$check];
      if ($filter) {
         print r.centang.h."Support to bypass";
         sleep(1); #print r;
         return ["status" => 1,
            "shortlink_name" => $filter['sl_link'],
            "cd" => $filter['cd']];
      } else {
         print x("Doesn't support to bypass", d);
         sleep(1); print r;
         return ["status" => 0,
            "message" => "not supported shortlink"];
      }
   }
   public function Bypass($name, $shortlink) {
      if ($this->provider_sl == "Syid") {
         while (1) {
            $r = run($this->host."in.php?apikey=".$this->key."&name=$name&url=$shortlink&reff=53");
            $url = explode('"&', explode('url:"', $r[1])[1])[0];
            if (!$r) {
               unlink('cookie.txt');
               print x("Server Down", n);sleep(1);break;
            }
            if ($url) {
               return ['url' => $url, 'status' == 'success'];
               #return $url;
            } elseif (preg_match('/not support link/i', $r[1])) {
               unlink('cookie.txt');print x($r[1], d); l();
               return ['status' => 'fail', 'i' => 0];
            } elseif (preg_match('/bypass error/i', $r[1])) {
               unlink('cookie.txt');print x($r[1], n); 
               l();sleep(1);break;
            } else {
               unlink('cookie.txt');
               print x($r[1], n); l(); break;
               #print_r($r[1]);return 0;#exit;
            }}
      } else {
         while (1) {
            $post_link = json_encode([
               'method' => 'result_link',
               'url' => $shortlink,
               'apikey' => $this->key
            ]);
            $r = json_decode(curltu($this->host, $post_link), 1);
            if ($r['url']) {
               return ['url' => $r['url'], 'status' == 'success'];
               #return $r;
            } elseif ($r['fail']) {
               # not support
               if (preg_match('/link not-support/i', $r['fail'])) {
                  unlink('cookie.txt');
                  print x($r['fail'], n); l();
                  return ['status' => 'fail', 'i' => 0];
               }else{
                  unlink('cookie.txt');
                  print x($r['fail'], n);
                  l();sleep(2);break;
               }
            } elseif ($r['msg']) {
               if (preg_match('/waiting|next|request/i', $r['msg'])) {
                  # Status waiting/next request 
                  unlink('cookie.txt');
                  print x($r['msg'], n);sleep(5);continue;
               }
               unlink('cookie.txt');
               print x($r['msg'], n);l();sleep(2);break;
            } elseif ($r['error']) {
               # ex: server error or maintenance
               unlink('cookie.txt');print "Ini error".n;
               print x($r['error'], n); l();continue; //Klo pke continue d ulang prosesnya
               // error from server, prevent your balance from being problematic
            } else {
               unlink('cookie.txt');
               print x("No respon from server", n); l();
               sleep(3); break;
            }
         }
      }
   }
}
function space($teks, $msg) {
   $len = 15; $lenstr = $len-strlen($teks);
   return $teks.str_repeat(" ", $lenstr).p."| ".$msg.d;
}


#Syid
/*
- Support name shortlink
- c2g
- adlink
- sproutech.us
- adbitfly
- ez4short
- Shrinkme
- linkjust
- shortsme
- try2link
- ex-foary.com
- linkpay.top
- droplink.co
- mgnet, 1bit.space
- paycut.pro
- Clksh
- Shrink.pe
- Shrinkearn
- tii
- LinksFly, ShortFly, ClicksFly, Wefly, urlsfly, linksfly.link
- 10short.com
- udlinks
- rglinks
- earnlinks
- cutto
- beingtek
- urlspay
- shortxlinks.xyz
- link.speedlinkurl.com
- chainfo.xyz
- zshort.io
- thshort.com
- easycut.io
- lkfms.pro
- thshort.com
- fast2.link
- inviscash.site
- shortxlinks.com
- linkpays.in
- test1.shorthop.fun
- bindaaslinks.com
- droplink.site

- Add the time listed after successful bypass
- Tambahkan waktu yang tercantum setelah sukses bypass

- Example Earn-pepe Captcha faucet
- 1 Captcha sukses menggunakan 0.15 token
- $result = curl('https://earn-pepe.com/member/faucet',$header);
- $ll = explode('"', explode('/cap/', $result)[1])[0];
- $cook = 'cookie_earn_pepe';
- https://syid.my.id/in.php?apikey=ngeyelan_784341&name=earnpp&url=$ll&cook=$cook

- https://syid.my.id/in.php?apikey=ngeyelan_784341&url=url_shortlink

- list = https://syid.my.id/in.php?apikey=L4mer_41720534927&name=list


shortclick.xyz
shrinkmy.site
shrinkme.link
linksfly.net
clk.wiki
clk.asia
wefly.me
clicksfly.me
shortsfly.me
clk.kim
urlsfly.me
link.adlink
link.adlink.click
btcut.io
linkslice.io
rsfly.pro
lkfms.pro
easycut.io
fast2.link
zshort.io
gpthub.net
m.wdu.info
m.viewfr.com
m.tinygo.co
m.addurl.biz
m.wez.info
shortano.link
shortino.link
earnow.online
ccurl.net
clik.pw
go.paylinks.cloud
oii
shortsme
tmearn
loptelink.com
dutchycorp.space
dutchycorp.space/shp2
dutchycorp.ovh
fc-lc.xyz
linksfly.me
shcut.us
kyshort.xyz
exe.io
tpi.li
chainfo.xyz
crypto-radio.eu
claimercorner
mgnet.xyz
ex-foary.com
shrinkme.ink
ouo.io
linksly.co
linkpay.top
paycut.pro
adbitfly.com
cryptolink.click
bit4me.info
clik.si
insfly.pw
kiddyshort.com
mitly.us
dollarurl.com
pass.cryptopaid.net
ser7.crazyblog.in
adrev.link
cuty.io
axe.st
eazyurl.xyz
1bit.space
indfaucet
elifzi.site
bindaaslinks.com
beingtek
cutto
droplink.site
shorthop
shortxlinks.xyz
link.speedlinkurl.com
inviscash.site
shortxlinks.com
10short.com
udlinks
rglinks
earnlinks
linkjust
linkpays.in
urlspay
test1.shorthop.fun
ez4short.com
linkrex.net
themesilk
shortino.site
teamthunderofficial.eu.org
best-cash.net
droplink.co
avashortener.com
shortox.com
deeploveshorte.site
go.btshort.in
short.pe
*/
