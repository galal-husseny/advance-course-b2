<?php 
define('SUPPORTED_EXTENSIONS',['php','txt','json']);
define("PATH",'media' . DIRECTORY_SEPARATOR);
if($_SERVER['REQUEST_METHOD'] == "POST"){
    if(isset($_POST['create-folder'])){
        // create folder
        mkdir(PATH  . $_POST['folder']);
        $folderMessage =  "<div class='alert alert-success text-center'> {$_POST['folder']} Created Successfully </div>";
    }

    if(isset($_POST['create-file'])){
        // create file
        $fileExtension = pathinfo($_POST['file'])['extension'];
        $fileName = pathinfo($_POST['file'])['basename'];
        if(! in_array($fileExtension,SUPPORTED_EXTENSIONS)){
            $error = "<div class='alert alert-danger text-center'> Unsupported File </div>";
        }
        $content = $_POST['content'];
        if($fileExtension == 'php'){
            $content = "<?php {$content} ?>";
        }elseif($fileExtension == 'json'){
            $content = "{ {$content} }";
        }
        file_put_contents(PATH  . $fileName,$content);
        $fileMessage = "<div class='alert alert-success text-center'> {$fileName} Created Successfully </div>";
    }
}
?>
<!doctype html>
<html lang="en">

<head>
    <title>Media</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row mt-5">
            <div class="col-6">
                <h1 class="text-dark text-center">Create Folder</h1>
                <?= $folderMessage ?? "" ?>
                <form action="" method="post">
                    <div class="form-group">
                        <label for="folder">Folder Name</label>
                        <input type="text" name="folder" id="folder" class="form-control" placeholder=""
                            aria-describedby="helpId">
                    </div>
                    <button class="btn btn-outline-dark" name="create-folder"> Create </button>
                </form>
            </div>
            <div class="col-6">
            <h1 class="text-dark text-center">Create File</h1>
            <?= $error ?? "" ?>
            <?= $fileMessage ?? "" ?>
                <form action="" method="post">
                    <div class="form-group">
                        <label for="folder">File Name</label>
                        <input type="text" name="file" id="folder" class="form-control" placeholder="example.txt"
                            aria-describedby="helpId">
                            <small> Supported Files <b><?= implode(' , ',SUPPORTED_EXTENSIONS) ?> </b> </small>
                    </div>
                    <div class="form-group">
                        <textarea name="content" id="" cols="30" rows="10" class="form-control"></textarea>
                    </div>
                    <button class="btn btn-outline-dark" name="create-file"> Create </button>
                </form>
            </div>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>