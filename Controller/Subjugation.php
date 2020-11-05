
    <form method='post' action='exercise6.php'>
      <input Name='ValueEntered'>
      <button type ='Submit'>Click to submit your soul me. Don't worry, it's only for half an hour.</button>
    </form>
<?php 
    if(isset($_POST['sumition'])){

        echo "
         <script>
            alert('Thanks {$_POST['ValueEntered']} for submiiting or something.');
        </script>
        ";
    }

?>