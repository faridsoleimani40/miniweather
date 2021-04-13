<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Weather Simple Project |faridsoleimani</title>
    <link rel="stylesheet" href="css/app.css">

</head>
<style>
    body {
        background-color: rgba(8, 148, 27, 0.788);
    }
</style>

<body>
    <div class="container pb-3 mb-3 mt-3 pt-3">
        <div class="row">
            <div class="col-sm-6">
                <div class="card">
                    <h3>Current Temp Madrid</h3>
                    <h4>
                        {{ $madrid['main']['temp']}}

                    </h4>

                </div>
            </div>
            <div class="col-sm-6">
                <div class="card">
                    <h3>Current Temp Barcelona</h3>

                    <h4>
                        {{ $barcelona['main']['temp']}}

                    </h4>

                </div>
            </div>
        </div>
        <br>

    </div>
    <div id="app">
         <div class="card">
            <v-btn depressed color="primary">
                Primary
            </v-btn>
         </div>

    </div>



    <script src="js/app.js"></script>

</body>

</html>
