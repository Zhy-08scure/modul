
system('clear'); #error_reporting(0);
const
yt = "https://youtube.com/@zhy_08",
abuglp = "\033[1;30m", b = "\033[1;34m", c = "\033[1;36m", d = "\033[0m", h = "\033[1;32m", k = "\033[1;33m", m = "\033[1;31m", p = "\033[1;37m", u = "\033[1;35m", mc = "\033[01;38;5;196m", m2o = "\033[01;38;5;202m", o = "\033[01;38;5;208m", o2k = "\033[01;38;5;214m", k2o = "\033[01;38;5;220m", kcerah = "\033[01;38;5;226m", k2p = "\033[01;38;5;228m", n = "\n", n2 = "\n\n", tb = "\t", tb2 = "\t\t", tp = k2o."❝ ", tp2 = k2o." ❞", dot = mc.' ⦿  ', r = "\r                                                      \r", r2 = "\r", sd = u." ]┈➤ ".p, hapus = "                                 ", cb = c.": ̗̀➛ ",
centang = "\033[0;104m\033[1;37m[✓]".d." ",
bp = "\033[0;104m\033[1;37m", bpkc = "\033[1;37m\033[0;104m",
kurang = "\033[0;104m\033[1;37m[\033[01;38;5;196m-\033[1;37m]".d." ", ori = "\033[0;104m\033[1;37m[\033[1;32m≠\033[1;37m]".d." ",
kb = b."[".d, kt = b."]".d, pan = mc." »  ", pan1 = mc." ⫸  ", pan2 = abuglp."❯".m."❯".p."❯ ", bg = mc." : ".d, bgb = b." : ".d, mp = "\033[101m\033[1;37m", pm = "\033[107m\033[1;31m";

