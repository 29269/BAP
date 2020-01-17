<?php

function component($omschriving, $prijs, $tshirt, $productid, $maat, $kleur, $tshirtsid){
    $element = "
    
    <div class=\"col-md-3 col-sm-6 my-3 my-md-0\">
                <form action=\"index.php\" method=\"post\">
                   <div class=\"card shadow\">
                        <div>
                            <img src=\"$tshirt\" alt=\"Image1\" class=\"img-fluid card-img-top\">
                  
                            </div>
                        <div class=\"card-body\">
                            <h5 class=\"card-title\">$omschriving</h5>
                            <h6>
                                <i class=\"fas fa-star\"></i>
                                <i class=\"fas fa-star\"></i>
                                <i class=\"fas fa-star\"></i>
                                <i class=\"far fa-star\"></i>
                            </h6>
                            <p class=\"card-text\">
                            Sinteklaas T-shirt.
                            </p>
                            <p >
                            kleuren : $kleur.
                            </p>
                            <p>
                            $maat 
                            </p>
                            <h5>
                                <small><s class=\"text-secondary\">$</s></small>
                                <span class=\"price\">€$prijs</span>
                            </h5>

                            <button type=\"submit\" class=\"btn btn-warning my-3\" name=\"add\">In winkelwagen <i class=\"fas fa-shopping-cart\"></i></button>
                             <input type='hidden' name='product_id' value='$tshirtsid'>
                        </div>
                    </div>
                </form>
            </div>
    ";
    echo $element;
}

function cartElement($omschriving, $prijs, $tshirt, $tshirtsid, $maat, $kleur){
    $element = "
    
    <form action=\"cart.php?action=remove&id=$tshirtsid\" method=\"post\" class=\"cart-items\">
                    <div class=\"border rounded\">
                        <div class=\"row bg-white\">
                            <div class=\"col-md-3 pl-0\">
                                <img src=$$tshirt alt=\"Image1\" class=\"img-fluid\">
                            </div>
                            <div class=\"col-md-6\">
                                <h5 class=\"pt-2\">$omschriving</h5>
                                <small class=\"text-secondary\">Seller: dailytuition</small>
                                <p>
                                kleuren : $kleur.
                                </p>
                                <p>
                                maat : $maat 
                                </p>
                                <h5 class=\"pt-2\">€$prijs</h5>
                                <button type=\"submit\" class=\"btn btn-warning\">Save for Later</button>
                                <button type=\"submit\" class=\"btn btn-danger mx-2\" name=\"remove\">Remove</button>
                            </div>
                            <div class=\"col-md-3 py-5\">
                                <div>
                                    <button type=\"button\" class=\"btn bg-light border rounded-circle\"><i class=\"fas fa-minus\"></i></button>
                                    <input type=\"text\" value=\"1\" class=\"form-control w-25 d-inline\">
                                    <button type=\"button\" class=\"btn bg-light border rounded-circle\"><i class=\"fas fa-plus\"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
    
    ";
    echo  $element;
}
// function cartElement(){
//     $element= "
    
    
//     "

 



































