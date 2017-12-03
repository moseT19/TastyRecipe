<div class="container" >
         <div class="block">
            <h1>Pancake Recipe</h1>
            <img class="recipe-image" src="<?= asset_url() ?>/images/pancake.jpg" alt="An image to illustrate the final product the this recipe of pancakes. ">
            <div class="left-column">
                <h3>Method</h3>
                <p>Whisk together the dry ingredients in a large bowl. <br>In a separate bowl, whisk the eggs, then whisk in the milk, and buttermilk. Pour the wet ingredients into the dry ingredients and combine, using a wooden spoon. Mix only until the batter just comes together. Stir in the melted butter. Do not over-mix! The mixture should be a little lumpy. Lumpy is good. A lumpy batter makes fluffy pancakes.<br><br/>
At this point you can either gently fold in the blueberries, or wait until you pour the batter onto the griddle, and then place the blueberries into the surface of the pancake batter. Placing the blueberries into the pancakes while they are cooking will help keep them from bleeding.</p>
            </div>
            <div class="right-column">

             <h3>Dry ingredients: </h3>
             <ul>
                 <li>2 cups all purpose flour</li>
                 <li>1/2 teaspoon salt</li>
                 <li>
1/2 teaspoon baking powder</li>
                 <li>1/2 teaspoon baking soda</li>
                 <li>2 Tbsp sugar</li>
             </ul>
             <h3>Other ingredients: </h3>
             <ul>
                 <li>2 large eggs</li>
                 <li>1/2 cup buttermilk</li>
                 <li>1 cup milk</li>
                 <li>3 Tbsp warm melted butter</li>
                 <li>1 cup blueberries</li>
                 <li>Butter or vegetable oil</li>
             </ul>
             </div>
             <div class="comments">
                <h3>Comments</h3>
                <?php
                    foreach($comments as $comment) : if($comment['recipe'] == 'pancake'){?>
                        <div class="comment" >
                                    <h4><?php echo $comment['username']; ?></h4>
                                    <p><?php echo $comment['comment'] ?></p>
                        </div>
                    <?php if($this->seesion->userdata('username') == $comment['username']) : ?>
                    <?php echo form_open('comments/deleteCom/'.$comment['id']); ?>
                    <button type="submit"  value="Delete">Delete</button>

                    <?php echo form_close(); ?>
                    <?php endif; ?>
                <?php if($this->session->userdata('username')) : ?>
                <?php echo validation_errors(); ?>
                <?php echo form_open('comments/createCom'); ?>
                 <div id="commentform">
                     <h4>Write a comment here :</h4><textarea type = "text" name = "body" pattern="[a-zA-Z0-9]+" class = ""></textarea><br /><br />
                     <button type = "submit" >Comment</button><br />
                     <input type="hidden" name="recipe" value="pancake";>
                 </div>
                <?php echo form_close(); ?>
                <?php endif; ?>
            </div>
            </div>