function run($u, $h = 0, $p = 0, $cookie = 0, $lewat = 0) {
   while (true) {
      $ch = curl_init();
      curl_setopt($ch, CURLOPT_URL, $u);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
      curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
      curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
      curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
      curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 30);
      curl_setopt($ch, CURLOPT_COOKIE, TRUE);
      if ($cookie) {
         curl_setopt($ch, CURLOPT_COOKIEFILE, "cookie.txt");
         curl_setopt($ch, CURLOPT_COOKIEJAR, "cookie.txt");
      }
      if ($p) {
         curl_setopt($ch, CURLOPT_POST, true);
         curl_setopt($ch, CURLOPT_POSTFIELDS, $p);
      }
      if ($h) {
         curl_setopt($ch, CURLOPT_HTTPHEADER, $h);
      }
      curl_setopt($ch, CURLOPT_HEADER, true);
      $r = curl_exec($ch);
      if ($lewat) {
         return 0;
      }
      $c = curl_getinfo($ch);
      if (!$c) return "Curl Error : ".curl_error($ch); else {
         $hd = substr($r, 0, curl_getinfo($ch, CURLINFO_HEADER_SIZE));
         $bd = substr($r, curl_getinfo($ch, CURLINFO_HEADER_SIZE));
         curl_close($ch);
         if (!$bd) {
            print r.mc."Check your Connection!";
            sleep(2); print r; continue;
         }
         return array($hd, $bd);
      }
   }
}
function timer($t) {
   date_default_timezone_set("UTC"); print r;
   $timr = time()+$t;
   while (true):
   $res = $timr-time();
   if ($res < 1) {
      break;
   }
   print mc."\t 次のクレーム ".date("i", $res).abuglp.":".p.date("s", $res)." 請求する秒数 \r".d; sleep(1); endwhile;
}
function input($msg) {
   return c."╭{  ".kcerah."Input ".$msg.c."  }".n.c."╰┈➤ ".h;
}
function save($new, $univ = 0) {
   if ($univ) {
      if (file_exists("../$new")) {
         $cfg = file_get_contents("../$new");
      } else {
         $cfg = readline(input($new)); print n; file_put_contents("../$new", $cfg);
      }
      return $cfg;
   }
   if (file_exists($new)) {
      $cfg = file_get_contents($new);
   } else {
      $cfg = readline(input($new)); print n; file_put_contents($new, $cfg);
   }
   return $cfg;
}
function menu($no, $title) {
   print kb.p."$no".kt.u." $title".d.n;
}
function z($z, $l, $cetak = 0) {
   if ($cetak) {
      $len = 8; $lenstr = $len-strlen($z);
      return cetak(r2.bp."[✓]".d." ".p.$z.str_repeat(" ", $lenstr).sd.h.$l.d, 30000);
   }
   return slow(r2.bp."[✓]".d." ".h.$z.$l.d);
}
function x($x, $l) {
   return r.p."[".m."!".p."] ".m.$x.$l.d;
}
function ori($b, $v, $tab = 0) {
   if ($tab) {
      $len = 10; $lenstr = $len-strlen($b);
      return slow(r2.bp."[≠]".d." ".p.$b.str_repeat(" ", $lenstr).sd.h.$v.d);
   }
   $len = 8; $lenstr = $len-strlen($b);
   return slow(r2.bp."[≠]".d." ".p.$b.str_repeat(" ", $lenstr).sd.h.$v.d);
}
function pls($b, $v, $tab = 0) {
   if ($tab) {
      $len = 10; $lenstr = $len-strlen($b);
      return slow(r2.bp."[+]".d." ".p.$b.str_repeat(" ", $lenstr).sd.h.$v.d);
   }
   $len = 8; $lenstr = $len-strlen($b);
   return slow(r2.bp."[+]".d." ".p.$b.str_repeat(" ", $lenstr).sd.h.$v.d);
}
function krg($e, $v, $tab = 0) {
   if ($tab) {
      $len = 10; $lenstr = $len-strlen($e);
      return slow(r2.bp."[-]".d." ".p.$e.str_repeat(" ", $lenstr).sd.h.$v.d);
   }
   $len = 8; $lenstr = $len-strlen($e);
   return slow(r2.bp."[-]".d." ".p.$e.str_repeat(" ", $lenstr).sd.h.$v.d);
}
function t($label, $msg, $tab = 0) {
   if ($tab) {
      $len = 10; $lenstr = $len-strlen($label);
      return $label.str_repeat(" ", $lenstr).sd.$msg.d;
   }
   $len = 8; $lenstr = $len-strlen($label);
   return $label.str_repeat(" ", $lenstr).sd.$msg.d;
}
function limit($msg, $coin, $sd = 0) {
   if ($sd) {
      $len = 19; $lenstr = $len-strlen($msg);
      return r.p."[".m."!".p."] ".mc.$msg.str_repeat(" ", $lenstr).$coin.d;
   }
   $len = 19; $lenstr = $len-strlen($msg);
   return r.p."[".m."!".p."] ".mc.$msg.str_repeat(" ", $lenstr).sd.$coin.d;
}
function slow($str) {
   foreach (str_split($str) as $rt) {
      echo $rt; usleep(30000);
   } print n;
}
function cetak($str, $t) {
   $linkrr = str_split($str);
   foreach ($linkrr as $linkz) {
      echo $linkz; usleep($t);
   }
}
function cok($cf = 0) {
   if ($cf) {
      cetak(r2.mc."Cloudflare Detected, Update Your Cookie".d, 15000); print n;
      unlink('cookie.txt'); unlink("Cookie"); sleep(1);
      $p = readline("Press ENTER to continue");
      if ($p == "ENTER") {
         return 0;
      }system('clear');
   } else {
      cetak(r2.mc."Cookie Expired, Update Your Cookie".d, 15000); print n;
      unlink('cookie.txt'); unlink("Cookie"); sleep(1);
      /*$p = readline("Press ENTER to continue");
      if ($p == "ENTER") {
         return 0;
      }system('clear');*/
   }
}
function l() {
   print p.str_repeat("─", 50).d.n;
}
function wc() {
   system('clear');
   print str_repeat(c."=", 50).n;
   print m.'          ___                  _           _'.n;
   print m.'         /___\_   _ _ __ /\/\ (_)_ __   __| |'.n;
   print m.'        //  // | | | ‘__/    \| | ‘_ \ / _` |'.n;
   print p.'       / \_//| |_| | | / /\/\ \ | | | | (_| |'.n;
   print p.'       \___/  \__,_|_| \/    \/_|_| |_|\__,_|'.n.n;
   print str_repeat(c."=", 50).n; info(scr." ".ver);
   print pan1.p."Register: ".h.reg.n;
   print pan1.p."Captcha : ".h.tCap.n; l();
}
function ban() {
   $ap = json_decode(file_get_contents("http://ip-api.com/json"), 1);
   system('clear');
   if ($ap) {
      $tz = $ap["timezone"];
      date_default_timezone_set($tz);
      $hari = date('l'); $tanggal = date("d-M-Y"); $waktu = date("H:i");
      $panjang = 50-strlen($hari.$tanggal.$waktu); $spasi = floor($panjang/2);
      $lokasi = mp.$hari.str_repeat(" ", $spasi).$tanggal.str_repeat(" ", $spasi).$waktu;
      if ($panjang % 2 == 1) {
         $lokasi .= " ";
      }
      cetak($lokasi.n, 20000);
      cetak(pm.str_pad($ap['city'].", ".$ap['regionName'].", ".$ap['country'], 50, " ", STR_PAD_BOTH).d.n, 20000);
      cetak(b.str_repeat("=", 50), 2500); print n;
   } else {
      date_default_timezone_set("UTC"); return "UTC";
   }
   cetak(m.str_pad("_____         _____ _       _", 50, " ", STR_PAD_BOTH).n, 15000);
   cetak(m.str_pad("|     |_ _ ___|     |_|___ _| |", 50, " ", STR_PAD_BOTH).n, 15000);
   cetak(p.str_pad("|  |  | | |  _| | | | |   | . |", 50, " ", STR_PAD_BOTH).n, 15000);
   cetak(p.str_pad("|_____|___|_| |_|_|_|_|_|_|___|", 50, " ", STR_PAD_BOTH).n, 15000);
   print b.str_repeat(o."─", 16).p." ❝ ".h."のスクリプト".p." ❞ ".str_repeat(o."─", 16).n;
   title(' '.scr); print n;
   cetak(tb2."    \033[1;35mThanks To  :".n, 15000);
   cetak(mp.str_pad("| Reyhan H | kakatoji |", 50, " ", STR_PAD_BOTH).d.n, 15000);
   cetak(pm.str_pad("| IEWIL OFFICIAL | bintang catur |", 50, " ", STR_PAD_BOTH).d.n, 15000);
   cetak(b.str_repeat("═", 16).c."元のバージョン ".ver.b.str_repeat("═", 16).n.d, 2500);
   system("termux-open-url ".yt); sleep(3);
}
function title($string) {
  $acssi = ["a" => ["┌─┐","├─┤","┴ ┴"],"b" => ["┌┐ ","├┴┐","└─┘"],"c" => ["┌─┐","│  ","└─┘"],"d" => ["┌┬┐"," ││","─┴┘"],"e" => ["┌─┐","├┤ ","└─┘"],"f" => ["┌─┐","├┤ ","└  "],"g" => ["┌─┐","│ ┬","└─┘"],"h" => ["┬ ┬","├─┤","┴ ┴"],"i" => ["┬","│","┴"],"j" => [" ┬"," │","└┘"],"k" => ["┬┌─","├┴┐","┴ ┴"],"l" => ["┬  ","│  ","┴─┘"],"m" => ["┌┬┐","│││","┴ ┴"],"n" => ["┌┐┌","│││","┘└┘"],"o" => ["┌─┐","│ │","└─┘"],"p" => ["┌─┐","├─┘","┴  "],"q" => ["┌─┐ ","│─┼┐","└─┘└"],"r" => ["┬─┐","├┬┘","┴└─"],"s" => ["┌─┐","└─┐","└─┘"],"t" => ["┌┬┐"," │ "," ┴ "],"u" => ["┬ ┬","│ │","└─┘"],"v" => ["┬  ┬","└┐┌┘"," └┘ "],"w" => ["┬ ┬","│││","└┴┘"],"x" => ["─┐ ┬","┌┴┬┘","┴ └─"],"y" => ["┬ ┬","└┬┘"," ┴ "],"z" => ["┌─┐","┌─┘","└─┘"]," "=>[" "," "," "],"1" => ["┬","│","┴"],  "2" => ["┌─┐","┌─┘","└─┘"],  "3" => ["┌─┐"," ├┤","└─┘"],"4" => ["┬ ┬","└─┤","  ┘"],"5" => ["┌─┐","└─┐","└─┘"],"6" => ["┌─┐","├─┐","└─┘"],"7" => ["┌─┐","  │","  ┘"],"8" => ["┌─┐","├─┤","└─┘"],"9" => ["┌─┐","└─┤","└─┘"],"0" => ["┌─┐","│ │","└─┘"]];

  $x = str_split($string); #print " ";
  foreach ($x as $data) {
    cetak(o.$acssi[$data][0], 2000);
  }
  cetak(" オンライン".n, 2000); #print " ";
  foreach ($x as $data) {
    cetak(o2k.$acssi[$data][1], 2000);
  }
  cetak(" クリエーター".bgb.p."Zhy_08".n, 2000); #print " ";
  foreach ($x as $data) {
    cetak(k2o.$acssi[$data][2], 2000);
  }
  cetak(" チャンネル  ".bgb.p."Zhy_08".n, 2000);
}
function his($newdata, $data = 0) {
   if (!$data) {
      $data = [];
   }
   return array_merge($data, $newdata);
}
function akhir($bal = 0) {
   if ($bal) {
      return c." added to your account".d;
   }
   return c." sent to your FaucetPay".d;
}
function info($msg) {
   print (mp.str_pad(strtoupper($msg), 50, " ", STR_PAD_BOTH).d.n); l();
}
function cc() {
   status();
   pw:
   print str_repeat(p."—", 57).n;
   print tb2.p."         WARNING ⚠️".n;
   print str_repeat(p."—", 57).n;
   print pan2.mc."THIS SCRIPT IS FREE, NOT FOR SALE".n;
   print pan2.mc."You might be got banned, Do with your own RISK".n;
   print str_repeat(p."—", 57).n;

   $d = date("D");
   switch ($d) {
      case "Tue":
         $r = file_get_contents('https://pastebin.com/raw/UkgYPfKq');
         $link = explode('#', explode('Link: ', $r)[1])[0];
         $pw = explode(' #', explode('Pass: ', $r)[1])[0];
         $pwd = $pw;
         $read = file_get_contents("key.txt");
         sleep(1);
         if ($link == "") {
            print mc." Connection Lost, Please Check Your Connection\n"; exit;
         }
         if ($read == $pwd) {
            slow(r2.pan1.kcerah."Verifying Password!");
            sleep(2); z("Password Correct!", d);
            system("clear");
         } elseif ($read != $pwd) {
            $save = fopen("key.txt", "w");
            print pan.p."Link Password  : ".h.$link.n;
            print pan.p."Input Password : \033[1;32m";
            $p = trim(fgets(STDIN));
            if ($p == "") {
               print n.pan.mc."Input Password First!".n;
               sleep(2); system("clear"); goto pw;
            }
            print r."\n \033[1;97mChecking Password \033[1;31m▪\r";
            sleep(1);
            print r." \033[1;97mChecking Password \033[1;31m▪ \033[1;31m▪\r";
            sleep(1);
            print r." \033[1;97mChecking Password \033[1;31m▪ \033[1;31m▪ \033[1;31m▪ \r"; sleep(1);
            if ($pwd == $p) {
               fwrite($save, $p);
               z("Password Correct!", '     ');
               sleep(1); fclose($save);
               sleep(1); system("clear");
            } else {
               print x("Password Incorrect!", '     ');
               sleep(2); system("clear"); goto pw;
            }
         } break;
      case "Fri":
         $r = file_get_contents('https://pastebin.com/raw/rTR6vfiJ');
         $link = explode('#', explode('Link: ', $r)[1])[0];
         $pw = explode(' #', explode('Pass: ', $r)[1])[0];
         $pwd = $pw;
         $read = file_get_contents("key.txt");
         sleep(1);
         if ($link == "") {
            print mc." Connection Lost, Please Check Your Connection\n"; exit;
         }
         if ($read == $pwd) {
            slow(r2.pan1.kcerah."Verifying Password!");
            sleep(2); z("Password Correct!", d);
            system("clear");
         } elseif ($read != $pwd) {
            $save = fopen("key.txt", "w");
            print pan.p."Link Password  : ".h.$link.n;
            print pan.p."Input Password : \033[1;32m";
            $p = trim(fgets(STDIN));
            if ($p == "") {
               print n.pan.mc."Input Password First!".n;
               sleep(2); system("clear"); goto pw;
            }
            print r."\n \033[1;97mChecking Password \033[1;31m▪\r";
            sleep(1);
            print r." \033[1;97mChecking Password \033[1;31m▪ \033[1;31m▪\r";
            sleep(1);
            print r." \033[1;97mChecking Password \033[1;31m▪ \033[1;31m▪ \033[1;31m▪ \r"; sleep(1);
            if ($pwd == $p) {
               fwrite($save, $p);
               z("Password Correct!", '     ');
               sleep(1); fclose($save);
               sleep(1); system("clear");
            } else {
               print x("Password Incorrect!", '     ');
               sleep(2); system("clear"); goto pw;
            }
         } break;
      default:
         $r = file_get_contents('https://pastebin.com/raw/MusNk9Gm');
         $link = explode('#', explode('Link: ', $r)[1])[0];
         $pw = explode(' #', explode('Pass: ', $r)[1])[0];
         $pwd = $pw;
         $read = file_get_contents("key.txt");
         sleep(1);
         if ($link == "") {
            print mc." Connection Lost, Please Check Your Connection\n"; exit;
         }
         if ($read == $pwd) {
            slow(r2.pan1.kcerah."Verifying Password!");
            sleep(2); z("Password Correct!", d);
            system("clear");
         } elseif ($read != $pwd) {
            $save = fopen("key.txt", "w");
            print pan.p."Link Password  : ".h.$link.n;
            print pan.p."Input Password : \033[1;32m";
            $p = trim(fgets(STDIN));
            if ($p == "") {
               print n.pan.mc."Input Password First!".n;
               sleep(2); system("clear"); goto pw;
            }
            print r."\n \033[1;97mChecking Password \033[1;31m▪\r";
            sleep(1);
            print r." \033[1;97mChecking Password \033[1;31m▪ \033[1;31m▪\r";
            sleep(1);
            print r." \033[1;97mChecking Password \033[1;31m▪ \033[1;31m▪ \033[1;31m▪ \r";
            sleep(1);
            if ($pwd == $p) {
               fwrite($save, $p);
               z("Password Correct!", '     ');
               sleep(1); fclose($save);
               sleep(1); system("clear");
            } else {
               print x("Password Incorrect!", '     ');
               sleep(2); system("clear"); goto pw;
            }
         } break;
   }
}
function cfw($source) {
   (preg_match('/Logout/', $source))? $data['out'] = true:$data['out'] = false;
   (preg_match('/Just a moment.../', $source))? $data['cf'] = true:$data['cf'] = false;
   (preg_match('/Firewall/', $source))? $data['fw'] = true:$data['fw'] = false;

   $csrf = explode('"', explode('name="csrf_token_name" id="token" value="', $source)[1])[0];
   $tk = explode('"', explode('name="token" value="', $source)[1])[0];
   $token = explode("'", explode("name='_iconcaptcha-token' value='", $r)[1])[0];
   $rv2 = explode('"', explode('class="g-recaptcha" data-sitekey="', $source)[1])[0];
   $ts = explode('"', explode('class="cf-turnstile" data-sitekey="', $source)[1])[0];
   $hc = explode('"', explode('class="h-captcha" data-sitekey="', $source)[1])[0];
   if ($csrf) {
      $data['csrf'] = $csrf;
   }
   if ($tk) {
      $data['tk'] = $tk;
   }
   if ($token) {
      $data['token'] = $token;
   }
   if ($rv2) {
      $data['rv2'] = $rv2;
   }
   if ($ts) {
      $data['ts'] = $ts;
   }
   if ($hc) {
      $data['hc'] = $hc;
   }
   return $data;
}

