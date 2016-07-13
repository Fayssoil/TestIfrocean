<?php

include_once 'Polygone.php';
include_once 'Config.php';

class Zone extends Polygone {

    public $id;
    public $surface;
    public $plage_id;


    public function __construct($p1, $p2, $p3, $p4, $couleur, $plage_id, $cle = 0) {
        $desPoints = array($p1, $p2, $p3, $p4);
        $this->id = $cle;
        $this->plage_id = $plage_id;
       parent::__construct($desPoints, $couleur);
        /*$this->surface=$this->calculerSurface();*/
    }

    
    
    
    public function calculerSurface() {
        $t1 = new Triangle($this->lesPoints[0]
                , $this->lesPoints[1]
                , $this->lesPoints[2]);
        $t2 = new Triangle($this->lesPoints[2]
                , $this->lesPoints[3]
                , $this->lesPoints[0]);
        
        $surface = $t1->calculerSurface()+$t2->calculerSurface();
       
        return $surface;
        
    }
    

    public function Inserer() {

        try {
            $pdo = new PDO("mysql:host=" . Config::SERVERNAME
                    . ";dbname=" . Config::DBNAME
                    , Config::USERNAME
                    , Config::PASSWORD);
            
            
                
            // pour éviter les injections sql
           
          $req = $pdo->prepare("INSERT INTO zones(plage_id, latAdegre, latAmin, latAsec, longAdegre, longAmin, longAsec, "
                  . "latBdegre, latBmin, latBsec, longBdegre, longBmin, longBsec, "
                  . "latCdegre, latCmin, latCsec, longCdegre, longCmin, longCsec, "
                  . "latDdegre, latDmin, latDsec, longDdegre, longDmin, longDsec, surface, latA, longA, latB, longB, latC, longC, latD, longD) "
                  . "VALUES (:plage_id, :latAdegre, :latAmin, :latAsec, :longAdegre, :longAmin, :longAsec, "
                  . ":latBdegre, :latBmin, :latBsec, :longBdegre, :longBmin, :longBsec, "
                  . ":latCdegre, :latCmin, :latCsec, :longCdegre, :longCmin, :longCsec, "
                  . ":latDdegre, :latDmin, :latDsec, :longDdegre, :longDmin, :longDsec, :surface, :latA, :longA, :latB, :longB, :latC, :longC, :latD, :longD)");
          
          

    
           
            $req->bindParam(":latAdegre", $this->lesPoints[0]->degreLat);
            $req->bindParam(":latAmin", $this->lesPoints[0]->minuteLat);
            $req->bindParam(":latAsec", $this->lesPoints[0]->secondeLat);  
            $req->bindParam(":longAdegre", $this->lesPoints[0]->degreLong);
            $req->bindParam(":longAmin", $this->lesPoints[0]->minuteLong);
            $req->bindParam(":longAsec", $this->lesPoints[0]->secondeLong);
            $req->bindParam(":latBdegre", $this->lesPoints[1]->degreLat);
            $req->bindParam(":latBmin", $this->lesPoints[1]->minuteLat);
            $req->bindParam(":latBsec", $this->lesPoints[1]->secondeLat);
            $req->bindParam(":longBdegre", $this->lesPoints[1]->degreLong);
            $req->bindParam(":longBmin", $this->lesPoints[1]->minuteLong);
            $req->bindParam(":longBsec", $this->lesPoints[1]->secondeLong);
            $req->bindParam(":latCdegre", $this->lesPoints[2]->degreLat);
            $req->bindParam(":latCmin", $this->lesPoints[2]->minuteLat);
            $req->bindParam(":latCsec", $this->lesPoints[2]->secondeLat);
            $req->bindParam(":longCdegre", $this->lesPoints[2]->degreLong);
            $req->bindParam(":longCmin", $this->lesPoints[2]->minuteLong);
            $req->bindParam(":longCsec", $this->lesPoints[2]->secondeLong);
            $req->bindParam(":latDdegre", $this->lesPoints[3]->degreLat);
            $req->bindParam(":latDmin", $this->lesPoints[3]->minuteLat);
            $req->bindParam(":latDsec", $this->lesPoints[3]->secondeLat);
            $req->bindParam(":longDdegre", $this->lesPoints[3]->degreLong);
            $req->bindParam(":longDmin", $this->lesPoints[3]->minuteLong);
            $req->bindParam(":longDsec", $this->lesPoints[3]->secondeLong);
            $req->bindParam(":surface", $this->surface);
            $req->bindParam(":plage_id", $this->plage_id);
             $req->bindParam(":latA", $this->lesPoints[0]->latitudeNumerique);
             $req->bindParam(":longA", $this->lesPoints[0]->longitudeNumerique);
             $req->bindParam(":latB", $this->lesPoints[1]->latitudeNumerique);
             $req->bindParam(":longB", $this->lesPoints[1]->longitudeNumerique);
             $req->bindParam(":latC", $this->lesPoints[2]->latitudeNumerique);
             $req->bindParam(":longC", $this->lesPoints[2]->longitudeNumerique);
             $req->bindParam(":latD", $this->lesPoints[3]->latitudeNumerique);
             $req->bindParam(":longD", $this->lesPoints[3]->longitudeNumerique);
            
             
           
          
            
            
            
            $req->execute();
        } catch (PDOException $e) {
            echo $e->getMessage();
        }


        //fermeture
        $pdo = null;
    }
    
