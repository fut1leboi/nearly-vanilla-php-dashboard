<?php
if(!$data){
    die('no data passed');
}
?>

<table class="table table-striped">
    <thead>
    <tr>
        <?php
        foreach($data[0] as $key=>$item){

            echo "
                      <th>" . $key . "</th>
                    ";
        }

        ?>
        <th>Controls</th>
    </tr>
    </thead>
    <tbody>
    <?php
    $output = '';
    foreach($data as $item){
        echo '<tr scope="row">';
        foreach($item as $keys){
            echo "
                          <th>" . $keys . "</th>
                    ";
        }
        echo '<th><a href="/index.php?method=edit' . $scope .'&id=' . $item['id'] . '">edit</a></th>';
        echo '<th><a href="/index.php?method=remove' . $scope .'&id=' . $item['id'] . '">remove</a></th>';
        echo '</tr>';
    }

    ?>
    </tbody>
</table>
