 <section id="faq" class="faq section-bg">
     <div class="container" data-aos="fade-up">

         <div class="section-title">
             <h2>F.A.Q</h2>
             <p>Frequently Asked Questions</p>
         </div>

         <?php
              $db=dbConn();
              $sql="SELECT * FROM faq";
              $result=$db->query($sql);
              ?>

         <ul class="faq-list" data-aos="fade-up" data-aos-delay="100">
             <?php
                if($result->num_rows> 0){
                    $list=1;
                    while($row=$result->fetch_assoc()){
                        ?>
             <li>
                 <div data-bs-toggle="collapse" class="collapsed question" data-bs-target="#faq<?=$list?>">
                     <?=$row['question']?>
                     <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
                 <div id="faq<?=$list?>" class="collapse <?=$list==1?'show':''?>" data-bs-parent=".faq-list">
                     <p>
                         <?=$row['answer']?>
                     </p>
                 </div>
             </li>
             <?php
                  $list++;
                      }
                    }
                    ?>


         </ul>
     </div>
 </section><!-- End F.A.Q Section -->