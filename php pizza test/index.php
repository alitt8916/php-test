
<?php 

    // $name = 'mahdi';
    // $name = 'mahdi';
    // $name = 'mahdi';
    // echo $name;

    // $name = 'ali';
    // echo $name;

    // define('Name' , 'jj');

    // echo Name;

// string

    // $fname = 'mahdi';
    // $lname = 'TalaAAATTTTiiii';

    // echo "hi ".$firstname.$lastname;
    // echo "hello $lastname";

    // echo strlen($lname);

    // echo strtolower($lname);

    // echo str_replace('m' , 'j' , $fname );


// num

    // $age = 25;

    // $rate = 4.3;


    // echo $rate;


    // echo $age*$rate;


    // $age++;

    // $age += 25;

    // echo $age;

    // echo floor($rate);
    // echo ceil($rate);


// boolean

    // $flag = False;

    // echo intval($flag);


// array

// indexed arraye

    // $pep1 = ['mahdi' , 'ali' , 'nader'];

    // $pep2 = array('atefe' , 'maryam');

    // echo $pep1[0];

    // $num = [1,2,3,5,22];

    // print_r($num);

    // $stuf = ['mahdi' , 8 , true];

    // print_r($stuf);

    // $stuf[0] = 'ali';

    // print_r($stuf);


    // $mix = array_merge($stuf , $num);


    // print_r($mix);

    // echo count($mix);


// key value pair



// $t1 = ['blue'=>'ss' , 'red'=>'pers' , 'yellow'=>'sep'];

// $t2 = array('orange'=>'foolad');


// echo $t1['blue'];

// multidimensial arraye


// $book = [
//     ['book'=>'boofkoor' ,'author'=> 'sadegh headayat'] ,
//     ['book'=>'kellile' , 'author'=>'aliitt'] ,
//     ['book'=>'soovashon' ,'author'=> 'simin'] ,
// ];


// echo $book[1]['book'];

// boolean

    // echo true;

    // echo intval(false);

// comparion oprator









// for



// for ($i=0; $i < 5; $i++) { 
//     echo 'alii';
//     echo '<br>';
// }



// $name = ['ali' , 'nader' , 'bahram' , 2 ];


// for ($i = 0;$i < 4;$i++) {
//     echo $name[$i].'<br>';
// }


// $i = 0;
// while ($i < count($name)) {
//     echo $name[$i]."<br>";
//     $i++;
// }

// foreach ($name as $item) { 
//     echo $item."<br>";
// }

// $name = [
//     ['name'=>'troy' , 'year'=>'2002' , 'rate'=>4.8],
//     ['name'=>'avenger' , 'year'=>'2012' , 'rate'=>8],
//     ['name'=>'rings' , 'year'=>'2022' , 'rate'=>9],
    
// ]



//  function sayhello ($name){

//     echo "hello".$name . "<br>";
//  }

// sayhello('mehdi');
// sayhello('ali');
// sayhello('nader');
// sayhello();

// function sum($a , $b){
//     $sum = $a + $b;
//     return ($sum);

// }



// sum(1,4);


// function myfunc(){
//     $name = 'mehdi';
//     echo "hello $name";
// }


// myfunc();







    include"config/db_connect.php";

    $sql = 'SELECT * FROM pizzas';

    $result = mysqli_query($conn , $sql);

    $pizzas = mysqli_fetch_all($result , MYSQLI_ASSOC);

    mysqli_free_result($result);

    mysqli_close($conn);

    

?>

<!DOCTYPE html>
<html lang="en">

    
 <?php include"templates/header.php";?>

 <h4 class="center grey-text">Pizzas!</h4>

 <div class="container">
    <div class="row">
        <?php foreach($pizzas as $pizza){?>

            <div class="col s6 md3">
                <div class="card z-depth-0">
                    <div class="card-content center">
                        <img src="image/svg2.jpg" alt="" class="pizza">
                        <h6><?php echo htmlspecialchars($pizza['title']);?></h6>
                        <ul>
                            <?php foreach(explode(',' , $pizza['ingredients']) as $ing ){ ?>

                                <li><?php echo htmlspecialchars($ing); ?></li>

                            <?php }?>   
                        </ul>
                    </div>
                    <div class="card-action right-align">
                        <a href="details.php?id=<?php echo $pizza['id']?>" class="brand-text">more info</a>
                    </div>
                </div>
            </div>

        <?php }?>

    </div>
 </div>








 <?php include"templates/footer.php";?>
   
    

</html>