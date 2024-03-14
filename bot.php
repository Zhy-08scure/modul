<?php
//require('data.php');
error_reporting(0); system('clear');
date_default_timezone_set("Asia/Makassar");

const
scr = "freeltcfun", host = "",
reg = host, ver = '1.0',
yt = "https://www.youtube.com/channel/UCNhkKCiCUqw91ulgHqF9j0Q",
a = "\e[0;37m", abugelap = "\033[1;30m", b = "\033[1;34m", c = "\033[1;36m", d = "\033[0m", h = "\033[1;32m", hitam = "\033[0;30m", k = "\033[1;33m", m = "\033[1;31m", p = "\033[1;37m", pgelap = "\033[0;37m", u = "\033[1;35m", mcerah = "\033[01;38;5;196m", m2orange = "\033[01;38;5;202m", o = "\033[01;38;5;208m", o2k = "\033[01;38;5;214m", k2o = "\033[01;38;5;220m", kcerah = "\033[01;38;5;226m", k2p = "\033[01;38;5;228m", n = "\n", n2 = "\n\n", tb = "\t", tb2 = "\t\t", tp = k2o."❝ ", tp2 = k2o." ❞", dot = mcerah.' ⦿  ', r = "\r                                                      \r", r2 = "\r", sd = u." ┈➤ ".p, hapus = "     ", cb = c.": ̗̀➛ ",
centang = "\033[0;104m\033[1;37m[✓]".d." ",
salah = "\033[0;104m\033[1;37m[\033[01;38;5;196mx\033[1;37m]".d." ", tambah = "\033[0;104m\033[1;37m[+]".d." ", kurang = "\033[0;104m\033[1;37m[\033[01;38;5;196m-\033[1;37m]".d." ", ori = "\033[0;104m\033[1;37m[\033[1;32m≠\033[1;37m]".d." ",
kb = b."[".d, kt = b."]".d, akhir = c." has been sent to your FaucetPay", pan = mcerah." » ", pan1 = mcerah." ⫸ ", pan2 = abugelap."❯".m."❯".p."❯ ", bg = mcerah." : ".d, bgb = b." : ".d, mp = "\033[101m\033[1;37m", pm = "\033[107m\033[1;31m", bpbold = "\033[0;104m\033[1;37m", bp = "\033[1;37m\033[0;104m";

ck:
system('clear'); wc();
if (!file_exists("../Apikey")) {
  $api = readline(input("Apikey"));
  print n; file_put_contents("../Apikey", $api);
}
if (!file_exists("../User_Agent")) {
  $useragent = readline(input("User Agent"));
  print n; file_put_contents("../User_Agent", $useragent);
}
system('clear'); //cc();

