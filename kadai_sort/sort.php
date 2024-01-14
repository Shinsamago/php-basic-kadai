<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編(sort)</title>
</head>

<body>
    <p>
        <?php
        function sort_2way($nums, $order)
        {
            if ($order === 'ascending_order') {
                echo '昇順にソートします。<br>';
                sort($nums);
                foreach ($nums as $val) {
                    echo "$val<br>";
                }
            } else {
                echo '降順にソートします。<br>';
                rsort($nums);
                foreach ($nums as $val) {
                    echo "$val<br>";
                }
            }
        }

        $nums = [15, 4, 18, 23, 10];
        echo sort_2way($nums, 'ascending_order');
        echo sort_2way($nums, 'descending_order');
        ?>
    </p>
</body>

</html>
