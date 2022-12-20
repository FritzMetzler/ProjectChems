<?php include 'partials/header.php'; ?>
    
    <section class="promociones" >
        <div class="promo-container">
            <div class="prom-list">    
                
                    <div class="prom-card-container">
                        <div class="prom-card prom-card-active">
                            <div class="prom-card-text">
                                <h3>Title promotion 1</h3>
                                <p>1Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
                                Temporibus consequatur, ullam repellendus culpa pariatur ut.</p>
                            </div>
                            <img src="../images/test.png" class="prom-card-image">
                        </div>    
                    </div>
                    
                    <div class="prom-card-container">
                        <div class="prom-card">
                            <div class="prom-card-text">
                                <h3>Title promotion 2</h3>
                                <p>2Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
                                Temporibus consequatur, ullam repellendus culpa pariatur ut.</p>
                            </div>
                            <img src="../images/chems-icon.png" class="prom-card-image">
                        </div>    
                    </div>
                    <?php
                    $conexion = mysqli_connect("localhost", "root", "password", "negocio");
                    $request = "SELECT * FROM `promociones`";
                    $resultSet = mysqli_query($conexion, $request);
                    while($row=mysqli_fetch_row($resultSet)){
                    ?>
                    <div class="prom-card-container">
                        <div class="prom-card">
                            <div class="prom-card-text">
                                <h3><?php echo $row[1]; ?></h3>
                                <p><?php echo $row[2]; ?></p>
                            </div>
                            <img src="<?php echo $row[3] ?>" class="prom-card-image">
                        </div>    
                    </div>
                    <?php
                    }
                    ?>
            </div>
            
            <div class="prom-visualizer">
                <div class="prom-visual-container">
                    <img src="../images/test.png" class="big-image">
                    <div class="prom-visual-text-container">
                        <h3>Promotion 1</h3>
                        <p>1Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                        Repudiandae temporibus accusamus, dolore eius ad nisi.</p>
                    </div>
                </div>
                <div class="delivery">
                    <h3>Ordenalo Aqui!</h3>
                    <div class="global-services">
                    <ul>
                    <li><a href="#"><img src="../images/delivery/UberLogo.png"></a></li>
                    <li><a href="#"><img src="../images/delivery/Rappi-logo.png"></a></li>
                    <li><a href="#"><img src="../images/delivery/didiLogo.png"></a></li>
                    </ul>    
                    
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="../javascripts/promo-image-selector.js"></script>

<?php include 'partials/footer.php'; ?>