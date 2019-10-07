<?php if(isset($_POST["submit"])) {

    $to = "mushel@gmail.com";
    $subject = "Aquatic info";
    $email = $_POST["email"];
    $name = $_POST["name"];
    $msg = $_POST["msg"];
    $tank = $_POST["tank"];
    $salt = $_POST["salt"];
    $fresh = $_POST["fresh"];
    $pond = $_POST["pond"];
    $filter = $_POST["filter"];
    $age = $_POST["age"];
    $lighting = $_POST["lighting"];
    $emergency = $_POST["emergency"];
    $pic = $_POST["pic"];

    $headers = "From: aquascape.com" . "\r\n" .
    "CC: caponeproductions@gmail.com";
    $mailBody="Name: $name\nEmail: $email\n\n$msg\n\nIs it an emergency: $emergency\nTank Size:$tank gallons\nSalt Water:$salt\nFresh Water:$fresh\nPond Water:$pond\nFilter Type: $filter\nAge: $age years\nLighting: $lighting\n$pic";

    mail($to,$subject,$mailBody,$headers);
    $thankYou="<p>Thank You! Your message has been sent.</p>";
    }

?>
            <form action="#" id="form" method="post">
                <div class="row">   
                    <div class="col input-field s12 m4">
                        <select name="fresh">
                            <option value="" disabled selected>Fresh Water</option>
                            <option value="fresh new world">New World(South American)</option>
                            <option value="fresh old world">Old World(African)</option>
                            <option value="fresh tropical">Tropical(Community)</option>
                            <option value="fresh planted">Planted</option>
                            <option value="fresh other">Other</option>
                        </select>
                    </div>
                    <div class="col input-field s12 m4">
                        <select name="salt">
                            <option value="" disabled selected>Salt Water</option>
                            <option value="salt reef">Reef/Marine</option>
                            <option value="salt coral">Coral</option>
                            <option value="salt fish">Fish Only</option>
                            <option value="salt other">Other</option>
                        </select>
                    </div>
                    <div class="col input-field s12 m4">
                        <select name="pond">
                            <option value="" disabled selected>Pond</option>
                            <option value="pond fish">Fish Only</option>
                            <option value="pond planted">Planted</option>
                            <option value="pond other">Other</option>
                        </select>
                    </div>
                </div>
                <div class="row">    
                    <div class="col input-field s12 m4">
                        <select name="filter">
                            <option value="" disabled selected>Filtration</option>
                            <option value="undergravel">Undergravel</option>
                            <option value="hob">HOB(off the back)</option>
                            <option value="internal">Internal</option>
                            <option value="canister">Canister</option>
                            <option value="protien">Protien Skimmer</option>
                            <option value="sump">SUMP</option>
                            <option value="power head">Power Head</option>
                            <option value="uv">UV</option>
                            <option value="filter other">Other</option>
                        </select>
                    </div>
                    <div class="col input-field s12 m4">
                        <select name="tank">
                            <option value="" disabled selected>Tank Size</option>
                            <option value="under 55">Under 55 Gallons</option>
                            <option value="over 55">Over 55 Gallons</option>
                            <option value="over 240">Over 240 Gallons</option>
                        </select>
                    </div>
                    <div class="col input-field s12 m4">
                        <select name="age">
                            <option value="" disabled selected>Age of setup</option>
                            <option value="new">New</option>
                            <option value="5">over 5 years</option>
                            <option value="10">over 10 years</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col input-field s12 m4">
                        <select name="lighting">
                            <option value="" disabled selected>Type of lighting</option>
                            <option value="flourescent">Flourescent</option>
                            <option value="led">LED</option>
                            <option value="ballast">Ballast</option>
                            <option value="other">Other</option>
                        </select>
                    </div>
                    <div class="col input-field s12 m8">
                        <p>
                            Is this an emergency?
                            <label>
                            <input type="radio" name="emergency" value="yes"/>
                            <span>Yes</span>
                            </label>
                            &nbsp; &nbsp;
                            <label>
                            <input type="radio" name="emergency" value="no" checked />
                            <span>No</span>
                            </label>
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col input-field s12 m6">
                        <input type="text" name="name" class="validate">
                        <label for="name">Full Name</label>
                    </div>
                    <div class="col input-field s12 m6">
                        <input name="email" type="email" class="validate">
                        <label for="email">Email</label> 
                    </div>
                </div>
                <div class="row">
                    <div class="col input-field s12 m9">
                        <textarea name="msg" class="materialize-textarea"></textarea>
                        <label for="msg">Message</label>
                    </div>
                    <div class="col input-field s12 m3">
                        <button class="btn waves-effect waves-light blue " type="submit" name="submit" value="submit" id="send">Submit
                        </button>    
                    </div>
                </div>
            </form>
            <div class="row">
                <div class="col s12">
                    <?=$thankYou ?>
                </div>
            </div>