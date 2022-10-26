<!--Write a PHP script that creates the following table (use for loops). Go to the editor-->
<!---->
<!--1	2	3	4	5	6	7	8	9	10-->
<!--2	4	6	8	10	12	14	16	18	20-->
<!--3	6	9	12	15	18	21	24	27	30-->
<!--4	8	12	16	20	24	28	32	36	40-->
<!--5	10	15	20	25	30	35	40	45	50-->
<!--6	12	18	24	30	36	42	48	54	60-->
<!--7	14	21	28	35	42	49	56	63	70-->
<!--8	16	24	32	40	48	56	64	72	80-->
<!--9	18	27	36	45	54	63	72	81	90-->
<!--10	20	30	40	50	60	70	80	90	100-->

<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<body>
<h3>Nested For Loop</h3>
<table width="270px" cellspacing="0px" cellpadding="0px" border="1px">
    <!-- cell 270px wide (8 columns x 60px) -->
    <?php
    for ($row=1;$row<=10;$row++)
    {
        echo "<tr>";

        for ($col=1;$col<=10;$col++)
        {
            $res=$row*$col;
            echo "<td>".$res."</td>";
        }
        echo "</tr>";
    }

    ?>
</table>
</body>
</html>