function run($u, $h = 0, $p = 0, $c = 0) {
    while (true) {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $u);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 30);
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
        curl_setopt($ch, CURLOPT_HEADER, true);
        $r = curl_exec($ch);
        $c = curl_getinfo($ch);
        if (!$c) return "Curl Error : ".curl_error($ch); else {
            $hd = substr($r, 0, curl_getinfo($ch, CURLINFO_HEADER_SIZE));
            $bd = substr($r, curl_getinfo($ch, CURLINFO_HEADER_SIZE));
            curl_close($ch);
            if (!$bd) {
                print m."Check your Connection!";
                sleep(2);
                print "\r                    \r";
                continue;
            }
            return array($hd, $bd)[1];
        }
    }
}
function h($xml = 0) {
  if ($xml) {
    $h[] = "x-requested-with: XMLHttpRequest";
  }
  $h[] = "cookie: ".save('Cookie');
  $h[] = "user-agent: ".file_get_contents("../User_Agent");
  return $h;
}
function json($dataGetPost) {
  $json = json_decode($dataGetPost);
  return $json;
}
function bal() {
  $api = file_get_contents('../Apikey');
	$url = "http://api.multibot.in/";
	$b = json_decode(file_get_contents($url."res.php?action=userinfo&key=".$api),1);
	if(!$b["balance"]){
		exit(p."Apikey: ".m."Apikey balance empty!".d.n);
	}
	slow(cb.p."Apikey ".sd.k."𓊈𒆜 ".h.$b["balance"].k." 𒆜𓊉".d);
}
function v2($sitekey, $pageurl){
	$api = file_get_contents('../Apikey');
	$url = "http://api.multibot.in/";
	$r =  json_decode(file_get_contents($url."in.php?key=".$api."&method=userrecaptcha&googlekey=".$sitekey."&pageurl=".$pageurl."&json=1"),1);
	$status = $r["status"];
	if($status == 0){
		print(r.p."Apikey: ".m.$r["request"].n);
		return 0;
	}
	$id = $r["request"];
	while(true){
		print r.k."Bypassing."; sleep(1);
		$r = json_decode(file_get_contents($url."res.php?key=".$api."&action=get&id=".$id."&json=1"),1);
		$status = $r["status"];
		print r.k."Bypassing.."; sleep(1);
		if($r["request"] == "CAPCHA_NOT_READY"){
			print r.k."Bypassing...";
			sleep(10);
			continue;
		}
		if($status == 1){
			return $r["request"];
		}
		return 0;
	}
}
function hc($sitekey, $url) {
  $api = file_get_contents('../Apikey');
  $mb = "http://api.multibot.in/";
  $r = json_decode(file_get_contents($mb."in.php?key=".$api."&method=hcaptcha&sitekey=".$sitekey."&pageurl=".$url."&json=1"), 1);
  $status = $r["status"];
  if ($status == 0) {
    print(r.p."Apikey: ".m.$r["request"].n);
    return 0;
  }
  $id = $r["request"];
  while (true) {
    print r.k."Bypassing."; sleep(1);
    $r = json_decode(file_get_contents($mb."res.php?key=".$api."&action=get&id=".$id."&json=1"), 1);
    $status = $r["status"];
    print r.k."Bypassing.."; sleep(1);
    if ($r["request"] == "CAPCHA_NOT_READY") {
      print r.k."Bypassing...";
      sleep(10); continue;
    }
    if ($status == 1) {
      return $r["request"];
    }
    return 0;
  }
}
function ts($sitekey, $pageurl){
	$api = file_get_contents('../Apikey');
	$url = "http://api.multibot.in/";
	$r =  json_decode(file_get_contents($url."in.php?key=".$api."&method=turnstile&sitekey=".$sitekey."&pageurl=".$pageurl."&json=1"),1);
	$status = $r["status"];
	if($status == 0){
		print(r.p."Apikey: ".m.$r["request"].n);
		return 0;
	}
	$id = $r["request"];
	while(true){
		print r.k."Bypassing."; sleep(1); 
		$r = json_decode(file_get_contents($url."res.php?key=".$api."&action=get&id=".$id."&json=1"),1);
		$status = $r["status"];
		print r.k."Bypassing.."; sleep(1);
		if($r["request"] == "CAPCHA_NOT_READY"){
			print r.k."Bypassing...";
			sleep(10); continue;
		}
		if($status == 1){
			return $r["request"];
		}
		return 0;
	}
}
function atb($source) {
  $api = file_get_contents('../Apikey');
  $url = "http://api.multibot.in/";
  $main = explode('"', explode('<img src="', explode('Bot links', $source)[1])[1])[0];
  $antiBot["main"] = $main;
  $src = explode('rel=\"', $source);
  foreach ($src as $x => $sour) {
    if ($x == 0)continue;
    $no = explode('\"', $sour)[0];
    $img = explode('\"', explode('<img src=\"', $sour)[1])[0];
    $antiBot[$no] = $img;
  }
  $ua = "Content-type: application/x-www-form-urlencoded";
  $data = ["key" => $api,
    "method" => "antibot",
    "json" => 1] + $antiBot;
  $opts = ['http' => ['method' => 'POST',
    'header' => $ua,
    'content' => http_build_query($data)]];

  $r = json_decode(file_get_contents($url.'in.php', false, stream_context_create($opts)), 1);
  $status = $r["status"];
  if ($status == 0) {
    print(r.p."Apikey: ".m.$r["request"].n);
    return 0;
  }
  $id = $r["request"];
  while (true) {
    print r.k."Bypassing."; sleep(1);
    $r = json_decode(file_get_contents($url."res.php?key=".$api."&action=get&id=".$id."&json=1"), 1);
    $status = $r["status"];
    print r.k."Bypassing.."; sleep(1);
    if ($r["request"] == "CAPCHA_NOT_READY") {
      print r.k."Bypassing...";
      sleep(10); continue;
    }
    if ($status == 1) {
      return "+".str_replace(",", "+", $r["request"]);
    }
    return 0;
  }
}
function fw() {
  $api = file_get_contents('../Apikey');
  $r = run(host."firewall", h());
  $csrf = explode('"', explode('name="csrf_token_name" value="', $r)[1])[0];
  $tipe = explode('"', explode('<input type="hidden" name="captchaType" value="', $r)[1])[0];
  if ($tipe == "recaptchav2") {
    $sitekey = explode('">', explode('<div class="g-recaptcha" data-sitekey="', $r)[1])[0];
    $cap = v2($sitekey, host."firewall");
    $data = "g-recaptcha-response=".$cap."&captchaType=recaptchav2&csrf_token_name=".$csrf;
    return run(host."firewall/verify", h(), $data);
  } elseif ($tipe == "turnstile") {
    $sitekey = explode('"', explode('<div class="cf-turnstile" data-sitekey="', $r)[1])[0];
    $cap = ts($sitekey, host."firewall");
    $data = "cf-turnstile-response=".$cap."&captchaType=turnstile&csrf_token_name=".$csrf;
    return run(host."firewall/verify", h(), $data);
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
  print mcerah."\t 次のクレーム ".date("i", $res).abugelap.":".p.date("s", $res)." 請求する秒数 \r".d; sleep(1); endwhile;
}
function input($msg) {
  return c."╭{  ".kcerah."Input ".$msg.c."  }".n.c."╰┈➤ ".h;
}
function save($new) {
  if (file_exists($new)) {
    $cfg = file_get_contents($new);
  } else {
    $cfg = readline(input($new)); print n; file_put_contents($new, $cfg);
  }
  return $cfg;
}
function slow($str) {
  foreach (str_split($str) as $rt) {
    echo $rt; usleep(35000);
  }
  print n;
}
function cetak($str, $t) {
  $linkrr = str_split($str);
  foreach ($linkrr as $linkz) {
    echo $linkz; usleep($t);
  }
}
function gas($str) {
  foreach (str_split($str) as $rt) {
    echo $rt; usleep(2500);
  }
}
function l() {
  print p.str_repeat("─", 50).n;
}
function cf() {
  cetak(mcerah."Cloudflare Detected, Update Your Cookie".d, 15000);
  unlink('cookie.txt'); unlink("Cookie"); sleep(rand(1, 3)); system('clear'); op();
}
function cok() {
  cetak(mcerah."Cookie Expired, Update Your Cookie".d, 15000);
  unlink('cookie.txt'); unlink("Cookie"); sleep(rand(1, 3)); system('clear'); op();
}
function wc() {
  system('clear'); print str_repeat(c."=", 50).n;
  print m.'          ___                  _           _'.n;
  print m.'         /___\_   _ _ __ /\/\ (_)_ __   __| |'.n;
  print m.'        //  // | | | ‘__/    \| | ‘_ \ / _` |'.n;
  print p.'       / \_//| |_| | | / /\/\ \ | | | | (_| |'.n;
  print p.'       \___/  \__,_|_| \/    \/_|_| |_|\__,_|'.n.n;
  print str_repeat(c."=", 50).n;
  print pan1.p."Link: ".h.reg.n; l();
}
function Acssi_calvin($string) {
  $acssi = ["a" => ["┌─┐","├─┤","┴ ┴"],"b" => ["┌┐ ","├┴┐","└─┘"],"c" => ["┌─┐","│  ","└─┘"],"d" => ["┌┬┐"," ││","─┴┘"],"e" => ["┌─┐","├┤ ","└─┘"],"f" => ["┌─┐","├┤ ","└  "],"g" => ["┌─┐","│ ┬","└─┘"],"h" => ["┬ ┬","├─┤","┴ ┴"],"i" => ["┬","│","┴"],"j" => [" ┬"," │","└┘"],"k" => ["┬┌─","├┴┐","┴ ┴"],"l" => ["┬  ","│  ","┴─┘"],"m" => ["┌┬┐","│││","┴ ┴"],"n" => ["┌┐┌","│││","┘└┘"],"o" => ["┌─┐","│ │","└─┘"],"p" => ["┌─┐","├─┘","┴  "],"q" => ["┌─┐ ","│─┼┐","└─┘└"],"r" => ["┬─┐","├┬┘","┴└─"],"s" => ["┌─┐","└─┐","└─┘"],"t" => ["┌┬┐"," │ "," ┴ "],"u" => ["┬ ┬","│ │","└─┘"],"v" => ["┬  ┬","└┐┌┘"," └┘ "],"w" => ["┬ ┬","│││","└┴┘"],"x" => ["─┐ ┬","┌┴┬┘","┴ └─"],"y" => ["┬ ┬","└┬┘"," ┴ "],"z" => ["┌─┐","┌─┘","└─┘"]," "=>[" "," "," "],"1" => ["┬","│","┴"],  "2" => ["┌─┐","┌─┘","└─┘"],  "3" => ["┌─┐"," ├┤","└─┘"],"4" => ["┬ ┬","└─┤","  ┘"],"5" => ["┌─┐","└─┐","└─┘"],"6" => ["┌─┐","├─┐","└─┘"],"7" => ["┌─┐","  │","  ┘"],"8" => ["┌─┐","├─┤","└─┘"],"9" => ["┌─┐","└─┤","└─┘"],"0" => ["┌─┐","│ │","└─┘"]];

  $x = str_split($string); print " ";
  foreach ($x as $data) {
    gas(o.$acssi[$data][0]);
  }
  gas(" オンライン".n); print " ";
  foreach ($x as $data) {
    gas(o2k.$acssi[$data][1]);
  }
  gas(" クリエーター".bgb.p."Zhy_08".n); print " ";
  foreach ($x as $data) {
    gas(k2o.$acssi[$data][2]);
  }
  gas(" チャンネル  ".bgb.p."Zhy_08".n);
}
function ban() {
  $ap = json_decode(file_get_contents("http://ip-api.com/json"),1);
  system('clear');
  $hari = date('l'); $tanggal = date("d-M-Y"); $waktu = date("H:i");
  $panjang = 50-strlen($hari.$tanggal.$waktu); $spasi = floor($panjang/2);
  $lokasi = mp.$hari.str_repeat(" ", $spasi).$tanggal.str_repeat(" ", $spasi).$waktu;
  if ($panjang % 2 == 1) {
    $lokasi .= " ";
  }
  
  cetak($lokasi.n, 20000); 
  if ($ap) {
    $tz = $ap["timezone"];
		date_default_timezone_set($tz);
		cetak(pm.str_pad($ap['city'].", ".$ap['regionName'].", ".$ap['country'], 50, " ", STR_PAD_BOTH).d.n, 20000);
		gas(b.str_repeat("=", 50).n);
	}else{
		date_default_timezone_set("UTC"); return "UTC";
	}
  cetak(m.str_pad("_____         _____ _       _", 50, " ", STR_PAD_BOTH).n, 15000);
  cetak(m.str_pad("|     |_ _ ___|     |_|___ _| |", 50, " ", STR_PAD_BOTH).n, 15000);
  cetak(p.str_pad("|  |  | | |  _| | | | |   | . |", 50, " ", STR_PAD_BOTH).n, 15000);
  cetak(p.str_pad("|_____|___|_| |_|_|_|_|_|_|___|", 50, " ", STR_PAD_BOTH).n, 15000);
  print b.str_repeat(o."─", 16).p." ❝ ".h."のスクリプト".p." ❞ ".str_repeat(o."─", 16).n;
  Acssi_calvin(scr); print n;
  cetak(tb2."    \033[1;35mThanks To  :".n, 15000);
  cetak(mp.str_pad("| Reyhan H | Sugiono Official | kakatoji |", 50, " ", STR_PAD_BOTH).d.n, 15000);
  cetak(pm.str_pad("| IEWIL OFFICIAL | bintang catur | CMP |", 50, " ", STR_PAD_BOTH).d.n, 15000);
  gas(b.str_repeat("═", 16).c."元のバージョン ".ver.b.str_repeat("═", 16).n.d);
  system("termux-open-url ".yt); sleep(3);
}
function x($aw, $ak, $url, $a) {
  $exp = explode($l, explode($f, $url)[$a])[0];
  return $exp;
}
function op() {
  system("termux-open-url ".reg); sleep(2);
}
function his($newdata, $data = 0) {
    if (!$data) {
        $data = [];
    }
    return array_merge($data, $newdata);
}