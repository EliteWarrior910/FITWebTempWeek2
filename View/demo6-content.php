<!-- Demo 5 JavaScript II -->

<!-- Question 1 -->
  <div class='student-response'>
    <h1>Question #1:</h1>
    <h4>Create an if statement to validate the data in the input. If the entered value is empty or 
      over 10 characters display corresponding error messages in the p tag, otherwise display the entered value.</h4>

    <button id="buttonOne" onclick="functionOne( document.getElementById('InputOne').value )">Enter</button>
    <input id="InputOne">
    <p id="outcomeOne"></p>
    <script>
      function functionOne(input)
      {
        //Place Answer Here
        if (input =="")
        {
          document.getElementById("outcomeOne").innerHTML = "Input was empty"
        }
        else if(input.length > 15)
        {
          document.getElementById("outcomeOne").innerHTML = "AHHH! Too many letters!"
        }
        else
        {
          document.getElementById("outcomeOne").innerHTML = input
        }
          

        //Place Answer Here
      }
    </script>

  </div>
<!-- Question 1 -->

<!-- Question 2 -->
  <div class='student-response'>
    <h1>Question #2:</h1>
    <h4>Use the pre-built item list to create a switch that displays a description of the chosen item in the p tag on button click. 
      Display an error if anything else is entered</h4>

    <button id="buttonTwo" onclick="functionTwo( document.getElementById('InputTwo').value )">Enter</button>
    <input id="InputTwo">
    <ul>
      <li>1 - Frost Potion</li>
      <li>2 - Sword of Flame</li>
      <li>3 - Old Spell Book</li>
      <li>4 - Bag of Holding</li>
      <li>5 - Goblin's Hand</li>
    </ul>
    <p id="outcomeTwo"></p>
    <script>
      function functionTwo(input)
      {
        //Place Answer Here
        switch(input)
        {
          case "1":
            document.getElementById("outcomeTwo").innerHTML = "Oh, this crappy stuff? Yeah, it's supposed to help with the cold or something, but it just tastes bad. Like a bad wine really."
            break;
          case "2":
            document.getElementById("outcomeTwo").innerHTML = "Ah, that's a popular one. It's a generic steel sword, but surely that can't be all, right? This one can cast a wave of fire! Now that's a cool sword. Completely unexpected."
            break;
          case "3":
            document.getElementById("outcomeTwo").innerHTML = "That used to belong to an old mage who passed through here long ago. No one has been able to read it though. It's suppoed to be a grimore of some kind."
            break;
          case "4":
            document.getElementById("outcomeTwo").innerHTML = "Any travler's nessecity really. Its a bag that doesn't seem to have a bottom. You can put a whole bunch of loot in there."
            break;
          case "5":
            document.getElementById("outcomeTwo").innerHTML = "Looks gross right? Well them goblins like gross thing. Supposedly it's enchanted by a goblin shaman to summon the spirit of a goblin warlord. Never did figure out how to use it."
            break;
          default:   
            document.getElementById("outcomeTwo").innerHTML = "Not going with anything, eh? Ah well. Looks like, back to the shed with this stuff." 
          }
          

        //Place Answer Here
      }
    </script>

  </div>
<!-- Question 2 -->

<!-- Question 3 -->
  <div class='student-response'>
    <h1>Question #3:</h1>
    <h4>Create a for loop that will accept the user's input and check each element of the pre-built array. 
      If any match the user's input display "Match Found!" otherwise display "No Match"</h4>

    <button id="buttonThree" onclick="functionThree( document.getElementById('InputThree').value )">Enter</button>
    <input id="InputThree">
    
    <p id="outcomeThree"></p>
    <script>
      var gameFiles = ["zork", "super mario bros", "pac-man", "the legend of zelda", "tetris", "street fighter", "donkey kong"]
      function functionThree(input)
      {
        //Place Answer Here
        var IsFound = false;
        var LowerInput = input.toLowerCase;
        for(index = 0; index < gameFiles.length; index++)
        {
          if(gameFiles[index] == LowerInput)
          {
            IsFound = true;
          }
        }
        if(IsFound == true)
        {
          document.getElementById("outcomeThree").innerHTML = "Looks like we have that game in stock!";
        }
        else
        {
          document.getElementById("outcomeThree").innerHTML = "Hahahaaa Loser! That game doesn't exsist in our files!";
        }
      }
    </script>

  </div>
<!-- Question 3 -->

<!-- Question 4 -->
  <div class='student-response'>
    <h1>Question #4:</h1>
    <h4>Create a while loop that, on button click, increments a counter and displays each value while the total number of times looped is less than the number the user entered. 
        Display the total number of times the loop has run in the p tag on each button click as well.</h4>

    <button id="buttonFour" onclick="functionFour( document.getElementById('InputFour').value )">Enter</button>
    <input id="InputFour">
    <p id="outcomeFour">0</p>
    <script>

      //counter variable for you to use
      var Counter = 0;

      function functionFour(input)
      {
        //Place Answer Here
        while(Counter < input){
          ++Counter
          document.getElementById("outcomeFour").innerHTML = document.getElementById("outcomeFour").innerHTML + " " + Counter;
        }
        document.getElementById("outcomeFour").innerHTML = document.getElementById("outcomeFour").innerHTML + "<br>The loop has ran " + Counter + " times."
 
      }
    </script>

  </div>
