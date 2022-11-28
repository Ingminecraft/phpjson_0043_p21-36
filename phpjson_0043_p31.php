<!doctype html>
<html>
<head>
    <title>JSON Data in PHP</title>
</head>
<body>
    <br>
    <h3>How to Load JSON Data in PHP</h3><br>
    <h4>Video Title</h4>
    <?php
        $data = file_get_contents('phpjson_0043_p27.json');
        $data = json_decode($data, true);
        foreach($data as $row)
        { echo $row["video_title"].'<br>';}
    ?>
</body>
</html>