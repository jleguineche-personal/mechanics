<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="templates/styles.css">
</head>    

<body>

<?php

//Mechanical Engineering dropdown - 1
//Button
echo '<button onclick="listexp(this.id)" class="button" id="b1">';
echo '<span class="logo" id="l1">+ </span>';
echo '<span>Mechanical Engineering</span>';
echo '</button>';

//Content 
echo '<div class="content" id="c1">'; 

    //Core - 2
    //Button
    echo '<button onclick="listexp(this.id)" class="button" id="b2">';
    echo '<span class="logo" id="l2">+ </span>';
    echo '<span>Core Skills</span>';
    echo '</button>';

    //Content
    echo '<div class="content" id="c2">'; 
    echo '<a href="../content/python.php" class="menulink">Python</a><br>';
    echo '<a href="../content/basic-physics.php" class="menulink">Basic Physics</a><br>';
    echo '<a href="../content/linear-algebra.php" class="menulink">Linear Algebra</a><br>';
    echo '<a href="../content/calculus.php" class="menulink">Calculus</a><br>';
    echo '<a href="../content/CAD.php" class="menulink">CAD</a><br>';
    echo '</div>';

    //Thermo Fluids - 3
    //Button
    echo '<button onclick="listexp(this.id)" class="button" id="b3">';
    echo '<span class="logo" id="l3">+ </span>';
    echo '<span>Thermo-Fluids</span>';
    echo '</button>';

    //Content
    echo '<div class="content" id="c3">'; 
    echo '<a href="../content/fluid-dynamics.php" class="menulink">Fluid Dynamics</a><br>';
    echo '<a href="../content/thermodynamics.php" class="menulink">Thermodynamics</a><br>';
    echo '<a href="../content/heat-transfer.php" class="menulink">Heat Transfer</a><br>';
    echo '<a href="../content/CFD.php" class="menulink">CFD</a><br>';
    echo '</div>';

    //Structures and Mechanisms - 4
    //Button
    echo '<button onclick="listexp(this.id)" class="button" id="b4">';
    echo '<span class="logo" id="l4">+ </span>';
    echo '<span>Structures & Mechanisms</span>';
    echo '</button>';

    //Content
    echo '<div class="content" id="c4">'; 
    echo '<a href="../content/mechanics-of-materials.php" class="menulink">Mechanics of Materials</a><br>';
    echo '<a href="../content/material-science.php" class="menulink">Material Science</a><br>';
    echo '<a href="../content/machine-design.php" class="menulink">Machine Design</a><br>';
    echo '<a href="../content/FEA.php" class="menulink">FEA</a><br>';
    echo '</div>';

    //Controls - 5
    //Button
    echo '<button onclick="listexp(this.id)" class="button" id="b5">';
    echo '<span class="logo" id="l5">+ </span>';
    echo '<span>Controls</span>';
    echo '</button>';

    //Content
    echo '<div class="content" id="c5">'; 
    echo '<a href="../content/mechatronics.php" class="menulink">Mechatronics</a><br>';
    echo '<a href="../content/automation.php" class="menulink">Automation</a><br>';
    echo '</div>';

    //Top Level Skills - 6
    //Button
    echo '<button onclick="listexp(this.id)" class="button" id="b6">';
    echo '<span class="logo" id="l6">+ </span>';
    echo '<span>Combining Skills</span>';
    echo '</button>';

    //Content
    echo '<div class="content" id="c6">'; 
    echo '<a href="../content/dynamic-systems.php" class="menulink">Dynamic Systems</a><br>';
    echo '<a href="../content/ethics.php" class="menulink">Ethics</a><br>';
    echo '<a href="../content/putting-it-together.php" class="menulink">Putting It Together</a><br>';
    echo '<a href="../content/master-project.php" class="menulink">Master Project</a><br>';
    echo '</div>';

echo '</div>';

//Natural Science dropdown - 7 
echo '<button onclick="listexp(this.id)" class="button" id="b7">';
echo '<span class="logo" id="l7">+ </span>';
echo '<span>Natural Science</span>';
echo '</button>';

echo '<div class ="content" id="c7">'; 
echo '<p>Coming Soon!</p>';
echo '</div>';

//Computer Science dropdown - 8
echo '<button onclick="listexp(this.id)" class="button" id="b8">';
echo '<span class="logo" id="l8">+ </span>';
echo '<span>Computer Science</span>';
echo '</button>';

echo '<div class="content" id="c8">'; 
echo '<p>Coming Soon!</p>';
echo '</div>';

echo "<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>";
echo "<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>";

?>

<script>

//Initialize state array
var drops = document.getElementsByClassName('button');
let states = new Map();
for (let i = 0; i < drops.length; i++){
    states.set(drops.item(i).id,0);
}

    //Expandable list function
    function listexp(button_id) {

    //Define relevent button, content, and logo
    var button = document.getElementById(button_id);
    var content = button.nextSibling;
    var logo = button.childNodes[0];
    var child = content.childNodes;
    
    //Open Contents
    if (states.get(button_id)==0){
    content.style.visibility = "visible";
    content.style.height = "fit-content";
    logo.innerHTML = "- ";
    states.set(button_id,1);
    }

    //Close Contents 
    else if (states.get(button_id)==1){
    content.style.visibility = "hidden";
    content.style.height = "0px";
    logo.innerHTML = "+ ";
    states.set(button_id,0);

    //Close children if expanded 
    for (let i = 0; i < child.length; i++){
        if (child.item(i).className == "content"){
            child.item(i).style.visibility = "hidden";
            child.item(i).style.height = "0px";
        }
        else if (child.item(i).className == "button"){
            child.item(i).childNodes[0].innerHTML ="+ "
            states.set(child.item(i).id,0)    
        }
    }
    }
}

</script>  

</body>
</html>
