<?php
class Persona{
    /*
    public $nombre;
    public $genero;
    public $ubicacion;
    public $email;
    public $fechanacimiento;
    public $foto;*/

    public static function getPersonas(){
        $lista = array();

        $randomuserAPIHandle = curl_init();

        curl_setopt($randomuserAPIHandle, CURLOPT_URL, 'https://randomuser.me/api/?results=10&inc=name,gender,location,email,dob,picture&noinfo');
        curl_setopt($randomuserAPIHandle, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($randomuserAPIHandle, CURLOPT_TIMEOUT, 30);

        $randomuserAPIReturn = curl_exec($randomuserAPIHandle);	
        //$userData = json_decode($randomuserAPIReturn);
        
        //if($userData != null) {
        echo $randomuserAPIReturn;
            
            header('HTTP/1.1 201 OK');
            /*
            foreach($userData as $user) {
                $per = new Persona(); 
                $per->nombre = $user->name;
                $per->genero = $user->gender;
                $per->ubicacion = $user->location;
                $per->email = $user->email;
                $per->fechanacimiento = $user->nat;
                $per->foto = $user->picture;
                array_push($lista, $per);
            }*/
        //}

        if(curl_errno($randomuserAPIHandle)){
            //throw new Exception('Curl error: ' . curl_error($currencyAPIHandle));
            header('HTTP/1.1 404 Curl error: ' . curl_error($randomuserAPIHandle));
        }
        curl_close($randomuserAPIHandle);

        //return $lista;
    }
}
?>