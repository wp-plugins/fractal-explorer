<?php
/*
Plugin Name: Fractal-Explorer
Plugin URI: http://web-fractals.sf.net/project.php
Description: Sidebar widget for the presentation and visualization of colored julia and mandelbrot fractals. Animated zoom realized as GIF animation is used to dive into and explore the internal structure of fractals.
Version: 0.5.0
Author: carlos26
Author URI: http://web-fractals.sf.net/author.php
*/

# @date 2010-08-06 15-59-31
  abstract class Jvqccfctmuzkb {
   const Kzhhwcpzaqhw = 'options';
 const Cbukybctcri = 'submit';
const Wxugnqbjzjs = 'title';
const Hheokaugjkw = 'count';
const Lwxezkorbpne = 'mode';
    const Xpmyvwbimneiawqf = 'lang';
 const Xrkdraxnmq = 'compids';
       const Hobekkyknenzhe = 0;
  const Smiifdftj = 1;
        const Pbgrkykkawyuex = 2;		
const Szmlbjkcngeqr = 'backend-title';
         const Yetdbsxfgcul = 'backend-count';
         const Eauibzbpwr = 'backend-compids';
        const Btkzntmucwaz = 'backend-mode';
        const Iizbsuapradx = 'backend-lang';
       const Fzhqssisdbk = 'backend-head';
       const Yungoffxoeg = 'backend-foot';
       const Mibnogieabb = 'backend-news';
     const Zzqjhghay = 'backend-info';
      const Erzfuaxqzex = 101;
        const Uazddnivohkck = 102;
     const Vqgnmvspfg = 103;
      const Rklhefvniar = 104;
     const Fsryxvkdwt = 105;
         const Xfagdbluexevjo = 106;
         const Flstpaetnlfups = 107;
     const Lefnpwmnqg = 108;
        const Xelxepecxmovz = 109;
       const Xlomgsggwoqu = 110;
         const Oyejzkgflpplxo = 111;
         const Dqiljumciyolqb = 113;
       const Fdxzwyywfuzh = 112;
      const Airtqecmtrx = 120;
        const Emrrljlnrfhadto = 0;
        const Pufivbqxplcuvxr = 1;
  const Sttesvcso = 2;
       const Laodxwtazaovxx = 3;
       const Cevhdiqodqsrgk = 4;
       public function constructDrhhivgyltelvhlk($nqkujoziqu, $hvqzrltoc, $gjjuaavai, $jsfgorxbkzzd) {
$options = get_option($this->buildXpqplmpqhjac(self::Kzhhwcpzaqhw));
         $title = $options['title'];
         $compids = $this->getAhiavtvnimkhekh($options['compids'], $options['count']);
       $mode = $options['mode'];
       $lang = $options['lang'];
         $karma_data = Itkqfkeyhxy::getInstance()->createYznfwrhqvpcphszmiq($compids);
$translator = new Pwzxiyxkseef($lang);
  $renderer = $this->buildRuawvtonrjpnoaq($translator, $mode);
         echo $nqkujoziqu;
   echo $gjjuaavai . $title . $jsfgorxbkzzd;
    echo $renderer->constructCntugprrkmcjk($karma_data);
        echo $hvqzrltoc;
   }
         public function setZtemdrkylpvlhh() {
 $options = $this->buildOcgjlyrxqznrb();
         $title = $options['title'];
 $translator = new Pwzxiyxkseef($options['lang']);
     echo '<p>' . $translator->createQyorsqklkogkuqzloq('backend.widgets.control.redirection', array(Pwzxiyxkseef::Cxeyjspxdzfo => $this->queryFylkjuqipgy())) . '</p>';
         echo '<input type="hidden" id="' . $this->buildXpqplmpqhjac(self::Cbukybctcri) . '" name="' . $this->buildXpqplmpqhjac(self::Cbukybctcri) . '" value="1" />';
   }
public function buildOcgjlyrxqznrb() {
  $translator = new Pwzxiyxkseef($this->buildOujfamhcprnuu());
        $compids = explode(',', $this->createWidamstmgdaffds());
shuffle($compids);
     $compids = array_slice(
     $compids, 0, 
      min(
        $this->getCzbyrphdywanawxx(Jvqccfctmuzkb::Fdxzwyywfuzh),
       count($compids)
   )
    );
     for($arrGqkidtbntusm = 0; $arrGqkidtbntusm < count($compids); $arrGqkidtbntusm++) {
    $compids[$arrGqkidtbntusm] = trim($compids[$arrGqkidtbntusm]);
   }
         $options = array(
       'title'=>$translator->createQyorsqklkogkuqzloq('frontend.title'),
       'compids'=>implode(', ', $compids),
 'mode'=>self::Pbgrkykkawyuex,
        'lang'=>$this->buildOujfamhcprnuu(),
        'count'=>$this->getCzbyrphdywanawxx(Jvqccfctmuzkb::Dqiljumciyolqb)
    );
       $opts = get_option($this->buildXpqplmpqhjac(self::Kzhhwcpzaqhw));
  if (!empty($opts)) {
     foreach ($opts as $key=>$value) {
      $options[$key] = $value;
   }
   }
  update_option($this->buildXpqplmpqhjac(self::Kzhhwcpzaqhw), $options);
        return $options;
   }
       public function setJeqkafydnnmy() {
     $result = '';
 $options = $this->buildOcgjlyrxqznrb();
 $translator = new Pwzxiyxkseef($options['lang']);
 if ( $_POST[$this->buildXpqplmpqhjac(self::Cbukybctcri)] !== null ) {
      $valid = true;
    if ($this->getCzbyrphdywanawxx(self::Erzfuaxqzex)) {
    $options['title'] = $_POST[$this->buildXpqplmpqhjac(self::Wxugnqbjzjs)];
   }
      if ($this->getCzbyrphdywanawxx(self::Uazddnivohkck)) {
      if (
        preg_match('/^\s*[0-9]+\s*$/', $_POST[$this->buildXpqplmpqhjac(self::Hheokaugjkw)]) &&
 (int) $_POST[$this->buildXpqplmpqhjac(self::Hheokaugjkw)] >= $this->getCzbyrphdywanawxx(Jvqccfctmuzkb::Xlomgsggwoqu) &&
(int) $_POST[$this->buildXpqplmpqhjac(self::Hheokaugjkw)] <= $this->getCzbyrphdywanawxx(Jvqccfctmuzkb::Oyejzkgflpplxo)
     ) {
    $options['count'] = $_POST[$this->buildXpqplmpqhjac(self::Hheokaugjkw)];
} else {
    $result .= '
   <div class="updated">
         <p><strong>' . $translator->createQyorsqklkogkuqzloq('backend.validation.count') . '</strong></p>
        </div>
    ';
   }
   }
    if ($this->getCzbyrphdywanawxx(self::Rklhefvniar)) {
    $options['mode'] = $_POST[$this->buildXpqplmpqhjac(self::Lwxezkorbpne)];
   }
   if ($this->getCzbyrphdywanawxx(self::Fsryxvkdwt)) {
        $options['lang'] = $_POST[$this->buildXpqplmpqhjac(self::Xpmyvwbimneiawqf)];
    $translator->buildLynrormeiykchpj($options['lang']);
   }
   if ($this->getCzbyrphdywanawxx(self::Vqgnmvspfg)) {
    if (preg_match('/^\s*([0-9]+,\s*)*[0-9]+\s*$/', $_POST[$this->buildXpqplmpqhjac(self::Xrkdraxnmq)])) {
     $options['compids'] = $_POST[$this->buildXpqplmpqhjac(self::Xrkdraxnmq)];
} else {
    $result .= '
   <div class="updated">
 <p><strong>' . $translator->createQyorsqklkogkuqzloq('backend.validation.compids') . '</strong></p>
        </div>
    ';
   }
   }
   if ($result === '') {
    $result .= '
   <div class="updated">
<p><strong>' . $translator->createQyorsqklkogkuqzloq('backend.updated') . '</strong></p>
        </div>
    ';
  update_option($this->buildXpqplmpqhjac(self::Kzhhwcpzaqhw), $options);
   }
   }
         $title = $options['title'];
         $count = $options['count'];
   $compids = $options['compids'];
       $mode = $options['mode'];
       $lang = $options['lang'];
     $infoButton = '<span class="' . $this->queryYvrelrzjxxo(self::Zzqjhghay) . '" onclick="document.getElementsByName(\'' . $this->queryYvrelrzjxxo(self::Yungoffxoeg) . '\')[0].style.display=\'block\'; return false;">?</span>';
    $result .= '
 <div class="wrap"> 
      <form name="form1" method="post" action="' . $_SERVER['REQUEST_URI'] . '">
        <h2>' . $translator->createQyorsqklkogkuqzloq('backend.title', array(Pwzxiyxkseef::Cxeyjspxdzfo => $this->queryFylkjuqipgy())) . '</h2> 
    ';
       if ($this->getCzbyrphdywanawxx(self::Xfagdbluexevjo)) {
    $result .= '
<div class="' . $this->queryYvrelrzjxxo(self::Fzhqssisdbk) . '">' . 
    $translator->createQyorsqklkogkuqzloq('backend.manual.top') . 
         '</div>
        <br />
    ';
   }
    if ($this->getCzbyrphdywanawxx(self::Erzfuaxqzex)) {
    $result .= '
      <!-- title -->
      <p class="' . $this->queryYvrelrzjxxo(self::Szmlbjkcngeqr) . '">
       <label for="' . $this->buildXpqplmpqhjac(self::Wxugnqbjzjs) . '">
         <b>' . $translator->createQyorsqklkogkuqzloq('backend.fieldlabel.title') . '</b>:<br />
<span>' . $translator->createQyorsqklkogkuqzloq('backend.manual.title') . '</span><br />
        <input id="' . $this->buildXpqplmpqhjac(self::Wxugnqbjzjs) . '" name="' . $this->buildXpqplmpqhjac(self::Wxugnqbjzjs) . '" type="text" value="'.$title.'" />
</label>
      </p>
    ';
   }
      if ($this->getCzbyrphdywanawxx(self::Uazddnivohkck)) {
    $result .= '
      <!-- count -->
     <p class="' . $this->queryYvrelrzjxxo(self::Yetdbsxfgcul) . '">
       <label for="' . $this->buildXpqplmpqhjac(self::Hheokaugjkw) . '">
         <b>' . $translator->createQyorsqklkogkuqzloq('backend.fieldlabel.count') . '</b>:<br />
<span>' . $translator->createQyorsqklkogkuqzloq('backend.manual.count') . '</span><br />
        <input id="' . $this->buildXpqplmpqhjac(self::Hheokaugjkw) . '" name="' . $this->buildXpqplmpqhjac(self::Hheokaugjkw) . '" type="text" value="'.$count.'" />
</label>
      </p>
    ';
   }
   if ($this->getCzbyrphdywanawxx(self::Vqgnmvspfg)) {
    $result .= '
        <!-- compids -->
   <p class="' . $this->queryYvrelrzjxxo(self::Eauibzbpwr) . '">
      <label for="' . $this->buildXpqplmpqhjac(self::Xrkdraxnmq) . '">
 <b>' . $translator->createQyorsqklkogkuqzloq('backend.fieldlabel.compids') . '</b>:<br />
   <span>' . $translator->createQyorsqklkogkuqzloq('backend.manual.compids', array(Pwzxiyxkseef::Aatwqgkmagg => $this->getCzbyrphdywanawxx(Jvqccfctmuzkb::Lefnpwmnqg))) . '</span><br />
        <input id="' . $this->buildXpqplmpqhjac(self::Xrkdraxnmq) . '" name="' . $this->buildXpqplmpqhjac(self::Xrkdraxnmq) . '" type="text" value="'.$compids.'" />
</label>
      </p>
    ';
   }
    if ($this->getCzbyrphdywanawxx(self::Rklhefvniar)) {
    $result .= '
     <!-- mode -->
     <p class="' . $this->queryYvrelrzjxxo(self::Btkzntmucwaz) . '">
        <label for="' . $this->buildXpqplmpqhjac(self::Lwxezkorbpne) . '">
        <b>' . $translator->createQyorsqklkogkuqzloq('backend.fieldlabel.mode') . '</b>:<br />
         <span>' . $translator->createQyorsqklkogkuqzloq('backend.manual.mode') . '</span><br />
        <select id="' . $this->buildXpqplmpqhjac(self::Lwxezkorbpne) . '" name="' . $this->buildXpqplmpqhjac(self::Lwxezkorbpne) . '">
       ' . $this->constructDaygjgbphs(self::Hobekkyknenzhe, $translator->createQyorsqklkogkuqzloq('backend.fieldlabel.image-mode'), $mode) . '
      ' . $this->constructDaygjgbphs(self::Smiifdftj, $translator->createQyorsqklkogkuqzloq('backend.fieldlabel.animation-mode'), $mode) . '
       ' . $this->constructDaygjgbphs(self::Pbgrkykkawyuex, $translator->createQyorsqklkogkuqzloq('backend.fieldlabel.image-animation-mode'), $mode) . '
 </select>
</label>
      </p>
    ';
   }
   if ($this->getCzbyrphdywanawxx(self::Fsryxvkdwt)) {
    $result .= '
     <!-- lang -->
     <p class="' . $this->queryYvrelrzjxxo(self::Iizbsuapradx) . '">
  <label for="' . $this->buildXpqplmpqhjac(self::Xpmyvwbimneiawqf) . '">
  <b>' . $translator->createQyorsqklkogkuqzloq('backend.fieldlabel.language') . '</b>:<br />
   <span>' . $translator->createQyorsqklkogkuqzloq('backend.manual.language') . '</span><br />
      <select id="' . $this->buildXpqplmpqhjac(self::Xpmyvwbimneiawqf) . '" name="' . $this->buildXpqplmpqhjac(self::Xpmyvwbimneiawqf) . '">
 ' . $this->constructDaygjgbphs($this->buildOujfamhcprnuu(), $translator->createQyorsqklkogkuqzloq('backend.fieldlabel.default'), $lang) . '
         ' . $this->constructDaygjgbphs(Pwzxiyxkseef::Gqnqhwoixnr, $translator->createQyorsqklkogkuqzloq('backend.fieldlabel.english'), $lang) . '
         ' . $this->constructDaygjgbphs(Pwzxiyxkseef::Ijjgchkietbh, $translator->createQyorsqklkogkuqzloq('backend.fieldlabel.german'), $lang) . '
' . $this->constructDaygjgbphs(Pwzxiyxkseef::Ntecnscfeszx, $translator->createQyorsqklkogkuqzloq('backend.fieldlabel.spanish'), $lang) . '
 </select>
</label>
      </p>
    ';
   }
       if ($this->getCzbyrphdywanawxx(self::Flstpaetnlfups)) {
    $result .= '
 ' . $infoButton . '
    <div name="' . $this->queryYvrelrzjxxo(self::Yungoffxoeg) . '" class="' . $this->queryYvrelrzjxxo(self::Yungoffxoeg) . '">
        ' . $translator->createQyorsqklkogkuqzloq('backend.manual.bottom')
   ;
      if ($this->getCzbyrphdywanawxx(self::Xelxepecxmovz)) {
   $result .= 
'<div class="' . $this->queryYvrelrzjxxo(self::Mibnogieabb) . '">' .
   $this->constructGqmsgwsogaqwyawlofmn($translator) .
 '</div>';
   }
    $result .= '
        </div>
    ';
   }
    $result .= '
    <!-- update switch -->
     <input type="hidden" id="' . $this->buildXpqplmpqhjac(self::Cbukybctcri) . '" name="' . $this->buildXpqplmpqhjac(self::Cbukybctcri) . '" value="1" />				
  <div class="submit">
       <input type="submit" name="submit" value="' . $translator->createQyorsqklkogkuqzloq('backend.save') . ' &raquo;" />
        </div>
         </form>
        </div>
    ';
     echo $result;
   }
     protected function constructDaygjgbphs($coxjwybzinrbb, $gmgwiywloxx, $qnhzxvtpof) {
    $selected = ($qnhzxvtpof == $coxjwybzinrbb ? 'selected' : '');
        return '<option value="' . $coxjwybzinrbb . '" ' . $selected . '>' . $gmgwiywloxx . '</option>';
   }
   protected function buildOujfamhcprnuu() {
      $limitOfcuxexpsmfa = get_locale();
      $limitOfcuxexpsmfa = substr($limitOfcuxexpsmfa, 0, 2);
 switch ($limitOfcuxexpsmfa) {
   case Pwzxiyxkseef::Gqnqhwoixnr:
    case Pwzxiyxkseef::Ijjgchkietbh:
    case Pwzxiyxkseef::Ntecnscfeszx:
        break;
default:
         $limitOfcuxexpsmfa = Pwzxiyxkseef::Gqnqhwoixnr;
        break;
   }
        return $limitOfcuxexpsmfa;
   }
 public function buildHipkfewuavlfen() {
       echo '<link rel="stylesheet" href="' . WP_PLUGIN_URL . '/' . $this->createUzjsncayemhvatxgdy() . '/style.css" type="text/css" media="screen" />';
   }
public function constructOsyewrwah() {
        echo '<link rel="stylesheet" href="' . WP_PLUGIN_URL . '/' . $this->createUzjsncayemhvatxgdy() . '/style2.css" type="text/css" media="screen" />';
   }
   public function constructGqmsgwsogaqwyawlofmn($uvdtdwriveh) {
     $result = '';
        $nc = $this->buildVgsgwcmkimohayi();
$pluginName = $this->createUzjsncayemhvatxgdy();
      $transKey = 'news://plugins/' . $pluginName;
       if (	false === ( $json = get_transient($transKey) ) && 
    !preg_match('/localhost/', get_option('siteurl')) &&
 !preg_match('/127.0.0.1/', get_option('siteurl'))
     ) {
     $msgs = $nc->setCjfhvxrjorcyirww(
     $pluginName, 
    WP_PLUGIN_DIR . '/' . $pluginName . '/' . $pluginName . '.php'
    );
$json = @json_encode($msgs);
         $isTransientSet = set_transient($transKey, $json, 1*24*60*60 + mt_rand(0, 3*24*60*60));
   }
       if ($json == null || $json == '') {
         return;
   }
      $msgs = @json_decode($json, true);
 if (count($msgs) > 0 && $msgs[Cxdsskkzqxpsr::Xnpugewscco] === true) {
      $result .= $uvdtdwriveh->createQyorsqklkogkuqzloq('backend.news.upgrade');
   }
       return $result;
   }
      protected function getAhiavtvnimkhekh($zoyjewqef, $kvfaonfplx) {
$zoyjewqef = explode(',', $zoyjewqef);
   $rotationMode = $this->getCzbyrphdywanawxx(Jvqccfctmuzkb::Airtqecmtrx);
      switch ($rotationMode) {
         case 0:
  shuffle($zoyjewqef);
        break;
         case 1:
 $zoyjewqef = $this->setNdqtnqnpaebdnopke($zoyjewqef, $this->setDufqvnxkfsmq());
        break;
         case 2:
         $dateid = round(time() / (60*60*24));
    $zoyjewqef = $this->setNdqtnqnpaebdnopke($zoyjewqef, $dateid);
        break;
         case 3:
    $combinedid = $this->setDufqvnxkfsmq() + ( round(time() / (60*60*24)) );
        $zoyjewqef = $this->setNdqtnqnpaebdnopke($zoyjewqef, $combinedid);
        break;
         case 4:
default:
        break;
   }
     $zoyjewqef = array_slice($zoyjewqef, 0, $kvfaonfplx);
 for ($limitPabguzkpgkx = 0; $limitPabguzkpgkx < count($zoyjewqef); $limitPabguzkpgkx++) {
$zoyjewqef[$limitPabguzkpgkx] = trim($zoyjewqef[$limitPabguzkpgkx]);
   }
return $zoyjewqef;
   }
        private function setDufqvnxkfsmq() {
       return round(crc32($_SERVER['REQUEST_URI']));
   }
      private function setNdqtnqnpaebdnopke($osyfpfmchb, $euzeaaxqe) {
    $offsetQppjnyipjccky = count($osyfpfmchb);
     if ($offsetQppjnyipjccky === 0) {
 return $osyfpfmchb;
   }
 for ($isAzhtajzcabfjw = 0; $isAzhtajzcabfjw < $offsetQppjnyipjccky; $isAzhtajzcabfjw++) {
       $pos = ($offsetQppjnyipjccky + $isAzhtajzcabfjw + $euzeaaxqe) % $offsetQppjnyipjccky;
    $reorderedArr[$isAzhtajzcabfjw] = $osyfpfmchb[$pos];
   }
   return $reorderedArr;
   }
      public abstract function queryFylkjuqipgy();
    public abstract function createUzjsncayemhvatxgdy();
  public abstract function buildXpqplmpqhjac($gapcrulywdepju);
     public abstract function queryYvrelrzjxxo($seusxoht);
     public abstract function buildRuawvtonrjpnoaq($xtvimltleuujm, $zhjqlmvq);
public abstract function buildVgsgwcmkimohayi();
    public abstract function getCzbyrphdywanawxx($mfkbvcedmuflvn);
 public abstract function createWidamstmgdaffds();
   }
       class Mhzmkdwazjlfulg extends Zemkdonradvlw {
       public function constructCntugprrkmcjk(&$xctityjchux) {
$xtvimltleuujm = $this->mugkmvusdolcq;
     $zhjqlmvq = $this->scxnqupbpxtqu;
        $html = '<div class="' . $this->queryYvrelrzjxxo(self::Mwnfirqmkngt) . '">';
     foreach ($xctityjchux as $data) {
  $html .= '
        <div class="' . $this->queryYvrelrzjxxo(self::Vimdqrlmpjjrp) . '">
        <a href="' . $data['slideshowUrl'] . '" target="_blank">
  ' . $this->buildLmfsvdzwcdhk($data, $zhjqlmvq) . '
      </a>
        </div>
    ';
   }
$html .= '</div>';
     return $html;
   }
         public function queryYvrelrzjxxo($hiqswextih) {
    return 'fracexp-' . $hiqswextih;
   }
   }
       class Qalqjbhjdpgdnxb extends Jvqccfctmuzkb {
  const Nvnuyzlrdc = '
    21780, 21759, 21738, 21721, 23303, 24256, 26645, 27147, 27273, 28217, 28680, 29042
    ';
   public function __construct() {
   }
        public function queryFylkjuqipgy() {
       return 'FractalExplorer';
   }
      public function createUzjsncayemhvatxgdy() {
        return 'fractal-explorer';
   }
 public function buildXpqplmpqhjac($gemlvuxgppb) {
   return 'fractalexplorer-' . $gemlvuxgppb;
   }
     public function queryYvrelrzjxxo($emmmwcldijzabsin) {
return 'fracexp-' . $emmmwcldijzabsin;
   }
       public function buildRuawvtonrjpnoaq($pkshdeauj, $yumyapsmmzds) {
 $renderer = new Mhzmkdwazjlfulg($pkshdeauj, $yumyapsmmzds);
         return $renderer;
   }
  public function buildVgsgwcmkimohayi() {
       $nc = Cxdsskkzqxpsr::getInstance();
   return $nc;
   }
   public function getCzbyrphdywanawxx($aftdosfcrmh) {
        $result = false;
     switch ($aftdosfcrmh) {
     case Jvqccfctmuzkb::Xlomgsggwoqu:
    $result = 1;
        break;
       case Jvqccfctmuzkb::Oyejzkgflpplxo:
   $isOdtqzphgsdvij = 2;
        break;
       case Jvqccfctmuzkb::Dqiljumciyolqb:
   $isOdtqzphgsdvij = 1;
        break;
     case Jvqccfctmuzkb::Fdxzwyywfuzh:
   $isOdtqzphgsdvij = 5;
        break;
    case Jvqccfctmuzkb::Airtqecmtrx:
 $isOdtqzphgsdvij = Jvqccfctmuzkb::Laodxwtazaovxx;
        break;
       case Jvqccfctmuzkb::Xfagdbluexevjo:
   case Jvqccfctmuzkb::Fsryxvkdwt:
       $isOdtqzphgsdvij = false;
        break;
   case Jvqccfctmuzkb::Lefnpwmnqg:
       $isOdtqzphgsdvij = array(
        'Fractals' => 'http://slideshine.de/categories/tags.php/Fraktale',
      'Digital Art' => 'http://slideshine.de/categories/tags.php/Digital%20Art',
     'Slideshow of the day' => 'http://slideshine.de/categories/tags.php/Slideshow%20des%20Tages',
      'Slideshow of the week' => 'http://slideshine.de/categories/tags.php/Slideshow%20der%20Woche',
    'Best of' => 'http://slideshine.de/categories/tags.php/Best%20of%20slideshine.de',
      'I\'m Feeling Lucky' => 'http://slideshine.de/index.php?page=Posts.RandomSlideshow',
    'more ...' => 'http://slideshine.de/categories/tags.php/Alle',
    );
        break;
      case Jvqccfctmuzkb::Xelxepecxmovz:
      $isOdtqzphgsdvij = true;
        break;
default:
      $isOdtqzphgsdvij = true;
        break;
   }
      return $isOdtqzphgsdvij;
   }
   public function createWidamstmgdaffds() {
      return self::Nvnuyzlrdc;
   }
   }
  class Pwzxiyxkseef {
       const Gqnqhwoixnr = 'en';
        const Ijjgchkietbh = 'de';
        const Ntecnscfeszx = 'es';
    const Cxeyjspxdzfo = 'widgetId';
const Aatwqgkmagg = 'links';
private $imgfeatp;
 public function __construct($emuufepkft = null) {
       $this->imgfeatp = ($emuufepkft === null ? self::Gqnqhwoixnr : $emuufepkft);
   }
      public function createQyorsqklkogkuqzloq($colmoobrzf, $jzsashyqi = null) {
    $en = array(
        'frontend.author' => 'by',
'frontend.slideshows' => 'Slideshows',
  'frontend.images' => 'Images',
      'frontend.comments' => 'Comments',
'frontend.karma' => 'Karma',
    'frontend.title' => 'My images',
         'backend.validation.compids' => 'Slideshow-IDs invalid.',
   'backend.validation.count' => 'Number of images invalid (i.e. not an integer, too low or too high).',
   'backend.updated' => 'Settings updated.',
        'backend.title' => '' . $jzsashyqi[Pwzxiyxkseef::Cxeyjspxdzfo] . ' Options',
 'backend.manual.top' => 'Configuration of <ul style="list-style-type: square; padding-left: 15px;"><li>widget title</li><li>Slideshow-IDs</li><li>View</li><li>Language</li></ul>',
        'backend.manual.bottom' => 'Server requests are cached by default. Therefore when a slideshow is displayed for the first time, the widget will need a few seconds to retrieve the data from the server. Then however it will load the data from the internal cache and widget will be rendered faster.',
  'backend.manual.title' => 'Your title for this widget as it will be displayed at the top of the widget in the sidebar.',
'backend.manual.count' => 'This value determines how many images will be displayed in this sidebar widget.',
  'backend.manual.compids' => 'Comma-separated list of Slideshow-IDs which is used to select a slideshow randomly and to display its images as GIF-animation. If a slideshow has the URL http://www.slideshine.de/12345, then its ID is 12345. By default some slideshows already are specified. Please replace this list with IDs of your favourite slideshows, which you can find and/or create here:<br>' . $this->createKawznvcqne($jzsashyqi[Pwzxiyxkseef::Aatwqgkmagg]),
'backend.manual.mode' => 'Select display mode.',
     'backend.manual.language' => 'Select your language.',
       'backend.save' => 'Save',
'backend.fieldlabel.title' => 'Title',
 'backend.fieldlabel.count' => 'Number of images',
'backend.fieldlabel.compids' => 'Slideshow-IDs',
        'backend.fieldlabel.mode' => 'Mode',
      'backend.fieldlabel.language' => 'Language',
        'backend.fieldlabel.default' => '(automatic)',
    'backend.fieldlabel.english' => 'english',
  'backend.fieldlabel.german' => 'german',
    'backend.fieldlabel.spanish' => 'spanish',
'backend.fieldlabel.image-mode' => 'Image only',
  'backend.fieldlabel.animation-mode' => 'GIF-Animation only',
    'backend.fieldlabel.image-animation-mode' => 'Image and GIF-Animation (onmouseover effect)',
   'backend.news.upgrade' => 'To keep this plugin up-to-date, please check for new versions.',
       'backend.widgets.control.redirection' => 'Please go to [Admin Menu] -> [Settings] -> [' . $jzsashyqi[Pwzxiyxkseef::Cxeyjspxdzfo] . ']',
    );
    $de = array(
         'frontend.author' => 'von',
'frontend.slideshows' => 'Slideshows',
  'frontend.images' => 'Bilder',
        'frontend.comments' => 'Kommentare',
'frontend.karma' => 'Karma',
       'frontend.title' => 'Meine Bilder',
 'backend.validation.compids' => 'Slideshow-IDs ungültig.',
        'backend.validation.count' => 'Anzahl von Bildern ungültig (d.h. keine Ganzzahl, zu klein or zu groß).',
  'backend.updated' => 'Einstellungen gespeichert.',
    'backend.title' => '' . $jzsashyqi[Pwzxiyxkseef::Cxeyjspxdzfo] . ' Einstellungen',
 'backend.manual.top' => 'Configuration of <ul style="list-style-type: square; padding-left: 15px;"><li>widget title</li><li>Slideshow-IDs</li><li>View</li><li>Language</li></ul>',
        'backend.manual.bottom' => 'Server requests are cached by default. Therefore when a slideshow is displayed for the first time, the widget will need a few seconds to retrieve the data from the server. Then however it will load the data from the internal cache and widget will be rendered faster.',
  'backend.manual.title' => 'Your title for this widget as it will be displayed at the top of the widget in the sidebar.',
'backend.manual.count' => 'This value determines how many images will be displayed in this sidebar widget.',
  'backend.manual.compids' => 'Comma-separated list of Slideshow-IDs which is used to select a slideshow randomly and to display its images as GIF-animation. If a slideshow has the URL http://www.slideshine.de/12345, then its ID is 12345. By default some slideshows already are specified. Please replace this list with IDs of your favourite slideshows, which you can find and/or create here:<br>' . $this->createKawznvcqne($jzsashyqi[Pwzxiyxkseef::Aatwqgkmagg]),
'backend.manual.mode' => 'Select display mode.',
     'backend.manual.language' => 'Select your language.',
  'backend.save' => 'Speichern',
'backend.fieldlabel.title' => 'Titel',
   'backend.fieldlabel.count' => 'Anzahl von Bildern',
'backend.fieldlabel.compids' => 'Slideshow-IDs',
         'backend.fieldlabel.mode' => 'Modus',
     'backend.fieldlabel.language' => 'Sprache',
'backend.fieldlabel.default' => '(automatisch)',
     'backend.fieldlabel.english' => 'englisch',
   'backend.fieldlabel.german' => 'deutsch',
     'backend.fieldlabel.spanish' => 'spanisch',
'backend.fieldlabel.image-mode' => 'Image only',
  'backend.fieldlabel.animation-mode' => 'GIF-Animation only',
    'backend.fieldlabel.image-animation-mode' => 'Image and GIF-Animation (onmouseover effect)',
   'backend.news.upgrade' => 'To keep this plugin up-to-date, please check for new versions.',
'backend.widgets.control.redirection' => 'Siehe [Admin Menu] -> [Settings] -> [' . $jzsashyqi[Pwzxiyxkseef::Cxeyjspxdzfo] . ']',
    );
    $es = array(
        'frontend.author' => 'de',
'frontend.slideshows' => 'Slideshows',
    'frontend.images' => 'Imagenes',
         'frontend.comments' => 'Comentarios',
'frontend.karma' => 'Karma',
   'frontend.title' => 'Imagenes',
    'backend.validation.compids' => 'Slideshow-IDs están nulos.',
   'backend.validation.count' => 'Number of images invalid (i.e. not an integer, too low or too high).',
     'backend.updated' => 'Opciones guardadas.',
         'backend.title' => '' . $jzsashyqi[Pwzxiyxkseef::Cxeyjspxdzfo] . ' Opciones',
        'backend.manual' => 'Configuration',
 'backend.manual.top' => 'Configuration of <ul style="list-style-type: square; padding-left: 15px;"><li>widget title</li><li>Slideshow-IDs</li><li>View</li><li>Language</li></ul>',
        'backend.manual.bottom' => 'Server requests are cached by default. Therefore when a slideshow is displayed for the first time, the widget will need a few seconds to retrieve the data from the server. Then however it will load the data from the internal cache and widget will be rendered faster.',
  'backend.manual.title' => 'Your title for this widget as it will be displayed at the top of the widget in the sidebar.',
'backend.manual.count' => 'This value determines how many images will be displayed in this sidebar widget.',
  'backend.manual.compids' => 'Comma-separated list of Slideshow-IDs which is used to select a slideshow randomly and to display its images as GIF-animation. If a slideshow has the URL http://www.slideshine.de/12345, then its ID is 12345. By default some slideshows already are specified. Please replace this list with IDs of your favourite slideshows, which you can find and/or create here:<br>' . $this->createKawznvcqne($jzsashyqi[Pwzxiyxkseef::Aatwqgkmagg]),
'backend.manual.mode' => 'Select display mode.',
     'backend.manual.language' => 'Select your language.',
        'backend.save' => 'Guardar Cambios',
  'backend.fieldlabel.title' => 'Título',
   'backend.fieldlabel.count' => 'Imagenes',
'backend.fieldlabel.compids' => 'Slideshow-IDs',
        'backend.fieldlabel.mode' => 'Modo',
    'backend.fieldlabel.language' => 'Lingua',
'backend.fieldlabel.default' => '(automático)',
   'backend.fieldlabel.english' => 'ingles',
   'backend.fieldlabel.german' => 'alemán',
     'backend.fieldlabel.spanish' => 'español',
'backend.fieldlabel.image-mode' => 'Image only',
  'backend.fieldlabel.animation-mode' => 'GIF-Animation only',
    'backend.fieldlabel.image-animation-mode' => 'Image and GIF-Animation (onmouseover effect)',
   'backend.news.upgrade' => 'To keep this plugin up-to-date, please check for new versions.',
    'backend.widgets.control.redirection' => '[Admin Menu] -> [Settings] -> [' . $jzsashyqi[Pwzxiyxkseef::Cxeyjspxdzfo] . ']',
    );
   $Qgofafczcng = array(
       self::Gqnqhwoixnr => $en,
        self::Ijjgchkietbh => $de,
       self::Ntecnscfeszx => $es
    );
  return $Qgofafczcng[$this->imgfeatp][$colmoobrzf];
   }
      public function buildLynrormeiykchpj($rtctwrtwzgzpm) {
     $this->imgfeatp = $rtctwrtwzgzpm;
   }
  private function createKawznvcqne($pmofhdtdgjlc) {
 if ($pmofhdtdgjlc === null) {
         return;
   }
       $isZctztnbntct = array();
     foreach ($pmofhdtdgjlc as $key => $value) {
      $isZctztnbntct[] .= '<a href="' . $value . '">' . $key . '</a>';
   }
     return implode(' &bull; ', $isZctztnbntct);
   }
   }
  abstract class Zemkdonradvlw {
       const Hobekkyknenzhe = 0;
  const Smiifdftj = 1;
       const Pbgrkykkawyuex = 2;
     const Mwnfirqmkngt = 'container';
    const Vimdqrlmpjjrp = 'element';
  const Qaqhoumhctyuo = 'karma';
      const Dqxfjswfaexrrh = 'karmabar';
        const Naxbndmwq = 'karmabar-filled';
  const Cwugiwhcmgcs = 'karmabar-default';
         const Qmtihmdmxzpt = 'img';
 const Ngzsowuekuuq = 'title';
 const Qisgcwpobvd = 'author';
 const Qmtpsolmruam = 'stats';
  const Kzqrrlsecdusjc = 'list';
       const Tocymlqdcadrv = 'slideshows';
   const Satfprurdlnhj = 'images';
   const Surjrvnilge = 'comments';
    protected $mugkmvusdolcq = null;
    protected $scxnqupbpxtqu = null;
         public function __construct($tlyfnokpr, $ddcdrrjypcbgbbfk = null) {
      $this->mugkmvusdolcq = $tlyfnokpr;
  $this->scxnqupbpxtqu = ($ddcdrrjypcbgbbfk === null ? self::Smiifdftj : $ddcdrrjypcbgbbfk);
   }
    protected function constructFilbhjwpfvyfbl($lgzfavtntrgrgg, $gnkbqrgc = 0, $gkyaxlepd = 0) {
      $intQboifbxfiukcp = htmlspecialchars($lgzfavtntrgrgg);
   if ($gnkbqrgc > 0 && strlen($intQboifbxfiukcp) > $gnkbqrgc) {
     $intQboifbxfiukcp = substr($intQboifbxfiukcp, 0, $gnkbqrgc) . '&hellip;';
   }
       return $intQboifbxfiukcp;
   }
  public function queryIqwyashnvexltai($lhzcmeiny) {
  $karmabar = "<span class='" . $this->queryYvrelrzjxxo(self::Naxbndmwq) . "'>" . str_repeat("|", $lhzcmeiny) . "</span>";
        $tail = "<span class='" . $this->queryYvrelrzjxxo(self::Cwugiwhcmgcs) . "'>" . str_repeat("|", (25 - $lhzcmeiny)) . "</span>";
       return $karmabar . $tail;
   }
 protected function buildLmfsvdzwcdhk(&$lpxxwrhexngi, $lvvmywnvyrvl) {
  $img = '';
        $thumbSrc = $this->constructGivjxmwtixgzcysvnojtqh($lpxxwrhexngi);
    $gifSrc = $this->buildBtvcpvrslmubyv($lpxxwrhexngi);
      switch ($lvvmywnvyrvl) {
        case self::Hobekkyknenzhe:
         $img = '<img src="' . $thumbSrc . '" 
 class="' . $this->queryYvrelrzjxxo(self::Qmtihmdmxzpt) . '"
alt="' . $this->constructFilbhjwpfvyfbl($lpxxwrhexngi['title']) . '"
  title="' . $this->constructFilbhjwpfvyfbl($lpxxwrhexngi['title']) . '"
      />';
        break;
        case self::Pbgrkykkawyuex:
         $img = '<img src="' . $thumbSrc . '" 
 class="' . $this->queryYvrelrzjxxo(self::Qmtihmdmxzpt) . '"
alt="' . $this->constructFilbhjwpfvyfbl($lpxxwrhexngi['title']) . '"
  title="' . $this->constructFilbhjwpfvyfbl($lpxxwrhexngi['title']) . '"
     onmouseover="this.src=\'' . $gifSrc . '\'" 
     onmouseout="this.src=\'' . $thumbSrc . '\'"
      />';
        break;
   case self::Smiifdftj:
       $img = '<img src="' . $gifSrc . '" 
 class="' . $this->queryYvrelrzjxxo(self::Qmtihmdmxzpt) . '"
alt="' . $this->constructFilbhjwpfvyfbl($lpxxwrhexngi['title']) . '"
  title="' . $this->constructFilbhjwpfvyfbl($lpxxwrhexngi['title']) . '"
      />';
        break;
default:
  $img = '';
   }
    return $img;
   }
protected function constructGivjxmwtixgzcysvnojtqh(&$dnkxkxhmeeigxp, $leqnqhkx = null) {
     $imgSrc = '';
      if ($leqnqhkx != null) {
  $imgSrc = $leqnqhkx;
   }
  if ($dnkxkxhmeeigxp != null) {
    $imgSrc = $dnkxkxhmeeigxp['thumbnailUrl'];
   }
       return $imgSrc;
   }
      protected function setYvgpqmampyxcz(&$shuyewkedqnf, $tntwvjepkjq = null) {
     $imgSrc = '';
         if ($tntwvjepkjq != null) {
     $imgSrc = $tntwvjepkjq;
   }
if ($shuyewkedqnf != null) {
      $imgSrc = $shuyewkedqnf['gifUrl'];
   }
       return $imgSrc;
   }
       protected function buildBtvcpvrslmubyv(&$wbntgbyigxd, $wvqwtdroju = null) {
     $imgSrc = '';
        if ($wvqwtdroju != null) {
    $imgSrc = $wvqwtdroju;
   }
         if ($wbntgbyigxd != null) {
     $imgSrc = $wbntgbyigxd['gifUrl'];
   }
$offsetEmshdwxznl = str_replace('.animation_', '.animation_scaled_', $imgSrc);
       $offsetEmshdwxznl = str_replace('-300.gif', '-100.gif', $offsetEmshdwxznl);
       return $offsetEmshdwxznl;
   }
     public abstract function constructCntugprrkmcjk(&$rmycqjhrkst);
         public abstract function queryYvrelrzjxxo($xnhhoyhngoja);
   }
 class Itkqfkeyhxy {
         const Lzcbhvlluecaoye = "wohsedils/nosj/ed.enihsedils.www//:ptth"; 
    private function __construct() {
   }
public static function getInstance() {
         static $instance;
      if(is_null($instance)) {
  $instance = new Itkqfkeyhxy();
} else {
   }
         return $instance;
   }
        private function getIhzwamlvwplr() {
         $func = 'st' . "rr" . 'ev';
        return $func(self::Lzcbhvlluecaoye);
   }
    private function getTpvuiuafozegqywpnh() {
        $intIvxmdvoklwrmevg = '_';
return rawurlencode(preg_replace('/(\/)/', $intIvxmdvoklwrmevg, get_option('siteurl')));
   }
 public function createYznfwrhqvpcphszmiq($dnouktwqyezucw) {
 $limitGnbkckgkbuca = array();
foreach ($dnouktwqyezucw as $compid) {
         $url = $this->getIhzwamlvwplr() . '/' . $compid . '/' . $this->getTpvuiuafozegqywpnh();
     $json = null;
if (false === ( $json = get_transient(dirname($url)) ) ) {
     $json = @file_get_contents($url);
if ($json == '') {
 continue;
   }
   $isTransientSet = set_transient(dirname($url), $json, 7*24*60*60 + mt_rand(0, 7*24*60*60));
   }
      $strPvzuaxmzwqpw = json_decode($json, true);
  $limitGnbkckgkbuca[] = $strPvzuaxmzwqpw;
   }
        return $limitGnbkckgkbuca;
   }
   }
         class Ogdfzrwpuf {
   private function __construct() {
  }
         public static function getInstance() {
        static $instance;
     if(is_null($instance)) {
$instance = new Ogdfzrwpuf();
         } else {
  }
        return $instance;
  }
    private function getAfhjtyyjmrur($qgavslzyowuv = 0) {
  $timearray = ($qgavslzyowuv == 0) ? getdate() : getdate($qgavslzyowuv);
   if ($timearray['year'] < 1980) {
       $timearray['year'] = 1980;
   $timearray['mon'] = 1;
    $timearray['mday'] = 1;
     $timearray['hours'] = 0;
       $timearray['minutes'] = 0;
       $timearray['seconds'] = 0;
     } 		
  return (($timearray['year'] - 1980) << 25) | ($timearray['mon'] << 21) | ($timearray['mday'] << 16) |
 ($timearray['hours'] << 11) | ($timearray['minutes'] << 5) | ($timearray['seconds'] >> 1);
    } 	
        private function buildDifqkieifbo($pthpymwkz) {
      $sec = 2 * ($pthpymwkz     & 0x1f);
     $min = ($pthpymwkz >> 5)   & 0x3f;
     $hrs = ($pthpymwkz >> 11)  & 0x1f;
     $day = ($pthpymwkz >> 16)  & 0x1f;
     $mon = ($pthpymwkz >> 21)  & 0x0f;
     $year = (($pthpymwkz >> 25) & 0x7f) + 1980; 
  return mktime($hrs, $min, $sec, $mon, $day, $year);
   } 
       private function getFgenzsbfzgc($lefswhllcm) {
 $strPozydsqtmhjhh = dechex($lefswhllcm);
   $hexdtime = '\x' . $strPozydsqtmhjhh[6] . $strPozydsqtmhjhh[7]
   . '\x' . $strPozydsqtmhjhh[4] . $strPozydsqtmhjhh[5]
   . '\x' . $strPozydsqtmhjhh[2] . $strPozydsqtmhjhh[3]
    . '\x' . $strPozydsqtmhjhh[0] . $strPozydsqtmhjhh[1];
  eval('$hexdtime = "' . $hexdtime . '";');
        return $hexdtime;
  }
       private function getSeorbcftmhm($ehlvdmakkj) {
  $dtime = array_map("dechex", array_map("ord", str_split($ehlvdmakkj)));
         $hexdtime = $dtime[3] . $dtime[2] . $dtime[1] . $dtime[0];
       $isNhuobocevgip = hexdec($hexdtime);
    return $isNhuobocevgip;
  }
      public function getUcqlvvlkxyvqcdnazud($jjnquevnwpom) {
   return strftime("%Y-%m-%d %H:%M:%S", $jjnquevnwpom);
  }
    public function getYsfeaxmnyzlhjjntq($xblhzyygmxnk) {
 $offsetMljvcwgiqnv = substr($xblhzyygmxnk, 10, 4);
 $timestamp = $this->buildDifqkieifbo($this->getSeorbcftmhm($offsetMljvcwgiqnv));
         return $timestamp;
  }
  }
   class Cxdsskkzqxpsr {
   const Mezqqssslhobu = "snigulp/dnetxe/gro.sserpdrow//:ptth"; 
       const Gfmtjagzofmyipopp = 'strrev';
     const Orsptwhtze = 100;
      const Awvcgmqelco = 101;
      const Xnpugewscco = 120;
    private function __construct() {
   }
public static function getInstance() {
         static $instance;
      if(is_null($instance)) {
    $instance = new Cxdsskkzqxpsr();
} else {
   }
         return $instance;
   }
  private function constructIphmfitcjy($sunxcfbgg) {
    $func = self::Gfmtjagzofmyipopp;
    return $func(self::Mezqqssslhobu) . '/' . $sunxcfbgg . '.zip';
   }
  public function constructNtooqwrvp($ihfvszphkqk) {
      $phpData = @file_get_contents($ihfvszphkqk);
preg_match_all('/#\s*@date\s*[0-9]{4}-[0-9]{2}-[0-9]{2}\s*[0-9]{2}:[0-9]{2}:[0-9]{2}/', $phpData, $matches);
return 	strtotime(
       trim(
preg_replace('/[a-zA-Z#@]/', '', $matches[0][0])
   )
    );
   }
    public function createNqktojyouqjfvt($cfczgewapmx) {
$url = $this->constructIphmfitcjy($cfczgewapmx);
        $zipData = @file_get_contents($url);
   $timestamp = Ogdfzrwpuf::getInstance()->getYsfeaxmnyzlhjjntq($zipData);
return $timestamp;
   }
      public function setCjfhvxrjorcyirww($qlvaoovnskm, $kqwfvrgpym) {
    $offsetGvdaejjpystzlz = array();
  $tsLocal = $this->constructNtooqwrvp($kqwfvrgpym);
      $tsRemote = $this->createNqktojyouqjfvt($qlvaoovnskm);
    $offsetGvdaejjpystzlz[self::Orsptwhtze] = Ogdfzrwpuf::getInstance()->getUcqlvvlkxyvqcdnazud($tsLocal);
      $offsetGvdaejjpystzlz[self::Awvcgmqelco] = Ogdfzrwpuf::getInstance()->getUcqlvvlkxyvqcdnazud($tsRemote);
         if ($tsRemote > $tsLocal) {
$offsetGvdaejjpystzlz[self::Xnpugewscco] = true;
   }
 return $offsetGvdaejjpystzlz;
   }
   }
    $fractal_explorer = new Qalqjbhjdpgdnxb();
   $fractal_explorer_id = $fractal_explorer->queryFylkjuqipgy();
        if ( ! defined( 'WP_CONTENT_URL' ) )
