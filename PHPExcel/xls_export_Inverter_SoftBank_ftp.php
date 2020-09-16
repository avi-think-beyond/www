<?php
$file_down_name= date('j-F-Y').'_SoftBank_report.xls';
$file = '/home/swltstawsfleximc/public_html/zemail_data/'.$file_down_name;
$remote_file = '/SOLAR/AP/GE_SBE/scada/'.$file_down_name;
$ftp_address='wind3.50hertz.in';
$ftp_user_name='sbe';
$ftp_user_pass='sbe@#12pw';?>
<?php
$ftp_conn = ftp_connect($ftp_address) or print("Could not connect to $ftp_address");
$login = ftp_login($ftp_conn, $ftp_user_name, $ftp_user_pass);

// turn passive mode on
ftp_pasv($ftp_conn, true);

// $file = "localfile.txt";

// upload file
if (ftp_put($ftp_conn, $remote_file, $file, FTP_BINARY))
  {
  echo "Successfully uploaded $file.";
  }
else
  {
  echo "Error uploading $file.";
  }
  $res = ftp_size($ftp_conn, $remote_file);

if ($res != -1) {
    echo "size of $remote_file is $res bytes";
    echo "orgianl File Size :".filesize($file);
} else {
    echo "couldn't get the size";
}

// print_r($ftp_conn);
// close connection
ftp_close($ftp_conn);
?>
