<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./assets/images/logo.svg">
    <title>Wiki Admin Dashboard</title>
    <link rel="stylesheet" href="./assets/css/style.css">
</head>

<body>
    <!-- =============== Navigation ================ -->

    <div class="container">
        <?php
        require_once('includes/dashboardNav.php');
        ?>
        <!-- ========================= Main ==================== -->
        <div class="main">
            <div class="topbar">
                <div class="toggle">
                    <ion-icon name="menu-outline"></ion-icon>
                </div>

                <div class="search">
                    <label>
                        <input type="text" placeholder="Search here">
                        <ion-icon name="search-outline"></ion-icon>
                    </label>
                </div>

                <div class="user">
                    <img src="./assets/images/uploads/person1.svg" alt="">
                </div>
            </div>

            <!-- ======================= Cards ================== -->
            <div class="cardBox">
                <div class="card">
                    <div>
                        <div class="numbers">1,504</div>
                        <div class="cardName">Daily Views</div>
                    </div>

                    <div class="iconBx">
                        <ion-icon name="eye-outline"></ion-icon>
                    </div>
                </div>

                <div class="card">
                    <div>
                        <div class="numbers">80</div>
                        <div class="cardName">Sales</div>
                    </div>

                    <div class="iconBx">
                        <ion-icon name="cart-outline"></ion-icon>
                    </div>
                </div>

                <div class="card">
                    <div>
                        <div class="numbers">284</div>
                        <div class="cardName">Comments</div>
                    </div>

                    <div class="iconBx">
                        <ion-icon name="chatbubbles-outline"></ion-icon>
                    </div>
                </div>

                <div class="card">
                    <div>
                        <div class="numbers">$7,842</div>
                        <div class="cardName">Earning</div>
                    </div>

                    <div class="iconBx">
                        <ion-icon name="cash-outline"></ion-icon>
                    </div>
                </div>
            </div>

            <!-- ================ Order Details List ================= -->
            <div class="details">
                <div class="recentOrders">
                    <div class="cardHeader">
                        <h2>Recent Categories</h2>
                        <a href="/addCat" class="btn">Add</a>
                    </div>

                    <table>
                        <thead>
                            <tr>
                                <td>Id</td>
                                <td>Name</td>
                                <td></td>
                            </tr>
                        </thead>

                        <tbody>
                            <?php foreach ($category as $cat): ?>
                                <tr>
                                    <td>
                                        <?= $cat['id'] ?>
                                    </td>
                                    <td>
                                        <?= $cat['name'] ?>
                                    </td>
                                    <td>
                                        <a class="status inProgress"
                                            href="http://localhost:8000/update?id=<?= $cat['id'] ?>">Update</a>
                                        <a class="status return"
                                            href="http://localhost:8000/deleteAction?id=<?= $cat['id'] ?>"
                                            onclick="return confirm('Do you really want to Delete ?');">DELETE</a>
                                    </td>

                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
                <!-- ================= New Customers ================ -->
                <div class="recentCustomers">
                    <div class="cardHeader">
                        <h2>Recent Users</h2>
                    </div>

                    <table>
                        <?php foreach ($user as $client): ?>
                            <tr>
                                <td width="60px">
                                    <div class="imgBx"><img src="./assets/images/uploads/customer01.jpg" alt=""></div>
                                </td>
                                <td>
                                    <h4>
                                        <?= $client['firstname'] ?><br> <span>
                                            <?= $client['address'] ?>
                                        </span>
                                    </h4>
                                </td>
                            </tr>
                        <?php endforeach; ?>

                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- =========== Scripts =========  -->
    <script src="../public/assets/javascript/main.js"></script>

    <!-- ====== ionicons ======= -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>