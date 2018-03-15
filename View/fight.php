<?php include ('header.php'); 
      include ('../controller/classPersonnage.php');
      include ('../controller/classMage.php');
      include ('../controller/classGuerrier.php');
      include ('../controller/classDwarf.php');
      include ('../controller/classElf.php');

      ?>
    <div class="section-image"></div>
    <section class="section-fight">
        <h2>Déroulé du combat</h2>
        <hr/>
        <?php  
            if(!isset($_POST['submit']) )
            {
                //be sure to validate and clean your variables
                $name = $_POST['name'];
                $type = $_POST['type'];

                switch($type){
                    case 'magician' : $perso1 = new Mage($name);
                        var_dump($perso1) ;break;
                    case 'elf' : $perso1 = new Elfe($name);
                    var_dump($perso1);break;
                    case 'dwarf' : $perso1 = new Dwarf($name);
                        var_dump($perso1);break;
                    case 'war' : $perso1 = new Guerrier($name);
                    var_dump($perso1);break;
                }
            }
        ?>
        <h2>Fin du combat</h2>
        <hr/>
        <div class="result-fight">
            <p>Victoire !</p>
            <p>L'ennemi est vaincu.</p>
        </div>
        <div class="section-fight--text">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum modi, dolor quidem doloribus unde deleniti et ullam, molestias nulla optio repellat quo sapiente. Temporibus doloremque soluta molestiae officia aperiam voluptatum!</p>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nihil repellat accusamus odit magni perferendis esse, itaque labore rerum et dolore cumque quod, sunt, molestiae doloremque eveniet cupiditate beatae nostrum voluptates?</p>
        </div>
    </section>
<?php include ('footer.php'); ?>
