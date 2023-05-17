<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 1</title>
</head>
<body>
    <form name="latihan1" method="POST" onsubmit="return checkform(this)">
        <div>
            NIM
            <input type="text" id="txNIM" name="NIM">
        </div>

        <div>
            NAMA
            <input type="text" id="txNAMA" name="NAMA">
        </div>
        <div>
            Jenis kelamin
           <input type="radio" id="txJKEL" name="JKEL" value="P">perempuan
           <input type="radio" id="txJKEL" name="JKEL" value="L">Laki-laki
        </div> 
        <div>
            jurusan
            <select name="JURUSAN" id="txJUR">
                <option value="MTI">MTI</option>
                <option value="SK">SK</option>
                <option value="KAB">KAB</option>
                <option value="DKV">DKV</option>
                <option value="TIPAR">TIPAR</option>
            </select>
            </div>
            <div>
                Hobi 
                    <input type="checkbox" name="hobi_1">Menghayal
                    <input type="checkbox" name="hobi_2">rebahan

                </div>      
                        
        <div>
            <button type="submit"> kirim data </button>
          </div>
          </form>
    <script>
        function checkform(frm){
            let F = frm.elements;

             
            let nim = F.namedItem("NIM").value;
            console.log("NIM: "+nim);
            let nama = F.namedItem("NAMA").value;
            console.log("NAMA: "+nama);
            let jkel = F.namedItem("JKEL").value;
            console.log("JKEL: "+jkel);

            let jur = F.namedItem("JURUSAN").value;
            console.log("JURUSAN: "+jur);
            let h1  = F.namedItem("hobi_1").checked;
            console.log("hobi Menghayal: "+h1);
            return false;

        }
        
    </script>

</body>
</html>