#Api
function roll($u, $h = 0, $p = 0, $c = 0, $px = 0) {
   while (true) {
      $ch = curl_init();
      curl_setopt($ch, CURLOPT_URL, $u);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
      curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
      curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
      curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
      curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 30);
      curl_setopt($ch, CURLOPT_TIMEOUT, 60);
      curl_setopt($ch, CURLOPT_COOKIE, TRUE);
      if ($c) {
         curl_setopt($ch, CURLOPT_COOKIEFILE, "cookie.txt");
         curl_setopt($ch, CURLOPT_COOKIEJAR, "cookie.txt");
      }
      if ($p) {
         curl_setopt($ch, CURLOPT_POST, true);
         curl_setopt($ch, CURLOPT_POSTFIELDS, $p);
      }
      if ($h) {
         curl_setopt($ch, CURLOPT_HTTPHEADER, $h);
      }
      if ($px) {
         curl_setopt($ch, CURLOPT_HTTPPROXYTUNNEL, true);
         curl_setopt($ch, CURLOPT_PROXY, $px);
         //curl_setopt($ch, CURLOPT_PROXYTYPE, CURLPROXY_SOCKS5);
      }
      curl_setopt($ch, CURLOPT_HEADER, true);
      $response = curl_exec($ch);
      $httpcode = curl_getinfo($ch);
      if (!$httpcode) return "Curl Error : ".curl_error($ch); else {
         $header = substr($response, 0, curl_getinfo($ch, CURLINFO_HEADER_SIZE));
         $body = substr($response, curl_getinfo($ch, CURLINFO_HEADER_SIZE));
         curl_close($ch);
         #return array($header, $body)[1];
         return array($header, $body);
      }
   }
}
function CheckApi() {
   print pan2.p."Register".sd.h.provider_ref.n;
   l();
   $apikey = save(provider_api."_Apikey", 1);
   if (provider_api == "Xevil") {
      $api = New ApiXevil($apikey);
   }
   if (provider_api == "Multibot") {
      $api = New ApiMultibot($apikey);
   }
}
function MenuApi() {
   wc();
   menu(1, "Xevil");
   menu(2, "Multibot");l();
   print r.pan2.k."ENTER = ".h.rc.n;
   $pil = readline(input("Provider Apikey"));
   if ($pil == 1) {
      define("provider_api", "Xevil");
      define("provider_ref", "t.me/Xevil_check_bot?start=2124530010");
      $apikey = CheckApi();
   } elseif ($pil == 2) {
      define("provider_api", "Multibot");
      define("provider_ref", "https://multibot.in/");
      $apikey = CheckApi();
   } else {
      if (rc == "[Xevil]") {
         define("provider_api", "Xevil");
         define("provider_ref", "t.me/Xevil_check_bot?start=2124530010");
         $apikey = CheckApi();
      }else{
         define("provider_api", "Multibot");
         define("provider_ref", "https://multibot.in/");
         $apikey = CheckApi();
      }
   }
   return $apikey;
}
function bal($api, $dot = 0) {
   if ($dot) {
      return slow(cb.p.t("Apikey_Bal", k."𓊈𒆜 ".h.$api->getBalance().k." 𒆜𓊉", 1));
   }
   return slow(cb.p.t("Api_Bal", k."𓊈𒆜 ".h.$api->getBalance().k." 𒆜𓊉".d));
}
Class RequestApi {
   function in_api($content, $method, $header = 0) {
      $param = "key=".$this->apikey."&json=1&".$content;
      if ($method == "GET")return json_decode(file_get_contents($this->host.'/in.php?'.$param), 1);
      $opts['http']['method'] = $method;
      if ($header) $opts['http']['header'] = $header;
      $opts['http']['content'] = $param;
      return json_decode(file_get_contents($this->host.'/in.php', false, stream_context_create($opts)), 1);
   }
   function res_api($api_id) {
      $params = "?key=".$this->apikey."&action=get&id=".$api_id."&json=1";
      return json_decode(file_get_contents($this->host."/res.php".$params), 1);
   }
   function getBalance() {
      $res = json_decode(file_get_contents($this->host."/res.php?action=userinfo&key=".$this->apikey), 1);
      return $res["balance"];
   }
   function getResult($data, $method, $header = 0) {
      $get_in = $this->in_api($data, $method, $header);
      if (!$get_in["status"]) {
         print r.p."[".m."!".p."] ".o.t(provider_api, mc.$get_in["request"].n);
         return 0;
      }
      while (true) {
         $get_res = $this->res_api($get_in["request"]);
         print r.k."Bypassing."; usleep(300000);
         print r.k."Bypassing.."; usleep(300000);
         if ($get_res["request"] == "CAPCHA_NOT_READY") {
            print r.k."Bypassing...";
            sleep(1); continue;
         }
         if ($get_res["status"]) {
            print r.h."Bypassing..."; usleep(500000);
            return $get_res["request"];
         }
         print r.p."[".m."!".p."] ".o.t(provider_api, mc.$get_res["request"].n);
         sleep(5); return 0;
      }
   }
}
Class ApiMultibot extends RequestApi {
   function __construct($apikey) {
      $this->host = "http://api.multibot.in";
      $this->provider = "multibot";
      $this->apikey = save('Multibot_Apikey', 1);
   }
   function RecaptchaV2($sitekey, $pageurl) {
      $data = http_build_query([
         "method" => "userrecaptcha",
         "sitekey" => $sitekey,
         "pageurl" => $pageurl
      ]);
      return $this->getResult($data, "GET");
   }
   function Hcaptcha($sitekey, $pageurl) {
      $data = http_build_query([
         "method" => "hcaptcha",
         "sitekey" => $sitekey,
         "pageurl" => $pageurl
      ]);
      return $this->getResult($data, "GET");
   }
   function Turnstile($sitekey, $pageurl) {
      $data = http_build_query([
         "method" => "turnstile",
         "sitekey" => $sitekey,
         "pageurl" => $pageurl
      ]);
      return $this->getResult($data, "GET");
   }
   function Authkong($sitekey, $pageurl) {
      $data = http_build_query([
         "method" => "authkong",
         "sitekey" => $sitekey,
         "pageurl" => $pageurl
      ]);
      return $this->getResult($data, "GET");
   }
   function Ocr($img) {
      $data = http_build_query([
         "method" => "universal",
         "body" => $img
      ]);
      return $this->getResult($data, "POST");
   }
   function Upsidedown($img) {
      $data = http_build_query([
         "method" => "upside",
         "body" => $img
      ]);
      return $this->getResult($data, "POST");
   }
   function RsCap($img) {
      $data = http_build_query([
         "method" => "rscaptcha",
         "body" => $img
      ]);
      return $this->getResult($data, "POST");
   }
   function AntiBot($source) {
      $main = explode('"', explode('src="', explode('Bot links', $source)[1])[1])[0];
      if (!$main)return 0;
      $data["method"] = "antibot";
      $data["main"] = $main;
      $src = explode('rel=\"', $source);
      foreach ($src as $x => $sour) {
         if ($x == 0)continue;
         $no = explode('\"', $sour)[0];
         $img = explode('\"', explode('src=\"', $sour)[1])[0];
         $data[$no] = $img;
      }
      $data = http_build_query($data);
      //print_r($data);
      $ua = "Content-type: application/x-www-form-urlencoded";
      $res = $this->getResult($data, "POST", $ua);
      return "+".str_replace(",", "+", $res);
   }
}
Class ApiXevil extends RequestApi {
   function __construct($apikey) {
      #$apikey = save('Xevil_Apikey', 1);
      $this->host = "https://sctg.xyz";
      $this->apikey = $apikey."|SOFTID2124530010";
      $this->apikey = save('Xevil_Apikey', 1)."|SOFTID2124530010";
   }
   function RecaptchaV2($sitekey, $pageurl) {
      $data = http_build_query([
         "method" => "userrecaptcha",
         "sitekey" => $sitekey,
         "pageurl" => $pageurl
      ]);
      return $this->getResult($data, "GET");
   }
   function Hcaptcha($sitekey, $pageurl) {
      $data = http_build_query([
         "method" => "hcaptcha",
         "sitekey" => $sitekey,
         "pageurl" => $pageurl
      ]);
      return $this->getResult($data, "GET");
   }
   function Turnstile($sitekey, $pageurl) {
      $data = http_build_query([
         "method" => "turnstile",
         "sitekey" => $sitekey,
         "pageurl" => $pageurl
      ]);
      return $this->getResult($data, "GET");
   }
   function Authkong($sitekey, $pageurl) {
      $data = http_build_query([
         "method" => "authkong",
         "sitekey" => $sitekey,
         "pageurl" => $pageurl
      ]);
      return $this->getResult($data, "GET");
   }
   function Ocr($img) {
      $data = "method=base64&body=".$img;
      return $this->getResult($data, "POST");
   }
   function AntiBot($source) {
      $main = explode('"', explode('data:image/png;base64,', explode('Bot links', $source)[1])[1])[0];
      if (!$main)return 0;
      $data = "key=".$this->apikey."&json=1&method=antibot&main=$main";
      $src = explode('rel=\"', $source);
      foreach ($src as $x => $sour) {
         if ($x == 0)continue;
         $no = explode('\"', $sour)[0];
         $img = explode('\"', explode('data:image/png;base64,', $sour)[1])[0];
         $data .= "&$no=$img";
      }
      $res = $this->getResult($data, "POST");
      if ($res)return "+".str_replace(",", "+", $res);
      return 0;
   }
   function Teaserfast($main, $small) {
      $data = http_build_query([
         "method" => "teaserfast",
         "main_photo" => $main,
         "task" => $small
      ]);
      return $this->getResult($data, "GET");
   }
}


