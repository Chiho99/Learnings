<tr>
    <th>商品番号</th>
    <th>商品名</th>
    <th>価格</th>
</tr><br>
<?php
$pdo = new PDO('mysql:host=localhost;dbname=shop;charset=utf8','staff', 'password');

$sql = $pdo->prepare('insert into product values(null, ?, ?)');
if ($sql->execute([$_REQUEST['name'], $_REQUEST['price']])){
    echo '追加に成功しました。';
}else{
    echo '追加に失敗しました。';
}

$sql = $pdo->prepare('select*from product where name like ?');
$sql ->execute(['%'.$_REQUEST['name'].'%']);

foreach($sql as $row){
    echo '<tr>';
    echo '<td>', htmlspecialchars($row['id']), '</td>';
    echo '<td>', htmlspecialchars($row['name']), '</td>';
    echo '<td>', htmlspecialchars($row['price']),  '</td>';
    echo '</tr>';
    echo "¥n";
    echo '<br>';
}
?>
</table>