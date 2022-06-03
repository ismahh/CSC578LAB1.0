<?php

  $s = "";

  $Johor = ["Batu Pahat","Johor Bahru","Kluang District",
            "Kota Tinggi","Kulai","Mersing","Muar",
            "Pontian","Segamat","Tangkak"];

  $Kedah = ["Baling","Bandar Baharu","Kota Setar",
            "Kuala Muda","Kubang Pasu","Kulim",
            "Langkawi","Padang Terap","Pendang",
            "Pokok Sena","Silk District","Yan"];

  $Kelantan = ["Bachok","Gua Musang","Jeli",
              "Kota Bharu", "Kuala Krai","Lojing",
              "Machang","Pasir Mas","Pasir Puteh",
              "Tanah Merah", "Tumpat"];

  $Melaka = ["Alor Gajah","Central Melaka","Jasin"];

  $Negeri = ["Jelebu","Jempol","Kuala Pilah",
            "Port Dickson","Rembau","Seremban",
            "Tampin"];

  $Pahang = ["Bentong","Bera","Cameron",
            "Jerantut","Kuantan","Lipis",
            "Maran","Pekan","Raub",
            "Rompin","Temerloh"];

  $Penang = ["Bukit Mertajam","Seberang Perai"];

  $Perak = ["Bagan Datuk","Batang Padang","Hilir Perak",
            "Hulu Perak", "Kampar", "Kerian",
            "Kinta","Kuala Kangsar", "Larut",
            "Matang","Selama","Manjung","Muallim",
            "Perak Tengah"];
  
  $Perlis = ["Arau","Kangar"];

  $Sabah = ["Beaufort","Beluran","Kalabakan","Keningau",
            "Kinabatangan","Kota Belud","Kota Kinabalu",
            "Kota Marudu","Kuala Penyu","Kudah","Kunak",
            "Lahad Datu","Nabawan","Papar","Penampang",
            "Pitas","Putatan","Ranau","Sandakan",
            "Semporna","Sipitang","Tambunan","Tawau",
            "Telupid","Tenom","Tongod","Tuaran"];

  $Sarawak = ["Bau","Beluru","Betong","Bintulu",
              "Bukit Mabong","Dalat","Daro",
              "Julau","Kabong","Kanowit","Kapit",
              "Kuching","Lawas","Limbang","Lubok",
              "Lundu","Marudi","Matu","Meradong",
              "Miri","Mukah","Pakan","Pusa","Samarahan",
              "Saratok","Saribas","Sarikei","Sebauh",
              "Selangau","Serian","Sibu","Simunjan",
              "Song","Sri Aman","Subis","Tanjung Manis",
              "Tatau","Tebedu","Telang Usan"];

  $Selangor = ["Gombak","Hulu Langat","Hulu Selangor","Klang",
              "Kuala Langat","Kuala Selangor","Pandan Indah",
              "Petaling","Sabak Bernam","Sepang"];

  $Terengganu = ["Besut","Dungun","Hulu Terengganu","Kemamam",
                "Kuala Nerus","Kuala Terengganu","Marang","Setiu"];

  // get the q parameter from URL
  $b = $_REQUEST["q"];
  $b = strtolower($b);

  if( $b == "johor" )
  $s = $Johor;
  else if( $b == "kedah")
  $s = $Kedah;
  else if( $b == "kelantan" )
  $s = $Kelantan;
  else if( $b == "melaka" )
  $s = $Melaka;
  else if( $b == "negeri sembilan")
  $s = $Negeri;
  else if( $b == "pahang")
  $s = $Pahang;
  else if( $b == "penang")
  $s = $Penang;
  else if( $b == "perak")
  $s = $Perak;
  else if( $b == "perlis")
  $s = $Perlis;
  else if( $b == "sabah")
  $s = $Sabah;
  else if( $b == "sarawak")
  $s = $Sarawak;
  else if( $b == "selangor")
  $s = $Selangor;
  else if( $b == "terengganu")
  $s = $Terengganu;



  echo json_encode($s);



?>