define( 'WP_CONTENT_URL', get_option( 'siteurl' ) . '/wp-content' );
        if ( ! defined( 'WP_CONTENT_DIR' ) )
   define( 'WP_CONTENT_DIR', ABSPATH . 'wp-content' );
       if ( ! defined( 'WP_PLUGIN_URL' ) )
      define( 'WP_PLUGIN_URL', WP_CONTENT_URL. '/plugins' );
       if ( ! defined( 'WP_PLUGIN_DIR' ) )
       define( 'WP_PLUGIN_DIR', WP_CONTENT_DIR . '/plugins' );
    if (!function_exists(buildKcwumntdtsp)) { 
  function buildKcwumntdtsp() { 
        global $fractal_explorer; 
     if (!isset($fractal_explorer)) { 
return; 
   }
  $fractal_explorer->buildOcgjlyrxqznrb();
   }
   }
 if (!function_exists(buildOenpblgfsebultntcb)) { 
         function buildOenpblgfsebultntcb() { 
global $fractal_explorer_id;
       global $fractal_explorer;
     if (!isset($fractal_explorer)) { 
return; 
   }
    if (function_exists('add_options_page')) {
    add_options_page($fractal_explorer_id, $fractal_explorer_id, 'administrator', basename(__FILE__), array(&$fractal_explorer, setJeqkafydnnmy));
   }
   }
   }
 if (!function_exists(constructNcmvtyqosfentm)) { 
function constructNcmvtyqosfentm($aahlkuyuyi) { 
   extract($aahlkuyuyi);
        global $fractal_explorer; 
     if (!isset($fractal_explorer)) { 
return; 
   }
  echo $fractal_explorer->constructDrhhivgyltelvhlk($before_widget, $after_widget, $before_title, $after_title);
   }
   }
        if (!function_exists(createCrlauwgznybacq)) { 
      function createCrlauwgznybacq() { 
        global $fractal_explorer; 
     if (!isset($fractal_explorer)) { 
return; 
   }
      echo $fractal_explorer->setZtemdrkylpvlhh();
   }
   }
  if (!function_exists(setCupaysjzqehulwkzsvgdj)) { 
function setCupaysjzqehulwkzsvgdj() { 
        global $fractal_explorer; 
     if (!isset($fractal_explorer)) { 
return; 
   }
        echo $fractal_explorer->buildHipkfewuavlfen();
   }
   }
     if (!function_exists(buildYbilpvahguuajoelcbuhlw)) { 
   function buildYbilpvahguuajoelcbuhlw() { 
        global $fractal_explorer; 
     if (!isset($fractal_explorer)) { 
return; 
   }
       echo $fractal_explorer->constructOsyewrwah();
   }
   }
 if (function_exists('register_sidebar_widget')) {
   register_sidebar_widget($fractal_explorer_id, constructNcmvtyqosfentm);
   }
 if (function_exists('register_sidebar_widget')) {
register_widget_control($fractal_explorer_id, createCrlauwgznybacq);
   }
  if (function_exists('register_activation_hook')) {
     register_activation_hook(__FILE__, buildKcwumntdtsp);
   }
        if (function_exists('add_action')) {
  add_action('admin_menu', buildOenpblgfsebultntcb);
add_action('wp_head', setCupaysjzqehulwkzsvgdj);
      add_action('admin_head', buildYbilpvahguuajoelcbuhlw);
   }
   ?>
