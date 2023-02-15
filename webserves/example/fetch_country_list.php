<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>
    <form method="post">
        <table>
            <tr>
                <th>select photo</th>
                <td><input type="file" name="img"></td>
            </tr>

            <tr>
                <th>Email</th>
                <td><input type="text" name="email"></td>
            </tr>
            <tr>
                <th>password</th>
                <td><input type="passord" name="pass"></td>
            </tr>
            <tr>
                <th>Adress</th>
                <td><textarea name="add"></textarea></td>
            </tr>
            <!--call webservices to fecth all country list-->
            <tr>
                <th>select country</th>
                <td><select name="country">
                    <option value="">-select country-</option>
                    <?php
                    $url="http://country.io/names.json";
                    $countrylist=file_get_contents($url,true);
                    $data=json_decode($countrylist,true);
                    foreach($data as $country)
                    {
                    ?>
                    <option value="<?php echo $country;?>"><?php echo $country;?></option>
                    <?php    
                    }
                    ?>
                    </td>
                </tr>         
                  <!--call webservices to fatch all state list-->
                  <tr>
                    <th>select state</th>
                    <td><select name="state">
                        <option value="">-select state-</option>
                        <?php
                        $urll="http://localhost/corephp/webserves/example/fetch_country_list.php";
                        $statelist=file_get_contents($urll,true);
                        $data1=json_decode($statelist,true);
                        foreach($data1 as $state)
                        {
                        ?>
                        <option value="<?php echo $state;?>"><?php echo $state;?></o   <?php

                        }
                        ?>
                        </td>
                    </tr>select state 

                    <tr>
                        <td><input type="submit" name="sub" value="register"></td>
                    </tr>
                    </table>
                    </from>

                    </body>
                    </html>        
                     

