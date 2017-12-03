<div class="container" >
                <div class="block">

                <h1>Meatball Recipe</h1>
            <img class="recipe-image" src="<?= asset_url() ?>/images/kottbullar.png" alt="An image to illustrate the final product the this recipe of meatballs. ">
            <div class="left-column">
                <h3>Method</h3>
                <p>
                1. Heat oven to 400°F. Line 13x9-inch pan with foil; spray with cooking spray.
               <br/><br/> 2.
                In large bowl, mix all ingredients. Shape mixture into 20 to 24 (1 1/2-inch) meatballs. Place 1 inch apart in pan.
                <br/><br/>3.
                Bake uncovered 18 to 22 minutes or until no longer pink in center.</p>
            </div>
            <div class="right-column">

             <h3>Ingredients: </h3>
             <ul>
                 <li>1 lb lean (at least 80%) ground beef</li>
                 <li>1/2 cup Progresso™ Italian-style bread crumbs</li>
                    <li>1/2 teaspoon baking powder</li>
                    <li>1/4 cup milk</li>
                    <li>1/2 teaspoon salt</li>
                    <li>1/2teaspoon Worcestershire sauce</li>
                    <li>1/4 teaspoon pepper</li>
                    <li>1 small onion, finely chopped (1/4 cup)</li>
                    <li>1egg</li>

             </ul>
             </div>
            <div class="comments">
                <h3>Comments</h3>
                <?php
                    foreach($comments as $comment) : if($comment['recipe'] == 'meatball'){?>
                        <div class="comment" >
                                    <h4><?php echo $comment['username']; ?></h4>
                                    <p><?php echo $comment['comment'] ?></p>
                        </div>
                    <?php if($this->session->userdata('username') == $comment['username']) : ?>
                    <?php echo form_open('comments/deleteCom/'.$comment['id']); ?>
                    <button type="submit"  value="Delete">Delete</button>

                    <?php echo form_close(); ?>
                    <?php endif; ?>

                 <?php } endforeach; ?>
                <?php if($this->session->userdata('username')) : ?>
                <?php echo validation_errors(); ?>
                <?php echo form_open('comments/createCom'); ?>
                 <div id="commentform">
                     <h4>Write a comment here :</h4><textarea type = "text" name = "body" pattern="[a-zA-Z0-9]+" class = ""></textarea><br /><br />
                     <button type = "submit" >Comment</button><br />
                     <input type="hidden" name="recipe" value="meatball";>
                 </div>
                <?php echo form_close(); ?>
                <?php endif; ?>
            </div>

        </div>
