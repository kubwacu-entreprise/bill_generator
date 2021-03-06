<div class="overlay" id="add_item_overlay">
    <div class="add_item_form_container">
        <div class="header">
            <span id="close_add_item_overlay"><i class="fas fa-times"></i></span>
        </div>
        <form action="" method="POST">
            <div class="form_group">  
                <div class="input_container">
                    <label for="">Description</label>
                    <input type="text" id="item_description" placeholder="Entrer la description du produit ou service">
                </div>
                <div class="input_container">
                    <label for="">Quantité</label>
                    <input type="text" id="item_quantity" placeholder="Entrer la quantité" value="1">
                </div>
                <div class="input_container">
                    <label for="">Prix unitaire</label>
                    <input type="text" id="item_price" placeholder="Entrer le prix unitaire">
                </div>
                <div class="input_container">
                    <label for="">TVA</label>
                    <input type="text" id="item_tva" placeholder="Entrer la TVA">
                </div>
                <div class="input_container">
                    <label for="">Montant total</label>
                    <input type="text" id="item_amount" value="0" disabled>
                </div>
            </div> 
            <div class="submit_button">
                <div class="button add_item_button" id="add_item_button"><i class="fas fa-plus"></i> Ajouter</div>
            </div>
        </form>
    </div>
</div>