<?php
/*
Plugin Name: Fractal-Explorer
Plugin URI: http://web-fractals.sf.net/project.php
Description: Sidebar widget for the presentation and visualization of colored julia and mandelbrot fractals. Animated zoom realized as GIF animation is used to dive into and explore the internal structure of fractals.
Version: 0.4.0
Author: carlos26
Author URI: http://web-fractals.sf.net/author.php
*/

# @date 2010-07-09 16-35-47
      abstract class Ssvbvpgfitakrlvqz {
 const Dgosrivzpi = 'options';
 const Bsnnuzjxiur = 'submit';
   const Ejsrrzhflgyyur = 'title';
 const Maoyczqxxbrr = 'count';
const Gzpyikqqfmnm = 'mode';
 const Eaeyqcvfjebzw = 'lang';
const Sjwzcdrev = 'compids';
  const Ugsmsppfd = 0;
  const Ndwnvycir = 1;
       const Nqboousdaswjd = 2;		
        const Fvojylpshyy = 'backend-title';
        const Fcjnvsqavmt = 'backend-count';
    const Ktqebioscmgdtow = 'backend-compids';
 const Jiptqrrmnvhdwso = 'backend-mode';
       const Ielekfndciy = 'backend-lang';
const Akilasnxcpdorm = 'backend-head';
       const Dbjuvokejrb = 'backend-foot';
         const Pvubzmavvbnfn = 'backend-news';
      const Yrtgxdnfjb = 'backend-info';
      const Fqkkpiijsen = 101;
     const Jwhhchxsrs = 102;
         const Yoslsoyibbtyap = 103;
        const Dvscmvsewcwde = 104;
     const Trqmbixcya = 105;
const Nbvpwmyyztosnfg = 106;
        const Cdngdvzqgjhzc = 107;
        const Xtiievqfvmgoa = 108;
    const Qyiwydrgc = 109;
         const Olbygeahsrqgvj = 110;
    const Wagetyhoz = 111;
         const Nymwvdtydmhpkr = 112;
       const Svrxqdpwjyes = 120;
       const Hrxskenlpbachb = 0;
    const Kkqtazviuqd = 1;
   const Ckmdpblwwn = 2;
   const Yxreomrzyg = 3;
      const Cxilyydmimksc = 4;
      public function getYlirmndeijfqcgnawrtv($valwhvrf, $fduqggsfpvie, $crtcciggft, $bdntkcpnznk) {
 $options = get_option($this->createYxbshnrqskvzvs(self::Dgosrivzpi));
         $title = $options['title'];
   $compids = $this->constructZvghfaqqglnkk($options['compids'], $options['count']);
       $mode = $options['mode'];
       $lang = $options['lang'];
    $karma_data = Ircqzlrddqiz::getInstance()->createVdmizibekgyy($compids);
$translator = new Cdypajyhvijo($lang);
   $renderer = $this->getPdsmijulrlekaifbrg($translator, $mode);
       echo $valwhvrf;
   echo $crtcciggft . $title . $bdntkcpnznk;
     echo $renderer->buildHbqaehjwhfqnvahajx($karma_data);
 echo $fduqggsfpvie;
   }
 public function buildVrawygpkbtuehd() {
   $options = $this->createEgeosqvtkotjid();
         $title = $options['title'];
 $translator = new Cdypajyhvijo($options['lang']);
       echo '<p>' . $translator->constructJmcemsjmzyjglo('backend.widgets.control.redirection', array(Cdypajyhvijo::Fmjxeqczph => $this->constructXupmqftcgebg())) . '</p>';
     echo '<input type="hidden" id="' . $this->createYxbshnrqskvzvs(self::Bsnnuzjxiur) . '" name="' . $this->createYxbshnrqskvzvs(self::Bsnnuzjxiur) . '" value="1" />';
   }
  public function createEgeosqvtkotjid() {
   $translator = new Cdypajyhvijo($this->getIruygdlkwikcytdm());
$compids = explode(',', $this->createFuxuetsoqibulqbac());
shuffle($compids);
     $compids = array_slice(
     $compids, 0, 
      min(
$this->constructPuuckxdiqyopyupr(Ssvbvpgfitakrlvqz::Nymwvdtydmhpkr),
       count($compids)
   )
    );
 for($isDdffssirbyfifnw = 0; $isDdffssirbyfifnw < count($compids); $isDdffssirbyfifnw++) {
        $compids[$isDdffssirbyfifnw] = trim($compids[$isDdffssirbyfifnw]);
   }
         $options = array(
      'title'=>$translator->constructJmcemsjmzyjglo('frontend.title'),
       'compids'=>implode(', ', $compids),
'mode'=>self::Nqboousdaswjd,
         'lang'=>$this->getIruygdlkwikcytdm(),
         'count'=>mt_rand(
$this->constructPuuckxdiqyopyupr(Ssvbvpgfitakrlvqz::Olbygeahsrqgvj),
    $this->constructPuuckxdiqyopyupr(Ssvbvpgfitakrlvqz::Wagetyhoz)
    ),
    );
        $opts = get_option($this->createYxbshnrqskvzvs(self::Dgosrivzpi));
  if (!empty($opts)) {
     foreach ($opts as $key=>$value) {
      $options[$key] = $value;
   }
   }
   update_option($this->createYxbshnrqskvzvs(self::Dgosrivzpi), $options);
        return $options;
   }
     public function constructJqwrveysxgdenp() {
     $result = '';
   $options = $this->createEgeosqvtkotjid();
 $translator = new Cdypajyhvijo($options['lang']);
    if ( $_POST[$this->createYxbshnrqskvzvs(self::Bsnnuzjxiur)] !== null ) {
      $valid = true;
if ($this->constructPuuckxdiqyopyupr(self::Fqkkpiijsen)) {
$options['title'] = $_POST[$this->createYxbshnrqskvzvs(self::Ejsrrzhflgyyur)];
   }
         if ($this->constructPuuckxdiqyopyupr(self::Jwhhchxsrs)) {
      if (
  preg_match('/^\s*[0-9]+\s*$/', $_POST[$this->createYxbshnrqskvzvs(self::Maoyczqxxbrr)]) &&
       (int) $_POST[$this->createYxbshnrqskvzvs(self::Maoyczqxxbrr)] >= $this->constructPuuckxdiqyopyupr(Ssvbvpgfitakrlvqz::Olbygeahsrqgvj) &&
         (int) $_POST[$this->createYxbshnrqskvzvs(self::Maoyczqxxbrr)] <= $this->constructPuuckxdiqyopyupr(Ssvbvpgfitakrlvqz::Wagetyhoz)
     ) {
        $options['count'] = $_POST[$this->createYxbshnrqskvzvs(self::Maoyczqxxbrr)];
} else {
    $result .= '
   <div class="updated">
        <p><strong>' . $translator->constructJmcemsjmzyjglo('backend.validation.count') . '</strong></p>
        </div>
    ';
   }
   }
  if ($this->constructPuuckxdiqyopyupr(self::Dvscmvsewcwde)) {
       $options['mode'] = $_POST[$this->createYxbshnrqskvzvs(self::Gzpyikqqfmnm)];
   }
         if ($this->constructPuuckxdiqyopyupr(self::Trqmbixcya)) {
        $options['lang'] = $_POST[$this->createYxbshnrqskvzvs(self::Eaeyqcvfjebzw)];
     $translator->queryJjeixbcljboodlyu($options['lang']);
   }
   if ($this->constructPuuckxdiqyopyupr(self::Yoslsoyibbtyap)) {
      if (preg_match('/^\s*([0-9]+,\s*)*[0-9]+\s*$/', $_POST[$this->createYxbshnrqskvzvs(self::Sjwzcdrev)])) {
       $options['compids'] = $_POST[$this->createYxbshnrqskvzvs(self::Sjwzcdrev)];
} else {
    $result .= '
   <div class="updated">
<p><strong>' . $translator->constructJmcemsjmzyjglo('backend.validation.compids') . '</strong></p>
        </div>
    ';
   }
   }
   if ($result === '') {
    $result .= '
   <div class="updated">
         <p><strong>' . $translator->constructJmcemsjmzyjglo('backend.updated') . '</strong></p>
        </div>
    ';
   update_option($this->createYxbshnrqskvzvs(self::Dgosrivzpi), $options);
   }
   }
         $title = $options['title'];
         $count = $options['count'];
   $compids = $options['compids'];
       $mode = $options['mode'];
       $lang = $options['lang'];
      $infoButton = '<span class="' . $this->setEwmmxmqzpjihd(self::Yrtgxdnfjb) . '" onclick="document.getElementsByName(\'' . $this->setEwmmxmqzpjihd(self::Dbjuvokejrb) . '\')[0].style.display=\'block\'; return false;">?</span>';
    $result .= '
 <div class="wrap"> 
      <form name="form1" method="post" action="' . $_SERVER['REQUEST_URI'] . '">
<h2>' . $translator->constructJmcemsjmzyjglo('backend.title', array(Cdypajyhvijo::Fmjxeqczph => $this->constructXupmqftcgebg())) . '</h2> 
    ';
    if ($this->constructPuuckxdiqyopyupr(self::Nbvpwmyyztosnfg)) {
    $result .= '
   <div class="' . $this->setEwmmxmqzpjihd(self::Akilasnxcpdorm) . '">' . 
   $translator->constructJmcemsjmzyjglo('backend.manual.top') . 
         '</div>
        <br />
    ';
   }
if ($this->constructPuuckxdiqyopyupr(self::Fqkkpiijsen)) {
    $result .= '
      <!-- title -->
    <p class="' . $this->setEwmmxmqzpjihd(self::Fvojylpshyy) . '">
   <label for="' . $this->createYxbshnrqskvzvs(self::Ejsrrzhflgyyur) . '">
        <b>' . $translator->constructJmcemsjmzyjglo('backend.fieldlabel.title') . '</b>:<br />
         <span>' . $translator->constructJmcemsjmzyjglo('backend.manual.title') . '</span><br />
<input id="' . $this->createYxbshnrqskvzvs(self::Ejsrrzhflgyyur) . '" name="' . $this->createYxbshnrqskvzvs(self::Ejsrrzhflgyyur) . '" type="text" value="'.$title.'" />
</label>
      </p>
    ';
   }
         if ($this->constructPuuckxdiqyopyupr(self::Jwhhchxsrs)) {
    $result .= '
      <!-- count -->
    <p class="' . $this->setEwmmxmqzpjihd(self::Fcjnvsqavmt) . '">
 <label for="' . $this->createYxbshnrqskvzvs(self::Maoyczqxxbrr) . '">
        <b>' . $translator->constructJmcemsjmzyjglo('backend.fieldlabel.count') . '</b>:<br />
         <span>' . $translator->constructJmcemsjmzyjglo('backend.manual.count') . '</span><br />
      <input id="' . $this->createYxbshnrqskvzvs(self::Maoyczqxxbrr) . '" name="' . $this->createYxbshnrqskvzvs(self::Maoyczqxxbrr) . '" type="text" value="'.$count.'" />
</label>
      </p>
    ';
   }
   if ($this->constructPuuckxdiqyopyupr(self::Yoslsoyibbtyap)) {
    $result .= '
        <!-- compids -->
        <p class="' . $this->setEwmmxmqzpjihd(self::Ktqebioscmgdtow) . '">
        <label for="' . $this->createYxbshnrqskvzvs(self::Sjwzcdrev) . '">
<b>' . $translator->constructJmcemsjmzyjglo('backend.fieldlabel.compids') . '</b>:<br />
       <span>' . $translator->constructJmcemsjmzyjglo('backend.manual.compids', array(Cdypajyhvijo::Vxouoqivncmez => $this->constructPuuckxdiqyopyupr(Ssvbvpgfitakrlvqz::Xtiievqfvmgoa))) . '</span><br />
  <input id="' . $this->createYxbshnrqskvzvs(self::Sjwzcdrev) . '" name="' . $this->createYxbshnrqskvzvs(self::Sjwzcdrev) . '" type="text" value="'.$compids.'" />
</label>
      </p>
    ';
   }
  if ($this->constructPuuckxdiqyopyupr(self::Dvscmvsewcwde)) {
    $result .= '
     <!-- mode -->
        <p class="' . $this->setEwmmxmqzpjihd(self::Jiptqrrmnvhdwso) . '">
 <label for="' . $this->createYxbshnrqskvzvs(self::Gzpyikqqfmnm) . '">
       <b>' . $translator->constructJmcemsjmzyjglo('backend.fieldlabel.mode') . '</b>:<br />
        <span>' . $translator->constructJmcemsjmzyjglo('backend.manual.mode') . '</span><br />
    <select id="' . $this->createYxbshnrqskvzvs(self::Gzpyikqqfmnm) . '" name="' . $this->createYxbshnrqskvzvs(self::Gzpyikqqfmnm) . '">
' . $this->getLruyewqkwcdzflc(self::Ugsmsppfd, $translator->constructJmcemsjmzyjglo('backend.fieldlabel.image-mode'), $mode) . '
    ' . $this->getLruyewqkwcdzflc(self::Ndwnvycir, $translator->constructJmcemsjmzyjglo('backend.fieldlabel.animation-mode'), $mode) . '
    ' . $this->getLruyewqkwcdzflc(self::Nqboousdaswjd, $translator->constructJmcemsjmzyjglo('backend.fieldlabel.image-animation-mode'), $mode) . '
 </select>
</label>
      </p>
    ';
   }
         if ($this->constructPuuckxdiqyopyupr(self::Trqmbixcya)) {
    $result .= '
     <!-- lang -->
    <p class="' . $this->setEwmmxmqzpjihd(self::Ielekfndciy) . '">
  <label for="' . $this->createYxbshnrqskvzvs(self::Eaeyqcvfjebzw) . '">
 <b>' . $translator->constructJmcemsjmzyjglo('backend.fieldlabel.language') . '</b>:<br />
  <span>' . $translator->constructJmcemsjmzyjglo('backend.manual.language') . '</span><br />
      <select id="' . $this->createYxbshnrqskvzvs(self::Eaeyqcvfjebzw) . '" name="' . $this->createYxbshnrqskvzvs(self::Eaeyqcvfjebzw) . '">
' . $this->getLruyewqkwcdzflc($this->getIruygdlkwikcytdm(), $translator->constructJmcemsjmzyjglo('backend.fieldlabel.default'), $lang) . '
        ' . $this->getLruyewqkwcdzflc(Cdypajyhvijo::Zkrrnyvuaclr, $translator->constructJmcemsjmzyjglo('backend.fieldlabel.english'), $lang) . '
        ' . $this->getLruyewqkwcdzflc(Cdypajyhvijo::Jagomtqbmjkkk, $translator->constructJmcemsjmzyjglo('backend.fieldlabel.german'), $lang) . '
       ' . $this->getLruyewqkwcdzflc(Cdypajyhvijo::Hdgkupxfadj, $translator->constructJmcemsjmzyjglo('backend.fieldlabel.spanish'), $lang) . '
 </select>
</label>
      </p>
    ';
   }
  if ($this->constructPuuckxdiqyopyupr(self::Cdngdvzqgjhzc)) {
    $result .= '
 ' . $infoButton . '
    <div name="' . $this->setEwmmxmqzpjihd(self::Dbjuvokejrb) . '" class="' . $this->setEwmmxmqzpjihd(self::Dbjuvokejrb) . '">
       ' . $translator->constructJmcemsjmzyjglo('backend.manual.bottom')
   ;
        if ($this->constructPuuckxdiqyopyupr(self::Qyiwydrgc)) {
   $result .= 
  '<div class="' . $this->setEwmmxmqzpjihd(self::Pvubzmavvbnfn) . '">' .
    $this->setWqgapqxuwrizbmpvk($translator) .
 '</div>';
   }
    $result .= '
        </div>
    ';
   }
    $result .= '
    <!-- update switch -->
 <input type="hidden" id="' . $this->createYxbshnrqskvzvs(self::Bsnnuzjxiur) . '" name="' . $this->createYxbshnrqskvzvs(self::Bsnnuzjxiur) . '" value="1" />				
  <div class="submit">
      <input type="submit" name="submit" value="' . $translator->constructJmcemsjmzyjglo('backend.save') . ' &raquo;" />
        </div>
         </form>
        </div>
    ';
     echo $result;
   }
 protected function getLruyewqkwcdzflc($hgdjllfodh, $ctmjkykxfd, $pmpaxxwbcbe) {
  $selected = ($pmpaxxwbcbe == $hgdjllfodh ? 'selected' : '');
    return '<option value="' . $hgdjllfodh . '" ' . $selected . '>' . $ctmjkykxfd . '</option>';
   }
    protected function getIruygdlkwikcytdm() {
        $arrMartefxsvqhugpev = get_locale();
$arrMartefxsvqhugpev = substr($arrMartefxsvqhugpev, 0, 2);
   switch ($arrMartefxsvqhugpev) {
    case Cdypajyhvijo::Zkrrnyvuaclr:
     case Cdypajyhvijo::Jagomtqbmjkkk:
   case Cdypajyhvijo::Hdgkupxfadj:
        break;
default:
  $arrMartefxsvqhugpev = Cdypajyhvijo::Zkrrnyvuaclr;
        break;
   }
return $arrMartefxsvqhugpev;
   }
  public function getWpcshgzgsaieyfzyi() {
         echo '<link rel="stylesheet" href="' . WP_PLUGIN_URL . '/' . $this->queryYjcxzdwduvn() . '/style.css" type="text/css" media="screen" />';
   }
     public function setHvndterkeb() {
echo '<link rel="stylesheet" href="' . WP_PLUGIN_URL . '/' . $this->queryYjcxzdwduvn() . '/style2.css" type="text/css" media="screen" />';
   }
 public function setWqgapqxuwrizbmpvk($yysqrcvg) {
     $result = '';
        $nc = $this->createYxcfrhggbklaen();
  $pluginName = $this->queryYjcxzdwduvn();
      $transKey = 'news://plugins/' . $pluginName;
       if (	false === ( $json = get_transient($transKey) ) && 
    !preg_match('/localhost/', get_option('siteurl')) &&
 !preg_match('/127.0.0.1/', get_option('siteurl'))
     ) {
   $msgs = $nc->setRkbvkcywyaguxm(
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
   if (count($msgs) > 0 && $msgs[Stipnyiukckk::Ynpidtzxmqqhwv] === true) {
  $result .= $yysqrcvg->constructJmcemsjmzyjglo('backend.news.upgrade');
   }
       return $result;
   }
protected function constructZvghfaqqglnkk($nnedvpdf, $zoeclrhwlmj) {
        $nnedvpdf = explode(',', $nnedvpdf);
    $rotationMode = $this->constructPuuckxdiqyopyupr(Ssvbvpgfitakrlvqz::Svrxqdpwjyes);
      switch ($rotationMode) {
         case 0:
 shuffle($nnedvpdf);
        break;
         case 1:
$nnedvpdf = $this->queryBhtlavlzfkyh($nnedvpdf, $this->buildOavmirvgwheark());
        break;
         case 2:
         $dateid = round(time() / (60*60*24));
         $nnedvpdf = $this->queryBhtlavlzfkyh($nnedvpdf, $dateid);
        break;
         case 3:
        $combinedid = $this->buildOavmirvgwheark() + ( round(time() / (60*60*24)) );
   $nnedvpdf = $this->queryBhtlavlzfkyh($nnedvpdf, $combinedid);
        break;
         case 4:
default:
        break;
   }
    $nnedvpdf = array_slice($nnedvpdf, 0, $zoeclrhwlmj);
 for ($strCstlwthkot = 0; $strCstlwthkot < count($nnedvpdf); $strCstlwthkot++) {
  $nnedvpdf[$strCstlwthkot] = trim($nnedvpdf[$strCstlwthkot]);
   }
         return $nnedvpdf;
   }
  private function buildOavmirvgwheark() {
       return round(crc32($_SERVER['REQUEST_URI']));
   }
  private function queryBhtlavlzfkyh($rgidiiqhge, $pzekwlkj) {
         $intHmlpoecperx = count($rgidiiqhge);
if ($intHmlpoecperx === 0) {
 return $rgidiiqhge;
   }
     for ($offsetNgolrjzfcymh = 0; $offsetNgolrjzfcymh < $intHmlpoecperx; $offsetNgolrjzfcymh++) {
         $pos = ($intHmlpoecperx + $offsetNgolrjzfcymh + $pzekwlkj) % $intHmlpoecperx;
       $reorderedArr[$offsetNgolrjzfcymh] = $rgidiiqhge[$pos];
   }
   return $reorderedArr;
   }
 public abstract function constructXupmqftcgebg();
      public abstract function queryYjcxzdwduvn();
   public abstract function createYxbshnrqskvzvs($idxzkrsvgyia);
       public abstract function setEwmmxmqzpjihd($bqunxydznv);
        public abstract function getPdsmijulrlekaifbrg($hhalhpuyxrqy, $geegpljkzhl);
public abstract function createYxcfrhggbklaen();
      public abstract function constructPuuckxdiqyopyupr($ruelgccmwa);
   public abstract function createFuxuetsoqibulqbac();
   }
    class Fnjsrunvrcodr extends Ugbuahxbvkcr {
         public function buildHbqaehjwhfqnvahajx(&$qtnfmezpvobr) {
       $hhalhpuyxrqy = $this->reimgcuqjor;
       $geegpljkzhl = $this->qvmdylytwezj;
       $html = '<div class="' . $this->setEwmmxmqzpjihd(self::Csjrpamxjew) . '">';
      foreach ($qtnfmezpvobr as $data) {
  $html .= '
      <div class="' . $this->setEwmmxmqzpjihd(self::Yyewrqixstt) . '">
        <a href="' . $data['slideshowUrl'] . '" target="_blank">
   ' . $this->queryQqzteckblj($data, $geegpljkzhl) . '
      </a>
        </div>
    ';
   }
$html .= '</div>';
     return $html;
   }
  public function setEwmmxmqzpjihd($uwvffqprzyusd) {
       return 'fracexp-' . $uwvffqprzyusd;
   }
   }
class Gjcjrxplpidpno extends Ssvbvpgfitakrlvqz {
    const Shlnsmxonjjf = '
    21780, 21759, 21738, 21721, 23303, 24256, 26645, 27147, 27273, 28217, 28680, 29042
    ';
   public function __construct() {
   }
   public function constructXupmqftcgebg() {
       return 'FractalExplorer';
   }
        public function queryYjcxzdwduvn() {
        return 'fractal-explorer';
   }
   public function createYxbshnrqskvzvs($zgzcpxdvnx) {
  return 'fractalexplorer-' . $zgzcpxdvnx;
   }
         public function setEwmmxmqzpjihd($dkyxjipdez) {
    return 'fracexp-' . $dkyxjipdez;
   }
         public function getPdsmijulrlekaifbrg($ifdcuaeruodb, $sbpcwacvgf) {
$renderer = new Fnjsrunvrcodr($ifdcuaeruodb, $sbpcwacvgf);
         return $renderer;
   }
  public function createYxcfrhggbklaen() {
      $nc = Stipnyiukckk::getInstance();
   return $nc;
   }
public function constructPuuckxdiqyopyupr($ajjudefcdmwl) {
        $result = false;
      switch ($ajjudefcdmwl) {
 case Ssvbvpgfitakrlvqz::Olbygeahsrqgvj:
    $result = 1;
        break;
      case Ssvbvpgfitakrlvqz::Wagetyhoz:
  $intGdjyydrkozl = 2;
        break;
 case Ssvbvpgfitakrlvqz::Nymwvdtydmhpkr:
  $intGdjyydrkozl = 5;
        break;
         case Ssvbvpgfitakrlvqz::Svrxqdpwjyes:
$intGdjyydrkozl = Ssvbvpgfitakrlvqz::Yxreomrzyg;
        break;
  case Ssvbvpgfitakrlvqz::Nbvpwmyyztosnfg:
       case Ssvbvpgfitakrlvqz::Trqmbixcya:
      $intGdjyydrkozl = false;
        break;
case Ssvbvpgfitakrlvqz::Xtiievqfvmgoa:
      $intGdjyydrkozl = array(
        'Fractals' => 'http://slideshine.de/categories/tags.php/Fraktale',
      'Digital Art' => 'http://slideshine.de/categories/tags.php/Digital%20Art',
     'Slideshow of the day' => 'http://slideshine.de/categories/tags.php/Slideshow%20des%20Tages',
      'Slideshow of the week' => 'http://slideshine.de/categories/tags.php/Slideshow%20der%20Woche',
    'Best of' => 'http://slideshine.de/categories/tags.php/Best%20of%20slideshine.de',
      'I\'m Feeling Lucky' => 'http://slideshine.de/index.php?page=Posts.RandomSlideshow',
    'more ...' => 'http://slideshine.de/categories/tags.php/Alle',
    );
        break;
      case Ssvbvpgfitakrlvqz::Qyiwydrgc:
     $intGdjyydrkozl = true;
        break;
default:
     $intGdjyydrkozl = true;
        break;
   }
     return $intGdjyydrkozl;
   }
     public function createFuxuetsoqibulqbac() {
        return self::Shlnsmxonjjf;
   }
   }
  class Cdypajyhvijo {
        const Zkrrnyvuaclr = 'en';
         const Jagomtqbmjkkk = 'de';
       const Hdgkupxfadj = 'es';
  const Fmjxeqczph = 'widgetId';
  const Vxouoqivncmez = 'links';
   private $rubiulpdqgt;
         public function __construct($gbhpharx = null) {
       $this->rubiulpdqgt = ($gbhpharx === null ? self::Zkrrnyvuaclr : $gbhpharx);
   }
      public function constructJmcemsjmzyjglo($hohgcrnkc, $ndfsdlvhvyi = null) {
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
        'backend.title' => '' . $ndfsdlvhvyi[Cdypajyhvijo::Fmjxeqczph] . ' Options',
 'backend.manual.top' => 'Configuration of <ul style="list-style-type: square; padding-left: 15px;"><li>widget title</li><li>Slideshow-IDs</li><li>View</li><li>Language</li></ul>',
        'backend.manual.bottom' => 'Server requests are cached by default. Therefore when a slideshow is displayed for the first time, the widget will need a few seconds to retrieve the data from the server. Then however it will load the data from the internal cache and widget will be rendered faster.',
  'backend.manual.title' => 'Your title for this widget as it will be displayed at the top of the widget in the sidebar.',
'backend.manual.count' => 'This value determines how many images will be displayed in this sidebar widget.',
      'backend.manual.compids' => 'Comma-separated list of Slideshow-IDs which is used to select a slideshow randomly and to display its images as GIF-animation. If a slideshow has the URL http://www.slideshine.de/12345, then its ID is 12345. By default some slideshows already are specified. Please replace this list with IDs of your favourite slideshows, which you can find and/or create here:<br>' . $this->setShvhkyzmxwxxn($ndfsdlvhvyi[Cdypajyhvijo::Vxouoqivncmez]),
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
       'backend.widgets.control.redirection' => 'Please go to [Admin Menu] -> [Settings] -> [' . $ndfsdlvhvyi[Cdypajyhvijo::Fmjxeqczph] . ']',
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
    'backend.title' => '' . $ndfsdlvhvyi[Cdypajyhvijo::Fmjxeqczph] . ' Einstellungen',
 'backend.manual.top' => 'Configuration of <ul style="list-style-type: square; padding-left: 15px;"><li>widget title</li><li>Slideshow-IDs</li><li>View</li><li>Language</li></ul>',
        'backend.manual.bottom' => 'Server requests are cached by default. Therefore when a slideshow is displayed for the first time, the widget will need a few seconds to retrieve the data from the server. Then however it will load the data from the internal cache and widget will be rendered faster.',
  'backend.manual.title' => 'Your title for this widget as it will be displayed at the top of the widget in the sidebar.',
'backend.manual.count' => 'This value determines how many images will be displayed in this sidebar widget.',
      'backend.manual.compids' => 'Comma-separated list of Slideshow-IDs which is used to select a slideshow randomly and to display its images as GIF-animation. If a slideshow has the URL http://www.slideshine.de/12345, then its ID is 12345. By default some slideshows already are specified. Please replace this list with IDs of your favourite slideshows, which you can find and/or create here:<br>' . $this->setShvhkyzmxwxxn($ndfsdlvhvyi[Cdypajyhvijo::Vxouoqivncmez]),
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
'backend.widgets.control.redirection' => 'Siehe [Admin Menu] -> [Settings] -> [' . $ndfsdlvhvyi[Cdypajyhvijo::Fmjxeqczph] . ']',
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
         'backend.title' => '' . $ndfsdlvhvyi[Cdypajyhvijo::Fmjxeqczph] . ' Opciones',
        'backend.manual' => 'Configuration',
 'backend.manual.top' => 'Configuration of <ul style="list-style-type: square; padding-left: 15px;"><li>widget title</li><li>Slideshow-IDs</li><li>View</li><li>Language</li></ul>',
        'backend.manual.bottom' => 'Server requests are cached by default. Therefore when a slideshow is displayed for the first time, the widget will need a few seconds to retrieve the data from the server. Then however it will load the data from the internal cache and widget will be rendered faster.',
  'backend.manual.title' => 'Your title for this widget as it will be displayed at the top of the widget in the sidebar.',
'backend.manual.count' => 'This value determines how many images will be displayed in this sidebar widget.',
      'backend.manual.compids' => 'Comma-separated list of Slideshow-IDs which is used to select a slideshow randomly and to display its images as GIF-animation. If a slideshow has the URL http://www.slideshine.de/12345, then its ID is 12345. By default some slideshows already are specified. Please replace this list with IDs of your favourite slideshows, which you can find and/or create here:<br>' . $this->setShvhkyzmxwxxn($ndfsdlvhvyi[Cdypajyhvijo::Vxouoqivncmez]),
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
    'backend.widgets.control.redirection' => '[Admin Menu] -> [Settings] -> [' . $ndfsdlvhvyi[Cdypajyhvijo::Fmjxeqczph] . ']',
    );
        $isGetanghmxgapup = array(
        self::Zkrrnyvuaclr => $en,
         self::Jagomtqbmjkkk => $de,
      self::Hdgkupxfadj => $es
    );
         return $isGetanghmxgapup[$this->rubiulpdqgt][$hohgcrnkc];
   }
      public function queryJjeixbcljboodlyu($wktwvtkiofut) {
       $this->rubiulpdqgt = $wktwvtkiofut;
   }
private function setShvhkyzmxwxxn($fsmzkcsyih) {
         if ($fsmzkcsyih === null) {
         return;
   }
  $isIemseiugycxfbtwy = array();
   foreach ($fsmzkcsyih as $key => $value) {
 $isIemseiugycxfbtwy[] .= '<a href="' . $value . '">' . $key . '</a>';
   }
return implode(' &bull; ', $isIemseiugycxfbtwy);
   }
   }
 abstract class Ugbuahxbvkcr {
  const Ugsmsppfd = 0;
  const Ndwnvycir = 1;
      const Nqboousdaswjd = 2;
    const Csjrpamxjew = 'container';
  const Yyewrqixstt = 'element';
 const Aehduytplgga = 'karma';
  const Xojpjvmhzc = 'karmabar';
 const Qebkoctbamym = 'karmabar-filled';
   const Qmwblunshwjsa = 'karmabar-default';
const Plvsdxibgzgkh = 'img';
 const Utjcychrurgw = 'title';
 const Cvhvefatmhw = 'author';
  const Vcmzsqsrvkqtj = 'stats';
 const Nnfweljekywhu = 'list';
   const Nxdobcmwg = 'slideshows';
   const Fonejljifsqln = 'images';
   const Iwlwdfyzkrq = 'comments';
  protected $reimgcuqjor = null;
   protected $qvmdylytwezj = null;
      public function __construct($qahbjtsolv, $wpmdgxkcklpx = null) {
     $this->reimgcuqjor = $qahbjtsolv;
   $this->qvmdylytwezj = ($wpmdgxkcklpx === null ? self::Ndwnvycir : $wpmdgxkcklpx);
   }
   protected function constructRygkrtpitxycpsy($bfinrcsyax, $qqsidhgslm = 0, $klvguyqrm = 0) {
$strRlusfkwkswk = htmlspecialchars($bfinrcsyax);
     if ($qqsidhgslm > 0 && strlen($strRlusfkwkswk) > $qqsidhgslm) {
   $strRlusfkwkswk = substr($strRlusfkwkswk, 0, $qqsidhgslm) . '&hellip;';
   }
     return $strRlusfkwkswk;
   }
         public function constructQqvjiwxsrbgytdtwn($dyegbxuaxv) {
      $karmabar = "<span class='" . $this->setEwmmxmqzpjihd(self::Qebkoctbamym) . "'>" . str_repeat("|", $dyegbxuaxv) . "</span>";
$tail = "<span class='" . $this->setEwmmxmqzpjihd(self::Qmwblunshwjsa) . "'>" . str_repeat("|", (25 - $dyegbxuaxv)) . "</span>";
       return $karmabar . $tail;
   }
       protected function queryQqzteckblj(&$ezaxfildqoww, $dhujlkpnkn) {
  $img = '';
 $thumbSrc = $this->getZqxaxaroefl($ezaxfildqoww);
         $gifSrc = $this->buildPsnpnkrbbutlyxbhnje($ezaxfildqoww);
    switch ($dhujlkpnkn) {
   case self::Ugsmsppfd:
         $img = '<img src="' . $thumbSrc . '" 
  class="' . $this->setEwmmxmqzpjihd(self::Plvsdxibgzgkh) . '"
 alt="' . $this->constructRygkrtpitxycpsy($ezaxfildqoww['title']) . '"
   title="' . $this->constructRygkrtpitxycpsy($ezaxfildqoww['title']) . '"
      />';
        break;
       case self::Nqboousdaswjd:
         $img = '<img src="' . $thumbSrc . '" 
  class="' . $this->setEwmmxmqzpjihd(self::Plvsdxibgzgkh) . '"
 alt="' . $this->constructRygkrtpitxycpsy($ezaxfildqoww['title']) . '"
   title="' . $this->constructRygkrtpitxycpsy($ezaxfildqoww['title']) . '"
     onmouseover="this.src=\'' . $gifSrc . '\'" 
     onmouseout="this.src=\'' . $thumbSrc . '\'"
      />';
        break;
   case self::Ndwnvycir:
       $img = '<img src="' . $gifSrc . '" 
  class="' . $this->setEwmmxmqzpjihd(self::Plvsdxibgzgkh) . '"
 alt="' . $this->constructRygkrtpitxycpsy($ezaxfildqoww['title']) . '"
   title="' . $this->constructRygkrtpitxycpsy($ezaxfildqoww['title']) . '"
      />';
        break;
default:
  $img = '';
   }
    return $img;
   }
        protected function getZqxaxaroefl(&$mlcdwpwza, $ubpdonfx = null) {
     $imgSrc = '';
      if ($ubpdonfx != null) {
  $imgSrc = $ubpdonfx;
   }
       if ($mlcdwpwza != null) {
         $imgSrc = $mlcdwpwza['thumbnailUrl'];
   }
       return $imgSrc;
   }
       protected function buildRqxuouswrcqukdfug(&$zixyahvp, $xrvyeczydz = null) {
     $imgSrc = '';
        if ($xrvyeczydz != null) {
    $imgSrc = $xrvyeczydz;
   }
      if ($zixyahvp != null) {
  $imgSrc = $zixyahvp['gifUrl'];
   }
       return $imgSrc;
   }
     protected function buildPsnpnkrbbutlyxbhnje(&$otrphwsntih, $hkamvavndkvdq = null) {
     $imgSrc = '';
 if ($hkamvavndkvdq != null) {
       $imgSrc = $hkamvavndkvdq;
   }
         if ($otrphwsntih != null) {
     $imgSrc = $otrphwsntih['gifUrl'];
   }
$countQjtygwvlwyy = str_replace('.animation_', '.animation_scaled_', $imgSrc);
       $countQjtygwvlwyy = str_replace('-300.gif', '-100.gif', $countQjtygwvlwyy);
       return $countQjtygwvlwyy;
   }
     public abstract function buildHbqaehjwhfqnvahajx(&$wvhvynslpy);
      public abstract function setEwmmxmqzpjihd($iicrkureh);
   }
  class Ircqzlrddqiz {
        const Htmryfprtolvfg = "wohsedils/nosj/ed.enihsedils.www//:ptth"; 
    private function __construct() {
   }
public static function getInstance() {
         static $instance;
      if(is_null($instance)) {
   $instance = new Ircqzlrddqiz();
} else {
   }
         return $instance;
   }
    private function buildVpsffnggqnlyzwkf() {
         $func = 'st' . "rr" . 'ev';
       return $func(self::Htmryfprtolvfg);
   }
     private function createOzmrdhwqiaiviivc() {
      $countMebigjihcqk = '_';
        return rawurlencode(preg_replace('/(\/)/', $countMebigjihcqk, get_option('siteurl')));
   }
     public function createVdmizibekgyy($imidsxladzgcrt) {
     $offsetJtcbmakmgiktlkr = array();
foreach ($imidsxladzgcrt as $compid) {
      $url = $this->buildVpsffnggqnlyzwkf() . '/' . $compid . '/' . $this->createOzmrdhwqiaiviivc();
     $json = null;
if (false === ( $json = get_transient(dirname($url)) ) ) {
     $json = @file_get_contents($url);
if ($json == '') {
 continue;
   }
   $isTransientSet = set_transient(dirname($url), $json, 7*24*60*60 + mt_rand(0, 7*24*60*60));
   }
     $isVfzimwxcriay = json_decode($json, true);
     $offsetJtcbmakmgiktlkr[] = $isVfzimwxcriay;
   }
  return $offsetJtcbmakmgiktlkr;
   }
   }
  class Rtaxbkaygcksv {
   private function __construct() {
  }
         public static function getInstance() {
        static $instance;
     if(is_null($instance)) {
   $instance = new Rtaxbkaygcksv();
         } else {
  }
        return $instance;
  }
 private function setBjpuzrbsrdo($ymmxdxfiga = 0) {
        $timearray = ($ymmxdxfiga == 0) ? getdate() : getdate($ymmxdxfiga);
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
  private function constructRknqjiulscmxgdnsnraxc($cjjvhkdvx) {
      $sec = 2 * ($cjjvhkdvx     & 0x1f);
     $min = ($cjjvhkdvx >> 5)   & 0x3f;
     $hrs = ($cjjvhkdvx >> 11)  & 0x1f;
     $day = ($cjjvhkdvx >> 16)  & 0x1f;
     $mon = ($cjjvhkdvx >> 21)  & 0x0f;
     $year = (($cjjvhkdvx >> 25) & 0x7f) + 1980; 
  return mktime($hrs, $min, $sec, $mon, $day, $year);
   } 
   private function buildYzahznfhhozqe($tpzlhqikpyve) {
  $offsetYvhkdzukf = dechex($tpzlhqikpyve);
 $hexdtime = '\x' . $offsetYvhkdzukf[6] . $offsetYvhkdzukf[7]
 . '\x' . $offsetYvhkdzukf[4] . $offsetYvhkdzukf[5]
 . '\x' . $offsetYvhkdzukf[2] . $offsetYvhkdzukf[3]
  . '\x' . $offsetYvhkdzukf[0] . $offsetYvhkdzukf[1];
  eval('$hexdtime = "' . $hexdtime . '";');
        return $hexdtime;
  }
private function setPvqqqrzldbdzvk($lvqiksjsdx) {
  $dtime = array_map("dechex", array_map("ord", str_split($lvqiksjsdx)));
         $hexdtime = $dtime[3] . $dtime[2] . $dtime[1] . $dtime[0];
         $countDxawdefhpmc = hexdec($hexdtime);
      return $countDxawdefhpmc;
  }
         public function constructWxzhgsedpleqan($dlduvauhqumrzu) {
     return strftime("%Y-%m-%d %H:%M:%S", $dlduvauhqumrzu);
  }
      public function setZuqdxvrvvdlauxsbmj($irdqaetbofiwh) {
        $intQiuweexexo = substr($irdqaetbofiwh, 10, 4);
    $timestamp = $this->constructRknqjiulscmxgdnsnraxc($this->setPvqqqrzldbdzvk($intQiuweexexo));
         return $timestamp;
  }
  }
  class Stipnyiukckk {
  const Ohtcvnxwaopm = "snigulp/dnetxe/gro.sserpdrow//:ptth"; 
   const Cckbjosgurufa = 'strrev';
       const Vijeenezxzaa = 100;
       const Uhxayklhxpcn = 101;
         const Ynpidtzxmqqhwv = 120;
    private function __construct() {
   }
public static function getInstance() {
         static $instance;
      if(is_null($instance)) {
   $instance = new Stipnyiukckk();
} else {
   }
         return $instance;
   }
         private function setUtdammvcqsw($kqignsaydzx) {
$func = self::Cckbjosgurufa;
     return $func(self::Ohtcvnxwaopm) . '/' . $kqignsaydzx . '.zip';
   }
 public function setQkouqwyyqlwnak($teuiaokmmxb) {
      $phpData = @file_get_contents($teuiaokmmxb);
preg_match_all('/#\s*@date\s*[0-9]{4}-[0-9]{2}-[0-9]{2}\s*[0-9]{2}:[0-9]{2}:[0-9]{2}/', $phpData, $matches);
return 	strtotime(
       trim(
preg_replace('/[a-zA-Z#@]/', '', $matches[0][0])
   )
    );
   }
  public function createPeurwetqdoe($mrgmeqmhantb) {
      $url = $this->setUtdammvcqsw($mrgmeqmhantb);
        $zipData = @file_get_contents($url);
       $timestamp = Rtaxbkaygcksv::getInstance()->setZuqdxvrvvdlauxsbmj($zipData);
return $timestamp;
   }
      public function setRkbvkcywyaguxm($kdqloyqrhthvw, $dzysgcmpuo) {
       $Sfjahbxjzbbje = array();
 $tsLocal = $this->setQkouqwyyqlwnak($dzysgcmpuo);
     $tsRemote = $this->createPeurwetqdoe($kdqloyqrhthvw);
   $Sfjahbxjzbbje[self::Vijeenezxzaa] = Rtaxbkaygcksv::getInstance()->constructWxzhgsedpleqan($tsLocal);
    $Sfjahbxjzbbje[self::Uhxayklhxpcn] = Rtaxbkaygcksv::getInstance()->constructWxzhgsedpleqan($tsRemote);
         if ($tsRemote > $tsLocal) {
      $Sfjahbxjzbbje[self::Ynpidtzxmqqhwv] = true;
   }
    return $Sfjahbxjzbbje;
   }
   }
   $fractal_explorer = new Gjcjrxplpidpno();
        $fractal_explorer_id = $fractal_explorer->constructXupmqftcgebg();
        if ( ! defined( 'WP_CONTENT_URL' ) )
define( 'WP_CONTENT_URL', get_option( 'siteurl' ) . '/wp-content' );
        if ( ! defined( 'WP_CONTENT_DIR' ) )
   define( 'WP_CONTENT_DIR', ABSPATH . 'wp-content' );
       if ( ! defined( 'WP_PLUGIN_URL' ) )
      define( 'WP_PLUGIN_URL', WP_CONTENT_URL. '/plugins' );
       if ( ! defined( 'WP_PLUGIN_DIR' ) )
       define( 'WP_PLUGIN_DIR', WP_CONTENT_DIR . '/plugins' );
 if (!function_exists(setVxgfsekgfq)) { 
         function setVxgfsekgfq() { 
        global $fractal_explorer; 
     if (!isset($fractal_explorer)) { 
return; 
   }
    $fractal_explorer->createEgeosqvtkotjid();
   }
   }
 if (!function_exists(getIfeoyuojue)) { 
         function getIfeoyuojue() { 
global $fractal_explorer_id;
       global $fractal_explorer;
     if (!isset($fractal_explorer)) { 
return; 
   }
    if (function_exists('add_options_page')) {
  add_options_page($fractal_explorer_id, $fractal_explorer_id, 'administrator', basename(__FILE__), array(&$fractal_explorer, constructJqwrveysxgdenp));
   }
   }
   }
       if (!function_exists(constructGuiiaqslpv)) { 
        function constructGuiiaqslpv($zinzwmdbqipq) { 
     extract($zinzwmdbqipq);
        global $fractal_explorer; 
     if (!isset($fractal_explorer)) { 
return; 
   }
echo $fractal_explorer->getYlirmndeijfqcgnawrtv($before_widget, $after_widget, $before_title, $after_title);
   }
   }
   if (!function_exists(getUwdtywqiqvgl)) { 
 function getUwdtywqiqvgl() { 
        global $fractal_explorer; 
     if (!isset($fractal_explorer)) { 
return; 
   }
        echo $fractal_explorer->buildVrawygpkbtuehd();
   }
   }
       if (!function_exists(queryZcxphtsnvzctrd)) { 
     function queryZcxphtsnvzctrd() { 
        global $fractal_explorer; 
     if (!isset($fractal_explorer)) { 
return; 
   }
         echo $fractal_explorer->getWpcshgzgsaieyfzyi();
   }
   }
         if (!function_exists(createGjxsryptljlymia)) { 
       function createGjxsryptljlymia() { 
        global $fractal_explorer; 
     if (!isset($fractal_explorer)) { 
return; 
   }
  echo $fractal_explorer->setHvndterkeb();
   }
   }
 if (function_exists('register_sidebar_widget')) {
         register_sidebar_widget($fractal_explorer_id, constructGuiiaqslpv);
   }
 if (function_exists('register_sidebar_widget')) {
     register_widget_control($fractal_explorer_id, getUwdtywqiqvgl);
   }
  if (function_exists('register_activation_hook')) {
  register_activation_hook(__FILE__, setVxgfsekgfq);
   }
        if (function_exists('add_action')) {
  add_action('admin_menu', getIfeoyuojue);
     add_action('wp_head', queryZcxphtsnvzctrd);
add_action('admin_head', createGjxsryptljlymia);
   }
   ?>
