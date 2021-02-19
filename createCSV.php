
<?php
    // generate the names
    // for ($i = 0; $i < 400; $i++){
    //     $employeelist[$i] = 
    //         $givenName[rand( 0 , count($givenName) -1)] . ' ' . $surName[rand( 0 , count($surName) -1)];
    // }

    function createGivenName() {
        $givenName = array('Lyndia','Johnathon', 'Anthony', 
            'Christeen', 'Georgianna', 'Erasmo', 'Raleigh', 'Nancie', 
            'Stephania', 'Tama', 'Margarett', 'Dion', 'Elida', 'Camellia', 
            'Augustine', 'Luz', 'Diego', 'Thomas', 'Elroy', 'Zonia', 'Buffy', 
            'Sharie', 'Leigha', 'Alejandro', 'Marquis', 'Joan', 'Blythe', 
            'Yuri', 'Michele', 'Rubi', 'Larisa', 'Lloyd', 'Tyisha', 'Samatha', 
            'Gaylene', 'Randy', 'Becki', 'Margherita', 'Bong', 'Jeanice', 
            'Margarete', 'Thommy', 'Lawanda','Rebecka', 'Arden','Clora', 
            'Laine','Qiana','Maribel','Tami');
        
        return $givenName[rand( 0 , count($givenName) -1)];
    }

    function createSurname() {
        $surName = array( 'Mischke', 'Serna', 'Pingree', 
            'Mcnaught','Pepper','Block', 'Mayoral', 'Fleishman','Roberie', 
            'Latson', 'Schildgen',  'Redner', 'Culton','Howe', 'Stoval', 
            'Mongold', 'Wrona','Geddes', 'Motsinger', 'Lanz','Fetzer', 
            'Schroeder','Drews','Coby','Lupo','Damron','Kazmierczak','Haslett',
            'Guillemette','Buresh','Center','Michaud','Mote','Menjivar','Wiers',
            'Paris','Grisby','Noren','Kucera','Catt','Badon', 'Pecora','Schewe',
            'Ramage','Grumbles','Antes','Byron','Volkman','Klemp','Pekar');

        return $surName[rand( 0 , count($surName) -1)];
    }

    function createRandomGender() {
        $gender = rand(0, 1);
        return $gender == 1 ? "M" : "F";
    }


    function randomDate($endDate) {
        // Convert to timetamps
        $min = strtotime('1990-01-01');
        if ($endDate == null) {
            $max = strtotime('2021-02-11');
        } else {
            $max = strtotime($endDate);
        }
        

        // Generate random number using above bounds
        $val = rand($min, $max);

        // Convert back to desired date format
        return date('Y-m-d', $val);
    }

    function createRandomLevel () {
        return rand(1, 9);
    }
    
    $myfile = fopen("newfile.csv", "w") or die("Unable to open file!");
    
    $content = "Surname,GivenName,BithDate,Gender,HireDate,InitialLevel\r\n";

    for($i=0; $i < 400; $i++){
        // Surname,GivenName,BithDate,Gender,HireDate,InitialLevel
        $content.= createSurname().','.createGivenName().','.randomDate('2002-02-01').','.createRandomGender().','.randomDate(null).','.createRandomLevel()."\r\n";
    }

    fwrite($myfile, $content);    
    fclose($myfile);
    
    session_start();
    $_SESSION['FILE_CREATED'] = true; 
    
    header("Location:index.php");
    // var_dump(createSurname());
    // var_dump(createRandomGender());
    // var_dump(randomLevel());
    // var_dump($employeelist);
   
?>
    




