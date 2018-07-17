<?php $__env->startSection('content'); ?>
<!doctype html>
<html lang="<?php echo e(app()->getLocale()); ?>">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        
        <style>
            .colm{
                width: 250px;
                height: 450px;
                background-color: transparent;
                border: 1px solid gray;
                box-shadow: 2px 2px 5px gray;
                color: white;
            }
            .colm img{
                width: 248px;
                height: 160px;
            }
            .headerPack, h3{
                padding: 20px 5px 10px 5px;
                font-family: 'Raleway', sans-serif;
            }
            .price{
                position: absolute;
                width: 150px;
                padding: 5px 5px 5px 5px;
                background-color: white;
                border: 1px solid lightgray;
                margin: -15px 10px 0px 120px;
                border-radius: 5px;
            }
            .btnAdcart{
                width: 250px;
                padding: 5px 25px 5px 25px;
                margin: 5px 0px 5px 0px;
                background-color: transparent;
                border: 1px solid #60be98;
                border-radius: 4px;
                text-decoration: none;
                color: #60be98;
            }
            #adcartone:hover{
                background-color: #df4118;
                cursor: pointer;
                color: white;
                text-decoration: none;
                border: 1px solid #df4118;
            }
            #adcarttwo:hover{
                background-color: #202724;
                cursor: pointer;
                color: white;
                text-decoration: none;
                border: 1px solid #202724;
            }
            #adcartthree:hover{
                background-color: #60be98;
                cursor: pointer;
                color: white;
                text-decoration: none;
                border: 1px solid #60be98;
            }
        </style>
    </head>
    <body>
        <center>
            <br>
            <h3>Wedding Package</h3>
            <br>
            <!--<div class="container-fluid">
                <div class="row" style="width: 90%;">
                    <div class="col-sm-4">
                        
                        <div class="colm" style="background-color: #df4118;">
                            <div class="price" style="background-color: #df4118;">฿  15,000 Baht</div>
                            <img src="images/beautiful-blur-bridal-256737.jpg">
                            
                            <br>
                            <h4 class="headerPack">Standard Package</h4>
                            <p style="text-align: left; margin-left: 25px;">
                                - Guarantee 100 Persons<br>
                                - Deluxe Room<br>
                                - Event coordinator wedding<br>
                                - Menu Buffet Package<br>
                                - Room make-up<br>
                                - Venue Pre Wedding<br>
                                - Banquet Equipment<br>
                                - 8 Hours venue usage<br>
                            </p>
                        </div>
                        <button class="adcartPack">Add to Cart!</button>
                        
                    </div>
                    <div class="col-sm-4">
                        <div class="colm" style="background-color: #202724;">
                            <div class="price" style="background-color: #202724;">฿  20,000 Baht</div>
                            <img src="images/ballroom-candles-candlesticks-265947_____8.jpg">
                            
                            <br>
                            <h4 class="headerPack">Platinum Package</h4>
                            <p style="text-align: left; margin-left: 25px;">
                                - Guarantee 200 Persons<br>
                                - Deluxe Room<br>
                                - Event coordinator wedding<br>
                                - Menu Buffet Package<br>
                                - Room make-up<br>
                                - Venue Pre Wedding<br>
                                - Banquet Equipment<br>
                                - 8 Hours venue usage<br>
                            </p>
                            
                        </div>
                        <button class="adcartPack">Add to Cart!</button>
                    </div>
                    <div class="col-sm-4">
                        <div class="colm" style="background-color: #60be98;">
                            <div class="price" style="background-color: #60be98;">฿  30,000 Baht</div>
                            <img src="images/wedding-1255520_1920.jpg">
                            
                            <br>
                            <h4 class="headerPack">Gold Package</h4>
                            <p style="text-align: left; margin-left: 25px;">
                                - Guarantee 400 Persons<br>
                                - Deluxe Room<br>
                                - Event coordinator wedding<br>
                                - Menu Buffet Package<br>
                                - Room make-up<br>
                                - Venue Pre Wedding<br>
                                - Banquet Equipment<br>
                                - 8 Hours venue usage<br>
                            </p>
                        </div>
                        <button class="adcartPack">Add to Cart!</button>
                    </div>
                </div>
            </div>
            <br>-->
        </center>
        <center>
            <div class="container-fluid">
                <div class="row" style="width: 90%;">
            <?php $__currentLoopData = $packages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $package): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            
                <?php if($package->packId === 1): ?> 
            
                <div class="col-sm-4">
                        
                        <div class="colm" style="background-color: #df4118;">
                            <div class="price" style="background-color: #df4118;">  <?php echo e(number_format($package->packPrice,2)); ?> Baht</div>
                            
                            <img src="<?php echo e(asset('images/'.$package->packImg)); ?>">
                            
                            <br>
                            <h4 class="headerPack"><?php echo e($package->packName); ?></h4>
                            <p>
                                <center style="margin: 0px 15px 0px 15px;"><?php echo e($package->packDetail); ?></center>
                            </p>
                        </div>
                        <div class=""><br>
                        <!--<a class="btnAdcart" id="adcartone" href="<?php echo e(url('/product/adcart/'.$package->packId)); ?>">
                            Add to Cart!
                        </a>-->
                        <a class="btnAdcart" id="adcartone" href="<?php echo e(url('/product/adcart/')); ?>">
                            Add to Cart!
                        </a>
                            
                        </div>
                        
                    </div>
                     
                
                <?php elseif($package->packId === 2): ?>
                    <div class="col-sm-4">
                        
                        <div class="colm" style="background-color: #202724;">
                            <div class="price" style="background-color: #202724;">  <?php echo e(number_format($package->packPrice,2)); ?> Baht</div>
                            
                            <img src="<?php echo e(asset('images/'.$package->packImg)); ?>">
                            
                            <br>
                            <h4 class="headerPack"><?php echo e($package->packName); ?></h4>
                            <p >
                                <center style="margin: 0px 15px 0px 15px;"><?php echo e($package->packDetail); ?></center>
                            </p>
                        </div>
                        <div class=""><br>
                        <a class="btnAdcart" id="adcarttwo" href="<?php echo e(url('/product/'.$package->packId.'/adcart/')); ?>">
                            Add to Cart!
                        </a>
                        </div>
                        
                    </div>
                
                <?php elseif($package->packId === 3): ?>
                    <div class="col-sm-4">
                        
                        <div class="colm" style="background-color: #60be98;">
                            <div class="price" style="background-color: #60be98;">  <?php echo e(number_format($package->packPrice,2)); ?> Baht</div>
                            
                            <img src="<?php echo e(asset('images/'.$package->packImg)); ?>">
                            
                            <br>
                            <h4 class="headerPack"><?php echo e($package->packName); ?></h4>
                            <p >
                                <center style="margin: 0px 15px 0px 15px;"><?php echo e($package->packDetail); ?></center>
                            </p>
                        </div>
                        <div class=""><br>
                        <a class="btnAdcart" id="adcartthree" href="<?php echo e(url('/product/'.$package->packId.'/adcart/')); ?>">
                            Add to Cart!
                        </a>
                        </div>
                        
                    </div>
            
                <?php endif; ?>
            
            
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </center>
    </body>
</html>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>