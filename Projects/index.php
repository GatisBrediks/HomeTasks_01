<?php

$search = $_GET['search'] ?? '';
$offset = $_GET['offset'] ?? 0;
$limit = 20;
$data = json_decode(file_get_contents("https://data.gov.lv/dati/lv/api/3/action/datastore_search?q={$search}&offset={$offset}&resource_id=25e80bf3-f107-4ab4-89ef-251b5b9374e9&limit={$limit}"));

$table = [];
foreach ($data as $a => $item) {
    $table[$a] = $item;
}
?>

<form method="get" action="/">
    <input name="search" value="" />
    <button type="submit">Submit</button>
</form>

<table border="dotted">

    <h1>Reģistrs</h1>

    <thead>
    <th>
        Veids
    </th>
    <th>
        Nosaukums
    </th>
    <th>
        Reģistrācijas numurs
    </th>
    <th>
        Adrese
    </th>

    </thead>
    <?php foreach ($table["result"]->records as $record) { ?>
        <tr>
            <td>
                <?php echo $record->type;
                ?>
            </td>
            <td>
                <?php echo $record->name;
                ?>
            </td>
            <td>
                <?php echo $record->regcode;
                ?>
            </td>
            <td>
                <?php echo $record->address;
                ?>
            </td>
        </tr>
    <?php } ?>
</table>

<?php echo '<br>' ?>

<form method="get" action="/">
    <?php if ($offset > 0): ?>
    <button type="submit" name="offset" value="<?php echo $offset-$limit; ?>" >prev</button>
    <?php endif; ?>
    <?php if (count($table["result"]->records) >= $limit): ?>
    <button type="submit" name="offset" value="<?php echo $offset+$limit; ?>">next</button>
    <?php endif; ?>
</form>



