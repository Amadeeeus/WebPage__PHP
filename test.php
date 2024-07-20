<?php
print_r($_GET);

include "./site/adm_functions.php";
$var_1=1;
$file_array = [$id => $file_array_pre];
$page_id =1;
while($var_1<10)
{
    $var_1++;
}
get_all_tables();
?>
<form action="test" method="get">
    <select name="test">
        <option name="test" value="php_basic">php_basic</option>
        <option name="test"value="php_pre">php_pre</option>
        <option name="test"value="html">html</option>
        <option name="test"value="css">css</option>
        <option name="test"value="framework">framework</option>
        <option name="test"value="sql">sql</option>
        <input type="submit" name="submit" value="1">
    </select>
</form>

<form action="test" method="get">
    <?php
    for($i =1; $i< $var_1; $i++)
    {
        ?>
        <input type="submit" name="submit" value="<?php echo  $page_id?>">
        <?php
        $page_id++;
    }
 
    $role = 2; 
    switch($role)
        {
            case $role == 1: $roleid = "admin"; break;
            case $role == 2: $roleid = "writter"; break;
            case $role == 3: $roleid = "regular"; break;
        
        }
        echo $roleid;
        switch($roleid){
            case $roleid=='admin': echo "!"; break;
            case $roleid=='writter': echo "!!"; break;
        }
    ?>
</form>