
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
function ApiShortlink() {
   if (!file_exists("../Tertuyul_Apikey")) {
      print pan2.p."Register".sd.h."https://tertuyul.my.id/apikey/".n; l();
   }
   return save("Tertuyul_Apikey", 1);
}
function tuyul() {
   $url = "https://tertuyul.my.id/apikey/";
   $post_user = json_encode([
      'method' => 'user_info',
      'apikey' => save("Tertuyul_Apikey", 1)
   ]);
   $ty = json_decode(curltu($url, $post_user), 1);
   slow(cb.p.t("Api_SL", k."𓊈𒆜 ".h.$ty['balance'].k." 𒆜𓊉")); l();
}
Class Shortlinks{
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
      #Not supported
      #Need recheck
      $supported = [
         #"earnow" => "earnow",
         "clks" => "clks",
         "clkspro" => "clkspro",
         "clk pro" => "clk pro",
         "clks pro" => "clks pro",
         #"rsshort" => "rsshort",
         "shortano" => "shortano",
         "shortino" => "shortino",
         #"rsfly" => "rsfly",
         "revcut" => "revcut",
         "chainfo" => "chainfo",
         "linksflame" => "linksflame",
         "try2link" => "try2link",
         "trylink" => "trylink",
         "linkpay" => "linkpay",
         "pay.inc" => "pay.inc",
         "cuty" => "cuty",
         "cbshort" => "cbshort",
         "ouo" => "ouo",
         "mgnet" => "mgnet",
         "fc.lc" => "fclc",
         "cut-urls" => "cuturl",
         "1bitspace" => "1bitspace",
         "clksh" => "clksh",
         "dutchycorp2" => "dutchycorp2",
         "cutsme" => "cutsme"
         #"shortino.link" => "shortino" #Support
         /*		"adlink.click" => "adlink",
			"easycut.io" => "easycut",
	#		"clk.sh" => "clk.sh",
			"shrinkearn.com" => "shrinkearn",
			"clicksfly.com" => "fly.com",
			"shortox.com" => "shortox",
			"exe.io" => "exe",
			"linksly.co" => "linksly",
	#		"owllink.net" => "owllink",
	#		"birdurls.com" => "birdurls",
	#		"illink.net" => "illink",
	#		"insfly.pw" => "insfly",
			"cutlink.xyz" => "cutlink",
			"revcut.net" => "revcut",
			"bitad.org" => "bitad",
			"urlcut.pro" => "urlcut",
			"kyshort.xyz" => "kyshort",
			"linkrex.net" => "linkrex",
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
         // 			"shrinkme" => "ShrinkMe",
         // 			"shrinkearn" => "ShrkEarn",
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
      if ($filter) {
         print r.centang.h."Support to bypass";
         sleep(1); print r;
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
         'apikey' => $this->apikey, #save("Tertuyul_Apikey"),
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
         print "Ini error".n;
         print x($r['error'], n); l();
         break; // error from server, prevent your balance from being problematic
      } else {
         print x("No respon from error", n); sleep(5); break;
      }
     }
   }
}