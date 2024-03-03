<?php
include __DIR__ . "/./config/init.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <title>Document</title>

</head>

<body>

    <div class="row d-flex justify-content-center mt-5">

        <div class="col-6">


            <form method="GET"
                class="d-flex align-items-center justify-content-between p-3 mb-5 border border-1 rounded">

                <div>
                    <input class="form-check-input" type="checkbox" name="parking-checker" id="parking-checker" 
                        <?php echo $parking_check ? 'checked' : '' ?>
                    >

                    <label class="form-check-label" for="flexCheckChecked">
                        Parking
                    </label>
                </div>

                <div>

                    <span>Vote</span>

                    <input class="form-control" type="number" min="0" max="5" name="vote-filter">

                </div>

                <button class="btn btn-primary">Search</button>

            </form>

            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Description</th>
                        <th scope="col">Parking</th>
                        <th scope="col">Vote</th>
                        <th scope="col">Center Distance</th>
                    </tr>
                </thead>

                <tbody>
                    <?php foreach ($hotels as $hotel): ?>

                        <tr>
                            <td>
                                <?= $hotel['name'] ?>
                            </td>
                            <td>
                                <?= $hotel['description'] ?>
                            </td>

                            <?php if ($hotel['parking'] == true): ?>

                                <?php $hotel['parking'] = 'presente' ?>

                            <?php elseif ($hotel['parking'] == false): ?>

                                <?php $hotel['parking'] = 'non presente' ?>

                            <?php endif; ?>

                            <td>
                                <?= $hotel['parking'] ?>
                            </td>


                            <td>
                                <?= $hotel['vote'] ?>
                            </td>
                            <td>
                                <?= $hotel['distance_to_center'] ?>
                            </td>
                        </tr>


                    <?php endforeach ?>

                </tbody>
            </table>

        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>