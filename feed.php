<!DOCTYPE html>
  <head>
    <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Feed</title>
    <link rel="stylesheet" href="style.css" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
  </head>
  <body>
    <div class="header">
        <div class="lheader">
         <img
           src="images/pic1.png"
          alt=""
        />
        <div class="headerinp">
            <span class="material-icons"> search </span>
           <input type="text" placeholder="Search... " />
        </div>
    </div>

       <div class="header__middle">
          <div class="header__option active">
          <a class="material-icons" href="feed.php"> <h3>HOME</h3> </a>
        </div>
        <div class="header__option">
          <a class="material-icons" href="users.php"> <h3>CHAT</h3> </a>
         </div>
         <div class="header__option">
          <a class="material-icons" href="postimage.php"> <h3>POST</h3> </a>
       </div>
       <div class="header__option">
          <a class="material-icons" href="minigames.php"> <h3>MINIGAMES</h3> </a>
       </div>
        <div class="header__option">
         <a class="material-icons" href="mid_logout.php"> <h3>LOGOUT</h3> </a>
            </div>
      </div>

      <div class="rheader">
        <div class="header__info">
          <img
            class="user__avatar"
            src="images/pfp.png"
            alt=""
          />
          <h3>[firstName] [lastName]</h3>
        </div>
      </div>
    </div>
  
      <div class="feed">
         <div class="messageSender">
         <div class="messageSender__top">
              <img
                class="user__avatar"
              src="images/pfp.png"
            alt=""
            />
           <form>
            <input class="messageSender__input" placeholder="What's on your mind?" type="text" />
         </form>
          </div>

          
        </div>
       
        <div class="post">
          <div class="post__top">
          <img
               class="user__avatar post__avatar"
                src="images/pfp.png"
             alt=""
            />
            <div class="post__topInfo">
          <h3>[firstName] [lastName]</h3>
              <p>[date] at [time]</p>
            </div>
          </div>

          <div class="post__bottom">
            <p>Message</p>
          </div>

          <div class="post__image">
            <img
                src="images/pic4.png"
                    alt=""
            />
          </div>

          <div class="post__options">
            <div class="post__option">
              <span class="material-icons"> star </span>
           <p>Like</p>
            </div>

            <div class="post__option">
                <span class="material-icons"> chat_bubble_outline </span>
                   <p>Comment</p>
             </div>
 
         <div class="post__option">
                <span class="material-icons"> near_me </span>
              <p>Share</p>
          </div>
            </div>
        </div>

        <div class="post">
          <div class="post__top">
               <img
             class="user__avatar post__avatar"
                src="images/pfp.png"
               alt=""
            />
            <div class="post__topInfo">
               <h3>[firstName] [lastName]</h3>
           <p>[date] at [time]</p>
             </div>
          </div>

          <div class="post__bottom">
            <p>Post Without Image</p>
          </div>

          <div class="post__options">
           <div class="post__option">
         <span class="material-icons"> star </span>
                <p>Like</p>
           </div>

        <div class="post__option">
             <span class="material-icons"> chat_bubble_outline </span>
              <p>Comment</p>
        </div>

          <div class="post__option">
              <span class="material-icons"> near_me </span>
             <p>Share</p>
               </div>
           </div>
        </div>
       
        <div class="post">
              <div class="post__top">
                <img
             class="user__avatar post__avatar"
            src="images/pfp.png"
           alt=""
              />
             <div class="post__topInfo">
               <h3>[firstName] [lastName]</h3>
         <p>[date] at [time]</p>
            </div>
          </div>

          <div class="post__bottom">
            <p>Message</p>
          </div>

          <div class="post__image">
             <img src="images/pic3.png" alt="" />
        </div> 
  
            <div class="post__options">
         <div class="post__option">
                <span class="material-icons"> star </span>
              <p>Like</p>
             </div>

            <div class="post__option">
               <span class="material-icons"> chat_bubble_outline </span>
               <p>Comment</p>
             </div>
              <div class="post__option">
                <span class="material-icons"> near_me </span>
             <p>Share</p>
               </div>
          </div>
        </div>
      </div>

    </div>

  </body>
</html>
