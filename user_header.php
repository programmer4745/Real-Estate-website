<!-- header section starts  -->

<header class="header">

   <nav class="navbar nav-1">
      <section class="flex">
         <a href="home.php" class="logo">𝙱𝚛𝚒𝚐𝚑𝚝 𝚋𝚛𝚘𝚔𝚎𝚛𝚜
</a>

         <ul>
            <li><a href="post_property.php">𝙿𝚘𝚜𝚝 𝙿𝚛𝚘𝚙𝚎𝚛𝚝𝚢<i class="fas fa-paper-plane"></i></a></li>
         </ul>
      </section>
   </nav>

   <nav class="navbar nav-2">
      <section class="flex">
         <div id="menu-btn" class="fas fa-bars"></div>

         <div class="menu">
            <ul>
               <li><a href="#">𝙼𝚢 𝙻𝚒𝚜𝚝𝚒𝚗𝚐𝚜<i class="fas fa-angle-down"></i></a>
                  <ul>
                     <li><a href="dashboard.php">Dashboard</a></li>
                     <li><a href="post_property.php">Post Property</a></li>
                     <li><a href="my_listings.php">My Listings</a></li>
                  </ul>
               </li>
               <li><a href="#">𝙾𝚙𝚝𝚒𝚘𝚗𝚜 <i class="fas fa-angle-down"></i></a>
                  <ul>
                     <li><a href="search.php">Filter Search</a></li>
                     <li><a href="listings.php">All Listings</a></li>
                  </ul>
               </li>
               <li><a href="#">𝙷𝚎𝚕𝚙 <i class="fas fa-angle-down"></i></a>
                  <ul>
                     <li><a href="about.php">About Us</a></i></li>
                     <li><a href="contact.php">Contact Us</a></i></li>
                     <li><a href="contact.php#faq">FAQ</a></i></li>
                  </ul>
               </li>
            </ul>
         </div>

         <ul>
            <li><a href="saved.php">𝚂𝚊𝚟𝚎𝚍 <i class="far fa-heart"></i></a></li>
            <li><a href="#">𝙰𝚌𝚌𝚘𝚞𝚗𝚝  <i class="fas fa-angle-down"></i></a>
               <ul>
                  <li><a href="login.php">login now</a></li>
                  <li><a href="register.php">register new</a></li>
                  <?php if($user_id != ''){ ?>
                  <li><a href="update.php">update profile</a></li>
                  <li><a href="components/user_logout.php" onclick="return confirm('logout from this website?');">logout</a>
                  <?php } ?></li>
               </ul>
            </li>
         </ul>
      </section>
   </nav>

</header>

<!-- header section ends -->