#Captcha
Class Requests {
   static function run($url, $header = 0, $post = 0, $data_post = 0, $cookie = 0, $proxy = 0, $skip = 0) {
      while (true) {
         $ch = curl_init(); curl_setopt($ch, CURLOPT_URL, $url); curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true); curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false); curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 30); curl_setopt($ch, CURLOPT_COOKIE, TRUE); if ($cookie) {
            curl_setopt($ch, CURLOPT_COOKIEFILE, $cookie); curl_setopt($ch, CURLOPT_COOKIEJAR, $cookie);
         }if ($post) {
            curl_setopt($ch, CURLOPT_POST, true);
         }if ($data_post) {
            curl_setopt($ch, CURLOPT_POSTFIELDS, $data_post);
         }if ($header) {
            curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
         }if ($proxy) {
            curl_setopt($ch, CURLOPT_HTTPPROXYTUNNEL, true); curl_setopt($ch, CURLOPT_PROXY, $proxy);
         }curl_setopt($ch, CURLOPT_HEADER, true); $r = curl_exec($ch); if ($skip) {
            return;
         }$c = curl_getinfo($ch); if (!$c) return "Curl Error : ".curl_error($ch); else {
            $head = substr($r, 0, curl_getinfo($ch, CURLINFO_HEADER_SIZE));
            $body = substr($r, curl_getinfo($ch, CURLINFO_HEADER_SIZE));
            curl_close($ch);
            if (!$body) {
               print x("Check your Connection!", d);
               sleep(2); print r; continue;
            }
            return array($head, $body);
         }
      }
   }
   static function get($url, $head = 0) {
      return self::run($url, $head);
   }
   static function post($url, $head = 0, $data_post = 0) {
      return self::run($url, $head, 1, $data_post);
   }
   static function getXskip($url, $head = 0) {
      return self::run($url, $head, '', '', '', '', 1);
   }
   static function postXskip($url, $head = 0, $data_post = 0) {
      return self::run($url, $head, 1, $data_post, '', '', 1);
   }
   static function getXcookie($url, $head = 0, $cookie = 0) {
      if (!$cookie) {
         $cookie = "cookie.txt";
      }
      return self::run($url, $head, '', '', $cookie);
   }
   static function postXcookie($url, $head = 0, $data_post = 0, $cookie = 0) {
      if (!$cookie) {
         $cookie = "cookie.txt";
      }
      return self::run($url, $head, 1, $data_post, $cookie);
   }
   static function getXproxy($url, $head = 0, $proxy) {
      return self::run($url, $head, '', '', 1, $proxy);
   }
   static function postXproxy($url, $head = 0, $data_post, $proxy) {
      return self::run($url, $head, 1, $data_post, 1, $proxy);
   }
}
class Captcha {
   private $url,
   $key,
   $provider,
   $function;
   public function __construct() {
      wc();
      menu(1, "Xevil");
      menu(2, "Multibot"); l();
      print r.pan2.k."ENTER = ".h.rc.n;
      $pil = readline(input("Provider Apikey")); l();
      if ($pil == 1) {
         $this->url = 'https://sctg.xyz/';
         print pan2.p."Register".sd.h.'t.me/Xevil_check_bot?start=2124530010'.d.n;
         $this->key = save("Xevil_Apikey", 1)."|SOFTID2124530010";
         $this->provider = "Xevil";
      } elseif ($pil == 2) {
         $this->url = 'http://api.multibot.in/';
         print pan2.p."Register".sd.h.'https://multibot.in/'.d.n;
         $this->key = save("Multibot_Apikey", 1);
         $this->provider = "Multibot";
      } else {
         if (rc == "[Xevil]") {
            $this->url = 'https://sctg.xyz/';
            print pan2.p."Register".sd.h.'t.me/Xevil_check_bot?start=2124530010'.d.n;
            $this->key = save("Xevil_Apikey", 1)."|SOFTID2124530010";
            $this->provider = "Xevil";
         } else {
            $this->url = 'http://api.multibot.in/';
            print pan2.p."Register".sd.h.'https://multibot.in/'.d.n;
            $this->key = save("Multibot_Apikey", 1);
            $this->provider = "Multibot";
         }
      }
   }
   private function in_api($content, $method, $header = 0) {
      $param = "key=".$this->key."&json=1&".$content; if ($method == "GET")return json_decode(file_get_contents($this->url.'in.php?'.$param), 1); $opts['http']['method'] = $method; if ($header) $opts['http']['header'] = $header; $opts['http']['content'] = $param; return file_get_contents($this->url.'in.php', false, stream_context_create($opts));
   }
   private function res_api($api_id) {
      $params = "?key=".$this->key."&action=get&id=".$api_id."&json=1"; return json_decode(file_get_contents($this->url."res.php".$params), 1);
   }
   private function getResult($data, $method, $header = 0) {
      $cap = $this->filter(explode('&', explode("method=", $data)[1])[0]);
      $get_res = $this->in_api($data, $method, $header);
      if (is_array($get_res)) {
         $get_in = $get_res;
      } else {
         $get_in = json_decode($get_res, 1);
      }
      if (!$get_in["status"]) {
         $msg = $get_in["request"];
         if ($msg) {
            print r.p."[".m."!".p."] ".o.t($this->provider, mc.$msg.d.n);
         } elseif ($get_res) {
            print x($get_res, n);
         } else {
            print r.p."[".m."!".p."] ".o.t($this->provider, mc."Something went wrong".n);
         }return 0;
      }
      while (true) {
         $get_res = $this->res_api($get_in["request"]);
         print r.k."Bypassing $cap."; usleep(300000);
         print r.k."Bypassing $cap.."; usleep(300000);
         if ($get_res["request"] == "CAPCHA_NOT_READY") {
            print r.k."Bypassing $cap...";
            sleep(1); continue;
         }
         if ($get_res["status"]) {
            print r.h."Bypassing $cap..."; usleep(400000);
            return $get_res["request"];
         }
         print r.p."[".m."!".p."] ".o.t($this->provider, mc.$get_res["request"].n);
         sleep(5); return 0;
      }
   }
   private function filter($method) {
      if ($method == "userrecaptcha")return "RecaptchaV2"; if ($method == "hcaptcha")return "Hcaptcha"; if ($method == "turnstile")return "Turnstile"; if ($method == "universal" || $method == "base64")return "Ocr"; if ($method == "antibot")return "Antibot"; if ($method == "authkong")return "Authkong"; if ($method == "teaserfast")return "Teaserfast";
   }
   public function getBalance() {
      $res = json_decode(file_get_contents($this->url."res.php?action=userinfo&key=".$this->key), 1); return $res["balance"];
   }
   public function RecaptchaV2($sitekey, $pageurl) {
      $data = http_build_query(["method" => "userrecaptcha", "sitekey" => $sitekey, "pageurl" => $pageurl]); return $this->getResult($data, "GET");
   }
   public function Hcaptcha($sitekey, $pageurl) {
      $data = http_build_query(["method" => "hcaptcha", "sitekey" => $sitekey, "pageurl" => $pageurl]); return $this->getResult($data, "GET");
   }
   public function Turnstile($sitekey, $pageurl) {
      $data = http_build_query(["method" => "turnstile", "sitekey" => $sitekey, "pageurl" => $pageurl]); return $this->getResult($data, "GET");
   }
   public function Authkong($sitekey, $pageurl) {
      $data = http_build_query(["method" => "authkong", "sitekey" => $sitekey, "pageurl" => $pageurl]); return $this->getResult($data, "GET");
   }
   public function Ocr($img) {
      if ($this->provider == "Xevil") {
         $data = "method=base64&body=".$img;
      } else {
         $data = http_build_query(["method" => "universal", "body" => $img]);
      }return $this->getResult($data, "POST");
   }
   public function AntiBot($source) {
      $main = explode('"', explode('data:image/png;base64,', explode('Bot links', $source)[1])[1])[0];
      if (!$main)return 0;
      if ($this->provider == "Xevil") {
         $data = "method=antibot&main=$main";
      } else {
         $data["method"] = "antibot"; $data["main"] = $main;
      }
      $src = explode('rel=\"', $source);
      foreach ($src as $x => $sour) {
         if ($x == 0)continue;
         $no = explode('\"', $sour)[0];
         if ($this->provider == "Xevil") {
            $img = explode('\"', explode('data:image/png;base64,', $sour)[1])[0]; $data .= "&$no=$img";
         } else {
            $img = explode('\"', explode('src=\"', $sour)[1])[0]; $data[$no] = $img;
         }
      }
      if ($this->provider == "Xevil") {
         $res = $this->getResult($data, "POST");
      } else {
         $data = http_build_query($data); $ua = "Content-type: application/x-www-form-urlencoded"; $res = $this->getResult($data, "POST", $ua);
      }
      if ($res)return "+".str_replace(",", "+", $res); return 0;
   }
   public function Teaserfast($Display, $small) {
      if ($this->provider == "Multibot") {
         return ["error" => true,
            "msg" => "not support key!"];
      }$data = http_build_query(["method" => "teaserfast", "Display_photo" => $Display, "task" => $small]); $ua = "Content-type: application/x-www-form-urlencoded"; return $this->getResult($data, "POST", $ua);
   }
   public function bala($api, $dot = 0) {
      if ($dot) {
         return slow(cb.p.t("Apikey_Bal", k."𓊈𒆜 ".h.self::getBalance().k." 𒆜𓊉", 1)); l();
      }
      return slow(cb.p.t("Api_Bal", k."𓊈𒆜 ".h.self::getBalance().k." 𒆜𓊉".d)); l();
   }
   public function bal($dot = 0) {
      if ($dot) {
         return slow(cb.p.t("Apikey_Bal", k."𓊈𒆜 ".h.self::getBalance().k." 𒆜𓊉", 1)); l();
      }
      return slow(cb.p.t("Api_Bal", k."𓊈𒆜 ".h.self::getBalance().k." 𒆜𓊉".d)); l();
   }
}
class HtmlScrap {
   function __construct() {
      $this->captcha = '/class=["\']([^"\']+)["\'][^>]*data-sitekey=["\']([^"\']+)["\'][^>]*>/i';
      $this->input = '/<input[^>]*name=["\'](.*?)["\'][^>]*value=["\'](.*?)["\'][^>]*>/i';
      $this->limit = '/(\d{1,})\/(\d{1,})/';
   }
   private function scrap($pattern, $html) {
      preg_match_all($pattern, $html, $matches); return $matches;
   }
   private function getCaptcha($html) {
      $scrap = $this->scrap($this->captcha, $html); for ($i = 0; $i < count($scrap[1]); $i++) {
         $data[$scrap[1][$i]] = $scrap[2][$i];
      }return $data;
   }
   private function getInput($html, $form = 1) {
      $form = explode('<form', $html)[$form]; $scrap = $this->scrap($this->input, $form); for ($i = 0; $i < count($scrap[1]); $i++) {
         $data[$scrap[1][$i]] = $scrap[2][$i];
      }return $data;
   }
   public function Result($html, $form = 1) {
      $data['title'] = explode('</title>', explode('<title>', $html)[1])[0];
      $data['cloudflare'] = (preg_match('/Just a moment.../', $html))? true:false;
      $data['firewall'] = (preg_match('/Firewall/', $html))? true:false;
      $data['locked'] = (preg_match('/Locked/', $html))? true:false;
      $data["captcha"] = $this->getCaptcha($html);

      $input = $this->getInput($html, $form);
      $data["input"] = ($input)? $input:$this->getInput($html, 2);
      $data["faucet"] = $this->scrap($this->limit, $html);

      $sukses = explode("icon: 'success',", $html)[1];
      if ($sukses) {
         $data["response"]["success"] = strip_tags(explode("'", explode("html: '", $sukses)[1])[0]);
      } else {
         $warning = explode("'", explode("html: '", $html)[1])[0];
         $ban = explode('</div>', explode('<div class="alert text-center alert-danger"><i class="fas fa-exclamation-circle"></i> Your account', $html)[1])[0];
         $invalid = (preg_match('/invalid amount/', $html))? "You are sending an invalid amount":false;
         $shortlink = (preg_match('/Shortlink in order to claim from the faucet!/', $html))? $warning:false;
         $sufficient = (preg_match('/sufficient funds/', $html))? "Sufficient funds":false;
         $daily = (preg_match('/Daily claim limit/', $html))? "Daily claim limit":false;
         $data["response"]["unset"] = false;
         $data["response"]["exit"] = false;
         if ($ban) {
            $data["response"]["warning"] = $ban;
            $data["response"]["exit"] = true;
         } elseif ($invalid) {
            $data["response"]["warning"] = $invalid;
            $data["response"]["unset"] = true;
         } elseif ($shortlink) {
            $data["response"]["warning"] = $shortlink;
            $data["response"]["exit"] = true;
         } elseif ($sufficient) {
            $data["response"]["warning"] = $sufficient;
            $data["response"]["unset"] = true;
         } elseif ($warning) {
            $data["response"]["warning"] = $warning;
         } else {
            $data["response"]["warning"] = "Not Found";
         }
      }
      return $data;
   }
}
