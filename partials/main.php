<?php

    function setAvailable($available) {
        if ($available == false) {
            throw new Exception('Il prodotto non è più disponibile');
        } else {
            return "Il prodotto è disponibile";
        }
    }

?>
    <main class="container">

        <h2>Cibo</h2>

        <div class="row">
            <div class="container-card col-6">
                <img class="img-product" src="<?php echo $food1->image ?>" alt=""<?php echo $food1->name ?>">
                <div class="container-info p-4">
                    <div>Category: <?php echo $food1->category ?></div>
                    <div><?php echo $food1->name ?></div>
                    <div>Prezzo: <?php echo $food1->price ?>€</div>
                    <div><?php echo $food1->enterprise ?></div>
                    <div><?php echo $food1->description ?></div>
                    <div>Sconto di: <?php echo $food1->discount ?>€</div>

                    <div><?php  try{
                                    echo setAvailable($food1->available);
                                }  catch (Exception $e) {
                                    echo $e->getMessage();
                                }
                    ?></div>
                </div>
            </div>


            <div class="container-card col-6">
                <img class="img-product" src="<?php echo $food2->image ?>" alt=""<?php echo $food2->name ?>">
                <div class="container-info p-4">
                    <div>Category: <?php echo $food2->category ?></div>
                    <div><?php echo $food2->name ?></div>
                    <div>Prezzo: <?php echo $food2->price ?>€</div>
                    <div><?php echo $food2->enterprise ?></div>
                    <div><?php echo $food2->description ?></div>

                    <div><?php  try{
                                    echo setAvailable($food2->available);
                                }  catch (Exception $e) {
                                    echo $e->getMessage();
                                }
                    ?></div>
                </div>
            </div>
        </div>
        




        <h2>Giochi</h2>

        <div class="row">

        <div class="container-card col-6">
                <img class="img-product" src="<?php echo $games1->image ?>" alt=""<?php echo $games1->name ?>">
                <div class="container-info p-4">
                    <div>Category: <?php echo $games1->category ?></div>
                    <div><?php echo $games1->name ?></div>
                    <div>Prezzo: <?php echo $games1->price ?>€</div>
                    <div><?php echo $games1->enterprise ?></div>
                    <div><?php echo $games1->description ?></div>

                    <div><?php  try{
                                    echo setAvailable($games1->available);
                                }  catch (Exception $e) {
                                    echo $e->getMessage();
                                }
                    ?></div>
                </div>
            </div>


            <div class="container-card col-6">
                <img class="img-product" src="<?php echo $games2->image ?>" alt=""<?php echo $games2->name ?>">
                <div class="container-info p-4">
                    <div>Category: <?php echo $games2->category ?></div>
                    <div><?php echo $games2->name ?></div>
                    <div>Prezzo: <?php echo $games2->price ?>€</div>
                    <div><?php echo $games2->enterprise ?></div>
                    <div><?php echo $games2->description ?></div>

                    <div><?php  try{
                                    echo setAvailable($games2->available);
                                }  catch (Exception $e) {
                                    echo $e->getMessage();
                                }
                    ?></div>
                </div>
            </div>



            <h2>Cucce</h2>

        <div class="row">

        <div class="container-card col-6">
                <img class="img-product my-w" src="<?php echo $cuccia1->image ?>" alt=""<?php echo $cuccia1->name ?>">
                <div class="container-info p-4">
                    <div>Category: <?php echo $cuccia1->category ?></div>
                    <div><?php echo $cuccia1->name ?></div>
                    <div>Prezzo: <?php echo $cuccia1->price ?>€</div>
                    <div><?php echo $cuccia1->enterprise ?></div>
                    <div><?php echo $cuccia1->description ?></div>

                    <div><?php  try{
                                    echo setAvailable($cuccia1->available);
                                }  catch (Exception $e) {
                                    echo $e->getMessage();
                                }
                    ?></div>
                </div>
            </div>


            <div class="container-card col-6">
                <img class="img-product my-w" src="<?php echo $cuccia2->image ?>" alt=""<?php echo $cuccia2->name ?>">
                <div class="container-info p-4">
                    <div>Category: <?php echo $cuccia2->category ?></div>
                    <div><?php echo $cuccia2->name ?></div>
                    <div>Prezzo: <?php echo $cuccia2->price ?>€</div>
                    <div><?php echo $cuccia2->enterprise ?></div>
                    <div><?php echo $cuccia2->description ?></div>

                    <div><?php  try{
                                    echo setAvailable($cuccia2->available);
                                }  catch (Exception $e) {
                                    echo $e->getMessage();
                                }
                    ?></div>
                </div>
            </div>
        </div>

    </main>