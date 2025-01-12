
function curltu($url, $data) {
   $ch = curl_init($url);
   curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
   curl_setopt($ch, CURLOPT_HTTPHEADER, [
      'Content-Type: application/json'
   ]);
   curl_setopt($ch, CURLOPT_POST, true);
   curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
   $response = curl_exec($ch);
   if (curl_errno($ch)) {
      $error_msg = curl_error($ch);
   }
   curl_close($ch);
   if (isset($error_msg)) {
      return 'Error: ' . $error_msg;
   }
   return $response;
}
function CheckSl() {
   print pan2.p."Register".sd.h.provider_regsl.n; l();
   $apisl = save(provider_sl."_Apikey", 1);
   if (provider_sl == "Tertuyul") {
      $shortlinks = New ApiTertuyul($apisl);
   }
   if (provider_sl == "Syid") {
      $shortlinks = New ApiSyid($apisl);
   }
   #sleep(1); system('clear'); 
   return $apisl;
}
function MenuSl() {
   menu(1, "Tertuyul");
   menu(2, "Syid");l();
   print r.pan2.k."ENTER = ".h.sl.n;
   $pil = readline(input("Provider Shortlinks"));
   if ($pil == 1) {
      define("provider_sl", "Tertuyul");
      define("provider_regsl", "https://tertuyul.my.id/apikey");
      $apisl = CheckSl();
   } elseif ($pil == 2) {
      define("provider_sl", "Syid");
      define("provider_regsl", "https://syid.my.id/");
      $apisl = CheckSl();
   } else {
      if (sl == '[Tertuyul]') {
         define("provider_sl", "Tertuyul");
         define("provider_regsl", "https://tertuyul.my.id/apikey");
         $apisl = CheckSl();
      }else{
         define("provider_sl", "Syid");
         define("provider_regsl", "https://syid.my.id/");
         $apisl = CheckSl();
      }
   }
   return $apisl;
}
Class ApiTertuyul{
   public $apikey;
   function __construct($apikey) {
      $this->host = "https://tertuyul.my.id/apikey/";
      $this->apikey = $apikey;
   }
   function balsl() {
      $url = $this->host;
      $post_user = json_encode([
         'method' => 'user_info',
         'apikey' => $this->apikey
      ]);
      $r = json_decode(curltu($url, $post_user), 1);
      slow(cb.p.t("Api_SL", k."𓊈𒆜 ".h.$r['balance'].k." 𒆜𓊉")); l();
   }
   function check($nama) {
      $check = strtolower($nama);
      print r.k."--[".p."?".k."] ".o."Checking "."$check";
      ##Not supported
      #Need recheck
      // Support 
      $supported = [
      ##   "earnow" => "earnow",
      ##   "earnnow" => "earnow",
      ##   "earnowon" => "earnow",
      ##   "earnow.online" => "earnow",
      ##   "rsshort" => "rsshort",
      ##   "rsshortcom" => "rsshort",
      ##   "shortano" => "shortano",
      ##   "shortanoxx" => "shortano",
      ##   "shortano.link" => "shortano",
      ##   "shortino" => "shortino",
      ##   "shortino.link" => "shortino",
      ##   "rsfly" => "rsfly",
      ##   "rsfley" => "rsfly",
         "clks" => "clks",
         "clkspro" => "clkspro",
         "clks.pro" => "clkspro",
         "clk pro" => "clk pro",
         "clks pro" => "clks pro",
         "revcut" => "revcut",
         "chainfo" => "Chainfo",
         "chainfo.xyz" => "Chainfo",
         "linksflame" => "linksflame",
         "try2link" => "try2link",
         "trylink" => "trylink",
         "linkpay" => "linkpay",
         #"pay.inc" => "pay.inc",
         "cbshort" => "cbshort",
         "ouo" => "ouo",
         "ouo.io" => "ouo",
         "mgnet" => "mgnet",
         "cut-urls" => "cuturl",
         "1bitspace" => "1bitspace",
         "clksh" => "clksh",
         "clk.sh" => "clksh",
         "dutchycorp2" => "dutchycorp2",
         "cutsme" => "cutsme",
         "adlink.click" => "adlink",
         "zshort.io" => "zshort",
         "shrinkearn" => "shrinkearn",
         "shrinkearn.com" => "shrinkearn",
			"exe" => "exe",
			"exe.io" => "exe",
			"shrinkme" => "ShrinkMe",
			"shrinkme.io" => "ShrinkMe",
			"clickflcom" => "Clickflcom",
			"shortox" => "Shortox",
			"shortox.com" => "Shortox",
		   "urlcutpo" => "Urlcutpo",
			"linkrexx" => "linkrex",
			"linkrex.net" => "linkrex",
			"click.pw" => "Click.pw",
			"mitly" => "Mitly",
			"gplinks" => "gplinks",
         ##"shortclick" => "Shortclick",
      ##   "cuty" => "cuty",
      ##   "cuty.io" => "cuty",
      ##   "fc.lc" => "fclc",
      ##   "fclc" => "fclc",
		##	"1short" => "1Short",
		##   "btcutio" => "BtcUtio",
		##	"noshortido" => "Noshortido",
		## "coinclix" => "coinclix",
			
			
         "linksfly" => "fly",
         "linksfly.me" => "fly",
         "shortsfly" => "fly",
         "shortsfly.me" => "fly",
         "urlsfly" => "fly",
         "urlsfly.me" => "fly",
         "wefly" => "fly",
         "wefly.me" => "fly",
         "clicksfly" => "fly",
         "clicksflyme" => "fly",
         "clicksfly.me" => "fly"
         
         
         /*
			"easycut.io" => "easycut",
	#		
			"clicksfly.com" => "fly.com",
			"linksly.co" => "linksly",
	#		"owllink.net" => "owllink",
	#		"birdurls.com" => "birdurls",
	#		"illink.net" => "illink",
	#		"insfly.pw" => "insfly",
			"cutlink.xyz" => "cutlink",
			"revcut.net" => "revcut",
			"bitad.org" => "bitad",
			"kyshort.xyz" => "kyshort",
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
         // 			"adlink" => "adlink",
         // 			"revcut" => "revcut",
         // 			"cutlink" => "cutlink",
         // 			"ez4short" => "ez4short"
      ];
      sleep(1);
      $filter = $supported[$check];
      print_r($filter);exit;
      if ($filter) {
         print r.centang.h."Support to bypass";
         sleep(1); #print r;
         return ["status" => 1,
            "shortlink_name" => $filter];
      } else {
         print x("Doesn't support to bypass", d);
         sleep(1); print r;
         return ["status" => 0,
            "message" => "not supported shortlink"];
      }
   }
   function Bypass($name, $shortlink) {
     while(1){
      $post_link = json_encode([
         'method' => 'result_link',
         'apikey' => $this->apikey,
         'url' => $shortlink
      ]);
      $r = json_decode(curltu($this->host, $post_link), 1);
      if ($r['url']) {
         return $r;
      } elseif ($r['fail']) {
         print x($r['fail'], n); l();
         sleep(2); break;
      } elseif ($r['msg']) {
         #print "Ini msg".n;
         print x($r['msg'], n); l();
         sleep(2); break;
      } elseif ($r['error']) {
         #print "Ini error".n;
         print x($r['error'], n); l();
         break; // error from server, prevent your balance from being problematic
      } else {
         print x("No respon from error", n); sleep(5); break;
      }
     }
   }
}
Class ApiSyid {
   public $apikey;
   function __construct($apikey) {
      # https://syid.my.id/in.php?apikey=you_apikey&name=name_link&url=url_shortlink&reff=code_reff
      #code reff = 53
      $this->host = "https://syid.my.id";
      $this->apikey = $apikey; # L4mer_41720534927
      #$this-reff
   }
   function balsl() {
      $url = $this->host."/in.php?apikey=".$this->apikey."&saldo=token";
      $r = run($url)[1];
      slow(cb.p.t("Api_SL", k."𓊈𒆜 ".h.$r.k." 𒆜𓊉")); l();
   }
   function check($nama) {
      $check = strtolower($nama);
      print r.k."--[".p."?".k."] ".o."Checking "."$check";
      ##Not supported
      #Need recheck
      // Support
      $supported = [
         ##   "earnow" => "earnow",
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
         "revcut" => "revcut",
         "chainfo" => "chainfo.xyz",
         "chainfo.xyz" => "chainfo.xyz",
         "linksflame" => "linksflame",
         "try2link" => "try2link",
         "trylink" => "trylink",
         "linkpay" => "linkpay",
         #"pay.inc" => "pay.inc",
         "cbshort" => "cbshort",
         "mgnet" => "mgnet",
         "cut-urls" => "cuturl",
         "1bit.space" => "1bit.space",
         "clksh" => "Clksh",
         "clk.sh" => "Clksh",
         "dutchycorp2" => "dutchycorp2",
         "cutsme" => "cutsme",
         "adlink" => "adlink",
         "adlink.click" => "adlink",
         "zshort.io" => "zshort.io",
         "shrinkearn" => "Shrinkearn",
         "shrinkearn.com" => "Shrinkearn",
         "shrinkme" => "Shrinkme",
         "shrinkme.link" => "Shrinkme",
         "clickflcom" => "Clickflcom",
         "shortox.com" => "Shortox",
         "urlcutpo" => "Urlcutpo",
         "linkrex.net" => "linkrex",
         "click.pw" => "Click.pw",
         "gplinks" => "gplinks",
         "c2g" => "c2g",
         "c2g link" => "c2g",
         "sproutech.us" => "sproutech.us",
         "adbitfly" => "adbitfly",
         "ez4short" => "ez4short",
         "linkjust.com" => "linkjust",
         "shortsme" => "shortsme",
         "ex-foary.com" => "ex-foary.com",
         "linkpay.top" => "linkpay.top",
         "droplink.co" => "droplink.co",
         "paycut.pro" => "paycut.pro",
         "shrink.pe" => "Shrink.pe",
         "tii" => "tii",
         "tii.la" => "tii",
         "bindaaslinks.com" => "bindaaslinks.com",
         "droplink.site" => "droplink.site",
         "cutto" => "cutto",
         "beingtek" => "beingtek",
         "fast2.link" => "fast2.link",
         "10short.com" => "10short.com",
         "vplink.in" => "vplink.in",
         "lkfms.pro" => "lkfms.pro",
         "udlinks" => "udlinks",
         "rglinks" => "rglinks",
         "earnlinks" => "earnlinks",
         "urlspay" => "urlspay",
         "shortxlinks.xyz" => "shortxlinks.xyz",
         "link.speedlinkurl.com" => "link.speedlinkurl.com",
         "thshort.com" => "thshort.com",
         "easycut.io" => "easycut.io",
         "thshort.com" => "thshort.com",
         "inviscash.site" => "inviscash.site",
         "shortxlinks.com" => "shortxlinks.com",
         "linkpays.in" => "linkpays.in",
         "test1.shorthop.fun" => "test1.shorthop.fun",


         ##"mitly" => "Mitly",
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

         "linksfly.link" => "linksfly.link",
         "linksfly" => "LinksFly",
         "linksfly.me" => "LinksFly",
         "shortsfly" => "ShortFly",
         "shortsfly.me" => "ShortFly",
         "urlsfly" => "urlsfly",
         "urlsfly.me" => "urlsfly",
         "wefly" => "Wefly",
         "wefly.me" => "Wefly",
         "clicksfly" => "ClicksFly",
         "clicksflyme" => "ClicksFly",
         "clicksfly.me" => "ClicksFly"

         /*
	#
			"clicksfly.com" => "fly.com",
			"linksly.co" => "linksly",
	#		"owllink.net" => "owllink",
	#		"birdurls.com" => "birdurls",
	#		"illink.net" => "illink",
	#		"insfly.pw" => "insfly",
			"cutlink.xyz" => "cutlink",
			"revcut.net" => "revcut",
			"bitad.org" => "bitad",
			"kyshort.xyz" => "kyshort",
			"wez.info" => "wez",
			"megaurl.in" => "megaurl",
			"megafly.in" => "megafly",
			"usalink.io" => "usalink",
			"cashurl.win" => "cashurl",
	#		"shorti.io" => "shorti",
	#		"inlinks.online" => "inlinks",
	#		"bitss.sbs" => "bitss",
         // 			"linksly" => "linksly",
         // 			"adcorto" => "adcorto",
         // 			"urlhives" => "UrlHives",
         // 			"linkhives" =>"LinkHives",
         // 			"revcut" => "revcut",
         // 			"cutlink" => "cutlink",*/
      ];
      sleep(1);
      $filter = $supported[$check];
      if ($filter) {
         print r.centang.h."Support to bypass";
         sleep(1); #print r;
         return ["status" => 1,
            "shortlink_name" => $filter];
      } else {
         print x("Doesn't support to bypass", d);
         sleep(1); print r;
         return ["status" => 0,
            "message" => "not supported shortlink"];
      }
   }
   function Bypass($name, $shortlink) {
      a:
      $r = run($this->host."/in.php?apikey=".$this->apikey."&name=$name&url=$shortlink&reff=53");
      $url = explode('"&', explode('url:"', $r[1])[1])[0];
      if (!$r) {
         print x("Server Down", n);
         return 0;
      }
      if ($url) {
         return $url;
      }elseif(preg_match('/Not support link/', $r[1])){
         print x($r[1], d);l(); return 0;
         #print_r($r[1]);return 0;
      }else{
         print_r($r[1]);exit;
      }
   }
}