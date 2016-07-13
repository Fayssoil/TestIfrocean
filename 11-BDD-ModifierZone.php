<?php
include_once 'Ifrocean_BDD/Plage.php';

?>

<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Modifier une zone</title>

        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    </head>
    <body>
     <div class="container">
            <h1>Modifier une zone</h1>
            <hr>
            
            <form action="11-BDD-POSTModifierZone.php"
                  method="post">
                <h2>Sélectionner une plage à modifier</h2>
                    <?php $plages=Plage::getAllPlages();
                    foreach ($plages as $plage){
                    ?>   
                <div class="radio">
                    
                    <label>
                      <input type="radio" name="plage_idM" id='plage_id' value="<?php echo $plage->nomplage ?>" checked>
                      <?php echo $plage->nomplage ?>
                    </label>
                  </div>
                  <?php  
                 }
                ?>
                  

                
                <h2>Point A</h2>
                <h3>Latitude Point A</h3>
                <div class="form-group row">
                    <label for="latAdegreM" class="col-sm-2
                           form-control-label">latAdegre</label>
                    <div class="col-sm-4">
                        <input type="number" step="1" required
                               min="0" max="500" name="latAdegreM" id="latAdegreM"
                               class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="latAmin" class="col-sm-2
                           form-control-label">latAmin</label>
                    <div class="col-sm-4">
                        <input type="number" step="1" required
                               min="0" max="500" name="latAminM" id="latAmin"
                               class="form-control">
                    </div>
                </div>
                
                  <div class="form-group row">
                    <label for="latAsec" class="col-sm-2
                           form-control-label">latAsec</label>
                    <div class="col-sm-4">
                        <input type="number" required
                               step="0.01" name="latAsecM" id="latAsec"
                               class="form-control">
                    </div>
                </div>
                 <h3>Longitude Point A</h3>
                   <div class="form-group row">
                    <label for="longAdegre" class="col-sm-2
                           form-control-label">longAdegre</label>
                    <div class="col-sm-4">
                        <input type="number" step="1" required
                               min="0" max="500" name="longAdegreM" id="longAdegre"
                               class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="longAmin" class="col-sm-2
                           form-control-label">longAmin</label>
                    <div class="col-sm-4">
                        <input type="number" step="1" required
                               min="0" max="500" name="longAminM" id="longAmin"
                               class="form-control">
                    </div>
                </div>
                
                  <div class="form-group row">
                    <label for="longAsec" class="col-sm-2
                           form-control-label">longAsec</label>
                    <div class="col-sm-4">
                        <input type="number" required
                               step="0.01" name="longAsecM" id="longAsec"
                               class="form-control">
                    </div>
                </div>
                
               
                <h2>Point B</h2>
                <h3>Latitude Point B</h3>
                <div class="form-group row">
                    <label for="latBdegre" class="col-sm-2
                           form-control-label">latBdegre</label>
                    <div class="col-sm-4">
                        <input type="number" step="1" required
                               min="0" max="500" name="latBdegreM" id="latBdegre"
                               class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="latBmin" class="col-sm-2
                           form-control-label">latBmin</label>
                    <div class="col-sm-4">
                        <input type="number" step="1" required
                               min="0" max="500" name="latBminM" id="latBmin"
                               class="form-control">
                    </div>
                </div>
                
                  <div class="form-group row">
                    <label for="latBsec" class="col-sm-2
                           form-control-label">latBsec</label>
                    <div class="col-sm-4">
                        <input type="number" required
                               step="0.01"  name="latBsecM" id="latBsec"
                               class="form-control">
                    </div>
                </div>
                 <h3>Longitude Point B</h3>
                   <div class="form-group row">
                    <label for="longBdegre" class="col-sm-2
                           form-control-label">longBdegre</label>
                    <div class="col-sm-4">
                        <input type="number" step="1" required
                               min="0" max="500" name="longBdegreM" id="longBdegre"
                               class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="longBmin" class="col-sm-2
                           form-control-label">longBmin</label>
                    <div class="col-sm-4">
                        <input type="number" step="1" required
                               min="0" max="500" name="longBminM" id="longBmin"
                               class="form-control">
                    </div>
                </div>
                
                  <div class="form-group row">
                    <label for="longBsec" class="col-sm-2
                           form-control-label">longBsec</label>
                    <div class="col-sm-4">
                        <input type="number" required
                               step="0.01"  name="longBsecM" id="longBsec"
                               class="form-control">
                    </div>
                </div>
                 
                <h2>Point C</h2>
                <h3>Latitude Point C</h3>
                <div class="form-group row">
                    <label for="latAdegre" class="col-sm-2
                           form-control-label">latCdegre</label>
                    <div class="col-sm-4">
                        <input type="number" step="1" required
                               min="0" max="500" name="latCdegreM" id="latCdegre"
                               class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="latCmin" class="col-sm-2
                           form-control-label">latCmin</label>
                    <div class="col-sm-4">
                        <input type="number" step="1" required
                               min="0" max="500" name="latCminM" id="latCmin"
                               class="form-control">
                    </div>
                </div>
                
                  <div class="form-group row">
                    <label for="latCsec" class="col-sm-2
                           form-control-label">latCsec</label>
                    <div class="col-sm-4">
                        <input type="number" required
                               step="0.01" name="latCsecM" id="latCsec"
                               class="form-control">
                    </div>
                </div>
                 <h3>Longitude Point C</h3>
                   <div class="form-group row">
                    <label for="longCdegre" class="col-sm-2
                           form-control-label">longCdegre</label>
                    <div class="col-sm-4">
                        <input type="number" step="1" required
                               min="0" max="500" name="longCdegreM" id="longCdegre"
                               class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="longCmin" class="col-sm-2
                           form-control-label">longCmin</label>
                    <div class="col-sm-4">
                        <input type="number" step="1" required
                               min="0" max="500" name="longCminM" id="longCmin"
                               class="form-control">
                    </div>
                </div>
                
                  <div class="form-group row">
                    <label for="longCsec" class="col-sm-2
                           form-control-label">longCsec</label>
                    <div class="col-sm-4">
                        <input type="number" required
                               step="0.01" name="longCsecM" id="longCsec"
                               class="form-control">
                    </div>
                </div>
                
               
                <h2>Point D</h2>
                <h3>Latitude Point D</h3>
                <div class="form-group row">
                    <label for="latBDegre" class="col-sm-2
                           form-control-label">latDdegre</label>
                    <div class="col-sm-4">
                        <input type="number" step="1" required
                               min="0" max="500" name="latDdegreM" id="latDdegre"
                               class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="latDmin" class="col-sm-2
                           form-control-label">latDmin</label>
                    <div class="col-sm-4">
                        <input type="number" step="1" required
                               min="0" max="500" name="latDminM" id="latDmin"
                               class="form-control">
                    </div>
                </div>
                
                  <div class="form-group row">
                    <label for="latDsec" class="col-sm-2
                           form-control-label">latDsec</label>
                    <div class="col-sm-4">
                        <input type="number" required
                               step="0.01"  name="latDsecM" id="latDsec"
                               class="form-control">
                    </div>
                </div>
                 <h3>Longitude Point D</h3>
                   <div class="form-group row">
                    <label for="longDdegre" class="col-sm-2
                           form-control-label">longDdegre</label>
                    <div class="col-sm-4">
                        <input type="number" step="1" required
                               min="0" max="500" name="longDdegreM" id="longDdegre"
                               class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="longDmin" class="col-sm-2
                           form-control-label">longDmin</label>
                    <div class="col-sm-4">
                        <input type="number" step="1" required
                               min="0" max="500" name="longDminM" id="longDmin"
                               class="form-control">
                    </div>
                </div>
                
                  <div class="form-group row">
                    <label for="longDsec" class="col-sm-2
                           form-control-label">longDsec</label>
                    <div class="col-sm-4">
                        <input type="number" required
                               step="0.01" name="longDsecM" id="longDsec"
                               class="form-control">
                    </div>
                </div>  

                 <input class="col-sm-offset-6 btn btn-success" type="submit" value="enregistrer"><br/><br/>
                
            </form>
        </div>
    </body>
</html>
