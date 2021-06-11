<?php
require 'phps/auth.php';
  $sql="select * from auth";
  $queryRes = mysqli_query($link, $sql);
?>
<!DOCTYPE html>
<html lang="en">

 <!-- where mail='$loginMail' AND pwd='$loginPassword' -->

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge">
  <meta http-equiv="refresh" content="" />
  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0">
  <title>Nothing</title>
  <link rel="stylesheet" href="css/all.css" type="text/css" media="all" />
  <link rel="stylesheet" href="css/fontawesome.css" type="text/css" media="all" />
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
  <nav class="fixed-top-bar">
    <span class="logo">Lorem</span>
    <div class="nav-action">
      <i class="fa fa-wallet"></i>
      <i class="fa fa-power-off red"></i>
    </div>
  </nav>
  <div id="overlay" class=""></div>
  
  
   <div class="drop bg-red full-h">
    <div class="drop-header">
      <span>Wallet</span>
      <span><i class="fa fa-plus-circle"></i></span>
    </div>
  </div> 
  

   <div class="inpage-alert">
    <!-- <table border="0" width="200px">
    <tr>
      <th>Withdraw</th>
      <th>
        <i class="fa fa-plus-circle"></i>
      </th>
    </tr>
    <tr>
      <td>Added :</td>
      <td>₹ 30</td>
    </tr>
    <tr>
      <td>Won: </td>
      <td>₹ 32</td>
    </tr>
    </table> -->
    <?php
    $id = mysqli_fetch_assoc($queryRes)['fname'];
    print_r($id);
    ?>
  </div>
 

  <div class="app">
    <div class="fixed-bottom-bar">
      
      <span class="active-tab bottom-tab-container">
        <i id="home" class="bottom-bar-tab-name fa fa-home">
        </i>
        <span class="hint">Home</span>
      </span>
      <span class="bottom-tab-container">
        <i id="chats" class="bottom-bar-tab-name fa fa-university"></i>
        <span class="hint">Withdraw</span>
      </span>
      <span class="bottom-tab-container">
        <i id="chats" class="bottom-bar-tab-name fa fa-book-open"></i>
        <span class="hint">Passbook</span>
      </span>
      <span class="bottom-tab-container">
        <i id="chats" class="bottom-bar-tab-name fa fa-bell"></i>
        <span class="hint">Notification</span>
      </span>
      <span class="bottom-tab-container">
        <i id="chats" class="bottom-bar-tab-name fa fa-user"></i>
        <span class="hint">Profile</span>
      </span>
    </div>
    
    
    
    <!-- <form>
      <a href="bet.html">Bet</a>
      <br />
      <a href="gameSpace.html">Game</a>
      <br />
      <a href="joiningGame.html">joining Page</a>
    </form> -->
    
    <?php
      echo "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aut facilis quidem consequuntur corporis qui illo dolore reiciendis? Perferendis cum laudantium magnam maxime aliquid obcaecati ratione nam animi autem rem ipsum, tempora impedit facilis explicabo tempore id quod numquam, dolorum consequuntur. Quas maxime sequi, veniam. Tempore ab, repellendus voluptates maiores quam eveniet provident aperiam qui tempora error veritatis perspiciatis corrupti distinctio dolores? Rerum, eligendi, saepe? Magnam, dolores quod alias omnis, quae earum, excepturi rerum nesciunt illo assumenda libero voluptates aliquid sapiente magni animi? Dignissimos earum doloremque doloribus fugit, sed optio nulla placeat cupiditate, illo ipsa, tempore labore vel numquam. A veritatis ipsum ducimus voluptatum voluptate quam voluptas, cum sed debitis non, sunt! Odio incidunt corporis quam numquam voluptas, beatae est ullam sed, ratione hic aspernatur. Temporibus dignissimos a possimus error aspernatur eaque quos quis quod est hic veniam facere, labore numquam, rem corporis porro maxime illum provident deleniti, id nesciunt quaerat optio enim commodi. Vel asperiores ut, dicta saepe, aut nam voluptatibus mollitia. Numquam nesciunt dolorum natus iusto unde laudantium. Et numquam commodi corporis cum beatae. Ducimus, voluptates deserunt itaque, totam ad consectetur quas impedit, reprehenderit, optio accusamus officiis ex. Eum totam excepturi deserunt quis laborum molestiae aut maxime nihil iusto? Itaque facilis, fuga consequatur animi! Eaque reiciendis pariatur qui consequuntur officiis quod incidunt, aut magni quis maiores ea rerum debitis expedita, odit ullam provident optio doloribus fugit voluptates, illo numquam perferendis alias sint. Assumenda dolor, maxime, sed quasi dicta explicabo accusamus vero esse quae nostrum at quisquam sint omnis pariatur animi natus quos, doloribus harum beatae odio earum rem perferendis. Illum minima officia autem, voluptate voluptatum aliquid, itaque et sit quaerat maiores aspernatur unde quod doloremque sapiente esse dicta consequuntur soluta earum deserunt quae deleniti facilis, dignissimos in vitae error? Perspiciatis quae ut dolorum fugit modi ipsa repellat delectus excepturi possimus voluptas rerum voluptatem, doloremque consequuntur aspernatur exercitationem totam quos culpa sunt earum pariatur nostrum officiis autem repudiandae ullam. Nostrum sunt a commodi blanditiis exercitationem, sint esse adipisci vel odio maiores soluta placeat ratione numquam dolore facere veniam consequatur delectus minima nemo quasi dolorum voluptatum, culpa, aut! Sed, quam, odit? Qui quam voluptate porro a officia, explicabo laborum facilis! Facere fugit laborum amet, repellendus natus, doloribus porro vero molestias soluta in ab recusandae harum laudantium, id alias iste. Laborum autem quidem, atque, cumque incidunt harum est placeat quasi molestias voluptatum eum consequatur! Odit omnis sit commodi totam vitae suscipit qui cum facere natus iure doloremque cumque porro modi nemo quaerat aspernatur dolorem ipsum iste fugiat ducimus asperiores reiciendis architecto, enim dolores. Dolor quae fuga in accusamus qui recusandae minima distinctio illum, nemo, accusantium quis quaerat voluptates ratione. Hic dolorum eveniet, obcaecati animi. Commodi fugiat modi consectetur accusamus nulla rem amet distinctio assumenda alias porro corrupti ratione, deleniti magni quia repellendus quasi eligendi, enim nam, dolorum autem officia placeat exercitationem iste eveniet. Qui, minus? Eos, sit asperiores perferendis aliquam quae, esse delectus impedit vel nesciunt nulla, deserunt dicta itaque tenetur optio. Laboriosam, maxime magnam perferendis architecto suscipit et facere, enim optioLorem ipsum, dolor sit amet consectetur adipisicing elit. Aut facilis quidem consequuntur corporis qui illo dolore reiciendis? Perferendis cum laudantium magnam maxime aliquid obcaecati ratione nam animi autem rem ipsum, tempora impedit facilis explicabo tempore id quod numquam, dolorum consequuntur. Quas maxime sequi, veniam. Tempore ab, repellendus voluptates maiores quam eveniet provident aperiam qui tempora error veritatis perspiciatis corrupti distinctio dolores? Rerum, eligendi, saepe? Magnam, dolores quod alias omnis, quae earum, excepturi rerum nesciunt illo assumenda libero voluptates aliquid sapiente magni animi? Dignissimos earum doloremque doloribus fugit, sed optio nulla placeat cupiditate, illo ipsa, tempore labore vel numquam. A veritatis ipsum ducimus voluptatum voluptate quam voluptas, cum sed debitis non, sunt! Odio incidunt corporis quam numquam voluptas, beatae est ullam sed, ratione hic aspernatur. Temporibus dignissimos a possimus error aspernatur eaque quos quis quod est hic veniam facere, labore numquam, rem corporis porro maxime illum provident deleniti, id nesciunt quaerat optio enim commodi. Vel asperiores ut, dicta saepe, aut nam voluptatibus mollitia. Numquam nesciunt dolorum natus iusto unde laudantium. Et numquam commodi corporis cum beatae. Ducimus, voluptates deserunt itaque, totam ad consectetur quas impedit, reprehenderit, optio accusamus officiis ex. Eum totam excepturi deserunt quis laborum molestiae aut maxime nihil iusto? Itaque facilis, fuga consequatur animi! Eaque reiciendis pariatur qui consequuntur officiis quod incidunt, aut magni quis maiores ea rerum debitis expedita, odit ullam provident optio doloribus fugit voluptates, illo numquam perferendis alias sint. Assumenda dolor, maxime, sed quasi dicta explicabo accusamus vero esse quae nostrum at quisquam sint omnis pariatur animi natus quos, doloribus harum beatae odio earum rem perferendis. Illum minima officia autem, voluptate voluptatum aliquid, itaque et sit quaerat maiores aspernatur unde quod doloremque sapiente esse dicta consequuntur soluta earum deserunt quae deleniti facilis, dignissimos in vitae error? Perspiciatis quae ut dolorum fugit modi ipsa repellat delectus excepturi possimus voluptas rerum voluptatem, doloremque consequuntur aspernatur exercitationem totam quos culpa sunt earum pariatur nostrum officiis autem repudiandae ullam. Nostrum sunt a commodi blanditiis exercitationem, sint esse adipisci vel odio maiores soluta placeat ratione numquam dolore facere veniam consequatur delectus minima nemo quasi dolorum voluptatum, culpa, aut! Sed, quam, odit? Qui quam voluptate porro a officia, explicabo laborum facilis! Facere fugit laborum amet, repellendus natus, doloribus porro vero molestias soluta in ab recusandae harum laudantium, id alias iste. Laborum autem quidem, atque, cumque incidunt harum est placeat quasi molestias voluptatum eum consequatur! Odit omnis sit commodi totam vitae suscipit qui cum facere natus iure doloremque cumque porro modi nemo quaerat aspernatur dolorem ipsum iste fugiat ducimus asperiores reiciendis architecto, enim dolores. Dolor quae fuga in accusamus qui recusandae minima distinctio illum, nemo, accusantium quis quaerat voluptates ratione. Hic dolorum eveniet, obcaecati animi. Commodi fugiat modi consectetur accusamus nulla rem amet distinctio assumenda alias porro corrupti ratione, deleniti magni quia repellendus quasi eligendi, enim nam, dolorum autem officia placeat exercitationem iste eveniet. Qui, minus? Eos, sit asperiores perferendis aliquam quae, esse delectus impedit vel nesciunt nulla, deserunt dicta itaque tenetur optio. Laboriosam, maxime magnam perferendis architecto suscipit et facere, enim optio.";
    ?>
    
  </div>
  <script src="js/jquery.js"></script>
  <script src="js/app.js"></script>
  <script>
  </script>
</body>

</html>