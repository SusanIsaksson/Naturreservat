<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Animals</title>
</head>
<body>

    <?php   
    
        //echo $_POST["monkey"] . $_POST["giraffe"] . $_POST["tiger"] . $_POST["coconut"];
        
        abstract class Animal {
            public function onClickCode() {
                $text = 'alert("';
                $text .= $this->name;
                $text .= ": ";
                $text .= $this->getSound();
                $text .='");';
                return $text;
            }

            abstract protected function getSound();

            public $name;
            public $img;

            public function echoImg() {
                echo "img style='max-width:25em;' src='".$this->imgUrl."' onclick='".$this->onClickCode()."'/><br>";
            } 
        }
  

        class Monkey extends Animal {
            function __construct($name, $img) {
                //parent::__construct($name, $img, $sound); - Osäker varför denna inte ska vara med?
                $this->name = $name;
                $this->img = $img;            
            }
            function getSound() {
                return "OAOAHAOAHA";
            }
        }

        class Giraffe extends Animal {
            function __construct($name, $img) {
                //parent::__construct($name, $img, $sound);
                $this->name = $name;
                $this->img = $img;            
            }
            function getSound() {
                return "RAAARAHA";
            }
        }

        class Tiger extends Animal {
            function __construct($name, $img) {
                //parent::__construct($name, $img, $sound);
                $this->name = $name;
                $this->img = $img;            
            }
            function getSound() {
                return "AHHHARRRRAAAAH";
            }
        }
        
        class Cocunut extends Animal {
            function __construct($name, $img) {
                //parent::__construct($name, $img, $sound);
                $this->name = $name;
                $this->img = $img;            
            }
            function getSound() {
                return "En papaya coconut, på en plats i solen...";
            }
        }

        function addImgCount($imgCount) {
            if($imgCount == 2) {
                return 0;
            } else {
                return $imgCount + 1;
            }
        }

        if(isset($_SERVER["REQUEST_METHOD"]) && $_SERVER["REQUEST_METHOD"] === "POST") {
            if(isset($_POST["monkey"]) && isset($_POST["giraffe"]) && isset($_POST["tiger"]) && isset($_POST["coconut"])) {

                $monkey = $_POST["monkey"];
                $giraffe = $_POST["giraffe"];
                $tiger = $_POST["tiger"];
                $coconut = $_POST["coconut"];

                $animalArray = array();
                $imgCount = 0;

                for ($i = 0; $i < $monkey; $i++) {
                    $rawData = file_get_contents("https://randomuser.me/api/");

                    $name = json_decode($rawData)->results[0]->name->first;
                    $monkeyInstans = new Monkey($name, "./img/monkey.jfif" . $imgCount . ".jpg");

                    $imgCount = addImgCount($imgCount);

                    array_push($animalArray, $monkeyInstans);
                }

                $imgCount = 0;

                for ($i = 0; $i < $giraffe; $i++) {
                    $rawData = file_get_contents("https://randomuser.me/api/");

                    $name = json_decode($rawData)->results[0]->name->first;
                    $giraffeInstans = new Giraffe($name, "./img/giraffe.jfif" . $imgCount . ".jpg");

                    $imgCount = addImgCount($imgCount);

                    array_push($animalArray, $giraffeInstans);
                }

                $imgCount = 0;

                for ($i = 0; $i < $tiger; $i++) {
                    $rawData = file_get_contents("https://randomuser.me/api/");

                    $name = json_decode($rawData)->results[0]->name->first;
                    $tigerInstans = new Tiger($name, "./img/tiger.jfif" . $imgCount . ".jpg");

                    $imgCount = addImgCount($imgCount);

                    array_push($animalArray, $tigerInstans);
                }

                $imgCount = 0;

                for ($i = 0; $i < $coconut; $i++) {
                    $rawData = file_get_contents("https://randomuser.me/api/");

                    $name = json_decode($rawData)->results[0]->name->first;
                    $coconutInstans = new Cocunut($name, "./img/coconut.jfif" . $imgCount . ".jpg");

                    $imgCount = addImgCount($imgCount);

                    array_push($animalArray, $coconutInstans);
                }

                foreach ($collectedAnimalList as $animal) {
                    $animal->echoImg();
                    echo $animal->name . " " . $animal->getSound() . '<br><br>';
                }

            } else {
                echo "POST NOT SET";
            }
        } else {
            echo "REQUEST METHOD NOT SET!";
        }

    ?>
    
</body>
</html>

?>