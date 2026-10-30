function fn_ValForm(){
    var kosong = "";
    var cekValidasiEmail = /^[a-z0-9][a-z0-9_\.-]{0,}[a-z0-9]@[a-z0-9][a-z0-9_\.-]{0,}[a-z0-9][\.][a-z0-9]{2,4}$/;
    var snama = document.getElementById("nama").value;
    var smail = document.getElementById("email").value;
    var sumur = document.getElementById("umur").value;
    var sKategori = document.getElementById("kategori").value;

    if(snama == "" || smail == "" || sumur ==""  || sKategori ==""){
        kosong += "\n* Anda belum mengisikan semua data";
    }

    if(!cekValidasiEmail == smail){
        kosong += "\n* Peringatan: Format email belum benar";
    }


    if(kosong != ""){
        alert("Peringatan:\n" + kosong);
        return false;
    }

    if(sumur <= 17){
        sumur = "Anggota Pelajar";
    }else{
        sumur = "Anggota Umum";
    }

    switch(sKategori){
        case "F":
            sKategori = "Fiksi";
            break;
        case "N":
            sKategori = "Non-Fiksi";
            break;
        case "J":{
            sKategori = "Jurnal Ilmiah";
        }

    }


    alert("Terima kasih " +snama+ " ! Anda terdaftar di koleksi "+sKategori+" "+sumur+".");
    return true;

    
}

