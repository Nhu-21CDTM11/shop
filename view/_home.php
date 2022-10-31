<?php require_once 'core/boot.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="public/css/style.css">
</head>

<body>
    <?php include 'inc/header.php'; ?>
    <?php include 'inc/navbar.php'; ?>
    <?php include 'inc/banner.php'; ?>
    <!-- feature section -->
    <div class="container py-16">
        <div class="w-10/12 grid grid-cols-3 gap-6 mx-auto justify-center">
            <!-- single feature -->
            <div class="border border-primary rounded-sm px-3 py-6 flex justify-center items-center gap-5">
                <img src="public/images/truck.svg" class="w-12 h-12 object-contain" alt="">
                <div>
                    <h4 class="font-medium capitalize text-lg">Free shipping</h4>
                    <p class="text-gray-500 text-sm">Order over $200</p>
                </div>
            </div>
            <!-- single feature end -->
            <!-- single feature -->
            <div class="border border-primary rounded-sm px-3 py-6 flex justify-center items-center gap-5">
                <img src="public/images/cash-pay.svg" class="w-12 h-12 object-contain" alt="">
                <div>
                    <h4 class="font-medium capitalize text-lg">Money Returns</h4>
                    <p class="text-gray-500 text-sm">30 days money return</p>
                </div>
            </div>
            <!-- single feature end -->
            <!-- single feature -->
            <div class="border border-primary rounded-sm px-3 py-6 flex justify-center items-center gap-5">
                <img src="public/images/24-hours.svg" class="w-12 h-12 object-contain" alt="">
                <div>
                    <h4 class="font-medium capitalize text-lg">24/7 Support</h4>
                    <p class="text-gray-500 text-sm">Customer support</p>
                </div>
            </div>
            <!-- single feature end -->
        </div>
    </div>
    <!-- feature section end -->

    <!-- categories -->
    <div class="container py-16">
        <h2 class="text-3xl font-medium text-gray-800 uppercase mb-6">shop by category</h2>
        <div class="grid grid-cols-3 gap-3">
            <?php $category_list = get_all_categories() ?>
            <?php foreach ($category_list as $category) { ?>
                <!-- single category -->
                <div class="relative rounded-sm overflow-hidden group">
                    <img src="<?php echo $category['img']; ?>" class="w-full" alt="">
                    <a href="category.php?category_id=<?php echo $category['id']; ?>" class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center text-xl text-white font-roboto font-medium group-hover:bg-opacity-50 transition"><?php echo $category['name']; ?></a>
                </div>
                <!-- single category end -->
            <?php } ?>
        </div>
    </div>
    <!-- categories end -->

    <!-- product wrapper -->
    <div class="container pb-16">
        <h2 class="text-2xl font-medium text-gray-800 uppercase mb-6">top new arrival</h2>
        <!-- product grid -->
        <div class="grid grid-cols-4 gap-6">
            <?php $product_list = get_all_products() ?>
            <?php foreach ($product_list as $product) { ?>
                <!-- single product -->
                <div class="bg-white shadow rounded overflow-hidden group">
                    <!-- product image -->
                    <div class="relative">
                        <img src="<?php echo $product['img']; ?>" class="w-full" alt="">
                        <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center gap-2 opacity-0 group-hover:opacity-100 transsition">
                            <a href="#" class="text-white text-lg w-9 h-8 rounded-full bg-primary flex items-center justify-center hover:bg-gray-800 transition ">
                                <i class="fas fa-search"></i>
                            </a>
                            <a href="#" class="text-white text-lg w-9 h-8 rounded-full bg-primary flex items-center justify-center hover:bg-gray-800 transition ">
                                <i class="far fa-heart"></i>
                            </a>
                        </div>
                    </div>
                    <!-- product image end-->

                    <!-- product-content -->
                    <div class="pt-4 pb-3 px-4">
                        <a href="product-detail.php?id=<?php echo $product['id']; ?>">
                            <h4 class="uppercase font-medium text-xl mb-2 text-gray-800 hover:text-primary transition"><?php echo $product['name']; ?></h4>
                        </a>
                        <div class="flex items-baseline mb-1 space-x-2 font-roboto">
                            <p class="text-xl text-primary font-semibold">$<?php echo $product['price']; ?></p>
                            <p class="text-sm text-gray-400 line-through">$55.00</p>
                        </div>
                        <div class="flex items-center">
                            <div class="flex gap-1 text-sm text-yellow-400">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                            </div>
                            <div class="text-xs text-gray-500 ml-3">(150)</div>
                        </div>
                    </div>
                    <a href="#" class="block w-full py-1 text-center text-white bg-primary border border-primary rounded-b hover:bg-transparent hover:text-primary transition">Add to cart</a>
                    <!-- product-content end-->
                </div>
                <!-- single product end-->
            <?php } ?>
        </div>
        <!-- product grid end-->
    </div>
    <!-- product wrapper end-->

    <!-- ad section -->
    <div class="container pb-16">
        <img src="public/images/offer-2.jpg" class="w-full" alt="">
    </div>
    <!-- ad section end-->

    <!-- product wrapper -->
    <div class="container pb-16">
        <h2 class="text-2xl font-medium text-gray-800 uppercase mb-6">recomended for you</h2>
        <!-- product grid -->
        <div class="grid grid-cols-4 gap-6">
            <!-- single product -->
            <div class="bg-white shadow rounded overflow-hidden group">
                <!-- product image -->
                <div class="relative">
                    <img src="public/images/product2.jpg" class="w-full" alt="">
                    <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center gap-2 opacity-0 group-hover:opacity-100 transsition">
                        <a href="#" class="text-white text-lg w-9 h-8 rounded-full bg-primary flex items-center justify-center hover:bg-gray-800 transition ">
                            <i class="fas fa-search"></i>
                        </a>
                        <a href="#" class="text-white text-lg w-9 h-8 rounded-full bg-primary flex items-center justify-center hover:bg-gray-800 transition ">
                            <i class="far fa-heart"></i>
                        </a>
                    </div>
                </div>
                <!-- product image end-->

                <!-- product-content -->
                <div class="pt-4 pb-3 px-4">
                    <a href="#">
                        <h4 class="uppercase font-medium text-xl mb-2 text-gray-800 hover:text-primary transition">Guyer chair</h4>
                    </a>
                    <div class="flex items-baseline mb-1 space-x-2 font-roboto">
                        <p class="text-xl text-primary font-semibold">$45.00</p>
                        <p class="text-sm text-gray-400 line-through">$55.00</p>
                    </div>
                    <div class="flex items-center">
                        <div class="flex gap-1 text-sm text-yellow-400">
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                        </div>
                        <div class="text-xs text-gray-500 ml-3">(150)</div>
                    </div>
                </div>
                <a href="#" class="block w-full py-1 text-center text-white bg-primary border border-primary rounded-b hover:bg-transparent hover:text-primary transition">Add to cart</a>
                <!-- product-content end-->
            </div>
            <!-- single product end-->
            <!-- single product -->
            <div class="bg-white shadow rounded overflow-hidden group">
                <!-- product image -->
                <div class="relative">
                    <img src="public/images/product3.jpg" class="w-full" alt="">
                    <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center gap-2 opacity-0 group-hover:opacity-100 transsition">
                        <a href="#" class="text-white text-lg w-9 h-8 rounded-full bg-primary flex items-center justify-center hover:bg-gray-800 transition ">
                            <i class="fas fa-search"></i>
                        </a>
                        <a href="#" class="text-white text-lg w-9 h-8 rounded-full bg-primary flex items-center justify-center hover:bg-gray-800 transition ">
                            <i class="far fa-heart"></i>
                        </a>
                    </div>
                </div>
                <!-- product image end-->

                <!-- product-content -->
                <div class="pt-4 pb-3 px-4">
                    <a href="#">
                        <h4 class="uppercase font-medium text-xl mb-2 text-gray-800 hover:text-primary transition">Guyer chair</h4>
                    </a>
                    <div class="flex items-baseline mb-1 space-x-2 font-roboto">
                        <p class="text-xl text-primary font-semibold">$45.00</p>
                        <p class="text-sm text-gray-400 line-through">$55.00</p>
                    </div>
                    <div class="flex items-center">
                        <div class="flex gap-1 text-sm text-yellow-400">
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                        </div>
                        <div class="text-xs text-gray-500 ml-3">(150)</div>
                    </div>
                </div>
                <a href="#" class="block w-full py-1 text-center text-white bg-primary border border-primary rounded-b hover:bg-transparent hover:text-primary transition">Add to cart</a>
                <!-- product-content end-->
            </div>
            <!-- single product end-->
            <!-- single product -->
            <div class="bg-white shadow rounded overflow-hidden group">
                <!-- product image -->
                <div class="relative">
                    <img src="public/images/product4.jpg" class="w-full" alt="">
                    <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center gap-2 opacity-0 group-hover:opacity-100 transsition">
                        <a href="#" class="text-white text-lg w-9 h-8 rounded-full bg-primary flex items-center justify-center hover:bg-gray-800 transition ">
                            <i class="fas fa-search"></i>
                        </a>
                        <a href="#" class="text-white text-lg w-9 h-8 rounded-full bg-primary flex items-center justify-center hover:bg-gray-800 transition ">
                            <i class="far fa-heart"></i>
                        </a>
                    </div>
                </div>
                <!-- product image end-->

                <!-- product-content -->
                <div class="pt-4 pb-3 px-4">
                    <a href="#">
                        <h4 class="uppercase font-medium text-xl mb-2 text-gray-800 hover:text-primary transition">Guyer chair</h4>
                    </a>
                    <div class="flex items-baseline mb-1 space-x-2 font-roboto">
                        <p class="text-xl text-primary font-semibold">$45.00</p>
                        <p class="text-sm text-gray-400 line-through">$55.00</p>
                    </div>
                    <div class="flex items-center">
                        <div class="flex gap-1 text-sm text-yellow-400">
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                        </div>
                        <div class="text-xs text-gray-500 ml-3">(150)</div>
                    </div>
                </div>
                <a href="#" class="block w-full py-1 text-center text-white bg-primary border border-primary rounded-b hover:bg-transparent hover:text-primary transition">Add to cart</a>
                <!-- product-content end-->
            </div>
            <!-- single product end-->
            <!-- single product -->
            <div class="bg-white shadow rounded overflow-hidden group">
                <!-- product image -->
                <div class="relative">
                    <img src="public/images/product8.jpg" class="w-full" alt="">
                    <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center gap-2 opacity-0 group-hover:opacity-100 transsition">
                        <a href="#" class="text-white text-lg w-9 h-8 rounded-full bg-primary flex items-center justify-center hover:bg-gray-800 transition ">
                            <i class="fas fa-search"></i>
                        </a>
                        <a href="#" class="text-white text-lg w-9 h-8 rounded-full bg-primary flex items-center justify-center hover:bg-gray-800 transition ">
                            <i class="far fa-heart"></i>
                        </a>
                    </div>
                </div>
                <!-- product image end-->

                <!-- product-content -->
                <div class="pt-4 pb-3 px-4">
                    <a href="#">
                        <h4 class="uppercase font-medium text-xl mb-2 text-gray-800 hover:text-primary transition">Guyer chair</h4>
                    </a>
                    <div class="flex items-baseline mb-1 space-x-2 font-roboto">
                        <p class="text-xl text-primary font-semibold">$45.00</p>
                        <p class="text-sm text-gray-400 line-through">$55.00</p>
                    </div>
                    <div class="flex items-center">
                        <div class="flex gap-1 text-sm text-yellow-400">
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                        </div>
                        <div class="text-xs text-gray-500 ml-3">(150)</div>
                    </div>
                </div>
                <a href="#" class="block w-full py-1 text-center text-white bg-primary border border-primary rounded-b hover:bg-transparent hover:text-primary transition">Add to cart</a>
                <!-- product-content end-->
            </div>
            <!-- single product end-->
        </div>
        <!-- product grid end-->
    </div>
    <!-- product wrapper end-->

    <!-- product wrapper -->
    <div class="container pb-16">
        <!-- product grid -->
        <div class="grid grid-cols-4 gap-6">
            <!-- single product -->
            <div class="bg-white shadow rounded overflow-hidden group">
                <!-- product image -->
                <div class="relative">
                    <img src="public/images/product1.jpg" class="w-full" alt="">
                    <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center gap-2 opacity-0 group-hover:opacity-100 transsition">
                        <a href="#" class="text-white text-lg w-9 h-8 rounded-full bg-primary flex items-center justify-center hover:bg-gray-800 transition ">
                            <i class="fas fa-search"></i>
                        </a>
                        <a href="#" class="text-white text-lg w-9 h-8 rounded-full bg-primary flex items-center justify-center hover:bg-gray-800 transition ">
                            <i class="far fa-heart"></i>
                        </a>
                    </div>
                </div>
                <!-- product image end-->

                <!-- product-content -->
                <div class="pt-4 pb-3 px-4">
                    <a href="#">
                        <h4 class="uppercase font-medium text-xl mb-2 text-gray-800 hover:text-primary transition">Guyer chair</h4>
                    </a>
                    <div class="flex items-baseline mb-1 space-x-2 font-roboto">
                        <p class="text-xl text-primary font-semibold">$45.00</p>
                        <p class="text-sm text-gray-400 line-through">$55.00</p>
                    </div>
                    <div class="flex items-center">
                        <div class="flex gap-1 text-sm text-yellow-400">
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                        </div>
                        <div class="text-xs text-gray-500 ml-3">(150)</div>
                    </div>
                </div>
                <a href="#" class="block w-full py-1 text-center text-white bg-primary border border-primary rounded-b hover:bg-transparent hover:text-primary transition">Add to cart</a>
                <!-- product-content end-->
            </div>
            <!-- single product end-->
            <!-- single product -->
            <div class="bg-white shadow rounded overflow-hidden group">
                <!-- product image -->
                <div class="relative">
                    <img src="public/images/product9.jpg" class="w-full" alt="">
                    <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center gap-2 opacity-0 group-hover:opacity-100 transsition">
                        <a href="#" class="text-white text-lg w-9 h-8 rounded-full bg-primary flex items-center justify-center hover:bg-gray-800 transition ">
                            <i class="fas fa-search"></i>
                        </a>
                        <a href="#" class="text-white text-lg w-9 h-8 rounded-full bg-primary flex items-center justify-center hover:bg-gray-800 transition ">
                            <i class="far fa-heart"></i>
                        </a>
                    </div>
                </div>
                <!-- product image end-->

                <!-- product-content -->
                <div class="pt-4 pb-3 px-4">
                    <a href="#">
                        <h4 class="uppercase font-medium text-xl mb-2 text-gray-800 hover:text-primary transition">Guyer chair</h4>
                    </a>
                    <div class="flex items-baseline mb-1 space-x-2 font-roboto">
                        <p class="text-xl text-primary font-semibold">$45.00</p>
                        <p class="text-sm text-gray-400 line-through">$55.00</p>
                    </div>
                    <div class="flex items-center">
                        <div class="flex gap-1 text-sm text-yellow-400">
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                        </div>
                        <div class="text-xs text-gray-500 ml-3">(150)</div>
                    </div>
                </div>
                <a href="#" class="block w-full py-1 text-center text-white bg-primary border border-primary rounded-b hover:bg-transparent hover:text-primary transition">Add to cart</a>
                <!-- product-content end-->
            </div>
            <!-- single product end-->
            <!-- single product -->
            <div class="bg-white shadow rounded overflow-hidden group">
                <!-- product image -->
                <div class="relative">
                    <img src="public/images/product10.jpg" class="w-full" alt="">
                    <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center gap-2 opacity-0 group-hover:opacity-100 transsition">
                        <a href="#" class="text-white text-lg w-9 h-8 rounded-full bg-primary flex items-center justify-center hover:bg-gray-800 transition ">
                            <i class="fas fa-search"></i>
                        </a>
                        <a href="#" class="text-white text-lg w-9 h-8 rounded-full bg-primary flex items-center justify-center hover:bg-gray-800 transition ">
                            <i class="far fa-heart"></i>
                        </a>
                    </div>
                </div>
                <!-- product image end-->

                <!-- product-content -->
                <div class="pt-4 pb-3 px-4">
                    <a href="#">
                        <h4 class="uppercase font-medium text-xl mb-2 text-gray-800 hover:text-primary transition">Guyer chair</h4>
                    </a>
                    <div class="flex items-baseline mb-1 space-x-2 font-roboto">
                        <p class="text-xl text-primary font-semibold">$45.00</p>
                        <p class="text-sm text-gray-400 line-through">$55.00</p>
                    </div>
                    <div class="flex items-center">
                        <div class="flex gap-1 text-sm text-yellow-400">
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                        </div>
                        <div class="text-xs text-gray-500 ml-3">(150)</div>
                    </div>
                </div>
                <a href="#" class="block w-full py-1 text-center text-white bg-primary border border-primary rounded-b hover:bg-transparent hover:text-primary transition">Add to cart</a>
                <!-- product-content end-->
            </div>
            <!-- single product end-->
            <!-- single product -->
            <div class="bg-white shadow rounded overflow-hidden group">
                <!-- product image -->
                <div class="relative">
                    <img src="public/images/product12.jpg" class="w-full" alt="">
                    <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center gap-2 opacity-0 group-hover:opacity-100 transsition">
                        <a href="#" class="text-white text-lg w-9 h-8 rounded-full bg-primary flex items-center justify-center hover:bg-gray-800 transition ">
                            <i class="fas fa-search"></i>
                        </a>
                        <a href="#" class="text-white text-lg w-9 h-8 rounded-full bg-primary flex items-center justify-center hover:bg-gray-800 transition ">
                            <i class="far fa-heart"></i>
                        </a>
                    </div>
                </div>
                <!-- product image end-->

                <!-- product-content -->
                <div class="pt-4 pb-3 px-4">
                    <a href="#">
                        <h4 class="uppercase font-medium text-xl mb-2 text-gray-800 hover:text-primary transition">Guyer chair</h4>
                    </a>
                    <div class="flex items-baseline mb-1 space-x-2 font-roboto">
                        <p class="text-xl text-primary font-semibold">$45.00</p>
                        <p class="text-sm text-gray-400 line-through">$55.00</p>
                    </div>
                    <div class="flex items-center">
                        <div class="flex gap-1 text-sm text-yellow-400">
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                        </div>
                        <div class="text-xs text-gray-500 ml-3">(150)</div>
                    </div>
                </div>
                <a href="#" class="block w-full py-1 text-center text-white bg-primary border border-primary rounded-b hover:bg-transparent hover:text-primary transition">Add to cart</a>
                <!-- product-content end-->
            </div>
            <!-- single product end-->
        </div>
        <!-- product grid end-->
    </div>
    <!-- product wrapper end-->

    <?php include 'inc/footer.php'; ?>
</body>

</html>