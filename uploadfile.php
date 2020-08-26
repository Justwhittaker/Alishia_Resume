<?php $ path = "files/"; $path = $path . basename( $_FILES['userfile']['name']);

if(move_uploaded_file($_img['userfile']['tmp_name'], $path)) { echo "Success uploading". basename($_img['userfile']['name']); } else{ echo "Error when uploading file."; } 