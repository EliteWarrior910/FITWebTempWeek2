<!-- Demo 5 JavaScript I -->

<!-- Question 1 -->
  <div class='student-response'>
    <h1>Question #1:</h1>
    <h4>Create a paragraph tag and write your favorite video game titles into it using a script.</h4>
    <!-- Place Answer Here -->
    <p id="FavouriteGames"></p>
    <script>
    var BestGame = 'Overlord I', EvenBesterGame = 'Overlord II';
    document.getElementById("FavouriteGames").innerHTML = BestGame + " is by far the best game ever. Except it's bested by " + EvenBesterGame
    </script>
  

    <!-- Place Answer Here -->
  </div>
<!-- Question 1 -->

<!-- Question 2 -->
  <div class='student-response'>
    <h1>Question #2:</h1>
    <h4>Create two string variables for your first and last name, then write them into an h3 tag.</h4>
    <!-- Place Answer Here -->  
    <h3 id="FullName"></h3>
     <script>
     var FirstName = 'Ethan', LastName ='Lee, The Revenant King';
      document.getElementById("FullName").innerHTML = FirstName + " " + LastName;
      </script>
    <!-- Place Answer Here -->
  </div>
<!-- Question 2 -->

<!-- Question 3 -->
  <div class='student-response'>
    <h1>Question #3:</h1>
    <h4>Write your favorite quote in a string variable, then print it to a p tag and its length to another p tag.</h4>
    <!-- Place Answer Here -->
    <p id="Whats"></p>
    <script>
    var Quote = "Whatever"
    document.getElementById("Whats").innerHTML = Quote + Quote.length;
    </script>
      

    <!-- Place Answer Here -->
  </div>
<!-- Question 3 -->

<!-- Question 4 -->
  <div class='student-response'>
    <h1>Question #4:</h1>
    <h4>Create an array of a few of your favorite foods, then display your absolute favorite from the list with a description.</h4>
    <!-- Place Answer Here -->
    <strong id="FavouriteFoodDisplay"></strong>
    <script>
    var FavouriteFoods =["Pancakes", "Anything Hibatchi", "Salmon", "Chicken Wraps", "Mushrooms"]
    document.getElementById("FavouriteFoodDisplay").innerHTML = "My absolute Favourite Food is... Uhhh... Probably " + FavouriteFoods[1] + " Mmmmmmm... I wants Hibatchi now. What have you done to me!?";
    </script>
      

    <!-- Place Answer Here -->
  </div>
<!-- Question 4 -->

<!-- Question 5 -->
  <div class='student-response'>
    <h1>Question #5:</h1>
    <h4>Create an array, then add an element value onto the end and display it without using indexes.</h4>
    <!-- Place Answer Here -->
    <p id="ArrayMeth"></p>
    <script>
    var InventoryItems = ["Rpg", "Nuke", "Black Hole Cannon"];
    InventoryItems.push("The Eye of Sauron");
    document.getElementById("ArrayMeth").innerHTML = InventoryItems[InventoryItems.length - 1];
    </script>
      

    <!-- Place Answer Here -->
  </div>
<!-- Question 5 -->

<!-- Question 6 -->
  <div class='student-response'>
    <h1>Question #6:</h1>
    <h4>Create a date object for your birthday or some date special to you and write it to the document.</h4>
    <!-- Place Answer Here -->
    <script>
    var BirthDay = new Date(2001, 11, 11);
    document.write("My birthday is " + BirthDay.getMonth() + "-" + BirthDay.getDate() + "-" + BirthDay.getFullYear());
    </script>
      

    <!-- Place Answer Here -->
  </div>
<!-- Question 6 -->

<!-- Question 7 -->
  <div class='student-response'>
    <h1>Question #7:</h1>
    <h4>Get the current time and print it to a p tag span with description in the p tag.</h4>
    <!-- Place Answer Here -->
    <p>The Current Time is: <span id="TimeDisplay"></span></p>
    <script>
    var Time = new Date()
    document.getElementById("TimeDisplay").innerHTML = Time.getHours + ":" + Time.getMinutes();
    </script>  

    <!-- Place Answer Here -->
  </div>
<!-- Question 7 -->

<!-- Question 8 -->
  <div class='student-response'>
    <h1>Question #8:</h1>
    <h4>Create a p tag that displays :| normally, and displays :D when waved over (or some other small art) using JS.</h4>
    <!-- Place Answer Here -->
    <p onMouseOver="innerHTML='   ;)   Hey there big fella.' " onMouseOut="innerHTML='   :(   I don\'t like Rejection... *Sad Sniff*   '"> :| </p>
     

    <!-- Place Answer Here -->
  </div>
<!-- Question 8 -->

<!-- Question 9 -->
  <div class='student-response'>
    <h1>Question #9:</h1>
    <h4>Create a function that accepts a first name and last name, concatenates the two with a space between them, and returns them. Use this function to print your name to a p tag.</h4>
    <!-- Place Answer Here -->
    <p id="Funk"></p>
    <script>
    function getFullName(First, Last)
    {
      return First + " " + Last;
    }
    document.getElementById("Funk").innerHTML = getFullName("Ethan,", "The Revenant King")
    </script>
      

    <!-- Place Answer Here -->
  </div>
<!-- Question 9 -->

<!-- Question 10 -->
  <div class='student-response'>
    <h1>Question #10:</h1>
    <h4>Create a button that calls a function that accepts the value from an input tag as a parameter and prints to a p tag a string of that value with 
      " -One of our happy customers" appended onto the end.</h4>
    <!-- Place Answer Here -->
      <label for="HappyCustIn">Quote Input:</label>
      <input id="HappyCustIn">
      <p id="HappYCustDis"></p>
      <button id = "CustQuoteBut" onClick="makeQuote( document.getElementById('HappyCustIn').value )">Save Quote</button>

      <script>
      function makeQuote(input)
      {
        document.getElementById("HappYCustDis").innerHTML = "\"" + input + "\" -One of our man*THEY'RE CONSUMEIN*y many happy*RAHHHHH* custom*SAVE M*ers.";
      }
      </script>
      

    <!-- Place Answer Here -->
  </div>
<!-- Question 10 -->

