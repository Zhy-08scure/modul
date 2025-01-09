
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
      ##Not supported
      #Need recheck
      // Support 
      $supported = [
      ##   "earnow" => "earnow",
      ##   "earnnow" => "earnow",
      ##   "earnowon" => "earnow",
      ##   "earnow.online" => "earnow",
         "clks" => "clks",
         "clkspro" => "clkspro",
         "clks.pro" => "clkspro",
         "clk pro" => "clk pro",
         "clks pro" => "clks pro",
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
         "chainfo" => "Chainfo",
         "chainfo.xyz" => "Chainfo",
         "linksflame" => "linksflame",
         "try2link" => "try2link",
         "trylink" => "trylink",
         "linkpay" => "linkpay",
         #"pay.inc" => "pay.inc",
      ##   "cuty" => "cuty",
      ##   "cuty.io" => "cuty",
         "cbshort" => "cbshort",
         "ouo" => "ouo",
         "ouo.io" => "ouo",
         "mgnet" => "mgnet",
      ##   "fc.lc" => "fclc",
      ##   "fclc" => "fclc",
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
		##	"1short" => "1Short",
		   "urlcutpo" => "Urlcutpo",
		##   "btcutio" => "BtcUtio",
			"linkrexx" => "linkrex",
			"linkrex.net" => "linkrex",
			"click.pw" => "Click.pw",
			"mitly" => "Mitly",
			"gplinks" => "gplinks",
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
         #print "Ini error".n;
         print x($r['error'], n); l();
         break; // error from server, prevent your balance from being problematic
      } else {
         print x("No respon from error", n); sleep(5); break;
      }
     }
   }
}

function styl() {
   $shortlinks = new Shortlinks(ApiShortlink());
   info("shortlinks @".scr);
   while (true) {
      $r = run(host."links", h())[1];
      if (preg_match('/Just a moment.../', $r)) {
         cok(1); wc(); save('Cookie'); system('clear'); continue;
      }
      $list = explode('<div class="col-lg-4 mb-3">', $r);
      foreach ($list as $a => $short) {
         if ($a == 0)continue;
         $short_name = explode(' (', explode('<h5>', $short)[1])[0];
         $limit = trim(explode('/', explode('<i class="fa-solid fa-eye"></i>', $short)[1])[0]);
         $go = explode('"', explode('<a href="', $short)[1])[0];

         $n = strtolower($short_name);
         if (in_array($n, ['earnow', 'shortano', 'shortino', 'cuty', 'chainfo', 'shortsfly.me', 'urlsfly', 'urlsflyme', 'urlsfly.me', 'wefly', 'weflyme', 'wefly.me', 'clicksflyme', 'clicksfly.me'])) {
            continue;
         }
         for ($i = $limit; $i > 0; $i--) {
            $r = run($go, h(), '', 1)[0];
            print r.pan2.kb.p." Info: ".h.space("$short_name", o."$i ".kt.n);
            $shortlink = trim(explode(n, explode('location:', $r)[1])[0]);
            print_r($shortlink);exit;
            #print_r($r);exit;
            $url = "https://tertuyul.my.id/apikey/";
            $post_link = json_encode([
               'method' => 'result_link',
               'apikey' => save("Tertuyul_Apikey", 1),
               'url' => $shortlink
            ]);
            $pass = json_decode(curltu($url, $post_link), 1);
            if ($pass['url']) {
               timer(rand(120, 150));
               $r = run($pass['url'], h(), '', 1)[1];
               if (preg_match('/Just a moment.../', $r)) {
                  cok(1); wc(); save('Cookie'); system('clear'); continue;
               }
               $z = explode(" has", explode("text: '", $r)[1])[0];
               if ($z) {
                  z($z, akhir(1).hp);
                  $shortlinks->balsl(); sleep(2);
               } elseif (preg_match('/(IP LIMIT|ip limit|limit)/', $r)) {
                  print x("IP LIMIT REACHED", n);
                  l();
               } else {
                  file_put_contents("er.html", $r); exit;
                  print x("Failed to bypass, website might doing an update", n); l();
               }
               unlink('cookie.txt');
            }
            if ($pass['fail']) {
               print x($pass['fail'], n); l();
               sleep(2); break;
            }
            if ($pass['msg']) {
               print "Ini msg".n;
               print x($pass['msg'], n); l();
               sleep(2); break;
            }
            if ($pass['error']) {
               print "Ini error".n;
               print x($pass['error'], n); l();
               break; // error from server, prevent your balance from being problematic
            }
         }
      }
      print x("All supported shortlinks has been bypassed", n); l(); break;
   }
}
