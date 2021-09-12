<?php
//its not easy remember all those html browser defined colors ..hence we define it in simple terms so that we can use it in frontend.


//red color definitions
define("red0","Red");//normal
define("red1","LightSalmon");//from light^
define("red2","Salmon");
define("red3","DarkSalmon");
define("red4","LightCoral");
define("red5","IndianRed");
define("red6","Crimson");
define("red7","FireBrick");
define("red8","DarkRed");

//blue color definitions 

define("blue0","Blue");
define("blue1","CadetBlue");
define("blue2","SteelBlue");
define("blue3","LightSteelBlue");
define("blue4","LightBlue");
define("blue5","PowderBlue");
define("blue6","LightSkyBlue");
define("blue7","SkyBlue");
define("blue8","CornflowerBlue");
define("blue9","DeepSkyBlue");
define("blue10","DodgerBlue");
define("blue11","RoyalBlue");
define("blue12","MediumBlue");
define("blue13","DarkBlue");
define("blue14","Navy");
define("blue15","MidnightBlue");




//pink color definitions

define("pink0","Pink");
define("pink1","LightPink");
define("pink2","HotPink");
define("pink3","DeepPink");
define("pink4","PaleVioletRed");
define("pink5","MediumVioletRed");



//purple color definitions

define("purple0","Purple");
define("purple1","Lavender");
define("purple2","Thistle");
define("purple3","Plum");
define("purple4","Orchid");
define("purple5","Violet");
define("purple6","Fuchsia");
define("purple7","Magenta");
define("purple8","MediumOrchid");
define("purple9","DarkOrchid");
define("purple10","DarkViolet");
define("purple11","BlueViolet");
define("purple12","DarkMagenta");
define("purple13","MediumPurple");
define("purple14","MediumSlateBlue");
define("purple15","SlateBlue");
define("purple16","DarkSlateBlue");
define("purple17","RebeccaPurple");
define("purple18","Indigo");


//orange color definitions

define("orange0","Orange");
define("orange1","DarkOrange");
define("orange2","Coral");
define("orange3","Tomato");
define("orange4","OrangeRed");


//yellow color definitions

define("yellow0","Yellow");
define("yellow1","Gold");
define("yellow2","LightYellow");
define("yellow3","LemonChiffon");
define("yellow4","LightGoldenRodYellow");
define("yellow5","PapayaWhip");
define("yellow6","Moccasin");
define("yellow7","PeachPuff");
define("yellow8","PaleGoldenRod");
define("yellow9","Khaki");
define("yellow10","DarkKhaki");

//green color definitions
define("green0","Green");
define("green1","GreenYellow");
define("green2","Chartreuse");
define("green3","LawnGreen");
define("green4","Lime");
define("green5","LimeGreen");
define("green6","PaleGreen");
define("green7","LightGreen");
define("green8","MediumSpringGreen");
define("green9","SpringGreen");
define("green10","MediumSeaGreen");
define("green11","SeaGreen");
define("green12","ForestGreen");
define("green13","DarkGreen");
define("green14","YellowGreen");
define("green15","OliveDrab");
define("green16","DarkOliveGreen");
define("green17","MediumAquaMarine");
define("green18","DarkSeaGreen");
define("green19","LightSeaGreen");
define("green20","DarkCyan");
define("green21","Teal");



//cyan color definitions
define("cyan0","Cyan");
define("cyan1","Aqua");
define("cyan2","LightCyan");
define("cyan3","PaleTurquoise");
define("cyan4","Aquamarine");
define("cyan5","Turquoise");
define("cyan6","MediumTurquoise");
define("cyan7","DarkTurquoise");


//brown color definitions
define("brown0","Brown");
define("brown1","Cornsilk");
define("brown2","BlanchedAlmond");
define("brown3","Bisque");
define("brown4","NavajoWhite");
define("brown5","Wheat");
define("brown6","BurlyWood");
define("brown7","Tan");
define("brown8","RosyBrown");
define("brown9","SandyBrown");
define("brown10","GoldenRod");
define("brown11","DarkGoldenRod");
define("brown12","Peru");
define("brown13","Chocolate");
define("brown14","Olive");
define("brown15","SaddleBrown");
define("brown16","Sienna");
define("brown17","Maroon");

//white color definitions
define("white0","White");
define("white1","Snow");
define("white2","HoneyDew");
define("white3","MintCream");
define("white4","Azure");
define("white5","AliceBlue");
define("white6","GhostWhite");
define("white7","WhiteSmoke");
define("white8","SeaShell");
define("white9","Beige");
define("white10","OldLace");
define("white11","FloralWhite");
define("white12","Ivory");
define("white13","AntigueWhite");
define("white14","Linen");
define("white15","LavenderBlush");
define("white16","MistyRose");

//black color definitions
define("black0","Black");
define("black1","Gainsboro");
define("black2","Silver");
define("black3","DarkGray");
define("black4","DimGray");
define("black5","Gray");
define("black6","LightSlateGray");
define("black7","SlateGray");
define("black8","DarkSlateGray");


//color definitions ends here`




