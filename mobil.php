<?php

class mobil {

    const MAX_HARGA = 400000000;

    public static  $harga;

    public static function belimobil()
    {
        return "Beli Mobil seharga: Rp.". self::$harga;
    }

    public static function hargamaksimalmobil()
    {
        return "Maksimal harga Mobil seharga: Rp.". number_format(self::MAX_HARGA);
    }
    


}

class Toyota extends mobil {

    public static function cekmaksimalhargamobil()
    {
        return "maksimal harga mobil:". number_format(parent::MAX_HARGA);
    }

    public static function cekmaksimalhargamobilToyota()
    {
        return "maksimal harga Toyota:". number_format(self::MAX_HARGA);
    }
    
}


//mobil::$harga = number_format(100000000);
//echo  mobil::$harga . "<br>";
//if (mobil::$harga >  mobil::MAX_HARGA) {
   // echo "Harga tidak boleh melebihi batas maksimal.";
//} else {
    //echo "Harga boleh-boleh saja.";
//}

mobil::$harga = number_format(45000000);
echo  Toyota::$harga . "<br>";
echo Toyota::cekmaksimalhargamobil() . "<br>";
echo Toyota::cekmaksimalhargamobilToyota() . "<br>";