<!-- Question 4 -->

<!-- Question 5 -->
  <div class='student-response'>
    <h1>Question #5:</h1>
    <h4>Create a loop that generates random numbers between 1 and 10 and displays each until their sum is equal to the entered number.</h4>

    <button id="buttonFive" onclick="functionFive( document.getElementById('InputFive').value )">Enter</button>
    <input id="InputFive">
    <p id="outcomeFive"></p>
    <script>
      function functionFive(input)
      {
        //Place Answer Here
        var intTotal = 0, intRandom, strDisplay = "";
        do{
          intRandom = Math.floor(Math.random() * 10) + 1;
          if(intTotal + intRandom <= input)
          {
            intTotal += intRandom;
            strDisplay += " " + intRandom
          }
        }while(intTotal < input)
        document.getElementById("outcomeFive").innerHTML = strDisplay;
      }
    </script>

  </div>
<!-- Question 5 -->

<!-- Question 6 -->
  <div class='student-response'>
    <h1>Question #6:</h1>
    <h4>Create the code so that when the user enters a string, it is split into an array and the 3rd element is returned. 
      If any error occurs, catch it and print an error message.</h4>

    <button id="buttonSix" onclick="functionSix( document.getElementById('InputSix').value )">Enter</button>
    <input id="InputSix">
    <p id="outcomeSix"></p>
    <script>
      function functionSix(input)
      {
        //Place Answer Here
        try{
          var SplitArray = input.split(",");
          if(SplitArray.length < 2) throw "The Entered string did not contain commas... Idiot.";
          if(SplitArray.length < 3 || SplitArray[2] == "") throw "No element exsists";
          document.getElementById("outcomeSix").innerHTML = SplitArray[2];
        }
      catch(Message){
        document.getElementById("outcomeSix").innerHTML = "You done screwed up foo. " + Message
      }
      }
    </script>

  </div>
<!-- Question 6 -->

<!-- Question 7 -->
  <div class='student-response'>
    <h1>Question #7:</h1>
    <h4>Create a starship object with name, speed, and weaponClass attributes. Accept a name as the input and display all attributes on button click.</h4>

    <button id="buttonSeven" onclick="functionSeven( document.getElementById('InputSeven').value )">Enter</button>
    <input id="InputSeven">
    <p id="outcomeSeven"></p>
    <script>
      function functionSeven(input)
      {
        //Place Answer Here
        var StarShip = {
          Name: input, speed: "500 Light Years per Second", WeaponClass: "Level 10"
        }
        document.getElementById("outcomeSeven").innerHTML = "Name: " + StarShip.Name + "<br/>" + "Speed: " + StarShip.Speed + "<br/>" + "Weapon Class: " + StarShip.WeaponClass
      }
    </script>

  </div>
<!-- Question 7 -->

<!-- Question 8 -->
  <div class='student-response'>
    <h1>Question #8:</h1>
    <h4>Create a blaster class that stores name, sound, and type. Then, on button click, create a few weapons and fire one based on what name the user entered.</h4>

    <button id="buttonEight" onclick="functionEight( document.getElementById('InputEight').value )">Enter</button>
    <input id="InputEight">
    <p id="outcomeEight"></p>
    <script>

      //Place Class Here (It's best to create classes outside the scope of functions to avoid creating a class with each click, rather than an object)
        class Blaster{
          constructor(Name, Sound, Type){
            this.name = Name;
            this.sound =Sound;
            this.type =Type;
          }
        
        Fire()
        {
          document.getElementById("outcomeEight").innerHTML = this.sound + " a beam of " + this.type + " hurls towards the enemy!";
        }
        Throw()
        {
          document.getElementById("outcomeEight").innerHTML = this.sound + " You chuck a  " + this.type + " at the enemy! Being an advanced alien race they are completly shocked by this. Their society crumbles before you as they debate on how to deal with you. They leave Earth and you just won the war.";
        }
        }
      //Place Class Here

      function functionEight(input) 
      {
        //Place Answer Here
        var WeaponOne = new Blaster("lazer rifle", "PEW!", "red light"), WeaponTwo = new Blaster("telsa cannon", "Zap", "thunder bolts"), WeaponThree = new Blaster("phase disrupter", "vvooopew", "inner dimesinal collapse"), WeaponFour = new Blaster("rock", "HHEYA!", "stone");
        switch(input.toLowerCase())
        {
          case WeaponOne.name:
            WeaponOne.Fire();
            break;
          case WeaponOne.name:
            WeaponTwo.Fire();
            break;
          case WeaponOne.name:
            WeaponThree.Fire();
            break;
          case WeaponFour.name:
            WeaponFour.Throw();
            break;
          default:
          document.getElementById("outcomeEight").innerHTML = "You didn't find a weapon and got killed. Loser. Couldn't even pick up a rock huh?";
        }
      }
    </script>

  </div>
<!-- Question 8 -->



