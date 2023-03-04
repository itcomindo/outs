<?php
defined('ABSPATH') || exit;


function the_kota()
{
    $kota = 'Aceh,Medan,Padang,Pekanbaru,Jambi,Palembang,Bengkulu,Bandar Lampung,Pangkal Pinang,Tanjung Pinang,Jakarta Barat,Jakarta Utara,Jakarta Timur,Jakarta Selatan,Jakarta Pusat,Bandung,Semarang,Yogyakarta,Surabaya,Serang,Denpasar,Lombok,Kupang,Pontianak,Palangkaraya,Banjarmasin,Samarinda,Tanjung Selor,Manado,Palu,Makassar,Kendari,Gorontalo,Mamuju,Ambon,Sofifi,Jayapura,Manokwari,Bekasi,Depok,Bogor,Cirebon,Tasikmalaya,Cimahi,Karawang,Subang,Sukabumi,Purwakarta,Cianjur,Kuningan,Ciamis,Garut,Sumedang,Banjar,Majalengka,Indramayu,Solo,Klaten,Kudus,Boyolali,Pati,Pekalongan,Karanganyar,Pemalang,Salatiga,Magelang,Tegal,Banjarnegara,Demak,Sukoharjo,Sragen,Batang,Brebes,Grobogan,Wonogiri,Temanggung,Kebumen,Wonosobo,Kendal,Cilacap,Purbalingga,Rembang,Purworejo,Jepara,Blora,Banyumas,Malang,Kediri,Sidoarjo ,Tulungagung,Mojokerto,Trenggalek,Jember,Blitar,Madiun,Ponorogo,Nganjuk,Ngawi,Lamongan,Bojonegoro,Batu,Magetan,Gresik,Pasuruan,Tuban,Banyuwangi,Probolinggo,Situbondo,Bondowoso,Lumajang,Bangkalan,Pacitan,Pamekasan,Sampang,Jombang,Sumenep,Batam,Tangerang,Tangerang Selatan,Cilegon,Tangerang';
    // create array from string
    $kota = explode(',', $kota);

    if (is_single() && !has_category('journal')) {
        $postTitle = get_the_title();
        foreach ($kota as $k) {
            if (strpos($postTitle, $k) !== false) {
                return $k;
            }
        }
    } elseif (is_tag() && !has_category('journal')) {
        $postID = mncore_get_post_id_in_tag();
        $postTitle = get_the_title($postID);
        foreach ($kota as $k) {
            if (strpos($postTitle, $k) !== false) {
                return $k;
            }
        }
    }
}
