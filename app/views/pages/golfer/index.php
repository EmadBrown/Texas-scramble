<?php

?>
    <div class="container-fluid">
        <div class="row">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Geslacht</th>
                    <th scope="col">Handicap</th>
                </tr>
                </thead>
                <tbody>
                <?php
                foreach ($data['golfers'] as $key => $golfer) {

                    $gender = $golfer->gender == 'M' ? "Man" : "Vrouw";
                    echo "<tr>
                            <th scope='row'>$golfer->golfer_id</th>
                            <td>$golfer->name</td>   
                            <td>$gender</td>
                            <td>$golfer->handicap</td>
                        </tr>";

                }
                ?>
                </tbody>
            </table>
        </div>
    </div>
<?php