class set_timeout {
private $timeout ;
public $multiple_id;
public $property;

public function __construct($tout = '0'){
$this->timeout = $tout;
}


public function perform(){

if($this->multiple_id != ""){
$mids = explode(",",$this->multiple_id);
print '<script type="text/javascript">
function runthis() {';

foreach($mids as $ppk=>$ids){
foreach($this->property as $propreq=>$valreq){



if($propreq == "width" ){
print  '
var wid = document.getElementById("' . $ids . '");

wid.style.width = "' . $valreq . '";


';
}

elseif($propreq == "height" ){
print  '
var hei = document.getElementById("' . $ids . '");

hei.style.height = "' . $valreq . '";



';
}


elseif($propreq == "flow"){
print '
var flw = document.getElementById("' . $ids . '");

flw.style.cssFloat = "' . $valreq . 
'";

';

}


elseif($propreq == "scroll" ){
print  '
var scr = document.getElementById("' . $ids . '");

scr.style.overflow = "' . $valreq . '";

';



}



elseif($propreq == "position" ){
print '
var posi = document.getElementById("' . $ids . '");

posi.style.position = "' . $valreq . '";


';
}


elseif($propreq == "mtop" ){
print  '
var mto = document.getElementById("' . $ids . '");

mto.style.marginTop = "' . $valreq . '";


';
}


elseif($propreq == "mbottom" ){
print '
var mbot = document.getElementById("' . $ids . '");

mbot.style.marginBottom = "' . $valreq . '";


';
}


elseif($propreq == "mleft"){
print  '
var mle = document.getElementById("' . $ids . '");

mle.style.marginLeft = "' . $valreq . '";


';
}


elseif($propreq == "mright"){
print   '
var mri = document.getElementById("' . $ids . '");

mri.style.marginRight = "' . $valreq . '";


';
}



elseif($propreq == "border" ){
print '
var bord = document.getElementById("' . $ids . '");

bord.style.border = "' . $valreq . '";



';
}

elseif($propreq == "bborder" ){
print '
var bbo = document.getElementById("' . $ids . '");

bbo.style.borderBottom = "' . $valreq . '";



';
}

elseif($propreq == "bradius" ){
print  '
var brad = document.getElementById("' . $ids . '");

brad.style.borderRadius = "' . $valreq . '";



';
}

elseif($propreq == "fade" ){
print  '
var fad = document.getElementById("' . $ids . '");

fad.style.opacity = "' . $valreq . '";



';
}


elseif($propreq == "fly" ){
print  '
var fll = document.getElementById("' . $ids . '");

fll.style.zIndex = "' . $valreq . '";


';
}

elseif($propreq == "bg"){
print  '
var bgg = document.getElementById("' . $ids . '");

bgg.style.backgroundColor = "' . $valreq . '";


';
}


elseif($propreq == "outline"){
print  '
var otl = document.getElementById("' . $ids . '");

otl.style.outline = "' . $valreq . '";



';
}


elseif($propreq == "display" ){
print  '
var dsp = document.getElementById("' . $ids . '");

dsp.style.display = "' . $valreq . '";



';
}

elseif($propreq == "etype" ){
print  '
var ety = document.getElementById("' . $ids . '");

ety.type = "' . $valreq . '";



';
}

elseif($propreq == "hint" ){
print  '
var hin = document.getElementById("' . $ids . '");

hin.placeholder = "' . $valreq . '";



';
}

elseif($propreq == "ttype" ){
print  '
var tty = document.getElementById("' . $ids . '");

tty.style.fontWeight = "' . $valreq . '";



';
}

elseif($propreq == "tfamily" ){
print  '
var tfam = document.getElementById("' . $ids . '");

tfam.style.fontFamily = "' . $valreq . '";



';
}


elseif($propreq == "tcolor" ){
print  '
var tcol = document.getElementById("' . $ids . '");

tcol.style.color = "' . $valreq . '";



';
}


elseif($propreq == "text" ){
print  '
var txtt = document.getElementById("' . $ids . '");

txtt.innerHTML = "' . $valreq . '";



';
}

elseif($propreq == "value" ){
print  '
var vall = document.getElementById("' . $ids . '");

vall.value = "' . $valreq . '";



';
}


elseif($propreq == "align" ){
print  '
var algn = document.getElementById("' . $ids . '");

algn.align = "' . $valreq . '";



';
}

elseif($propreq == "tsize" ){
print  '
var tsz = document.getElementById("' . $ids . '");

tsz.style.fontSize = "' . $valreq . '";



';
}

elseif($propreq == "min" ){
print  '
var nmin = document.getElementById("' . $ids . '");

nmin.min = "' . $valreq . '";



';
}

elseif($propreq == "step" ){
print  '
var nstp = document.getElementById("' . $ids . '");

nstp.step = "' . $valreq . '";



';
}


elseif($propreq == "max" ){
print  '
var nmax = document.getElementById("' . $ids . '");

nmax.max = "' . $valreq . '";



';
}

elseif($propreq == "name" ){
print  '
var enm = document.getElementById("' . $ids . '");

enm.name = "' . $valreq . '";



';
}


elseif($propreq == "gohttp" ){
print  '
window.location.replace("http://' . 

$valreq . '");



';
}

elseif($propreq == "gohttps" ){
print  '
window.location.replace("https://' . 

$valreq . '");



';
}


elseif($propreq == "go" )
{
print  '
window.location.replace("' . 

$valreq . '");



';
}


elseif($propreq == "message" ){
print  '
alert("' . $valreq . '");
';



}





}//foreach ends
}

 

print '

}

setTimeout(runthis,' . $this->timeout . ');

</script>';

}

else {
print("timeout class lacks view");
}

}


public function perform_in(){

print '


function runthis() {' ;

if($this->multiple_id != ""){
$allid = explode(",",$this->multiple_id);
foreach($allid as $rk=>$ids){
foreach($this->property as $propreq=>$valreq){






if($propreq == "width" ){
print  '
var wi = document.getElementById("' . $ids . '");

wi.style.width = "' . $valreq . '";


';
}

elseif($propreq == "height" ){
print   '
var he = document.getElementById("' . $ids . '");

he.style.height = "' . $valreq . '";



';
}


elseif($propreq == "flow"){
print '
var fl = document.getElementById("' . $ids . '");

fl.style.cssFloat = "' . $valreq . 
'";

';

}


elseif($propreq == "scroll" ){
print '
var sc = document.getElementById("' . $ids . '");

sc.style.overflow = "' . $valreq . '";

';



}



elseif($propreq == "position" ){
print '
var posi = document.getElementById("' . $ids . '");

posi.style.position = "' . $valreq . '";


';
}


elseif($propreq == "mtop" ){
print  '
var mt = document.getElementById("' . $ids . '");
alert("' . $propreq . '");
alert("val is ' . $valreq . '");

mt.style.marginTop = "' . $valreq . '";


';
}


elseif($propreq == "mbottom" ){
print '
var mbt = document.getElementById("' . $ids . '");

mbt.style.marginBottom = "' . $valreq . '";


';
}


elseif($propreq == "mleft"){
print '
var mle = document.getElementById("' . $ids . '");

mle.style.marginLeft = "' . $valreq . '";


';
}


elseif($propreq == "mright"){
print   '
var mri = document.getElementById("' . $ids . '");

mri.style.marginRight = "' . $valreq . '";


';

}



elseif($propreq == "border" ){
print '
var bor = document.getElementById("' . $ids . '");

bor.style.border = "' . $valreq . '";



';
}

elseif($propreq == "bborder" ){
print '
var bbo = document.getElementById("' . $ids . '");

bbo.style.borderBottom = "' . $valreq . '";



';
}

elseif($propreq == "bradius" ){
print '
var brad = document.getElementById("' . $ids . '");



brad.style.borderRadius = "' . $valreq . '";



';
}

elseif($propreq == "fade" ){
print '
var fad = document.getElementById("' . $ids . '");

fad.style.opacity = "' . $valreq . '";



';
}


elseif($propreq == "fly" ){
print '
var fll = document.getElementById("' . $ids . '");

fll.style.zIndex = "' . $valreq . '";


';
}

elseif($propreq == "bg"){
print '
var bgg = document.getElementById("' . $ids . '");
alert("' . $propreq . '");
alert("val is ' . $valreq . '");

bgg.style.backgroundColor = "' . $valreq . '";


';
}


elseif($propreq == "outline"){
print  '
var otl = document.getElementById("' . $ids . '");

otl.style.outline = "' . $valreq . '";



';
}


elseif($propreq == "display" ){
print  '
var dsp = document.getElementById("' . $ids . '");

dsp.style.display = "' . $valreq . '";



';
}


elseif($propreq == "etype" ){
print  '
var ety = document.getElementById("' . $ids . '");

ety.type = "' . $valreq . '";



';
}

elseif($propreq == "hint" ){
print  '
var hin = document.getElementById("' . $ids . '");

hin.placeholder = "' . $valreq . '";



';
}

elseif($propreq == "ttype" ){
print  '
var tty = document.getElementById("' . $ids . '");

tty.style.fontWeight = "' . $valreq . '";



';
}

elseif($propreq == "tfamily" ){
print  '
var tfam = document.getElementById("' . $ids . '");

tfam.style.fontFamily = "' . $valreq . '";



';
}


elseif($propreq == "tcolor" ){
print  '
var tcol = document.getElementById("' . $ids . '");

tcol.style.color = "' . $valreq . '";



';
}


elseif($propreq == "text" ){
print  '
var txtt = document.getElementById("' . $ids . '");

txtt.innerHTML = "' . $valreq . '";



';
}

elseif($propreq == "value" ){
print  '
var vall = document.getElementById("' . $ids . '");

vall.value = "' . $valreq . '";



';
}


elseif($propreq == "align" ){
print  '
var algn = document.getElementById("' . $ids . '");

algn.align = "' . $valreq . '";



';
}

elseif($propreq == "tsize" ){
print  '
var tsz = document.getElementById("' . $ids . '");

tsz.style.fontSize = "' . $valreq . '";



';
}

elseif($propreq == "min" ){
print  '
var nmin = document.getElementById("' . $ids . '");

nmin.min = "' . $valreq . '";



';
}

elseif($propreq == "step" ){
print  '
var nstp = document.getElementById("' . $ids . '");

nstp.step = "' . $valreq . '";



';
}


elseif($propreq == "max" ){
print  '
var nmax = document.getElementById("' . $ids . '");

nmax.max = "' . $valreq . '";



';
}

elseif($propreq == "name" ){
print  '
var enm = document.getElementById("' . $ids . '");

enm.name = "' . $valreq . '";



';
}


elseif($propreq == "gohttp" ){
print  '
window.location.replace("http://' . 

$valreq . '");



';
}

elseif($propreq == "gohttps" ){
print  '
window.location.replace("https://' . 

$valreq . '");



';
}


elseif($propreq == "go" )
{
print  '
window.location.replace("' . 

$valreq . '");



';
}


elseif($propreq == "message" ){
print  '
alert("' . $valreq . '");
';



}


}//foreach ends
}









print '

}


setTimeout(runthis,' . $this->timeout . ');


';

}

else {

print("click timeout event error");

}


}




}//class timeout ends




class set_property {
private $id ;
public $property;
public $multiple_id =  'default';

public function __construct($idds = 'default'){

$this->id = $idds;

}


public function do(){

foreach ($this->property as $prop=>$val){

if($prop == "width" || $prop == "w"){
print '<script type = "text/javascript">
var a = document.getElementById("' . $this->id . '");

a.style.width = "' . $val . '";

</script>

';
}

elseif($prop == "height" || $prop == "h"){
print '<script type = "text/javascript">
var a = document.getElementById("' . $this->id . '");

a.style.height = "' . $val . '";

</script>

';
}


elseif($prop == "flow" || $prop == "f"){
print '<script type = "text/javascript">
var a = document.getElementById("' . $this->id . '");

a.style.cssFloat = "' . $val . '";

</script>

';
}


elseif($prop == "scroll" || $prop == "sc"){
print '<script type = "text/javascript">
var a = document.getElementById("' . $this->id . '");

a.style.overflow = "' . $val . '";

</script>

';
}



elseif($prop == "position" || $prop == "pos"){
print '<script type = "text/javascript">
var a = document.getElementById("' . $this->id . '");

a.style.position = "' . $val . '";

</script>

';
}


elseif($prop == "mtop" || $prop == "mt"){
print '<script type = "text/javascript">
var a = document.getElementById("' . $this->id . '");

a.style.marginTop = "' . $val . '";

</script>

';
}


elseif($prop == "mbottom" || $prop == "mb"){
print '<script type = "text/javascript">
var a = document.getElementById("' . $this->id . '");

a.style.marginBottom = "' . $val . '";

</script>

';
}


elseif($prop == "mleft" || $prop == "ml"){
print '<script type = "text/javascript">
var a = document.getElementById("' . $this->id . '");

a.style.marginLeft = "' . $val . '";

</script>

';
}


elseif($prop == "mright" || $prop == "mr"){
print '<script type = "text/javascript">
var a = document.getElementById("' . $this->id . '");

a.style.marginRight = "' . $val . '";

</script>

';
}



elseif($prop == "border" || $prop == "bd"){
print '<script type = "text/javascript">
var a = document.getElementById("' . $this->id . '");

a.style.border = "' . $val . '";

</script>

';
}

elseif($prop == "bborder" || $prop == "bbd"){
print '<script type = "text/javascript">
var a = document.getElementById("' . $this->id . '");

a.style.borderBottom = "' . $val . '";

</script>

';
}

elseif($prop == "bradius" || $prop == "brad"){
print '<script type = "text/javascript">
var a = document.getElementById("' . $this->id . '");

a.style.borderRadius = "' . $val . '";

</script>

';
}

elseif($prop == "fade" || $prop == "fdd"){
print '<script type = "text/javascript">
var a = document.getElementById("' . $this->id . '");

a.style.opacity = "' . $val . '";

</script>

';
}


elseif($prop == "fly" || $prop == "popup"){
print '<script type = "text/javascript">
var a = document.getElementById("' . $this->id . '");

a.style.zIndex = "' . $val . '";

</script>

';
}

elseif($prop == "bg" || $prop == "bgcolor"){
print '<script type = "text/javascript">
var a = document.getElementById("' . $this->id . '");

a.style.backgroundColor = "' . $val . '";

</script>

';
}


elseif($prop == "outline" || $prop == "out"){
print '<script type = "text/javascript">
var a = document.getElementById("' . $this->id . '");

a.style.outline = "' . $val . '";

</script>

';
}


elseif($prop == "display" || $prop == "see"){
print '<script type = "text/javascript">
var a = document.getElementById("' . $this->id . '");

a.style.display = "' . $val . '";

</script>

';
}

elseif($prop == "etype" ){
print  '
<script type = "text/javascript">
var ety = document.getElementById("' . $ids . '");

ety.type = "' . $val . '";

</script>

';
}

elseif($prop == "hint" ){
print  '
<script type = "text/javascript">
var hin = document.getElementById("' . $ids . '");

hin.placeholder = "' . $val . '";

</script>

';
}

elseif($prop == "ttype" ){
print  '
<script type = "text/javascript">
var tty = document.getElementById("' . $ids . '");

tty.style.fontWeight = "' . $val . '";

</script>

';
}

elseif($prop == "tfamily" ){
print  '
<script type = "text/javascript">
var tfam = document.getElementById("' . $ids . '");

tfam.style.fontFamily = "' . $val . '";

</script>

';
}


elseif($prop == "tcolor" ){
print  '
<script type = "text/javascript">
var tcol = document.getElementById("' . $ids . '");

tcol.style.color = "' . $val . '";

</script>

';
}


elseif($prop == "text" ){
print  '
<script type = "text/javascript">
var txtt = document.getElementById("' . $ids . '");

txtt.innerHTML = "' . $val . '";

</script>

';
}

elseif($prop == "value" ){
print  '
<script type = "text/javascript">

var vall = document.getElementById("' . $ids . '");

vall.value = "' . $val . '";

</script>

';
}


elseif($prop == "align" ){
print  '
<script type = "text/javascript">
var algn = document.getElementById("' . $ids . '");

algn.align = "' . $val . '";

</script>

';
}

elseif($prop == "tsize" ){
print  '

<script type = "text/javascript">
var tsz = document.getElementById("' . $ids . '");

tsz.style.fontSize = "' . $val . '";
</script>


';
}

elseif($prop == "min" ){
print  '
<script type = "text/javascript">
var nmin = document.getElementById("' . $ids . '");

nmin.min = "' . $val . '";

</script>

';
}

elseif($prop == "step" ){
print  '
<script type = "text/javascript">
var nstp = document.getElementById("' . $ids . '");

nstp.step = "' . $val . '";

</script>

';
}


elseif($prop == "max" ){
print  '
<script type = "text/javascript">
var nmax = document.getElementById("' . $ids . '");

nmax.max = "' . $val . '";

</script>

';
}

elseif($prop == "name" ){
print  '
<script type = "text/javascript">
var enm = document.getElementById("' . $ids . '");

enm.name = "' . $val . '";

</script>

';
}


elseif($prop == "gohttp" ){
print  '
<script type = "text/javascript">
window.location.replace("http://' . 

$val . '");

</script>

';
}

elseif($prop == "gohttps" ){
print  '
<script type = "text/javascript">
window.location.replace("https://' . 

$val . '");

</script>

';
}


elseif($prop == "go" )
{
print  '
<script type = "text/javascript">
window.location.replace("' . 

$val . '");

</script>

';
}


elseif($prop == "message" ){
print  '
<script type = "text/javascript">
alert("' . $val . '");


</script>
';
}





}//foreach ends

}//do fun ends



public function E_do() {

$nowid = explode(",",$this->multiple_id);
foreach($nowid as $pk=>$ids){

$r = "";
foreach ($this->property as $prop=>$val){

if($prop == "width" ){
print  '
var wid = document.getElementById("' . $ids . '");

wid.style.width = "' . $val . '";


';
}

elseif($prop == "height" ){
print  '
var hei = document.getElementById("' . $ids . '");

hei.style.height = "' . $val . '";



';
}


elseif($prop == "flow"){
print '
var flw = document.getElementById("' . $ids . '");

flw.style.cssFloat = "' . $val . 
'";

';

}


elseif($prop == "scroll" ){
print  '
var scr = document.getElementById("' . $ids . '");

scr.style.overflow = "' . $val . '";

';



}



elseif($prop == "position" ){
print '
var posi = document.getElementById("' . $ids . '");

posi.style.position = "' . $val . '";


';
}


elseif($prop == "mtop" ){
print  '
var mto = document.getElementById("' . $ids . '");

mto.style.marginTop = "' . $val . '";


';
}


elseif($prop == "mbottom" ){
print '
var mbt = document.getElementById("' . $ids . '");

mbt.style.marginBottom = "' . $val . '";


';
}


elseif($prop == "mleft"){
print '
var mle = document.getElementById("' . $ids . '");

mle.style.marginLeft = "' . $val . '";


';
}


elseif($prop == "mright"){
print  '
var mri = document.getElementById("' . $ids . '");

mri.style.marginRight = "' . $val . '";


';
}



elseif($prop == "border" ){
print '
var brd = document.getElementById("' . $ids . '");

brd.style.border = "' . $val . '";



';
}

elseif($prop == "bborder" ){
print '
var bbrd = document.getElementById("' . $ids . '");

bbrd.style.borderBottom = "' . $val . '";



';
}

elseif($prop == "bradius" ){
print  '
var brad = document.getElementById("' . $ids . '");

brad.style.borderRadius = "' . $val . '";



';
}

elseif($prop == "fade" ){
print '
var fdd = document.getElementById("' . $ids . '");

fdd.style.opacity = "' . $val . '";



';
}


elseif($prop == "fly" ){
print  '
var ffl = document.getElementById("' . $ids . '");

ffl.style.zIndex = "' . $val . '";


';
}

elseif($prop == "bg"){
print  '
var bgg = document.getElementById("' . $ids . '");

bgg.style.backgroundColor = "' . $val . '";


';
}


elseif($prop == "outline"){
print  '
var otl = document.getElementById("' . $ids . '");

otl.style.outline = "' . $val . '";



';
}


elseif($prop == "display" ){
print  '
var dsp = document.getElementById("' . $ids . '");

dsp.style.display = "' . $val . '";



';
}

elseif($prop == "etype" ){
print  '
var ety = document.getElementById("' . $ids . '");

ety.type = "' . $val . '";



';
}

elseif($prop == "hint" ){
print  '
var hin = document.getElementById("' . $ids . '");

hin.placeholder = "' . $val . '";



';
}

elseif($prop == "ttype" ){
print  '
var tty = document.getElementById("' . $ids . '");

tty.style.fontWeight = "' . $val . '";



';
}

elseif($prop == "tfamily" ){
print  '
var tfam = document.getElementById("' . $ids . '");

tfam.style.fontFamily = "' . $val . '";



';
}


elseif($prop == "tcolor" ){
print  '
var tcol = document.getElementById("' . $ids . '");

tcol.style.color = "' . $val . '";



';
}


elseif($prop == "text" ){
print  '
var txtt = document.getElementById("' . $ids . '");

txtt.innerHTML = "' . $val . '";



';
}

elseif($prop == "value" ){
print  '
var vall = document.getElementById("' . $ids . '");

vall.value = "' . $val . '";



';
}


elseif($prop == "align" ){
print  '
var algn = document.getElementById("' . $ids . '");

algn.align = "' . $val . '";



';
}

elseif($prop == "tsize" ){
print  '
var tsz = document.getElementById("' . $ids . '");

tsz.style.fontSize = "' . $val . '";



';
}

elseif($prop == "min" ){
print  '
var nmin = document.getElementById("' . $ids . '");

nmin.min = "' . $val . '";




';
}

elseif($prop == "step" ){
print  '
var nstp = document.getElementById("' . $ids . '");

nstp.step = "' . $val . '";



';
}


elseif($prop == "max" ){
print  '
var nmax = document.getElementById("' . $ids . '");

nmax.max = "' . $val . '";



';
}

elseif($prop == "name" ){
print  '
var enm = document.getElementById("' . $ids . '");

enm.name = "' . $val . '";



';
}


elseif($prop == "gohttp" ){
print  '
window.location.replace("http://' . 

$val . '");



';
}

elseif($prop == "gohttps" ){
print  '
window.location.replace("https://' . 

$val . '");



';
}


elseif($prop == "go" )
{
print  '
window.location.replace("' . 

$val . '");



';
}


elseif($prop == "message" ){
print  '
alert("' . $val . '");
';



}



}// through foreach ends 

}//id foreach ends




}// Edo fun ends





}//setprop class ends




class Layout {

private $allow_rule = 'allow';
private $prime_view;
private $prime_script;
public $id;
public $width = 'auto';
public $height = 'auto';
public $flow = 'left';
public $scroll_type = 'none';
public $position = 'absolute';
public $background_color = 'GhostWhite';
public $mtop = '0%';
public $mleft = '0%';
public $mright = '0%';
public $mbottom = '0%';
public $border = 'none';
public $bottom_border = 'none';
public $border_radius = 'none';
public $outline = '';
public $display = 'block';





public function __construct($idd = 'default'){

$this->id = $idd;

if($idd == "default"){
$this->allow_rule = 'deny';
}
}


public function getid(){

return $this->id;
}


public function getview(){

$this->prime_view =  '<div id="' . $this->id 
. '"> ';
 
$this->prime_script =  '
<script type="text/javascript">

var a = document.getElementById("' .
$this->id . '");

a.style.width = "' . $this->width . '"
;
a.style.height = "' . $this->height . '" ;
a.style.cssFloat = "' . $this->flow . '";
a.style.overflow = "' . $this->scroll_type . '";
a.style.position = "' . $this->position . '";
a.style.backgroundColor = "' . $this->background_color . '";
a.style.marginTop = "' . $this->mtop . '";
a.style.marginLeft = "' . $this->mleft . '";
a.style.marginRight = "' . $this->mright . '";
a.style.marginBottom = "' . $this->mbottom . '";
a.style.border = "' . $this->border . '";
a.style.borderBottom = "' . $this->bottom_border . '";
a.style.borderRadius = "' . $this->border_radius . '";
a.style.outline = "' . $this->outline . '";
a.style.display = "' . $this->display . '";




</script>

';


//giving the final data

if($this->allow_rule == 'allow'){
print $this->prime_view;
print $this->prime_script ;
}

else {

print 'undefined layout!!!';
}


}//getview fun ends


public function add_fade($fad = "0%"){

print '<script type="text/javascript">
var a = document.getElementById("' .
$this->id . '");
a.style.opacity = "' . $fad . '";

</script>';
}

public function add_fly($mod = 'top'){
if($mod = "top"){
print '<script type="text/javascript">
var a = document.getElementById("' .
$this->id . '");
a.style.zIndex = "1";

</script>';
}

elseif($mod = "bottom"){
print '<script type="text/javascript">
var a = document.getElementById("' .
$this->id . '");
a.style.zIndex = "-1";

</script>';
}

elseif($mod = "sky"){
print '<script type="text/javascript">
var a = document.getElementById("' .
$this->id . '");
a.style.zIndex = "999";

</script>';
}

elseif($mod = "low"){
print '<script type="text/javascript">
var a = document.getElementById("' .
$this->id . '");
a.style.zIndex = "-999";

</script>';
}



}

public function add_event($events,$ielem = 'default',$condition = '',$eventType = 'click'){

$set = new set_property($this->id);
$set->multiple_id = $ielem ;
$sr = count($events);
$a = null;
if($eventType == "click"){
$a =  '<script type="text/javascript">
var a = document.getElementById("' . $this->id . '");

a.addEventListener("click", function() { 

' ;
}

elseif($eventType == "focusout"){

$a =  '<script type="text/javascript">
var a = document.getElementById("' . $this->id . '");

a.addEventListener("focusout", function() { 

' ;


}

elseif($eventType == "blur"){
$a =  '<script type="text/javascript">
var a = document.getElementById("' . $this->id . '");

a.addEventListener("blur", function() { 

' ;


}

elseif($eventType == "focus"){

$a =  '<script type="text/javascript">
var a = document.getElementById("' . $this->id . '");

a.addEventListener("focusin", function() { 

' ;

}

elseif($eventType == "load"){

$a =  '<script type="text/javascript">
var a = document.getElementById("' . $this->id . '");

a.addEventListener("load", function() { 

' ;

}

else {

$a =  '<script type="text/javascript">
var a = document.getElementById("' . $this->id . '");

a.addEventListener("' . $eventType . '" , function() { 

' ;

}


if($condition == ''){
$set->property = $events;






$c = 

' } );
</script>

';

print $a;

$set->E_do();
print $c;
}

elseif($condition != ''){
$set->property = $events;


$cdp1 = explode("?",$condition);

$cdid = $cdp1[0];
$cdopt = $cdp1[1];
$cdval = $cdp1[2];

$opt = 'default';
$opp = '';
if($cdopt == 'width'){
$opt = 'document.getElementById("' . $cdid . '").style.width == "' . $cdval . '"';
}
elseif($cdopt == 'height'){
$opt = 'document.getElementById("' . $cdid . '").style.height == "' . $cdval . '"';
}
elseif($cdopt == 'flow'){
$opt = 'document.getElementById("' . $cdid . '").style.cssFloat == "' . $cdval . '"' ;
}

elseif($cdopt == 'position'){
$opt = 'document.getElementById("' . $cdid . '").style.position == "' . $cdval . '"' ;
}

elseif($cdopt == 'scroll_type'){
$opt = 'document.getElementById("' . $cdid . '").style.overflow == "' . $cdval . '"' ;
}
elseif($cdopt == 'bg'){


$opt = 'document.getElementById("' . $cdid . '").style.backgroundColor == "' . $cdval . '"' ;
}

elseif($cdopt == 'mtop'){


$opt = 'document.getElementById("' . $cdid . '").style.marginTop == "' . $cdval . '"' ;
}


elseif($cdopt == 'mleft'){


$opt = 'document.getElementById("' . $cdid . '").style.marginLeft == "' . $cdval . '"' ;
}

elseif($cdopt == 'mright'){


$opt = 'document.getElementById("' . $cdid . '").style.marginRight == "' . $cdval . '"' ;
}

elseif($cdopt == 'mbottom'){


$opt = 'document.getElementById("' . $cdid . '").style.marginBottom == "' . $cdval . '"' ;
}

elseif($cdopt == 'border'){


$opt = 'document.getElementById("' . $cdid . '").style.border == "' . $cdval . '"' ;
}


elseif($cdopt == 'bborder'){


$opt = 'document.getElementById("' . $cdid . '").style.borderBottom == "' . $cdval . '"' ;
}

elseif($cdopt == 'bradius'){


$opt = 'document.getElementById("' . $cdid . '").style.borderRadius == "' . $cdval . '"' ;
}

elseif($cdopt == 'outline'){


$opt = 'document.getElementById("' . $cdid . '").style.outline == "' . $cdval . '"' ;
}

elseif($cdopt == 'display'){


$opt = 'document.getElementById("' . $cdid . '").style.display == "' . $cdval . '"' ;
}


elseif($cdopt == 'fade'){


$opt = 'document.getElementById("' . $cdid . '").style.opacity == "' . $cdval . '"' ;
}

elseif($cdopt == 'etype'){
$opt = 'document.getElementById("' . $cdid . '").type == "' . $cdval . '"' ;
}

elseif($cdopt == 'hint'){
$opt = 'document.getElementById("' . $cdid . '").style.placeholder == "' . $cdval . '"' ;
}

elseif($cdopt == 'text_size'){
$opt = 'document.getElementById("' . $cdid . '").style.fontSize == "' . $cdval . '"' ;
}

elseif($cdopt == 'text_color'){
$opt = 'document.getElementById("' . $cdid . '").style.color == "' . $cdval . '"' ;
}

elseif($cdopt == 'text_type'){
$opt = 'document.getElementById("' . $cdid . '").style.fontWeight == "' . $cdval . '"' ;
}


elseif($cdopt == 'text_family'){
$opt = 'document.getElementById("' . $cdid . '").style.fontFamily == "' . $cdval . '"' ;
}



$b =  

'


if(' . $opt . ' ) { 

';

$c = 
'



 } });
</script>

';

print $a;
print $b;
$set->E_do();
print $c;



}

else {
die("internal page error - refer click event of layout " . $this->id);

}



}

public function add_timeout_event($events,$doid = '',$times = '1',$condition = '',$eventType = 'click'){

$set = new set_timeout($times);
$set->activity = $events;
$set->multiple_id = $doid;
$a = null;
if($eventType == "click"){
$a =  '<script type="text/javascript">
var a = document.getElementById("' . $this->id . '");

a.addEventListener("click", function() { 

' ;
}

elseif($eventType == "focusout"){

$a =  '<script type="text/javascript">
var a = document.getElementById("' . $this->id . '");

a.addEventListener("focusout", function() { 

' ;


}

elseif($eventType == "blur"){
$a =  '<script type="text/javascript">
var a = document.getElementById("' . $this->id . '");

a.addEventListener("blur", function() { 

' ;


}

elseif($eventType == "focus"){

$a =  '<script type="text/javascript">
var a = document.getElementById("' . $this->id . '");

a.addEventListener("focusin", function() { 

' ;

}

elseif($eventType == "load"){

$a =  '<script type="text/javascript">
var a = document.getElementById("' . $this->id . '");

a.addEventListener("load", function() { 

' ;

}

else {

$a =  '<script type="text/javascript">
var a = document.getElementById("' . $this->id . '");

a.addEventListener("' . $eventType . '" , function() { 

' ;

}


if($condition == ''){









$c = 

' } );
</script>

';

print $a;

$set->perform_in();
print $c;
}

elseif($condition != ''){



$cdp1 = explode("?",$condition);

$cdid = $cdp1[0];
$cdopt = $cdp1[1];
$cdval = $cdp1[2];

$opt = 'default';
$opp = '';
if($cdopt == 'width'){
$opt = 'document.getElementById("' . $cdid . '").style.width == "' . $cdval . '"';
}
elseif($cdopt == 'height'){
$opt = 'document.getElementById("' . $cdid . '").style.height == "' . $cdval . '"';
}
elseif($cdopt == 'flow'){
$opt = 'document.getElementById("' . $cdid . '").style.cssFloat == "' . $cdval . '"' ;
}

elseif($cdopt == 'position'){
$opt = 'document.getElementById("' . $cdid . '").style.position == "' . $cdval . '"' ;
}

elseif($cdopt == 'scroll_type'){
$opt = 'document.getElementById("' . $cdid . '").style.overflow == "' . $cdval . '"' ;
}
elseif($cdopt == 'bg'){


$opt = 'document.getElementById("' . $cdid . '").style.backgroundColor == "' . $cdval . '"' ;
}

elseif($cdopt == 'mtop'){


$opt = 'document.getElementById("' . $cdid . '").style.marginTop == "' . $cdval . '"' ;
}


elseif($cdopt == 'mleft'){


$opt = 'document.getElementById("' . $cdid . '").style.marginLeft == "' . $cdval . '"' ;
}

elseif($cdopt == 'mright'){


$opt = 'document.getElementById("' . $cdid . '").style.marginRight == "' . $cdval . '"' ;
}

elseif($cdopt == 'mbottom'){


$opt = 'document.getElementById("' . $cdid . '").style.marginBottom == "' . $cdval . '"' ;
}

elseif($cdopt == 'border'){


$opt = 'document.getElementById("' . $cdid . '").style.border == "' . $cdval . '"' ;
}


elseif($cdopt == 'bborder'){


$opt = 'document.getElementById("' . $cdid . '").style.borderBottom == "' . $cdval . '"' ;
}

elseif($cdopt == 'bradius'){


$opt = 'document.getElementById("' . $cdid . '").style.borderRadius == "' . $cdval . '"' ;
}

elseif($cdopt == 'outline'){


$opt = 'document.getElementById("' . $cdid . '").style.outline == "' . $cdval . '"' ;
}

elseif($cdopt == 'display'){


$opt = 'document.getElementById("' . $cdid . '").style.display == "' . $cdval . '"' ;
}


elseif($cdopt == 'fade'){


$opt = 'document.getElementById("' . $cdid . '").style.opacity == "' . $cdval . '"' ;
}

elseif($cdopt == 'etype'){
$opt = 'document.getElementById("' . $cdid . '").type == "' . $cdval . '"' ;
}

elseif($cdopt == 'hint'){
$opt = 'document.getElementById("' . $cdid . '").style.placeholder == "' . $cdval . '"' ;
}

elseif($cdopt == 'text_size'){
$opt = 'document.getElementById("' . $cdid . '").style.fontSize == "' . $cdval . '"' ;
}

elseif($cdopt == 'text_color'){
$opt = 'document.getElementById("' . $cdid . '").style.color == "' . $cdval . '"' ;
}

elseif($cdopt == 'text_type'){
$opt = 'document.getElementById("' . $cdid . '").style.fontWeight == "' . $cdval . '"' ;
}


elseif($cdopt == 'text_family'){
$opt = 'document.getElementById("' . $cdid . '").style.fontFamily == "' . $cdval . '"' ;
}



$b =  '
if(' . $opt . ' ) { 

';

$c = 
'



 } });
</script>

';

print $a;
print $b;
$set->perform_in();
print $c;



}

else {
die("internal page error - refer click event of layout " . $this->id);

}



}





public function add_page($tit = 'page working'){
print '<head><title>' . $tit . '
</title> . </head> <body>
 <form id = "main" action="' . $_SERVER['PHP_SELF'] . '" . 
 method="post">
';



}

public function add_form($formdet){

print '<form id = "' . $formdet['id']
. '" action = "' . $formdet['action']
. '" method = "post" > ';

}


public function close_layout(){

print '</div>';

}


}// layout class ends


//class for inputbox

class Inputbox {

private $allow_rule = 'allow';
private $prime_view;
private $prime_script;
public $id;
public $width = '250px';
public $height = '45px';
public $flow = 'left';
public $background_color = 'white';
public $mtop = '0%';
public $mleft = '0%';
public $mright = '0%';
public $mbottom = '0%';
public $border = 'none';
public $bottom_border = 'none';
public $border_radius = 'none';
public $outline = '';
public $display = 'block';
public $input_type = 'text';
public $ename = 'input';
public $evalue = '';
public $text_size = '25px';
public $text_color = 'DarkBlue';
public $text_type = 'normal';
public $text_family = '';
public $text_align = 'center';
public $hint = 'write here';



public function __construct($idd = 'default'){

$this->id = $idd;

if($idd == "default"){
$this->allow_rule = 'deny';
}
}


public function getid(){

return $this->id;
}

public function getview(){

$this->prime_view =  '<input id="' . $this->id . '" name="' . $this->ename
. '" type="' . $this->input_type . '" value="' . $this->evalue . '" />
';

 
$this->prime_script =  '
<script type="text/javascript">

var a = document.getElementById("' .
$this->id . '");

a.style.width = "' . $this->width . '"
;
a.style.height = "' . $this->height . '" ;
a.style.cssFloat = "' . $this->flow . '";
a.style.fontSize = "' . $this->text_size . '";
a.style.color = "' . $this->text_color . '";
a.style.fontWeight = "' . $this->text_type . '";
a.style.fontFamily = "' . $this->text_family . '";
a.align = "' . $this->text_align . '";
a.style.placeholder = "' . $this->hint . '";
a.style.backgroundColor = "' . $this->background_color . '";
a.style.marginTop = "' . $this->mtop . '";
a.style.marginLeft = "' . $this->mleft . '";
a.style.marginRight = "' . $this->mright . '";
a.style.marginBottom = "' . $this->mbottom . '";
a.style.border = "' . $this->border . '";
a.style.borderBottom = "' . $this->bottom_border . '";
a.style.borderRadius = "' . $this->border_radius . '";
a.style.outline = "' . $this->outline . '";
a.style.display = "' . $this->display . '";




</script>

';


//giving the final data

if($this->allow_rule == 'allow'){
print $this->prime_view;
print $this->prime_script ;
}

else {

print 'undefined inputbox!!!';
}


}//getview fun ends


public function add_fade($fad = "0%"){

print '<script type="text/javascript">
var a = document.getElementById("' .
$this->id . '");
a.style.opacity = "' . $fad . '";

</script>';
}

public function add_fly($mod = 'top'){
if($mod = "top"){
print '<script type="text/javascript">
var a = document.getElementById("' .
$this->id . '");
a.style.zIndex = "1";

</script>';
}

elseif($mod = "bottom"){
print '<script type="text/javascript">
var a = document.getElementById("' .
$this->id . '");
a.style.zIndex = "-1";

</script>';
}

elseif($mod = "sky"){
print '<script type="text/javascript">
var a = document.getElementById("' .
$this->id . '");
a.style.zIndex = "999";

</script>';
}

elseif($mod = "low"){
print '<script type="text/javascript">
var a = document.getElementById("' .
$this->id . '");
a.style.zIndex = "-999";

</script>';
}
}

public function add_limit($min = '0.1', 
$max = '9999999' , $step = '0.1'){
print '<script type="text/javascript">
var a = document.getElementById("' .
$this->id . '");
if(a.type == "number"){
a.min = "' . $min . '";
a.max = "' . $max . '";
a.step = "' . $step . '";

}

</script>';

}

public function add_event($events,$ielem = 'default',$condition = '',$eventType = 'click'){

$set = new set_property($this->id);
$set->multiple_id = $ielem ;
$sr = count($events);
$a = null;
if($eventType == "click"){
$a =  '<script type="text/javascript">
var a = document.getElementById("' . $this->id . '");

a.addEventListener("click", function() { 

' ;
}

elseif($eventType == "focusout"){

$a =  '<script type="text/javascript">
var a = document.getElementById("' . $this->id . '");

a.addEventListener("focusout", function() { 

' ;


}

elseif($eventType == "blur"){
$a =  '<script type="text/javascript">
var a = document.getElementById("' . $this->id . '");

a.addEventListener("blur", function() { 

' ;


}

elseif($eventType == "focus"){

$a =  '<script type="text/javascript">
var a = document.getElementById("' . $this->id . '");

a.addEventListener("focusin", function() { 

' ;

}

elseif($eventType == "load"){

$a =  '<script type="text/javascript">
var a = document.getElementById("' . $this->id . '");

a.addEventListener("load", function() { 

' ;

}

else {

$a =  '<script type="text/javascript">
var a = document.getElementById("' . $this->id . '");

a.addEventListener("' . $eventType . '" , function() { 

' ;

}

if($condition == ''){
$set->property = $events;



$c = 

' } );
</script>

';

print $a;

$set->E_do();
print $c;
}

// caution: use it reverse order 
elseif($condition != ''){
$set->property = $events;


$cdp1 = explode("?",$condition);

$cdid = $cdp1[0];
$cdopt = $cdp1[1];
$cdval = $cdp1[2];

$opt = 'default';
$opp = '';
if($cdopt == 'width'){
$opt = 'document.getElementById("' . $cdid . '").style.width == "' . $cdval . '"';
}
elseif($cdopt == 'height'){
$opt = 'document.getElementById("' . $cdid . '").style.height == "' . $cdval . '"';
}
elseif($cdopt == 'flow'){
$opt = 'document.getElementById("' . $cdid . '").style.cssFloat == "' . $cdval . '"' ;
}

elseif($cdopt == 'etype'){
$opt = 'document.getElementById("' . $cdid . '").type == "' . $cdval . '"' ;
}

elseif($cdopt == 'hint'){
$opt = 'document.getElementById("' . $cdid . '").style.placeholder == "' . $cdval . '"' ;
}

elseif($cdopt == 'text_size'){
$opt = 'document.getElementById("' . $cdid . '").style.fontSize == "' . $cdval . '"' ;
}

elseif($cdopt == 'text_color'){
$opt = 'document.getElementById("' . $cdid . '").style.color == "' . $cdval . '"' ;
}

elseif($cdopt == 'text_type'){
$opt = 'document.getElementById("' . $cdid . '").style.fontWeight == "' . $cdval . '"' ;
}


elseif($cdopt == 'text_family'){
$opt = 'document.getElementById("' . $cdid . '").style.fontFamily == "' . $cdval . '"' ;
}

elseif($cdopt == 'bg'){


$opt = 'document.getElementById("' . $cdid . '").style.backgroundColor == "' . $cdval . '"' ;
}

elseif($cdopt == 'mtop'){


$opt = 'document.getElementById("' . $cdid . '").style.marginTop == "' . $cdval . '"' ;
}


elseif($cdopt == 'mleft'){


$opt = 'document.getElementById("' . $cdid . '").style.marginLeft == "' . $cdval . '"' ;
}

elseif($cdopt == 'mright'){


$opt = 'document.getElementById("' . $cdid . '").style.marginRight == "' . $cdval . '"' ;
}

elseif($cdopt == 'mbottom'){


$opt = 'document.getElementById("' . $cdid . '").style.marginBottom == "' . $cdval . '"' ;
}

elseif($cdopt == 'border'){


$opt = 'document.getElementById("' . $cdid . '").style.border == "' . $cdval . '"' ;
}


elseif($cdopt == 'bborder'){


$opt = 'document.getElementById("' . $cdid . '").style.borderBottom == "' . $cdval . '"' ;
}

elseif($cdopt == 'bradius'){


$opt = 'document.getElementById("' . $cdid . '").style.borderRadius == "' . $cdval . '"' ;
}

elseif($cdopt == 'outline'){


$opt = 'document.getElementById("' . $cdid . '").style.outline == "' . $cdval . '"' ;
}

elseif($cdopt == 'display'){


$opt = 'document.getElementById("' . $cdid . '").style.display == "' . $cdval . '"' ;
}


elseif($cdopt == 'fade'){


$opt = 'document.getElementById("' . $cdid . '").style.opacity == "' . $cdval . '"' ;
}


$b =  '

if(' . $opt . ' ) { 

';

$c = 
'



 } });
</script>

';

print $a;
print $b;
$set->E_do();
print $c;



}

else {
die("internal page error - refer click event of inputbox " . $this->id);

}



}



public function add_timeout_event($events,$doid = '',$times = '1',$condition = '',$eventType = 'click'){

$set = new set_timeout($times);
$set->activity = $events;
$set->multiple_id = $doid;
$a = null;
if($eventType == "click"){
$a =  '<script type="text/javascript">
var a = document.getElementById("' . $this->id . '");

a.addEventListener("click", function() { 

' ;
}

elseif($eventType == "focusout"){

$a =  '<script type="text/javascript">
var a = document.getElementById("' . $this->id . '");

a.addEventListener("focusout", function() { 

' ;


}

elseif($eventType == "blur"){
$a =  '<script type="text/javascript">
var a = document.getElementById("' . $this->id . '");

a.addEventListener("blur", function() { 

' ;


}

elseif($eventType == "focus"){

$a =  '<script type="text/javascript">
var a = document.getElementById("' . $this->id . '");

a.addEventListener("focusin", function() { 

' ;

}

elseif($eventType == "load"){

$a =  '<script type="text/javascript">
var a = document.getElementById("' . $this->id . '");

a.addEventListener("load", function() { 

' ;

}

else {

$a =  '<script type="text/javascript">
var a = document.getElementById("' . $this->id . '");

a.addEventListener("' . $eventType . '" , function() { 

' ;

}


if($condition == ''){



$c = 

' } );
</script>

';

print $a;

$set->perform_in();
print $c;
}

elseif($condition != ''){



$cdp1 = explode("?",$condition);

$cdid = $cdp1[0];
$cdopt = $cdp1[1];
$cdval = $cdp1[2];

$opt = 'default';
$opp = '';
if($cdopt == 'width'){
$opt = 'document.getElementById("' . $cdid . '").style.width == "' . $cdval . '"';
}
elseif($cdopt == 'height'){
$opt = 'document.getElementById("' . $cdid . '").style.height == "' . $cdval . '"';
}
elseif($cdopt == 'flow'){
$opt = 'document.getElementById("' . $cdid . '").style.cssFloat == "' . $cdval . '"' ;
}

elseif($cdopt == 'position'){
$opt = 'document.getElementById("' . $cdid . '").style.position == "' . $cdval . '"' ;
}

elseif($cdopt == 'scroll_type'){
$opt = 'document.getElementById("' . $cdid . '").style.overflow == "' . $cdval . '"' ;
}
elseif($cdopt == 'bg'){


$opt = 'document.getElementById("' . $cdid . '").style.backgroundColor == "' . $cdval . '"' ;
}

elseif($cdopt == 'mtop'){


$opt = 'document.getElementById("' . $cdid . '").style.marginTop == "' . $cdval . '"' ;
}


elseif($cdopt == 'mleft'){


$opt = 'document.getElementById("' . $cdid . '").style.marginLeft == "' . $cdval . '"' ;
}

elseif($cdopt == 'mright'){


$opt = 'document.getElementById("' . $cdid . '").style.marginRight == "' . $cdval . '"' ;
}

elseif($cdopt == 'mbottom'){


$opt = 'document.getElementById("' . $cdid . '").style.marginBottom == "' . $cdval . '"' ;
}

elseif($cdopt == 'border'){


$opt = 'document.getElementById("' . $cdid . '").style.border == "' . $cdval . '"' ;
}


elseif($cdopt == 'bborder'){


$opt = 'document.getElementById("' . $cdid . '").style.borderBottom == "' . $cdval . '"' ;
}

elseif($cdopt == 'bradius'){


$opt = 'document.getElementById("' . $cdid . '").style.borderRadius == "' . $cdval . '"' ;
}

elseif($cdopt == 'outline'){


$opt = 'document.getElementById("' . $cdid . '").style.outline == "' . $cdval . '"' ;
}

elseif($cdopt == 'display'){


$opt = 'document.getElementById("' . $cdid . '").style.display == "' . $cdval . '"' ;
}


elseif($cdopt == 'fade'){


$opt = 'document.getElementById("' . $cdid . '").style.opacity == "' . $cdval . '"' ;
}

elseif($cdopt == 'etype'){
$opt = 'document.getElementById("' . $cdid . '").type == "' . $cdval . '"' ;
}

elseif($cdopt == 'hint'){
$opt = 'document.getElementById("' . $cdid . '").style.placeholder == "' . $cdval . '"' ;
}

elseif($cdopt == 'text_size'){
$opt = 'document.getElementById("' . $cdid . '").style.fontSize == "' . $cdval . '"' ;
}

elseif($cdopt == 'text_color'){
$opt = 'document.getElementById("' . $cdid . '").style.color == "' . $cdval . '"' ;
}

elseif($cdopt == 'text_type'){
$opt = 'document.getElementById("' . $cdid . '").style.fontWeight == "' . $cdval . '"' ;
}


elseif($cdopt == 'text_family'){
$opt = 'document.getElementById("' . $cdid . '").style.fontFamily == "' . $cdval . '"' ;
}



$b =  '


if(' . $opt . ' ) { 

';

$c = 
'



 } });
</script>

';

print $a;
print $b;
$set->perform_in();
print $c;



}

else {
die("internal page error - refer click event of inputbox " . $this->id);

}



}




}//class inputbox ends


// class textarea
class TextArea {

private $allow_rule = 'allow';
private $prime_view;
private $prime_script;
public $id;
public $width = '250px';
public $height = '45px';
public $flow = 'left';
public $background_color = 'white';
public $mtop = '0%';
public $mleft = '0%';
public $mright = '0%';
public $mbottom = '0%';
public $border = 'none';
public $bottom_border = 'none';
public $border_radius = 'none';
public $outline = '';
public $display = 'block';
public $ename = 'input';
public $evalue = '';
public $text_size = '25px';
public $text_color = 'DarkBlue';
public $text_type = 'normal';
public $text_family = '';
public $text_align = 'center';
public $hint = 'write here';



public function __construct($idd = 'default'){

$this->id = $idd;

if($idd == "default"){
$this->allow_rule = 'deny';
}
}


public function getid(){

return $this->id;
}

public function getview(){

$this->prime_view =  '<textarea id="' . $this->id . '" name="' . $this->ename
. '" value="' . $this->evalue . '" >
</textarea>
';

 
$this->prime_script =  '
<script type="text/javascript">

var a = document.getElementById("' .
$this->id . '");

a.style.width = "' . $this->width . '"
;
a.style.height = "' . $this->height . '" ;
a.style.cssFloat = "' . $this->flow . '";
a.style.fontSize = "' . $this->text_size . '";
a.style.color = "' . $this->text_color . '";
a.style.fontWeight = "' . $this->text_type . '";
a.style.fontFamily = "' . $this->text_family . '";
a.align = "' . $this->text_align . '";
a.style.placeholder = "' . $this->hint . '";
a.style.backgroundColor = "' . $this->background_color . '";
a.style.marginTop = "' . $this->mtop . '";
a.style.marginLeft = "' . $this->mleft . '";
a.style.marginRight = "' . $this->mright . '";
a.style.marginBottom = "' . $this->mbottom . '";
a.style.border = "' . $this->border . '";
a.style.borderBottom = "' . $this->bottom_border . '";
a.style.borderRadius = "' . $this->border_radius . '";
a.style.outline = "' . $this->outline . '";
a.style.display = "' . $this->display . '";




</script>

';


//giving the final data

if($this->allow_rule == 'allow'){
print $this->prime_view;
print $this->prime_script ;
}

else {

print 'undefined textarea!!!';
}


}//getview fun ends


public function add_fade($fad = "0%"){

print '<script type="text/javascript">
var a = document.getElementById("' .
$this->id . '");
a.style.opacity = "' . $fad . '";

</script>';
}

public function add_fly($mod = 'top'){
if($mod = "top"){
print '<script type="text/javascript">
var a = document.getElementById("' .
$this->id . '");
a.style.zIndex = "1";

</script>';
}

elseif($mod = "bottom"){
print '<script type="text/javascript">
var a = document.getElementById("' .
$this->id . '");
a.style.zIndex = "-1";

</script>';
}

elseif($mod = "sky"){
print '<script type="text/javascript">
var a = document.getElementById("' .
$this->id . '");
a.style.zIndex = "999";

</script>';
}

elseif($mod = "low"){
print '<script type="text/javascript">
var a = document.getElementById("' .
$this->id . '");
a.style.zIndex = "-999";

</script>';
}

}

public function add_event($events,$ielem = 'default',$condition = '',$eventType = 'click'){

$set = new set_property($this->id);
$set->multiple_id = $ielem ;
$sr = count($events);
$a = null;

if($eventType == "click"){
$a =  '<script type="text/javascript">
var a = document.getElementById("' . $this->id . '");

a.addEventListener("click", function() { 

' ;
}

elseif($eventType == "focusout"){

$a =  '<script type="text/javascript">
var a = document.getElementById("' . $this->id . '");

a.addEventListener("focusout", function() { 

' ;


}

elseif($eventType == "blur"){
$a =  '<script type="text/javascript">
var a = document.getElementById("' . $this->id . '");

a.addEventListener("blur", function() { 

' ;


}

elseif($eventType == "focus"){

$a =  '<script type="text/javascript">
var a = document.getElementById("' . $this->id . '");

a.addEventListener("focusin", function() { 

' ;

}

elseif($eventType == "load"){

$a =  '<script type="text/javascript">
var a = document.getElementById("' . $this->id . '");

a.addEventListener("load", function() { 

' ;

}

else {

$a =  '<script type="text/javascript">
var a = document.getElementById("' . $this->id . '");

a.addEventListener("' . $eventType . '" , function() { 

' ;

}



if($condition == ''){
$set->property = $events;




$c = 

' } );
</script>

';

print $a;

$set->E_do();
print $c;
}

// caution: use it reverse order 
elseif($condition != ''){
$set->property = $events;


$cdp1 = explode("?",$condition);

$cdid = $cdp1[0];
$cdopt = $cdp1[1];
$cdval = $cdp1[2];

$opt = 'default';
$opp = '';
if($cdopt == 'width'){
$opt = 'document.getElementById("' . $cdid . '").style.width == "' . $cdval . '"';
}
elseif($cdopt == 'height'){
$opt = 'document.getElementById("' . $cdid . '").style.height == "' . $cdval . '"';
}
elseif($cdopt == 'flow'){
$opt = 'document.getElementById("' . $cdid . '").style.cssFloat == "' . $cdval . '"' ;
}

elseif($cdopt == 'etype'){
$opt = 'document.getElementById("' . $cdid . '").type == "' . $cdval . '"' ;
}


elseif($cdopt == 'hint'){
$opt = 'document.getElementById("' . $cdid . '").style.placeholder == "' . $cdval . '"' ;
}

elseif($cdopt == 'text_size'){
$opt = 'document.getElementById("' . $cdid . '").style.fontSize == "' . $cdval . '"' ;
}

elseif($cdopt == 'text_color'){
$opt = 'document.getElementById("' . $cdid . '").style.color == "' . $cdval . '"' ;
}

elseif($cdopt == 'text_type'){
$opt = 'document.getElementById("' . $cdid . '").style.fontWeight == "' . $cdval . '"' ;
}


elseif($cdopt == 'text_family'){
$opt = 'document.getElementById("' . $cdid . '").style.fontFamily == "' . $cdval . '"' ;
}

elseif($cdopt == 'bg'){


$opt = 'document.getElementById("' . $cdid . '").style.backgroundColor == "' . $cdval . '"' ;
}

elseif($cdopt == 'mtop'){


$opt = 'document.getElementById("' . $cdid . '").style.marginTop == "' . $cdval . '"' ;
}


elseif($cdopt == 'mleft'){


$opt = 'document.getElementById("' . $cdid . '").style.marginLeft == "' . $cdval . '"' ;
}

elseif($cdopt == 'mright'){


$opt = 'document.getElementById("' . $cdid . '").style.marginRight == "' . $cdval . '"' ;
}

elseif($cdopt == 'mbottom'){


$opt = 'document.getElementById("' . $cdid . '").style.marginBottom == "' . $cdval . '"' ;
}

elseif($cdopt == 'border'){


$opt = 'document.getElementById("' . $cdid . '").style.border == "' . $cdval . '"' ;
}


elseif($cdopt == 'bborder'){


$opt = 'document.getElementById("' . $cdid . '").style.borderBottom == "' . $cdval . '"' ;
}

elseif($cdopt == 'bradius'){


$opt = 'document.getElementById("' . $cdid . '").style.borderRadius == "' . $cdval . '"' ;
}

elseif($cdopt == 'outline'){


$opt = 'document.getElementById("' . $cdid . '").style.outline == "' . $cdval . '"' ;
}

elseif($cdopt == 'display'){


$opt = 'document.getElementById("' . $cdid . '").style.display == "' . $cdval . '"' ;
}


elseif($cdopt == 'fade'){


$opt = 'document.getElementById("' . $cdid . '").style.opacity == "' . $cdval . '"' ;
}


$b =  '


if(' . $opt . ' ) { 

';

$c = 
'



 } });
</script>

';

print $a;
print $b;
$set->E_do();
print $c;



}

else {
die("internal page error - refer click event of textarea " . $this->id);

}



}



public function add_timeout_event($events,$doid = '',$times = '1',$condition = '',$eventType = 'click'){

$set = new set_timeout($times);
$set->activity = $events;
$set->multiple_id = $doid;
$a = null;
if($eventType == "click"){
$a =  '<script type="text/javascript">
var a = document.getElementById("' . $this->id . '");

a.addEventListener("click", function() { 

' ;
}

elseif($eventType == "focusout"){

$a =  '<script type="text/javascript">
var a = document.getElementById("' . $this->id . '");

a.addEventListener("focusout", function() { 

' ;


}

elseif($eventType == "blur"){
$a =  '<script type="text/javascript">
var a = document.getElementById("' . $this->id . '");

a.addEventListener("blur", function() { 

' ;


}

elseif($eventType == "focus"){

$a =  '<script type="text/javascript">
var a = document.getElementById("' . $this->id . '");

a.addEventListener("focusin", function() { 

' ;

}

elseif($eventType == "load"){

$a =  '<script type="text/javascript">
var a = document.getElementById("' . $this->id . '");

a.addEventListener("load", function() { 

' ;

}

else {

$a =  '<script type="text/javascript">
var a = document.getElementById("' . $this->id . '");

a.addEventListener("' . $eventType . '" , function() { 

' ;

}


if($condition == ''){





$c = 

' } );
</script>

';

print $a;

$set->perform_in();
print $c;
}

elseif($condition != ''){



$cdp1 = explode("?",$condition);

$cdid = $cdp1[0];
$cdopt = $cdp1[1];
$cdval = $cdp1[2];

$opt = 'default';
$opp = '';
if($cdopt == 'width'){
$opt = 'document.getElementById("' . $cdid . '").style.width == "' . $cdval . '"';
}
elseif($cdopt == 'height'){
$opt = 'document.getElementById("' . $cdid . '").style.height == "' . $cdval . '"';
}
elseif($cdopt == 'flow'){
$opt = 'document.getElementById("' . $cdid . '").style.cssFloat == "' . $cdval . '"' ;
}

elseif($cdopt == 'position'){
$opt = 'document.getElementById("' . $cdid . '").style.position == "' . $cdval . '"' ;
}

elseif($cdopt == 'scroll_type'){
$opt = 'document.getElementById("' . $cdid . '").style.overflow == "' . $cdval . '"' ;
}
elseif($cdopt == 'bg'){


$opt = 'document.getElementById("' . $cdid . '").style.backgroundColor == "' . $cdval . '"' ;
}

elseif($cdopt == 'mtop'){


$opt = 'document.getElementById("' . $cdid . '").style.marginTop == "' . $cdval . '"' ;
}


elseif($cdopt == 'mleft'){


$opt = 'document.getElementById("' . $cdid . '").style.marginLeft == "' . $cdval . '"' ;
}

elseif($cdopt == 'mright'){


$opt = 'document.getElementById("' . $cdid . '").style.marginRight == "' . $cdval . '"' ;
}

elseif($cdopt == 'mbottom'){


$opt = 'document.getElementById("' . $cdid . '").style.marginBottom == "' . $cdval . '"' ;
}

elseif($cdopt == 'border'){


$opt = 'document.getElementById("' . $cdid . '").style.border == "' . $cdval . '"' ;
}


elseif($cdopt == 'bborder'){


$opt = 'document.getElementById("' . $cdid . '").style.borderBottom == "' . $cdval . '"' ;
}

elseif($cdopt == 'bradius'){


$opt = 'document.getElementById("' . $cdid . '").style.borderRadius == "' . $cdval . '"' ;
}

elseif($cdopt == 'outline'){


$opt = 'document.getElementById("' . $cdid . '").style.outline == "' . $cdval . '"' ;
}

elseif($cdopt == 'display'){


$opt = 'document.getElementById("' . $cdid . '").style.display == "' . $cdval . '"' ;
}


elseif($cdopt == 'fade'){


$opt = 'document.getElementById("' . $cdid . '").style.opacity == "' . $cdval . '"' ;
}

elseif($cdopt == 'etype'){
$opt = 'document.getElementById("' . $cdid . '").type == "' . $cdval . '"' ;
}

elseif($cdopt == 'hint'){
$opt = 'document.getElementById("' . $cdid . '").style.placeholder == "' . $cdval . '"' ;
}

elseif($cdopt == 'text_size'){
$opt = 'document.getElementById("' . $cdid . '").style.fontSize == "' . $cdval . '"' ;
}

elseif($cdopt == 'text_color'){
$opt = 'document.getElementById("' . $cdid . '").style.color == "' . $cdval . '"' ;
}

elseif($cdopt == 'text_type'){
$opt = 'document.getElementById("' . $cdid . '").style.fontWeight == "' . $cdval . '"' ;
}


elseif($cdopt == 'text_family'){
$opt = 'document.getElementById("' . $cdid . '").style.fontFamily == "' . $cdval . '"' ;
}



$b =  '


if(' . $opt . ' ) { 

';

$c = 
'



 } });
</script>

';

print $a;
print $b;
$set->perform_in();
print $c;



}

else {
die("internal page error - refer click event of textarea " . $this->id);

}




}



}//class textarea ends



//class for selectbox

class Selectbox {

private $allow_rule = 'allow';
private $prime_view;
private $prime_script;
public $id;
public $width = '250px';
public $height = '45px';
public $flow = 'left';
public $background_color = 'white';
public $mtop = '0%';
public $mleft = '0%';
public $mright = '0%';
public $mbottom = '0%';
public $border = 'none';
public $bottom_border = 'none';
public $border_radius = 'none';
public $outline = '';
public $display = 'block';
public $ename = 'select';
public $evalue = '';
public $text_size = '25px';
public $text_color = 'DarkBlue';
public $text_type = 'normal';
public $text_family = '';
public $text_align = 'center';
public $hint = 'select here';
public $option = '' ;



public function __construct($idd = 'default'){

$this->id = $idd;

if($idd == "default"){
$this->allow_rule = 'deny';
}
}


public function getid(){

return $this->id;
}

public function getview(){
$getopt = '';
if($this->option != ""){
$nuop = explode(",",$this->options);
foreach($nuop as $opval=>$optext){
$getopt = $getopt . '<option value="'
. $opval . '" >' . $optext . '
</option>';

}

}


$this->prime_view =  '<select id="' . $this->id . '" name="' . $this->ename
. '" value="' . $this->evalue . '" >
<option value="">' . $this->hint .
'</option>' . $getopt . '</select>
';

 
$this->prime_script =  '
<script type="text/javascript">

var a = document.getElementById("' .
$this->id . '");

a.style.width = "' . $this->width . '"
;
a.style.height = "' . $this->height . '" ;
a.style.cssFloat = "' . $this->flow . '";
a.style.fontSize = "' . $this->text_size . '";
a.style.color = "' . $this->text_color . '";
a.style.fontWeight = "' . $this->text_type . '";
a.style.fontFamily = "' . $this->text_family . '";
a.align = "' . $this->text_align . '";
a.style.placeholder = "' . $this->hint . '";
a.style.backgroundColor = "' . $this->background_color . '";
a.style.marginTop = "' . $this->mtop . '";
a.style.marginLeft = "' . $this->mleft . '";
a.style.marginRight = "' . $this->mright . '";
a.style.marginBottom = "' . $this->mbottom . '";
a.style.border = "' . $this->border . '";
a.style.borderBottom = "' . $this->bottom_border . '";
a.style.borderRadius = "' . $this->border_radius . '";
a.style.outline = "' . $this->outline . '";
a.style.display = "' . $this->display . '";




</script>

';


//giving the final data

if($this->allow_rule == 'allow'){
print $this->prime_view;
print $this->prime_script ;
}

else {

print 'undefined selectbox!!!';
}


}//getview fun ends


public function add_fade($fad = "0%"){

print '<script type="text/javascript">
var a = document.getElementById("' .
$this->id . '");
a.style.opacity = "' . $fad . '";

</script>';
}

public function add_fly($mod = 'top'){
if($mod = "top"){
print '<script type="text/javascript">
var a = document.getElementById("' .
$this->id . '");
a.style.zIndex = "1";

</script>';
}

elseif($mod = "bottom"){
print '<script type="text/javascript">
var a = document.getElementById("' .
$this->id . '");
a.style.zIndex = "-1";

</script>';
}

elseif($mod = "sky"){
print '<script type="text/javascript">
var a = document.getElementById("' .
$this->id . '");
a.style.zIndex = "999";

</script>';
}

elseif($mod = "low"){
print '<script type="text/javascript">
var a = document.getElementById("' .
$this->id . '");
a.style.zIndex = "-999";

</script>';
}
}

public function add_options($opts){

foreach($opts as $optval=>$opttext){


print '<script type="text/javascript">
var a = document.getElementById("'
. $this->id . '");
var b = document.createElement("option");
b.appendChild(document.createTextNode(' . $opttext . ');

b.setAttribute("value","' . $optval .
'");

a.appendChild(b);



</script>';

}

}




public function add_event($events,$ielem = 'default',$condition = '',$eventType = 'click'){

$set = new set_property($this->id);
$set->multiple_id = $ielem ;
$sr = count($events);
$a = null;
if($eventType == "click"){
$a =  '<script type="text/javascript">
var a = document.getElementById("' . $this->id . '");

a.addEventListener("click", function() { 

' ;
}

elseif($eventType == "focusout"){

$a =  '<script type="text/javascript">
var a = document.getElementById("' . $this->id . '");

a.addEventListener("focusout", function() { 

' ;


}

elseif($eventType == "blur"){
$a =  '<script type="text/javascript">
var a = document.getElementById("' . $this->id . '");

a.addEventListener("blur", function() { 

' ;


}

elseif($eventType == "focus"){

$a =  '<script type="text/javascript">
var a = document.getElementById("' . $this->id . '");

a.addEventListener("focusin", function() { 

' ;

}

elseif($eventType == "load"){

$a =  '<script type="text/javascript">
var a = document.getElementById("' . $this->id . '");

a.addEventListener("load", function() { 

' ;

}

else {

$a =  '<script type="text/javascript">
var a = document.getElementById("' . $this->id . '");

a.addEventListener("' . $eventType . '" , function() { 

' ;

}



if($condition == ''){
$set->property = $events;



$c = 

' } );
</script>

';

print $a;

$set->E_do();
print $c;
}

// caution: use it reverse order 
elseif($condition != ''){
$set->property = $events;


$cdp1 = explode("?",$condition);

$cdid = $cdp1[0];
$cdopt = $cdp1[1];
$cdval = $cdp1[2];

$opt = 'default';
$opp = '';
if($cdopt == 'width'){
$opt = 'document.getElementById("' . $cdid . '").style.width == "' . $cdval . '"';
}
elseif($cdopt == 'height'){
$opt = 'document.getElementById("' . $cdid . '").style.height == "' . $cdval . '"';
}
elseif($cdopt == 'flow'){
$opt = 'document.getElementById("' . $cdid . '").style.cssFloat == "' . $cdval . '"' ;
}

elseif($cdopt == 'etype'){
$opt = 'document.getElementById("' . $cdid . '").type == "' . $cdval . '"' ;
}

elseif($cdopt == 'hint'){
$opt = 'document.getElementById("' . $cdid . '").style.placeholder == "' . $cdval . '"' ;
}

elseif($cdopt == 'text_size'){
$opt = 'document.getElementById("' . $cdid . '").style.fontSize == "' . $cdval . '"' ;
}

elseif($cdopt == 'text_color'){
$opt = 'document.getElementById("' . $cdid . '").style.color == "' . $cdval . '"' ;
}

elseif($cdopt == 'text_type'){
$opt = 'document.getElementById("' . $cdid . '").style.fontWeight == "' . $cdval . '"' ;
}


elseif($cdopt == 'text_family'){
$opt = 'document.getElementById("' . $cdid . '").style.fontFamily == "' . $cdval . '"' ;
}

elseif($cdopt == 'bg'){


$opt = 'document.getElementById("' . $cdid . '").style.backgroundColor == "' . $cdval . '"' ;
}

elseif($cdopt == 'mtop'){


$opt = 'document.getElementById("' . $cdid . '").style.marginTop == "' . $cdval . '"' ;
}


elseif($cdopt == 'mleft'){


$opt = 'document.getElementById("' . $cdid . '").style.marginLeft == "' . $cdval . '"' ;
}

elseif($cdopt == 'mright'){


$opt = 'document.getElementById("' . $cdid . '").style.marginRight == "' . $cdval . '"' ;
}

elseif($cdopt == 'mbottom'){


$opt = 'document.getElementById("' . $cdid . '").style.marginBottom == "' . $cdval . '"' ;
}

elseif($cdopt == 'border'){


$opt = 'document.getElementById("' . $cdid . '").style.border == "' . $cdval . '"' ;
}


elseif($cdopt == 'bborder'){


$opt = 'document.getElementById("' . $cdid . '").style.borderBottom == "' . $cdval . '"' ;
}

elseif($cdopt == 'bradius'){


$opt = 'document.getElementById("' . $cdid . '").style.borderRadius == "' . $cdval . '"' ;
}

elseif($cdopt == 'outline'){


$opt = 'document.getElementById("' . $cdid . '").style.outline == "' . $cdval . '"' ;
}

elseif($cdopt == 'display'){


$opt = 'document.getElementById("' . $cdid . '").style.display == "' . $cdval . '"' ;
}


elseif($cdopt == 'fade'){


$opt = 'document.getElementById("' . $cdid . '").style.opacity == "' . $cdval . '"' ;
}


$b =  '


if(' . $opt . ' ) { 

';

$c = 
'



 } });
</script>

';

print $a;
print $b;
$set->E_do();
print $c;



}

else {
die("internal page error - refer click event of selectbox " . $this->id);

}



}



public function add_timeout_event($events,$doid = '',$times = '1',$condition = '',$eventType = 'click'){

$set = new set_timeout($times);
$set->activity = $events;
$set->multiple_id = $doid;
$a = null;
if($eventType == "click"){
$a =  '<script type="text/javascript">
var a = document.getElementById("' . $this->id . '");

a.addEventListener("click", function() { 

' ;
}

elseif($eventType == "focusout"){

$a =  '<script type="text/javascript">
var a = document.getElementById("' . $this->id . '");

a.addEventListener("focusout", function() { 

' ;


}

elseif($eventType == "blur"){
$a =  '<script type="text/javascript">
var a = document.getElementById("' . $this->id . '");

a.addEventListener("blur", function() { 

' ;


}

elseif($eventType == "focus"){

$a =  '<script type="text/javascript">
var a = document.getElementById("' . $this->id . '");

a.addEventListener("focusin", function() { 

' ;

}

elseif($eventType == "load"){

$a =  '<script type="text/javascript">
var a = document.getElementById("' . $this->id . '");

a.addEventListener("load", function() { 

' ;

}

else {

$a =  '<script type="text/javascript">
var a = document.getElementById("' . $this->id . '");

a.addEventListener("' . $eventType . '" , function() { 

' ;

}



if($condition == ''){




$c = 

' } );
</script>

';

print $a;

$set->perform_in();
print $c;
}

elseif($condition != ''){



$cdp1 = explode("?",$condition);

$cdid = $cdp1[0];
$cdopt = $cdp1[1];
$cdval = $cdp1[2];

$opt = 'default';
$opp = '';
if($cdopt == 'width'){
$opt = 'document.getElementById("' . $cdid . '").style.width == "' . $cdval . '"';
}
elseif($cdopt == 'height'){
$opt = 'document.getElementById("' . $cdid . '").style.height == "' . $cdval . '"';
}
elseif($cdopt == 'flow'){
$opt = 'document.getElementById("' . $cdid . '").style.cssFloat == "' . $cdval . '"' ;
}

elseif($cdopt == 'position'){
$opt = 'document.getElementById("' . $cdid . '").style.position == "' . $cdval . '"' ;
}

elseif($cdopt == 'scroll_type'){
$opt = 'document.getElementById("' . $cdid . '").style.overflow == "' . $cdval . '"' ;
}
elseif($cdopt == 'bg'){


$opt = 'document.getElementById("' . $cdid . '").style.backgroundColor == "' . $cdval . '"' ;
}

elseif($cdopt == 'mtop'){


$opt = 'document.getElementById("' . $cdid . '").style.marginTop == "' . $cdval . '"' ;
}


elseif($cdopt == 'mleft'){


$opt = 'document.getElementById("' . $cdid . '").style.marginLeft == "' . $cdval . '"' ;
}

elseif($cdopt == 'mright'){


$opt = 'document.getElementById("' . $cdid . '").style.marginRight == "' . $cdval . '"' ;
}

elseif($cdopt == 'mbottom'){


$opt = 'document.getElementById("' . $cdid . '").style.marginBottom == "' . $cdval . '"' ;
}

elseif($cdopt == 'border'){


$opt = 'document.getElementById("' . $cdid . '").style.border == "' . $cdval . '"' ;
}


elseif($cdopt == 'bborder'){


$opt = 'document.getElementById("' . $cdid . '").style.borderBottom == "' . $cdval . '"' ;
}

elseif($cdopt == 'bradius'){


$opt = 'document.getElementById("' . $cdid . '").style.borderRadius == "' . $cdval . '"' ;
}

elseif($cdopt == 'outline'){


$opt = 'document.getElementById("' . $cdid . '").style.outline == "' . $cdval . '"' ;
}

elseif($cdopt == 'display'){


$opt = 'document.getElementById("' . $cdid . '").style.display == "' . $cdval . '"' ;
}


elseif($cdopt == 'fade'){


$opt = 'document.getElementById("' . $cdid . '").style.opacity == "' . $cdval . '"' ;
}

elseif($cdopt == 'etype'){
$opt = 'document.getElementById("' . $cdid . '").type == "' . $cdval . '"' ;
}

elseif($cdopt == 'hint'){
$opt = 'document.getElementById("' . $cdid . '").style.placeholder == "' . $cdval . '"' ;
}

elseif($cdopt == 'text_size'){
$opt = 'document.getElementById("' . $cdid . '").style.fontSize == "' . $cdval . '"' ;
}

elseif($cdopt == 'text_color'){
$opt = 'document.getElementById("' . $cdid . '").style.color == "' . $cdval . '"' ;
}

elseif($cdopt == 'text_type'){
$opt = 'document.getElementById("' . $cdid . '").style.fontWeight == "' . $cdval . '"' ;
}


elseif($cdopt == 'text_family'){
$opt = 'document.getElementById("' . $cdid . '").style.fontFamily == "' . $cdval . '"' ;
}



$b =  '


if(' . $opt . ' ) { 

';

$c = 
'



 } });
</script>

';

print $a;
print $b;
$set->perform_in();
print $c;



}

else {
die("internal page error - refer click event of selectbox " . $this->id);

}



}




}//class selectbox ends


//class for image

class Image {

private $allow_rule = 'allow';
private $prime_view;
private $prime_script;
public $id;
public $width = 'auto';
public $height = 'auto';
public $flow = 'left';
public $background_color = 'none';
public $mtop = '0%';
public $mleft = '0%';
public $mright = '0%';
public $mbottom = '0%';
public $border = 'none';
public $bottom_border = 'none';
public $border_radius = 'none';
public $outline = '';
public $display = 'block';
public $src = 'none';





public function __construct($idd = 'default'){

$this->id = $idd;

if($idd == "default"){
$this->allow_rule = 'deny';
}
}


public function getid(){

return $this->id;
}

public function getview(){

$this->prime_view =  '<img id="' . $this->id  . '" ></img>
';

 
$this->prime_script =  '
<script type="text/javascript">

var a = document.getElementById("' .
$this->id . '");

a.style.width = "' . $this->width . '"
;
a.style.height = "' . $this->height . '" ;
a.style.cssFloat = "' . $this->flow . '";
a.src = "' . $this->src  . '";

a.style.backgroundColor = "' . $this->background_color . '";
a.style.marginTop = "' . $this->mtop . '";
a.style.marginLeft = "' . $this->mleft . '";
a.style.marginRight = "' . $this->mright . '";
a.style.marginBottom = "' . $this->mbottom . '";
a.style.border = "' . $this->border . '";
a.style.borderBottom = "' . $this->bottom_border . '";
a.style.borderRadius = "' . $this->border_radius . '";
a.style.outline = "' . $this->outline . '";
a.style.display = "' . $this->display . '";




</script>

';


//giving the final data

if($this->allow_rule == 'allow'){
print $this->prime_view;
print $this->prime_script ;
}

else {

print 'undefined image!!!';
}


}//getview fun ends


public function add_fade($fad = "0%"){

print '<script type="text/javascript">
var a = document.getElementById("' .
$this->id . '");
a.style.opacity = "' . $fad . '";

</script>';
}

public function add_fly($mod = 'top'){
if($mod = "top"){
print '<script type="text/javascript">
var a = document.getElementById("' .
$this->id . '");
a.style.zIndex = "1";

</script>';
}

elseif($mod = "bottom"){
print '<script type="text/javascript">
var a = document.getElementById("' .
$this->id . '");
a.style.zIndex = "-1";

</script>';
}

elseif($mod = "sky"){
print '<script type="text/javascript">
var a = document.getElementById("' .
$this->id . '");
a.style.zIndex = "999";

</script>';
}

elseif($mod = "low"){
print '<script type="text/javascript">
var a = document.getElementById("' .
$this->id . '");
a.style.zIndex = "-999";

</script>';
}
}


public function add_event($events,$ielem = 'default',$condition = '',$eventType = 'click'){

$set = new set_property($this->id);
$set->multiple_id = $ielem ;
$sr = count($events);
$a = null;
if($eventType == "click"){
$a =  '<script type="text/javascript">
var a = document.getElementById("' . $this->id . '");

a.addEventListener("click", function() { 

' ;
}

elseif($eventType == "focusout"){

$a =  '<script type="text/javascript">
var a = document.getElementById("' . $this->id . '");

a.addEventListener("focusout", function() { 

' ;


}

elseif($eventType == "blur"){
$a =  '<script type="text/javascript">
var a = document.getElementById("' . $this->id . '");

a.addEventListener("blur", function() { 

' ;


}

elseif($eventType == "focus"){

$a =  '<script type="text/javascript">
var a = document.getElementById("' . $this->id . '");

a.addEventListener("focusin", function() { 

' ;

}

elseif($eventType == "load"){

$a =  '<script type="text/javascript">
var a = document.getElementById("' . $this->id . '");

a.addEventListener("load", function() { 

' ;

}

else {

$a =  '<script type="text/javascript">
var a = document.getElementById("' . $this->id . '");

a.addEventListener("' . $eventType . '" , function() { 

' ;

}


if($condition == ''){
$set->property = $events;




$c = 

' } );
</script>

';

print $a;

$set->E_do();
print $c;
}

// caution: use it reverse order 
elseif($condition != ''){
$set->property = $events;


$cdp1 = explode("?",$condition);

$cdid = $cdp1[0];
$cdopt = $cdp1[1];
$cdval = $cdp1[2];

$opt = 'default';
$opp = '';
if($cdopt == 'width'){
$opt = 'document.getElementById("' . $cdid . '").style.width == "' . $cdval . '"';
}
elseif($cdopt == 'height'){
$opt = 'document.getElementById("' . $cdid . '").style.height == "' . $cdval . '"';
}
elseif($cdopt == 'flow'){
$opt = 'document.getElementById("' . $cdid . '").style.cssFloat == "' . $cdval . '"' ;
}

elseif($cdopt == 'etype'){
$opt = 'document.getElementById("' . $cdid . '").type == "' . $cdval . '"' ;
}

elseif($cdopt == 'hint'){
$opt = 'document.getElementById("' . $cdid . '").style.placeholder == "' . $cdval . '"' ;
}

elseif($cdopt == 'text_size'){
$opt = 'document.getElementById("' . $cdid . '").style.fontSize == "' . $cdval . '"' ;
}

elseif($cdopt == 'text_color'){
$opt = 'document.getElementById("' . $cdid . '").style.color == "' . $cdval . '"' ;
}

elseif($cdopt == 'text_type'){
$opt = 'document.getElementById("' . $cdid . '").style.fontWeight == "' . $cdval . '"' ;
}


elseif($cdopt == 'text_family'){
$opt = 'document.getElementById("' . $cdid . '").style.fontFamily == "' . $cdval . '"' ;
}

elseif($cdopt == 'bg'){


$opt = 'document.getElementById("' . $cdid . '").style.backgroundColor == "' . $cdval . '"' ;
}

elseif($cdopt == 'mtop'){


$opt = 'document.getElementById("' . $cdid . '").style.marginTop == "' . $cdval . '"' ;
}


elseif($cdopt == 'mleft'){


$opt = 'document.getElementById("' . $cdid . '").style.marginLeft == "' . $cdval . '"' ;
}

elseif($cdopt == 'mright'){


$opt = 'document.getElementById("' . $cdid . '").style.marginRight == "' . $cdval . '"' ;
}

elseif($cdopt == 'mbottom'){


$opt = 'document.getElementById("' . $cdid . '").style.marginBottom == "' . $cdval . '"' ;
}

elseif($cdopt == 'border'){


$opt = 'document.getElementById("' . $cdid . '").style.border == "' . $cdval . '"' ;
}


elseif($cdopt == 'bborder'){


$opt = 'document.getElementById("' . $cdid . '").style.borderBottom == "' . $cdval . '"' ;
}

elseif($cdopt == 'bradius'){


$opt = 'document.getElementById("' . $cdid . '").style.borderRadius == "' . $cdval . '"' ;
}

elseif($cdopt == 'outline'){


$opt = 'document.getElementById("' . $cdid . '").style.outline == "' . $cdval . '"' ;
}

elseif($cdopt == 'display'){


$opt = 'document.getElementById("' . $cdid . '").style.display == "' . $cdval . '"' ;
}


elseif($cdopt == 'fade'){


$opt = 'document.getElementById("' . $cdid . '").style.opacity == "' . $cdval . '"' ;
}


$b =  '


if(' . $opt . ' ) { 

';

$c = 
'



 } });
</script>

';

print $a;
print $b;
$set->E_do();
print $c;



}

else {
die("internal page error - refer click event of image " . $this->id);

}



}



public function add_timeout_event($events,$doid = '',$times = '1',$condition = '',
$eventType = 'click'){

$set = new set_timeout($times);
$set->activity = $events;
$set->multiple_id = $doid;

$a = null;
if($eventType == "click"){
$a =  '<script type="text/javascript">
var a = document.getElementById("' . $this->id . '");

a.addEventListener("click", function() { 

' ;
}

elseif($eventType == "focusout"){

$a =  '<script type="text/javascript">
var a = document.getElementById("' . $this->id . '");

a.addEventListener("focusout", function() { 

' ;


}

elseif($eventType == "blur"){
$a =  '<script type="text/javascript">
var a = document.getElementById("' . $this->id . '");

a.addEventListener("blur", function() { 

' ;


}

elseif($eventType == "focus"){

$a =  '<script type="text/javascript">
var a = document.getElementById("' . $this->id . '");

a.addEventListener("focusin", function() { 

' ;

}

elseif($eventType == "load"){

$a =  '<script type="text/javascript">
var a = document.getElementById("' . $this->id . '");

a.addEventListener("load", function() { 

' ;

}

else {

$a =  '<script type="text/javascript">
var a = document.getElementById("' . $this->id . '");

a.addEventListener("' . $eventType . '" , function() { 

' ;

}





if($condition == ''){





$c = 

' } );
</script>

';

print $a;

$set->perform_in();
print $c;
}

elseif($condition != ''){



$cdp1 = explode("?",$condition);

$cdid = $cdp1[0];
$cdopt = $cdp1[1];
$cdval = $cdp1[2];

$opt = 'default';
$opp = '';
if($cdopt == 'width'){
$opt = 'document.getElementById("' . $cdid . '").style.width == "' . $cdval . '"';
}
elseif($cdopt == 'height'){
$opt = 'document.getElementById("' . $cdid . '").style.height == "' . $cdval . '"';
}
elseif($cdopt == 'flow'){
$opt = 'document.getElementById("' . $cdid . '").style.cssFloat == "' . $cdval . '"' ;
}

elseif($cdopt == 'position'){
$opt = 'document.getElementById("' . $cdid . '").style.position == "' . $cdval . '"' ;
}

elseif($cdopt == 'scroll_type'){
$opt = 'document.getElementById("' . $cdid . '").style.overflow == "' . $cdval . '"' ;
}
elseif($cdopt == 'bg'){


$opt = 'document.getElementById("' . $cdid . '").style.backgroundColor == "' . $cdval . '"' ;
}

elseif($cdopt == 'mtop'){


$opt = 'document.getElementById("' . $cdid . '").style.marginTop == "' . $cdval . '"' ;
}


elseif($cdopt == 'mleft'){


$opt = 'document.getElementById("' . $cdid . '").style.marginLeft == "' . $cdval . '"' ;
}

elseif($cdopt == 'mright'){


$opt = 'document.getElementById("' . $cdid . '").style.marginRight == "' . $cdval . '"' ;
}

elseif($cdopt == 'mbottom'){


$opt = 'document.getElementById("' . $cdid . '").style.marginBottom == "' . $cdval . '"' ;
}

elseif($cdopt == 'border'){


$opt = 'document.getElementById("' . $cdid . '").style.border == "' . $cdval . '"' ;
}


elseif($cdopt == 'bborder'){


$opt = 'document.getElementById("' . $cdid . '").style.borderBottom == "' . $cdval . '"' ;
}

elseif($cdopt == 'bradius'){


$opt = 'document.getElementById("' . $cdid . '").style.borderRadius == "' . $cdval . '"' ;
}

elseif($cdopt == 'outline'){


$opt = 'document.getElementById("' . $cdid . '").style.outline == "' . $cdval . '"' ;
}

elseif($cdopt == 'display'){


$opt = 'document.getElementById("' . $cdid . '").style.display == "' . $cdval . '"' ;
}


elseif($cdopt == 'fade'){


$opt = 'document.getElementById("' . $cdid . '").style.opacity == "' . $cdval . '"' ;
}

elseif($cdopt == 'etype'){
$opt = 'document.getElementById("' . $cdid . '").type == "' . $cdval . '"' ;
}

elseif($cdopt == 'hint'){
$opt = 'document.getElementById("' . $cdid . '").style.placeholder == "' . $cdval . '"' ;
}

elseif($cdopt == 'text_size'){
$opt = 'document.getElementById("' . $cdid . '").style.fontSize == "' . $cdval . '"' ;
}

elseif($cdopt == 'text_color'){
$opt = 'document.getElementById("' . $cdid . '").style.color == "' . $cdval . '"' ;
}

elseif($cdopt == 'text_type'){
$opt = 'document.getElementById("' . $cdid . '").style.fontWeight == "' . $cdval . '"' ;
}


elseif($cdopt == 'text_family'){
$opt = 'document.getElementById("' . $cdid . '").style.fontFamily == "' . $cdval . '"' ;
}



$a =  '


if(' . $opt . ' ) { 

';

$c = 
'



 } });
</script>

';

print $a;
print $b;
$set->perform_in();
print $c;



}

else {
die("internal page error - refer click event of image " . $this->id);

}




}




}//class image ends


//class for icon

class Right_Icon {

private $allow_rule = 'allow';
private $prime_view;
private $prime_script;
public $id;
public $width = '250px';
public $height = '45px';
public $flow = 'left';
public $background_color = 'white';
public $mtop = '0%';
public $mleft = '0%';
public $mright = '0%';
public $mbottom = '0%';
public $border = 'none';
public $bottom_border = 'none';
public $border_radius = 'none';
public $outline = '';
public $display = 'block';



public $text_size = '25px';
public $text_color = 'DarkBlue';
public $text_type = 'normal';
public $text_family = '';
public $text_align = 'center';
public $text = '';
public $src = 'none';
private $icontext ;

public function __construct($idd = 'default'){

$this->id = $idd;

$this->icontext = $idd . "iconlabel" ;


if($idd == "default"){
$this->allow_rule = 'deny';
}
}


public function getid(){

return $this->id;
}

public function getview(){

$this->prime_view =  '
<label id="'  . $this->icontext 
. '">' . $this->text . 
'</label>
<img id="' . $this->id . '">
</img>
';

 
$this->prime_script =  '
<script type="text/javascript">

var a = document.getElementById("' .
$this->id . '");

a.style.width = "' . $this->width . '"
;
a.style.height = "' . $this->height . '" ;
a.style.cssFloat = "' . $this->flow . '";
a.style.fontSize = "' . $this->text_size . '";
a.style.color = "' . $this->text_color . '";
a.style.fontWeight = "' . $this->text_type . '";
a.style.fontFamily = "' . $this->text_family . '";
a.align = "' . $this->text_align . '";

a.style.backgroundColor = "' . $this->background_color . '";
a.style.marginTop = "' . $this->mtop . '";
a.style.marginLeft = "' . $this->mleft . '";
a.style.marginRight = "' . $this->mright . '";
a.style.marginBottom = "' . $this->mbottom . '";
a.style.border = "' . $this->border . '";
a.style.borderBottom = "' . $this->bottom_border . '";
a.style.borderRadius = "' . $this->border_radius . '";
a.style.outline = "' . $this->outline . '";
a.style.display = "' . $this->display . '";
a.src = "' . $this->src . '" ;




</script>

';


//giving the final data

if($this->allow_rule == 'allow'){
print $this->prime_view;
print $this->prime_script ;
}

else {

print 'undefined right icon!!!';
}


}//getview fun ends


public function add_fade($fad = "100%"){

print '<script type="text/javascript">
var a = document.getElementById("' .
$this->id . '");
a.style.opacity = "' . $fad . '";

</script>';
}

public function add_fly($mod = 'top'){
if($mod = "top"){
print '<script type="text/javascript">
var a = document.getElementById("' .
$this->id . '");
a.style.zIndex = "1";

</script>';
}

elseif($mod = "bottom"){
print '<script type="text/javascript">
var a = document.getElementById("' .
$this->id . '");
a.style.zIndex = "-1";

</script>';
}

elseif($mod = "sky"){
print '<script type="text/javascript">
var a = document.getElementById("' .
$this->id . '");
a.style.zIndex = "999";

</script>';
}

elseif($mod = "low"){
print '<script type="text/javascript">
var a = document.getElementById("' .
$this->id . '");
a.style.zIndex = "-999";

</script>';
}
}



public function add_event($events,$ielem = 'default',$condition = ''){

$set = new set_property($this->id);
$set->multiple_id = $ielem ;
$sr = count($events);
$a = null;
if($eventType == "click"){
$a =  '<script type="text/javascript">
var a = document.getElementById("' . $this->id . '");

a.addEventListener("click", function() { 

' ;
}

elseif($eventType == "focusout"){

$a =  '<script type="text/javascript">
var a = document.getElementById("' . $this->id . '");

a.addEventListener("focusout", function() { 

' ;


}

elseif($eventType == "blur"){
$a =  '<script type="text/javascript">
var a = document.getElementById("' . $this->id . '");

a.addEventListener("blur", function() { 

' ;


}

elseif($eventType == "focus"){

$a =  '<script type="text/javascript">
var a = document.getElementById("' . $this->id . '");

a.addEventListener("focusin", function() { 

' ;

}

elseif($eventType == "load"){

$a =  '<script type="text/javascript">
var a = document.getElementById("' . $this->id . '");

a.addEventListener("load", function() { 

' ;

}

else {

$a =  '<script type="text/javascript">
var a = document.getElementById("' . $this->id . '");

a.addEventListener("' . $eventType . '" , function() { 

' ;

}







if($condition == ''){
$set->property = $events;




$c = 

' } );
</script>

';

print $a;

$set->E_do();
print $c;
}

// caution: use it reverse order 
elseif($condition != ''){
$set->property = $events;


$cdp1 = explode("?",$condition);

$cdid = $cdp1[0];
$cdopt = $cdp1[1];
$cdval = $cdp1[2];

$opt = 'default';
$opp = '';
if($cdopt == 'width'){
$opt = 'document.getElementById("' . $cdid . '").style.width == "' . $cdval . '"';
}
elseif($cdopt == 'height'){
$opt = 'document.getElementById("' . $cdid . '").style.height == "' . $cdval . '"';
}
elseif($cdopt == 'flow'){
$opt = 'document.getElementById("' . $cdid . '").style.cssFloat == "' . $cdval . '"' ;
}

elseif($cdopt == 'etype'){
$opt = 'document.getElementById("' . $cdid . '").type == "' . $cdval . '"' ;
}

elseif($cdopt == 'hint'){
$opt = 'document.getElementById("' . $cdid . '").style.placeholder == "' . $cdval . '"' ;
}

elseif($cdopt == 'text_size'){
$opt = 'document.getElementById("' . $cdid . '").style.fontSize == "' . $cdval . '"' ;
}

elseif($cdopt == 'text_color'){
$opt = 'document.getElementById("' . $cdid . '").style.color == "' . $cdval . '"' ;
}

elseif($cdopt == 'text_type'){
$opt = 'document.getElementById("' . $cdid . '").style.fontWeight == "' . $cdval . '"' ;
}


elseif($cdopt == 'text_family'){
$opt = 'document.getElementById("' . $cdid . '").style.fontFamily == "' . $cdval . '"' ;
}

elseif($cdopt == 'bg'){


$opt = 'document.getElementById("' . $cdid . '").style.backgroundColor == "' . $cdval . '"' ;
}

elseif($cdopt == 'mtop'){


$opt = 'document.getElementById("' . $cdid . '").style.marginTop == "' . $cdval . '"' ;
}


elseif($cdopt == 'mleft'){


$opt = 'document.getElementById("' . $cdid . '").style.marginLeft == "' . $cdval . '"' ;
}

elseif($cdopt == 'mright'){


$opt = 'document.getElementById("' . $cdid . '").style.marginRight == "' . $cdval . '"' ;
}

elseif($cdopt == 'mbottom'){


$opt = 'document.getElementById("' . $cdid . '").style.marginBottom == "' . $cdval . '"' ;
}

elseif($cdopt == 'border'){


$opt = 'document.getElementById("' . $cdid . '").style.border == "' . $cdval . '"' ;
}


elseif($cdopt == 'bborder'){


$opt = 'document.getElementById("' . $cdid . '").style.borderBottom == "' . $cdval . '"' ;
}

elseif($cdopt == 'bradius'){


$opt = 'document.getElementById("' . $cdid . '").style.borderRadius == "' . $cdval . '"' ;
}

elseif($cdopt == 'outline'){


$opt = 'document.getElementById("' . $cdid . '").style.outline == "' . $cdval . '"' ;
}

elseif($cdopt == 'display'){


$opt = 'document.getElementById("' . $cdid . '").style.display == "' . $cdval . '"' ;
}


elseif($cdopt == 'fade'){


$opt = 'document.getElementById("' . $cdid . '").style.opacity == "' . $cdval . '"' ;
}


$b =  '


if(' . $opt . ' ) { 

';

$c = 
'



 } });
</script>

';

print $a;
print $b;
$set->E_do();
print $c;



}

else {
die("internal page error - refer click event of righticon " . $this->id);

}



}



public function add_timeout_event($events,$doid = '',$times = '1',$condition = '',
$eventType = 'click'){

$set = new set_timeout($times);
$set->activity = $events;
$set->multiple_id = $doid;

$a = null;
if($eventType == "click"){
$a =  '<script type="text/javascript">
var a = document.getElementById("' . $this->id . '");

a.addEventListener("click", function() { 

' ;
}

elseif($eventType == "focusout"){

$a =  '<script type="text/javascript">
var a = document.getElementById("' . $this->id . '");

a.addEventListener("focusout", function() { 

' ;


}

elseif($eventType == "blur"){
$a =  '<script type="text/javascript">
var a = document.getElementById("' . $this->id . '");

a.addEventListener("blur", function() { 

' ;


}

elseif($eventType == "focus"){

$a =  '<script type="text/javascript">
var a = document.getElementById("' . $this->id . '");

a.addEventListener("focusin", function() { 

' ;

}

elseif($eventType == "load"){

$a =  '<script type="text/javascript">
var a = document.getElementById("' . $this->id . '");

a.addEventListener("load", function() { 

' ;

}

else {

$a =  '<script type="text/javascript">
var a = document.getElementById("' . $this->id . '");

a.addEventListener("' . $eventType . '" , function() { 

' ;

}



if($condition == ''){





$c = 

' } );
</script>

';

print $a;

$set->perform_in();
print $c;
}

elseif($condition != ''){



$cdp1 = explode("?",$condition);

$cdid = $cdp1[0];
$cdopt = $cdp1[1];
$cdval = $cdp1[2];

$opt = 'default';
$opp = '';
if($cdopt == 'width'){
$opt = 'document.getElementById("' . $cdid . '").style.width == "' . $cdval . '"';
}
elseif($cdopt == 'height'){
$opt = 'document.getElementById("' . $cdid . '").style.height == "' . $cdval . '"';
}
elseif($cdopt == 'flow'){
$opt = 'document.getElementById("' . $cdid . '").style.cssFloat == "' . $cdval . '"' ;
}

elseif($cdopt == 'position'){
$opt = 'document.getElementById("' . $cdid . '").style.position == "' . $cdval . '"' ;
}

elseif($cdopt == 'scroll_type'){
$opt = 'document.getElementById("' . $cdid . '").style.overflow == "' . $cdval . '"' ;
}
elseif($cdopt == 'bg'){


$opt = 'document.getElementById("' . $cdid . '").style.backgroundColor == "' . $cdval . '"' ;
}

elseif($cdopt == 'mtop'){


$opt = 'document.getElementById("' . $cdid . '").style.marginTop == "' . $cdval . '"' ;
}


elseif($cdopt == 'mleft'){


$opt = 'document.getElementById("' . $cdid . '").style.marginLeft == "' . $cdval . '"' ;
}

elseif($cdopt == 'mright'){


$opt = 'document.getElementById("' . $cdid . '").style.marginRight == "' . $cdval . '"' ;
}

elseif($cdopt == 'mbottom'){


$opt = 'document.getElementById("' . $cdid . '").style.marginBottom == "' . $cdval . '"' ;
}

elseif($cdopt == 'border'){


$opt = 'document.getElementById("' . $cdid . '").style.border == "' . $cdval . '"' ;
}


elseif($cdopt == 'bborder'){


$opt = 'document.getElementById("' . $cdid . '").style.borderBottom == "' . $cdval . '"' ;
}

elseif($cdopt == 'bradius'){


$opt = 'document.getElementById("' . $cdid . '").style.borderRadius == "' . $cdval . '"' ;
}

elseif($cdopt == 'outline'){


$opt = 'document.getElementById("' . $cdid . '").style.outline == "' . $cdval . '"' ;
}

elseif($cdopt == 'display'){


$opt = 'document.getElementById("' . $cdid . '").style.display == "' . $cdval . '"' ;
}


elseif($cdopt == 'fade'){


$opt = 'document.getElementById("' . $cdid . '").style.opacity == "' . $cdval . '"' ;
}

elseif($cdopt == 'etype'){
$opt = 'document.getElementById("' . $cdid . '").type == "' . $cdval . '"' ;
}

elseif($cdopt == 'hint'){
$opt = 'document.getElementById("' . $cdid . '").style.placeholder == "' . $cdval . '"' ;
}

elseif($cdopt == 'text_size'){
$opt = 'document.getElementById("' . $cdid . '").style.fontSize == "' . $cdval . '"' ;
}

elseif($cdopt == 'text_color'){
$opt = 'document.getElementById("' . $cdid . '").style.color == "' . $cdval . '"' ;
}

elseif($cdopt == 'text_type'){
$opt = 'document.getElementById("' . $cdid . '").style.fontWeight == "' . $cdval . '"' ;
}


elseif($cdopt == 'text_family'){
$opt = 'document.getElementById("' . $cdid . '").style.fontFamily == "' . $cdval . '"' ;
}



$b =  '

if(' . $opt . ' ) { 

';

$c = 
'



 } });
</script>

';

print $a;
print $b;
$set->perform_in();
print $c;



}

else {
die("internal page error - refer click event of righticon " . $this->id);

}



}




}//class lefticon ends

class Left_Icon {

private $allow_rule = 'allow';
private $prime_view;
private $prime_script;
public $id;
public $width = '250px';
public $height = '45px';
public $flow = 'left';
public $background_color = 'white';
public $mtop = '0%';
public $mleft = '0%';
public $mright = '0%';
public $mbottom = '0%';
public $border = 'none';
public $bottom_border = 'none';
public $border_radius = 'none';
public $outline = '';
public $display = 'block';



public $text_size = '25px';
public $text_color = 'DarkBlue';
public $text_type = 'normal';
public $text_family = '';
public $text_align = 'center';
public $text = '';
public $src = 'none';
private $icontext ;

public function __construct($idd = 'default'){

$this->id = $idd;

$this->icontext = $idd . "iconlabel" ;


if($idd == "default"){
$this->allow_rule = 'deny';
}
}


public function getid(){

return $this->id;
}

public function getview(){

$this->prime_view =  '
<img id="' . $this->id . '">
</img>
<label id="'  . $this->icontext 
. '">' . $this->text . 
'</label>

';

 
$this->prime_script =  '
<script type="text/javascript">

var a = document.getElementById("' .
$this->id . '");

a.style.width = "' . $this->width . '"
;
a.style.height = "' . $this->height . '" ;
a.style.cssFloat = "' . $this->flow . '";
a.style.fontSize = "' . $this->text_size . '";
a.style.color = "' . $this->text_color . '";
a.style.fontWeight = "' . $this->text_type . '";
a.style.fontFamily = "' . $this->text_family . '";
a.align = "' . $this->text_align . '";

a.style.backgroundColor = "' . $this->background_color . '";
a.style.marginTop = "' . $this->mtop . '";
a.style.marginLeft = "' . $this->mleft . '";
a.style.marginRight = "' . $this->mright . '";
a.style.marginBottom = "' . $this->mbottom . '";
a.style.border = "' . $this->border . '";
a.style.borderBottom = "' . $this->bottom_border . '";
a.style.borderRadius = "' . $this->border_radius . '";
a.style.outline = "' . $this->outline . '";
a.style.display = "' . $this->display . '";
a.src = "' . $this->src . '" ;




</script>

';


//giving the final data

if($this->allow_rule == 'allow'){
print $this->prime_view;
print $this->prime_script ;
}

else {

print 'undefined left icon!!!';
}


}//getview fun ends


public function add_fade($fad = "100%"){

print '<script type="text/javascript">
var a = document.getElementById("' .
$this->id . '");
a.style.opacity = "' . $fad . '";

</script>';
}

public function add_fly($mod = 'top'){
if($mod = "top"){
print '<script type="text/javascript">
var a = document.getElementById("' .
$this->id . '");
a.style.zIndex = "1";

</script>';
}

elseif($mod = "bottom"){
print '<script type="text/javascript">
var a = document.getElementById("' .
$this->id . '");
a.style.zIndex = "-1";

</script>';
}

elseif($mod = "sky"){
print '<script type="text/javascript">
var a = document.getElementById("' .
$this->id . '");
a.style.zIndex = "999";

</script>';
}

elseif($mod = "low"){
print '<script type="text/javascript">
var a = document.getElementById("' .
$this->id . '");
a.style.zIndex = "-999";

</script>';
}
}



public function add_event($events,$ielem = 'default',$condition = ''
,$eventType = 'click'){

$set = new set_property($this->id);
$set->multiple_id = $ielem ;
$sr = count($events);
$a = null;
if($eventType == "click"){
$a =  '<script type="text/javascript">
var a = document.getElementById("' . $this->id . '");

a.addEventListener("click", function() { 

' ;
}

elseif($eventType == "focusout"){

$a =  '<script type="text/javascript">
var a = document.getElementById("' . $this->id . '");

a.addEventListener("focusout", function() { 

' ;


}

elseif($eventType == "blur"){
$a =  '<script type="text/javascript">
var a = document.getElementById("' . $this->id . '");

a.addEventListener("blur", function() { 

' ;


}

elseif($eventType == "focus"){

$a =  '<script type="text/javascript">
var a = document.getElementById("' . $this->id . '");

a.addEventListener("focusin", function() { 

' ;

}

elseif($eventType == "load"){

$a =  '<script type="text/javascript">
var a = document.getElementById("' . $this->id . '");

a.addEventListener("load", function() { 

' ;

}

else {

$a =  '<script type="text/javascript">
var a = document.getElementById("' . $this->id . '");

a.addEventListener("' . $eventType . '" , function() { 

' ;

}



if($condition == ''){
$set->property = $events;




$c = 

' } );
</script>

';

print $a;

$set->E_do();
print $c;
}

// caution: use it reverse order 
elseif($condition != ''){
$set->property = $events;


$cdp1 = explode("?",$condition);

$cdid = $cdp1[0];
$cdopt = $cdp1[1];
$cdval = $cdp1[2];

$opt = 'default';
$opp = '';
if($cdopt == 'width'){
$opt = 'document.getElementById("' . $cdid . '").style.width == "' . $cdval . '"';
}
elseif($cdopt == 'height'){
$opt = 'document.getElementById("' . $cdid . '").style.height == "' . $cdval . '"';
}
elseif($cdopt == 'flow'){
$opt = 'document.getElementById("' . $cdid . '").style.cssFloat == "' . $cdval . '"' ;
}

elseif($cdopt == 'etype'){
$opt = 'document.getElementById("' . $cdid . '").type == "' . $cdval . '"' ;
}

elseif($cdopt == 'hint'){
$opt = 'document.getElementById("' . $cdid . '").style.placeholder == "' . $cdval . '"' ;
}

elseif($cdopt == 'text_size'){
$opt = 'document.getElementById("' . $cdid . '").style.fontSize == "' . $cdval . '"' ;
}

elseif($cdopt == 'text_color'){
$opt = 'document.getElementById("' . $cdid . '").style.color == "' . $cdval . '"' ;
}

elseif($cdopt == 'text_type'){
$opt = 'document.getElementById("' . $cdid . '").style.fontWeight == "' . $cdval . '"' ;
}


elseif($cdopt == 'text_family'){
$opt = 'document.getElementById("' . $cdid . '").style.fontFamily == "' . $cdval . '"' ;
}

elseif($cdopt == 'bg'){


$opt = 'document.getElementById("' . $cdid . '").style.backgroundColor == "' . $cdval . '"' ;
}

elseif($cdopt == 'mtop'){


$opt = 'document.getElementById("' . $cdid . '").style.marginTop == "' . $cdval . '"' ;
}


elseif($cdopt == 'mleft'){


$opt = 'document.getElementById("' . $cdid . '").style.marginLeft == "' . $cdval . '"' ;
}

elseif($cdopt == 'mright'){


$opt = 'document.getElementById("' . $cdid . '").style.marginRight == "' . $cdval . '"' ;
}

elseif($cdopt == 'mbottom'){


$opt = 'document.getElementById("' . $cdid . '").style.marginBottom == "' . $cdval . '"' ;
}

elseif($cdopt == 'border'){


$opt = 'document.getElementById("' . $cdid . '").style.border == "' . $cdval . '"' ;
}


elseif($cdopt == 'bborder'){


$opt = 'document.getElementById("' . $cdid . '").style.borderBottom == "' . $cdval . '"' ;
}

elseif($cdopt == 'bradius'){


$opt = 'document.getElementById("' . $cdid . '").style.borderRadius == "' . $cdval . '"' ;
}

elseif($cdopt == 'outline'){


$opt = 'document.getElementById("' . $cdid . '").style.outline == "' . $cdval . '"' ;
}

elseif($cdopt == 'display'){


$opt = 'document.getElementById("' . $cdid . '").style.display == "' . $cdval . '"' ;
}


elseif($cdopt == 'fade'){


$opt = 'document.getElementById("' . $cdid . '").style.opacity == "' . $cdval . '"' ;
}


$b =  '


if(' . $opt . ' ) { 

';

$c = 
'



 } });
</script>

';

print $a;
print $b;
$set->E_do();
print $c;



}

else {
die("internal page error - refer click event of lefticon " . $this->id);

}



}



public function add_timeout_event($events,$doid = '',$times = '1',$condition = ''
,$eventType = 'click'){

$set = new set_timeout($times);
$set->activity = $events;
$set->multiple_id = $doid;

$a = null;
if($eventType == "click"){
$a =  '<script type="text/javascript">
var a = document.getElementById("' . $this->id . '");

a.addEventListener("click", function() { 

' ;
}

elseif($eventType == "focusout"){

$a =  '<script type="text/javascript">
var a = document.getElementById("' . $this->id . '");

a.addEventListener("focusout", function() { 

' ;


}

elseif($eventType == "blur"){
$a =  '<script type="text/javascript">
var a = document.getElementById("' . $this->id . '");

a.addEventListener("blur", function() { 

' ;


}

elseif($eventType == "focus"){

$a =  '<script type="text/javascript">
var a = document.getElementById("' . $this->id . '");

a.addEventListener("focusin", function() { 

' ;

}

elseif($eventType == "load"){

$a =  '<script type="text/javascript">
var a = document.getElementById("' . $this->id . '");

a.addEventListener("load", function() { 

' ;

}

else {

$a =  '<script type="text/javascript">
var a = document.getElementById("' . $this->id . '");

a.addEventListener("' . $eventType . '" , function() { 

' ;

}


if($condition == ''){





$c = 

' } );
</script>

';

print $a;

$set->perform_in();
print $c;
}

elseif($condition != ''){



$cdp1 = explode("?",$condition);

$cdid = $cdp1[0];
$cdopt = $cdp1[1];
$cdval = $cdp1[2];

$opt = 'default';
$opp = '';
if($cdopt == 'width'){
$opt = 'document.getElementById("' . $cdid . '").style.width == "' . $cdval . '"';
}
elseif($cdopt == 'height'){
$opt = 'document.getElementById("' . $cdid . '").style.height == "' . $cdval . '"';
}
elseif($cdopt == 'flow'){
$opt = 'document.getElementById("' . $cdid . '").style.cssFloat == "' . $cdval . '"' ;
}

elseif($cdopt == 'position'){
$opt = 'document.getElementById("' . $cdid . '").style.position == "' . $cdval . '"' ;
}

elseif($cdopt == 'scroll_type'){
$opt = 'document.getElementById("' . $cdid . '").style.overflow == "' . $cdval . '"' ;
}
elseif($cdopt == 'bg'){


$opt = 'document.getElementById("' . $cdid . '").style.backgroundColor == "' . $cdval . '"' ;
}

elseif($cdopt == 'mtop'){


$opt = 'document.getElementById("' . $cdid . '").style.marginTop == "' . $cdval . '"' ;
}


elseif($cdopt == 'mleft'){


$opt = 'document.getElementById("' . $cdid . '").style.marginLeft == "' . $cdval . '"' ;
}

elseif($cdopt == 'mright'){


$opt = 'document.getElementById("' . $cdid . '").style.marginRight == "' . $cdval . '"' ;
}

elseif($cdopt == 'mbottom'){


$opt = 'document.getElementById("' . $cdid . '").style.marginBottom == "' . $cdval . '"' ;
}

elseif($cdopt == 'border'){


$opt = 'document.getElementById("' . $cdid . '").style.border == "' . $cdval . '"' ;
}


elseif($cdopt == 'bborder'){


$opt = 'document.getElementById("' . $cdid . '").style.borderBottom == "' . $cdval . '"' ;
}

elseif($cdopt == 'bradius'){


$opt = 'document.getElementById("' . $cdid . '").style.borderRadius == "' . $cdval . '"' ;
}

elseif($cdopt == 'outline'){


$opt = 'document.getElementById("' . $cdid . '").style.outline == "' . $cdval . '"' ;
}

elseif($cdopt == 'display'){


$opt = 'document.getElementById("' . $cdid . '").style.display == "' . $cdval . '"' ;
}


elseif($cdopt == 'fade'){


$opt = 'document.getElementById("' . $cdid . '").style.opacity == "' . $cdval . '"' ;
}

elseif($cdopt == 'etype'){
$opt = 'document.getElementById("' . $cdid . '").type == "' . $cdval . '"' ;
}

elseif($cdopt == 'hint'){
$opt = 'document.getElementById("' . $cdid . '").style.placeholder == "' . $cdval . '"' ;
}

elseif($cdopt == 'text_size'){
$opt = 'document.getElementById("' . $cdid . '").style.fontSize == "' . $cdval . '"' ;
}

elseif($cdopt == 'text_color'){
$opt = 'document.getElementById("' . $cdid . '").style.color == "' . $cdval . '"' ;
}

elseif($cdopt == 'text_type'){
$opt = 'document.getElementById("' . $cdid . '").style.fontWeight == "' . $cdval . '"' ;
}


elseif($cdopt == 'text_family'){
$opt = 'document.getElementById("' . $cdid . '").style.fontFamily == "' . $cdval . '"' ;
}



$b =  '


if(' . $opt . ' ) { 

';

$c = 
'



 } });
</script>

';

print $a;
print $b;
$set->perform_in();
print $c;



}

else {
die("internal page error - refer click event of lefticon " . $this->id);

}



}




}//class lefticon ends








?>