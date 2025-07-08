<!DOCTYPE html>
<html>
  <head lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Hurric4ne#2268">
    <title>Diablo 3 Itemlevel List</title>
    <link rel="stylesheet" href="assets/css/main.css">
    <script src="assets/javascript/sorttable.js"></script>
    <script src="assets/javascript/filter.js" ></script>
  </head>

  <body>
    <h1>Diablo 3 Item-Level 2.6.1<br/><span>sortable / filterable</span></h1>

    <?php 
        //API-Request only if this file doesn't exist (delete results.json to update, requires about 7 minutes)
        if (!file_exists('assets/results.json'))
        {
            //increase php max_exec_time so it doesn't cancel the request
            ini_set('max_execution_time', 3600);

            $url_prefix = 'https://eu.api.battle.net/d3/data/item/';
            $url_suffix = '?locale=en_GB&apikey=27hd5khrafctn6dv8g9egtbt25qbzcqz';

            //get the names from all items based on d3planner items.json (Kadala.Items)
            $json = file_get_contents("assets/items.json");
            $items = json_decode($json, true);
            $itemnames = array();
            $tmp = 0;

            foreach ($items as $key => $value)
            {
                $itemnames[$tmp] = str_ireplace(" ", "-", $value['name']);
                $itemnames[$tmp] = str_ireplace("'", "", $itemnames[$tmp]);
                $itemnames[$tmp] = str_ireplace(".", "", $itemnames[$tmp]);
                $itemnames[$tmp] = str_ireplace(",", "", $itemnames[$tmp]);

                $itemnames[$tmp] = strtolower($itemnames[$tmp]);
                $tmp++;
            }

            //specific exceptions due to blizzard's item naming...
            //subject to change in every patch
            for ($i=0; $i < 645; $i++)
            {
                if($itemnames[$i] == "eight-demon-boots")
                {
                    $itemnames[$i] = "eightdemon-boots";
                }
                if($itemnames[$i] == "eun-jang-do")
                {
                    $itemnames[$i] = "eunjangdo";
                }
                if($itemnames[$i] == "bul-kathoss-solemn-vow")
                {
                    $itemnames[$i] = "bulkathoss-solemn-vow";
                }
                if($itemnames[$i] == "bul-kathoss-warrior-blood")
                {
                    $itemnames[$i] = "bulkathoss-warrior-blood";
                }
                if($itemnames[$i] == "bul-kathoss-wedding-band")
                {
                    $itemnames[$i] = "bulkathoss-wedding-band";
                }
                if($itemnames[$i] == "mantle-of-the-upside-down-sinners")
                {
                    $itemnames[$i] = "mantle-of-the-upsidedown-sinners";
                }
                if($itemnames[$i] == "in-geom")
                {
                    $itemnames[$i] = "ingeom";
                }
                if($itemnames[$i] == "buriza-do-kyanon")
                {
                    $itemnames[$i] = "burizado-kyanon";
                }

                $request_uri = $url_prefix.$itemnames[$i].$url_suffix;
                $content_uri = file_get_contents($request_uri);
                $item_response = json_decode($content_uri, true);
                $file[] = array("item_name" => $item_response['name'], "item_level" => $item_response['itemLevel'], "required_level" => $item_response['requiredLevel']);
            }

            $response['items'] = $file;
            //write everything in this file
            $fp = fopen('assets/results.json', 'w');
            fwrite($fp, json_encode($response));
            fclose($fp);
        }
    ?>
    <div class="input-wrapper">
        <p class="info-text">"Item level" is the relevant level for Kadala.<br/> At level 1, any item up to iLvl 16 is available.</p>
        <input type="text" id="nameInput" onkeyup="filterItems()" placeholder="Item Name">
        <input type="number" id="levelInputMin" onkeyup="filterItems()" placeholder="min">
        <input type="number" id="levelInputMax" onkeyup="filterItems()" placeholder="max">
    </div>

    <table id="table" cellspacing="0" class="table sortable">
        <tr>
            <th>Item Name</th>
            <th>Item Level</th>
            <th>Required Level</th>
        </tr>
        <?php 
        if (file_exists('assets/results.json'))
        {
            $json = file_get_contents("assets/results.json");
            $items = json_decode($json, true);

            for ($i=0; $i < sizeof($items['items']); $i++)
            {
                echo "<tr>";
                echo "<td>".$items['items'][$i]['item_name']."</td>";
                echo "<td class='lvl'>".$items['items'][$i]['item_level']."</td>";
                echo "<td class='lvl'>".$items['items'][$i]['required_level']."</td>";
                echo "</tr>";
            }
        }
        ?>
    </table>
    <footer>
        ©2017 by <a href="https://www.reddit.com/user/Hurric4n/">Hurric4ne#2268</a>, sortable.js © by <a href="http://www.kryogenix.org/code/browser/sorttable/">Stuart Langridge</a>
    </footer>
  </body>
</html>
