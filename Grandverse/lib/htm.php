

1
<?php



2
require_once('connect.php');



3
//This is mainly for storing functions. Using functions is faster than using include/require. I created printHeader() to get rid of header.php, yeah functions to get rid of postLib.php, etc.



4
function printFace($face, $feeling) {



5
        if(strpos($face, "imgur") || strpos($face, "cloudinary")){



6
                return $face;



7
        } else {



8
                switch ($feeling) {



9
                case 0:



10
          $type = "_normal_face.png";



11
          break;



12
        case 1:



13
          $type = "_happy_face.png";



14
          break;



15
        case 2:



16
          $type = "_like_face.png";



17
          break;



18
        case 3:



19
          $type = "_surprised_face.png";



20
          break;



21
        case 4:



22
          $type = "_frustrated_face.png";



23
          break;



24
        case 5:



25
          $type = "_puzzled_face.png";



26
          break;



27
        }



28
        return 'https://mii-secure.cdn.nintendo.net/'. $face . $type;



29
        }



30
}



31
​



32
function printHeader($on_page) {



33
        global $dbc;



34
        global $tabTitle;



35
​



36
        echo '<!DOCTYPE html>



37
        <head>



38
        '.(isset($tabTitle) ? '<title>'.$tabTitle.'</title>' : '').'



39
        <link rel="stylesheet" type="text/css" href="/assets/css/style.css">



40
        <script src="/assets/js/pace.min.js"></script>';



41
​



42
        if(isset($_COOKIE['cedar_color_theme'])){



43
                $HSL = explode(',', $_COOKIE['cedar_color_theme']);



44
                echo '<style>



45
                #global-menu li.selected a:before {color: hsl('.$HSL[0].','.$HSL[1].'%,'.$HSL[2].'%);}



46
                #global-menu li.selected a {color: hsl('.$HSL[0].','.$HSL[1].'%,'.$HSL[2].'%);}



47
                #global-menu li a:hover, #global-menu li button:hover {box-shadow: inset 0 -4px 0 -1px hsl('.$HSL[0].','.$HSL[1].'%,'.$HSL[2].'%);}



48
                #identified-user-banner .title {color: hsl('.$HSL[0].','.$HSL[1].'%,'.$HSL[2].'%);}



49
                .tab2 a.selected, .tab3 a.selected {background: -webkit-gradient(linear, left top, left bottom, from(hsl('.($HSL[0]+3).','.($HSL[1]-12).'%,'.($HSL[2]+4).'%)), to(hsl('.($HSL[0]+3).','.$HSL[1].'%,'.($HSL[2]-7).'%)));}
