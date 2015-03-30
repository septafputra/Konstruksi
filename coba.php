<?php
if(isset($_POST['upload'])){
    foreach($_FILES['myfile']['name'] as $key => $val){
        $name = $_FILES['myfile']['name'][$key];
        $tmp  = $_FILES['myfile']['tmp_name'][$key];
        if(trim($name)!=''){
            $new_name = date('YmdHis').$name;
            if(move_uploaded_file($tmp,'upload/'.$new_name)){
                echo 'Berhasil mengupload file '.$name.' ke Folder upload<br/>';
            }
        }
    }
}
?>
<form method="post" enctype="multipart/form-data" action="">
<?php
for($i=1; $i<5; $i++){
?>
<input type="file" name="myfile[]"/><br/>
<?php } ?>
<input type="submit" name="upload" value="Upload"/>
</form>