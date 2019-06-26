<?php
// 常见的PHP中经典的递归思路面试题

// 第一题:
// 累加求和1-100;

function sum($n)
{
    if ($n > 1) {
        return $n + sum($n - 1);
        // sum（100）=100+sum(99);以此类推往下递归
        // sum(99)=99+sum(98);
    }
    return 1;
}

echo sum(5), '<hr>';

// 第二题:阶乘
function factorial($n)
{
    if ($n > 1) {
        return $n * factorial($n - 1);
    }
    return 1;
    // factorial（100）=100*factorial（99）;以此类推往下递归
    // factorial(99)=99*factorial(98);
    // .....
    // factorial(1)=1;
    // factorial(2)=2*(1);
    // factorial(3)=3*(2*(1));
    // factorial(4)=4*(3*(2*(1)));
    // factorial(5)=5*(4*(3*(2*1)));
    // ......
}

echo factorial(5), '<hr>';

// 第三题:求幂运算

function mi($n, $k)
{
    if ($k == 0) {
        return 1;
    } else {
        return $n * mi($n, $k - 1);
    }
}

echo mi(5, 3), '<hr>';
// 第四题:字符串反转(递归逆序输出字符串)

$str = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';

function reverse($str)
{
    if (strlen($str) > 0) {
        reverse(substr($str, 1));
    }
    echo substr($str, 0, 1);
    return;
}

echo reverse($str), '<hr>';

$str1 = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';

function reve($str)
{
    if (($str == null) || (strlen($str) <= 1)) {
        echo $str;
    } else {
        echo ($str[strlen($str) - 1]);

        reve(substr($str, 0, (strlen($str) - 1)));
    }

}
echo reve($str1), '<hr>';
