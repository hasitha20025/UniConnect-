<?php
include('./partition/header.php');
?>
    <br />
    <br />
    <br />
    <br />
    <br />

    <div class="container-fluid">

        <div class="row">

            <div class="col-6">
                <h5 class="px-4 mt-3">Orders</h5>
                
                <div class="col-10">
                    <div class="container">
                       <a href="<?php echo Config::SITEURL?>productSellers/product_orders.php?user_id=<?php echo $_SESSION['user_id']; ?>" class="nav-link">
                        <div class="row border border-1 rounded shadow bg-body rounded">
                            <div class="col-auto p-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor"
                                    class="bi bi-box-seam-fill" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M15.528 2.973a.75.75 0 0 1 .472.696v8.662a.75.75 0 0 1-.472.696l-7.25 2.9a.75.75 0 0 1-.557 0l-7.25-2.9A.75.75 0 0 1 0 12.331V3.669a.75.75 0 0 1 .471-.696L7.443.184l.01-.003.268-.108a.75.75 0 0 1 .558 0l.269.108.01.003 6.97 2.789ZM10.404 2 4.25 4.461 1.846 3.5 1 3.839v.4l6.5 2.6v7.922l.5.2.5-.2V6.84l6.5-2.6v-.4l-.846-.339L8 5.961 5.596 5l6.154-2.461z" />
                                </svg>
                            </div>
                            <div class="col-auto py-4">
                                <p>Orders</p>
                                <p>5</p>
                            </div>
                        </div>
                      </a>
                    </div>
                </div>
                
            </div>
            
            
            <div class="col-6">
                <h5 class="px-4 mt-3"> Products</h5>
                
                <div class="col-10">
                    <div class="container">
                        <a href="<?php echo Config::SITEURL?>productSellers/products.php?user_id=<?php echo $_SESSION['user_id']; ?>" class="nav-link">
                        <div class="row border border-1 rounded shadow bg-body rounded">
                            <div class="col-auto p-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor"
                                    class="bi bi-box-seam-fill" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M15.528 2.973a.75.75 0 0 1 .472.696v8.662a.75.75 0 0 1-.472.696l-7.25 2.9a.75.75 0 0 1-.557 0l-7.25-2.9A.75.75 0 0 1 0 12.331V3.669a.75.75 0 0 1 .471-.696L7.443.184l.01-.003.268-.108a.75.75 0 0 1 .558 0l.269.108.01.003 6.97 2.789ZM10.404 2 4.25 4.461 1.846 3.5 1 3.839v.4l6.5 2.6v7.922l.5.2.5-.2V6.84l6.5-2.6v-.4l-.846-.339L8 5.961 5.596 5l6.154-2.461z" />
                                </svg>
                            </div>
                            <div class="col-auto py-4">
                                <p>Products</p>
                                <p>5</p>
                            </div>
                        </div>
                      </a>   
                    </div>
                </div>
                
            </div>
            

            
        </div>

    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>



