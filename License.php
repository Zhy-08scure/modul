<?php
system('clear'); #error_reporting(0);
const
yt = "https://youtube.com/@zhy_08",
abuglp = "\033[1;30m", b = "\033[1;34m", c = "\033[1;36m", d = "\033[0m", h = "\033[1;32m", k = "\033[1;33m", m = "\033[1;31m", p = "\033[1;37m", u = "\033[1;35m", mc = "\033[01;38;5;196m", m2o = "\033[01;38;5;202m", o = "\033[01;38;5;208m", o2k = "\033[01;38;5;214m", k2o = "\033[01;38;5;220m", kcerah = "\033[01;38;5;226m", k2p = "\033[01;38;5;228m", n = "\n", n2 = "\n\n", tb = "\t", tb2 = "\t\t", tp = k2o."❝ ", tp2 = k2o." ❞", dot = mc.' ⦿  ', r = "\r                                                      \r", r2 = "\r", sd = u." ]┈➤ ".p, hapus = "                                 ", cb = c.": ̗̀➛ ",
centang = "\033[0;104m\033[1;37m[✓]".d." ",
bp = "\033[0;104m\033[1;37m", bpkc = "\033[1;37m\033[0;104m",
kurang = "\033[0;104m\033[1;37m[\033[01;38;5;196m-\033[1;37m]".d." ", ori = "\033[0;104m\033[1;37m[\033[1;32m≠\033[1;37m]".d." ",
kb = b."[".d, kt = b."]".d, pan = mc." »  ", pan1 = mc." ⫸  ", pan2 = abuglp."❯".m."❯".p."❯ ", bg = mc." : ".d, bgb = b." : ".d, mp = "\033[101m\033[1;37m", pm = "\033[107m\033[1;31m";

function run($u, $h = 0, $p = 0,$cookie = 0, $lewat = 0) {
	while(true){
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $u);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
		curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 30);
		curl_setopt($ch, CURLOPT_COOKIE,TRUE);
		if($cookie) {
			curl_setopt($ch, CURLOPT_COOKIEFILE,"cookie.txt");
			curl_setopt($ch, CURLOPT_COOKIEJAR,"cookie.txt");
		}
		if($p) {
			curl_setopt($ch, CURLOPT_POST, true);
			curl_setopt($ch, CURLOPT_POSTFIELDS, $p);
		}
		if($h) {
			curl_setopt($ch, CURLOPT_HTTPHEADER, $h);
		}
		curl_setopt($ch, CURLOPT_HEADER, true);
		$r = curl_exec($ch);
		if($lewat){
			return 0;
		}
		$c = curl_getinfo($ch);
		if(!$c) return "Curl Error : ".curl_error($ch); else{
			$hd = substr($r, 0, curl_getinfo($ch, CURLINFO_HEADER_SIZE));
			$bd = substr($r, curl_getinfo($ch, CURLINFO_HEADER_SIZE));
			curl_close($ch);
			if(!$bd){
				print r.mc."Check your Connection!";
				sleep(2);print r;continue;
			}
			return array($hd,$bd);
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
function save($new, $univ=0) {
   if ($univ) {
      if (file_exists($new)) {
      $cfg = file_get_contents($new);
      } else {
         $cfg = readline(input($new)); print n; file_put_contents($new, $cfg);
      }
      return $cfg;
   }
   if (file_exists("../$new")) {
      $cfg = file_get_contents("../$new");
   } else {
      $cfg = readline(input($new)); print n; file_put_contents("../$new", $cfg);
   }
   return $cfg;
}
function menu($no, $title){
   print kb.p."$no".kt.u." $title".d.n;
}
function z($z, $l, $cetak=0) {
   if ($cetak) {
      $len = 8; $lenstr = $len-strlen($z);
      return cetak(r2.bp."[✓]".d." ".p.$z.str_repeat(" ", $lenstr).sd.h.$l.d, 35000);
   }
   return slow(r2.bp."[✓]".d." ".h.$z.$l.d);
}
function x($x, $l) {
   return r.p."[".m."!".p."] ".m.$x.$l.d;
}
function pls($b, $v, $tab=0) {
   if ($tab) {
      $len = 8; $lenstr = $len-strlen($b);
   return slow(r2.bp."[+]".d." ".p.$b.str_repeat(" ", $lenstr).sd.h.$v.d);
   }
   $len = 10; $lenstr = $len-strlen($b);
   return slow(r2.bp."[+]".d." ".p.$b.str_repeat(" ", $lenstr).sd.h.$v.d);
}
function t($label, $msg, $tab=0) {
   if ($tab) {
      $len = 8; $lenstr = $len-strlen($label);
      return $label.str_repeat(" ", $lenstr).sd.$msg.d;
   }
   $len = 10; $lenstr = $len-strlen($label);
   return $label.str_repeat(" ", $lenstr).sd.$msg.d;
}
function limit($msg, $coin) {
   $len = 19; $lenstr = $len-strlen($msg);
   return r.p."[".m."!".p."] ".mc.$msg.str_repeat(" ", $lenstr).sd.$coin.d;
}
function slow($str) {
   foreach (str_split($str) as $rt) {
      echo $rt; usleep(35000);
   } print n;
}
function cetak($str, $t) {
   $linkrr = str_split($str);
   foreach ($linkrr as $linkz) {
      echo $linkz; usleep($t);
   }
}
function cok($cf=0) {
   if ($cf) {
      cetak(mc."Cloudflare Detected, Update Your Cookie".d, 15000);
      unlink('cookie.txt'); unlink("Cookie"); sleep(rand(3, 5)); system('clear');
   }else{
      cetak(mc."Cookie Expired, Update Your Cookie".d, 15000);
      unlink('cookie.txt'); unlink("Cookie"); sleep(rand(3, 5)); system('clear');
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
   print str_repeat(c."=", 50).n;
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
   title(scr); print n;
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
function info($msg){
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
            print r." \033[1;97mChecking Password \033[1;31m▪ \033[1;31m▪ \033[1;31m▪ \r";
            sleep(1); print r;
            if ($pwd == $p) {
               fwrite($save, $p);
               z("Password Correct!", '');
               sleep(1); fclose($save);
               sleep(1); system("clear");
            } else {
               print x("Password Incorrect!", '');
               sleep(2);
               system("clear");
               goto pw;
            }
         }
         break;
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
            print r." \033[1;97mChecking Password \033[1;31m▪ \033[1;31m▪ \033[1;31m▪ \r";
            sleep(1); print r;
            if ($pwd == $p) {
               fwrite($save, $p);
               z("Password Correct!", '');
               sleep(1); fclose($save);
               sleep(1); system("clear");
            } else {
               print x("Password Incorrect!", '');
               sleep(2);
               system("clear");
               goto pw;
            }
         }
         break;
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
            sleep(1); print r;
            if ($pwd == $p) {
               fwrite($save, $p);
               z("Password Correct!", '');
               #print r.centang.h."Password Correct!";
               sleep(1); fclose($save);
               sleep(1); system("clear");
            } else {
               print x("Password Incorrect!", '');
               #print salah.mc."Password Incorrect!".n.d;
               sleep(2);
               system("clear");
               goto pw;
            }
         }
         break;
   }
}
function cfw($source){
	(preg_match('/Logout/', $source))? $data['out']=true:$data['out']=false;
	(preg_match('/Just a moment.../', $source))? $data['cf']=true:$data['cf']=false;
	(preg_match('/Firewall/', $source))? $data['fw']=true:$data['fw']=false;
	return $data;
}