    public static function modify($cle){
        try {
            $pdo = new PDO("mysql:host=" . Config::SERVERNAME
                    . ";dbname=" . Config::DBNAME
                    , Config::USERNAME
                    , Config::PASSWORD);
            
             $req->$pdo->prepare("UPDATE zone SET latAdegre = :latBdegre , latAmin = :latAmin, latAsec = :latAsec , longAdegre =:longAdegre, longAmin = :longAmin, longAsec = :longAsec, "
                  . "latBdegre = :latBdegre, latBmin = latBmin , latBsec = :latBsec , longBdegre = :longBdegre, longBmin = :longBmin, longBsec = :longBsec, "
                  . "latCdegre, latCmin, latCsec, longCdegre, longCmin, longCsec, "
                  . "latDdegre = :latDdegre , latDmin = :latDmin , latDsec = :latDsec , longDdegre = :longDdegre , longDmin = :longDmin ,"
                  . " longDsec = :longDsec , surface = :surface , latA = :latA , longA = :longA, latB = :latB, longB = :longB, latC= :latC, "
                  . "longC = :longC, latD = :latD, longD = :longD WHERE id = :cle");
             
            $req->bindParam(":latAdegreM", $this->lesPoints[0]->degreLat);
            $req->bindParam(":latAminM", $this->lesPoints[0]->minuteLat);
            $req->bindParam(":latAsecM", $this->lesPoints[0]->secondeLat);  
            $req->bindParam(":longAdegreM", $this->lesPoints[0]->degreLong);
            $req->bindParam(":longAminM", $this->lesPoints[0]->minuteLong);
            $req->bindParam(":longAsecM", $this->lesPoints[0]->secondeLong);
            $req->bindParam(":latBdegreM", $this->lesPoints[1]->degreLat);
            $req->bindParam(":latBminM", $this->lesPoints[1]->minuteLat);
            $req->bindParam(":latBsecM", $this->lesPoints[1]->secondeLat);
            $req->bindParam(":longBdegreM", $this->lesPoints[1]->degreLong);
            $req->bindParam(":longBminM", $this->lesPoints[1]->minuteLong);
            $req->bindParam(":longBsecM", $this->lesPoints[1]->secondeLong);
            $req->bindParam(":latCdegreM", $this->lesPoints[2]->degreLat);
            $req->bindParam(":latCminM", $this->lesPoints[2]->minuteLat);
            $req->bindParam(":latCsecM", $this->lesPoints[2]->secondeLat);
            $req->bindParam(":longCdegreM", $this->lesPoints[2]->degreLong);
            $req->bindParam(":longCminM", $this->lesPoints[2]->minuteLong);
            $req->bindParam(":longCsecM", $this->lesPoints[2]->secondeLong);
            $req->bindParam(":latDdegreM", $this->lesPoints[3]->degreLat);
            $req->bindParam(":latDminM", $this->lesPoints[3]->minuteLat);
            $req->bindParam(":latDsecM", $this->lesPoints[3]->secondeLat);
            $req->bindParam(":longDdegreM", $this->lesPoints[3]->degreLong);
            $req->bindParam(":longDminM", $this->lesPoints[3]->minuteLong);
            $req->bindParam(":longDsecM", $this->lesPoints[3]->secondeLong);
            $req->bindParam(":surfaceM", $this->surface);
            $req->bindParam(":plage_idM", $this->plage_id);
             $req->bindParam(":latAM", $this->lesPoints[0]->latitudeNumerique);
             $req->bindParam(":longAM", $this->lesPoints[0]->longitudeNumerique);
             $req->bindParam(":latBM", $this->lesPoints[1]->latitudeNumerique);
             $req->bindParam(":longBM", $this->lesPoints[1]->longitudeNumerique);
             $req->bindParam(":latCM", $this->lesPoints[2]->latitudeNumerique);
             $req->bindParam(":longCM", $this->lesPoints[2]->longitudeNumerique);
             $req->bindParam(":latDM", $this->lesPoints[3]->latitudeNumerique);
             $req->bindParam(":longDM", $this->lesPoints[3]->longitudeNumerique);
             
             
            $req->execute();
        } catch (PDOException $e) {
            echo $e->getMessage();
        }


        //fermeture
        $pdo = null;
    }
        
    

