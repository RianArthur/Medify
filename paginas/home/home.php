<?php
include_once '../../componentes/menu/menu.php';
?>

<html>
    <head>
        <title>Sac | Medify</title>
        <link rel = "stylesheet " href ="home.css">
        <link rel = "stylesheet " href ='../../componentes/menu/menu.css'>
    <body>
        <?php
            include_once '../../componentes/menu/menu.php';
        ?>
         <section class = "pagina">
            <header>
                <h1>Relatório</h1>
            </header>

    <div class ="relatorio">
        <table>
            <tr>
                <th>Medicamento</th>
                <th>Quantidade em estoque</th>
                <th>Quantidade a receber</th>
                <th>Quantidade a vender</th>
            </tr>
            <tr>
                <td>Histamin</td>
                <td>100</td>
                <td>39</td>
                <td>61</td>
            </tr>
            <tr>
                <td>Merthiolate</td>
                <td>238</td>
                <td>172</td>
                <td>63</td>
            </tr>
            <tr>
                <td>Cimegripe</td>
                <td>392</td>
                <td>78</td>
                <td>91</td>
            </tr>
            <tr>
                <td>Tadalafila</td>
                <td>92</td>
                <td>53</td>
                <td>90</td>
            </tr>
        </table>
    </div>
        </section>
    </body>
</html>