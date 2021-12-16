<div class="menu-box d-flex flex-column justify-content-center align-items-center">

<!-- List all products -->
<div class="row col-lg-12">
    <?php if(!empty($products)){ foreach($products as $row){ ?>
        <div class="card mb-3 special-card" style="margin-left: 50px; max-width: 540px;">
            <div class="row no-gutters">
                <div class="col-md-4">
                    <img src="<?php echo base_url('assets/images/menu/'.$row['image']); ?>" class="card-img" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body text-warning">
                        <h5 class="card-title"><?php echo $row["name"]; ?></h5>
                        <h6 class="card-subtitle mb-2 text-white">Price: <?php echo '$'.$row["price"].' USD'; ?></h6>
                <p class="card-text text-white"><?php echo $row["description"]; ?></p>
                <a href="<?php echo base_url('index.php/products/addToCart/'.$row['id']); ?>" class="btn btn-warning">Add to Cart</a>
                    </div>
                </div>
            </div>
        </div>
    <?php } }else{ ?>
        <p>Product(s) not found...</p>
    <?php } ?>
</div>
</div>  