    public static function getAllZones() {
        $pdo = new PDO("mysql:host=" . Config::SERVERNAME
                . ";dbname=" . Config::DBNAME
                , Config::USERNAME
                , Config::PASSWORD);

        $req = $pdo->prepare("select id, plage_id, latAdegre, latAmin, latAsec, longAdegre, longAmin, longAsec, "
                . "latBdegre, latBmin, latBsec, longBdegre, longBmin, longBsec, "
                . "latCdegre, latCmin, latCsec, longCdegre, longCmin, longCsec, "
                . "latDdegre, latDmin, latDsec, longDdegre, longDmin, longDsec, "
                . "couleur from zones");

        $req->execute();

        if ($req->rowCount() >= 1) {
            $zones = array();

            while ($ligne = $req->fetch()) {
                $p1 = new Point($ligne["latAdegre"], $ligne["latAmin"], $ligne["latAsec"], $ligne["longAdegre"], $ligne["longAmin"], $ligne["longAsec"]);
                $p2 = new Point($ligne["latBdegre"], $ligne["latBmin"], $ligne["latBsec"], $ligne["longBdegre"], $ligne["longBmin"], $ligne["longBsec"]);
                $p3 = new Point($ligne["latCdegre"], $ligne["latCmin"], $ligne["latCsec"], $ligne["longCdegre"], $ligne["longCmin"], $ligne["longCsec"]);
                $p4 = new Point($ligne["latDdegre"], $ligne["latDmin"], $ligne["latDsec"], $ligne["longDdegre"], $ligne["longDmin"], $ligne["longDsec"]);
                $zones[] = new Zone($p1, $p2, $p3, $p4, $ligne["couleur"], $ligne["plage_id"], $ligne["id"]);
  
            }
            return $zones;
        }
    }
    
    
    public static function getById($cle) {
        $pdo = new PDO("mysql:host=" . Config::SERVERNAME
                . ";dbname=" . Config::DBNAME
                , Config::USERNAME
                , Config::PASSWORD);

        $req = $pdo->prepare("select id, latAdegre, latAmin, latAsec, longAdegre, longAmin, longAsec, "
                . "latBdegre, latBmin, latBsec, longBdegre, longBmin, longBsec, "
                . "latCdegre, latCmin, latCsec, longCdegre, longCmin, longCsec, "
                . "latDdegre, latDmin, latDsec, longDdegre, longDmin, longDsec, "
                . "couleur from zones"
                . " where id=:cle");

        
        $req->bindParam(":cle", $cle);
        
        $req->execute();
        if ($req->rowCount() == 1) {
            $ligne = $req->fetch();

            $p1=new Point($ligne['latAdegre'], $ligne['latAmin'], $ligne['latAsec'], $ligne['longAdegre'], $ligne['longAmin'], $ligne['longAsec']);
            $p2=new Point($ligne['latBdegre'], $ligne['latBmin'], $ligne['latBsec'], $ligne['longBdegre'], $ligne['longBmin'], $ligne['longBsec']);
            $p3=new Point($ligne['latCdegre'], $ligne['latCmin'], $ligne['latCsec'], $ligne['longCdegre'], $ligne['longCmin'], $ligne['longCsec']);
            $p4=new Point($ligne['latDdegre'], $ligne['latDmin'], $ligne['latDsec'], $ligne['longDdegre'], $ligne['longDmin'], $ligne['longDsec']);
                    
            $zone = new Zone($p1, $p2, $p3, $p4, $ligne["couleur"], $ligne["id"]);
           
            
            return $zone;
        } else {
            return null;
        }
    }

    public function supprimer() {
        $pdo = new PDO("mysql:host=" . Config::SERVERNAME
                . ";dbname=" . Config::DBNAME
                , Config::USERNAME
                , Config::PASSWORD);

        $req = $pdo->prepare("delete from zones"
                . " where id=:cle");

        $req->bindParam(":cle", $this->id);

        $req->execute();
    }

}
