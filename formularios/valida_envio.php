<?php
// if ($_SERVER['REQUEST_METHOD'] == 'GET'){
//    echo " Se enviaron por GET ";
// }   else {
//     echo " Se enviaron por POST ";
// }

if (isset($_POST ['submit'])) {
    echo "Los datos se han enviado correctamente" . ' <br /> ';    
    print_r ($_POST ['submit']);
}
    


?>