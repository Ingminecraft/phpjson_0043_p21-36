<!DOCTYPE html>
<html>
<body>
    <h2>Create Object from JSON String</h2>
    <p id='demo'></p>
    <script>
        var txt = '{"name": "Chethamas", "age": 20, "address": "Burapha University"}'
        var obj = JSON.parse(txt);
        document.getElementById("demo").innerHTML=obj.name + ", "+ obj.age;
    </script>
</body>
</html>