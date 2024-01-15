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
    <div class="container">
        <div class="navigation">
            <ul>
                <li>
                    <a href="#">
                        <span class="title">Wiki Author</span>
                    </a>
                </li>

                <li>
                    <a href="/">
                        <span class="icon">
                            <ion-icon name="home-outline"></ion-icon>
                        </span>
                        <span class="title">Home</span>
                    </a>
                </li>
                <li>
                    <a href="/DashboardAuthor">
                        <span class="icon">
                            <ion-icon name="chatbubble-outline"></ion-icon>
                        </span>
                        <span class="title">Wikis</span>
                    </a>
                </li>

                <li>
                    <a href="/logout">
                        <span class="icon">
                            <ion-icon name="log-out-outline"></ion-icon>
                        </span>
                        <span class="title">Sign Out</span>
                    </a>
                </li>
            </ul>
        </div>
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
            <div class="details">
                <div class="recentOrders">
                    <div class="cardHeader">
                        <h2>WIKIS</h2>
                        <a href="/add" class="btn">Add</a>
                    </div>

                    <table style="width:80vw; cursor:pointer;">
                        <thead>
                            <tr>
                                <td>Id</td>
                                <td>title</td>
                                <td>Description</td>
                                <td>created_at</td>
                                <td>category</td>
                                <td></td>
                            </tr>
                        </thead>

                        <tbody>
                            <?php foreach ($wikis as $wiki): ?>
                                <tr>
                                    <td>
                                        <?= $wiki['id'] ?>
                                    </td>
                                    <td>
                                        <?= $wiki['title'] ?>
                                    </td>
                                    <td>
                                        <?= $wiki['description'] ?>
                                    </td>
                                    <td>
                                        <?= $wiki['created_at'] ?>
                                    </td>
                                    <td>
                                        <?= $wiki['name'] ?>
                                    </td>
                                    <td>
                                        <a class="status inProgress"
                                            href="http://localhost:8000/updateWiki?id=<?= $wiki['id'] ?>">Update</a>
                                        <a class="status return"
                                            href="http://localhost:8000/deleteWikiAction?id=<?= $wiki['id'] ?>"
                                            onclick="return confirm('Do you really want to Delete ?');">DELETE</a>
                                    </td>

                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <script src="../public/assets/javascript/main.js"></script>

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>