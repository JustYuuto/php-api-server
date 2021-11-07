<!doctype html>
<html lang="en">
<body>
    <!--
    This page is for testing CORS, don't open it on the same port as your web server otherwise it will not work!
    -->
    <script>
        (async () => {
            const corsTest = await fetch('http://127.0.0.1:8000/hello').then(res => res.json());
            console.log(corsTest);
        })();
    </script>
</body>
</html>