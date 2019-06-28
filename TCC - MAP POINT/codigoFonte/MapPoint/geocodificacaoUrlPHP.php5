<?php

//Teste 3

class geocoder{
    static private $url = "http://maps.google.com/maps/api/geocode/json?sensor=false&address=";

    static public function getLocation($address){
        $url = self::$url.urlencode($address);
        
        $resp_json = self::curl_file_get_contents($url);
        $resp = json_decode($resp_json, true);

        if($resp['status']='OK'){
            return $resp['results'][0]['geometry']['location'];
        }else{
            return false;
        }
    }
    static private function curl_file_get_contents($URL){
        $c = curl_init();
        curl_setopt($c, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($c, CURLOPT_URL, $URL);
        $contents = curl_exec($c);
        curl_close($c);

        if ($contents) return $contents;
            else return FALSE;
    }
}// Fim clas geocoder

$address=urlencode("Marechal Mallet, Praia Grande, SP");
$loc = geocoder::getLocation($address);//Chama a classe geocoder passando o endereço a ser geocodificado
print_r($loc);//retorna a latitude e longitude





/* Teste 2
function geocodificacao($addr)
{
    $url = "http://maps.googleapis.com/maps/api/geocode/json?sensor=false&address=".urlencode($addr);
    $json_txt = file_get_contents($url);
    if (! $json_txt)
        return FALSE;
    $json_arr = json_decode($json_txt, TRUE);
    if ($json_arr["status"] != "OK")
        return FALSE;
 
    $result = $json_arr["results"][0];
    $ret = array(
        "addr" => $addr,
        "faddr" => $result["formatted_address"],
        "lat" => $result["geometry"]["location"]["lat"], 
        "lng" => $result["geometry"]["location"]["lng"]
    );
    return $ret; 
}*/



// Codifica uma string para URL-safe base64
/*
function encodeBase64UrlSafe($value)
{
  return str_replace(array('+', '/'), array('-', '_'),
    base64_encode($value));
}

// Decodifica uma seqüência de base64 URL-safe
function decodeBase64UrlSafe($value)
{
  return base64_decode(str_replace(array('-', '_'), array('+', '/'),
    $value));
}

// Assine uma URL com uma determinada chave de criptografia
// Note que este URL deve ser devidamente URL-codificado
function signUrl($myUrlToSign, $privateKey)
{
  // Analisar a Url
  $url = parse_url($myUrlToSign);

  $urlPartToSign = $url['path'] . "?" . $url['query'];

  // Decodificar a chave privada em seu formato binário
  $decodedKey = decodeBase64UrlSafe($privateKey);

  // Cria uma assinatura usando a chave privada ea URL-codificado
  // String usando HMAC SHA1. Esta assinatura será binário.
  $signature = hash_hmac("sha1",$urlPartToSign, $decodedKey,  true);

  $encodedSignature = encodeBase64UrlSafe($signature);

  return $myUrlToSign."&signature=".$encodedSignature;
}

echo signUrl("http://maps.google.com/maps/api/geocode/json?address=New+York&sensor=false&client=clientID", 'vNIXE0xscrmjlyV-12Nj_BvUPaw=');
*/

?>

