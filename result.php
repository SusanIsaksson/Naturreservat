<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Animals</title>
</head>
<body>

    <?php   
    
        echo $_POST["monkey"] . $_POST["giraffe"] . $_POST["tiger"] . $_POST["coconut"];
        
        abstract class Animal {
            public function onClickCode() {
                /* $text = 'alert("';
                $text .= $this->name;
                $text .= ": ";
                $text .= $this->getSound();
                $text .='");';
                return $text; */
            }

            abstract protected function getSound();

            public $name;
            public $img;

            /* public function echoImg() {
                echo "img style='max-width:25em;' src='".$this->imgUrl."' onclick='".$this->onClickCode()."'/><br>";
            } */
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
    


            
        

    ?>
    
</body>
</html>

?>