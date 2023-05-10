<?php
    //week3
    
    if(isset($_POST["id"]) ){

        $name=$_POST["name"];
        $id=$_POST["id"];
        $grade=$_POST["grade"];
        $phone=$_POST["phone"];
        $email=$_POST["email"];
        $date=$_POST["date"];
        $EmergencyContact=$_POST["EmergencyContact"];
        $EmergencyPhone=$_POST["EmergencyPhone"];
        $note=$_POST["note"];


        echo "name: ".$name."<br/>";
        
        echo "<br/>";

        echo "stuID: ".$id."<br/>";

        echo "<br/>grade: ";
        if($grade=="112"){
            echo "112 <br/>";
        }
        if($grade=="113"){
        echo "113 <br/>";
        }
        if($grade=="114"){
        echo "114 <br/>";
        }
        if($grade=="115"){
            echo "115 <br/>";
        }

        echo "<br/>phone: ".$phone."<br/>";

        echo "<br/>email: ".$email."<br/>";

        echo "<br/>birthday: ".$date."<br/>";

        echo "<br/>Emergency Contact: ".$EmergencyContact."<br/>";

        echo "<br/>Emergency Phone: ".$EmergencyPhone."<br/>";

        echo "<br/>note".$note;
        echo "<br/>";
        if(isset($note)){
            echo nl2br(strip_tags("$note"));
            
        }else{
            echo "No Note !";
        }

    }else{
        echo "Error";
    }

?>
