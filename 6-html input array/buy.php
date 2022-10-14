<?php 
// request method must be POST
if($_SERVER['REQUEST_METHOD'] == "GET"){
    echo "Method Not Allowed 405";
    http_response_code(405);die;
}

?>
<!doctype html>
<html lang="en">

<head>
    <title>HTML INPUT ARRAY</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <form action ="result.php" method="post">
        <div class="container">
            <div class="row mt-5">
                <div class="col-12 text-primary text-center my-5">
                    <h1> Choose Your Fav Fruits</h1>
                </div>
                <?php for($counter = 0; $counter < $_POST['number_of_members'];$counter++): ?>
                <div class="col-4">
                    <div class="member1">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" name="members[<?= $counter ?>][name]" id="name" class="form-control"
                                placeholder="" aria-describedby="helpId">
                        </div>
                        <div class="form-group">
                            <div class="form-check">
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="male<?= $counter ?>" name="members[<?= $counter ?>][gender]"
                                        class="custom-control-input" value="male">
                                    <label class="custom-control-label" for="male<?= $counter ?>">
                                    Male
                                    </label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="female<?= $counter ?>" name="members[<?= $counter ?>][gender]"
                                        class="custom-control-input" value="female">
                                    <label class="custom-control-label" for="female<?= $counter ?>">
                                    Female
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input"
                                        name="members[<?= $counter ?>][fruits][]" id="" value="apple">
                                    Apple
                                </label>
                            </div>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input"
                                        name="members[<?= $counter ?>][fruits][]" id="" value="banana">
                                    Banana
                                </label>
                            </div>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input"
                                        name="members[<?= $counter ?>][fruits][]" id="" value="strawberry">
                                    Strawberry
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endfor ?>
                <div class="col-12">
                    <button class="btn btn-primary form-control"> Choose </button>
                </div>
            </div>
        </div>
    </form>
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

<?php 
// $members = [
//     "members"=>[
//         [
//             'name'=>'galal',
//             'gender'=>'male',
//             'fruits'=>[
//                 'apple','banana'
//             ]
//         ],
//         [
//             'name'=>'fatma',
//             'gender'=>'female',
//             'fruits'=>[
//                 'strawberry'
//             ]
//         ]
//     ]
// ];
// echo $members['members'][0]['fruits'][0];
?>