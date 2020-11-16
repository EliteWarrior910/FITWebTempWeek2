<!-- Exercise JavaScript II -->

 
  <div class='student-response'>
    <h1>Question #1:</h1>
    <h4>Create a dice class that holds an int attribute for the number of sides it has, and a roll function that rolls the dice and returns the outcome. 
      Add the elements and script needed so that a user can enter a number of sides and a number of times to roll; display on a button click.</h4>
     
    <input id="InputOne"><br>
    <input id="InputTwo"><br>
    <button id="RollButton" onclick="RollDie( document.getElementById('InputOne').value, document.getElementById('InputTwo').value )">Roll</button>
    <p id="Outcome"></p>
    <p id="Hide"></p>
    <script>
    class Dice{
      constructor(Faces, Numb){
        this.faces = Faces;
        this.numb = Numb;
      }

      JavaRoll(){
        return Math.floor(Math.random() * this.faces) + 1;
      }
      JavaCheat2(){
        return Math.floor(Math.random() * this.faces/2) + 1;
      }
      JavaCheat3(){
        return Math.floor(Math.random() * this.faces/2) + (this.faces + 2)/2.floor();
      }
    }
    var Sides = 0, Rolls = 0, Display = "";
    var Total = 0;
    var Code1 = false, Code2 = false, Code3 = false, Cheater = false;


    function RollDie(Sides, Rolls){
      var Die = new Dice(Sides, Rolls);
      if (Sides == 1 & Rolls == -1){
        var Hidden = document.createElement("INPUT");
        Hidden.setAttribute("type", "hidden");
        document.body.appendChild(Hidden);
        document.getElementById("Hide").innerHTML = "<button id=\"Cheat\" onClick=\"Cheating( document.getElementById('InputTwo').value )\">Activate Code</button><input id=\'InputThree\'></input>";
      }
      
      Display += " you rolled ";

      if (Sides <= 0){
       document.getElementById("Outcome").innerHTML = "Invalid Number of Sides"
      }
      if (Rolls <= 0){
       document.getElementById("Outcome").innerHTML = "Invalid Number of Rolls"
      }
      for(index=0; index < Rolls; index++) {
        if (Cheater == false){
          var RollNumber = Die.JavaRoll();
          Display += " " + RollNumber;
          Total += RollNumber;
        }
        else if (Cheater == true && Code1 == true){
          document.getElementById("Outcome").innerHTML = "You rolled a " + Sides;
        }
      } 
      Display += "<br> Total: " + Total + "<br>"
      document.getElementById("Outcome").innerHTML = " You rocked and" + Display;
    }
  </script>
  </div> 
  // var Code1 = false, Code2 = false, Code3 = false;
  // var Cheater = false, Display = false;

  if (input == ""){
    //     Display = true;
    //   }
    // }
    // if (Display == true){
    //     <button id="Cheat" onClick="Cheating( document.getElementById('InputTwo').value )">Activate Code</button>
    //     <input id="InputTwo"></input>

  //   if (Cheater == false){
    //   var RollNumber1 = Math.floor(Math.random() * Sides) + 1;
    //   document.getElementById("Outcome").innerHTML = "You rolled a " + RollNumber1;
    //   }
    //   else if (Cheater == true && Code1 == true){
    //     document.getElementById("Outcome").innerHTML = "You rolled a " + Sides;
    //   }
    //   else if (Cheater == true && Code2 == true){
    //     var RollNumber3 = Math.floor(Math.random() * Sides/2) + 1;
    //     document.getElementById("Outcome").innerHTML = "You rolled a " + RollNumber3;
    //   }
    //   else if (Cheater == true && Code3 == true){
    //     var RollNumber4 = Math.floor(Math.random() * Sides/2) + (Sides + 2)/2;  
    //     document.getElementById("Outcome").innerHTML = "You rolled a " + RollNumber4;
    //   }
    // }

    // function Cheating(input){
    //   if input == "wwssadadBAstart max_Rolls"{
    //     Cheater = true;
    //     Code1 = true;
    //   }
    //   if input == "wwssadadBAstart low_Rolls"{
    //     Cheater = true;
    //     Code2 = true;
    //   }
    //   if input == "wwssadadBAstart high_Rolls"{
    //     Cheater = true;
    //     Code3 = true;
    //   }
    // }



<!-- Question F1 -->
  <div class='student-response'>
    <h1>Question #F1:</h1>
    <h4>Copy Question 1, but add a 'cheaty' attribute that allows the user to also input how cheaty they wish their dice to be. 
      (be creative and useful, it'll earn you more points! :)</h4>
    <!-- Place Answer Here -->
    <!-- <button id="Button" onclick="SideDesider( document.getElementById('InputOne').value )">Number of Sides</button>
    <input id="InputOne"></input>
    <button id="RollButton" onclick="RollDie( document.getElementById('InputOne').value )">Roll</button>
    <p id="Outcome"></p> -->
    <scri>
    // var Sides = 0;
    // var Cheater = false, Display = false;
    // function SideDesider(input){
    //   Sides = input
    //   if (Sides <= 1){
    //     document.getElementById("Outcome").innerHTML = "Invalid Number of Sides";
    //   }
    //   if (input == ""){
    //     Display = true;
    //   }
    // }
    // if (Display == true){
    //     <button id="Cheat" onClick="Cheating( document.getElementById('InputTwo').value )">Activate Code</button>
    //     <input id="InputTwo"></input>
    //   }
    // var Code1 = false, Code2 = false, Code3 = false;
    // function RollDie(){
    //   if (Cheater == false){
    //   var RollNumber1 = Math.floor(Math.random() * Sides) + 1;
    //   document.getElementById("Outcome").innerHTML = "You rolled a " + RollNumber1;
    //   }
    //   else if (Cheater == true && Code1 == true){
    //     document.getElementById("Outcome").innerHTML = "You rolled a " + Sides;
    //   }
    //   else if (Cheater == true && Code2 == true){
    //     var RollNumber3 = Math.floor(Math.random() * Sides/2) + 1;
    //     document.getElementById("Outcome").innerHTML = "You rolled a " + RollNumber3;
    //   }
    //   else if (Cheater == true && Code3 == true){
    //     var RollNumber4 = Math.floor(Math.random() * Sides/2) + (Sides + 2)/2;  
    //     document.getElementById("Outcome").innerHTML = "You rolled a " + RollNumber4;
    //   }
    // }

    // function Cheating(input){
    //   if input == "wwssadadBAstart max_Rolls"{
    //     Cheater = true;
    //     Code1 = true;
    //   }
    //   if input == "wwssadadBAstart low_Rolls"{
    //     Cheater = true;
    //     Code2 = true;
    //   }
    //   if input == "wwssadadBAstart high_Rolls"{
    //     Cheater = true;
    //     Code3 = true;
    //   }
    // }
  </script>
  </div>
<!-- Question F1 -->

<!-- Question F2 -->
  <div class='student-response'>
    <h1>Question #F2:</h1>
    <h4>Create the elements and script to accept a username and password. Add a 'register' button that accepts a new username and password and stores it along with some 
      pre-written and hardcoded usernames and passwords. Display 'Access Granted' or some other secret in a p tag if the username and password match, otherwise show an error.</h4>
    <!-- Place Answer Here -->

      

    <!-- Place Answer Here -->
  </div>
<!-- Question F2 -->


<!-- Question F3 -->
  <div class='student-response'>
    <h1>Question #F3:</h1>
    <h4>Create a monster class that has attributes like name, health, attack damage, and description as well as a function to attack and return a 
      damage amount, and another function to be sent a damage amount for the monster to take. Then create 2 monster objects and allow the user to 
      click a button next to the monster to attack it for 1d6 damage (1-6). Constantly display the monsters' hp's and when the button is clicked also 
      have that monster attack the user. display the users health as well (ex. starting at 100). </h4>
    <!-- Place Answer Here -->
      


    <!-- Place Answer Here -->
  </div>
<!-- Question F3 -->
