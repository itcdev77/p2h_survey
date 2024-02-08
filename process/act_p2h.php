<?php

session_start();
include('../config/conn.php');
include('../config/function.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


require_once "library/PHPMailer.php";
require_once "library/Exception.php";
require_once "library/OAuth.php";
require_once "library/POP3.php";
require_once "library/SMTP.php";


//Untuk kirim data form TOTAL STATION kedalam database

if (isset($_POST['input_total_station'])) {

    // $b = $fe['name'];

    // $d = $fe['dep'];

    $c = $_POST['nama'];

    $e = $_POST['tanggal'];

    $f = $_POST['lokasi_kerja'];

    $g = $_POST['pilih_total_station'];

    $h = $_POST['no_seri'];

    $i = $_POST['j_kalibrasi'];



    $b1 = $_POST['box_alat'];

    $ket1 = $_POST['ket1'];

    $a1 = $b1 . $ket1;



    $b2 = $_POST['internal_battery'];

    $ket2 = $_POST['ket2'];

    $a2 = $b2 . $ket2;



    $b3 = $_POST['charger_battery'];

    $ket3 = $_POST['ket3'];

    $a3 = $b3 . $ket3;



    $b4 = $_POST['sumbuh_vertikal'];

    $ket4 = $_POST['ket4'];

    $a4 = $b4 . $ket4;



    $b5 = $_POST['sumbuh_horizontal'];

    $ket5 = $_POST['ket5'];

    $a5 = $b5 . $ket5;



    $b6 = $_POST['lensa_obyektif'];

    $ket6 = $_POST['ket6'];

    $a6 = $b6 . $ket6;



    $b7 = $_POST['lensa_okuler'];

    $ket7 = $_POST['ket7'];

    $a7 = $b7 . $ket7;



    $b8 = $_POST['p_fokus'];

    $ket8 = $_POST['ket8'];

    $a8 = $b8 . $ket8;



    $b9 = $_POST['c_v&h'];

    $ket9 = $_POST['ket9'];

    $a9 = $b9 . $ket9;



    $b10 = $_POST['ph_v&h'];

    $ket10 = $_POST['ket10'];

    $a10 = $b10 . $ket10;



    $b11 = $_POST['sc_lensa'];

    $ket11 = $_POST['ket11'];

    $a11 = $b11 . $ket11;



    $b12 = $_POST['sc_pf'];

    $ket12 = $_POST['ket12'];

    $a12 = $b12 . $ket12;



    $b13 = $_POST['nt_pl'];

    $ket13 = $_POST['ket13'];

    $a13 = $b13 . $ket13;



    $b14 = $_POST['nb_cl'];

    $ket14 = $_POST['ket14'];

    $a14 = $b14 . $ket14;



    $b15 = $_POST['s_abc'];

    $ket15 = $_POST['ket15'];

    $a15 = $b15 . $ket15;



    $b16 = $_POST['t_keypad'];

    $ket16 = $_POST['ket16'];

    $a16 = $b16 . $ket16;



    $b17 = $_POST['laser'];

    $ket17 = $_POST['ket17'];

    $a17 = $b17 . $ket17;



    $b18 = $_POST['m_roll'];

    $ket18 = $_POST['ket18'];

    $a18 = $b18 . $ket18;



    $b19 = $_POST['t_statif'];

    $ket19 = $_POST['ket19'];

    $a19 = $b19 . $ket19;



    $b20 = $_POST['t_aps'];

    $ket20 = $_POST['ket20'];

    $a20 = $b20 . $ket20;



    $b21 = $_POST['stick_pogo'];

    $ket21 = $_POST['ket21'];

    $a21 = $b21 . $ket21;



    $b22 = $_POST['prisma_topo'];

    $ket22 = $_POST['ket22'];

    $a22 = $b22 . $ket22;


    $j = $_POST['catatan'];

    $insert = mysqli_query($con, "INSERT INTO total_station (nama,tggl,lokasi,tipe_alat,no_seri,wkt_kalibrasi,
    
    box_alat,bt_internal,bt_charger,vertikal,horizontal,obyektif,okuler,pengatur_fokus,clamp_vh,penggerak_halus_vh,lensa,pengatur_fokus_sc,nivo_tabung,nivo_bulat,sekrup_abc,tombol_keypad,laser,materal_roll,tripod_statif,tribrach_aps,stick,prisma_topo,keterangan) VALUES ('$c','$e','$f','$g','$h','$i','$a1','$a2','$a3','$a4','$a5','$a6' ,'$a7','$a8','$a9','$a10','$a11','$a12','$a13','$a14','$a15'

    ,'$a16','$a17','$a18','$a19','$a20','$a21','$a22','$j')") or die(mysqli_error($con));

    if ($insert) {
        $success = 'Berhasil menambahkan data barang';
    } else {
        $error = 'Gagal menambahkan data barang';
    }
    $_SESSION['success'] = $success;
    $_SESSION['error'] = $error;

    $mail = new PHPMailer;



    //Enable SMTP debugging. 

    $mail->SMTPDebug = 3;

    //Set PHPMailer to use SMTP.

    $mail->isSMTP();

    //Set SMTP host name                          

    $mail->Host = "smtp.gmail.com"; //host mail server


    $mail->SMTPAuth = true;

    //Provide username and password     
    $mail->Username = "sebuku.itc@gmail.com";   //nama-email smtp          


    //$mail->Password = "vifeifksikzqnitf";           //password email smtp
    $mail->Password = "crclkejjaqlpwjyk";           //password email smtp

    $mail->SMTPSecure = "ssl";

    //Set TCP port to connect to 

    $mail->Port = 465;
    //$mail->Port = 26;                                                    



    $mail->From = "sebuku.itc@gmail.com"; //email pengirim

    $mail->FromName = "System IT Employee (P2H)"; //nama pengirim


    $mail->addBCC('abelardpangalila@gmail.com');

    $mail->isHTML(true);



    $mail->Subject = "Laporan P2H Unit Total Station"; //subject

    $Body = "

    <table class='table'>

    <tr> 
    
        <td colspan='3'><h4><u><font color='green'>Detail Laporan</font></u></h4></td>
    
    </tr>
    
    <tr>
    
        <td><b>Nama</b></td><td>:</td><td>$c</td>
    
    </tr>
    
    <tr>
    
        <td><b>Tanggal</b></td><td>:</td><td>$e</td>
    
    </tr>
    
    <tr>
    
        <td><b>Lokasi Kerja</b></td><td>:</td><td>$f</td>
    
    </tr>
    
    <tr>
    
        <td><b>Total Station</b></td><td>:</td><td>$g</td>
    
    </tr>
    
    <tr>
    
        <td><b>No Seri</b></td><td>:</td><td>$h</td>
    
    </tr>
    
    <tr>
    
        <td><b>Jadwal Kalibrasi</b></td><td>:</td><td>$i</td>
    
    </tr>
    
    <tr> 
    
        <td><b>Status</b></td><td>:</td>
    
        <td>
    
            Menunggu Persetujuan
    
        </td>
    
    </tr>
    
    </table>
    
    <tr> 
    
        <td colspan='3'><h4><u><font color='green'>Kondisi Alat :</font></u></h4></td>
    
    </tr>
    
    <table>
    
    <tr><td><h4>TOTAL STATION</h4></td></tr>
    
    <tr><td><b>1. Box Alat</b></td><td>:</td><td>$a1</td></tr>

    <tr><td><h4>BATTERY : </h4></td></tr>
    
    <tr><td><b>2. Internal Battery</b></td><td>:</td><td>$a2</td></tr>
    
    <tr><td><b>3. Charger Battery</b></td><td>:</td><td>$a3</td></tr>

    <tr><td><h4>SUMBUH PUTAR : </h4></td></tr>
    
    <tr><td><b>4. Vertikal</b></td><td>:</td><td>$a4</td></tr>
    
    <tr><td><b>5. Horizontal</b></td><td>:</td><td>$a5</td></tr>

    <tr><td><h4>LENSA : </h4></td></tr>
    
    <tr><td><b>6. Obyektif</b></td><td>:</td><td>$a6</td></tr>
    
    <tr><td><b>7. Okuler</b></td><td>:</td><td>$a7</td></tr>

    <tr><td><h4>------- </h4></td></tr>
    
    <tr><td><b>8. Pengatur Fokus</b></td><td>:</td><td>$a8</td></tr>
    
    <tr><td><b>9. Clamp Vert & Horiz</b></td><td>:</td><td>$a9</td></tr>
    
    <tr><td><b>10. Penggerak Halus Vert & Horiz</b></td><td>:</td><td>$a10</td></tr>

    <tr><td><h4>SISTEM CENTERING : </h4></td></tr>
    
    <tr><td><b>11. Lensa</b></td><td>:</td><td>$a11</td></tr>
    
    <tr><td><b>12. Pengatur Fokus</b></td><td>:</td><td>$a12</td></tr>

    <tr><td><h4>SISTEM LEVELLING : </h4></td></tr>
    
    <tr><td><b>13. Nivo Tabung(Plate Level)</b></td><td>:</td><td>$a13</td></tr>
    
    <tr><td><b>14. Nivo Bulat(Circular Level)</b></td><td>:</td><td>$a14</td></tr>

    <tr><td><h4>------- </h4></td></tr>
    
    <tr><td><b>15. Sekrup ABC</b></td><td>:</td><td>$a15</td></tr>
    
    <tr><td><b>16. Tombol Keypad</b></td><td>:</td><td>$a16</td></tr>
    
    <tr><td><b>17. Laser</b></td><td>:</td><td>$a17</td></tr>
    
    <tr><td><b>18. Meteran Roll</b></td><td>:</td><td>$a18</td></tr>

    <tr><td><h4>------- </h4></td></tr>
    
    <tr><td><b><h4>19. Tripod(Statif)</h4></b></td><td>:</td><td>$a19</td></tr>
    
    <tr><td><b><h4>20. Tibrach APS</b></h4></td><td>:</td><td>$a20</td></tr>
    
    <tr><td><b><h4>21. Stick(Tongkat Pogo)</h4></b></td><td>:</td><td>$a21</td></tr>
    
    <tr><td><b><h4>22. Prisma Topo</h4></b></td><td>:</td><td>$a22</td></tr>
    
    </table>  <br>
    
<br><br>

            Note : Mohon dapat segera melakukan Approval mengenai laporan p2h total station tsb. <br>

            URL Aplikasi : http://employee.sebukucoalgroup.com/p2h/p2hreport.php

            <br>
            <br>-------------------------------------<br>
            Perhatian :<br>
            Email ini dihasilkan secara otomatis oleh sistem dan bersifat informasi,<br>
            dimohon untuk tidak membalas email ini.<br>


            <br>Terima kasih.<br>

            <br>

            Best Regards,<br>

            System IT Employee (P2H)



    ";

    $mail->Body    = $Body; //isi email

    $mail->IsHTML(true);

    $mail->AltBody = "PHP mailer"; //body email (optional)

    if (!$mail->send()) {
    } else {
    }

    // }
    header("Location:../?total_station.php");
}
// }


// Action untuk input data GPS Geodetic
if (isset($_POST['input_gps'])) {

    // $b = $fe['name'];

    // $d = $fe['dep'];

    $c = $_POST['nama'];

    $e = $_POST['tanggal'];

    $f = $_POST['lokasi_kerja'];

    $g = $_POST['pilih_total_station'];

    $h = $_POST['no_seri'];

    $i = $_POST['j_kalibrasi'];



    $b1 = $_POST['box_alat'];

    $ket1 = $_POST['ket1'];

    $a1 = $b1 . $ket1;



    $b2 = $_POST['internal_battery'];

    $ket2 = $_POST['ket2'];

    $a2 = $b2 . $ket2;



    $b3 = $_POST['charger_battery'];

    $ket3 = $_POST['ket3'];

    $a3 = $b3 . $ket3;



    $b4 = $_POST['sumbuh_vertikal'];

    $ket4 = $_POST['ket4'];

    $a4 = $b4 . $ket4;



    $b5 = $_POST['sumbuh_horizontal'];

    $ket5 = $_POST['ket5'];

    $a5 = $b5 . $ket5;



    $b6 = $_POST['lensa_obyektif'];

    $ket6 = $_POST['ket6'];

    $a6 = $b6 . $ket6;



    $b7 = $_POST['lensa_okuler'];

    $ket7 = $_POST['ket7'];

    $a7 = $b7 . $ket7;



    $b8 = $_POST['p_fokus'];

    $ket8 = $_POST['ket8'];

    $a8 = $b8 . $ket8;



    $b9 = $_POST['c_v&h'];

    $ket9 = $_POST['ket9'];

    $a9 = $b9 . $ket9;



    $b10 = $_POST['ph_v&h'];

    $ket10 = $_POST['ket10'];

    $a10 = $b10 . $ket10;



    $b11 = $_POST['sc_lensa'];

    $ket11 = $_POST['ket11'];

    $a11 = $b11 . $ket11;



    $b12 = $_POST['sc_pf'];

    $ket12 = $_POST['ket12'];

    $a12 = $b12 . $ket12;



    $b13 = $_POST['nt_pl'];

    $ket13 = $_POST['ket13'];

    $a13 = $b13 . $ket13;



    $b14 = $_POST['nb_cl'];

    $ket14 = $_POST['ket14'];

    $a14 = $b14 . $ket14;



    $b15 = $_POST['s_abc'];

    $ket15 = $_POST['ket15'];

    $a15 = $b15 . $ket15;



    $b16 = $_POST['t_keypad'];

    $ket16 = $_POST['ket16'];

    $a16 = $b16 . $ket16;



    $b17 = $_POST['laser'];

    $ket17 = $_POST['ket17'];

    $a17 = $b17 . $ket17;



    $b18 = $_POST['m_roll'];

    $ket18 = $_POST['ket18'];

    $a18 = $b18 . $ket18;



    $b19 = $_POST['t_statif'];

    $ket19 = $_POST['ket19'];

    $a19 = $b19 . $ket19;



    $b20 = $_POST['t_aps'];

    $ket20 = $_POST['ket20'];

    $a20 = $b20 . $ket20;



    $b21 = $_POST['stick_pogo'];

    $ket21 = $_POST['ket21'];

    $a21 = $b21 . $ket21;



    $b22 = $_POST['prisma_topo'];

    $ket22 = $_POST['ket22'];

    $a22 = $b22 . $ket22;


    $j = $_POST['catatan'];

    $insert = mysqli_query($con, "INSERT INTO total_station (nama,tggl,lokasi,tipe_alat,no_seri,wkt_kalibrasi,
    
    box_alat,bt_internal,bt_charger,vertikal,horizontal,obyektif,okuler,pengatur_fokus,clamp_vh,penggerak_halus_vh,lensa,pengatur_fokus_sc,nivo_tabung,nivo_bulat,sekrup_abc,tombol_keypad,laser,materal_roll,tripod_statif,tribrach_aps,stick,prisma_topo,keterangan) VALUES ('$c','$e','$f','$g','$h','$i','$a1','$a2','$a3','$a4','$a5','$a6' ,'$a7','$a8','$a9','$a10','$a11','$a12','$a13','$a14','$a15'

    ,'$a16','$a17','$a18','$a19','$a20','$a21','$a22','$j')") or die(mysqli_error($con));

    if ($insert) {
        $success = 'Berhasil menambahkan data barang';
    } else {
        $error = 'Gagal menambahkan data barang';
    }
    $_SESSION['success'] = $success;
    $_SESSION['error'] = $error;

    $mail = new PHPMailer;



    //Enable SMTP debugging. 

    $mail->SMTPDebug = 3;

    //Set PHPMailer to use SMTP.

    $mail->isSMTP();

    //Set SMTP host name                          

    $mail->Host = "smtp.gmail.com"; //host mail server


    $mail->SMTPAuth = true;

    //Provide username and password     
    $mail->Username = "sebuku.itc@gmail.com";   //nama-email smtp          


    //$mail->Password = "vifeifksikzqnitf";           //password email smtp
    $mail->Password = "crclkejjaqlpwjyk";           //password email smtp

    $mail->SMTPSecure = "ssl";

    //Set TCP port to connect to 

    $mail->Port = 465;
    //$mail->Port = 26;                                                    



    $mail->From = "sebuku.itc@gmail.com"; //email pengirim

    $mail->FromName = "System IT Employee (P2H)"; //nama pengirim


    $mail->addBCC('abelardpangalila@gmail.com');

    $mail->isHTML(true);



    $mail->Subject = "Laporan P2H Unit Total Station"; //subject

    $Body = "

    <table class='table'>

    <tr> 
    
        <td colspan='3'><h4><u><font color='green'>Detail Laporan</font></u></h4></td>
    
    </tr>
    
    <tr>
    
        <td><b>Nama</b></td><td>:</td><td>$c</td>
    
    </tr>
    
    <tr>
    
        <td><b>Tanggal</b></td><td>:</td><td>$e</td>
    
    </tr>
    
    <tr>
    
        <td><b>Lokasi Kerja</b></td><td>:</td><td>$f</td>
    
    </tr>
    
    <tr>
    
        <td><b>Total Station</b></td><td>:</td><td>$g</td>
    
    </tr>
    
    <tr>
    
        <td><b>No Seri</b></td><td>:</td><td>$h</td>
    
    </tr>
    
    <tr>
    
        <td><b>Jadwal Kalibrasi</b></td><td>:</td><td>$i</td>
    
    </tr>
    
    <tr> 
    
        <td><b>Status</b></td><td>:</td>
    
        <td>
    
            Menunggu Persetujuan
    
        </td>
    
    </tr>
    
    </table>
    
    <tr> 
    
        <td colspan='3'><h4><u><font color='green'>Kondisi Alat :</font></u></h4></td>
    
    </tr>
    
    <table>
    
    <tr><td><h4>TOTAL STATION</h4></td></tr>
    
    <tr><td><b>1. Box Alat</b></td><td>:</td><td>$a1</td></tr>

    <tr><td><h4>BATTERY : </h4></td></tr>
    
    <tr><td><b>2. Internal Battery</b></td><td>:</td><td>$a2</td></tr>
    
    <tr><td><b>3. Charger Battery</b></td><td>:</td><td>$a3</td></tr>

    <tr><td><h4>SUMBUH PUTAR : </h4></td></tr>
    
    <tr><td><b>4. Vertikal</b></td><td>:</td><td>$a4</td></tr>
    
    <tr><td><b>5. Horizontal</b></td><td>:</td><td>$a5</td></tr>

    <tr><td><h4>LENSA : </h4></td></tr>
    
    <tr><td><b>6. Obyektif</b></td><td>:</td><td>$a6</td></tr>
    
    <tr><td><b>7. Okuler</b></td><td>:</td><td>$a7</td></tr>

    <tr><td><h4>------- </h4></td></tr>
    
    <tr><td><b>8. Pengatur Fokus</b></td><td>:</td><td>$a8</td></tr>
    
    <tr><td><b>9. Clamp Vert & Horiz</b></td><td>:</td><td>$a9</td></tr>
    
    <tr><td><b>10. Penggerak Halus Vert & Horiz</b></td><td>:</td><td>$a10</td></tr>

    <tr><td><h4>SISTEM CENTERING : </h4></td></tr>
    
    <tr><td><b>11. Lensa</b></td><td>:</td><td>$a11</td></tr>
    
    <tr><td><b>12. Pengatur Fokus</b></td><td>:</td><td>$a12</td></tr>

    <tr><td><h4>SISTEM LEVELLING : </h4></td></tr>
    
    <tr><td><b>13. Nivo Tabung(Plate Level)</b></td><td>:</td><td>$a13</td></tr>
    
    <tr><td><b>14. Nivo Bulat(Circular Level)</b></td><td>:</td><td>$a14</td></tr>

    <tr><td><h4>------- </h4></td></tr>
    
    <tr><td><b>15. Sekrup ABC</b></td><td>:</td><td>$a15</td></tr>
    
    <tr><td><b>16. Tombol Keypad</b></td><td>:</td><td>$a16</td></tr>
    
    <tr><td><b>17. Laser</b></td><td>:</td><td>$a17</td></tr>
    
    <tr><td><b>18. Meteran Roll</b></td><td>:</td><td>$a18</td></tr>

    <tr><td><h4>------- </h4></td></tr>
    
    <tr><td><b><h4>19. Tripod(Statif)</h4></b></td><td>:</td><td>$a19</td></tr>
    
    <tr><td><b><h4>20. Tibrach APS</b></h4></td><td>:</td><td>$a20</td></tr>
    
    <tr><td><b><h4>21. Stick(Tongkat Pogo)</h4></b></td><td>:</td><td>$a21</td></tr>
    
    <tr><td><b><h4>22. Prisma Topo</h4></b></td><td>:</td><td>$a22</td></tr>
    
    </table>  <br>
    
<br><br>

            Note : Mohon dapat segera melakukan Approval mengenai laporan p2h total station tsb. <br>

            URL Aplikasi : http://employee.sebukucoalgroup.com/p2h/p2hreport.php

            <br>
            <br>-------------------------------------<br>
            Perhatian :<br>
            Email ini dihasilkan secara otomatis oleh sistem dan bersifat informasi,<br>
            dimohon untuk tidak membalas email ini.<br>


            <br>Terima kasih.<br>

            <br>

            Best Regards,<br>

            System IT Employee (P2H)



    ";

    $mail->Body    = $Body; //isi email

    $mail->IsHTML(true);

    $mail->AltBody = "PHP mailer"; //body email (optional)

    if (!$mail->send()) {
    } else {
    }

    // }
    header("Location:../?total_station.php");
}
// }
