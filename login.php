<?php 
require 'conn.php'; 
 
$idpengguna = $_POST['idpengguna']; 
$katalaluan = $_POST['katalaluan']; 
 
if($idpengguna == 'admin'){ 
    $sql = 'SELECT * FROM admin'; 
    $row = $conn -> query($sql)->fetch_object(); 
    if(password_verify($katalaluan, $row->katalaluan)){ 
        $_SESSION['idpengguna'] = 'admin'; 
        header('location: detail/'); 
    }else{ 
        gagal(); 
    } 
}
 
 
function gagal() 
{ 
    ?> 
    <script> 
        alert('Maaf, ID pengguna/kata laluan salah.'); 
        window.location = './'; 
    </script> 
<?php 
}