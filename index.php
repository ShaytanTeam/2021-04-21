<?php
//Sukurkite masyvą $vartotojas su laukais - vardas, pavardė, amžius, paštas.(Užuomina. Asociatyvus masyvas )

$vartotojas = [
    "name" => "Jurgis",
    "surname" => "Gudauskas",
    "age" => 42,
    "email" => "jurgis.good@gmail.com",
];

//	Sukurkite funkciją yraPilnametis, kuri priimtų vieną parametrą - $vartotojas(masyvas iš praeitos užduoties) ir GRAŽINTU tekstą su statusu: nepilnametis, pilnametis, pensininkas.

function yraPilnametis($vartotojas) {
  if ($vartotojas["age"] < 18) {
    echo("Vartotojas yra nepilnametis");
  }
  elseif ($vartotojas["age"] >= 65) {
      echo("Vartotojas yra pensininkas");
  }
        else {
            echo("Vartotojas yra pilnametis");
    }
}

echo yraPilnametis($vartotojas);

?>
