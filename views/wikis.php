<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./assets/images/logo.svg">
    <title>Wiki Admin Dashboard</title>
    <link rel="stylesheet" href="./assets/css/style.css">
    <style>
        .button-3 {
            appearance: none;
            background-color: #2ea44f;
            border: 1px solid rgba(27, 31, 35, .15);
            border-radius: 6px;
            box-shadow: rgba(27, 31, 35, .1) 0 1px 0;
            box-sizing: border-box;
            color: #fff;
            cursor: pointer;
            display: inline-block;
            font-family: -apple-system, system-ui, "Segoe UI", Helvetica, Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji";
            font-size: 14px;
            font-weight: 600;
            line-height: 20px;
            padding: 6px 16px;
            position: relative;
            text-align: center;
            text-decoration: none;
            user-select: none;
            -webkit-user-select: none;
            touch-action: manipulation;
            vertical-align: middle;
            white-space: nowrap;
        }

        .button-3:focus:not(:focus-visible):not(.focus-visible) {
            box-shadow: none;
            outline: none;
        }

        .button-3:hover {
            background-color: #2c974b;
        }

        .button-3:focus {
            box-shadow: rgba(46, 164, 79, .4) 0 0 0 3px;
            outline: none;
        }

        .button-3:disabled {
            background-color: #94d3a2;
            border-color: rgba(27, 31, 35, .1);
            color: rgba(255, 255, 255, .8);
            cursor: default;
        }

        .button-3:active {
            background-color: #298e46;
            box-shadow: rgba(20, 70, 32, .2) 0 1px 0 inset;
        }
    </style>
</head>

<body>

    <div class="container">
        <?php
        require_once('includes/dashboardNav.php');
        ?>
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
            <div class="details" style="margin:120px;width:100vw;">
                <div class="recentOrders">
                    <div class="cardHeader">
                        <h2>Recent Wikis</h2>
                    </div>

                    <table>
                        <thead>
                            <tr>
                                <td>Id</td>
                                <td>Title</td>
                                <td>status</td>
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
                                        <?php
                                        if ($wiki['statut'] == 0):
                                            ?>
                                            <span class="status pending">Pending</span>
                                        <?php endif; ?>
                                        <?php
                                        if ($wiki['statut'] == 1):
                                            ?>
                                            <span class="status delivered">Accepted</span>
                                        <?php endif; ?>
                                    </td>

                                    <td>
                                        <?php if ($wiki['statut'] == 0): ?>
                                            <form action="/acceptWiki?id=<?= $wiki['id'] ?>" method="post">
                                                <input type="hidden" name="wiki_id" value="<?= $wiki['id'] ?>">
                                                <button name="submit" type="submit" class="button-3">Accept</button>
                                            </form>
                                        <?php endif; ?>
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