<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>Stay Indoors</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script async src="https://cdn.jsdelivr.net/npm/mathjax@2/MathJax.js?config=TeX-AMS-MML_CHTML"></script>

</head>

<body>
    <div class="container">
        

        <form action="insertquestion.php" method="POST">
    
            <br>
            <!--button type="button" class="btn btn-success btn-lg btn-block" id="btn_uploadfile" value="Upload"
                onclick="uploadFile();">Upload</button-->

            <div class="input-group input-group-lg">
                <div class="input-group-prepend"></div>
                <textarea type="text" rows="6" class="form-control" placeholder="question"
                    aria-label="Sizing example input" name="question" aria-describedby="inputGroup-sizing-lg"></textarea>
            </div>
            <div class="input-group input-group-sm">
                <div class="input-group-prepend"></div>
                <textarea type="text" rows="1" class="form-control" placeholder="answer"
                    aria-label="Sizing example input" name="answer" aria-describedby="inputGroup-sizing-lg"></textarea>
            </div>
            <div class="input-group input-group-sm">
                <div class="input-group-prepend"></div>
                <textarea type="text" rows="1" class="form-control" placeholder="catagory"
                    aria-label="Sizing example input" name="catagory" aria-describedby="inputGroup-sizing-lg"></textarea>
            </div>

            <br>
            
            <button type="submit" class="btn btn-success btn-lg btn-block">Post</button>
            <br>
            <br>
            
        </form>
    </div>
</body>

<script type="text/javascript" src="script/website.js"></script>

<script type="text/javascript">
   
</script>

</html>