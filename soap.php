<?php

class SoapConnect
{
    function retrieve_student($keyname)
    {
        $soapUrl = "http://ecoles33.ac-bordeaux.fr/codes/codes.asmx";
        $xml_post_string = '<?xml version="1.0" encoding="utf-8"?>';
        $xml_post_string .= '<soap:Envelope xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:soap="http://schemas.xmlsoap.org/soap/envelope/">';
        $xml_post_string .= '<soap:Body>';
        $xml_post_string .= '<Exists xmlns="urn:codes">';
        $xml_post_string .= '<Code_Eleve>' . $keyname . '</Code_Eleve>';
        $xml_post_string .= '</Exists>';
        $xml_post_string .= '</soap:Body>';
        $xml_post_string .= '</soap:Envelope>';
        
        $headers = array(
                            "POST /codes/codes.asmx HTTP/1.1",
                            "Host: ecoles33.ac-bordeaux.fr",
                            "Content-Type: text/xml; charset=utf-8",
                            "SOAPAction: \"urn:codes/Exists\"", 
                            "Content-length: ".strlen($xml_post_string),
                        );
        $url = $soapUrl;

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_ANY);
        curl_setopt($ch, CURLOPT_TIMEOUT, 10);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $xml_post_string);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

        $response = curl_exec($ch); 
        curl_close($ch);
        $response1 = str_replace("<soap:Body>","",$response);
        $response2 = str_replace("</soap:Body>","",$response1);
        $parser = simplexml_load_string($response2);
        /* Json parsing, mandatory way */
        $json = json_encode($parser);
        $array = json_decode($json,TRUE);

        return ($array["ExistsResponse"]["ExistsResult"]);
    }
}

?>