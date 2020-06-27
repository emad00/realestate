<link rel="stylesheet" href="css/card.css">
<link rel="stylesheet" href="css/heart.css">

    <div class="card row" style="width: 16rem;">
        <img src="img/house/<?php echo $row['image']; ?>" class="card-img-top" alt="Responsive image">
        <div class="card-body">
            <h5 class="card-title"><img src="img/dollar.svg" class="card-logo"><b>Price: <?php echo $row['price']; ?></b></h5>
            <p class="card-text"><img src="img/width.svg" class="card-logo"><b>Surface: <?php echo $row['big']; ?></b></p>
            <p class="card-text"><img src="img/bed.svg" class="card-logo"><b> Bedroom: <?php echo $row['bedroom']; ?></b></p>
            <p class="card-text"><img src="img/room.svg" class="card-logo"><b> Rooms: <?php echo $row['rooms']; ?></b>
            <p class="card-text"><img src="img/bath.svg" class="card-logo"><b> Bathroom: <?php echo $row['bathrooms']; ?></b></p>
            <p class="card-text"><img src="img/floor.svg" class="card-logo"><b> Floor: <?php echo $row['floor']; ?></b></p>
            <a href="#" class="btn btn-primary">See More</a>
        </div>
    </div>
