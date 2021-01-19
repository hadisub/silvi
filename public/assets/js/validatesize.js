function ValidateSize(file) {
     var FileSize = file.files[0].size / 1024 / 1024; // in MiB
    if (FileSize > 2) {
    alert('Ukuran file melebihi 2 MB');
    $(file).val(''); //for clearing with Jquery;
    } else {
    
    }
}